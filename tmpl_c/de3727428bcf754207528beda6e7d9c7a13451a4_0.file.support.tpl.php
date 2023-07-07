<?php
/* Smarty version 4.3.0, created on 2023-07-06 12:33:20
  from 'C:\xampp\htdocs\smarty-php\tmpl\support.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a6987093ebf7_22009617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de3727428bcf754207528beda6e7d9c7a13451a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\support.tpl',
      1 => 1688639528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logo.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_64a6987093ebf7_22009617 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .form-control {
        width: 70%;
        margin: 0 auto;
    }
    .ta{
        display: flex;
        gap: 20px;
        align-items: center;
    }
    .row{
        display: flex !important;
        justify-content: center;
        align-items: center;
    }
    

    @media (max-width: 767px) {
        .row{
            flex-direction: column;
        }
        
        .contInfo .map {
            width: 100% !important;
            margin-top: 20px !important;
        }

        .ta.full {
            width: 85% !important;
            margin: 0 auto;
        }

        .col6 {
            width: 100% !important;
        }

        .form-control {
            width: 100%;
            margin: 0 auto;
        }
        .ta{
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items:center;
            text-align: center;
        }
    }
</style>
<?php $_smarty_tpl->_subTemplateRender("file:logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pageBanner" style="background-image: url(img/contact_page_bg.jpg);">
    <div class="container">
        <span class="heading">Contact us</span>
    </div>
</div>

<div class="contInfo" style="background-image: url(img/grey_bg.png);">
    <div class="container">
        <div class="row">
            <div class="left">
                <ul>
                    <li>
                        <div class="ta full ta">
                            <div class="img tCell middle"><span class="icon-location"></span></div>
                            <div class="data tCell middle">
                                <span class="title">our Address:</span>
                                <p>Sandringham Road Leyton, London, United Kingdom</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="ta full ta">
                            <div class="img tCell middle"><span class="icon-mail"></span></div>
                            <div class="data tCell middle">
                                <span class="title">e-mail:</span>
                                <a href="mailto:support@<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
" target="_blank"
                                    class="link">support@fidelityetrading.com</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ta full ta">
                            <div class="img tCell middle"><span class="icon-phone"></span></div>
                            <div class="data tCell middle">
                                <span class="title">Phone:</span>

                                <p>Please contact your broker for enquiries</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="right">
                <div class="map" id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.664190550833!2d-0.0020082838559824082!3d51.57438937964627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a761dc8a2877%3A0x445ae65e3d837263!2s23+Sandringham+Rd%2C+London!5e0!3m2!1suk!2suk!4v1533728208403"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blockForm" style="background-image: url(img/contact_bg.jpg);">
    <div class="container">
        <span class="captionDark center">contact form</span>
        <div class="wrap">

            <?php if ($_smarty_tpl->tpl_vars['say']->value == 'send') {?>
                Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
            <?php } else { ?>

                <?php echo '<script'; ?>
 language=javascript>
                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>
                        
                            function checkform() {
                                if (document.mainform.message.value == '') {
                                    alert("Please type your message!");
                                    document.mainform.message.focus();
                                    return false;
                                }
                                return true;
                            }
                        
                    <?php } else { ?>
                        
                            function checkform() {
                                if (document.mainform.name.value == '') {
                                    alert("Please type your full name!");
                                    document.mainform.name.focus();
                                    return false;
                                }
                                if (document.mainform.email.value == '') {
                                    alert("Please enter your e-mail address!");
                                    document.mainform.email.focus();
                                    return false;
                                }
                                if (document.mainform.message.value == '') {
                                    alert("Please type your message!");
                                    document.mainform.message.focus();
                                    return false;
                                }
                                return true;
                            }
                        
                    <?php }?>
                <?php echo '</script'; ?>
>
                <form class=" form-control" method=post name=mainform onsubmit="return checkform()">
                    <input type=hidden name=a value=support>
                    <input type=hidden name=action value=send>


                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?> <div class="row bigPadd">

                            <div class="item col6">
                                <div class="formBlockLight">
                                    <label for="name">Your name:</label>
                                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['name'];?>
" disabled>
                                </div>
                            </div>
                            <div class="item col6">
                                <div class="formBlockLight">
                                    <label for="mail">Your e-mail:</label>
                                    <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['email'];?>
" disabled>
                                </div>
                            </div>
                    </div><?php } else { ?>
                        <div class="row bigPadd">

                            <div class="item col6">
                                <div class="formBlockLight">
                                    <label for="name">Your name:</label>
                                    <input type="text" name="name" value="">
                                </div>
                            </div>
                            <div class="item col6">
                                <div class="formBlockLight">
                                    <label for="mail">Your e-mail:</label>
                                    <input type="text" name="email" value="">
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="item">
                        <div class="formBlockLight">
                            <label for="">Message:</label>
                            <textarea  name="message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btnFillDarkMd center">send</button>
            </form><?php }?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
