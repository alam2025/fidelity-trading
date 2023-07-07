{include file="mlogo.tpl"}
 
<div class="cabItem makePay">
    <span class="captionDark center">make deposit</span>
    <div class="operWrap">
        <div style="text-align: center;" class="error_white">
            
            
                    </div>
					
					
{if $fatal}

{if $fatal == 'one_per_month'}
You can deposit once a month only.
{/if}

{else}

{literal}
<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");

{/literal}
  {if $qplans > 1}
{literal}
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
{/literal}
  {/if}
{literal}

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
--></script>
{/literal}

{if $frm.say eq 'deposit_success'}
<h1>The deposit has been successfully saved.</h1>
<br><br>
{/if}

{if $frm.say eq 'deposit_saved'}
<h1>The deposit has been saved. Your broker will contact you as soon as possible to process your investments deposit.</h1><br><br>
{/if}

<form method=post name="spendform" action="#content_place" onsubmit="calc">
<input type=hidden name=a value=deposit>


 
            <span class="subtitle">01. select plan</span>
            <div class="wrap">
                <div class="row">
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                                                                                      <div class="item col6">
                          <div class="planWrapCard">
                              <input id="f1" type="radio" name="h_id" value='4'  checked="checked" data-perc="4.00" data-days="30">
                              <label for="f1"></label>
                              <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                  <div class="tCell middle">
                                      <span class="cap">GOLD</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"  style="
    font-size: 30px;
">One Option = </span>
                                      <span>100 Troy ounces</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                                                                                          <div class="item col6">
                          <div class="planWrapCard">
                              <input id="f2" type="radio" name="h_id" value='5'  data-perc="5.00" data-days="30">
                              <label for="f2"></label>
                              <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Silver</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"  style="
    font-size: 30px;
">One Option = </span>
                                      <span>5000 Troy ounces</span>
                                  </div>
                              </div>
                          </div>
                      </div>
      
      
      
      
      
      
      
      
      
                      
<div class="item col6">
                          <div class="planWrapCard">
                              <input id="f3" type="radio" name="h_id" value='6'  data-perc="5.5" data-days="30">
                              <label for="f3"></label>
                              <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Unleaded Gasoline</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"   style="
    font-size: 30px;
">One option = </span>
                                      <span>42,000 gallons</span>
                                  </div>
                              </div>
                          </div>
                      </div>
     
     
     
     
     
     
     
     
     
                      
<div class="item col6">
                          <div class="planWrapCard">
                              <input id="f4" type="radio" name="h_id" value='7'  data-perc="6.00" data-days="30">
                              <label for="f4"></label>
                              <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Heating Oil</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"   style="
    font-size: 30px;
">One option = </span>
                                      <span>42,000 gallons</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                                                                                      <div class="item col6">
                          <div class="planWrapCard">
                              <input id="f5" type="radio" name="h_id" value='8'  checked="checked" data-perc="4.00" data-days="30">
                              <label for="f5"></label>
                              <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Crude Oil</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"  style="
    font-size: 30px;
">One Option = </span>
                                      <span>1000 Barrels</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                                                                                          <div class="item col6">
                          <div class="planWrapCard">
                              <input id="f6" type="radio" name="h_id" value='9'  data-perc="5.00" data-days="30">
                              <label for="f6"></label>
                              <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Coffee</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"  style="
    font-size: 30px;
">One Option = </span>
                                      <span>37,500 lbs</span>
                                  </div>
                              </div>
                          </div>
                      </div>
      
      
      
      
      
      
      
      
      
                      
<div class="item col6">
                          <div class="planWrapCard">
                              <input id="f7" type="radio" name="h_id" value='10'  data-perc="5.5" data-days="30">
                              <label for="f7"></label>
                              <div class="planCardSmFirst table full" style="background-image: url(img/card_sm_1.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Orange Juice</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"   style="
    font-size: 30px;
">One option = </span>
                                      <span>15,000 lbs</span>
                                  </div>
                              </div>
                          </div>
                      </div>
     
     
     
     
     
     
     
     
     
                      
<div class="item col6">
                          <div class="planWrapCard">
                              <input id="f8" type="radio" name="h_id" value='11'  data-perc="6.00" data-days="30">
                              <label for="f8"></label>
                              <div class="planCardSmSecond table full" style="background-image: url(img/card_sm_2.png);">
                                  <div class="tCell middle">
                                      <span class="cap">Soy Beans</span>
                                  </div>
                                  <div class="descr tCell middle">
                                      <span class="pct"   style="
    font-size: 30px;
">One option = </span>
                                      <span>500 Bushels</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      
                      
                            
                      
                      
                      
                      
                      
                      
                                                        </div>
            </div>
            <div class="wrap">
                <div class="row">
                    <div class="item col6">
                        <span class="subtitle">02. enter amount</span>
                        <div class="payForm">
                            <div class="formBlockDark">
                                <label class="center" for="sumCab">Amount:</label>
                                <input type=text name=amount value='{$min_deposit}' id="calc_amount">
                            </div>
                        </div>
                      
                    </div>
                    <div class="item col6">
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
                                                                                                                                         {section name=p loop=$ps}
   {if $ps[p].balance > 0 and $ps[p].status == 1}                                                                                               <option value="account_{$ps[p].id}">Balance {$ps[p].name}</option>
     {/if}
{/section}
                                                                                                                                                                                                    </select>
                                <select class="paySysList" data-id="payMet2">
                               {section name=p loop=$ps}
   {if $ps[p].status}
   <option value="process_{$ps[p].id}">{$ps[p].name}</option>
    {/if}
{/section}
                                 </select>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <button type="submit" class="btnFillGradLg center">MAKE DEPOSIT</button>
        </form>
		
		{literal}
<script language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
</script>
{/literal}
		{/if}
    </div> 
	{literal}
	<script type="text/javascript">
    function calc() {
        percent = jQuery('input[name=h_id]:checked').data('perc');
        period = jQuery('input[name=h_id]:checked').data('days');
        amount = jQuery('#calc_amount').val();

        if (period>1) jQuery('#profit_day').html((amount*percent/100).toFixed(2));
        else jQuery('#profit_day').html('-');
        jQuery('#profit').html((period*amount*percent/100).toFixed(2));
    }

    jQuery(document).ready(function(){
        calc();

        jQuery('#calc_amount').on('change keyup', function(){
            calc();
        });

        jQuery('input[name=h_id]').on('change', function(){
            /*jQuery('#calc_amount').val(jQuery('#calc_plan option:checked').data('min'));
            jQuery('#calc_amount').attr('min', jQuery('input[name=h_id]:checked').data('min'));
            jQuery('#calc_amount').attr('max', jQuery('input[name=h_id]:checked').data('max'));*/

            calc();
        });
    })
</script>
{/literal}
{include file="mfooter.tpl"}