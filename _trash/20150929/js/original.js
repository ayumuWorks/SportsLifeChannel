//header-------------------------------------------------
$(function(){
	var pathname = location.pathname;

	if (pathname.match(/index.php/)) {
		var page = document.getElementById('header-index');
		page.innerText = 'トップ';
	}
	else if (pathname.match(/channel.php/)) {
		var page = document.getElementById('header-channel');
		page.innerText = 'チャンネル';
	}
	else if (pathname.match(/human.php/)) {
		var page = document.getElementById('header-human');
		page.innerText = '人物検索';
	}
	else if (pathname.match(/contact.php/)) {
		var page = document.getElementById('header-contact');
		page.innerText = 'お問い合わせ';
	}
	else if (pathname.match(/register-01.php/)) {
		var page = document.getElementById('header-register');
		page.innerText = '会員登録';
	}
	else if (pathname.match(/login.php/)) {
		var page = document.getElementById('header-login');
		page.innerText = 'ログイン';
	}
	else {

	}
});