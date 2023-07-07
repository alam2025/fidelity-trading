<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <img src="img/logo_big.png" alt="logo">
                            <a href="?a=home">main</a>
                        </div>
                    </div>
            

 


<div class="content">
    <div class="captionLight center">Forgot your password</div>
    <div class="wrap login">
        
        
		
{literal}
<script language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>
{/literal}

{if $found_records == 2}
Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
<br><br>
{else}

{if $found_records == 0}
No accounts found for provided info.
<br><br>
{elseif $found_records == 1}
Request was confirmed. Login and password was sent to your email address.
<br><br>
{/if}

<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
    
                <div class="item">
                    <div class="formBlockLight">
                        <label>Type your username or e-mail:</label>
                        <input type=text name='email' value="">
                        <span class="icon-login"></span>
                    </div>
                  
                                        <br/><br/><br/>
                    <button type="submit" class="btnFillDarkMd">Forgot</button>
                </div>
            </form>{/if}
            </div>
</div>

                    {include file="social.tpl"}
                </div>
                <div class="circleBg"><div class="circle"></div></div>
            </div>
        </div>
    </body>
</html>