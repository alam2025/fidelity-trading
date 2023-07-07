<?php
/* Smarty version 4.3.0, created on 2023-07-06 22:07:13
  from 'C:\xampp\htdocs\smarty-php\tmpl\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a71ef194a1e8_69898713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ff5be4260292340e1ba45134dbbce0295f0a64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\home.tpl',
      1 => 1688674031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logo.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_64a71ef194a1e8_69898713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<style>
    .container {
        width: 90% !important;
        margin: 0 auto !important;
        padding : auto 10% !important;
    }

    [class*="planCard"] .left {
        width: 50% !important;
    }

    [class*="planCard"] {
        padding-left: 55% !important;
    }

     .mainBanner .content {
            text-align: right !important;
        }
.cap-title {
        font-size: 30px;
        font-weight: bold;
        color: black;

    }
    

    .cap-option {
        font-size: 1.5em;
        display: block;
        padding: 20px 0;
    }

    .cap-pct {
        font-size: 30px;
        font-weight: bold;
    }

    .divider {
        margin-top: auto;
        display: flex;
        flex-direction: column;



    }


    .offers {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
        margin-top: 50px;
    }

    .double-card {
        display: flex;
        border-radius: 20px;
        background-color: #3c9ef1;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    }
    .gradImg::before {
  
  height: 330px !important;
  
}

    .card {
        min-height: 500px;
        padding: 20px;
        display: flex;
        flex-direction: column;


}

    @media (max-width: 767px) {
       .offers {
            grid-template-columns: repeat(1, 1fr);
        }

        .double-card {
            flex-direction: column;
            gap: 40px;

        }
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
        .mainBanner{
            height: 600px !important;
        }
    }
</style>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3347456064a71ef19248a0_57449162', "css");
?>


<?php $_smarty_tpl->_subTemplateRender("file:logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- TradingView Widget BEGIN -->
<!-- TradingView Widget END -->
<div class="mainBanner gradImg" style="background-image: url(img/header_bg.jpg);height:800px ">
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
                        </div>
    </div>

</div>

<div class="about"  style="background-image: url(img/about_bg.jpg); ">
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
                    <p>The company <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 was founded in 2015 by a group of professional traders with the
                        aim of accumulating assets of several large investors for the most efficient trading on the
                        stock markets. Since the founding of <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
, our principles have been absolute
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




<?php echo '<script'; ?>
 type="text/javascript">
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
    <?php echo '</script'; ?>
>



<div class="advTempl" style="background-image: url(img/adv_bg.jpg);">
    <div class="container"><br><br><br>
        <span class="captionLight center">Why choose us?</span>
        <div class="advWrap">
            <div class="choose">
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
            <?php
$__section_s_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_s_0_total = $__section_s_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_0_total !== 0) {
for ($__section_s_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_0_iteration <= $__section_s_0_total; $__section_s_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
?>
                <div class="item col4">
                    <div class="newsCard">
                        <div class="img" style="background-image: url(img/news_pic_<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['id'];?>
.jpg);"></div>
                        <span class="date"><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['d'];?>
</span>
                        <span class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['title'];?>
</span>
                        <p>..</p>
                        <a href="?a=news#<?php echo $_smarty_tpl->tpl_vars['news']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['id'];?>
" class="btnFillGradMd">READ MORE</a>
                    </div>
            </div><?php
}
}
?>

        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "css"} */
class Block_3347456064a71ef19248a0_57449162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_3347456064a71ef19248a0_57449162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<?php
}
}
/* {/block "css"} */
}
