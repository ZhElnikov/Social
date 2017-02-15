<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\Message;
use Auth;
use App\User;
use App\Profile;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function getIndex(){   
		$title='Социалка';
		$rooms=Room::where('showhile','show')->orderBy('id','DESC')->get();
		$users=User::all();
		return view('rooms')->with('title',$title)->with('rooms',$rooms)->with('users',$users);
	}
	public function getNum($id=1){
		$title='Социалка';
		$room=Room::find($id);
		$messages=Message::where('chat_id',$id)->orderBy('id','DESC')->limit(40)->get();
		
		$user=[];
		foreach ($messages as $one){
			$user[]=$one->user_id;
		}
		$unic_users=array_unique($user);
		$users=User::find($unic_users);
		return view('thisroom')->with('room',$room)->with('id',$id)->with('title',$title)->with('messages',$messages)->with('users',$users);
	}
	public function getMain(){
		$title='Социалка';
		$r=Auth::user();
		$id=$r->profiles->userchoose;
		return redirect('/room/'.$id);
	}
	public function postIndex(Requests\RoomRequest $r){
		$r['user_id']=Auth::user()->id;
		Room::create($r->all());
		return redirect('/rooms');
	}
}
