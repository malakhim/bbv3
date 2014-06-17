<?php /* Smarty version 2.6.18, created on 2014-06-16 15:37:14
         compiled from C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl', 4, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('bb_browse','buy','sell'));
?>
<?php  ob_start();  ?><div id="second-top-nav"></div>

<div id="second-top-nav-elements">
	<a href="<?php echo fn_url('billibuys.view'); ?>
"><span class="top_menu_item" ><?php echo fn_get_lang_var('bb_browse', $this->getLanguage()); ?>
</span></a>
	<a href="<?php echo fn_url('billibuys.place_request'); ?>
"><span class="top_menu_item" ><?php echo fn_get_lang_var('buy', $this->getLanguage()); ?>
</span></a>
	<a href="<?php echo fn_url('billibuys.view'); ?>
"><span class="top_menu_item"><?php echo fn_get_lang_var('sell', $this->getLanguage()); ?>
</span></a>
	</div><?php  ob_end_flush();  ?>