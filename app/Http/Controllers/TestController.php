<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function showusers(){
    	$users = App\User::all();
    	return view('users')->with('users', $users);
    	    }
}
