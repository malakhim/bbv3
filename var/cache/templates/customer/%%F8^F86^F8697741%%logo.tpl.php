<?php /* Smarty version 2.6.18, created on 2014-11-14 22:33:57
         compiled from C:/wamp/www/skins/basic/customer/blocks/static_templates/logo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp/www/skins/basic/customer/blocks/static_templates/logo.tpl', 3, false),)), $this); ?>
<?php  ob_start();  ?><div class="logo-container">
	<a href="<?php echo fn_url(""); ?>
" style="background: url('<?php echo $this->_tpl_vars['images_dir']; ?>
/<?php echo $this->_tpl_vars['manifest']['Customer_logo']['filename']; ?>
') no-repeat; width:<?php echo $this->_tpl_vars['manifest']['Customer_logo']['width']; ?>
px; height:<?php echo $this->_tpl_vars['manifest']['Customer_logo']['height']; ?>
px;" title="<?php echo $this->_tpl_vars['manifest']['Customer_logo']['alt']; ?>
" class="logo"></a>
</div><?php  ob_end_flush();  ?>