<?php /* Smarty version 2.6.32, created on 2021-11-14 03:47:20
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'popup_init', 'header.tpl', 4, false),)), $this); ?>
<HTML>
<HEAD>

<?php echo smarty_function_popup_init(array('src' => "/javascripts/overlib.js"), $this);?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<TITLE><?php echo $this->_tpl_vars['title']; ?>
</TITLE>
</HEAD>

<BODY bgcolor="#ffffff">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>