<?php
/* Smarty version 4.3.0, created on 2023-07-06 12:48:04
  from 'C:\xampp\htdocs\smarty-php\tmpl\forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a69be4af8db1_04386046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd760913d0ff5665f4eb4ab7448055ddd6b0aaa7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\forgot_password.tpl',
      1 => 1688640459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:visual_logo.tpl' => 1,
    'file:social.tpl' => 1,
  ),
),false)) {
function content_64a69be4af8db1_04386046 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        .logo {
            width: 300px;
        }

        .logRegPage .content {
            padding-top: 80px !important;
        }

        @media (max-width:800px) {
            .captionLight {
                font-size: 20px !important;
            }

            .logo {
                width: 150px;
            }

            .logRegPage .content {
                padding-top: 40px !important;
            }

            .logRegPage .wrap.login .item {
                width: 90% !important;
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
                        <img class="logo" src="img/logo_big.png" alt="logo">
                        <a href="?a=home">main</a>
                    </div>
                </div>





                <div class="content">
                    <div class="captionLight center">Forgot your password</div>
                    <div class="wrap login">



                        
                            <?php echo '<script'; ?>
 language=javascript>
                                function checkform() {
                                    if (document.forgotform.email.value == '') {
                                        alert("Please type your username or email!");
                                        document.forgotform.email.focus();
                                        return false;
                                    }
                                    return true;
                                }
                            <?php echo '</script'; ?>
>
                        

                        <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
                            Your accound was found. Please check your e-mail address and follow confirm URL to reset your
                            password.
                            <br><br>
                        <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
                                No accounts found for provided info.
                                <br><br>
                            <?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
                                Request was confirmed. Login and password was sent to your email address.
                                <br><br>
                            <?php }?>

                        <form method=post name=forgotform onsubmit="return checkform();">
                            <input type=hidden name=a value="forgot_password">
                            <input type=hidden name=action value="forgot_password">

                            <div class="item">
                                <div class="formBlockLight">
                                    <label>Type your username or e-mail:</label>
                                    <input type=text name='email' value="">
                                    <span class="icon-login"></span>
                                </div>

                                <br /><br /><br />
                                <button type="submit" class="btnFillDarkMd">Forgot</button>
                            </div>
                        </form>
                        <?php }?>
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
