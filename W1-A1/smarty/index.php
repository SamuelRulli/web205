<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';

$text = "I didn't work directly with 'Smarty' but I've worked with Laravel's Blade template, basically, the same concept where it uses the template engine.\n".
        "Smarty is a template tool that brings advantages when running our pages. Its operation consists of doing a kind of compilation, converting templates to the PHP script.";

$smarty->assign("Advantage",array("acting","facility","simplicity"));
$smarty->assign("Answer",$text);
$smarty->assign("GitAddress","https://github.com/SamuelRulli/web205.git");

$smarty->display('index.tpl');

?>
