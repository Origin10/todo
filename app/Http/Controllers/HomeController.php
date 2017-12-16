<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	function showPost($id = 1){
		return "post".$id;
	}

	function index($id){
		return "user".$id;
	}


}
