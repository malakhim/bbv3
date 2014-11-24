<?php /* Smarty version 2.6.18, created on 2014-11-24 11:20:51
         compiled from C:/wamp3/www/public_html/skins/basic/customer/blocks/products/products_text_links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/blocks/products/products_text_links.tpl', 9, false),array('modifier', 'unescape', 'C:/wamp3/www/public_html/skins/basic/customer/blocks/products/products_text_links.tpl', 9, false),)), $this); ?>
<?php  ob_start();  ?>
<<?php if ($this->_tpl_vars['block']['properties']['item_number'] == 'Y'): ?>ol<?php else: ?>ul<?php endif; ?> class="bullets-list">

<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
<?php $this->assign('obj_id', ($this->_tpl_vars['block']['block_id'])."000".($this->_tpl_vars['product']['product_id']), false); ?>
<?php if ($this->_tpl_vars['product']): ?>
	<li>
		<a href="<?php echo fn_url("products.view?product_id=".($this->_tpl_vars['product']['product_id'])); ?>
"><?php echo smarty_modifier_unescape($this->_tpl_vars['product']['product']); ?>
</a>
	</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

</<?php if ($this->_tpl_vars['block']['properties']['item_number'] == 'Y'): ?>ol<?php else: ?>ul<?php endif; ?>>
<?php  ob_end_flush();  ?>