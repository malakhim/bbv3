<?php /* Smarty version 2.6.18, created on 2014-06-16 15:37:36
         compiled from C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/frontpage_cta_buttons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/frontpage_cta_buttons.tpl', 1, false),)), $this); ?>
<?php  ob_start();  ?><a href="<?php echo fn_url('billibuys.view'); ?>
"><span class="flat_link grey try-us">
	Try us out
</span></a>

<a href="<?php echo fn_url(''); ?>
"><span class="flat_link red learn-more">
	Learn more
</span></a>
<?php  ob_end_flush();  ?>