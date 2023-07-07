<?php
/* Smarty version 4.3.0, created on 2023-07-05 21:17:01
  from 'C:\xampp\htdocs\smarty-php\tmpl\mfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a5c1ad597230_48888883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb40f3a0cbcf88d97091f3a0580db0cc7277c87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-php\\tmpl\\mfooter.tpl',
      1 => 1680557944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a5c1ad597230_48888883 (Smarty_Internal_Template $_smarty_tpl) {
?></div>

                    <p class="copyright">© 2023 <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
. All rights reserved.</p>
            </div>
        </div>
    </div>

	 <?php echo '<script'; ?>
>
            $('#balance').hide();
            $('#infodata').hide();
            $.ajax({
                url: "?a=account",
                context: document.body
            }).done(function(data) {
                $('#balance').html($(data).find('#balance').html()).show();
                $('#infodata').html($(data).find('#infodata').html()).show();
            });
        <?php echo '</script'; ?>
>
		
    </body>
</html><?php }
}
