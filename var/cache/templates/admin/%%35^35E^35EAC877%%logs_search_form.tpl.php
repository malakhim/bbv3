<?php /* Smarty version 2.6.18, created on 2014-12-05 13:03:26
         compiled from views/logs/components/logs_search_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'views/logs/components/logs_search_form.tpl', 16, false),array('modifier', 'escape', 'views/logs/components/logs_search_form.tpl', 57, false),array('block', 'hook', 'views/logs/components/logs_search_form.tpl', 41, false),array('function', 'math', 'views/logs/components/logs_search_form.tpl', 83, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('user','type','action','all','all','close'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'common_templates/section.tpl' => 1406444267,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php ob_start(); ?>
<form action="<?php echo fn_url(""); ?>
" name="logs_form" method="get">
<input type="hidden" name="object" value="<?php echo $this->_tpl_vars['_REQUEST']['object']; ?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/period_selector.tpl", 'smarty_include_vars' => array('period' => $this->_tpl_vars['search']['period'],'extra' => "",'display' => 'form','but_name' => "dispatch[logs.manage]")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php ob_start(); ?>

<div class="search-field">
	<label><?php echo fn_get_lang_var('user', $this->getLanguage()); ?>
:</label>
	<input type="text" name="q_user" size="30" value="<?php echo $this->_tpl_vars['search']['q_user']; ?>
" class="input-text" />
</div>

<div class="search-field">
	<label><?php echo fn_get_lang_var('type', $this->getLanguage()); ?>
/<?php echo fn_get_lang_var('action', $this->getLanguage()); ?>
:</label>
	<select id="q_type" name="q_type" onchange="fn_logs_build_options();">
		<option value=""<?php if (! $this->_tpl_vars['search']['q_type']): ?> selected="selected"<?php endif; ?>><?php echo fn_get_lang_var('all', $this->getLanguage()); ?>
</option>
		<?php $_from = $this->_tpl_vars['log_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['o']):
?>
			<option value="<?php echo $this->_tpl_vars['o']['type']; ?>
"<?php if ($this->_tpl_vars['search']['q_type'] == $this->_tpl_vars['o']['type']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['o']['description']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select>
	&nbsp;&nbsp;
	<select id="q_action" class="hidden" name="q_action">
	</select>
</div>

<?php $this->_tag_stack[] = array('hook', array('name' => "logs:search_form")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $this->_smarty_vars['capture']['advanced_search'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/advanced_search.tpl", 'smarty_include_vars' => array('content' => $this->_smarty_vars['capture']['advanced_search'],'dispatch' => "logs.manage",'view_type' => 'logs')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
//<![CDATA[
var types = new Array();
<?php $_from = $this->_tpl_vars['log_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['o']):
?>
types['<?php echo $this->_tpl_vars['o']['type']; ?>
'] = new Array();
<?php $_from = $this->_tpl_vars['o']['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
types['<?php echo $this->_tpl_vars['o']['type']; ?>
']['<?php echo $this->_tpl_vars['k']; ?>
'] = '<?php echo $this->_tpl_vars['v']; ?>
';
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

lang.all = '<?php echo smarty_modifier_escape(fn_get_lang_var('all', $this->getLanguage()), 'javascript'); ?>
';

<?php echo '
function fn_logs_build_options(current_action)
{
	var elm_t = $(\'#q_type\');
	var elm_a = $(\'#q_action\');

	elm_a.html(\'<option value="">\' + lang.all + \'</option>\');

	for (var action in types[elm_t.val()]) {
		elm_a.append(\'<option value="\' + action + \'"\' + (current_action && current_action == action ? \' selected="selected"\' : \'\') + \'>\' + types[elm_t.val()][action] + \'</option>\');
	}

	$(\'#q_action\').toggleBy(($(\'option\', elm_a).length == 1));
}
'; ?>


$(function() <?php echo $this->_tpl_vars['ldelim']; ?>

	fn_logs_build_options('<?php echo $this->_tpl_vars['search']['q_action']; ?>
');
<?php echo $this->_tpl_vars['rdelim']; ?>
);
//]]>
</script>

</form>
<?php $this->_smarty_vars['capture']['section'] = ob_get_contents(); ob_end_clean(); ?>
<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('section_content' => $this->_smarty_vars['capture']['section'], )); ?><?php echo smarty_function_math(array('equation' => "rand()",'assign' => 'rnd'), $this);?>

<div class="clear" id="ds_<?php echo $this->_tpl_vars['rnd']; ?>
">
	<div class="section-border">
		<?php echo $this->_tpl_vars['section_content']; ?>

		<?php if ($this->_tpl_vars['section_state']): ?>
			<p align="right">
				<a href="<?php echo fn_url(($this->_tpl_vars['index_script'])."?".($_SERVER['QUERY_STRING'])."&amp;close_section=".($this->_tpl_vars['key'])); ?>
" class="underlined"><?php echo fn_get_lang_var('close', $this->getLanguage()); ?>
</a>
			</p>
		<?php endif; ?>
	</div>
</div><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>