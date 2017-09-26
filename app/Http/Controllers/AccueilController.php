<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function get(Request $request){
    	return response()->json(['test'=>'testvalue']);
    }

    public function getID(Request $request, $id){
    	return response()->json(['test'=>$id]);
    }
}
