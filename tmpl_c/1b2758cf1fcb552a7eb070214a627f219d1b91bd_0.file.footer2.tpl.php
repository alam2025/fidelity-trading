<?php
/* Smarty version 4.3.0, created on 2023-07-06 20:05:13
  from 'C:\xampp\htdocs\smarty-php\tmpl\footer2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a70259366145_06480136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2758cf1fcb552a7eb070214a627f219d1b91bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\footer2.tpl',
      1 => 1688666710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vlogo.tpl' => 1,
  ),
),false)) {
function content_64a70259366145_06480136 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .pa-ta {
        display: grid !important;
        grid-template-columns: repeat(4, 1fr) !important;
        grid-gap: 20px;
    }

    .text-copy {
        text-align: center !important;
    }

    .payments img {
        width: 100%;
    }




    @media (max-width:767px) {
        .pa-ta {
            grid-template-columns: repeat(2, 1fr) !important;
            grid-gap: 20px !important;
        }

        .cfix {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .footMenu {
            display: flex;
            flex-direction: column;
        }

        footer .footCol {
            width: 100%;
        }

        footer .footMenu {

            width: 100%;
            padding-left: 20px;


        }

        footer .footMenu .col {
            width: 100%;
            margin-bottom: 15px;

        }

        footer .footMenu .col+.col {
            padding-left: 0;
        }

        footer .cont {
            margin-top: 25px;
            padding-left: 20px;
        }

    }

    @media (min-width:767px) and (max-width:992px) {
        .cfix {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
    }
</style>

<div class="payments">
    <div class="container">
        <ul class="table pa-ta full">
            <li class="tCell middle "><img src="img/payment_2.png" alt="payment"></li>
            <li class="tCell middle "><img src="img/payment_4.png" alt="payment"></li>
            <li class="tCell middle "><img src="img/payment_3.png" alt="payment"></li>
            <li class="tCell middle "><img src="img/payment_6.png" alt="payment"></li>
        </ul>
    </div>
</div>
<!----VisualHyip.com Footer---->
<footer>
    <div class="container">
        <div class="cfix">
            <div class="footCol">
                <div class="logo invisLink">
                    <?php $_smarty_tpl->_subTemplateRender("file:vlogo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <img src="img/logo.png" alt="logo" width="250" height="50">
                    <a href="?a=home">main</a>
                </div>

                <br> <br>
                <br> <br>


            </div>
            <div>
                <ul class="footMenu">
                    <li class="col">
                        <ul>
                            <li><a href="?a=home">HOME</a></li>
                            <li><a href="?a=about">ABOUT US</a></li>


                        </ul>
                    </li>
                    <li class="col">
                        <ul>
                            <li><a href="?a=faq">FAQ</a></li>

                            <li><a href="?a=rules">RULES</a></li>
                            <li><a href="?a=support">CONTACT US</a></li>
                            <li><a href="?a=signup">Sign up</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="footCol">
                    <div class="cont">
                        <span class="title">Address:</span>
                        <p>Sandringham Road Leyton, London, United Kingdom.</p>
                    </div>
                    <div class="cont">
                        <span class="title">E-mail:</span>
                        <a class="link" href="mailto:support@<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
">support@fidelityetrading.com</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <p class='text-copy'>2023 © luxwire-investment.online</p>
</footer>
</div>
</body>

</html><?php }
}
