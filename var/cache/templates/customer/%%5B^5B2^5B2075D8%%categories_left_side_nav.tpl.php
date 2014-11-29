<?php /* Smarty version 2.6.18, created on 2014-11-29 23:51:35
         compiled from C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/categories_left_side_nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_bb_get_categories', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/categories_left_side_nav.tpl', 5, false),array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/categories_left_side_nav.tpl', 10, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('categories'));
?>
<?php  ob_start();  ?><?php echo '
<script src="addons/billibuys/js/left_nav.js" type="text/javascript"></script>
'; ?>

<div id="cat-header"><?php echo fn_get_lang_var('categories', $this->getLanguage()); ?>
</div>
<?php $this->assign('bb_cats', fn_bb_get_categories(""), false); ?>

<?php $_from = $this->_tpl_vars['bb_cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
	<?php if ($this->_tpl_vars['cat']['status'] == 'A'): ?>
		<?php if ($this->_tpl_vars['cat']['parent_category_id'] == 0): ?>
			<a href="<?php echo fn_url("billibuys.view?category_id=".($this->_tpl_vars['cat']['bb_request_category_id'])); ?>
"><span class="root-lvl-cat" cat_id="<?php echo $this->_tpl_vars['cat']['bb_request_category_id']; ?>
">
				<?php echo $this->_tpl_vars['cat']['category_name']; ?>

				<?php if ($this->_tpl_vars['cat']['children_categories']): ?><span class="left-side-nav-img" width="10px"></span><?php endif; ?>
			</span></a>
		<?php else: ?>
			<div class="second-lvl-cat" cat_id="<?php echo $this->_tpl_vars['cat']['bb_request_category_id']; ?>
"><?php echo $this->_tpl_vars['cat']['category_name']; ?>
</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php  ob_end_flush();  ?>