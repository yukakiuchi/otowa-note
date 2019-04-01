window.addEventListener('load', function(){

$('.topIntroduction').hide();
$('.topIntroductionQ').hide();

//設定
autosize($('.createText'));
autosize($('.introductionFillBox'));

//小説ブロックのマウス操作
	
	$('.iyayo').hover(function(){

		$(this).children('.topTitle').hide();
		$(this).children('.topIntroduction').show();
	
		},function(){
	
		$(this).children('.topIntroduction').hide();
		$(this).children('.topTitle').show();	
	});


	$('.iyayoQ').hover(function(){

		$(this).children('.topTitleQ').hide();
		$(this).children('.topIntroductionQ').show();
	
		},function(){
	
		$(this).children('.topIntroductionQ').hide();
		$(this).children('.topTitleQ').show();	
	});

//エピソード一覧のマウス操作

	$('.episodesTitle').hover(function(){
	
		$('.episodesTitle div').text(" エピソードを見る");
	
		},function () {
		
		$('.episodesTitle div').text("エピソード一覧");
	
	});

//"+"のマウス操作
	$('.addEpisodeBox').hover(function(){

		$('.addEpisode').css("color", "#F8F4E6");

	},function(){


		$('.addEpisode').css("color", "#FFFFF1");

	});

//ページネーションのマウス操作		

	$('.pagination li').hover(function(){


		$(this).css("font-size", "25px");

	},function(){

		$(this).css("font-size", "initial");

	});

//ログインページや新規登録画面にいる場合はヘッダーのログインアイコンを消す
	var path = location.pathname;

	if(path =="/login" || path=="/register"){

		$('.loginbutton').remove();
		$('.egg').remove();
	}

// マイページにいる場合は特定のアイコンを隠す

	var path = location.pathname;
	///       users/6 が入っている

	// var myPage = new RegExp("(\/users\/[0-9]{1,}$)");

	var myPage = /^\/users\/\d+$/;


	var myPageButton = myPage.test(path);

	console.log(myPageButton);

	if(myPageButton){

		$('.loginName').remove();
		$('.NameEgg').remove();

	}

//ストーリー作成画面ではログアウトボタンを隠す

	if(path == "/stories/create"){


		$('.logoutbutton').remove();
		$('.egg').remove();

	}


//ストーリ画面のイントロをページ移動せずに編集する
	
	$('.introductionEdit').hide();
	$('.introductionSendButton').hide();

	
	$('.introductionEditButton').click(function(){

		$('.introductionSetting').hide();
		$('.introductionEditButton').hide();
		$('.introductionEdit').show();
		$('.introductionSendButton').show();

	})


//削除ボタンを表示させるためのトリック

var num = 0;
$('.deleteStory').hide();

$('.click').click(function(){

    num++;

    if(num == 1){

		$('.click').text("➡︎  ・  ・");

    }else if(num == 2){

		$('.click').text("・  ➡︎  ・");

    }else if(num == 3){

		$('.click').text("・  ・  ➡︎");

    }else{

    	$('.click').hide();
    	$('.deleteStory').show();

    }

});

//プロフィール名前とEメールの変更設定
	$('.FormProNameBox').hide();
	$('.FormProEmailBox').hide();	
    

$('.penName').click(function(){

	$('.proNameBox').hide();
	$('.FormProNameBox').show();


});


$('.penEmail').click(function(){

	$('.proEmailBox').hide();
	$('.FormProEmailBox').show();


});


//パスワード不一致した場合に送信できないようにする

$('.error').hide();


$('#my-form').submit(function(){

var passowrd = $('.passwords').val();
var passowrd1 = $('.passwordConfirm').val();


if(passowrd != passowrd1){
	
		$('.error').show();
	
		return false;
	
	}else{

		$('#my-form').submit();

	}


});

$('.reseterror').hide();


$('.resetform').submit(function(){

var passowrd = $('.passwordreset').val();
var passowrd1 = $('.passwordreset1').val();

if(passowrd != passowrd1){
	
		$('.reseterror').show();
	
		return false;
	
	}else{

		$('.resetform').submit();

	}


});

	
//プロフィール画像変更

	$('.imageSettingForm').hide();

		$('.changepix').click(function(){

				$('.imageSetting').hide();
				$('.imageSettingForm').show();

		});	



});