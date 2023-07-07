 {include file="mlogo.tpl"}
    <span class="captionDark center">Advanced login security settings</span>
    <div class="wrap">
       <form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
            <div class="row">
                <div class="item col6">
                    <div class="editForm info"  style="min-height: 0;">
                        <div class="title">Detect IP Address Change Sensitivity</div>
                        <div class="formBlockDark" style="text-align: center;">
                            <input type=radio name=ip value=disabled {if $security.detect_ip == 'disabled'}checked{/if} style="display: inline-block; width: auto;">Disabled&nbsp;&nbsp;&nbsp;
                            <input type=radio name=ip value=medium {if $security.detect_ip == 'medium'}checked{/if} style="display: inline-block; width: auto;">Medium&nbsp;&nbsp;&nbsp;
                            <input type=radio name=ip value=high {if $security.detect_ip == 'high'}checked{/if} style="display: inline-block; width: auto;">High&nbsp;&nbsp;&nbsp;
                            <input type=radio name=ip value=always {if $security.detect_ip == 'always'}checked{/if} style="display: inline-block; width: auto;">Paranoic
                        </div>
                    </div>
                </div>
                <div class="item col6">
                    <div class="editForm pass" style="min-height: 0;">
                        <div class="title">Detect Browser Change</div>
                        <div class="formBlockDark" style="text-align: center;">
                            <input type=radio name=browser value=disabled {if $security.detect_browser == 'disabled'}checked{/if} style="display: inline-block; width: auto;">Disabled&nbsp;&nbsp;&nbsp;
                            <input type=radio name=browser value=enabled {if $security.detect_browser == 'enabled'}checked{/if} style="display: inline-block; width: auto;">Enabled
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="text-align: center; margin: 20px 0 0;">
                <button type="submit" class="btnFillColor2Md">save settings</button>
            </div>
        </from>
		
		
    </div>
	
	
{if $settings.use_tfa}
<h3>Two Factor Authentication</h3>
<form method=post name=mainform>
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>
{if $errors.invalid_tfa_code}
<b style=color:red>Invalid code.</b><br>
{/if}
{if $errors.invalid_tfa_secret}
<b style=color:red>Invalid Secret.</b><br>
{/if}

{if $tfa_enabled}
<input type="checkbox" name="tfa_on_login" value=1 {if $tfa_settings.login}checked{/if}> on Login<br>
<input type="checkbox" name="tfa_on_edit_account" value=1 {if $tfa_settings.edit_account}checked{/if}> on Edit Account<br>
<input type="checkbox" name="tfa_on_withdraw" value=1 {if $tfa_settings.withdraw}checked{/if}> on Withdraw<br>
<input type="checkbox" name="tfa_disable" value=1> <b style=color:red>Disable Two Factor Authentication (not recommended)</b><br>
<br>
Confirm by typing code: <input type=text name="code" class=inpts> <input type=submit value="Update" class=sbmt>
{else}
1. Install <a href="http://m.google.com/authenticator" targe=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b>{$tfa_secret}</b> <input type=hidden name="tfa_secret" value="{$tfa_secret}"><br>
<img src="{$tfa_secret_url}"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
{/if}
</form>


{literal}
<script language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
{/if} {* use_tfa *}

{include file="mfooter.tpl"}

