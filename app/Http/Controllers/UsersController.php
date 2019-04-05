<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Story;
use App\Episode;
use Image;
use Auth;

class UsersController extends Controller
{
    public function show($id){

    	$story = User::find($id)->story()->get();
        $myuser = User::find($id);
    	$allStory = Story::all();

    	return view('Users.showStories')->with(array('story' => $story, 'allStory' => $allStory, 'myuser' => $myuser ));


    }

    public function editName(Request $request){


    	User::find($request->user_id)->update(array(

    		'name' => $request->name

    	));

    	$url = $request->url;

    	return redirect($url);


    }

        public function editEmail(Request $request){


    	User::find($request->user_id)->update(array(

    		'email' => $request->email

    	));

    	$url = $request->url;

    	return redirect($url);
    }


        public function updateimage(Request $request){

        $fileName = $request->image->getClientOriginalName();
        Image::make($request->image)->save(public_path() . '/images/' . $fileName);

        User::find($request->user_id)->update(array(

            'image' => $fileName

        ));

        $url = $request->url;

        return redirect($url);


        }


        public function showall(){


        $users = User::withTrashed()->get();
        $userss = User::all();

           return view('Users.showall')->with(array('users'=> $users, 'userss' => $userss));

        }

        public function deledele($id){

            if(Auth::check() && Auth::user()->id == 1){

                User::find($id)->delete();

                return back();

            }
            else{


                return redirect('/');
            }
            

           



        }


        public function again($id){


            if(Auth::check() && Auth::user()->id == 1){

                User::onlyTrashed()->where('id', $id)->restore();

                return back();

            }else{


                return redirect('/');
            }

        }
}
