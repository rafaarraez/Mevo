<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Softon\SweetAlert\Facades\SWAL;
use Auth;
use Redirect;
use App\Products;
use App\User;
use App\ReservationProducts;
use App\Mail\NewProduct;
use App\Mail\NewReserve;
use App\Mail\changeStatusToOrders;
class ProductsController extends Controller
{
    /**
     * Reglas de validación para los archivos subidos de un producto.
     * Restringe tipo y tamaño para impedir subir ejecutables (.php, etc.).
     */
    private function fileValidationRules()
    {
        return [
            'img'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'coa'  => 'nullable|mimes:pdf,jpg,jpeg,png|max:8192',
            'msds' => 'nullable|mimes:pdf,jpg,jpeg,png|max:8192',
        ];
    }

    /**
     * Guarda un archivo subido con nombre ALEATORIO (no predecible ni
     * sobrescribible) dentro de public/img/files/<subdir>/ y devuelve su ruta pública.
     */
    private function storeUploadedFile($file, $subdir)
    {
        $file_name = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(base_path() . '/public/img/files/' . $subdir . '/', $file_name);

        return '/img/files/' . $subdir . '/' . $file_name;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Products::select('products.*', 'products.quantity AS cantidad_total')
                                ->where('products.is_delete', false)
                                ->selectRaw('SUM(CASE WHEN r.status != 4 THEN r.quantity ELSE 0 END ) AS total_reservado')
                                ->selectRaw('(products.quantity - SUM(CASE WHEN r.status != 4 THEN r.quantity ELSE 0 END )) AS total_disponible')
                                ->leftjoin('reservation_products AS r', 'r.product_id', '=', 'products.id')
                                ->groupBy('products.id')
                                ->get();

        return view('admin.products.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->fileValidationRules());

        $product = new Products();
        $inputs = request()->all();

        $product->name              = $inputs['name'];
        $product->synonymous        = $inputs['synonymous'];
        $product->arrival_location  = $inputs['arrival_location'];
        $product->origin_product    = $inputs['origin_product'];
        $product->presentation      = $inputs['presentation'];
        $product->reserve_price     = $inputs['reserve_price'];
        $product->sale_price        = $inputs['sale_price'];

        if ($request->hasFile('img')) {
            $product->file = $this->storeUploadedFile($request->file('img'), 'img');
        }

        if ($request->hasFile('coa')) {
            $product->coa = $this->storeUploadedFile($request->file('coa'), 'coa');
        }

        if ($request->hasFile('msds')) {
            $product->msds = $this->storeUploadedFile($request->file('msds'), 'msds');
        }

        $product->deadline = $inputs['deadline'];
        $product->arrival_to = $inputs['arrival_to'];
        $product->quantity = $inputs['quantity'];

        $product->save();

        $usuarios = User::all();
        foreach($usuarios as $item){
            $data = array();
            $data['email'] = $item->email;
            $data['name'] = $item->name;
            $data['product_name'] = $inputs['name'];
            $data['origin'] = $inputs['origin_product'];
            $data['arrival_location'] = $inputs['arrival_location'];
            $data['presentation'] = $inputs['presentation'];
            $data['quantity'] = $inputs['quantity'];
            
            $correo = $item->email;
            try{
                Mail::to($correo)->queue(new NewProduct($data));
            }catch (\Exception $e) {
                return back()->with('error' , 'Error al enviar el mensaje: ' . $e->getMessage());
            }
        }

        SWAL::message('Registro exitoso!','','success',['timer'=>5000]);
        return Redirect::to('/admin/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::findOrFail($id);

        return view('admin.products.edit')->with(['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->fileValidationRules());

        $product = Products::findOrFail($id);

        $inputs = request()->all();

        $product->name = $inputs['name'];
        $product->synonymous = $inputs['synonymous'];

        if ($request->hasFile('coa')) {
            $product->coa = $this->storeUploadedFile($request->file('coa'), 'coa');
        }

        if ($request->hasFile('msds')) {
            $product->msds = $this->storeUploadedFile($request->file('msds'), 'msds');
        }

        if ($request->hasFile('img')) {
            // Antes se guardaba en $product->img (columna inexistente); la columna real es 'file'.
            $product->file = $this->storeUploadedFile($request->file('img'), 'img');
        }
        $product->reserve_price     = $inputs['reserve_price'];
        $product->sale_price        = $inputs['sale_price'];
        $product->deadline          = $inputs['deadline'];
        $product->arrival_to        = $inputs['arrival_to'];
        $product->quantity          = $inputs['quantity'];
        $product->arrival_location  = $inputs['arrival_location'];
        $product->origin_product    = $inputs['origin_product'];
        $product->presentation      = $inputs['presentation'];
        $product->save();

        SWAL::message('Actualización exitosa!','','success',['timer'=>5000]);

        return Redirect::to('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Products::find($id);

        $product->delete();

        SWAL::message('Eliminado correctamente!','','success',['timer'=>5000]);

        return redirect('products');
    }

    public function hiddenProduct($id)
    {

        $product = Products::find($id);

        $product->is_delete = true;

        $product->save();

        SWAL::message('Producto sacado de disponibilidad correctamente!','','success',['timer'=>5000]);

        return Redirect::to('/admin/products');
    }

    public function detailsProduct($id){
        $product = Products::find($id);
        $actions_products = ReservationProducts::where('product_id', $id)->get();
        
        return view('admin.products.details')->with(compact('product', 'actions_products'));
    }

    public function getCanceledProducts(){
            $products = Products::select('products.*', 'products.quantity AS cantidad_total')
                ->where('products.is_delete', true)
                ->selectRaw('SUM(CASE WHEN r.status != 4 THEN r.quantity ELSE 0 END ) AS total_reservado')
                ->selectRaw('(products.quantity - SUM(CASE WHEN r.status != 4 THEN r.quantity ELSE 0 END )) AS total_disponible')
                ->leftjoin('reservation_products AS r', 'r.product_id', '=', 'products.id')
                ->groupBy('products.id')
                ->get();

        return view('admin.products.canceled_products')->with(['products' => $products]);
    }

    public function reserveProduct(Request $request, $userId, $productId){

        $product = Products::find($productId);
        // Seguridad: la reserva siempre es a nombre del usuario autenticado (se ignora el {user} de la URL).
        $user = Auth::user();
        $inputs = request()->all();

        if ((int)$inputs['quantity'] > (int)$inputs['availible_quantity']) {
            # code...
            SWAL::message('Ingrese una cantidad disponible','','error',['timer'=>5000]);
            return redirect()->back();

        }else{

            $reservationProduct = new ReservationProducts();
            $reservationProduct->user_id = $user->id;
            $reservationProduct->product_id = $product->id;
            $reservationProduct->quantity = $inputs['quantity'];
            $reservationProduct->is_reserve = $inputs['is_reserve'];

            if(isset($inputs['delivery'])){
                $reservationProduct->delivery = 1;
            }else{
                $reservationProduct->delivery = 0;
            }

            if($inputs['is_reserve'] == 0){
                $reservationProduct->pricing = $product->sale_price;
            }else{
                $reservationProduct->pricing = $product->reserve_price;
            }

            $reservationProduct->save();

            $data = [
                'name' => $user->name,
                'product_name' => $product->name,
                'is_reserve' => $inputs['is_reserve'],
                'quantity' => $inputs['quantity']
            ];

            Mail::to('atencionalcliente@conmevo.com')->queue(new NewReserve($data));
            SWAL::message('Reserva satifactoria','','success',['timer'=>5000]);
            return redirect()->back();

        }
    }

    public function showReserves(){
        $user = Auth::user()->id;
        $reserves = ReservationProducts::where('user_id', $user)->with('products', 'user')->get();
        return view('users.reserves')->with(compact('reserves'));
    }

    public function allRerserves(){
        $user = Auth::user()->id;
        $reserves = ReservationProducts::with('products', 'user')->get();
        return view('admin.reports.index')->with(compact('reserves'));
    }

    public function getReserveDetails($id){
        $reserve = ReservationProducts::where('id', $id)->with('products', 'user', 'userPersonProfile')->first();
        return view('admin.reports.details')->with(compact('reserve'));
    }

    public function changeStatus(Request $request, $id){
        $reserve = ReservationProducts::where('id', $id)->with('products','user')->first();
        $inputs = request()->all();
        $reserve->status = $inputs['status'];
        $reserve->save();

        $data = [
            'name' => $reserve->user->name,
            'product_name' => $reserve->products->name,
            'quantity' => $reserve->quantity,
            'status' => $reserve->status
        ];

        Mail::to($reserve->user->email)->queue(new changeStatusToOrders($data));
        SWAL::message('Estado Actualizado','','success',['timer'=>5000]);
        return redirect()->back();

    }

    public function reservationsPerDay(){
        return view('admin.reports.graphis');
    }

    public function getCharts(){

        $inputs = request()->all();

        $chartInfo = collect();

        if(isset($inputs['chart'])){

            $date               = $inputs['chart'];
            $dateArray          = explode(" - ", $date);
            $dateStart          = trim(Carbon::parse($dateArray[0])->format('Y-m-d'));
            $dateEnd            = trim(Carbon::parse($dateArray[1])->format('Y-m-d'));
            $chartInfo          = ReservationProducts::selectRaw('DATE(created_at) AS created_date, COUNT(*) AS total')
                                    ->whereBetween('created_at', [$dateStart, $dateEnd])
                                    ->groupBy('created_date')
                                    ->get();
        }

        return $chartInfo;
    }

}
