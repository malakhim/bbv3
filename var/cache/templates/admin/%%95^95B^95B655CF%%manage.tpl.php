<?php /* Smarty version 2.6.18, created on 2014-12-01 20:32:59
         compiled from views/tabs/manage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'trim', 'views/tabs/manage.tpl', 1, false),array('modifier', 'fn_url', 'views/tabs/manage.tpl', 26, false),array('modifier', 'escape', 'views/tabs/manage.tpl', 38, false),array('modifier', 'fn_check_view_permissions', 'views/tabs/manage.tpl', 39, false),array('modifier', 'urlencode', 'views/tabs/manage.tpl', 55, false),array('function', 'script', 'views/tabs/manage.tpl', 15, false),array('block', 'hook', 'views/tabs/manage.tpl', 118, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('text_position_updating','block_settings','block_settings','block','editing_tab','no_data','new_tab','add_tab','product_tabs'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'common_templates/sortable_position_scripts.tpl' => 1406444267,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php echo smarty_function_script(array('src' => "js/tabs.js"), $this);?>

<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/block_manager.css" rel="stylesheet" type="text/css"/>

<?php ob_start(); ?>

<?php if (! $this->_tpl_vars['dynamic_object']): ?>
	<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('sortable_table' => 'product_tabs', 'sortable_id_name' => 'tab_id', )); ?><script type="text/javascript">
//<![CDATA[
$(function() <?php echo $this->_tpl_vars['ldelim']; ?>

	var params = <?php echo $this->_tpl_vars['ldelim']; ?>
<?php echo $this->_tpl_vars['rdelim']; ?>
;
		params.text_position_updating = '<?php echo fn_get_lang_var('text_position_updating', $this->getLanguage()); ?>
';
		params.update_sortable_url = '<?php echo fn_url("tools.update_position?table=".($this->_tpl_vars['sortable_table'])."&id_name=".($this->_tpl_vars['sortable_id_name']), 'A', 'rel', '&'); ?>
';
		params.handle_class = '<?php echo $this->_tpl_vars['handle_class']; ?>
';

	var sortable_id = '<?php if ($this->_tpl_vars['sortable_id']): ?>#<?php echo $this->_tpl_vars['sortable_id']; ?>
<?php else: ?><?php endif; ?>';
	
	$(sortable_id + '.cm-sortable').ceSortable(params);
<?php echo $this->_tpl_vars['rdelim']; ?>
);

//]]>
</script><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
<?php endif; ?>

<?php $this->assign('r_url', smarty_modifier_escape($this->_tpl_vars['config']['current_url'], 'url'), false); ?>
<?php if (fn_check_view_permissions("tabs.update")): ?>
	<?php $this->assign('non_editable', false, false); ?>
<?php else: ?>
	<?php $this->assign('non_editable', true, false); ?>
<?php endif; ?>
<div class="items-container <?php if (! $this->_tpl_vars['dynamic_object']): ?>cm-sortable<?php endif; ?>" id="manage_tabs_list">

<?php $_from = $this->_tpl_vars['product_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tab']):
?>
	<?php if ($this->_tpl_vars['tab']['is_primary'] == 'Y' || $this->_tpl_vars['dynamic_object'] || $this->_tpl_vars['non_editable']): ?>
		<?php $this->assign('_href_delete', "", false); ?>
	<?php else: ?>
		<?php $this->assign('_href_delete', "tabs.delete?tab_id=".($this->_tpl_vars['tab']['tab_id']), false); ?>
	<?php endif; ?>	

	<?php if ($this->_tpl_vars['dynamic_object']): ?> 
		<?php $this->assign('dynamic_object_href', "&amp;dynamic_object[object_type]=".($this->_tpl_vars['dynamic_object']['object_type'])."&amp;dynamic_object[object_id]=".($this->_tpl_vars['dynamic_object']['object_id'])."&amp;selected_location=".($this->_tpl_vars['location']['location_id'])."&amp;hide_status=1", false); ?>
		<?php $this->assign('r_url', urlencode("products.update?product_id=".($this->_tpl_vars['dynamic_object']['object_id'])."&amp;selected_section=product_tabs"), false); ?>
		<?php $this->assign('additional_class', "", false); ?>
	<?php else: ?>
		<?php $this->assign('dynamic_object_href', "", false); ?>
		<?php $this->assign('r_url', "tabs.manage", false); ?>
		<?php $this->assign('additional_class', "cm-sortable-row cm-sortable-id-".($this->_tpl_vars['tab']['tab_id']), false); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['tab']['product_ids']): ?>
		<?php $this->assign('confirm', true, false); ?>
	<?php else: ?>
		<?php $this->assign('confirm', "", false); ?>
	<?php endif; ?>

	<?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['tab']['tab_type'] == 'B'): ?><?php echo '<span class="small-note lowercase">'; ?><?php echo '('; ?><?php if ($this->_tpl_vars['tab']['block_id'] && $this->_tpl_vars['dynamic_object']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/popupbox.tpl", 'smarty_include_vars' => array('id' => "edit_block_properties_".($this->_tpl_vars['tab']['block_id'])."_tab_".($this->_tpl_vars['tab']['tab_id']),'text' => (fn_get_lang_var('block_settings', $this->getLanguage())),'link_text' => (fn_get_lang_var('block_settings', $this->getLanguage())),'act' => 'link','href' => "block_manager.update_block?block_data[block_id]=".($this->_tpl_vars['tab']['block_id'])."&amp;r_url=".($this->_tpl_vars['r_url'])."&amp;html_id=tab_".($this->_tpl_vars['tab']['tab_id']).($this->_tpl_vars['dynamic_object_href']),'action' => "block_manager.update_block",'opener_ajax_class' => "cm-ajax",'link_class' => "cm-ajax-force",'content' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo fn_get_lang_var('block', $this->getLanguage()); ?><?php echo ''; ?><?php endif; ?><?php echo ')'; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?>
<?php $this->_smarty_vars['capture']['tool_items'] = ob_get_contents(); ob_end_clean(); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/object_group.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['tab']['tab_id'],'text' => $this->_tpl_vars['tab']['name'],'href' => "tabs.update?tab_data[tab_id]=".($this->_tpl_vars['tab']['tab_id'])."&amp;return_url=".($this->_tpl_vars['r_url']),'href_delete' => $this->_tpl_vars['_href_delete'],'rev_delete' => 'pagination_contents','header_text' => (fn_get_lang_var('editing_tab', $this->getLanguage())).":&nbsp;".($this->_tpl_vars['tab']['name']),'table' => 'product_tabs','object_id_name' => 'tab_id','update_controller' => 'tabs','dynamic_object' => $this->_tpl_vars['dynamic_object_href'],'status' => $this->_tpl_vars['tab']['status'],'additional_class' => $this->_tpl_vars['additional_class'],'details' => $this->_smarty_vars['capture']['tool_items'],'non_editable' => $this->_tpl_vars['dynamic_object'],'confirm' => $this->_tpl_vars['confirm'],'prefix' => 'product_tabs','no_popup' => $this->_tpl_vars['non_editable'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; else: ?>

	<p class="no-items"><?php echo fn_get_lang_var('no_data', $this->getLanguage()); ?>
</p>

<?php endif; unset($_from); ?>
<!--manage_tabs_list--></div>

<div class="buttons-container">
	<?php ob_start(); ?>
		<?php $this->_tag_stack[] = array('hook', array('name' => "currencies:import_rates")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_smarty_vars['capture']['extra_tools'] = ob_get_contents(); ob_end_clean(); ?>
</div>

<?php if (! $this->_tpl_vars['dynamic_object']): ?>
	<?php ob_start(); ?>	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/popupbox.tpl", 'smarty_include_vars' => array('act' => 'general','id' => 'add_tab','text' => fn_get_lang_var('new_tab', $this->getLanguage()),'link_text' => fn_get_lang_var('add_tab', $this->getLanguage()),'href' => "tabs.update",'action' => "tabs.update",'opener_ajax_class' => "cm-ajax",'link_class' => "cm-ajax-force",'content' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_smarty_vars['capture']['tools'] = ob_get_contents(); ob_end_clean(); ?>
<?php endif; ?>

<?php $this->_smarty_vars['capture']['mainbox'] = ob_get_contents(); ob_end_clean(); ?>

<?php if (! $this->_tpl_vars['dynamic_object']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/mainbox.tpl", 'smarty_include_vars' => array('title' => fn_get_lang_var('product_tabs', $this->getLanguage()),'content' => $this->_smarty_vars['capture']['mainbox'],'tools' => $this->_smarty_vars['capture']['tools'],'title_extra' => $this->_smarty_vars['capture']['title_extra'],'select_languages' => true,'extra_tools' => trim($this->_smarty_vars['capture']['extra_tools']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php echo $this->_smarty_vars['capture']['mainbox']; ?>

<?php endif; ?>
