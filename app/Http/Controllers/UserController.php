<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use App\Todo;

class UserController extends Controller
{
    public function index (Request $request) {
//        $data = $request;
//        return $data;
        $user = JWTAuth::parseToken()->authenticate();

        $todo = Todo::where('user_id', '=', $user->id)->get();
        return response()->json(compact('todo'));
    }

}

