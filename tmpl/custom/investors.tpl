{include file="logo.tpl"}
<div class="pageBanner" style="background-image: url(img/investors_page_bg.jpg);">
    <div class="container">
        <span class="heading">For investors</span>
    </div>
</div>

<div class="progrDescr">
    <div class="container">
        <div class="textBlock">
            <p>All interested parties can become investors of {$settings.site_name}, no matter how deeply he or she understands the principles of our business, the technical aspects of FOREX markets and the mechanisms of exchange trading in General.</p>
            <p>{$settings.site_name} is a distinctive investment services company offering our investors access to high-growth investment opportunities intrading on the stock and currency markets. We implement the latest developments in trading and financial market analysis and offer our participants a choice of 2 investment plans. Our company benefits from an extensive network of global clients.</p>
            <p>At {$settings.site_name}, we emphasize on understanding our client’s requirement and providing suitable solutions to meet their investment criteria. Our aim is to utilize our expertise & knowledge which will benefit our clients and the users of our services. Our company believes that when a team outperforms expectations, excellence becomes a reality.</p>
        </div>
    </div>
</div>

<div class="plan page" style="background-image: url(img/chart_bg.png), url(img/grey_bg.png);">
    <div class="container">
                <span class="captionDark center">Investment offers</span>
        <div class="wrap">
            <div class="row">
                <div class="item col6">
                    <div class="planCardFirst">
                        <div class="left" style="background-image: url(img/card_bg_1.png);">
                            <span class="cap">DAILY PLAN</span>
                            <div class="descr">
                                <span class="pct">7%</span>
                                <span>Daily For 20 Days</span>
                                <a href="?a=signup" class="btnFillColor1Md">Make deposit</a>
                            </div>
                        </div>
                        <ul class="info">
                            <li>Min Deposit <span>25 USD</span></li>
                            <li>Max Deposit <span>50,000 USD</span></li>
                            <li>Min Withdraw EC Amount <span>1 USD</span></li>
                            <li>Min Withdraw Crypto Amount <span>3 USD</span></li>
                        </ul>
                        <ul class="notes">
                            <li>Daily interest: 7% daily</li>
                            <li>Total Profit: 140%</li>
                            <li>Deposit Included</li>
                            <li>Instant Payment: Yes</li>
                        </ul>
                    </div>
                </div>
                <div class="item col6">
                    <div class="planCardSecond">
                        <div class="left" style="background-image: url(img/card_bg_2.png);">
                            <span class="cap">AFTER PLAN</span>
                            <div class="descr">
                                <span class="pct">110%</span>
                                <span>After 5 Days</span>
                                <a href="?a=signup" class="btnFillColor2Md">Make deposit</a>
                            </div>
                        </div>
                        <ul class="info">
                            <li>Min Deposit <span>100 USD</span></li>
                            <li>Max Deposit <span>50,000 USD</span></li>
                            <li>Min Withdraw EC Amount <span>1 USD</span></li>
                            <li>Min Withdraw Crypto Amount <span>3 USD</span></li>
                        </ul>
                        <ul class="notes">
                            <li>Total Profit: 110%</li>
                            <li>Deposit Included</li>
                            <li>Instant Payment: Yes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blockForm calc" style="background-image: url(img/calc_bg.jpg);">
    <div class="containerSM">
        <span class="captionDark center">Profit calculator</span>
        <div class="wrap">
            <form onsubmit="return calc()"><input type="hidden" name="form_id" value="15348023501582"><input type="hidden" name="form_token" value="98967f03f3bcc050ecad941f8c93f11a">
                <input type="submit" id="calc_btn" style="display: none;">
                <div class="row bigPadd">
                    <div class="item col6">
                        <div class="formBlockLight">
                            <label class="center" for="calc_amount">Amount:</label>
                            <input class="enterNum" type="number" min="25" max="50000" value="25" id="calc_amount">
                        </div>
                    </div>
                    <div class="item col6">
                        <div class="formBlockLight">
                            <label class="center" for="calc_plan">Choosing of plan:</label>
                            <select name="choosePlan" id="calc_plan">
                                <option value="1" data-min="25" data-max="50000" data-perc="7" data-per="20" checked>7% Daily for 20 days</option>
                                <option value="2" data-min="100" data-max="50000" data-perc="110" data-per="1">110% After 5 days</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="range">
                    <input type="text" class="rangeSum" id="rangeSum">
                </div>
                <div class="invProfit">
                    <span class="title">Your profit:</span>
                    <span class="num"><b id="profit">1270,00</b> USD</span>
                </div>
                <a href="?a=signup" type="submit" class="btnFillDarkMd center">Get money</a>
            </form>
        </div>
    </div>
</div>
{literal}
<script type="text/javascript">
    function calc() {
        percent = jQuery('#calc_plan option:checked').data('perc');
        period = jQuery('#calc_plan option:checked').data('per');
        amount = jQuery('#calc_amount').val();
        jQuery('#profit').html((period * amount*percent/100).toFixed(2));
    }

    jQuery(document).ready(function(){
        jQuery('#rangeSum').ionRangeSlider({
            min: 25,
            max: 50000,
            from: 25,
            step: 1,
            grid: true,
            grid_num: 16,
            grid_margin: false,
            postfix: "$",
            onChange: function (data) {
                jQuery('#calc_amount').val(data.from);

                calc();
            }
        });

        var sumRange = $('#rangeSum').data('ionRangeSlider');

        calc();

        jQuery('#calc_amount').on('change keyup', function(){
            sumRange.update({
                from: jQuery('#calc_amount').val()
            });

            calc();
        });

        jQuery('#calc_plan').on('change', function(){
            sumRange.update({
                min: jQuery('#calc_plan option:checked').data('min'),
                max: jQuery('#calc_plan option:checked').data('max'),
                from: jQuery('#calc_plan option:checked').data('min')
            });
            jQuery('#calc_amount').val(jQuery('#calc_plan option:checked').data('min'));
            jQuery('#calc_amount').attr('min', jQuery('#calc_plan option:checked').data('min'));
            jQuery('#calc_amount').attr('max', jQuery('#calc_plan option:checked').data('max'));

            calc();
        });
    })
</script>{/literal}

              {include file="footer2.tpl"}