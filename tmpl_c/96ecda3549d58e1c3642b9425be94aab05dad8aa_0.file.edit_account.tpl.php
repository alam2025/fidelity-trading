<?php
/* Smarty version 4.3.0, created on 2023-07-05 22:21:19
  from 'C:\xampp\htdocs\smarty-php\tmpl\edit_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a5d0bf48cc63_46108377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ecda3549d58e1c3642b9425be94aab05dad8aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\edit_account.tpl',
      1 => 1688588476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mlogo.tpl' => 1,
    'file:mfooter.tpl' => 1,
  ),
),false)) {
function content_64a5d0bf48cc63_46108377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-php\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<style>
  @media (max-width:767px) {
    [class*="btnFill"][class*="Grad"][class*="Lg"] {
      padding: 10px 10px !important;
    }

    [class*="btnFill"][class*="Lg"] {
      line-height: 30px !important;
      font-size: 11px !important;
    }
  }
</style>
<?php $_smarty_tpl->_subTemplateRender("file:mlogo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="cabItem earn">
  <span class="captionDark center">Edit Account</span><br>


  <div class="wrap">
    <div class="row">

      <div>
        <div class="formBlockDark">
          


            <?php echo '<script'; ?>
 language=javascript>
              function IsNumeric(sText) {
                var ValidChars = "0123456789.";
                var IsNumber = true;
                var Char;
                if (sText == '') return false;
                for (i = 0; i < sText.length && IsNumber == true; i++) {
                  Char = sText.charAt(i);
                  if (ValidChars.indexOf(Char) == -1) {
                    IsNumber = false;
                  }
                }
                return IsNumber;
              }

              function checkform() {
                if (document.editform.fullname.value == '') {
                  alert("Please type your full name!");
                  document.editform.fullname.focus();
                  return false;
                }
              
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
                
                  if (document.editform.address.value == '') {
                    alert("Please enter your address!");
                    document.editform.address.focus();
                    return false;
                  }
                  if (document.editform.city.value == '') {
                    alert("Please enter your city!");
                    document.editform.city.focus();
                    return false;
                  }
                  if (document.editform.state.value == '') {
                    alert("Please enter your state!");
                    document.editform.state.focus();
                    return false;
                  }
                  if (document.editform.zip.value == '') {
                    alert("Please enter your ZIP!");
                    document.editform.zip.focus();
                    return false;
                  }
                  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
                    alert("Please choose your country!");
                    document.editform.country.focus();
                    return false;
                  }
                
              <?php }?>
              
                if (document.editform.password.value != document.editform.password2.value) {
                  alert("Please check your password!");
                  document.editform.fullname.focus();
                  return false;
                }
              
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                
                  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
                    alert("Please check your transaction code!");
                    document.editform.transaction_code2.focus();
                    return false;
                  }
                
              <?php }?>
              
              
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?>
                
                  if (document.editform.email.value == '') {
                    alert("Please enter your e-mail address!");
                    document.editform.email.focus();
                    return false;
                  }
                
              <?php }?>
              

                for (i in document.editform.elements) {
                  f = document.editform.elements[i];
                  if (f.name && f.name.match(/^pay_account/)) {
                    if (f.value == '') continue;
                    var notice = f.getAttribute('data-validate-notice');
                    var invalid = 0;
                    if (f.getAttribute('data-validate') == 'regexp') {
                      var re = new RegExp(f.getAttribute('data-validate-regexp'));
                      if (!f.value.match(re)) {
                        invalid = 1;
                      }
                    } else if (f.getAttribute('data-validate') == 'email') {
                      var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                      if (!f.value.match(re)) {
                        invalid = 1;
                      }
                    }
                    if (invalid) {
                      alert('Invalid account format. Expected ' + notice);
                      f.focus();
                      return false;
                    }
                  }
                }

                return true;
              }
            <?php echo '</script'; ?>
>
          

          <br>
          <center>
            <form action="" method=post onsubmit="return checkform()" name=editform>


              <table cellspacing=0 cellpadding=2 border=0>
                <tr>
                  <td>Account Name:</td>
                  <td><input type=text value='' disabled class=inpts size=30></td>
                </tr>
                <tr>
                  <td>Registration date:</td>
                  <td><input type=text value='{}' disabled class=inpts size=30></td>
                </tr>
                <tr>
                  <td>Your Full Name:</td>
                  <td><input type=text name=fullname value='{}' class=inpts size=30>
                <tr>
                  <td>Your Address:</td>
                  <td><input type=text name=address value="{}" class=inpts size=30>
                  </td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>
                  <tr>
                    <td>Your Address:</td>
                    <td><input type=text name=address value="{}" class=inpts size=30>
                    </td>
                  </tr>
                  <tr>
                    <td>Your City:</td>
                    <td><input type=text name=city value="{}" class=inpts size=30></td>
                  </tr>
                  <tr>
                    <td>Your State:</td>
                    <td><input type=text name=state value="{}" class=inpts size=30></td>
                  </tr>
                  <tr>
                    <td>Your Zip:</td>
                    <td><input type=text name=zip value="{}" class=inpts size=30></td>
                  </tr>
                  <tr>
                    <td>Your Country:</td>
                    <td>
                      <select name=country class=inpts>
                        <option value="">--SELECT--</option>
                        <?php
$__section_c_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_c_0_total = $__section_c_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_c'] = new Smarty_Variable(array());
if ($__section_c_0_total !== 0) {
for ($__section_c_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index'] = 0; $__section_c_0_iteration <= $__section_c_0_total; $__section_c_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_c']->value['index']++){
?>
                          <option></option>
                        <?php
}
}
?>
                      </select>
                    </td>
                  </tr>
                <?php }?>

                <tr>
                  <td>New Password:</td>
                  <td><input type=password name=password value="" class=inpts size=30></td>
                </tr>
                <tr>
                  <td>Retype Password:</td>
                  <td><input type=password name=password2 value="" class=inpts size=30></td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                  <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] != 1) {?>
                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] != '') {?>
                      <tr>
                        <td>Current Transaction Code:</td>
                        <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
                      </tr>
                    <?php }?>
                  <?php }?>
                  <tr>
                    <td>New Transaction Code:</td>
                    <td><input type=password name=transaction_code value="" class=inpts size=30></td>
                  </tr>
                  <tr>
                    <td>Retype Transaction Code:</td>
                    <td><input type=password name=transaction_code2 value="" class=inpts size=30></td>
                  </tr>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pay_accounts']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                  <tr>
                    <td>Your <?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
 acc no:</td>
                    <td>
                      <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['account'] != '') {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true);?>

                      <?php } else { ?><input type=text disabled class=inpts size=30 name="pay_account[<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
]"
                          value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['ps']->value['id']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['account'] ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                          data-validate="<?php echo $_smarty_tpl->tpl_vars['ps']->value['validate']['func'];?>
"
                          data-validate-<?php echo $_smarty_tpl->tpl_vars['ps']->value['validate']['func'];?>
="<?php echo $_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']];?>
"
                        data-validate-notice="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?></td>
                  </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mpay_accounts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['accounts'], 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                    <tr>
                      <td>Your <?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
:</td>
                      <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['value'] != '') {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?><input type=text disabled class=inpts size=30
                            name="pay_account[<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
][<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
]"
                          value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['p']->value['id']][$_smarty_tpl->tpl_vars['ps']->value['name']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?></td>
                    </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                  <td>Your E-mail address:</td>
                  <td><input type=text name=email value='{}' class=inpts size=30></td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_rcb']) {?>
                  <tr>
                    <td>Your RCB Percent:</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['rcb_lock']) {
echo $_smarty_tpl->tpl_vars['userinfo']->value['rcb'];?>
%
                      <?php } else { ?><input type=text class=inpts size=30 name="rcb"
                        value="<?php echo smarty_modifier_number_format((($tmp = $_smarty_tpl->tpl_vars['frm']->value['rcb'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['rcb'] ?? null : $tmp),2);?>
"><?php }?></td>
                  </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['admin_auto_pay_earning'] == 1) {?>
                  <tr>
                    <td colspan=2><input type=checkbox name=user_auto_pay_earning value=1
                        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['user_auto_pay_earning'] == 1) {?>checked<?php }?>> Receive earnings directly to e-currency
                      account</td>
                  </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] == 1) {?>
                  <tr>
                    <td>Current Transaction Code:</td>
                    <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
                  </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['edit_account']) {?>
                  <tr>
                    <td>2FA Code:</td>
                    <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time"
                        id="tfa_time"></td>
                  </tr>
                  
                    <?php echo '<script'; ?>
 language=javascript>
                      document.getElementById('tfa_time').value = (new Date()).getTime();
                    <?php echo '</script'; ?>
>
                  
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['edit_account']) {?>
                  <tr>
                    <td class=menutxt><img
                        src="?a=show_validation_image&<?php echo $_smarty_tpl->tpl_vars['ti']->value['session']['name'];?>
=<?php echo $_smarty_tpl->tpl_vars['ti']->value['session']['id'];?>
&rand=<?php echo $_smarty_tpl->tpl_vars['ti']->value['session']['rand'];?>
"></td>
                    <td><input type=text name=validation_number class=inpts size=30></td>
                  </tr>
                <?php }?>

                <tr>
                  <td>&nbsp;</td>
                  <td>

                    <button type="submit" class="btnFillGradLg center">Change Account data</button>

                  </td>
                </tr>
              </table>
            </form>
          </center>
        </div>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
