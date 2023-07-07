<?php
/* Smarty version 4.3.0, created on 2023-07-05 09:57:43
  from 'C:\xampp\htdocs\smarty-php\tmpl\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a52277de42d8_97969061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89708d2a8b1e400eac22154be6139e482576f2c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\login.tpl',
      1 => 1688543860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:visual_logo.tpl' => 1,
  ),
),false)) {
function content_64a52277de42d8_97969061 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
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
        @media (max-width:767px) {
            .item {
                width: 100% !important;
            }

            .logRegPage .content {
                padding-top: 70px !important;
            }
        }
    </style>
</head>

<body>
    <div class="bodyWrap ">
        <div class="logRegPage" style="background-image: url(img/grad_bg_big.png), url(img/logreg_bg.jpg);">
            <div class="container">
                <div class="head">
                    <div class="logo big invisLink">
                        <?php $_smarty_tpl->_subTemplateRender("file:visual_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <img src="img/logo_big.png" alt="logo" width="250" height="50">
                        <a href="?a=home">main</a>
                    </div>
                </div>



                
                    <?php echo '<script'; ?>
 language=javascript>
                        function checkform() {
                            if (document.mainform.username.value == '') {
                                alert("Please type your username!");
                                document.mainform.username.focus();
                                return false;
                            }
                            if (document.mainform.password.value == '') {
                                alert("Please type your password!");
                                document.mainform.password.focus();
                                return false;
                            }
                            return true;
                        }
                    <?php echo '</script'; ?>
>
                




                <div class="content">
                    <div class="captionLight center">Login</div>
                    <div class="wrap login">
                        

                        <form class="formLogin " method=post name=mainform onsubmit="return checkform()">
                            

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

                            </div>
                    </div>
    </div>
</body>

</html><?php }
}
