<?php /* Smarty version 2.6.18, created on 2014-10-21 02:07:15
         compiled from addons/billibuys/views/billibuys/search.tpl */ ?>
<?php  ob_start();  ?><?php ob_start(); ?>
This is a test1
<?php $this->_smarty_vars['capture']['main'] = ob_get_contents(); ob_end_clean(); ?>

<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('title' => ($this->_tpl_vars['lang', $this->getLanguage())).".search", 'content' => $this->_smarty_vars['capture']['mainbox'], )); ?><?php  ob_end_flush();  ?>