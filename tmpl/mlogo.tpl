<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=1200">
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
	{literal}
	<style>
	
table.tab {    font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing: 1px;}
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
    background-color: rgba(255, 255, 255, 0.50);}


table.blank {font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing:.5px;}
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
  font-size: 16px;}
  
    .sbmt:hover {background-color: #2fa076;
  width: 300px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;}
</style>

 
{/literal}
</head>
    <body>
            <div class="bodyWrap">
            <header>
                <div class="topLine">
                    <div class="container">
                        <div class="table full">
                            <div class="logoWrap tCell">
                                <div class="logo invisLink">
                                    {include file="visual_logo.tpl"}
                                    <img src="img/logo.png" alt="logo" width="250" height="50">
                                    <a href="?a=home">main</a>
                                </div>
                            </div>
                                                        <div class="lang tCell right">
                            </div>
                            <div class="clock tCell right">
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
                                            <a href="?a=account">{$userinfo.username}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="exit tCell top right">
                                    <a href="?a=logout" class="btnFillColor1Sm">exit</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="container">
                        <center><ul>
                            <li><a href="?a=home">HOME</a></li>
                            <li><a href="?a=about">ABOUT US</a></li>
                            <li><a href="?a=faq">FAQ</a></li>
                            <li><a href="?a=rules">RULES</a></li>
                            <li><a href="?a=support">CONTACT US</a></li>
                        </ul></center>
                    </div>
                </div>
            </header>
                            <div class="cabContent" style="background-image: url(img/grad_bg_rev.png), url(img/white_bg.png)">
                <div class="container">
                    <div class="cabHead">
                        <div class="row">
                            <div class="left">
                                <div class="userInfo">
                                    <div class="userpic" style="background-image: url(img/user_1.png);"><input ></label></div>
                                    <span>Username:</span>
                                    <a href="?a=account">{$userinfo.username}</a>
                                    <a href="?a=edit_account" class="editAcc"><span class="icon-edit"></span>Edit account</a>
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
                                                <span class="num" id="balance">{$currency_sign}{$ab_formated.total}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnsCab">
                                        <a href="?a=deposit" class="btnFillColor1MdIcon">
                                            <span class="iconLeft"><span class="icon-pay_out"></span><span class="data">deposit</span></span>
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
                                            <a href="?a=account" class="active"><span class="icon-profile"></span> account</a>
                                        </li>
                                        <li>

                                            <a href="?a=earnings#content_place"><span class="icon-hist"></span>Trades history</a>
                                        </li>                                    </ul>
                                </div>
                            </div>
                            <div class="right">
                                <div class="balInfo" id="infodata">
								<!----{section name=p loop=$ps}
   {if $ps[p].balance > 0}
								<div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: url(img/ps_b/$ps[p].png);"></div>
                                                <div class="data">
                                                    <span>On the deposit: <b>{$currency_sign}{$ps[p].balance}</b></span>
                                                    <span>Balance: <b>{$currency_sign}{$ps[p].balance}</b></span>
                                                </div>
                                            </div>
                                        </div>{/if}
{/section}---->
										
										
                                        <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>SILVER(SOV23)<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1003.balance+$userinfo.balances.1004.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1003].balance > 0}{$ps[1003].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1004].balance > 0}{$ps[1004].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                             <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>SILVER(SIU23)<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1005.balance+$userinfo.balances.1006.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1005].balance > 0}{$ps[1005].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1006].balance > 0}{$ps[1006].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>ORANGE JUICE<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1001.balance+$userinfo.balances.1002.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1001].balance > 0}{$ps[1001].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1002].balance > 0}{$ps[1002].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                              <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>GASOLINE RBOB<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1007.balance+$userinfo.balances.1008.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1007].balance > 0}{$ps[1007].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1008].balance > 0}{$ps[1008].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                             <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>GOLD<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1009.balance+$userinfo.balances.1010.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1009].balance > 0}{$ps[1009].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1010].balance > 0}{$ps[1010].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>HEATING OIL<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1011.balance+$userinfo.balances.1012.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1011].balance > 0}{$ps[1011].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1012].balance > 0}{$ps[1012].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>COFFEE<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1013.balance+$userinfo.balances.1014.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1013].balance > 0}{$ps[1013].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1014].balance > 0}{$ps[1014].balance}{else}0{/if}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="iconLeft">
                                                <div class="icon" style="background-image: ;"></div>
                                                <div class="data">
                                                    <span><h2>NATURAL GAS<h2><span>
                                                    <span>Open Positions: <b>{$userinfo.balances.1015.balance+$userinfo.balances.1016.balance}</b></span>
                                                    <span>Call= <b>${if $ps[1015].balance > 0}{$ps[1015].balance}{else}0{/if}</b></span>
                                                    <span>Put = <b>${if $ps[1016].balance > 0}{$ps[1016].balance}{else}0{/if}</b></span>
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
                    <div id="content_place"></div>
                    
                    
                     
                    
                    
                    
                    
                    
                    
                    
                  
                    
                    
                    
                    
                    
                    