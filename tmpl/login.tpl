<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=200">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{$settings.site_name}</title>

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <link rel='stylesheet' type='text/css' href='fonts/stylesheet.css'>
    <link rel='stylesheet' type='text/css' href='fonts/icomoon/style.css'>
    <link rel='stylesheet' type='text/css' href='css/jquery-ui.css'>
    <link rel='stylesheet' type='text/css' href='css/ion.rangeSlider.css'>
    <link rel='stylesheet' type='text/css' href='css/ion.rangeSlider.skinSimple.css'>
    <link rel='stylesheet' type='text/css' href='css/selectric.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>

    <script type='text/javascript' src='js/jquery-3.3.1.js'></script>
    <script type='text/javascript' src='js/jquery-ui.js'></script>
    <script type='text/javascript' src='js/clipboard.js'></script>
    <script type='text/javascript' src='js/detect.js'></script>
    <script type='text/javascript' src='js/ion.rangeSlider.js'></script>
    <script type='text/javascript' src='js/jquery.selectric.js'></script>
    <script type='text/javascript' src='js/script.js'></script>
</head>
<body>
            <div class="bodyWrap">
            <div class="logRegPage" style="background-image: url(img/grad_bg_big.png), url(img/logreg_bg.jpg);">
                <div class="container">
                    <div class="head">
                        <div class="logo big invisLink">
                           {include file="visual_logo.tpl"}
                            <img src="img/logo_big.png" alt="logo" width="250" height="50">
                            <a href="?a=home">main</a>
                        </div>
                    </div>
            


{literal}
<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}


  

<div class="content">
    <div class="captionLight center">Login</div>
    <div class="wrap login">
	{if $frm.say eq 'invalid_login'}
	 <div class="errors">
                <h3>Login error:</h3><br><br>Your login or password or turing image code is wrong. Please check this information.
            </div>{/if}
			
			
			<form class="formLogin" method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='{$frm.follow}'>
<input type=hidden name=follow_id value='{$frm.follow_id}'>

                
            <div class="item">
                <div class="formBlockLight">
                    <label>Login:</label>
                    <input type=text name=username value='' autofocus="autofocus">
                    <span class="icon-login"></span>
                </div>
                <div class="formBlockLight">
                    <label for="logPass">Password:</label>
                    <input type=password name=password value=''>
                    <span class="icon-pass"></span>
                </div>
                                <a href="?a=forgot_password" class="passLink">Forgot password?</a>
                <button type="submit" class="btnFillDarkMd">Login</button>
            </div>
        </form>
    </div>
</div>

                    {include file="social.tpl"}
                </div>
                <div class="circleBg"><div class="circle"></div></div>
            </div>
        </div>
    </body>
</html>