<style>
    .container {
        width: 90% !important;
        margin: 0 auto !important;
    }

    [class*="planCard"] .left {
        width: 50% !important;
    }

    [class*="planCard"] {
        padding-left: 55% !important;
    }

    @media (max-width: 767px) {
        .container {
            width: 95% !important;
            margin: 0 auto !important;
        }

        [class*="btnFill"][class*="Color"][class*="Md"] {
            padding: 0px !important;
            margin-right: 10px !important;
        }

        .mainBanner .content {
            text-align: left !important;
        }

        .mainBanner span {
            font-size: 20px !important;
        }

        .heading {
            text-align: left !important;
            font-size: 25px !important;
        }

        .mainBanner .content .textBlock {
            margin-top: 20px;
            padding: 10px !important;
            text-align: left !important;
        }

        .about .left {
            width: 90% !important;
            margin: 0 auto !important;
        }

        .cfix>.left,
        .cfix>.item,
        .row>.left,
        .row>.item,
        .grid>.left,
        .grid>.item {
            float: left !important;
        }

        .about .right {
            width: 90% !important;
            margin: 0 auto !important;
            margin-top: 40px !important;
        }

        .cfix>.right,
        .cfix>.item.right,
        .row>.right,
        .row>.item.right,
        .grid>.right,
        .grid>.item.right {
            float: left !important;
        }

        [class*="caption"].center {
            text-align: left !important;
        }

        .rigth-side {
            font-size: 16px;
        }

        .row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .col6 {
            width: 100% !important;
        }

        .descr {
            display: flex !important;
            flex-direction: column !important;
        }

        .col4 {
            width: 100% !important;
        }

        .headAdv {
            width: 100% !important;
        }

        .btnFillColor1Md {
            font-size: 12px !important;
        }

        [class*="planCard"] .cap {
            font-size: 20px !important;
        }

        .left>h2 {
            font-size: 16px !important;
        }

        .descr>span {
            font-size: 20px !important;
        }

        .planCardFirst {
            display: flex !important;
            flex-direction: column !important;
        }
        .col6{
            margin-bottom: 20px !important;
        }
    }

    @media (min-width:768px) and (max-width:992px) {
        .descr {
            display: flex !important;
            flex-direction: column !important;
        }

        .col4 {
            width: 50% !important;
        }
    }
</style>


{block name="css"}
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
{/block}

{include file="logo.tpl"}

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>

    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
        async>
        {
            "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "NYMEX:HO1!",
                    "title": "NY HARBOR ULSD"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "NYMEX:RB1!",
                    "title": "RBOB GASOLINE"
                },
                {
                    "proName": "NYMEX:CL1!",
                    "title": "CRUDE OIL WTI"
                },
                {
                    "description": "WHEAT",
                    "proName": "CBOT:ZW1!"
                },
                {
                    "description": "GOLD",
                    "proName": "COMEX:GC1!"
                },
                {
                    "description": "NATURAL GAS",
                    "proName": "NYMEX:NG1!"
                },
                {
                    "description": "SILVER",
                    "proName": "COMEX:SI1!"
                }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "en"
        }
    </script>
</div>
<!-- TradingView Widget END -->
<div class="mainBanner gradImg" style="background-image: url(img/header_bg.jpg);">
    <div class="container">
        <div class="content">
            <span class="heading">FIDELITY TRADING FX</span>
            <span>INNOVATION QUANT INVESTMENTS</span>
            <div class="textBlock">
                <p>A distinguished reputation, innovative approach and profitable working conditions are our main
                    advantages and this is why we're the choice of over 100.000 clients.</p>
            </div>
            <a href="?a=signup" class="btnFillGradLg">Get started now</a>
        </div>

        <div class="headAdv">
            <ul>
                <li>
                    <div class="iconLeft">
                        <span class="icon-adv1"></span>
                        <span class="data">Officially registered company</span>
                    </div>
                </li>
                <li>
                    <div class="iconLeft">
                        <span class="icon-adv3"></span>
                        <span class="data">Innovative<br>approach</span>
                    </div>
                </li>
                <li>
                    <div class="iconLeft">
                        <span class="icon-adv2"></span>
                        <span class="data">Profitable working conditions</span>
                    </div>
                </li>
            </ul>
            <p>All this is only the tip of the iceberg, register on our website in order to experience all the
                privileges of working with {$settings.site_name}</p>
        </div>
    </div>

</div>

