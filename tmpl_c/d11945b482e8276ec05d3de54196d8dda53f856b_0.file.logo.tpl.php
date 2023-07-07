<?php
/* Smarty version 4.3.0, created on 2023-07-06 21:49:19
  from 'C:\xampp\htdocs\smarty-php\tmpl\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a71abf994886_16110804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd11945b482e8276ec05d3de54196d8dda53f856b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\logo.tpl',
      1 => 1688672594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:visual_logo.tpl' => 1,
  ),
),false)) {
function content_64a71abf994886_16110804 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!----AA320---->
    
        <style>
            .sbmt {background-color: #008CBA; 
            width: 300px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }

            .sbmt:hover {background-color: #2fa076;
            width: 300px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }

            .menu {
                background-color: #202b2f;
                padding: 20px 0;
            }

            .container {

                margin: 0 auto;
                padding: 0px;
            }

            .mobile-menu {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .menu-icon {
                display: none;
                cursor: pointer;
                font-size: 30px;
            }

            .menu-items {
                list-style-type: none;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .menu-items li {
                display: inline-block;
                margin: 0 10px;
            }

            .menu-items a {
                text-decoration: none;
                color: #333;
            }

            body {
                font-family: "Montserrat";
                padding: 0px;
                margin: 0px auto;
                line-height: 1;
                max-width: 100%;
                min-width: 100%;

            }

            .top-nav {
                display: flex;
                justify-content: space-between;
            }

            .logo img {
                width: 250px;
            }






            .login-time-info {
                display: flex;

                justify-content: center;
                align-items: center;
            }

            .login-time-info-2 {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* Media query for mobile */
            @media (max-width: 767px) {

                /* .table{
                align-items: unset !important;}*/
                .logo img {
                    width: 100%;
                    padding-left: -20px;
                }

                .menu-items {
                    display: none;
                }

                .menu-icon {
                    display: block;
                    color: white;
                }

                .login-time-info {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                #align-time {
                    display: flex !important;
                    align-items: center;
                }

                .topLine .clock .date .day {
                    font-size: 10px;
                     !important
                }


                .topLine .clock {
                    width: unset !important;
                }

                /* Show menu items when the checkbox is checked */
                #toggle-menu:checked+.menu-icon+.menu-items {
                    display: flex;
                    flex-direction: column;
                    justify-content: start;
                    align-items: flex-start;
                    position: absolute;
                    z-index: 4;
                    background-color: #202b2f;
                    border-radius: 10px;
                    margin-left: -40px !important;


                }

                .top-nav {
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;

                }

                .topLine .logReg {
                    width: unset !important;

                }

                .topLine .clock .time {
                    font-size: 20px !important;
                }

                [class*="btnFill"][class*="Sm"] {
                    min-width: 50px !important;

                }


                .table .tCell.right {
                    text-align: start !important;
                }

                .second {
                    float: right !important;
                }





                /* .table{
                display: flex;
                justify-content:space-around
            } */


            }

            /* Media query for tablet and desktop */
            @media (min-width: 768px)and (max-width:992px) {
                .menu-icon {
                    display: none;
                }

                .topLine .logoWrap .logo {
                    padding-left: 0px !important;
                }

                .offers {
                    grid-template-columns: repeat(1, 1fr);
                }

                .choose {
                    display: grid !important;
                    grid-template-columns: repeat(2, 1fr) !important;
                    grid-gap: 20px;
                }

                .login-time-info {
                    display: unset;
                }


            }
        </style>
    
</head>

<body>
    <div class="bodyWrap">
        <header>
            <div class="topLine">
                <div class="container">
                    <div class=" table full top-nav">

                        <div class="logoWrap tCell ">
                            <div class="logo invisLink">
                                <div><?php $_smarty_tpl->_subTemplateRender("file:visual_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <img src="img/logo.png" alt="logo" width="" height="50">
                                    <a href="?a=home">main</a>
                                </div>
                            </div>
                        </div>
                                                    <div class='login-time-info'>

                                <div class="logReg tCell right second">
                                    <a href="?a=login" class="btnFillColor1Sm">login</a>
                                    <a href="?a=signup" class="btnFillColor2Sm">sign up</a>
                                </div>





                                



                                <div class="cl clock tCell right third">
                                    <span class="time gradTxt" id="time"></span>
                                    <span class="date">
                                        <span class="day" id="day"></span>
                                        <span class="year" id="year"></span>
                                    </span>
                                </div>
                            </div>
                        
                        

                    </div>
                </div>
            </div>

            <div class="menu">
                <div style="position: relative;" class="container">
                    <input style="display: none;" type="checkbox" id="toggle-menu">
                    <label for="toggle-menu" class="menu-icon">&#9776;</label>
                    <ul style=" padding-right:20px; padding-bottom:20px" class="menu-items">

                        <li style="padding-left: 40px;"><a href="?a=home">HOME</a></li>
                        <li><a href="?a=about">ABOUT US</a></li>
                        <li><a href="?a=faq">FAQ</a></li>
                        <li><a href="?a=rules">RULES</a></li>
                        <li><a href="?a=support">CONTACT US</a></li>
                    </ul>
                </div>
            </div>


</header><?php }
}
