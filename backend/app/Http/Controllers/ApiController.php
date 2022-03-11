<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Albums;


class ApiController extends Controller
{
    public function get($id)
    {
    	$user = Users::find($id);
    	$albums = Albums::where(['user_id'=>$id])->get();

    	$response = $user;
    	$response['albums'] = $albums;

    	return response()->json($response, 200);
    }
}
