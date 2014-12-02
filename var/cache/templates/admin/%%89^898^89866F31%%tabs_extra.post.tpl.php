<?php /* Smarty version 2.6.18, created on 2014-12-02 10:58:14
         compiled from addons/discussion/hooks/products/tabs_extra.post.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'defined', 'addons/discussion/hooks/products/tabs_extra.post.tpl', 1, false),)), $this); ?>
<?php if (defined('COMPANY_ID') && @PRODUCT_TYPE == 'ULTIMATE' || @PRODUCT_TYPE != 'ULTIMATE'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "addons/discussion/views/discussion_manager/components/discussion.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>