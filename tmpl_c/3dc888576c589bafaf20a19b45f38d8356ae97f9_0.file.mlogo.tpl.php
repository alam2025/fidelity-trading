<?php
/* Smarty version 4.3.0, created on 2023-07-06 13:45:05
  from 'C:\xampp\htdocs\smarty-php\tmpl\mlogo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a6a9416d3225_51802416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc888576c589bafaf20a19b45f38d8356ae97f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\mlogo.tpl',
      1 => 1688643902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:visual_logo.tpl' => 1,
  ),
),false)) {
function content_64a6a9416d3225_51802416 (Smarty_Internal_Template $_smarty_tpl) {
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
    
        <style>
            body {
                width: 100% !important;
            }

            table.tab {
                font-size: 14px;
                color: #000;
                width: 100%;
                border-width: 1px;
                border-color: #DA0014;
                border-collapse: collapse;
                /* font-weight: 600; */
                font-family: sans-serif;
                letter-spacing: 1px;
            }

            table.tab th {
                height: 40px;
                font-size: 14px;
                background-color: linear-gradient(to right, #009cff 0%, #1fe195 100%);
                background-color: rgba(0, 0, 0, 0);
                background-position-x: 0%;
                background-position-y: 0%;
                background-repeat: repeat;
                background-attachment: scroll;
                background-image: linear-gradient(to right, rgb(0, 156, 255) 0%, rgb(31, 225, 149) 100%);
                background-size: auto auto;
                background-origin: padding-box;
                background-clip: border-box;
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #3c9ef1;
                text-align: center;
                color: #fff;
                font-family: sans-serif;
                letter-spacing: 0px;
            }

            table.tab tr {}

            table.tab td {
                height: 40px;
                font-size: 14px;
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #E8E8E8;
                background-color: rgba(255, 255, 255, 0.50);
            }


            table.blank {font-size: 14px;
            color: #000;
            width: 100%;
            border-width: 1px;
            border-color: #DA0014;
            border-collapse: collapse;
            /* font-weight: 600; */
            font-family: sans-serif;
            letter-spacing:.5px;
            }

            table.blank th {font-size:14px;background-color:#abd28e;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
            table.blank tr {}

            table.blank td {font-size:14px;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;}

            .inpts {

                background-color: #e6edf4;
                border: 1px solid #d3d9df;
                border-top-color: rgb(211, 217, 223);
                border-top-style: solid;
                border-top-width: 1px;
                border-right-color: rgb(211, 217, 223);
                border-right-style: solid;
                border-right-width: 1px;
                border-bottom-color: rgb(211, 217, 223);
                border-bottom-style: solid;
                border-bottom-width: 1px;
                border-left-color: rgb(211, 217, 223);
                border-left-style: solid;
                border-left-width: 1px;
                border-image-outset: 0;
                border-image-repeat: stretch;
                border-image-slice: 100%;
                border-image-source: none;
                border-image-width: 1;

            }

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

            .logo-image {
                width: 250px;
                height: 50px;
            }

            .topNav {
                display: flex !important;
                flex-direction: row;
                justify-content: space-between;
                width: 90% !important;
                margin: 0 auto;
            }

            .nav-second {
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .menu {
                background-color: #202b2f;
                padding: 10px 0;
            }



            .mobile-menu {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .menu-icon {
                cursor: pointer;
                font-size: 30px;
            }

            .menu-items {
                list-style-type: none;
                margin: 0;
                padding-bottom: 0 !important;
                padding-right: 0 !important;
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

            .menu-icon {
                display: none;
            }

            /* user info  */
            .user {
                margin-top: 50px;
                display: flex !important;
                gap: 80px;
                align-items: center;

            }

            .userpic {

                width: 91px !important;
            }


            .user a {
                font-size: 15px;
                line-height: 22px;
                color: white;
                font-weight: bold;
                letter-spacing: 0.025em;
            }

            .user .editAcc {

                display: flex;
                align-items: center;
                gap: 20px;

            }

            .account {
                margin-bottom: 60px;
            }

            .row {
                display: flex !important;
                margin-bottom: 50px !important;
            }

            @media (max-width:767px) {
                h2 {
                    font-size: 18px !important;
                }

                .topNav {
                    display: flex !important;
                    flex-direction: column !important;
                    justify-content: center;
                    align-items: center;


                }

                .row {
                    flex-direction: column;
                    margin-bottom: 50px !important;
                }

                .cabHead .row .left {
                    width: 100% !important;
                }

                .logo-image {
                    width: 150px;
                    height: 30px;

                }





                .table .tCell.time {
                    text-align: center !important;
                }

                .topLine .clock {
                    width: 100% !important;

                }

                .topLine .clock .time {font-size: 15px !important;}
                .topLine .clock .date .day {
                    font-size: 10px !important;
                }

                .topLine .clock .date .year {
                    font-size: 10px !important;
                }

                    {
                    font-size: 10px !important;
                }

                .topLine .userBlock {
                    width: 100% !important;
                }

                .topLine .userBlock .iconLeft .data {
                    font-size: 10px;
                }

                .topLine .exit {
                    width: 100% !important;
                    margin-left: 20px;
                }



                .topLine .exit a {

                    font-size: 8px !important;
                }

                [class*="btnFill"][class*="Sm"] {
                    min-width: 70px !important;
                    line-height: 20px !important;
                }

                .table .tCell.right {
                    text-align: start !important;
                }

                .menu-items {
                    display: none;
                }

                .menu-icon {
                    display: block;
                    color: white;
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

                /* user info  */
                .user {
                    display: flex !important;
                    flex-direction: column !important;
                    gap: 30px;
                }

                .account {
                    margin-bottom: 10px;
                }

                /* balance */
                .cabHead .row .right {
                    width: 100% !important;
                }

                .iconLeft {
                    display: flex !important;
                    flex-direction: column !important;
                }

                .accInfo ul+.userBal {
                    margin-top: 20px;

                }

                .accInfo .btnsCab {
                    float: unset;

                    margin: 0 auto;
                }

                .userBal .iconLeft>[class*="icon"] {
                    font-size: 40px !important;
                    line-height: 70px !important;
                    width: 60px !important;
                    height: 60px !important;
                }

                .userBal .iconLeft>[class*="icon"] [class*="icon"] {
                    line-height: 0 !important;
                }

                .userBal .iconLeft .data .title {

                    font-size: 15px;
                }

                .userBal .iconLeft .data .num {
                    font-size: 15px;
                }



                .cabNav {

                    min-height: 150px;

                    margin-bottom: 30px;
                }

                .balInfo {
                    padding-left: 0px;
                    margin-bottom: 70px;
                }


                .balInfo .item {
                    display: inline-block;
                    width: 100%;
                    text-align: center;

                    padding-left: 0px;
                }

                .balInfo .item .iconLeft {
                    padding-left: 20px;
                }

                .userBal .iconLeft {
                    padding-left: 100px !important;
                }

                .accInfo ul+.userBal {
                    margin-left: 20px !important;
                }

                #align-time {
                    display: flex !important;
                    align-items: center;
                }

                .topLine .clock .date span {
                    display: inline !important;
                }


            }
        </style>


    
</head>

<body>
    <div class="bodyWrap ">
        <header>
            <div class="topLine">
                <div class="">
                    <div class="table topNav full">

                        <div class="logoWrap tCell">
                            <div class="logo invisLink">
                                <?php $_smarty_tpl->_subTemplateRender("file:visual_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <img class="logo-image" src="img/logo.png" alt="logo">
                                <a href="?a=home">main</a>
                            </div>
                        </div>

                        <div class="nav-second">
                            <div id="align-time" class="clock tCell time ">
                                <span class="time gradTxt" id="time"></span>
                                <span class="date">
                                    <span class="day" id="day"></span>
                                    <span class="year" id="year"></span>
                                </span>
                            </div>

                            <div class="userBlock tCell top right">
                                <div class="iconLeft">
                                    <div class="icon" style="background-image: url(img/user_1.png);"></div>
                                    <div class="data">
                                        <span>Welcome,</span>

                                        <a href="?a=account"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</a>

                                    </div>
                                </div>
                            </div>
                            <div class="exit tCell top right">
                                <a href="?a=logout" class="btnFillColor1Sm">exit</a>
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
        </header>
        <div class="cabContent" style="background-image: url(img/grad_bg_rev.png), url(img/white_bg.png)">
            <div class="container">
                <div class="cabHead">
                    <div class="row">
                        <div class="left">
                            <div class=" user">
                                <div class="userpic" style="background-image: url(img/user_1.png);"><input></label>
                                </div>
                                <div>
                                    <div class="account">
                                        <span style="color:white; font-weight:bold">Username:</span>

                                        <a style=" color:white; font-weight:bold ;margin-left:5px;"
                                            href="?a=account"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</a>

                                    </div>
                                    <a href="?a=edit_account" class="editAcc"><span class="icon-edit"
                                            style="font-size: 38px;color:white;"></span><span
                                            style=" text-decoration:underline">Edit </br>
                                            account</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="accInfo cfix">
                                <ul>
                                    <li>

                                    </li>
                                </ul>
                                <div class="userBal">
                                    <div class="iconLeft">
                                        <div class="icon">
                                            <span class="icon-sum2 gradTxt"></span>
                                        </div>
                                        <div class="data">
                                            <span class="title">your balance:</span>

                                            <span class="num" id="balance"><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['ab_formated']->value['total'];?>
</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="btnsCab">
                                    <a href="?a=deposit" class="btnFillColor1MdIcon">
                                        <span class="iconLeft"><span class="icon-pay_out"></span><span
                                                class="data">deposit</span></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="left">
                            <div class="cabNav">
                                <ul>
                                    <li>
                                        <a href="?a=account" class="active"><span class="icon-profile"></span>
                                            account</a>
                                    </li>
                                    <li>

                                        <a href="?a=earnings#content_place"><span class="icon-hist"></span>Trades
                                            history</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="balInfo" id="infodata">
                                <!----<?php
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_total = $__section_p_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total !== 0) {
for ($__section_p_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_0_iteration <= $__section_p_0_total; $__section_p_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>














                                    <?php if ($_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['balance'] > 0) {?>
                                                                                                                                                                                                                                                                                                                                                                  								<div class="item">
                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="iconLeft">
                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="icon" style="background-image: url(img/ps_b/$ps[p].png);"></div>
                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="data">
                                                                                                                                                                                                                                                                                                                                                                                                                            <span>On the deposit: <b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['balance'];?>
</b></span>
                                                                                                                                                                                                                                                                                                                                                                                                                            <span>Balance: <b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['balance'];?>
</b></span>
                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                </div>
















                                    <?php }?>















                                <?php
}
}
?>---->


                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>SILVER(SOV23)<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1003]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1004]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1003]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1003]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1004]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1004]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>SILVER(SIU23)<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1005]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1006]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1005]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1005]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1006]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1006]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>ORANGE JUICE<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1001]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1002]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1001]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1001]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1002]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1002]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>GASOLINE RBOB<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1007]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1008]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1007]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1007]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1008]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1008]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>GOLD<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1009]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1010]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1009]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1009]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1010]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1010]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>HEATING OIL<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1011]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1012]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1011]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1011]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1012]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1012]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>COFFEE<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1013]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1014]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1013]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1013]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1014]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1014]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iconLeft">
                                        <div class="icon" style="background-image: ;"></div>
                                        <div class="data">

                                            <span>
                                                <h2>NATURAL GAS<h2><span>
                                                            <span>Open Positions:
                                                                <b><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['balances'][1015]['balance']+$_smarty_tpl->tpl_vars['userinfo']->value['balances'][1016]['balance'];?>
</b></span>
                                                            <span>Call=
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1015]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1015]['balance'];
} else { ?>0<?php }?></b></span>
                                                            <span>Put =
                                                                <b>$<?php if ($_smarty_tpl->tpl_vars['ps']->value[1016]['balance'] > 0) {
echo $_smarty_tpl->tpl_vars['ps']->value[1016]['balance'];
} else { ?>0<?php }?></b></span>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!----<div class="right">
                                <div class="balInfo" id="infodata">
                                                                        <a href="?a=referallinks" class="btnFillGradMd">Promo materials</a>
                                </div>
                            </div>---->



                        </div>
                    </div>
                </div>
<div id="content_place"></div><?php }
}
