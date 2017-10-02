<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
	//nom de la table pour les requêtes en base
    protected $table = 'user';

    //utilise tableau passé en paramètre depuis le controller + traitement requête
    public function getList(array $attributes = []){
	
		$query = DB::table('user as u')->select();

    	if(array_key_exists('user_lastname', $attributes)){

    		$query->where('user_lastname','like','%'.$attributes['user_lastname'].'%');
    	}

    	if(array_key_exists('user_firstname', $attributes)){

    		$query->where('user_firstname','like','%'.$attributes['user_firstname'].'%');
    	}

    	if(array_key_exists('form_id', $attributes) && $attributes['form_id'] !== ''){

    		//jointure de belong_to
    		$query->join('belong_to as b', 'b.user_id','=','u.user_id' );

    		$query->join('promotion as p', 'p.prom_id','=','b.prom_id');

    		$query->join('formation as f', 'f.form_id','=','p.form_id');

    		$query->where('f.form_id','=',$attributes['form_id']);
    	}

    	//recherche via année
    	/*if(array_key_exists('prom_begin', $attributes) && $attributes['prom_begin'] !== ''{

    		//retourner l'année via le champ date en mysql



    	} */

    	$users = $query->get();

    	//renvoie les users en fonction de la requête
    	return $users;


    }
}

