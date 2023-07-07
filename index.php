<?php
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./tmpl');
$smarty->setCompileDir('./tmpl_c');
$smarty->setCacheDir('./cache');

$smarty->display('home.tpl');