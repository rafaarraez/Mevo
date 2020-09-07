<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Softon\SweetAlert\Facades\SWAL; 
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Products;
use App\UserProfile;
use App\ReservationProducts;


class UserController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();

        return view('admin.users.index')->with(['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return view('admin.users.create')->with(compact('randomString'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        *   Validacion del objeto request
        */

        /*dd($request);*/

        // $validatedData = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8'],
        //     'rol_id' => ['required'],
        // ]);

        /*
        *   Registro de un usuario en la base de datos.
        */
        $user           = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->attach($request->rol_id);

        $userProfile            = new UserProfile();
        $userProfile->user_id   = $user->id;
        $userProfile->name      = $request->name; 
        $userProfile->email     = $request->email;
        $userProfile->status    = 1;
        $userProfile->save();

        SWAL::message('Registro exitoso!','','success',['timer'=>5000]);

        $usuarios = User::all();
        return view('admin.users.index')->with(['usuarios' => $usuarios]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($usuario)
    {   
        $usuario = User::findOrFail($usuario);

        return view('admin.users.show')->with(['usuario'=>$usuario]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function showprofile()
    {   
        $user = Auth::user()->id;

        $usuario = User::findOrFail($user);

        $reserves = ReservationProducts::where('user_id', $user)->with('products', 'user')->orderBy('id', 'desc')->paginate(10);

        $userProfile = UserProfile::where('user_id', $user)->first();
        //var_dump($usuario);

        return view('users.profile')->with(compact('usuario', 'userProfile', 'reserves'));
    }

    public function editProfileUser()
    {   
        $user = Auth::user()->id;

        $usuario = User::findOrFail($user);


        $userProfile = UserProfile::where('user_id', $user)->first();
        //var_dump($usuario);

        return view('users.edit-profile')->with(compact('usuario', 'userProfile'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */    
    public function updateProfile(Request $request, $usuario)
    {   
        $user = Auth::user()->id;

        $usuario = User::findOrFail($user);
        $userProfile = UserProfile::where('user_id', $user)->first();

        $userProfile->mobile                = $request->mobile;
        $userProfile->company_name          = $request->company_name;
        $userProfile->organitational_level  = $request->organitational_level;
        $userProfile->job                   = $request->job;
        $userProfile->position              = $request->position;
        $userProfile->country               = $request->country;
        $userProfile->state                 = $request->state;
        $userProfile->city                  = $request->city;
        $userProfile->save();

        SWAL::message('Perfil Actializado','','success',['timer'=>5000]);
        return back();

    }
    public function changePassword(Request $request, $id)
    {   
        $user = User::findOrFail($id);

        if($request->password === $request->password_confirmation){
            $user->password = Hash::make($request->password);
            $user->save();
            SWAL::message('Contraseña Actializado','','success',['timer'=>5000]);
            return back();
        }else{
            SWAL::message('Su contraseña no coinciden con la confirmación','','error',['timer'=>5000]);
            return back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($usuario)
    {   
        /*
        * Obtener el usuario
        */

        $usuario = User::findOrFail($usuario);

        return view('admin.users.edit')->with(['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usuario)
    {
        /*
        *   Validacion del objeto request
        */

        /*dd($request);*/

        // $validatedData = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'password' => [],
        //     'rol_id' => ['required'],
        // ]);

        /*
        *   Actualizacion de un usuario en la base de datos.
        */
        $user = User::findOrFail($usuario);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $user->roles()->sync($request->rol_id);

        SWAL::message('Actualización exitosa!','','success',['timer'=>5000]);

        $usuarios = User::all();
        return view('admin.users.index')->with(['usuarios' => $usuarios]);
    }

    public function updateByUser(Request $request, $id){


        $user = User::findOrFail($id);
        $validatedData = $request->validate([
                'password' => ['required', 'min:6', 'confirmed']
        ]);

        if($request->password === $request->password_confirmation){
            $user->password = Hash::make($request->password);
            $user->save();
    
            $userProfile                        = UserProfile::where('user_id', $id)->first();
            $userProfile->name                  = $request->name;
            $userProfile->mobile                = $request->mobile;
            $userProfile->company_name          = $request->company_name;
            $userProfile->organitational_level  = $request->organitational_level;
            $userProfile->position              = $request->position;
            $userProfile->country               = $request->country;
            $userProfile->state                 = $request->state;
            $userProfile->city                  = $request->city;
            $userProfile->status                = 2;
            $userProfile->save();
            
            var_dump($request);
    
            $products = Products::select('products.*', 'products.quantity AS cantidad_total')
                                    ->selectRaw('SUM(r.quantity) AS total_reservado')
                                    ->selectRaw('(products.quantity - SUM(r.quantity)) AS total_disponible')
                                    ->leftjoin('reservation_products AS r', 'r.product_id', '=', 'products.id')
                                    ->groupBy('products.id')
                                    ->get();
            
            SWAL::message('Perfil Actualizado','','c',['timer'=>5000]);

            return view('users.home-user')->with(compact('products'));

        }else{

            SWAL::message('Su contraseña no coinciden','','error',['timer'=>5000]);
            return back();
        }
        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario)
    {
        User::destroy($usuario);

        SWAL::message('Eliminado correctamente!','','sucecss',['timer'=>5000]);

        return redirect('usuarios');
    }
}
