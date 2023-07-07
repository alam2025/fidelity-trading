<?php
/* Smarty version 4.3.0, created on 2023-07-04 18:11:26
  from 'C:\xampp\htdocs\smarty-php\tmpl\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a444ae587c39_24127161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '791eafbb64d395bec3f31a245cdd7b3214de2ccc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\signup.tpl',
      1 => 1688487083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:visual_logo.tpl' => 1,
    'file:social.tpl' => 1,
  ),
),false)) {
function content_64a444ae587c39_24127161 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset='UTF-8'>
  <meta name="viewport" content="width=200">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
</title>

  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
  <link rel='icon' href='favicon.ico' type='image/x-icon'>

  <link rel='stylesheet' type='text/css' href='fonts/stylesheet.css'>
  <link rel='stylesheet' type='text/css' href='fonts/icomoon/style.css'>
  <link rel='stylesheet' type='text/css' href='css/jquery-ui.css'>
  <link rel='stylesheet' type='text/css' href='css/ion.rangeSlider.css'>
  <link rel='stylesheet' type='text/css' href='css/ion.rangeSlider.skinSimple.css'>
  <link rel='stylesheet' type='text/css' href='css/selectric.css'>
  <link rel='stylesheet' type='text/css' href='css/style.css'>

  <?php echo '<script'; ?>
 type='text/javascript' src='js/jquery-3.3.1.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/jquery-ui.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/clipboard.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/detect.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/ion.rangeSlider.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/jquery.selectric.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/script.js'><?php echo '</script'; ?>
>

  <style>
    .formHandle {
      width: 70%;
      margin: 0 auto;
    }

    .formGroup {
      display: flex;
      align-items: center;
      gap: 20px;

    }

    .logo>img {
      width: 250px;
    }

    [class*="btnFill"][class*="Dark"][class*="Md"] {
      max-width: 207px !important;
      margin-top: 30px;
    }

    @media (max-width:767px) {
      .formHandle {
        width: 100%;
        margin: 0 auto;
      }

      .formGroup {
        display: flex;
        align-items: center;
        gap: 1px;
        flex-direction: column;
        margin-top: 20px;

      }

      .captionLight {
        font-size: 20px !important;
        text-align: start !important;
      }

      .container {
        width: 95% !important;
      }

      [class*="caption"].center {
        text-align: left !important;
      }

      .logo>img {
        width: 150px;
      }

      [class*="btnFill"][class*="Dark"][class*="Md"] {
        min-width: 150px !important;
        font-size: x-small;
      }

      [class*="formBlock"] input[type="text"],
      [class*="formBlock"] input[type="number"],
      [class*="formBlock"] input[type="password"],
      [class*="formBlock"] input[type="email"],
      [class*="formBlock"] input[type="url"] {
        height: 30px !important;

      }

      [class*="formBlock"]>[class*="icon"] {
        top: 10px !important;
      }

      [class*="formBlock"] label {

        line-height: 5px !important;

      }


    }
  </style>
</head>

<body>
  <div class="bodyWrap">
    <div class="logRegPage" style="background-image: url(img/grad_bg_big.png), url(img/logreg_bg.jpg);">
      <div class="container">
        <div class="head">
          <div class="logo big invisLink">
            <?php $_smarty_tpl->_subTemplateRender("file:visual_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <img src="img/logo_big.png" alt="logo" height="50">
            <a href="?a=home">main</a>
          </div>
        </div>


        <div class="content">
          <div class="captionLight center">REGISTRATION</div>
          <div class="wrap">



            <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
              We are closed for new registrations now.
            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
              You do not have a upline. Our system require a upline for each user.
            <?php } else { ?>
              

                <?php echo '<script'; ?>
 language=javascript>
                  function checkform() {
                    if (document.regform.fullname.value == '') {
                      alert("Please enter your full name!");
                      document.regform.fullname.focus();
                      return false;
                    }
                  
                  <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
                    
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
                    
                  <?php }?>
                  
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
                  
                  <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                    
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
                    
                  <?php }?>
                  
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
                    var IsNumber = true;
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
                <?php echo '</script'; ?>
>
              

              <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                <ul style="color:red">
                  <?php
$__section_e_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_e_0_total = $__section_e_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_e'] = new Smarty_Variable(array());
if ($__section_e_0_total !== 0) {
for ($__section_e_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] = 0; $__section_e_0_iteration <= $__section_e_0_total; $__section_e_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'full_name') {?>
                      <li>Please enter your full name!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'address') {?>
                      <li>Please enter your address!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'city') {?>
                      <li>Please enter your city!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'state') {?>
                      <li>Please enter your state!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'zip') {?>
                      <li>Please enter your zip!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'country') {?>
                      <li>Please choose your country!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'username') {?>
                      <li>Please enter your username!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'username_exists') {?>
                      <li>Sorry, such user already exists! Please try another username.
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'email_exists') {?>
                      <li>Sorry, such email already exists! Please try another email.
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'password') {?>
                      <li>Please enter a password!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'password_confirm') {?>
                      <li>Please check your password!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'password_too_small') {?>
                      <li>The password you provided is too small, please enter at least <?php echo $_smarty_tpl->tpl_vars['settings']->value['min_user_password_length'];?>

                        characters!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'transaction_code') {?>
                      <li>Please enter the Transaction Code!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'transaction_code_confirm') {?>
                      <li>Please check your Transaction Code!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'transaction_code_too_small') {?>
                      <li>The Transaction Code you provided is too small, please enter at least
                        <?php echo $_smarty_tpl->tpl_vars['settings']->value['min_user_password_length'];?>
 characters!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'transaction_code_vs_password') {?>
                      <li>The Transaction Code should differ from the Password!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'egold') {?>
                      <li>Please enter your e-gold account number!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'email') {?>
                      <li>Please enter your e-mail!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'agree') {?>
                      <li>You have to agree with the Terms and Conditions!
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'turing_image') {?>
                      <li>Enter the verification code as it is shown in the corresponding box.
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'no_upline') {?>
                      <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random
                        one or found a referral link in the net.<?php }?>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_e']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_e']->value['index'] : null)] == 'ip_exists_in_database') {?>
                      <li>Your IP already exists in our database. Sorry, but registration impossible.
                      <?php }?>

                      <br>
                    <?php
}
}
?>
                </ul>
              <?php }?>


              <form class="formHandle" method=post onsubmit="return checkform()" name="regform" style="margin-top: 45px;">
                <input type=hidden name=a value="signup">
                <input type=hidden name=action value="signup">


                <div class="row">
                  <div class="formGroup">
                    <div class="formBlockLight">
                      <label for="regLogin">Login user:</label>
                      <input type=text name=username value="">
                      <span class="icon-login"></span>
                    </div>
                    <div class="formBlockLight">
                      <label for="regName">Your name:</label>
                      <input type=text name=fullname value="">
                      <span class="icon-login"></span>
                    </div>


                    <div class="formBlockLight">
                      <label for="regPass">Define password:</label>
                      <input type=password name=password value="">
                      <span class="icon-pass"></span>
                    </div>

                  </div>
                  <div class="formGroup">
                    <div class="formBlockLight">
                      <label for="regMail">E-mail:</label>
                      <input type=text name=email value="">
                      <span class="icon-mail"></span>
                    </div>

                    <div class="formBlockLight">
                      <label for="invName">Invited you:</label>
                      <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>
                       <?php echo $_smarty_tpl->tpl_vars['referer']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['referer']->value['username'];?>
) <?php } else { ?>N/A<?php }?>" disabled="">
                      <span class="icon-login"></span>
                    </div>
                    <div class="formBlockLight">
                      <label for="regRePass">Retype password:</label>
                      <input type=password name=password2 value="">
                      <span class="icon-pass"></span>
                    </div>


                  </div>
                  <div class="formGroup">
                    <div class="formBlockLight">
                      <label for="regMail">Retype your e-mail:</label>
                      <input type=text name=email1 value="">
                      <span class="icon-mail"></span>
                    </div>
                    <div class="agree">
                      <input name=agree value=1 type="checkbox" id="regCheck" <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?>>
                      <label for="regCheck">I agree <a href="?a=rules">Terms and conditions</a></label>
                    </div>

                  </div>
                  <button type="submit" class="btnFillDarkMd">register</button>
                </div>
            </form><?php }?>
          </div>
        </div>


        <?php $_smarty_tpl->_subTemplateRender("file:social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
          </div>
  </div>
</body>

</html><?php }
}
