<?php /* Smarty version 2.6.18, created on 2015-02-27 12:09:38
         compiled from C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_footer.tpl', 3, false),array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_footer.tpl', 4, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('footer_copyright','terms_and_conditions','disclaimer'));
?>
<?php  ob_start();  ?>
<?php echo date('Y'); ?>
 &copy; <?php echo fn_get_lang_var('footer_copyright', $this->getLanguage()); ?>
&nbsp; 
<a href="<?php echo fn_url('termsandconditions'); ?>
"><?php echo fn_get_lang_var('terms_and_conditions', $this->getLanguage()); ?>
</a>
<a href="<?php echo fn_url('disclaimer'); ?>
"><?php echo fn_get_lang_var('disclaimer', $this->getLanguage()); ?>
</a> &nbsp;<?php  ob_end_flush();  ?>