<?php
/* Smarty version 4.3.0, created on 2023-07-05 22:53:56
  from 'C:\xampp\htdocs\smarty-php\tmpl\earning_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a5d864db3855_35185956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9474e11a695fe4bb6775b266894bde0edac4eb2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\earning_history.tpl',
      1 => 1688590434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mlogo.tpl' => 1,
    'file:mfooter.tpl' => 1,
  ),
),false)) {
function content_64a5d864db3855_35185956 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    @media (max-width: 767px) {
        .filter [class*="formBlock"].date .selectric-wrapper {
            width: 100% !important;
        }

        .filter [class*="formBlock"].date .selectric-wrapper+.selectric-wrapper {
            margin-left: unset !important;
        }

        .filter [class*="formBlock"].date {
            width: 100% !important;
        }

        .filter [class*="formBlock"] {
            width: 100% !important;
        }

        [class*="caption"] {
            font-size: 20px !important;
        }

        .filter [class*='btn'] {
            margin-top: 40px !important;
            margin-bottom: 20px;
        }
    }
</style>
<?php $_smarty_tpl->_subTemplateRender("file:mlogo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="cabItem earn">
    <span class="captionDark center">Trades history</span><br>
    
        <?php echo '<script'; ?>
 language=javascript>
            function go(p) {
                document.opts.page.value = p;
                document.opts.submit();
            }
        <?php echo '</script'; ?>
>
    

    <div class="filter">
        <form method=post name=opts><input type="hidden" name="form_id" value="15348024919096"><input type="hidden"
                name="form_token" value="d12c34872c09cff53899708073177208">
            <input type=hidden name=a value=earnings>
            <input type=hidden name=page value=1>
            <div class="formBlockkDark date">
                <label for="earnFrom">From:</label>
                <select name=month_from class="selectricBl">
                    <?php
$__section_month_from_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_month_from_0_total = $__section_month_from_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_month_from'] = new Smarty_Variable(array());
if ($__section_month_from_0_total !== 0) {
for ($__section_month_from_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index'] = 0; $__section_month_from_0_iteration <= $__section_month_from_0_total; $__section_month_from_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index']++){
?>
                        <option value=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index'] : null)+1;?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['frm']->value['month_from']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['month']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month_from']->value['index'] : null)];?>

                        <?php
}
}
?>
                </select>
                <select name=day_from class="selectricBl">
                    <?php
$__section_day_from_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_day_from_1_total = $__section_day_from_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_day_from'] = new Smarty_Variable(array());
if ($__section_day_from_1_total !== 0) {
for ($__section_day_from_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index'] = 0; $__section_day_from_1_iteration <= $__section_day_from_1_total; $__section_day_from_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index']++){
?>
                        <option value=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index'] : null)+1;?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['frm']->value['day_from']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day_from']->value['index'] : null)];?>

                        <?php
}
}
?>
                </select>
                <select name=year_from class="selectricBl">
                    <?php
$__section_year_from_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_year_from_2_total = $__section_year_from_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_year_from'] = new Smarty_Variable(array());
if ($__section_year_from_2_total !== 0) {
for ($__section_year_from_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index'] = 0; $__section_year_from_2_iteration <= $__section_year_from_2_total; $__section_year_from_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index']++){
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['year']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index'] : null)];?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index'] : null)] == $_smarty_tpl->tpl_vars['frm']->value['year_from']) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['year']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_year_from']->value['index'] : null)];?>

                        <?php
}
}
?>
                </select>
            </div>
            <div class="formBlockDark">
                <label for="filterPaySys">Payment system:</label>
                <select class="selectricBl" name="ec">
                    <option value=-1>All eCurrencies</option>
                    <?php
$__section_ec_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ecs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ec_3_total = $__section_ec_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ec'] = new Smarty_Variable(array());
if ($__section_ec_3_total !== 0) {
for ($__section_ec_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index'] = 0; $__section_ec_3_iteration <= $__section_ec_3_total; $__section_ec_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index']++){
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['ecs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index'] : null)]['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['ecs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index'] : null)]['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ecs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ec']->value['index'] : null)]['name'];?>
</option>
                    <?php
}
}
?>
                </select>
            </div>
            <div class="formBlockkDark date">
                <label for="earnFrom">To:</label>
                <select name=month_to class="selectricBl">
                    <?php
$__section_month_to_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_month_to_4_total = $__section_month_to_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_month_to'] = new Smarty_Variable(array());
if ($__section_month_to_4_total !== 0) {
for ($__section_month_to_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index'] = 0; $__section_month_to_4_iteration <= $__section_month_to_4_total; $__section_month_to_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index']++){
?>
                        <option value=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index'] : null)+1;?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['frm']->value['month_to']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['month']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_month_to']->value['index'] : null)];?>

                        <?php
}
}
?>
                </select>
                <select name=day_to class="selectricBl">
                    <?php
$__section_day_to_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_day_to_5_total = $__section_day_to_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_day_to'] = new Smarty_Variable(array());
if ($__section_day_to_5_total !== 0) {
for ($__section_day_to_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index'] = 0; $__section_day_to_5_iteration <= $__section_day_to_5_total; $__section_day_to_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index']++){
?>
                        <option value=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index'] : null)+1;?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['frm']->value['day_to']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_day_to']->value['index'] : null)];?>

                        <?php
}
}
?>
                </select>
                <select name=year_to class="selectricBl">
                    <?php
$__section_year_to_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_year_to_6_total = $__section_year_to_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_year_to'] = new Smarty_Variable(array());
if ($__section_year_to_6_total !== 0) {
for ($__section_year_to_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index'] = 0; $__section_year_to_6_iteration <= $__section_year_to_6_total; $__section_year_to_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index']++){
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['year']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index'] : null)];?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index'] : null)] == $_smarty_tpl->tpl_vars['frm']->value['year_to']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_year_to']->value['index'] : null)];?>

                        <?php
}
}
?>
                </select>
            </div>
            <div class="formBlockDark">
                <label for="filterType">Type of transaction:</label>
                <select class="selectricBl" name="type">
                    <option value="">All operations</option>
                    <?php
$__section_opt_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['options']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_opt_7_total = $__section_opt_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_opt'] = new Smarty_Variable(array());
if ($__section_opt_7_total !== 0) {
for ($__section_opt_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index'] = 0; $__section_opt_7_iteration <= $__section_opt_7_total; $__section_opt_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index']++){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index'] : null)]['type'];?>
" <?php if ($_smarty_tpl->tpl_vars['options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index'] : null)]['selected']) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_opt']->value['index'] : null)]['type_name'];?>
</option>
                    <?php
}
}
?>
                </select>
            </div>
            <button type="submit" class="btnFillGradMd">Search</button>
        </form>
    </div>
    <br><br>
    <div class="tblTempl3">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_history_balance_mode']) {?>
            <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                    <th class=inheader>Date</th>
                    <th class=inheader>Type</th>
                    <th class=inheader>Credit</th>
                    <th class=inheader>Debit</th>
                    <th class=inheader>Balance</th>
                    <th class=inheader>P.S.</th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                    <?php
$__section_trans_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_trans_8_total = $__section_trans_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_trans'] = new Smarty_Variable(array());
if ($__section_trans_8_total !== 0) {
for ($__section_trans_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] = 0; $__section_trans_8_iteration <= $__section_trans_8_total; $__section_trans_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']++){
?>
                        <tr>
                            <td align=center nowrap><?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['d'];?>
</td>
                            <td><b><?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['transtype'];?>
</b><br><small class=gray><?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['description'];?>
</small></td>
                            <td align=right><b>
                                    <?php if ($_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['debitcredit'] == 0) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['actual_amount'];?>

                                    </b>
                                <?php } else { ?>
                                    &nbsp;
                                <?php }?>
                            </td>
                            <td align=right><b>
                                    <?php if ($_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['debitcredit'] == 1) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['actual_amount'];?>

                                    </b>
                                <?php } else { ?>
                                    &nbsp;
                                <?php }?>
                            </td>
                            <td align=right><b>
                                    <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['balance'];?>

                            </td>
                            <td><img src="images/<?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['ec'];?>
.gif" align=absmiddle hspace=1 height=17></td>
                        </tr>
                    <?php
}
}
?>
                <?php } else { ?>
                    <tr>
                        <td colspan=6 align=center>No transactions found</td>
                    </tr>
                <?php }?>
                <tr>
                    <td colspan=3>&nbsp;</td>

                    <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                    <tr>
                        <td colspan=2>Total for this period:</td>
                        <td align=right nowrap><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['periodcredit']->value;?>
</b></td>
                        <td align=right nowrap><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['perioddebit']->value;?>
</b></td>
                        <td align=right nowrap><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['periodbalance']->value;?>
</b></td>
                    </tr>
                <?php }?>
                <tr>
                    <td colspan=2>Total:</td>
                    <td align=right nowrap><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['allcredit']->value;?>
</b></td>
                    <td align=right nowrap><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['alldebit']->value;?>
</b></td>
                    <td align=right nowrap><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;
echo $_smarty_tpl->tpl_vars['allbalance']->value;?>
</b></td>
                </tr>
            </table>
        <?php } else { ?>
            <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                    <th class=inheader><b>Type</b></th>
                    <th class=inheader width=200><b>Amount</b></th>
                    <th class=inheader width=170><b>Date</b></th>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                    <?php
$__section_trans_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_trans_9_total = $__section_trans_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_trans'] = new Smarty_Variable(array());
if ($__section_trans_9_total !== 0) {
for ($__section_trans_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] = 0; $__section_trans_9_iteration <= $__section_trans_9_total; $__section_trans_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']++){
?>
                        <tr>
                            <td><b><?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['transtype'];?>
</b></td>
                            <td width=200 align=right><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['actual_amount'];?>
</b> <img
                                    src="images/<?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['ec'];?>
.gif" align=absmiddle hspace=1 height=17></td>
                            <td width=170 align=center valign=bottom><b><small><?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['d'];?>
</small></b></td>
                        </tr>
                        <tr>
                            <td colspan=3 class=gray><small><?php echo $_smarty_tpl->tpl_vars['trans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_trans']->value['index'] : null)]['description'];?>
</small></td>
                        </tr>
                    <?php
}
}
?>
                <?php } else { ?>
                    <tr>
                        <td colspan=3 align=center>No transactions found</td>
                    </tr>
                <?php }?>
                <tr>
                    <td colspan=3>&nbsp;</td>

                    <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                    <tr>
                        <td colspan=2>For this period:</td>
                        <td align=right><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['periodsum']->value;?>
</b></td>
                    </tr>
                <?php }?>
                <tr>
                    <td colspan=2>Total:</td>
                    <td align=right><b><?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['allsum']->value;?>
</b></td>
                </tr>
            </table>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['colpages']->value > 1) {?>
            <center>
                <?php if ($_smarty_tpl->tpl_vars['prev_page']->value > 0) {?>
                    <a href="javascript:go('<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
')">&lt;&lt;</a>
                <?php }?>
                <?php
$__section_p_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_10_total = $__section_p_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_10_total !== 0) {
for ($__section_p_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_10_iteration <= $__section_p_10_total; $__section_p_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['current'] == 1) {?>
                        <?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['page'];?>

                    <?php } else { ?>
                        <a href="javascript:go('<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['page'];?>
')"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['page'];?>
</a>
                    <?php }?>
                <?php
}
}
?>
                <?php if ($_smarty_tpl->tpl_vars['next_page']->value > 0) {?>
                    <a href="javascript:go('<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
')">&gt;&gt;</a>
                <?php }?>
            </center>
        <?php }?>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
