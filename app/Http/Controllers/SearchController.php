<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{	

	/**
     * Muestra el recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function getroles(Request $request){

      $search = $request->get('term');
      
      $roles = \DB::table('roles')->select('description', 'id')->where('name', 'LIKE', '%'. $search. '%')->get();
       
      $valid_roles = [];
       
      foreach ($roles as $id => $rol) {
            
        $valid_roles[] = ["id" => $rol->id, "text" => $rol->description];
       
      }

       /*dd($valid_roles);*/

      return \Response::json($valid_roles);

    }
}
