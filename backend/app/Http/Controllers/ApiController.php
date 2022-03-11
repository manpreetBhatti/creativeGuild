<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;


class ApiController extends Controller
{
    public function get($id)
    {
    	var_dump($id);die;
    	$user = Users::find($id);
    	return response()->json($user, 201);
    }
}
