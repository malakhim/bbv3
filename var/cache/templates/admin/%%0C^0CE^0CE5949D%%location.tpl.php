<?php /* Smarty version 2.6.18, created on 2014-11-21 11:56:02
         compiled from C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/location.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars_decode', 'C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/location.tpl', 2, false),array('modifier', 'unescape', 'C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/location.tpl', 2, false),)), $this); ?>
<?php  ob_start();  ?><!-- start location-->
	<?php echo smarty_modifier_unescape(htmlspecialchars_decode($this->_tpl_vars['containers']['top'])); ?>


	<?php echo smarty_modifier_unescape(htmlspecialchars_decode($this->_tpl_vars['containers']['central'])); ?>


	<?php echo smarty_modifier_unescape(htmlspecialchars_decode($this->_tpl_vars['containers']['bottom'])); ?>

<!-- end location--><?php  ob_end_flush();  ?>