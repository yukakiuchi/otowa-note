<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class Password extends Controller
{


		//パスワードリセット画面を表示する
    	public function show(){

			return view('Passwords.show');

		}


		//パスワードリセット、データー送られた後の処理
		public function update(Request $request){


			// $email = User::where('email', 'lets.get.crazy1995@gmail.com')->get();
			$birthday = DB::table('users')->where('email', $request->email)->value('birth');

			//成功した場合はログインページへ誘導
			if($birthday == $request->birth){

				User::where('email', $request->email)->update(array('password' => $request->password));

				$password = $request->password;



				return view('Passwords.update')->with('password', $password);

			//失敗した場合は再度入力できるように誘導する
			}else{

				return view('Passwords.error');

			}

		}

}
