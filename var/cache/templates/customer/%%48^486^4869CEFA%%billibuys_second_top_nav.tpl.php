<?php /* Smarty version 2.6.18, created on 2014-06-05 14:15:04
         compiled from /home4/malakhim/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', '/home4/malakhim/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl', 4, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('bb_browse','buy','sell','bidsoffers','support'));
?>
<?php  ob_start();  ?><div id="second-top-nav"></div>

<div id="second-top-nav-elements">
	<span class="top_menu_item" href="<?php echo fn_url('billibuys.view'); ?>
"><?php echo fn_get_lang_var('bb_browse', $this->getLanguage()); ?>
</span>
	<span class="top_menu_item" href="<?php echo fn_url('billibuys.place_request'); ?>
"><?php echo fn_get_lang_var('buy', $this->getLanguage()); ?>
</span>
	<span class="top_menu_item" href="<?php echo fn_url('profiles.update'); ?>
"><?php echo fn_get_lang_var('sell', $this->getLanguage()); ?>
</span>
	<span class="top_menu_item" href="<?php echo fn_url('profiles.update'); ?>
"><?php echo fn_get_lang_var('bidsoffers', $this->getLanguage()); ?>
</span>
	<span class="top_menu_item" href="<?php echo fn_url('profiles.update'); ?>
"><?php echo fn_get_lang_var('support', $this->getLanguage()); ?>
</span>
</div><?php  ob_end_flush();  ?>