<?php /* Smarty version 2.6.18, created on 2014-11-14 22:33:57
         compiled from C:/wamp/www/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp/www/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_second_top_nav.tpl', 16, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('bb_browse','buy','sell'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'buttons/button.tpl' => 1415961311,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><div id="second-top-nav-elements" class="row">
	<a href="<?php echo fn_url('billibuys.view'); ?>
"><span class="top_menu_item" ><?php echo fn_get_lang_var('bb_browse', $this->getLanguage()); ?>
</span></a>
	<a href="<?php echo fn_url('billibuys.place_request'); ?>
"><span class="top_menu_item" ><?php echo fn_get_lang_var('buy', $this->getLanguage()); ?>
</span></a>
	<a href="<?php echo fn_url('/vendor.php?dispatch=products.add'); ?>
"><span class="top_menu_item"><?php echo fn_get_lang_var('sell', $this->getLanguage()); ?>
</span></a>
	<form method='get' action="<?php echo fn_url("billibuys.view"); ?>
" id="top-search-form" name="top_search_bar">
		<!-- <div class="input-group"> -->
    	  <input type="text" class="form-control input-text input-search" name="search" id="input-search" value="<?php if ($this->_tpl_vars['_REQUEST']['search']): ?><?php echo $this->_tpl_vars['_REQUEST']['search']; ?>
<?php else: ?>Enter an item you want to sell<?php endif; ?>">
    	  <i class="fa fa-search" id="search-submit"></i>
	</form>
	</div>