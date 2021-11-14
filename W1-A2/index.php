<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;

// SMARTY CONFIG
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';

// SMART VARIABLE
$smarty->assign("aboutSmarty",aboutSmarty());
$smarty->assign("thePhilosophy",thePhilosophy());
$smarty->assign("engines",engines());

// SMARTY ENGINE
$smarty->display('index.tpl');

function aboutSmarty() {
        $smarty = "Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. This implies that PHP code is application logic, and is separated from the presentation.";
        return $smarty;
}

function thePhilosophy() {
        $thePhilosophy = array(   'clean separation of presentation from application code'
                                , 'PHP backend, Smarty template frontend'
                                , ' complement PHP, not replace it'
                                , ' fast development/deployment for programmers and designers'
                                , ' quick and easy to maintain'
                                , ' syntax easy to understand, no PHP knowledge required'
                                , ' flexibility for custom development'
                                , ' security: insulation from PHP'
                                , ' free, open source');
        return $thePhilosophy;
}

function engines(){
        $engines = "Smarty is not the only engine following the 'Separate Programming Code from Presentation' philosophy. \n" . 
                   "For instance, Python has template engines built around the same principles such as Django Templates and CheetahTemplate. \n" .
                   "Note: Languages such as Python do not mix with HTML natively, which give them the advantage of proper programming code separation from the outset. \n" . 
                   "There are libraries available to mix Python with HTML, but they are typically avoided.";

        return $engines;
}

?>
