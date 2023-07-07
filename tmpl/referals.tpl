{include file="mlogo.tpl"}
<div class="cabItem referral">
    <span class="captionDark center">Referrals</span>
    <div class="refLink">
        <div class="userLink">
            <div class="userpic" style="background-image: url(img/user_2.png);"></div>
            <span class="subtitle">your upline:</span>
                            <a>{if $upline.email != ""}<a href=mailto:{$upline.email}>{$upline.name}</a>{else}N/A{/if}</a>
                    </div>
        <div class="refInfo">
            <div class="row">
                <div class="item col4">
                    <div class="in tot">
                        <span>Total referral comission: <b>{$currency_sign}{$commissions}</b></span>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in sum">
                        <span>Referrals: <b>{$total_ref}</b></span>
                    </div>
                </div>
                <div class="item col4">
                    <div class="in act">
                        <span>Active referrals: <b>{$active_ref}</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
{if $settings.show_refstat}
    <div class="wrap">
        <span class="subtitle">referal ins/signup</span>
        <div class="filter date">
            <form method=post name=opts><input type="hidden" name="form_id" value="15348025035953"><input type="hidden" name="form_token" value="a720ae83c549cf701bb9d925af1c9006">
                <input type=hidden name=a value=referals>
                <div class="formBlockkDark date">
                    <label for="earnFrom">From:</label>
                    <select name=month_from>
                                                 {section name=month_from loop=$month}
<option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1 == $frm.month_from}selected{/if}>{$month[month_from]}
{/section}
                                            </select>
                    <select name=day_from>
                                                   {section name=day_from loop=$day}
<option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1 == $frm.day_from}selected{/if}>{$day[day_from]}
{/section}
                                            </select>
                    <select name=year_from>
                                               {section name=year_from loop=$year}
<option value={$year[year_from]} {if $year[year_from] == $frm.year_from}selected{/if}>{$year[year_from]}
{/section}
                                            </select>
                </div>
                <div class="formBlockkDark date">
                    <label for="earnFrom">To:</label>
                    <select name=month_to>
                                                  {section name=month_to loop=$month}
<option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1 == $frm.month_to}selected{/if}>{$month[month_to]}
{/section}
                                            </select>
                    <select name=day_to>
                                                   {section name=day_to loop=$day}
<option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1 == $frm.day_to}selected{/if}>{$day[day_to]}
{/section}
                                            </select>
                    <select name=year_to>
                                                   {section name=year_to loop=$year}
<option value={$year[year_to]} {if $year[year_to] == $frm.year_to}selected{/if}>{$year[year_to]}
{/section}
                                            </select>
                </div>
                <button type="submit" class="btnFillGradMd">Search</button>
            </form>
        </div>

        <div class="tblTempl4">
            <div class=" table full">
                <div class="tHead">
                    <span class="tCell middle center day">DATE</span>
                    <span class="tCell middle center ins">INS</span>
                    <span class="tCell middle center sign">SIGNUP</span>
                </div>
                <div class="tBody">
                                    </div>
            </div>
        </div>
    </div>
    <div class="wrap">
     <table width=300 celspacing=1 cellpadding=1 border=0 class="tab">
 
{if $show_refstat}
{section name=s loop=$refstat}
<tr>
 <td class=item align=center><b>{$refstat[s].date}</b></td>
 <td class=item align=right>{$refstat[s].income}</td>
 <td class=item align=right>{$refstat[s].reg}</td>
</tr>
{/section}
{else}
<tr style="border: none;">
 <td class=item align=center colspan=3>No statistics found for this period.</td>
</tr>
{/if}
</table><br>
    </div>{/if}
	
	{if $settings.show_referals}
{if $show_referals}
<h1>Your referrals:</h1>
<table cellspacing=1 cellpadding=1 border=0 class="tab">
<tr>
 <th class=inheader>Nickname</th>
 <th class=inheader>E-mail</th>
 <th class=inheader>Status</th>
</tr>
{section name=s loop=$referals}
<tr>
 <td class=item><b>{$referals[s].username}</b></td>
 <td class=item><a href=mailto:{$referals[s].email}>{$referals[s].email}</a></td>
 <td class=item>{if $referals[s].q_deposits > 0}Deposited{else}No deposit yet{/if}</td>
</tr>
{if $referals[s].ref_stats}
<tr>
 <td colspan=3>
  User referrals:
  {section name=l loop=$referals[s].ref_stats}
   <nobr>{$referals[s].ref_stats[l].cnt_active} active of {$referals[s].ref_stats[l].cnt} on level {$referals[s].ref_stats[l].level}{if !$smarty.section.l.last};{/if}</nobr>
  {/section}
 </td>
</tr>
{/if}
{if $referals[s].came_from}
<tr><td colspan=3>
<a href="{$referals[s].came_from}" target=_blank>[User came from]</a>
</td></tr>
{/if}
{/section}
<tr>
 <td colspan=3>&nbsp;</td>
</tr>
<tr>
 <td colspan=3><b>2-10 level referrals:</b> {$cnt_other}</td>
</tr>
<tr>
 <td colspan=3><b>2-10 level active referrals:</b> {$cnt_other_active}</td>
</tr>
</table>
{/if}
{/if}

	{include file="mfooter.tpl"}