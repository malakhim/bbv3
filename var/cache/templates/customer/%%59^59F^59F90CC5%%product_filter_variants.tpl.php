<?php /* Smarty version 2.6.18, created on 2014-11-24 11:20:50
         compiled from blocks/product_filters/components/product_filter_variants.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_delete_range_from_url', 'blocks/product_filters/components/product_filter_variants.tpl', 22, false),array('modifier', 'fn_link_attach', 'blocks/product_filters/components/product_filter_variants.tpl', 32, false),array('modifier', 'fn_url', 'blocks/product_filters/components/product_filter_variants.tpl', 32, false),array('modifier', 'fn_compare_dispatch', 'blocks/product_filters/components/product_filter_variants.tpl', 36, false),array('modifier', 'fn_text_placeholders', 'blocks/product_filters/components/product_filter_variants.tpl', 37, false),array('modifier', 'fn_is_not_empty', 'blocks/product_filters/components/product_filter_variants.tpl', 43, false),array('modifier', 'fn_add_range_to_url_hash', 'blocks/product_filters/components/product_filter_variants.tpl', 49, false),array('modifier', 'unescape', 'blocks/product_filters/components/product_filter_variants.tpl', 74, false),array('modifier', 'escape', 'blocks/product_filters/components/product_filter_variants.tpl', 76, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('view_all','more','less'));
?>
<?php  ob_start();  ?><?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'blocks/product_filters/components/variant_item.tpl' => 1406444269,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?>				<ul class="product-filters <?php if ($this->_tpl_vars['collapse']): ?>hidden<?php endif; ?>" id="content_<?php echo $this->_tpl_vars['filter_uid']; ?>
">

										<?php $_from = $this->_tpl_vars['filter']['selected_ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['selected_ranges'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['selected_ranges']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['selected_range']):
        $this->_foreach['selected_ranges']['iteration']++;
?>
						<?php ob_start(); ?>Y<?php $this->_smarty_vars['capture']['has_selected'] = ob_get_contents(); ob_end_clean(); ?>
						<li>
							<?php echo ''; ?><?php $this->assign('fh', fn_delete_range_from_url($this->_tpl_vars['_REQUEST']['features_hash'], $this->_tpl_vars['selected_range'], $this->_tpl_vars['filter']['field_type']), false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['fh']): ?><?php echo ''; ?><?php $this->assign('attach_query', "features_hash=".($this->_tpl_vars['fh']), false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['filter']['feature_type'] == 'E' && $this->_tpl_vars['selected_range']['range_id'] == $this->_tpl_vars['_REQUEST']['variant_id']): ?><?php echo ''; ?><?php $this->assign('reset_lnk', $this->_tpl_vars['reset_qstring'], false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('reset_lnk', $this->_tpl_vars['filter_qstring'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['fh']): ?><?php echo ''; ?><?php $this->assign('href', fn_url(fn_link_attach($this->_tpl_vars['reset_lnk'], $this->_tpl_vars['attach_query'])), false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('href', fn_url($this->_tpl_vars['reset_lnk']), false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('use_ajax', fn_compare_dispatch($this->_tpl_vars['href'], $this->_tpl_vars['config']['current_url']), false); ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['href']; ?><?php echo '" class="filter-item checked'; ?><?php if ($this->_tpl_vars['allow_ajax'] && $this->_tpl_vars['use_ajax']): ?><?php echo ' cm-ajax cm-ajax-full-render" rev="'; ?><?php echo $this->_tpl_vars['ajax_div_ids']; ?><?php echo ''; ?><?php endif; ?><?php echo '" rel="nofollow">'; ?><?php echo $this->_tpl_vars['filter']['prefix']; ?><?php echo ''; ?><?php echo fn_text_placeholders($this->_tpl_vars['selected_range']['range_name']); ?><?php echo ''; ?><?php echo $this->_tpl_vars['filter']['suffix']; ?><?php echo '</a>'; ?>

						</li>
					<?php endforeach; endif; unset($_from); ?>

										<?php if (fn_is_not_empty($this->_tpl_vars['filter']['ranges'])): ?>
						<ul id="ranges_<?php echo $this->_tpl_vars['filter_uid']; ?>
">

							<?php $_from = $this->_tpl_vars['filter']['ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['range']):
?>
								<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('range' => $this->_tpl_vars['range'], 'filter' => $this->_tpl_vars['filter'], 'ajax_div_ids' => $this->_tpl_vars['ajax_div_ids'], 'filter_qstring' => $this->_tpl_vars['filter_qstring'], 'reset_qstring' => $this->_tpl_vars['reset_qstring'], 'allow_ajax' => $this->_tpl_vars['allow_ajax'], )); ?>								<li>
									<?php if (! $this->_tpl_vars['range']['checked']): ?>
										<?php $this->assign('filter_query_elm', fn_add_range_to_url_hash($this->_tpl_vars['_REQUEST']['features_hash'], $this->_tpl_vars['range'], $this->_tpl_vars['filter']['field_type']), false); ?>
									<?php else: ?>
										<?php $this->assign('filter_query_elm', fn_delete_range_from_url($this->_tpl_vars['_REQUEST']['features_hash'], $this->_tpl_vars['range'], $this->_tpl_vars['filter']['field_type']), false); ?>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['_REQUEST']['features_hash']): ?>
										<?php $this->assign('cur_features_hash', "&amp;features_hash=".($this->_tpl_vars['_REQUEST']['features_hash']), false); ?>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['filter']['feature_type'] == 'E' && ( ! $this->_tpl_vars['filter']['simple_link'] || $this->_tpl_vars['filter']['selected_ranges'] && $this->_tpl_vars['controller'] == 'product_features' )): ?>
										<?php $this->assign('href', fn_url("product_features.view?variant_id=".($this->_tpl_vars['range']['range_id']).($this->_tpl_vars['cur_features_hash'])), false); ?>
									<?php else: ?>
										<?php $this->assign('href', fn_url(fn_link_attach($this->_tpl_vars['filter_qstring'], "features_hash=".($this->_tpl_vars['filter_query_elm']))), false); ?>
									<?php endif; ?>
									<?php $this->assign('use_ajax', fn_compare_dispatch($this->_tpl_vars['href'], $this->_tpl_vars['config']['current_url']), false); ?>
									<a <?php if (! $this->_tpl_vars['range']['disabled'] || $this->_tpl_vars['range']['checked']): ?>href="<?php echo $this->_tpl_vars['href']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['filter']['feature_type'] != 'E'): ?>rel="nofollow"<?php endif; ?> class="filter-item<?php if ($this->_tpl_vars['range']['checked']): ?> checked<?php endif; ?><?php if ($this->_tpl_vars['range']['disabled']): ?> disabled<?php elseif ($this->_tpl_vars['allow_ajax'] && $this->_tpl_vars['use_ajax']): ?> cm-ajax cm-ajax-full-render<?php endif; ?>" rev="<?php echo $this->_tpl_vars['ajax_div_ids']; ?>
"><?php echo $this->_tpl_vars['filter']['prefix']; ?>
<?php echo fn_text_placeholders($this->_tpl_vars['range']['range_name']); ?>
<?php echo $this->_tpl_vars['filter']['suffix']; ?>
&nbsp;<?php if (! $this->_tpl_vars['range']['disabled']): ?><span class="details">&nbsp;(<?php echo $this->_tpl_vars['range']['products']; ?>
)</span><?php endif; ?></a>
								</li>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
							<?php endforeach; endif; unset($_from); ?>

						</ul>
					<?php endif; ?>


										<?php ob_start(); ?>
						<?php if ($this->_tpl_vars['filter']['more_cut']): ?>
							<?php ob_start(); ?><?php echo smarty_modifier_unescape($this->_tpl_vars['filter_qstring']); ?>
&filter_id=<?php echo $this->_tpl_vars['filter']['filter_id']; ?>
&<?php if ($this->_tpl_vars['_REQUEST']['features_hash']): ?>&features_hash=<?php echo $this->_tpl_vars['_REQUEST']['features_hash']; ?>
<?php endif; ?><?php $this->_smarty_vars['capture']['q'] = ob_get_contents(); ob_end_clean(); ?>
							<li id="view_all_<?php echo $this->_tpl_vars['filter_uid']; ?>
" class="right">
								<?php $this->assign('capture_q', smarty_modifier_escape($this->_smarty_vars['capture']['q'], 'url'), false); ?>
								<a href="<?php echo fn_url("product_features.view_all?q=".($this->_tpl_vars['capture_q'])); ?>
" rel="nofollow" class="extra-link"><?php echo fn_get_lang_var('view_all', $this->getLanguage()); ?>
</a>
							</li>
						<?php endif; ?>
					<?php $this->_smarty_vars['capture']['view_all'] = ob_get_contents(); ob_end_clean(); ?>

										<?php if (fn_is_not_empty($this->_tpl_vars['filter']['more_ranges'])): ?>
						<?php $this->assign('cookie_name_show_more', "more_ranges_".($this->_tpl_vars['filter_uid']), false); ?>
						<?php $this->assign('more_collapse', true, false); ?>
						<?php if ($_COOKIE[$this->_tpl_vars['cookie_name_show_more']]): ?>
							<?php $this->assign('more_collapse', false, false); ?>
						<?php endif; ?>

						<ul id="more_ranges_<?php echo $this->_tpl_vars['filter_uid']; ?>
" <?php if ($this->_tpl_vars['more_collapse']): ?>class="hidden"<?php endif; ?>>

							<?php $_from = $this->_tpl_vars['filter']['more_ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['range']):
?>
								<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('range' => $this->_tpl_vars['range'], 'filter' => $this->_tpl_vars['filter'], 'ajax_div_ids' => $this->_tpl_vars['ajax_div_ids'], 'filter_qstring' => $this->_tpl_vars['filter_qstring'], 'reset_qstring' => $this->_tpl_vars['reset_qstring'], 'allow_ajax' => $this->_tpl_vars['allow_ajax'], )); ?>								<li>
									<?php if (! $this->_tpl_vars['range']['checked']): ?>
										<?php $this->assign('filter_query_elm', fn_add_range_to_url_hash($this->_tpl_vars['_REQUEST']['features_hash'], $this->_tpl_vars['range'], $this->_tpl_vars['filter']['field_type']), false); ?>
									<?php else: ?>
										<?php $this->assign('filter_query_elm', fn_delete_range_from_url($this->_tpl_vars['_REQUEST']['features_hash'], $this->_tpl_vars['range'], $this->_tpl_vars['filter']['field_type']), false); ?>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['_REQUEST']['features_hash']): ?>
										<?php $this->assign('cur_features_hash', "&amp;features_hash=".($this->_tpl_vars['_REQUEST']['features_hash']), false); ?>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['filter']['feature_type'] == 'E' && ( ! $this->_tpl_vars['filter']['simple_link'] || $this->_tpl_vars['filter']['selected_ranges'] && $this->_tpl_vars['controller'] == 'product_features' )): ?>
										<?php $this->assign('href', fn_url("product_features.view?variant_id=".($this->_tpl_vars['range']['range_id']).($this->_tpl_vars['cur_features_hash'])), false); ?>
									<?php else: ?>
										<?php $this->assign('href', fn_url(fn_link_attach($this->_tpl_vars['filter_qstring'], "features_hash=".($this->_tpl_vars['filter_query_elm']))), false); ?>
									<?php endif; ?>
									<?php $this->assign('use_ajax', fn_compare_dispatch($this->_tpl_vars['href'], $this->_tpl_vars['config']['current_url']), false); ?>
									<a <?php if (! $this->_tpl_vars['range']['disabled'] || $this->_tpl_vars['range']['checked']): ?>href="<?php echo $this->_tpl_vars['href']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['filter']['feature_type'] != 'E'): ?>rel="nofollow"<?php endif; ?> class="filter-item<?php if ($this->_tpl_vars['range']['checked']): ?> checked<?php endif; ?><?php if ($this->_tpl_vars['range']['disabled']): ?> disabled<?php elseif ($this->_tpl_vars['allow_ajax'] && $this->_tpl_vars['use_ajax']): ?> cm-ajax cm-ajax-full-render<?php endif; ?>" rev="<?php echo $this->_tpl_vars['ajax_div_ids']; ?>
"><?php echo $this->_tpl_vars['filter']['prefix']; ?>
<?php echo fn_text_placeholders($this->_tpl_vars['range']['range_name']); ?>
<?php echo $this->_tpl_vars['filter']['suffix']; ?>
&nbsp;<?php if (! $this->_tpl_vars['range']['disabled']): ?><span class="details">&nbsp;(<?php echo $this->_tpl_vars['range']['products']; ?>
)</span><?php endif; ?></a>
								</li>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
							<?php endforeach; endif; unset($_from); ?>

							<?php echo $this->_smarty_vars['capture']['view_all']; ?>


						</ul>

						<li class="extra-link-wrap">
							<a id="on_more_ranges_<?php echo $this->_tpl_vars['filter_uid']; ?>
" class="extra-link cm-save-state cm-combination-more_<?php echo $this->_tpl_vars['filter_uid']; ?>
<?php if (! $this->_tpl_vars['more_collapse']): ?> hidden<?php endif; ?>"><?php echo fn_get_lang_var('more', $this->getLanguage()); ?>
</a>
							<a id="off_more_ranges_<?php echo $this->_tpl_vars['filter_uid']; ?>
" class="extra-link cm-save-state cm-combination-more_<?php echo $this->_tpl_vars['filter_uid']; ?>
<?php if ($this->_tpl_vars['more_collapse']): ?> hidden<?php endif; ?>"><?php echo fn_get_lang_var('less', $this->getLanguage()); ?>
</a>
						</li>
					<?php else: ?>
						<?php echo $this->_smarty_vars['capture']['view_all']; ?>

					<?php endif; ?>
				</ul><?php  ob_end_flush();  ?>