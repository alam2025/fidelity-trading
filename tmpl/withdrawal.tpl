{include file="mlogo.tpl"}
    <div class="cabItem makePay out">
        <span class="captionDark center">Withdrawal</span>
        <div class="operWrap out">
		
		
{if $say eq 'processed'}
{if $batch eq ''}Withdrawal request saved.{else} Withdrawal processed. Batch id: {$batch}{/if}
<br><br>
{/if}

{if $fatal}

{if $fatal == 'one_per_month'}
You can withdraw once per month only.
{/if}

{if $fatal == 'times_limit'}
You can withdraw {$settings.limit_withdraw_period_times} per {$settings.limit_withdraw_period_date} only.
{/if}


{if $fatal == 'withdrawal_percent_reached'}
Withdrawl percent has been reached. We have stopped all withdrawals.
{/if}

{else}

{if $say eq 'on_hold'}
Sorry, this amount on hold now.<br><br>
{/if}
{if $say eq 'zero'}
Sorry, you can't request a withdraw smaller than {$currency_sign}0.00 only<br><br>
{/if}
{if $say eq 'less_min'}
Sorry, you can request not less than {$currency_sign}{$settings.min_withdrawal_amount}<br><br>
{/if}
{if $say eq 'less_min_bankwire'}
Sorry, you can request not less than {$currency_sign}1000 for BankWire withdrawal<br><br>
{/if}
{if $say eq 'greater_max'}
Sorry, you can request not greater than {$currency_sign}{$settings.max_withdrawal_amount}<br><br>
{/if}
{if $say eq 'daily_limit'}
Sorry, you have exceeded a daily limit<br><br>
{/if}
{if $say eq 'not_enought'}
Sorry, you have requested the amount larger than the one on your balance.<br><br>
{/if}
{if $say eq 'invalid_transaction_code'}
You have entered the invalid transaction code.<br><br>
{/if}
{if $say eq 'no_deposits'}
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
{/if}
{if $say eq 'no_active_deposits'}
You must have active deposit to withdraw.
{/if}

{if $preview}

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment|escape:html}">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>You are withdrawing <b>{$currency_sign}{$amount}</b> of {$currency}. 
{if $settings.withdrawal_fee > 0 || $settings.withdrawal_fee_min > 0} Our fee is 
{if $settings.withdrawal_fee > 0}<b>{$settings.withdrawal_fee}%</b>{/if}
{if $settings.withdrawal_fee > 0 && $settings.withdrawal_fee_min > 0} or {/if}
{if $settings.withdrawal_fee_min > 0} <b>{$currency_sign}{$settings.withdrawal_fee_min}</b>{if $settings.withdrawal_fee > 0} as a minimum{/if}{/if}
.
{else}
We have no fee for this operation. 
{/if}
</td>
</tr>
<tr>
 <td colspan=2>Actually you will acquire the total of <b>{$currency_sign}{$to_withdraw}</b> on your {$currency} account {if $account}{$account}{/if}.</td>
</tr>
{if $comment}
<tr>
 <td colspan=2>Your comments: {$comment|escape:html}</td>
</tr>
{/if}
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <td colspna=2>&nbsp;</td>
</tr>
<tr>
 <td width=1% nowrap>Transaction Code:</td>
 <td width=99%><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

{else}
		
		<form method=post action="#content_place">
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>
		 
                <div style="text-align: center;" class="error_white">
                    <ul class="errors"><li>
                                                                                                                                                                                                                                                                                                
                                                                    </li></ul>
                </div>
                <div class="wrap">
                    <div class="row">
                        <div class="item col6">
                            <span class="subtitle">01. enter amount</span>
                            <div class="payForm">
                                <div class="formBlockDark">
                                    <label class="center" for="sumCab">Amount:</label>
                                    <input type=text name=amount id="amount" value="0.00">
                                </div>
                            </div>
                        </div>
                        <div class="item col6">
                            <span class="subtitle">02. payment SYSTEM</span>
                            <div class="payForm">
                                <div class="formBlockDark">
                                    <label class="center" for="sumCab">Select payment system:</label>
                                    <select name="ec" id="paySys">
                    
					 {section name=p loop=$withdraw_systems}
   <option value={$withdraw_systems[p].id}>{$withdraw_systems[p].name}</option>
{/section}
					 
					 </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="totalSum">
                    <span>Will be displayed: <span class="num" id="getting">0.00</span></span>
                </div>
                <button type="submit" class="btnFillGradLg center">withdraw funds</button>
            </form>{/if}

{/if}
        </div>
		{literal} <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#amount').on('change keyup', function(){
                jQuery('#getting').html(jQuery(this).val());
            });
        })
    </script>{/literal}
    {include file="mfooter.tpl"}

   
