<!DOCTYPE html>
<html lang="zh-HK">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登入 &lsaquo; eppiesdesign &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="stylesheet" id="dashicons-css" href="https://eppiechow.github.io/eppiesdesign/wp-includes/css/dashicons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="buttons-css" href="https://eppiechow.github.io/eppiesdesign/wp-includes/css/buttons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="forms-css" href="https://eppiechow.github.io/eppiesdesign/wp-admin/css/forms.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="l10n-css" href="https://eppiechow.github.io/eppiesdesign/wp-admin/css/l10n.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="login-css" href="https://eppiechow.github.io/eppiesdesign/wp-admin/css/login.min.css?ver=6.1.1" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-zh-hk">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://zh-hk.wordpress.org/">本站採用 WordPress 建置</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/eppiesdesign/wp-login.php" method="post">
			<p>
				<label for="user_login">使用者名稱或電子郵件地址</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">密碼</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="顯示密碼">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">保持登入</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登入">
									<input type="hidden" name="redirect_to" value="http://localhost/eppiesdesign/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="https://eppiechow.github.io/eppiesdesign/wp-login.php?action=lostpassword">忘記密碼？</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="https://eppiechow.github.io/eppiesdesign/">&larr; 前往《eppiesdesign》</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">語言</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="zh_HK" lang="zh" selected data-installed="1">香港中文</option></select>
					
					
					
						<input type="submit" class="button" value="變更">

					</form>
				</div>
				<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">var _zxcvbnSettings = {"src":"https:\/\/eppiechow.github.io\/eppiesdesign\/wp-includes\/js\/zxcvbn.min.js"};</script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">var pwsL10n = {"unknown":"密碼強度未知","short":"非常低","bad":"低","good":"中","strong":"高","mismatch":"不相符"};</script>
<script id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-07-15 15:25:03+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_HK"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["從 %2$s 版開始，%1$s 已淘汰不用，請改用 %3$s。建議撰寫更具包容性的程式碼。"]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-admin/js/password-strength-meter.min.js?ver=6.1.1" id="password-strength-meter-js"></script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/eppiesdesign\/wp-admin\/admin-ajax.php"}};</script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-includes/js/wp-util.min.js?ver=6.1.1" id="wp-util-js"></script>
<script id="user-profile-js-extra">var userProfileL10n = {"user_id":"0","nonce":"27d7095c6b"};</script>
<script id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-07-15 15:25:03+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_HK"},"Your new password has not been saved.":["新密碼尚未儲存。"],"Hide":["隱藏"],"Show":["顯示"],"Confirm use of weak password":["確認使用安全強度較弱的密碼"],"Hide password":["隱藏密碼"],"Show password":["顯示密碼"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script src="https://eppiechow.github.io/eppiesdesign/wp-admin/js/user-profile.min.js?ver=6.1.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>