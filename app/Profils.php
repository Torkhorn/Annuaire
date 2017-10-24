<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profil extends Model{

	//récupération de la table pour pouvoir faire les requêtes sql
	protected $table = 'user';

	public function getUser($id){

		$query = DB::table('user as u')->select('select * from user where id = :id', ['id' => $id]);

		$users = $query->get();
		
		//renvoie les users en fonction de la requête
	 	return $users;
	}
}