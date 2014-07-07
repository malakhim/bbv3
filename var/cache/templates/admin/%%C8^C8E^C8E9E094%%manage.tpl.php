<?php /* Smarty version 2.6.18, created on 2014-07-07 17:21:47
         compiled from views/logs/manage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'views/logs/manage.tpl', 18, false),array('modifier', 'lower', 'views/logs/manage.tpl', 20, false),array('modifier', 'date_format', 'views/logs/manage.tpl', 22, false),array('modifier', 'fn_url', 'views/logs/manage.tpl', 24, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('time','user','type','content','backtrace','no_data','logs'));
?>
<?php ob_start(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "views/logs/components/logs_search_form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
<tr>
	<th>&nbsp;</th>
	<th><?php echo fn_get_lang_var('time', $this->getLanguage()); ?>
</th>
	<th><?php echo fn_get_lang_var('user', $this->getLanguage()); ?>
</th>
	<th><?php echo fn_get_lang_var('type', $this->getLanguage()); ?>
</th>
	<th width="100%"><?php echo fn_get_lang_var('content', $this->getLanguage()); ?>
</th>
</tr>
<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
<?php $this->assign('_type', "log_type_".($this->_tpl_vars['log']['type']), false); ?>
<?php $this->assign('_action', "log_action_".($this->_tpl_vars['log']['action']), false); ?>
<tr <?php echo smarty_function_cycle(array('values' => "class=\"table-row\","), $this);?>
 valign="top">
	<td>
		<img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/notification_icon_<?php echo smarty_modifier_lower($this->_tpl_vars['log']['event_type']); ?>
.png" width="19" height="19" alt="" /></td>
	<td class="nowrap">
		<?php echo smarty_modifier_date_format($this->_tpl_vars['log']['timestamp'], ($this->_tpl_vars['settings']['Appearance']['date_format']).", ".($this->_tpl_vars['settings']['Appearance']['time_format'])); ?>
</td>
	<td class="nowrap">
		<?php if ($this->_tpl_vars['log']['user_id']): ?><a href="<?php echo fn_url("profiles.update?user_id=".($this->_tpl_vars['log']['user_id'])); ?>
"><?php echo $this->_tpl_vars['log']['lastname']; ?>
<?php if ($this->_tpl_vars['log']['firstname'] || $this->_tpl_vars['log']['lastname']): ?>&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['log']['firstname']; ?>
</a><?php else: ?>&nbsp;-&nbsp;<?php endif; ?></td>
	<td class="nowrap">
		<?php echo fn_get_lang_var($this->_tpl_vars['_type'], $this->getLanguage()); ?>
<?php if ($this->_tpl_vars['log']['action']): ?>&nbsp;(<?php echo fn_get_lang_var($this->_tpl_vars['_action'], $this->getLanguage()); ?>
)<?php endif; ?></td>
	<td width="100%">
		<?php $_from = $this->_tpl_vars['log']['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		<?php if ($this->_tpl_vars['v']): ?>
			<?php echo fn_get_lang_var($this->_tpl_vars['k'], $this->getLanguage()); ?>
:&nbsp;<?php echo $this->_tpl_vars['v']; ?>
<br />
		<?php endif; ?>
		<?php endforeach; else: ?>
		&nbsp;-&nbsp;
		<?php endif; unset($_from); ?>

		<?php if ($this->_tpl_vars['log']['backtrace']): ?>
		<p><a onclick="$('#backtrace_<?php echo $this->_tpl_vars['log']['log_id']; ?>
').toggle(); return false;" class="underlined"><span><?php echo fn_get_lang_var('backtrace', $this->getLanguage()); ?>
&#155;&#155;</span></a></p>
		<div id="backtrace_<?php echo $this->_tpl_vars['log']['log_id']; ?>
" class="notice-box hidden">
		<?php $_from = $this->_tpl_vars['log']['backtrace']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<?php echo $this->_tpl_vars['v']['file']; ?>
<?php if ($this->_tpl_vars['v']['function']): ?>&nbsp;(<?php echo $this->_tpl_vars['v']['function']; ?>
)<?php endif; ?>:&nbsp;<?php echo $this->_tpl_vars['v']['line']; ?>
<br />
		<?php endforeach; endif; unset($_from); ?>
		</div>
		<?php else: ?>
			&nbsp;
		<?php endif; ?>
	</td>
</tr>
<?php endforeach; else: ?>
<tr class="no-items">
	<td colspan="5"><p><?php echo fn_get_lang_var('no_data', $this->getLanguage()); ?>
</p></td>
</tr>
<?php endif; unset($_from); ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_smarty_vars['capture']['mainbox'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/mainbox.tpl", 'smarty_include_vars' => array('title' => fn_get_lang_var('logs', $this->getLanguage()),'content' => $this->_smarty_vars['capture']['mainbox'],'title_extra' => $this->_smarty_vars['capture']['title_extra'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>