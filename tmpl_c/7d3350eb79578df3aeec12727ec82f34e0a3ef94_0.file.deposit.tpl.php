<?php
/* Smarty version 4.3.0, created on 2023-07-05 22:01:06
  from 'C:\xampp\htdocs\smarty-php\tmpl\deposit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a5cc02c40462_22770634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3350eb79578df3aeec12727ec82f34e0a3ef94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\deposit.tpl',
      1 => 1688587263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mlogo.tpl' => 1,
    'file:mfooter.tpl' => 1,
  ),
),false)) {
function content_64a5cc02c40462_22770634 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .plans {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    @media (max-width:767px) {
        .plans {
            grid-template-columns: repeat(1, 1fr);
        }

        [class*="planCard"][class*="Sm"] .cap {
            padding-left: 20px !important;
        }

        [class*="planCard"] .cap {
            font-size: 20px !important;
        }

        [class*="planCard"][class*="Sm"] .descr {
            padding-left: 5px !important;
        }

        [class*="planCard"] .descr .pct+span {
            font-size: 15px !important;
        }

        .pct {
            font-size: 20px !important;
        }

        .payForm {
            padding: 0px 30px !important;
        }

        .payMet li {
            padding-top: 20;
        }
    }
</style>
<?php $_smarty_tpl->_subTemplateRender("file:mlogo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="cabItem makePay">
    <span class="captionDark center">make deposit</span>
    <div class="operWrap">
        <div style="text-align: center;" class="error_white">


        </div>


        <?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>

            <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
                You can deposit once a month only.
            <?php }?>

        <?php } else { ?>

            
                <?php echo '<script'; ?>
 language="javascript">
                    <!--
                        function openCalculator(id) {

                            w = 225;
                            h = 400;
                            t = (screen.height - h - 30) / 2;
                            l = (screen.width - w - 30) / 2;
                            window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w +
                                ",height=" + h + ",resizable=1,scrollbars=0");

                        

          
                    <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>

              
                        
                                for (i = 0; i < document.spendform.h_id.length; i++) {
                                    if (document.spendform.h_id[i].value == id) {
                                        document.spendform.h_id[i].checked = true;
                                    }
                                }
                                
                        

                            
                    <?php }?>

           
                    

                        }

                        function updateCompound() {
                            var id = 0;
                            var tt = document.spendform.h_id.type;
                            if (tt && tt.toLowerCase() == 'hidden') {
                                id = document.spendform.h_id.value;
                            } else {
                                for (i = 0; i < document.spendform.h_id.length; i++) {
                                    if (document.spendform.h_id[i].checked) {
                                        id = document.spendform.h_id[i].value;
                                    }
                                }
                            }

                            var cpObj = document.getElementById('compound_percents');
                            if (cpObj) {
                                while (cpObj.options.length != 0) {
                                    cpObj.options[0] = null;
                                }
                            }

                            if (cps[id] && cps[id].length > 0) {
                                document.getElementById('coumpond_block').style.display = '';

                                for (i in cps[id]) {
                                    cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                                }
                            } else {
                                document.getElementById('coumpond_block').style.display = 'none';
                            }
                        }
                        var cps = {};
                        -->
                    <?php echo '</script'; ?>
>
                

                <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
                    <h1>The deposit has been successfully saved.</h1>
                    <br><br>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
                    <h1>The deposit has been saved. Your broker will contact you as soon as possible to process your investments
                        deposit.</h1><br><br>
                <?php }?>

                <form method=post name="spendform" action="#content_place" onsubmit="calc">
                    <input type=hidden name=a value=deposit>



                    <span class="subtitle">01. select plan</span>
                    <div class="wrap">
                        <div class="plans">

                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f1" type="radio" name="h_id" value='4' checked="checked" data-perc="4.00"
                                        data-days="30">
                                    <label for="f1"></label>
                                    <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                        <div class="tCell middle">
                                            <span class="cap">GOLD</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct">One Option = </span>
                                            <span>100 Troy ounces</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f2" type="radio" name="h_id" value='5' data-perc="5.00" data-days="30">
                                    <label for="f2"></label>
                                    <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Silver</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style=" font-size: 30px;">One Option = </span>
                                            <span>5000 Troy ounces</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f3" type="radio" name="h_id" value='6' data-perc="5.5" data-days="30">
                                    <label for="f3"></label>
                                    <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Unleaded Gasoline</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style=" font-size: 30px;">One option = </span>
                                            <span>42,000 gallons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f4" type="radio" name="h_id" value='7' data-perc="6.00" data-days="30">
                                    <label for="f4"></label>
                                    <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Heating Oil</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style="font-size: 30px;">One option = </span>
                                            <span>42,000 gallons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f5" type="radio" name="h_id" value='8' checked="checked" data-perc="4.00"
                                        data-days="30">
                                    <label for="f5"></label>
                                    <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Crude Oil</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style="font-size: 30px;">One Option = </span>
                                            <span>1000 Barrels</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f6" type="radio" name="h_id" value='9' data-perc="5.00" data-days="30">
                                    <label for="f6"></label>
                                    <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Coffee</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style="font-size: 30px;">One Option = </span>
                                            <span>37,500 lbs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f7" type="radio" name="h_id" value='10' data-perc="5.5" data-days="30">
                                    <label for="f7"></label>
                                    <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Orange Juice</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style=" font-size: 30px;">One option = </span>
                                            <span>15,000 lbs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="planWrapCard">
                                    <input id="f8" type="radio" name="h_id" value='11' data-perc="6.00" data-days="30">
                                    <label for="f8"></label>
                                    <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                        <div class="tCell middle">
                                            <span class="cap">Soy Beans</span>
                                        </div>
                                        <div class="descr tCell middle">
                                            <span class="pct" style="font-size: 30px;">One option = </span>
                                            <span>500 Bushels</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="wrap">
                        <div class="plans">
                            <div class="item ">
                                <span class="subtitle">02. enter amount</span>
                                <div class="payForm">
                                    <div class="formBlockDark">
                                        <label class="center" for="sumCab">Amount:</label>
                                       
                                        <input type=text name=amount value='<?php echo $_smarty_tpl->tpl_vars['min_deposit']->value;?>
' id="calc_amount">
                                    </div>
                                </div>

                            </div>
                            <div class="item ">
                                <span class="subtitle">03. payments method</span>
                                <div class="payForm">
                                    <ul class="payMet">

                                        <!---<li>
                                    <input type="radio" name="payMet" id="payMet1" checked>
                                    <label for="payMet1">From balance</label>
                                </li>--->
                                        <li>
                                            <input type="radio" name="payMet" id="payMet2">
                                            <label for="payMet2">From payment system</label>
                                        </li>
                                    </ul>
                                    <div class="formBlockDark">
                                        <select class="paySysList" data-id="payMet1" name="type">
                                            <?php
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_total = $__section_p_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total !== 0) {
for ($__section_p_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_0_iteration <= $__section_p_0_total; $__section_p_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                                                <?php if ($_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['balance'] > 0 && $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['status'] == 1) {?> <option value="account_<?php echo $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['id'];?>
">
                                                        Balance <?php echo $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['name'];?>
</option>
                                                <?php }?>
                                            <?php
}
}
?>
                                        </select>
                                        <select class="paySysList" data-id="payMet2">
                                            <?php
$__section_p_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_1_total = $__section_p_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_1_total !== 0) {
for ($__section_p_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_1_iteration <= $__section_p_1_total; $__section_p_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                                                <?php if ($_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['status']) {?>
                                                    <option value="process_<?php echo $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['name'];?>
</option>
                                                <?php }?>
                                            <?php
}
}
?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnFillGradLg center">MAKE DEPOSIT</button>
                </form>

                
                    <?php echo '<script'; ?>
 language=javascript>
                        for (i = 0; i < document.spendform.type.length; i++) {
                            if ((document.spendform.type[i].value.match(/^process_/))) {
                                document.spendform.type[i].checked = true;
                                break;
                            }
                        }
                        updateCompound();
                    <?php echo '</script'; ?>
>
                
            <?php }?>
        </div>
        
            <?php echo '<script'; ?>
 type="text/javascript">
                function calc() {
                    percent = jQuery('input[name=h_id]:checked').data('perc');
                    period = jQuery('input[name=h_id]:checked').data('days');
                    amount = jQuery('#calc_amount').val();

                    if (period > 1) jQuery('#profit_day').html((amount * percent / 100).toFixed(2));
                    else jQuery('#profit_day').html('-');
                    jQuery('#profit').html((period * amount * percent / 100).toFixed(2));
                }

                jQuery(document).ready(function() {
                    calc();

                    jQuery('#calc_amount').on('change keyup', function() {
                        calc();
                    });

                    jQuery('input[name=h_id]').on('change', function() {
                        /*jQuery('#calc_amount').val(jQuery('#calc_plan option:checked').data('min'));
                jQuery('#calc_amount').attr('min', jQuery('input[name=h_id]:checked').data('min'));
                jQuery('#calc_amount').attr('max', jQuery('input[name=h_id]:checked').data('max'));*/

                        calc();
                    });
                })
            <?php echo '</script'; ?>
>
        
    <?php $_smarty_tpl->_subTemplateRender("file:mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