<div class="about" style="background-image: url(img/about_bg.jpg);">
    <div class="container">
        <div class="cfix">
            <div class="left">
                <span class="captionLight">About company</span>
                <div class="license">
                </div>
                <div class="address">
                    <div class="iconLeft">
                        <span class="icon-location gradTxt"></span>
                        <span class="data">Sandringham Road Leyton, London, United Kingdom.</span>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="textBlock">
                    <p>The company {$settings.site_name} was founded in 2015 by a group of professional traders with the
                        aim of accumulating assets of several large investors for the most efficient trading on the
                        stock markets. Since the founding of {$settings.site_name}, our principles have been absolute
                        transparency, dedication to our clients, as well as a complete understanding of the features of
                        our profile market and the expectations of different types of investors.</p>
                    <p>Using a unique strategy of the game in the stock markets, our specialists are guaranteed to bring
                        profit to all our partners, so you can not worry about the safety of their funds, despite the
                        potential level of risk of this type of investment.</p>
                </div>
                <div class="btnsWrap">
                    <a href="?a=about" class="btnFillColor1Lg">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="plan page" style="background-image: url(img/chart_bg.png), url(img/grey_bg.png);">
    <div class="container">
        <div class="textBlock">

        </div>
        <span class="captionDark center">Investment offers</span>
        <div class="wrap">
            <div class="row">


                <div class="item col6">
                    <div class="planCardFirst">
                        <div class="left">
                            <span class="cap" style="color: black;">GOLD</span>

                            <h2>One Option = 100 Troy ounces </h2>


                            <div class="descr" style="position: absolute; left: 28px;bottom: 32px;">
                                <span class="pct" style="font-size: 30px; color: black;">UNLEADED GASOLINE</span>
                                <span style="color: black;">One option = 42,000 gallons</span>
                                <a href="?a=signup" class="btnFillColor1Md" style="color: black;">Make deposit</a>
                            </div>



                        </div>


                        <div>
                            <span class="cap" style=" color: black;">Silver</span>

                            <h2 class="rigth-side" style=" color: black;">One Option = 5000 Troy ounces</h2>


                            <div class="descr" style=" position: absolute;  left: unset;  bottom: 32px;  color: red;">
                                <span class="pct" style="color: black; font-size: 30px;   margin-bottom: 20px;">HEATING
                                    OIL</span>
                                <span style=" color: black;">One Option = 42,000 gallons</span>
                                <a href="?a=signup" class="btnFillColor1Md" style=" color: black;">Make deposit</a>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="item col6">
                    <div class="planCardFirst">
                        <div class="left" style=" background-color: #44d29d;">
                            <span class="cap" style=" color: black;">CRUDE OIL</span>

                            <h2 style=" color: black;">One Option = 1000 Barrels</h2>


                            <div class="descr" style=" position: absolute; left: 28px; bottom: 32px;">
                                <span class="pct" style="font-size: 30px; color: black;">ORANGE JUICE</span>
                                <span style=" color: black;">One Option = 15,000 lbs</span>
                                <a href="?a=signup" class="btnFillColor1Md"
                                    style="  background: #44d29d !important;  color: black;">Make deposit</a>
                            </div>



                        </div>


                        <div>
                            <span class="cap" style=" color: black;">COFFEE</span>

                            <h2 class="rigth-side" style="color: black;">One Option = 37,500 lbs </h2>


                            <div class="descr" style="position: absolute; left: unset; bottom: 32px; color: red;">
                                <span class="pct"
                                    style=" color: black;  font-size: 30px; margin-bottom: 30px;">SOYBEAN</span>
                                <span style=" color: black;">One Option = 5000 Bushels</span>
                                <a href="?a=signup" class="btnFillColor1Md"
                                    style="   background: #44d29d !important; color: black;">Make deposit</a>
                            </div>
                        </div>
                    </div>
                </div>








            </div>
        </div>

    </div>
</div>


{literal}
<script type="text/javascript">
    function calc() {
        percent = jQuery('#calc_plan option:checked').data('perc');
        period = jQuery('#calc_plan option:checked').data('per');
        amount = jQuery('#calc_amount').val();
        jQuery('#profit').html((period * amount * percent / 100).toFixed(2));
    }

    jQuery(document).ready(function() {
        calc();

        jQuery('#calc_amount').on('change keyup', function() {
            calc();
        });

        jQuery('#calc_plan').on('change', function() {
            jQuery('#calc_amount').val(jQuery('#calc_plan option:checked').data('min'));
            jQuery('#calc_amount').attr('min', jQuery('#calc_plan option:checked').data('min'));
            jQuery('#calc_amount').attr('max', jQuery('#calc_plan option:checked').data('max'));

                calc();
            });
        })
    </script>
{/literal}


<div class="advTempl" style="background-image: url(img/adv_bg.jpg);">
    <div class="container"><br><br><br>
        <span class="captionLight center">Why choose us?</span>
        <div class="advWrap">
            <div class="grid">
                <div class="item col4">
                    <div class="in">
                        <span class="icon-phone gradTxt"></span>
                        <span class="title">Round the clock technical support</span>
                        <p>Our specialists are available 24 hours 7 days a week and are ready to answer any of your
                            questions at any time convenient for you!</p>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in">
                        <span class="icon-chart gradTxt"></span>
                        <span class="title">Careful asset selection</span>
                        <p>We know the price of victories and the bitterness of defeats, so we carefully select
                            investment assets.</p>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in">
                        <span class="icon-team gradTxt"></span>
                        <span class="title">Close-knit team of professionals</span>
                        <p>Over the years of successful work in the financial markets, we have gathered a team of the
                            best specialists in their areas, with extensive experience in all necessary fields.</p>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in">
                        <span class="icon-docs gradTxt"></span>
                        <span class="title">Officially registered company</span>
                        <p>Our company has all the necessary licenses and certificates to conduct its activities, and
                            has an office in London, United Kingdom.</p>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in">
                        <span class="icon-cash gradTxt"></span>
                        <span class="title">Guarantee of safety of your funds</span>
                        <p>Thanks to the selection of extremely reliable investment assets, as well as due to the active
                            arbitration policy, we guarantee 100% result for each of our investors!</p>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in">
                        <span class="icon-pass gradTxt"></span>
                        <span class="title">High security</span>
                        <p>All transactions and personal data of our investors are securely protected from any leaks and
                            third-party interventions!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="wrap">
        <div class="row">
            {section name=s loop=$news}
                <div class="item col4">
                    <div class="newsCard">
                        <div class="img" style="background-image: url(img/news_pic_{$news[s].id}.jpg);"></div>
                        <span class="date">{$news[s].d}</span>
                        <span class="title">{$news[s].title}</span>
                        <p>..</p>
                        <a href="?a=news#{$news[s].id}" class="btnFillGradMd">READ MORE</a>
                    </div>
            </div>{/section}

        </div>
    </div>
</div>


{include file="footer2.tpl"}