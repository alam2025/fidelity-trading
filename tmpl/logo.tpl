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
	<!----AA320---->
	{literal}
	<style>
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
                                 {if $userinfo.logged != 1}
								 <div class="logReg tCell right">
                                    <a href="?a=login" class="btnFillColor1Sm">login</a>
                                    <a href="?a=signup" class="btnFillColor2Sm">sign up</a>
                                </div>{/if}
                                                        <div class="lang tCell right">
                            </div>
                 
							
							
							
                            <div class="clock tCell right">
                                <span class="time gradTxt" id="time"></span>
                                <span class="date">
                                    <span class="day" id="day"></span>
                                    <span class="year" id="year"></span>
                                </span>
                            </div>
							
							
							
							{if $userinfo.logged == 1}
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
                                </div>{/if}
							
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