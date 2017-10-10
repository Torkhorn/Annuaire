<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Profil;

class ProfilController extends Controllers{
    
    public function get (Request $request){

        $profil = new Profil();
    	//tableau envoyé à la méthode getList
    	return response()->json(['profil'=>$profil->getUser($attributes, $id)]);

    }
    
}