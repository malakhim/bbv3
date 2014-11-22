<?php /* Smarty version 2.6.18, created on 2014-11-22 13:59:35
         compiled from addons/discussion/hooks/products/detailed_content.post.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'defined', 'addons/discussion/hooks/products/detailed_content.post.tpl', 15, false),array('modifier', 'fn_get_discussion', 'addons/discussion/hooks/products/detailed_content.post.tpl', 20, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_product','communication','and','rating','communication','rating','disabled'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'addons/discussion/views/discussion_manager/components/allow_discussion.tpl' => 1406444267,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php if (defined('COMPANY_ID') && @PRODUCT_TYPE == 'ULTIMATE' || @PRODUCT_TYPE != 'ULTIMATE'): ?>
<fieldset>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/subheader.tpl", 'smarty_include_vars' => array('title' => fn_get_lang_var('comments_and_reviews', $this->getLanguage()))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('prefix' => 'product_data', 'object_id' => $this->_tpl_vars['product_data']['product_id'], 'object_type' => 'P', 'title' => fn_get_lang_var('discussion_title_product', $this->getLanguage()), 'non_editable' => false, )); ?><div class="form-field <?php if (! $this->_tpl_vars['non_editable']): ?>cm-no-hide-input<?php endif; ?>">
	<label for="discussion_type"><?php echo $this->_tpl_vars['title']; ?>
:</label>
	<?php $this->assign('discussion', fn_get_discussion($this->_tpl_vars['object_id'], $this->_tpl_vars['object_type']), false); ?>
	<select name="<?php echo $this->_tpl_vars['prefix']; ?>
[discussion_type]" id="discussion_type">
		<option <?php if ($this->_tpl_vars['discussion']['type'] == 'B'): ?>selected="selected"<?php endif; ?> value="B"><?php echo fn_get_lang_var('communication', $this->getLanguage()); ?>
 <?php echo fn_get_lang_var('and', $this->getLanguage()); ?>
 <?php echo fn_get_lang_var('rating', $this->getLanguage()); ?>
</option>
		<option <?php if ($this->_tpl_vars['discussion']['type'] == 'C'): ?>selected="selected"<?php endif; ?> value="C"><?php echo fn_get_lang_var('communication', $this->getLanguage()); ?>
</option>
		<option <?php if ($this->_tpl_vars['discussion']['type'] == 'R'): ?>selected="selected"<?php endif; ?> value="R"><?php echo fn_get_lang_var('rating', $this->getLanguage()); ?>
</option>
		<option <?php if ($this->_tpl_vars['discussion']['type'] == 'D' || ! $this->_tpl_vars['discussion']): ?>selected="selected"<?php endif; ?> value="D"><?php echo fn_get_lang_var('disabled', $this->getLanguage()); ?>
</option>
	</select>
</div><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
</fieldset>
<?php endif; ?>