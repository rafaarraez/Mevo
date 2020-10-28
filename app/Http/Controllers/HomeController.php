<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Products;
use App\UserProfile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        $request->user()->authorizeRoles(['user']);

        $id = $request->user()->id;
        
        $userProfile = UserProfile::where('user_id', $id)->first();

        if($userProfile->status == 1){
            return view('users.user-setting')->with(compact('userProfile'));
        }else{

            //
            $products = Products::select('products.*', 'products.quantity AS cantidad_total')
                                ->selectRaw('SUM(CASE WHEN r.status != 4 THEN r.quantity ELSE 0 END ) AS total_reservado')
                                ->selectRaw('(products.quantity - SUM(CASE WHEN r.status != 4 THEN r.quantity ELSE 0 END )) AS total_disponible')
                                ->leftjoin('reservation_products AS r', 'r.product_id', '=', 'products.id')
                                ->groupBy('products.id')
                                ->paginate(5);
        
            
            //dd($products);
            return view('users.home-user')->with(compact('products'));
        }
    }


    public function indexAdmin(Request $request)
    {
        if($request->user()->authorizeRoles('admin')){
            return view("home");
        }else{
            return Redirect::to('/inicio');

        }

        
    }
}
