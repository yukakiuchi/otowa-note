<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Story;
use App\Episode;
use App\User;
use Image;

class StoriesController extends Controller
{
    


	//ログインコントローラー
	// public function __construct()
 //    {
 //        $this->middleware('auth', array('except' => 'index',));
 //    }

	//ホームページのコントローラーとインフォメーション枠にエピソードのデーターを渡すコントローラー
    public function index(){

    	$story = Story::all();
        // $episode = Episode::take(3)->orderBy('created_at', 'DESC')->get(); 
       $episode = Episode::with('user')->orderBy('created_at', 'DESC')->take(3)->get();

    	return view('Stories.index')->with(array('story' => $story, 'episode' => $episode));

    }

    //作品一覧表示のコントローラー
    public function show($id){

    	$episodes = Story::find($id)->episode()->orderBy('id', 'DESC')->paginate(10);
    	$story = Story::find($id);

    	return view('Stories.show')->with(array('episodes' => $episodes, 'story' => $story));

    }	

    //ストーリーを読む用のコントローラー
    public function read($id){

    	// $episode = Story::find($id)->episode()->get();
    	$episode = Story::find($id)->episode()->paginate(3);

    	return view('Stories.read')->with('episode', $episode);

    }

    //タイトル編集用のコントローラー
    public function introductionEdit(Request $request, $id){


        Story::find($id)->update(array(

            'introduction' => $request->introduction

        ));

        $url = $request->url;

        return redirect($url);


    }


    public function create(){

        return view('Stories.create');

    }


    public function store(Request $request){

        
        Story::create(array(

            'image' => "green.jpg",
            'title' => $request->title,
            'introduction' => $request->text,
            'status' => $request->status,
            'user_id' => $request->user_id

        ));

        return view('Stories.store');

    }


    public function delete($id){


        Story::destroy($id);

        return redirect('/');

    }

    public function updateimage(Request $request){

        $fileName = $request->image->getClientOriginalName();
        Image::make($request->image)->save(public_path() . '/storiesPictures/' . $fileName);

        Story::find($request->story_id)->update(array(

            'image' => $fileName

        ));

        $url = $request->url;

        return redirect($url);

        }

}
