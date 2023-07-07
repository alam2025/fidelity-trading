



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
            

<div class="content">
    <div class="captionLight center">REGISTRATION</div>
    <div class="wrap">
                    

            
{if $deny_registration}
 We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
 You  do not have a upline. Our system require a upline for each user.
{else}
 {literal}

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location == 1}
 {literal}
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 {/literal}
 
 {if $errors}
  <ul style="color:red">
  {section name=e loop=$errors} 
   {if $errors[e] eq 'full_name'}
    <li>Please enter your full name!
   {/if}
   {if $errors[e] eq 'address'}
    <li>Please enter your address!
   {/if}
   {if $errors[e] eq 'city'}
    <li>Please enter your city!
   {/if}
   {if $errors[e] eq 'state'}
    <li>Please enter your state!
   {/if}
   {if $errors[e] eq 'zip'}
    <li>Please enter your zip!
   {/if}
   {if $errors[e] eq 'country'}
    <li>Please choose your country!
   {/if}
   {if $errors[e] eq 'username'}
    <li>Please enter your username!
   {/if}
   {if $errors[e] eq 'username_exists'}
    <li>Sorry, such user already exists! Please try another username. 
   {/if}
   {if $errors[e] eq 'email_exists'}
    <li>Sorry, such email already exists! Please try another email. 
   {/if} 
   {if $errors[e] eq 'password'} 
    <li>Please enter a password!
   {/if}
   {if $errors[e] eq 'password_confirm'}
    <li>Please check your password!
   {/if}
   {if $errors[e] eq 'password_too_small'}
    <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if} 
   {if $errors[e] eq 'transaction_code'} 
    <li>Please enter the Transaction Code!
   {/if} 
   {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Please check your Transaction Code!
   {/if}
   {if $errors[e] eq 'transaction_code_too_small'}
    <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if}
   {if $errors[e] eq 'transaction_code_vs_password'} 
    <li>The Transaction Code should differ from the Password!
   {/if}
   {if $errors[e] eq 'egold'} 
    <li>Please enter your e-gold account number!
   {/if}
   {if $errors[e] eq 'email'} 
    <li>Please enter your e-mail!
   {/if}
   {if $errors[e] eq 'agree'}
    <li>You have to agree with the Terms and Conditions!
   {/if}
   {if $errors[e] eq 'turing_image'}
    <li>Enter the verification code as it is shown in the corresponding box.
   {/if} 
   {if $errors[e] eq 'no_upline'}
    <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
   {/if} 
   {if $errors[e] eq 'ip_exists_in_database'}
    <li>Your IP already exists in our database. Sorry, but registration impossible.
   {/if}

   <br> 
  {/section}
  </ul>
 {/if} 

 
 <form method=post onsubmit="return checkform()" name="regform" style="margin-top: 45px;">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
            
           
                <div class="row">
                    <div class="item col4">
                        <div class="formBlockLight">
                            <label for="regLogin">Login:</label>
                            <input type=text name=username value="">
                            <span class="icon-login"></span>
                        </div>
                        <div class="formBlockLight">
                            <label for="regMail">E-mail:</label>
                            <input type=text name=email value="">
                            <span class="icon-mail"></span>
                        </div>
                        <div class="formBlockLight">
                            <label for="regMail">Retype your e-mail:</label>
                            <input type=text name=email1 value="">
                            <span class="icon-mail"></span>
                        </div>
                    </div>
                    <div class="item col4">
                        <div class="formBlockLight">
                            <label for="regName">Your name:</label>
                            <input type=text name=fullname value="">
                            <span class="icon-login"></span>
                        </div>
                        <div class="formBlockLight">
                            <label for="invName">Invited you:</label>
                            <input type="text" value="{if $referer}
 {$referer.name}({$referer.username}) {else}N/A{/if}" disabled="">
                            <span class="icon-login"></span>
                        </div>
                        <div class="agree">
                            <input name=agree value=1  type="checkbox" id="regCheck" {if $frm.agree}checked{/if}>
                            <label for="regCheck">I agree <a href="?a=rules">Terms and conditions</a></label>
                        </div>
                        <button type="submit" class="btnFillDarkMd">register</button>
                    </div>
                    <div class="item col4">
                        <div class="formBlockLight">
                            <label for="regPass">Define password:</label>
                            <input type=password name=password value="">
                            <span class="icon-pass"></span>
                        </div>
                        <div class="formBlockLight">
                            <label for="regRePass">Retype password:</label>
                            <input type=password name=password2 value="">
                            <span class="icon-pass"></span>
                        </div>
                                            </div>
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