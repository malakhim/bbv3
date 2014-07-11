<?php /* Smarty version 2.6.18, created on 2014-07-11 10:41:42
         compiled from addons/billibuys/bid_body.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strtolower', 'addons/billibuys/bid_body.tpl', 3, false),array('modifier', 'capitalize', 'addons/billibuys/bid_body.tpl', 3, false),array('modifier', 'replace', 'addons/billibuys/bid_body.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "letter_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo fn_get_lang_var('hello', $this->getLanguage()); ?>
<?php if (! empty ( $this->_tpl_vars['firstname'] )): ?>&nbsp;<?php echo smarty_modifier_capitalize(strtolower($this->_tpl_vars['firstname'])); ?>
<?php endif; ?>,<br /><br />

<?php echo fn_get_lang_var('text_offer_made_on_following_auction', $this->getLanguage()); ?>
<b><?php echo $this->_tpl_vars['request_item']['title']; ?>
</b>
<br /><br />
<table>
	<tr>
		<td><?php echo fn_get_lang_var('item', $this->getLanguage()); ?>
</td>
		<td><?php echo $this->_tpl_vars['product']['product']; ?>
</td>
	</tr>
	<tr>
		<td><?php echo fn_get_lang_var('price', $this->getLanguage()); ?>
</td>
		<td><?php echo $this->_tpl_vars['bid']['price']; ?>
</td>
	</tr>
	<tr>
		<td><?php echo fn_get_lang_var('quantity', $this->getLanguage()); ?>
</td>
		<td><?php echo $this->_tpl_vars['bid']['quantity']; ?>
</td>
	</tr>
</table>

<a href="<?php echo smarty_modifier_replace($this->_tpl_vars['url'], '$amp;', '&'); ?>
"><?php echo fn_get_lang_var('text_click_to_view_request', $this->getLanguage()); ?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "/addons/billibuys/bb_letter_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>