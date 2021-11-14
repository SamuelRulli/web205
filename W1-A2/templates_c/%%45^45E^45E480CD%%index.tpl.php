<?php /* Smarty version 2.6.32, created on 2021-11-14 03:56:00
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index.tpl', 1, false),array('modifier', 'escape', 'index.tpl', 13, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "setup.conf",'section' => 'setup'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => "Smarty-template")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="w3-container">

	<PRE>

	<?php if ($this->_config[0]['vars']['bold']): ?><b><?php endif; ?>

	<h4>About Smarty:</h4>

	<i><?php echo ((is_array($_tmp=$this->_tpl_vars['aboutSmarty'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i>

	<h4>The Philosophy:</h4>

	<i>The Smarty design was largely driven by these goals:</i>

	<i>
	<?php unset($this->_sections['outer']);
$this->_sections['outer']['name'] = 'outer';
$this->_sections['outer']['loop'] = is_array($_loop=$this->_tpl_vars['thePhilosophy']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['outer']['show'] = true;
$this->_sections['outer']['max'] = $this->_sections['outer']['loop'];
$this->_sections['outer']['step'] = 1;
$this->_sections['outer']['start'] = $this->_sections['outer']['step'] > 0 ? 0 : $this->_sections['outer']['loop']-1;
if ($this->_sections['outer']['show']) {
    $this->_sections['outer']['total'] = $this->_sections['outer']['loop'];
    if ($this->_sections['outer']['total'] == 0)
        $this->_sections['outer']['show'] = false;
} else
    $this->_sections['outer']['total'] = 0;
if ($this->_sections['outer']['show']):

            for ($this->_sections['outer']['index'] = $this->_sections['outer']['start'], $this->_sections['outer']['iteration'] = 1;
                 $this->_sections['outer']['iteration'] <= $this->_sections['outer']['total'];
                 $this->_sections['outer']['index'] += $this->_sections['outer']['step'], $this->_sections['outer']['iteration']++):
$this->_sections['outer']['rownum'] = $this->_sections['outer']['iteration'];
$this->_sections['outer']['index_prev'] = $this->_sections['outer']['index'] - $this->_sections['outer']['step'];
$this->_sections['outer']['index_next'] = $this->_sections['outer']['index'] + $this->_sections['outer']['step'];
$this->_sections['outer']['first']      = ($this->_sections['outer']['iteration'] == 1);
$this->_sections['outer']['last']       = ($this->_sections['outer']['iteration'] == $this->_sections['outer']['total']);
?>
		<?php echo $this->_sections['outer']['rownum']; ?>
 . <?php echo $this->_tpl_vars['thePhilosophy'][$this->_sections['outer']['index']]; ?>

	<?php endfor; endif; ?>
	</i>

	<h4>Other Template Engines:</h4>

	<i><?php echo $this->_tpl_vars['engines']; ?>
</i>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>