<?php /* Smarty version 2.6.18, created on 2014-11-21 11:56:02
         compiled from C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/block.tpl', 12, false),array('modifier', 'str_replace', 'C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/block.tpl', 16, false),array('modifier', 'default', 'C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/block.tpl', 21, false),array('modifier', 'replace', 'C:/wamp3/www/public_html/skins/basic/admin/views/block_manager/render/block.tpl', 23, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('disable','enable','bm_confirm','block_options','delete_block','enable_or_disable_block','block_settings','block_options','delete_block','on_off'));
?>
<?php if ($this->_tpl_vars['block_data']): ?>
	<?php echo ''; ?><?php if ($this->_tpl_vars['block_data']['status']): ?><?php echo ''; ?><?php $this->assign('status', $this->_tpl_vars['block_data']['status'], false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('status', 'A', false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['dynamic_object'] && $this->_tpl_vars['block_data']['items_count'] > 0): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['status'] == 'A'): ?><?php echo ''; ?><?php $this->assign('action', smarty_modifier_lower(fn_get_lang_var('disable', $this->getLanguage())), false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('action', smarty_modifier_lower(fn_get_lang_var('enable', $this->getLanguage())), false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('message_with_action', str_replace("[action]", $this->_tpl_vars['action'], fn_get_lang_var('bm_confirm', $this->getLanguage())), false); ?><?php echo '<span class="confirm-message hidden">'; ?><?php echo str_replace("[location_name]", $this->_tpl_vars['location']['name'], $this->_tpl_vars['message_with_action']); ?><?php echo '</span>'; ?><?php $this->_smarty_vars['capture']['confirm_message'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo '<div class="'; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['default_class'], 'block'); ?><?php echo ' '; ?><?php if ($this->_tpl_vars['status'] != 'A'): ?><?php echo 'block-off'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['parent_grid']['content_align'] == 'RIGHT'): ?><?php echo 'float-right'; ?><?php elseif ($this->_tpl_vars['parent_grid']['content_align'] == 'LEFT'): ?><?php echo 'float-left'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['external_render']): ?><?php echo ' bm-external-render'; ?><?php endif; ?><?php echo '" id="snapping_'; ?><?php echo $this->_tpl_vars['block_data']['snapping_id']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['external_render']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['block_data']['block_id']; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['external_id']; ?><?php echo ''; ?><?php endif; ?><?php echo '"><div class="block-header" title="'; ?><?php echo $this->_tpl_vars['block_data']['name']; ?><?php echo '"><div class="block-header-icon block-header-icon-'; ?><?php echo smarty_modifier_replace($this->_tpl_vars['block_data']['type'], '_', "-"); ?><?php echo '" '; ?><?php if ($this->_tpl_vars['parent_grid']['width'] == 1): ?><?php echo 'hidden'; ?><?php endif; ?><?php echo '></div><div class="block-header-holder"></div><h4 class="block-header-title '; ?><?php if ($this->_tpl_vars['show_for_location'] && $this->_tpl_vars['block_data']['location'] != $this->_tpl_vars['show_for_location']): ?><?php echo 'fixed-block'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['parent_grid']['width'] == 1): ?><?php echo 'hidden'; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['block_data']['name']; ?><?php echo '</h4></div><div class="bm-full-menu block-control-menu bm-control-menu '; ?><?php if ($this->_tpl_vars['parent_grid']['width'] <= 2 && ! $this->_tpl_vars['external_render']): ?><?php echo 'hidden'; ?><?php endif; ?><?php echo '">'; ?><?php if (! $this->_tpl_vars['external_render']): ?><?php echo ''; ?><?php echo '<div class="cm-tooltip cm-action action-properties bm-action-properties" title="'; ?><?php echo fn_get_lang_var('block_options', $this->getLanguage()); ?><?php echo '"></div><div class="hidden"></div>'; ?><?php if (! $this->_tpl_vars['dynamic_object']): ?><?php echo '<div class="cm-tooltip cm-action action-delete bm-action-delete extra" title="'; ?><?php echo fn_get_lang_var('delete_block', $this->getLanguage()); ?><?php echo '"></div><div class="hidden"></div>'; ?><?php endif; ?><?php echo '<div class="cm-tooltip cm-action action-switch bm-action-switch'; ?><?php if ($this->_tpl_vars['status'] != 'A'): ?><?php echo ' switch-off'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['dynamic_object']): ?><?php echo ' bm-dynamic-object'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['dynamic_object'] && $this->_tpl_vars['block_data']['items_count'] > 0): ?><?php echo ' bm-confirm'; ?><?php endif; ?><?php echo '" title="'; ?><?php echo fn_get_lang_var('enable_or_disable_block', $this->getLanguage()); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['dynamic_object']): ?><?php echo 'rel="'; ?><?php echo $this->_tpl_vars['dynamic_object']['object_id']; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_smarty_vars['capture']['confirm_message']; ?><?php echo '</div><div class="hidden"></div>'; ?><?php else: ?><?php echo '<input type="hidden" name="block_data[block_id]" value="'; ?><?php echo $this->_tpl_vars['block_data']['block_id']; ?><?php echo '" id="ajax_update_block_'; ?><?php echo $this->_tpl_vars['external_id']; ?><?php echo '"/>'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/popupbox.tpl", 'smarty_include_vars' => array('id' => "edit_block_properties_".($this->_tpl_vars['block_data']['block_id'])."_".($this->_tpl_vars['external_id']),'text' => (fn_get_lang_var('block_settings', $this->getLanguage())),'link_text' => "&nbsp;&nbsp;",'act' => 'link','href' => "block_manager.update_block?block_data[block_id]=".($this->_tpl_vars['block_data']['block_id'])."&amp;ajax_update=1&amp;html_id=".($this->_tpl_vars['external_id'])."&amp;force_close=1",'opener_ajax_class' => "cm-ajax cm-ajax-force cm",'link_class' => "action-properties bm-action-properties",'content' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '</div>'; ?><?php if (! $this->_tpl_vars['external_render']): ?><?php echo '<div class="bm-compact-menu block-control-menu bm-control-menu '; ?><?php if ($this->_tpl_vars['parent_grid']['width'] > 2): ?><?php echo 'hidden'; ?><?php endif; ?><?php echo '"><div class="action-showmenu cm-action action-control-menu  bm-action-control-menu"><div class="bm-drop-menu cm-popup-box"><div class="bm-drop-menu-hint"></div><a class="cm-action bm-action-properties">'; ?><?php echo fn_get_lang_var('block_options', $this->getLanguage()); ?><?php echo '</a><a class="cm-action bm-action-delete extra">'; ?><?php echo fn_get_lang_var('delete_block', $this->getLanguage()); ?><?php echo '</a><a class="cm-action bm-action-switch '; ?><?php if ($this->_tpl_vars['status'] != 'A'): ?><?php echo 'switch-off'; ?><?php endif; ?><?php echo '">'; ?><?php echo fn_get_lang_var('on_off', $this->getLanguage()); ?><?php echo '<span class="action-switch"></span></a></div></div></div>'; ?><?php endif; ?><?php echo '</div>'; ?>

<?php endif; ?>