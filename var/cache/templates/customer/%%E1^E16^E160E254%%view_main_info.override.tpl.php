<?php /* Smarty version 2.6.18, created on 2015-02-27 12:09:36
         compiled from addons/billibuys/hooks/products/view_main_info.override.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'unescape', 'addons/billibuys/hooks/products/view_main_info.override.tpl', 24, false),array('modifier', 'trim', 'addons/billibuys/hooks/products/view_main_info.override.tpl', 40, false),array('modifier', 'format_price', 'addons/billibuys/hooks/products/view_main_info.override.tpl', 47, false),array('modifier', 'replace', 'addons/billibuys/hooks/products/view_main_info.override.tpl', 99, false),array('modifier', 'fn_url', 'addons/billibuys/hooks/products/view_main_info.override.tpl', 99, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('price','bb_item_enter_through_bids','qty','view_details','delete','are_you_owner','description'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'buttons/button.tpl' => 1416450827,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><br />
<?php if ($this->_tpl_vars['product']): ?>
	<?php $this->assign('obj_id', $this->_tpl_vars['product']['product_id'], false); ?>

	<?php $this->assign('obj_id', $this->_tpl_vars['product']['product_id'], false); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/product_data.tpl", 'smarty_include_vars' => array('product' => $this->_tpl_vars['product'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->assign('form_open', "form_open_".($this->_tpl_vars['obj_id']), false); ?>
	<?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['form_open']]; ?>


	<?php if (! $this->_tpl_vars['hide_title']): ?><h1 class="product-title"><?php echo smarty_modifier_unescape($this->_tpl_vars['product']['product']); ?>
</h1><?php endif; ?>

	<?php if (! $this->_tpl_vars['no_images']): ?>
		<div class="image-border float-left center cm-reload-<?php echo $this->_tpl_vars['product']['product_id']; ?>
" id="product_images_<?php echo $this->_tpl_vars['product']['product_id']; ?>
_update">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "views/products/components/product_images.tpl", 'smarty_include_vars' => array('product' => $this->_tpl_vars['product'],'show_detailed_link' => 'Y')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<!--product_images_<?php echo $this->_tpl_vars['product']['product_id']; ?>
_update--></div>
	<?php endif; ?>
	
	<div class="product-info">
		<?php $this->assign('form_open', "form_open_".($this->_tpl_vars['obj_id']), false); ?>
		<?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['form_open']]; ?>


		<?php $this->assign('rating', "rating_".($this->_tpl_vars['obj_id']), false); ?><?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['rating']]; ?>

		<?php $this->assign('sku', "sku_".($this->_tpl_vars['obj_id']), false); ?><?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['sku']]; ?>

		<?php $this->assign('bid_price', ($this->_tpl_vars['price']), false); ?>

		<div class="<?php if (trim($this->_tpl_vars['bid_price'])): ?>prices-container <?php endif; ?>price-wrap clearfix">
			<?php if (trim($this->_tpl_vars['bid_price'])): ?>
				<div class="float-left product-prices">
					<span class="bb-product-label"><?php echo fn_get_lang_var('price', $this->getLanguage()); ?>
</span>
					<input type="hidden" name="price" value="<?php echo $this->_tpl_vars['price']; ?>
"/>
					<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('value' => $this->_tpl_vars['price'], 'class' => "bb-product-info", )); ?><?php echo ''; ?><?php if ($this->_tpl_vars['settings']['General']['alternative_currency'] == 'Y'): ?><?php echo ''; ?><?php echo smarty_modifier_format_price($this->_tpl_vars['value'], $this->_tpl_vars['currencies'][$this->_tpl_vars['primary_currency']], $this->_tpl_vars['span_id'], $this->_tpl_vars['class'], false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['secondary_currency'] != $this->_tpl_vars['primary_currency']): ?><?php echo '&nbsp;'; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '<span class="'; ?><?php echo $this->_tpl_vars['class']; ?><?php echo '">'; ?><?php endif; ?><?php echo '('; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php echo smarty_modifier_format_price($this->_tpl_vars['value'], $this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']], $this->_tpl_vars['span_id'], $this->_tpl_vars['class'], true, $this->_tpl_vars['is_integer']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '<span class="'; ?><?php echo $this->_tpl_vars['class']; ?><?php echo '">'; ?><?php endif; ?><?php echo ')'; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_format_price($this->_tpl_vars['value'], $this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']], $this->_tpl_vars['span_id'], $this->_tpl_vars['class'], true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
				</div>
			<?php else: ?>
				<?php echo fn_get_lang_var('bb_item_enter_through_bids', $this->getLanguage()); ?>

			<?php endif; ?>
		</div>

		<?php if ($this->_tpl_vars['capture_options_vs_qty']): ?><?php $this->_smarty_vars['capture'][] = ob_get_contents(); ob_end_clean(); ?><?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['_REQUEST']['bid_id'] ) && isset ( $this->_tpl_vars['_REQUEST']['request_id'] )): ?>
			<div style="padding: 0 !important;" class="qty <?php if ($this->_tpl_vars['quick_view']): ?> form-field<?php if (! $this->_tpl_vars['capture_options_vs_qty']): ?> product-list-field<?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['settings']['Appearance']['quantity_changer'] == 'Y'): ?> changer<?php endif; ?>" id="qty_<?php echo $this->_tpl_vars['obj_prefix']; ?>
<?php echo $this->_tpl_vars['product']['product_id']; ?>
">
				<input type="hidden" name="product_data[<?php echo $this->_tpl_vars['product']['product_id']; ?>
][amount]" value="<?php echo $this->_tpl_vars['quantity']; ?>
"/>
				<input type="hidden" name="product_data[<?php echo $this->_tpl_vars['product']['product_id']; ?>
][bid_id]" value="<?php echo $this->_tpl_vars['_REQUEST']['bid_id']; ?>
">
				<input type="hidden" name="product_data[<?php echo $this->_tpl_vars['product']['product_id']; ?>
][request_id]" value="<?php echo $this->_tpl_vars['_REQUEST']['request_id']; ?>
">
				<span class="bb-product-label"><?php echo fn_get_lang_var('qty', $this->getLanguage()); ?>
</span>
				<span class="bb-product-info"><?php echo $this->_tpl_vars['quantity']; ?>
</span>
			
				</div>
			</div>
		<?php endif; ?>
		<br/>
		<?php if ($this->_tpl_vars['capture_buttons']): ?><?php ob_start(); ?><?php endif; ?>
			<div class="buttons-container">
				<?php if ($this->_tpl_vars['show_details_button']): ?>
					<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('but_href' => "products.view?product_id=".($this->_tpl_vars['product']['product_id']), 'but_text' => fn_get_lang_var('view_details', $this->getLanguage()), 'but_role' => 'submit', )); ?>

<?php if ($this->_tpl_vars['but_role'] == 'action'): ?>
	<?php $this->assign('suffix', "-action", false); ?>
	<?php $this->assign('file_prefix', 'action_', false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'act'): ?>
	<?php $this->assign('suffix', "-act", false); ?>
	<?php $this->assign('file_prefix', 'action_', false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'disabled_big'): ?>
	<?php $this->assign('suffix', "-disabled-big", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'big'): ?>
	<?php $this->assign('suffix', "-big", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>
	<?php $this->assign('suffix', "-delete", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'tool'): ?>
	<?php $this->assign('suffix', "-tool", false); ?>
<?php else: ?>
	<?php $this->assign('suffix', "", false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['but_name'] && $this->_tpl_vars['but_role'] != 'text' && $this->_tpl_vars['but_role'] != 'act' && $this->_tpl_vars['but_role'] != 'delete'): ?> 
	<span <?php if ($this->_tpl_vars['but_id']): ?>id="wrap_<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="button-submit<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-left"><span <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="button-submit<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-right"><input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="submit" name="<?php echo $this->_tpl_vars['but_name']; ?>
" <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" /></span></span>

<?php elseif ($this->_tpl_vars['but_role'] == 'text' || $this->_tpl_vars['but_role'] == 'act' || $this->_tpl_vars['but_role'] == 'edit' || ( $this->_tpl_vars['but_role'] == 'text' && $this->_tpl_vars['but_name'] )): ?> 

	<a class="<?php if ($this->_tpl_vars['but_meta']): ?><?php echo $this->_tpl_vars['but_meta']; ?>
 <?php endif; ?><?php if ($this->_tpl_vars['but_name']): ?>cm-submit-link <?php endif; ?>text-button<?php echo $this->_tpl_vars['suffix']; ?>
"<?php if ($this->_tpl_vars['but_id']): ?> id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo smarty_modifier_replace(smarty_modifier_replace($this->_tpl_vars['but_name'], "[", ":-"), "]", "-:"); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
 return false;"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>

	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo smarty_modifier_replace(smarty_modifier_replace($this->_tpl_vars['but_name'], "[", ":-"), "]", "-:"); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_href']): ?>href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
 return false;"<?php endif; ?><?php if ($this->_tpl_vars['but_meta']): ?> class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?>><span title="<?php echo fn_get_lang_var('delete', $this->getLanguage()); ?>
" class="icon-delete-small"></span></a>

<?php elseif ($this->_tpl_vars['but_role'] == 'icon'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php else: ?> 

	<span class="button<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-left" <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?>><span class="button<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-right"><a <?php if ($this->_tpl_vars['but_href']): ?>href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
 return false;"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?><?php echo $this->_tpl_vars['but_meta']; ?>
 <?php endif; ?>" <?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?>rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['but_text']; ?>
</a></span></span>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
				<?php endif; ?>

				<?php if (isset ( $this->_tpl_vars['_REQUEST']['bid_id'] ) && isset ( $this->_tpl_vars['_REQUEST']['request_id'] )): ?>
					<?php if ($this->_tpl_vars['auth']['user_id'] == $this->_tpl_vars['owned_user']): ?>
																					<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "buttons/add_to_cart.tpl", 'smarty_include_vars' => array('but_id' => "button_cart_".($this->_tpl_vars['obj_prefix']).($this->_tpl_vars['obj_id']),'but_name' => "dispatch[checkout.add..".($this->_tpl_vars['obj_id'])."]",'but_role' => $this->_tpl_vars['but_role'],'block_width' => $this->_tpl_vars['block_width'],'obj_id' => $this->_tpl_vars['obj_id'],'product' => $this->_tpl_vars['product'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
																		<?php else: ?>
						<?php echo fn_get_lang_var('are_you_owner', $this->getLanguage()); ?>

					<?php endif; ?>
				<?php endif; ?>

				<?php $this->assign('list_buttons', "list_buttons_".($this->_tpl_vars['obj_id']), false); ?>
				<?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['list_buttons']]; ?>

			</div>
		<?php if ($this->_tpl_vars['capture_buttons']): ?><?php $this->_smarty_vars['capture']['buttons'] = ob_get_contents(); ob_end_clean(); ?><?php endif; ?>

		<?php $this->assign('form_close', "form_close_".($this->_tpl_vars['obj_id']), false); ?>
		<?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['form_close']]; ?>


		<?php if ($this->_tpl_vars['show_product_tabs']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "views/tabs/components/product_popup_tabs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php echo $this->_smarty_vars['capture']['popupsbox_content']; ?>

		<?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['show_descr']): ?>
		<?php $this->assign('prod_descr', "prod_descr_".($this->_tpl_vars['obj_id']), false); ?>
		<h2 class="description-title"><?php echo fn_get_lang_var('description', $this->getLanguage()); ?>
</h2>
		<p class="product-description"><?php echo $this->_smarty_vars['capture'][$this->_tpl_vars['prod_descr']]; ?>
</p>
	<?php endif; ?>
<?php endif; ?>