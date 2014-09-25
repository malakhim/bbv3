<?php /* Smarty version 2.6.18, created on 2014-09-25 12:36:42
         compiled from C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/frontpage_cta_buttons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/frontpage_cta_buttons.tpl', 9, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('find_out_how'));
?>
<?php  ob_start();  ?>
<a href="<?php echo fn_url('billibuys.view'); ?>
"><span class="flat_link red learn-more">
	<?php echo fn_get_lang_var('find_out_how', $this->getLanguage()); ?>

</span></a><?php  ob_end_flush();  ?>