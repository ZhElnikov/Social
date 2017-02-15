<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Profile;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
		public function getIndex($id){  
		$title='Социалка';
		$user=User::where('id',$id)->first();
		return view('userprofile')->with('title',$title)->with('id',$id)->with('user',$user);
	}
}
