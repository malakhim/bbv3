<?php /* Smarty version 2.6.18, created on 2014-11-27 14:59:27
         compiled from C:/wamp3/www/public_html/skins/basic/customer/views/block_manager/render/grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'unescape', 'C:/wamp3/www/public_html/skins/basic/customer/views/block_manager/render/grid.tpl', 3, false),)), $this); ?>
<?php  ob_start();  ?><div class="grid_<?php echo $this->_tpl_vars['grid']['width']; ?>
<?php if ($this->_tpl_vars['grid']['prefix']): ?> prefix_<?php echo $this->_tpl_vars['grid']['prefix']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['grid']['suffix']): ?> suffix_<?php echo $this->_tpl_vars['grid']['suffix']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['grid']['alpha']): ?> alpha<?php endif; ?><?php if ($this->_tpl_vars['grid']['omega']): ?> omega<?php endif; ?> <?php echo $this->_tpl_vars['grid']['user_class']; ?>
" >
	<?php if ($this->_tpl_vars['content']): ?> 
		<?php echo smarty_modifier_unescape($this->_tpl_vars['content']); ?>

	<?php else: ?>
		&nbsp;
	<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['grid']['clear']): ?>
	<div class="clear"></div>
<?php endif; ?><?php  ob_end_flush();  ?>