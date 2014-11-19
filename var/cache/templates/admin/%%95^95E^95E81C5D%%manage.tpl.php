<?php /* Smarty version 2.6.18, created on 2014-11-19 22:56:21
         compiled from views/database/manage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'views/database/manage.tpl', 21, false),array('modifier', 'strpos', 'views/database/manage.tpl', 34, false),array('modifier', 'escape', 'views/database/manage.tpl', 41, false),array('modifier', 'date_format', 'views/database/manage.tpl', 58, false),array('modifier', 'default', 'views/database/manage.tpl', 88, false),array('modifier', 'fn_check_view_permissions', 'views/database/manage.tpl', 89, false),array('modifier', 'cat', 'views/database/manage.tpl', 128, false),array('modifier', 'md5', 'views/database/manage.tpl', 128, false),array('modifier', 'count', 'views/database/manage.tpl', 162, false),array('modifier', 'defined', 'views/database/manage.tpl', 182, false),array('modifier', 'number_format', 'views/database/manage.tpl', 268, false),array('modifier', 'substr_count', 'views/database/manage.tpl', 342, false),array('modifier', 'replace', 'views/database/manage.tpl', 343, false),array('modifier', 'empty_tabs', 'views/database/manage.tpl', 444, false),array('modifier', 'in_array', 'views/database/manage.tpl', 450, false),array('block', 'notes', 'views/database/manage.tpl', 25, false),array('block', 'hook', 'views/database/manage.tpl', 151, false),array('function', 'script', 'views/database/manage.tpl', 125, false),array('function', 'cycle', 'views/database/manage.tpl', 261, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('multiple_selectbox_notice','select_tables','select_all','unselect_all','backup_schema','tt_views_database_manage_backup_schema','backup_data','tt_views_database_manage_backup_data','compress_dump','backup_filename','text_backup_filename','backup','remove_this_item','remove_this_item','text_backup_management_notice','upload_another_file','local','local','remove_this_item','remove_this_item','remove_this_item','remove_this_item','text_select_file','upload_another_file','local','server','url','upload','remove_this_item','remove_this_item','check_uncheck_all','type','filename','filesize','bytes','delete','download','no_items','delete_selected','restore','remove_this_item','remove_this_item','choose_action','or','tools','add','current_database_size','bytes','optimize_database','remove_this_item','remove_this_item','database'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'common_templates/tabsbox.tpl' => 1406444267,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php ob_start(); ?>

<?php ob_start(); ?>

<div id="content_backup"> 
<form action="<?php echo fn_url(""); ?>
" method="post" name="backup_form" class="cm-form-highlight cm-comet cm-ajax">
<input type="hidden" name="selected_section" value="backup" />
<input type="hidden" name="result_ids" value="database_management" />

<?php $this->_tag_stack[] = array('notes', array()); $_block_repeat=true;smarty_block_notes($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo fn_get_lang_var('multiple_selectbox_notice', $this->getLanguage()); ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_notes($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<fieldset>
	<div class="form-field">
		<label for="dbdump_tables"><?php echo fn_get_lang_var('select_tables', $this->getLanguage()); ?>
:</label>
		<select name="dbdump_tables[]" id="dbdump_tables" multiple="multiple" size="10">
			<?php $_from = $this->_tpl_vars['all_tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tbl']):
?>
				<option value="<?php echo $this->_tpl_vars['tbl']; ?>
"<?php if (strpos($this->_tpl_vars['tbl'], @TABLE_PREFIX) === 0): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['tbl']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		<p><a onclick="$('#dbdump_tables').selectOptions(true); return false;" class="underlined"><?php echo fn_get_lang_var('select_all', $this->getLanguage()); ?>
</a> / <a onclick="$('#dbdump_tables').selectOptions(false); return false;" class="underlined"><?php echo fn_get_lang_var('unselect_all', $this->getLanguage()); ?>
</a></p>
	</div>
	
	<div class="form-field">
		<label for="dbdump_schema"><?php echo fn_get_lang_var('backup_schema', $this->getLanguage()); ?>
<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('tooltip' => fn_get_lang_var('tt_views_database_manage_backup_schema', $this->getLanguage()), )); ?><?php if ($this->_tpl_vars['tooltip']): ?> (<a class="cm-tooltip<?php if ($this->_tpl_vars['params']): ?> <?php echo $this->_tpl_vars['params']; ?>
<?php endif; ?>" title="<?php echo smarty_modifier_escape($this->_tpl_vars['tooltip'], 'html'); ?>
">?</a>)<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>:</label>
		<input type="checkbox" name="dbdump_schema" id="dbdump_schema" value="Y" checked="checked" class="checkbox" />
	</div>
	
	<div class="form-field">
		<label for="dbdump_data"><?php echo fn_get_lang_var('backup_data', $this->getLanguage()); ?>
<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('tooltip' => fn_get_lang_var('tt_views_database_manage_backup_data', $this->getLanguage()), )); ?><?php if ($this->_tpl_vars['tooltip']): ?> (<a class="cm-tooltip<?php if ($this->_tpl_vars['params']): ?> <?php echo $this->_tpl_vars['params']; ?>
<?php endif; ?>" title="<?php echo smarty_modifier_escape($this->_tpl_vars['tooltip'], 'html'); ?>
">?</a>)<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>:</label>
		<input type="checkbox" name="dbdump_data" id="dbdump_data" value="Y" checked="checked" class="checkbox" />
	</div>
	
	<div class="form-field">
		<label for="dbdump_compress"><?php echo fn_get_lang_var('compress_dump', $this->getLanguage()); ?>
:</label>
		<input type="hidden" name="dbdump_compress" value="N" />
		<input type="checkbox" name="dbdump_compress" id="dbdump_compress" value="Y" checked="checked" class="checkbox" />
	</div>
	
	<div class="form-field">
		<label for="dbdump_filename"><?php echo fn_get_lang_var('backup_filename', $this->getLanguage()); ?>
:</label>
		<input type="text" name="dbdump_filename" id="dbdump_filename" size="30" value="dump_<?php echo smarty_modifier_date_format(time(), "%m%d%Y"); ?>
.sql" class="input-text" />
		<p><?php echo fn_get_lang_var('text_backup_filename', $this->getLanguage()); ?>
</p>
		<p><span><?php echo $this->_tpl_vars['backup_dir']; ?>
</span></p>
	</div>
</fieldset>
	
<div class="buttons-container buttons-bg">
	<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('but_text' => fn_get_lang_var('backup', $this->getLanguage()), 'but_name' => "dispatch[database.backup]", 'but_role' => 'button_main', )); ?><?php if ($this->_tpl_vars['but_role'] == 'text'): ?>
	<?php $this->assign('class', "text-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>
	<?php $this->assign('class', "text-button-delete", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'add'): ?>
	<?php $this->assign('class', "text-button text-button-add", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'reload'): ?>
	<?php $this->assign('class', "text-button text-button-reload", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete_item'): ?>
	<?php $this->assign('class', "text-button-delete-item", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'edit'): ?>
	<?php $this->assign('class', "text-button-edit", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'tool'): ?>
	<?php $this->assign('class', "tool-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'link'): ?>
	<?php $this->assign('class', "text-button-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'simple'): ?>
	<?php $this->assign('class', "text-button-simple", false); ?>
<?php else: ?>
	<?php $this->assign('class', "", false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['but_name']): ?><?php $this->assign('r', $this->_tpl_vars['but_name'], false); ?><?php else: ?><?php $this->assign('r', $this->_tpl_vars['but_href'], false); ?><?php endif; ?>
<?php $this->assign('method', smarty_modifier_default(@$this->_tpl_vars['method'], 'POST'), false); ?>
<?php if (fn_check_view_permissions($this->_tpl_vars['r'], $this->_tpl_vars['method'])): ?>

<?php if ($this->_tpl_vars['but_name'] || $this->_tpl_vars['but_role'] == 'submit' || $this->_tpl_vars['but_role'] == 'button_main' || $this->_tpl_vars['but_type'] || $this->_tpl_vars['but_role'] == 'big'): ?> 
	<span <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="submit-button<?php if ($this->_tpl_vars['but_role'] == 'big'): ?>-big<?php endif; ?><?php if ($this->_tpl_vars['but_role'] == 'button_main'): ?> cm-button-main<?php endif; ?> <?php echo $this->_tpl_vars['but_meta']; ?>
"><input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="<?php echo smarty_modifier_default(@$this->_tpl_vars['but_type'], 'submit'); ?>
"<?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo $this->_tpl_vars['but_name']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_disabled']): ?>disabled="disabled"<?php endif; ?> /></span>

<?php elseif ($this->_tpl_vars['but_role'] && $this->_tpl_vars['but_role'] != 'submit' && $this->_tpl_vars['but_role'] != 'action' && $this->_tpl_vars['but_role'] != "advanced-search" && $this->_tpl_vars['but_role'] != 'button'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php echo $this->_tpl_vars['class']; ?>
<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['but_role'] == 'delete_item'): ?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/icon_delete.gif" width="12" height="18" border="0" alt="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" title="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" class="valign" /><?php else: ?><?php echo $this->_tpl_vars['but_text']; ?>
<?php endif; ?></a>

<?php elseif ($this->_tpl_vars['but_role'] == 'action' || $this->_tpl_vars['but_role'] == "advanced-search"): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
<?php if ($this->_tpl_vars['but_role'] == 'action'): ?>&nbsp;<img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/but_arrow.gif" width="8" height="7" border="0" alt=""/><?php endif; ?></a>
	
<?php elseif ($this->_tpl_vars['but_role'] == 'button'): ?>
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="button" <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />

<?php elseif ($this->_tpl_vars['but_role'] == 'icon'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php elseif (! $this->_tpl_vars['but_role']): ?> 
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> class="default-button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>" type="submit" onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>" value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />
<?php endif; ?>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
</div>
</form>
</div>

<div id="content_restore">
	<form action="<?php echo fn_url(""); ?>
" method="post" name="upload_data" class="cm-comet" enctype="multipart/form-data">
	<input type="hidden" name="selected_section" value="restore" />

	<fieldset>
	
	<div><?php echo fn_get_lang_var('text_backup_management_notice', $this->getLanguage()); ?>
</div>
	
	<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('var_name' => "sql_dump[0]", )); ?><?php echo smarty_function_script(array('src' => "js/fileuploader_scripts.js"), $this);?>

<?php echo smarty_function_script(array('src' => "js/node_cloning.js"), $this);?>


<?php $this->assign('id_var_name', md5(smarty_modifier_cat($this->_tpl_vars['prefix'], $this->_tpl_vars['var_name'])), false); ?>

<script type="text/javascript">
//<![CDATA[
	var id_var_name = "<?php echo $this->_tpl_vars['id_var_name']; ?>
";
	var label_id = "<?php echo $this->_tpl_vars['label_id']; ?>
";

	if (typeof(custom_labels) == "undefined") <?php echo $this->_tpl_vars['ldelim']; ?>

		custom_labels = <?php echo $this->_tpl_vars['ldelim']; ?>
<?php echo $this->_tpl_vars['rdelim']; ?>
;
	<?php echo $this->_tpl_vars['rdelim']; ?>

	
	custom_labels[id_var_name] = <?php echo $this->_tpl_vars['ldelim']; ?>
<?php echo $this->_tpl_vars['rdelim']; ?>
;
	custom_labels[id_var_name]['upload_another_file'] = <?php if ($this->_tpl_vars['multiupload'] == 'Y'): ?><?php if ($this->_tpl_vars['upload_another_file_text']): ?>'<?php echo smarty_modifier_escape($this->_tpl_vars['upload_another_file_text'], 'javascript'); ?>
'<?php else: ?>'<?php echo smarty_modifier_escape(fn_get_lang_var('upload_another_file', $this->getLanguage()), 'javascript'); ?>
'<?php endif; ?><?php else: ?>'<?php echo smarty_modifier_escape(fn_get_lang_var('local', $this->getLanguage()), 'javascript'); ?>
'<?php endif; ?>;
	custom_labels[id_var_name]['upload_file'] = <?php if ($this->_tpl_vars['upload_file_text']): ?>'<?php echo smarty_modifier_escape($this->_tpl_vars['upload_file_text'], 'javascript'); ?>
'<?php else: ?>'<?php echo smarty_modifier_escape(fn_get_lang_var('local', $this->getLanguage()), 'javascript'); ?>
'<?php endif; ?>;
//]]>
</script>

<div class="fileuploader">
<input type="hidden" id="<?php echo $this->_tpl_vars['label_id']; ?>
" value="<?php if ($this->_tpl_vars['images']): ?><?php echo $this->_tpl_vars['id_var_name']; ?>
<?php endif; ?>" />

<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['image_id'] => $this->_tpl_vars['image']):
?>
	<div class="upload-file-section cm-uploaded-image" id="message_<?php echo $this->_tpl_vars['id_var_name']; ?>
_<?php echo $this->_tpl_vars['image']['file']; ?>
" title="">
		<p class="cm-fu-file">
			<?php $this->_tag_stack[] = array('hook', array('name' => "fileuploader:links")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['image']['location'] == 'cart'): ?>
					<?php $this->assign('delete_link', ($this->_tpl_vars['controller']).".delete_file?cart_id=".($this->_tpl_vars['id'])."&amp;option_id=".($this->_tpl_vars['po']['option_id'])."&amp;file=".($this->_tpl_vars['image_id'])."&amp;redirect_mode=cart", false); ?>
					<?php $this->assign('download_link', ($this->_tpl_vars['controller']).".get_custom_file?cart_id=".($this->_tpl_vars['id'])."&amp;option_id=".($this->_tpl_vars['po']['option_id'])."&amp;file=".($this->_tpl_vars['image_id']), false); ?>
				<?php endif; ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php if ($this->_tpl_vars['image']['is_image']): ?>
				<a href="<?php echo fn_url($this->_tpl_vars['image']['detailed']); ?>
"><img src="<?php echo fn_url($this->_tpl_vars['image']['thumbnail']); ?>
" border="0" /></a><br />
			<?php endif; ?>
			
			<?php $this->_tag_stack[] = array('hook', array('name' => "fileuploader:uploaded_files")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['delete_link']): ?><a class="cm-ajax" href="<?php echo fn_url($this->_tpl_vars['delete_link']); ?>
"><?php endif; ?><?php if (! ( $this->_tpl_vars['po']['required'] == 'Y' && count($this->_tpl_vars['images']) == 1 )): ?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/icon_delete.gif" width="12" height="18" border="0" hspace="3" id="clean_selection_<?php echo $this->_tpl_vars['id_var_name']; ?>
_<?php echo $this->_tpl_vars['image']['file']; ?>
" alt="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" title="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" onclick="fileuploader.clean_selection(this.id); <?php if ($this->_tpl_vars['multiupload'] != 'Y'): ?>fileuploader.toggle_links('<?php echo $this->_tpl_vars['id_var_name']; ?>
', 'show');<?php endif; ?> fileuploader.check_required_field('<?php echo $this->_tpl_vars['id_var_name']; ?>
', '<?php echo $this->_tpl_vars['label_id']; ?>
');" class="hand valign" /><?php endif; ?><?php if ($this->_tpl_vars['delete_link']): ?></a><?php endif; ?><span><?php if ($this->_tpl_vars['download_link']): ?><a href="<?php echo fn_url($this->_tpl_vars['download_link']); ?>
"><?php endif; ?><?php echo $this->_tpl_vars['image']['name']; ?>
<?php if ($this->_tpl_vars['download_link']): ?></a><?php endif; ?></span>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</p>
	</div>
<?php endforeach; endif; unset($_from); ?>

<div class="nowrap" id="file_uploader_<?php echo $this->_tpl_vars['id_var_name']; ?>
">
	<div class="upload-file-section" id="message_<?php echo $this->_tpl_vars['id_var_name']; ?>
" title="">
		<p class="cm-fu-file hidden"><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/icon_delete.gif" width="12" height="18" border="0" hspace="3" id="clean_selection_<?php echo $this->_tpl_vars['id_var_name']; ?>
" alt="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" title="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" onclick="fileuploader.clean_selection(this.id); <?php if ($this->_tpl_vars['multiupload'] != 'Y'): ?>fileuploader.toggle_links(this.id, 'show');<?php endif; ?> fileuploader.check_required_field('<?php echo $this->_tpl_vars['id_var_name']; ?>
', '<?php echo $this->_tpl_vars['label_id']; ?>
');" class="hand valign" /><span></span></p>
		<?php if ($this->_tpl_vars['multiupload'] != 'Y'): ?><p class="cm-fu-no-file <?php if ($this->_tpl_vars['images']): ?>hidden<?php endif; ?>"><?php echo fn_get_lang_var('text_select_file', $this->getLanguage()); ?>
</p><?php endif; ?>
	</div>
	
	<?php echo '<div class="select-field upload-file-links '; ?><?php if ($this->_tpl_vars['multiupload'] != 'Y' && $this->_tpl_vars['images']): ?><?php echo 'hidden'; ?><?php endif; ?><?php echo '" id="link_container_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '"><input type="hidden" name="file_'; ?><?php echo $this->_tpl_vars['var_name']; ?><?php echo '" value="'; ?><?php if ($this->_tpl_vars['image_name']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['image_name']; ?><?php echo ''; ?><?php endif; ?><?php echo '" id="file_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['image']): ?><?php echo 'class="cm-image-field"'; ?><?php endif; ?><?php echo ' /><input type="hidden" name="type_'; ?><?php echo $this->_tpl_vars['var_name']; ?><?php echo '" value="'; ?><?php if ($this->_tpl_vars['image_name']): ?><?php echo 'local'; ?><?php endif; ?><?php echo '" id="type_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['image']): ?><?php echo 'class="cm-image-field"'; ?><?php endif; ?><?php echo ' /><div class="upload-file-local"><input type="file" name="file_'; ?><?php echo $this->_tpl_vars['var_name']; ?><?php echo '" id="_local_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '" onchange="fileuploader.show_loader(this.id); '; ?><?php if ($this->_tpl_vars['multiupload'] == 'Y'): ?><?php echo 'fileuploader.check_image(this.id);'; ?><?php endif; ?><?php echo ' fileuploader.check_required_field(\''; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '\', \''; ?><?php echo $this->_tpl_vars['label_id']; ?><?php echo '\');" onclick="$(this).removeAttr(\'value\');" value="" '; ?><?php if ($this->_tpl_vars['image']): ?><?php echo 'class="cm-image-field"'; ?><?php endif; ?><?php echo ' /><a id="local_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['images']): ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['upload_another_file_text'], fn_get_lang_var('upload_another_file', $this->getLanguage())); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['upload_file_text'], fn_get_lang_var('local', $this->getLanguage())); ?><?php echo ''; ?><?php endif; ?><?php echo '</a></div>&nbsp;&nbsp;|&nbsp;&nbsp;'; ?><?php if (! ( $this->_tpl_vars['hide_server'] || defined('COMPANY_ID') || defined('RESTRICTED_ADMIN') )): ?><?php echo '<a onclick="fileuploader.show_loader(this.id);" id="server_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '">'; ?><?php echo fn_get_lang_var('server', $this->getLanguage()); ?><?php echo '</a>&nbsp;&nbsp;|&nbsp;&nbsp;'; ?><?php endif; ?><?php echo '<a onclick="fileuploader.show_loader(this.id);" id="url_'; ?><?php echo $this->_tpl_vars['id_var_name']; ?><?php echo '">'; ?><?php echo fn_get_lang_var('url', $this->getLanguage()); ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['hidden_name']): ?><?php echo '<input type="hidden" name="'; ?><?php echo $this->_tpl_vars['hidden_name']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['hidden_value']; ?><?php echo '">'; ?><?php endif; ?><?php echo '</div>'; ?>

</div>

</div><!--fileuploader--><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
	
	<div class="buttons-container">
		<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('but_text' => fn_get_lang_var('upload', $this->getLanguage()), 'but_name' => "dispatch[database.upload]", )); ?><?php if ($this->_tpl_vars['but_role'] == 'text'): ?>
	<?php $this->assign('class', "text-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>
	<?php $this->assign('class', "text-button-delete", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'add'): ?>
	<?php $this->assign('class', "text-button text-button-add", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'reload'): ?>
	<?php $this->assign('class', "text-button text-button-reload", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete_item'): ?>
	<?php $this->assign('class', "text-button-delete-item", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'edit'): ?>
	<?php $this->assign('class', "text-button-edit", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'tool'): ?>
	<?php $this->assign('class', "tool-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'link'): ?>
	<?php $this->assign('class', "text-button-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'simple'): ?>
	<?php $this->assign('class', "text-button-simple", false); ?>
<?php else: ?>
	<?php $this->assign('class', "", false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['but_name']): ?><?php $this->assign('r', $this->_tpl_vars['but_name'], false); ?><?php else: ?><?php $this->assign('r', $this->_tpl_vars['but_href'], false); ?><?php endif; ?>
<?php $this->assign('method', smarty_modifier_default(@$this->_tpl_vars['method'], 'POST'), false); ?>
<?php if (fn_check_view_permissions($this->_tpl_vars['r'], $this->_tpl_vars['method'])): ?>

<?php if ($this->_tpl_vars['but_name'] || $this->_tpl_vars['but_role'] == 'submit' || $this->_tpl_vars['but_role'] == 'button_main' || $this->_tpl_vars['but_type'] || $this->_tpl_vars['but_role'] == 'big'): ?> 
	<span <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="submit-button<?php if ($this->_tpl_vars['but_role'] == 'big'): ?>-big<?php endif; ?><?php if ($this->_tpl_vars['but_role'] == 'button_main'): ?> cm-button-main<?php endif; ?> <?php echo $this->_tpl_vars['but_meta']; ?>
"><input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="<?php echo smarty_modifier_default(@$this->_tpl_vars['but_type'], 'submit'); ?>
"<?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo $this->_tpl_vars['but_name']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_disabled']): ?>disabled="disabled"<?php endif; ?> /></span>

<?php elseif ($this->_tpl_vars['but_role'] && $this->_tpl_vars['but_role'] != 'submit' && $this->_tpl_vars['but_role'] != 'action' && $this->_tpl_vars['but_role'] != "advanced-search" && $this->_tpl_vars['but_role'] != 'button'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php echo $this->_tpl_vars['class']; ?>
<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['but_role'] == 'delete_item'): ?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/icon_delete.gif" width="12" height="18" border="0" alt="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" title="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" class="valign" /><?php else: ?><?php echo $this->_tpl_vars['but_text']; ?>
<?php endif; ?></a>

<?php elseif ($this->_tpl_vars['but_role'] == 'action' || $this->_tpl_vars['but_role'] == "advanced-search"): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
<?php if ($this->_tpl_vars['but_role'] == 'action'): ?>&nbsp;<img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/but_arrow.gif" width="8" height="7" border="0" alt=""/><?php endif; ?></a>
	
<?php elseif ($this->_tpl_vars['but_role'] == 'button'): ?>
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="button" <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />

<?php elseif ($this->_tpl_vars['but_role'] == 'icon'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php elseif (! $this->_tpl_vars['but_role']): ?> 
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> class="default-button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>" type="submit" onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>" value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />
<?php endif; ?>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
	</div>
	</fieldset>
	</form>
	<form action="<?php echo fn_url(""); ?>
" method="post" name="restore_form" class="cm-ajax cm-comet" enctype="multipart/form-data">
	<input type="hidden" name="fake" value="1" />
	<input type="hidden" name="selected_section" value="restore" />
	<input type="hidden" name="result_ids" value="database_management" />
	<fieldset>
	<table cellpadding="0" cellspacing="0" border="0" class="table margin-top">
	<tr>
		<th>
			<input type="checkbox" name="check_all" value="Y" title="<?php echo fn_get_lang_var('check_uncheck_all', $this->getLanguage()); ?>
" class="checkbox cm-check-items" /></th>
		<th><?php echo fn_get_lang_var('type', $this->getLanguage()); ?>
</th>
		<th><?php echo fn_get_lang_var('filename', $this->getLanguage()); ?>
</th>
		<th><?php echo fn_get_lang_var('filesize', $this->getLanguage()); ?>
</th>
		<th>&nbsp;</th>
	</tr>
	<?php $_from = $this->_tpl_vars['backup_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['file']):
?>
	<tr <?php echo smarty_function_cycle(array('values' => "class=\"table-row\", "), $this);?>
>
		<td>
			<input type="checkbox" name="backup_files[]" value="<?php echo $this->_tpl_vars['name']; ?>
" class="checkbox cm-item" /></td>
		<td class="center">[<?php echo $this->_tpl_vars['file']['type']; ?>
]</td>
		<td>
			<a href="<?php echo fn_url("database.getfile?file=".($this->_tpl_vars['name'])); ?>
"><span><?php echo $this->_tpl_vars['name']; ?>
</span></a></td>
		<td>
			<?php echo number_format($this->_tpl_vars['file']['size']); ?>
&nbsp;<?php echo fn_get_lang_var('bytes', $this->getLanguage()); ?>
</td>
		<td class="nowrap">
		<?php ob_start(); ?>
		<li><a class="cm-confirm" href="<?php echo fn_url("database.delete?backup_file=".($this->_tpl_vars['name'])); ?>
"><?php echo fn_get_lang_var('delete', $this->getLanguage()); ?>
</a></li>
		<?php $this->_smarty_vars['capture']['tools_items'] = ob_get_contents(); ob_end_clean(); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/table_tools_list.tpl", 'smarty_include_vars' => array('prefix' => $this->_tpl_vars['name'],'tools_list' => $this->_smarty_vars['capture']['tools_items'],'href' => "database.getfile?file=".($this->_tpl_vars['name']),'link_text' => fn_get_lang_var('download', $this->getLanguage()))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
	<?php endforeach; else: ?>
	<tr class="no-items">
		<td colspan="5"><p><?php echo fn_get_lang_var('no_items', $this->getLanguage()); ?>
</p></td>
	</tr>
	<?php endif; unset($_from); ?>
	</table>

	</fieldset>
	
	<?php if ($this->_tpl_vars['backup_files']): ?>
		<div class="buttons-container buttons-bg">
			<?php ob_start(); ?>
			<ul>
				<li><a name="dispatch[database.delete]" class="cm-process-items cm-confirm" rev="restore_form"><?php echo fn_get_lang_var('delete_selected', $this->getLanguage()); ?>
</a></li>
			</ul>
			<?php $this->_smarty_vars['capture']['tools_list'] = ob_get_contents(); ob_end_clean(); ?>
			<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('but_text' => fn_get_lang_var('restore', $this->getLanguage()), 'but_name' => "dispatch[database.restore]", 'but_meta' => "cm-process-items cm-confirm", 'but_role' => 'button_main', )); ?><?php if ($this->_tpl_vars['but_role'] == 'text'): ?>
	<?php $this->assign('class', "text-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>
	<?php $this->assign('class', "text-button-delete", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'add'): ?>
	<?php $this->assign('class', "text-button text-button-add", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'reload'): ?>
	<?php $this->assign('class', "text-button text-button-reload", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete_item'): ?>
	<?php $this->assign('class', "text-button-delete-item", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'edit'): ?>
	<?php $this->assign('class', "text-button-edit", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'tool'): ?>
	<?php $this->assign('class', "tool-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'link'): ?>
	<?php $this->assign('class', "text-button-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'simple'): ?>
	<?php $this->assign('class', "text-button-simple", false); ?>
<?php else: ?>
	<?php $this->assign('class', "", false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['but_name']): ?><?php $this->assign('r', $this->_tpl_vars['but_name'], false); ?><?php else: ?><?php $this->assign('r', $this->_tpl_vars['but_href'], false); ?><?php endif; ?>
<?php $this->assign('method', smarty_modifier_default(@$this->_tpl_vars['method'], 'POST'), false); ?>
<?php if (fn_check_view_permissions($this->_tpl_vars['r'], $this->_tpl_vars['method'])): ?>

<?php if ($this->_tpl_vars['but_name'] || $this->_tpl_vars['but_role'] == 'submit' || $this->_tpl_vars['but_role'] == 'button_main' || $this->_tpl_vars['but_type'] || $this->_tpl_vars['but_role'] == 'big'): ?> 
	<span <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="submit-button<?php if ($this->_tpl_vars['but_role'] == 'big'): ?>-big<?php endif; ?><?php if ($this->_tpl_vars['but_role'] == 'button_main'): ?> cm-button-main<?php endif; ?> <?php echo $this->_tpl_vars['but_meta']; ?>
"><input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="<?php echo smarty_modifier_default(@$this->_tpl_vars['but_type'], 'submit'); ?>
"<?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo $this->_tpl_vars['but_name']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_disabled']): ?>disabled="disabled"<?php endif; ?> /></span>

<?php elseif ($this->_tpl_vars['but_role'] && $this->_tpl_vars['but_role'] != 'submit' && $this->_tpl_vars['but_role'] != 'action' && $this->_tpl_vars['but_role'] != "advanced-search" && $this->_tpl_vars['but_role'] != 'button'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php echo $this->_tpl_vars['class']; ?>
<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['but_role'] == 'delete_item'): ?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/icon_delete.gif" width="12" height="18" border="0" alt="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" title="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" class="valign" /><?php else: ?><?php echo $this->_tpl_vars['but_text']; ?>
<?php endif; ?></a>

<?php elseif ($this->_tpl_vars['but_role'] == 'action' || $this->_tpl_vars['but_role'] == "advanced-search"): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
<?php if ($this->_tpl_vars['but_role'] == 'action'): ?>&nbsp;<img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/but_arrow.gif" width="8" height="7" border="0" alt=""/><?php endif; ?></a>
	
<?php elseif ($this->_tpl_vars['but_role'] == 'button'): ?>
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="button" <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />

<?php elseif ($this->_tpl_vars['but_role'] == 'icon'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php elseif (! $this->_tpl_vars['but_role']): ?> 
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> class="default-button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>" type="submit" onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>" value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />
<?php endif; ?>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
			<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('prefix' => 'main', 'hide_actions' => true, 'tools_list' => $this->_smarty_vars['capture']['tools_list'], 'display' => 'inline', 'link_text' => fn_get_lang_var('choose_action', $this->getLanguage()), )); ?><?php if ($this->_tpl_vars['skip_check_permissions'] || fn_check_view_permissions($this->_tpl_vars['tools_list'])): ?>

<?php if ($this->_tpl_vars['tools_list'] && $this->_tpl_vars['prefix'] == 'main' && ! $this->_tpl_vars['only_popup']): ?> <?php echo fn_get_lang_var('or', $this->getLanguage()); ?>
 <?php endif; ?>

<?php if (substr_count($this->_tpl_vars['tools_list'], "<li") == 1): ?>
	<?php echo smarty_modifier_replace($this->_tpl_vars['tools_list'], "<ul>", "<ul class=\"cm-tools-list tools-list\">"); ?>

<?php else: ?>
	<div class="tools-container<?php if ($this->_tpl_vars['display']): ?> <?php echo $this->_tpl_vars['display']; ?>
<?php endif; ?>">
		<?php if (! $this->_tpl_vars['hide_tools'] && $this->_tpl_vars['tools_list']): ?>
		<div class="tools-content<?php if ($this->_tpl_vars['display']): ?> <?php echo $this->_tpl_vars['display']; ?>
<?php endif; ?>">
			<a class="cm-combo-on cm-combination <?php if ($this->_tpl_vars['override_meta']): ?><?php echo $this->_tpl_vars['override_meta']; ?>
<?php else: ?>select-button<?php endif; ?><?php if ($this->_tpl_vars['link_meta']): ?> <?php echo $this->_tpl_vars['link_meta']; ?>
<?php endif; ?>" id="sw_tools_list_<?php echo $this->_tpl_vars['prefix']; ?>
"><?php echo smarty_modifier_default(@$this->_tpl_vars['link_text'], fn_get_lang_var('tools', $this->getLanguage())); ?>
</a>
			<div id="tools_list_<?php echo $this->_tpl_vars['prefix']; ?>
" class="cm-tools-list popup-tools hidden cm-popup-box cm-smart-position">
					<?php echo $this->_tpl_vars['tools_list']; ?>

			</div>
		</div>
		<?php endif; ?>
		<?php if (! $this->_tpl_vars['hide_actions']): ?>
			<?php if (! ( defined('COMPANY_ID') && ! fn_check_view_permissions($this->_tpl_vars['tool_href']) )): ?>
				<span class="action-add">
					<a<?php if ($this->_tpl_vars['tool_id']): ?> id="<?php echo $this->_tpl_vars['tool_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['tool_href']): ?> href="<?php echo fn_url($this->_tpl_vars['tool_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['tool_onclick']): ?> onclick="<?php echo $this->_tpl_vars['tool_onclick']; ?>
; return false;"<?php endif; ?>><?php echo smarty_modifier_default(@$this->_tpl_vars['link_text'], fn_get_lang_var('add', $this->getLanguage())); ?>
</a>
				</span>
			<?php endif; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
		</div>
	<?php endif; ?>
	</form>

</div>

<div id="content_maintenance">

<fieldset>

<?php echo fn_get_lang_var('current_database_size', $this->getLanguage()); ?>
: <span><?php echo number_format($this->_tpl_vars['database_size']); ?>
</span> <?php echo fn_get_lang_var('bytes', $this->getLanguage()); ?>


</fieldset>

<form action="<?php echo fn_url(""); ?>
" method="post" class="cm-ajax cm-comet" name="mainainance_form">
<input type="hidden" name="selected_section" value="maintenance" />
<input type="hidden" name="result_ids" value="database_management" />
	<div class="buttons-container buttons-bg">
		<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('but_text' => fn_get_lang_var('optimize_database', $this->getLanguage()), 'but_name' => "dispatch[database.optimize]", 'but_role' => 'button_main', )); ?><?php if ($this->_tpl_vars['but_role'] == 'text'): ?>
	<?php $this->assign('class', "text-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>
	<?php $this->assign('class', "text-button-delete", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'add'): ?>
	<?php $this->assign('class', "text-button text-button-add", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'reload'): ?>
	<?php $this->assign('class', "text-button text-button-reload", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete_item'): ?>
	<?php $this->assign('class', "text-button-delete-item", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'edit'): ?>
	<?php $this->assign('class', "text-button-edit", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'tool'): ?>
	<?php $this->assign('class', "tool-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'link'): ?>
	<?php $this->assign('class', "text-button-link", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'simple'): ?>
	<?php $this->assign('class', "text-button-simple", false); ?>
<?php else: ?>
	<?php $this->assign('class', "", false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['but_name']): ?><?php $this->assign('r', $this->_tpl_vars['but_name'], false); ?><?php else: ?><?php $this->assign('r', $this->_tpl_vars['but_href'], false); ?><?php endif; ?>
<?php $this->assign('method', smarty_modifier_default(@$this->_tpl_vars['method'], 'POST'), false); ?>
<?php if (fn_check_view_permissions($this->_tpl_vars['r'], $this->_tpl_vars['method'])): ?>

<?php if ($this->_tpl_vars['but_name'] || $this->_tpl_vars['but_role'] == 'submit' || $this->_tpl_vars['but_role'] == 'button_main' || $this->_tpl_vars['but_type'] || $this->_tpl_vars['but_role'] == 'big'): ?> 
	<span <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="submit-button<?php if ($this->_tpl_vars['but_role'] == 'big'): ?>-big<?php endif; ?><?php if ($this->_tpl_vars['but_role'] == 'button_main'): ?> cm-button-main<?php endif; ?> <?php echo $this->_tpl_vars['but_meta']; ?>
"><input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="<?php echo smarty_modifier_default(@$this->_tpl_vars['but_type'], 'submit'); ?>
"<?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo $this->_tpl_vars['but_name']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_disabled']): ?>disabled="disabled"<?php endif; ?> /></span>

<?php elseif ($this->_tpl_vars['but_role'] && $this->_tpl_vars['but_role'] != 'submit' && $this->_tpl_vars['but_role'] != 'action' && $this->_tpl_vars['but_role'] != "advanced-search" && $this->_tpl_vars['but_role'] != 'button'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php echo $this->_tpl_vars['class']; ?>
<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['but_role'] == 'delete_item'): ?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/icon_delete.gif" width="12" height="18" border="0" alt="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" title="<?php echo fn_get_lang_var('remove_this_item', $this->getLanguage()); ?>
" class="valign" /><?php else: ?><?php echo $this->_tpl_vars['but_text']; ?>
<?php endif; ?></a>

<?php elseif ($this->_tpl_vars['but_role'] == 'action' || $this->_tpl_vars['but_role'] == "advanced-search"): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
<?php if ($this->_tpl_vars['but_role'] == 'action'): ?>&nbsp;<img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/but_arrow.gif" width="8" height="7" border="0" alt=""/><?php endif; ?></a>
	
<?php elseif ($this->_tpl_vars['but_role'] == 'button'): ?>
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="button" <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['tabindex']): ?>tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />

<?php elseif ($this->_tpl_vars['but_role'] == 'icon'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php elseif (! $this->_tpl_vars['but_role']): ?> 
	<input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> class="default-button<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>" type="submit" onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>" value="<?php echo $this->_tpl_vars['but_text']; ?>
" <?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> />
<?php endif; ?>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
	</div>
</form>

</div>

<?php $this->_smarty_vars['capture']['tabsbox'] = ob_get_contents(); ob_end_clean(); ?>
<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('content' => $this->_smarty_vars['capture']['tabsbox'], )); ?><?php echo smarty_function_script(array('src' => "js/tabs.js"), $this);?>


<?php if (! $this->_tpl_vars['active_tab']): ?>
	<?php $this->assign('active_tab', $this->_tpl_vars['_REQUEST']['selected_section'], false); ?>
<?php endif; ?>

<?php $this->assign('empty_tab_ids', smarty_modifier_empty_tabs($this->_tpl_vars['content']), false); ?>

<?php if ($this->_tpl_vars['navigation']['tabs']): ?>
<div class="tabs cm-j-tabs<?php if ($this->_tpl_vars['track']): ?> cm-track<?php endif; ?>">
	<ul>
	<?php $_from = $this->_tpl_vars['navigation']['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['tab']):
        $this->_foreach['tabs']['iteration']++;
?>
		<?php if (( ! $this->_tpl_vars['tabs_section'] || $this->_tpl_vars['tabs_section'] == $this->_tpl_vars['tab']['section'] ) && ( $this->_tpl_vars['tab']['hidden'] || ! smarty_modifier_in_array($this->_tpl_vars['key'], $this->_tpl_vars['empty_tab_ids']) )): ?>
		<li id="<?php echo $this->_tpl_vars['key']; ?>
<?php echo $this->_tpl_vars['id_suffix']; ?>
" class="<?php if ($this->_tpl_vars['tab']['hidden'] == 'Y'): ?>hidden <?php endif; ?><?php if ($this->_tpl_vars['tab']['js']): ?>cm-js<?php elseif ($this->_tpl_vars['tab']['ajax']): ?>cm-js cm-ajax<?php endif; ?><?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['active_tab']): ?> cm-active<?php endif; ?>"><a <?php if ($this->_tpl_vars['tab']['href']): ?>href="<?php echo fn_url($this->_tpl_vars['tab']['href']); ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['tab']['title']; ?>
</a><?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['active_tab']): ?><?php echo $this->_tpl_vars['active_tab_extra']; ?>
<?php endif; ?></li>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>
<div class="cm-tabs-content">
	<?php echo $this->_tpl_vars['content']; ?>

</div>
<?php else: ?>
	<?php echo $this->_tpl_vars['content']; ?>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>

<?php $this->_smarty_vars['capture']['mainbox'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/mainbox.tpl", 'smarty_include_vars' => array('title' => fn_get_lang_var('database', $this->getLanguage()),'content' => $this->_smarty_vars['capture']['mainbox'],'box_id' => 'database_management')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>