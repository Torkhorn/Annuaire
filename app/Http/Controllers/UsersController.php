<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Users;

class UsersController extends Controller
{
    
    //requete public depuis client(front)
    public function get (Request $request){


    	$validator = $this->validateRequest($request);

    	if ($validator->fails()) {

    		return response('error');
    	}

    	//données mises dans le tableau
    	$attributes = [];

    	//vérification données dans la requête http
    	$attributes['user_lastname'] = $request->has('user_lastname') ? $request->json('user_lastname'):'';

    	$attributes['user_firstname'] = $request->has('user_firstname') ? $request->json('user_firstname'):'';

    	$attributes['form_id'] = $request->has('form_id') ? $request->json('form_id'):'';

    	//à cabler selon angular
    	//$attributes['prom_begin'] = $request->has('prom_begin') ? $request->>json('prom_begin'):'';

    	$users = new Users();

    	//tableau envoyé à la méthode getList
    	return response()->json(['users'=>$users->getList($attributes)]);

    }

    //verification conformité du contenu
    protected function validateRequest (Request $request){

    	$validator = validator::make($request->all(),[

    		'user_lastname' => 'string',
    		'user_firstname' => 'string',
    		'form_id' => 'numeric',
    		'prom_id' => 'numeric'


    	]);

    	return $validator;

    }

}
