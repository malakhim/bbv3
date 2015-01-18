<?php /* Smarty version 2.6.18, created on 2015-01-17 11:04:51
         compiled from addons/billibuys/bb_letter_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strtolower', 'addons/billibuys/bb_letter_footer.tpl', 2, false),array('modifier', 'capitalize', 'addons/billibuys/bb_letter_footer.tpl', 2, false),)), $this); ?>
<p>
<?php echo smarty_modifier_capitalize(strtolower(fn_get_lang_var('regards', $this->getLanguage()))); ?>
,<br/>
<?php echo $this->_tpl_vars['settings']['Company']['company_name']; ?>



</p>
</body>
</html>