<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Story;
use App\Episode;

class EpisodesController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', array('only' => 'create'));
    // }

	//エピソード作成画面
    public function create($id){

    	$story = Story::find($id);

    	return view('Episodes.create')->with('story', $story);

    }


    //エピソード表示するコントローラー
    public function show($id){

        $episode= Episode::find($id);


        return view('Episodes.show')->with('episode', $episode);

    }

    //エピソード保存と作成した後の確認画面
    public function Store(Request $request, $id){

    	Episode::create(
    		array(

    		
 			'title' => $request->title,
			'text' => $request->text,
			'story_id'	=> $id,
			'user_id' 	=> $request->user_id
			)

    	);

    	$text = $request->text;
    	$story_id = $id;


    	return view('Episodes.store')->with(array('text' => $text, 'id' => $story_id));

    }

    //エピソード削除

    public function delete($id) {


        Episode::destroy($id);


        $url = $_GET['url'];


        return redirect($url);


  }

    //エピソードの編集画面を表示するコントローラー

      public function edit($id)
    {
        $episode = Episode::find($id);
        $story = Episode::find($id)->story;
        

        return view('Episodes.edit')->with(array('episode' => $episode, 'story' => $story));
        
    }


    public function update($id, Request $request){

        Episode::find($id)->update(

          array(
            'text' => $request->text,
            'title' => $request->title
          )
        );

        $text = $request->text;
        $story_id = $request->story_id;
    
        return view('Episodes.update')->with(array('text' => $text, 'story_id' => $story_id));

    }


}
