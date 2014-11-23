<?php /* Smarty version 2.6.18, created on 2014-11-23 17:47:57
         compiled from C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl', 2, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('bb_browse','buy','place_request','view_orders','sell','block_products','add_new_product','sales'));
?>
<?php  ob_start();  ?><ul id="second-top-nav-elements" class="row">
	<li class="top_menu_item"><a href="<?php echo fn_url('billibuys.view'); ?>
"><?php echo fn_get_lang_var('bb_browse', $this->getLanguage()); ?>
</a></li>
	<li class="top_menu_item"><?php echo fn_get_lang_var('buy', $this->getLanguage()); ?>

		<ul class="top-nav-submenu header-solid">
									<li class="submenu_item"><a href="<?php echo fn_url('billibuys.place_request'); ?>
"><?php echo fn_get_lang_var('place_request', $this->getLanguage()); ?>
</a></li>
			<li class="submenu_item"><a href="<?php echo fn_url("orders.search"); ?>
"><?php echo fn_get_lang_var('view_orders', $this->getLanguage()); ?>
</a></li>
		</ul>
	</li>
	<li class="top_menu_item"><?php echo fn_get_lang_var('sell', $this->getLanguage()); ?>

		<ul class="top-nav-submenu header-solid">
									<li class="submenu_item"><a href="<?php echo fn_url('/vendor.php?dispatch=products.manage'); ?>
"><?php echo fn_get_lang_var('block_products', $this->getLanguage()); ?>
</a></li>
			<li class="submenu_item"><a href="<?php echo fn_url('/vendor.php?dispatch=products.add'); ?>
"><?php echo fn_get_lang_var('add_new_product', $this->getLanguage()); ?>
</a></li>
			<li class="submenu_item"><a href="<?php echo fn_url('/vendor.php?dispatch=orders.manage'); ?>
"><?php echo fn_get_lang_var('sales', $this->getLanguage()); ?>
</a></li>
		</ul>
	</li>
	<form method='get' action="<?php echo fn_url("billibuys.view"); ?>
" id="top-search-form" name="top_search_bar">
    	  <input type="text" class="form-control input-text input-search" name="search" id="input-search" value="<?php if ($this->_tpl_vars['_REQUEST']['search']): ?><?php echo $this->_tpl_vars['_REQUEST']['search']; ?>
<?php else: ?>Enter an item you want to sell<?php endif; ?>">
    	  <i class="fa fa-search" id="search-submit"></i>
	</form>
</ul><?php  ob_end_flush();  ?>