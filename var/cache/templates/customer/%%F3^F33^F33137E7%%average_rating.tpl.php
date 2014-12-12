<?php /* Smarty version 2.6.18, created on 2014-12-12 13:52:40
         compiled from addons/discussion/views/discussion/components/average_rating.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_get_discussion_rating', 'addons/discussion/views/discussion/components/average_rating.tpl', 1, false),array('modifier', 'fn_get_average_rating', 'addons/discussion/views/discussion/components/average_rating.tpl', 15, false),)), $this); ?>
<?php  ob_start();  ?><?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'addons/discussion/views/discussion/components/stars.tpl' => 1406444269,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php $this->assign('average_rating', fn_get_average_rating($this->_tpl_vars['object_id'], $this->_tpl_vars['object_type']), false); ?>

<?php if ($this->_tpl_vars['average_rating']): ?>
<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('stars' => fn_get_discussion_rating($this->_tpl_vars['average_rating']), )); ?><p class="nowrap stars">
<?php if ($this->_tpl_vars['controller'] == 'products' && $this->_tpl_vars['mode'] == 'view'): ?><a onclick="$('#discussion').click(); return false;"><?php endif; ?>
<?php unset($this->_sections['full_star']);
$this->_sections['full_star']['name'] = 'full_star';
$this->_sections['full_star']['loop'] = is_array($_loop=$this->_tpl_vars['stars']['full']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['full_star']['show'] = true;
$this->_sections['full_star']['max'] = $this->_sections['full_star']['loop'];
$this->_sections['full_star']['step'] = 1;
$this->_sections['full_star']['start'] = $this->_sections['full_star']['step'] > 0 ? 0 : $this->_sections['full_star']['loop']-1;
if ($this->_sections['full_star']['show']) {
    $this->_sections['full_star']['total'] = $this->_sections['full_star']['loop'];
    if ($this->_sections['full_star']['total'] == 0)
        $this->_sections['full_star']['show'] = false;
} else
    $this->_sections['full_star']['total'] = 0;
if ($this->_sections['full_star']['show']):

            for ($this->_sections['full_star']['index'] = $this->_sections['full_star']['start'], $this->_sections['full_star']['iteration'] = 1;
                 $this->_sections['full_star']['iteration'] <= $this->_sections['full_star']['total'];
                 $this->_sections['full_star']['index'] += $this->_sections['full_star']['step'], $this->_sections['full_star']['iteration']++):
$this->_sections['full_star']['rownum'] = $this->_sections['full_star']['iteration'];
$this->_sections['full_star']['index_prev'] = $this->_sections['full_star']['index'] - $this->_sections['full_star']['step'];
$this->_sections['full_star']['index_next'] = $this->_sections['full_star']['index'] + $this->_sections['full_star']['step'];
$this->_sections['full_star']['first']      = ($this->_sections['full_star']['iteration'] == 1);
$this->_sections['full_star']['last']       = ($this->_sections['full_star']['iteration'] == $this->_sections['full_star']['total']);
?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/star_full.png" width="16" height="16" alt="*" /><?php endfor; endif; ?>
<?php if ($this->_tpl_vars['stars']['part']): ?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/star_<?php echo $this->_tpl_vars['stars']['part']; ?>
.png" width="16" height="16" alt="" /><?php endif; ?>
<?php unset($this->_sections['full_star']);
$this->_sections['full_star']['name'] = 'full_star';
$this->_sections['full_star']['loop'] = is_array($_loop=$this->_tpl_vars['stars']['empty']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['full_star']['show'] = true;
$this->_sections['full_star']['max'] = $this->_sections['full_star']['loop'];
$this->_sections['full_star']['step'] = 1;
$this->_sections['full_star']['start'] = $this->_sections['full_star']['step'] > 0 ? 0 : $this->_sections['full_star']['loop']-1;
if ($this->_sections['full_star']['show']) {
    $this->_sections['full_star']['total'] = $this->_sections['full_star']['loop'];
    if ($this->_sections['full_star']['total'] == 0)
        $this->_sections['full_star']['show'] = false;
} else
    $this->_sections['full_star']['total'] = 0;
if ($this->_sections['full_star']['show']):

            for ($this->_sections['full_star']['index'] = $this->_sections['full_star']['start'], $this->_sections['full_star']['iteration'] = 1;
                 $this->_sections['full_star']['iteration'] <= $this->_sections['full_star']['total'];
                 $this->_sections['full_star']['index'] += $this->_sections['full_star']['step'], $this->_sections['full_star']['iteration']++):
$this->_sections['full_star']['rownum'] = $this->_sections['full_star']['iteration'];
$this->_sections['full_star']['index_prev'] = $this->_sections['full_star']['index'] - $this->_sections['full_star']['step'];
$this->_sections['full_star']['index_next'] = $this->_sections['full_star']['index'] + $this->_sections['full_star']['step'];
$this->_sections['full_star']['first']      = ($this->_sections['full_star']['iteration'] == 1);
$this->_sections['full_star']['last']       = ($this->_sections['full_star']['iteration'] == $this->_sections['full_star']['total']);
?><img src="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/star_empty.png" width="16" height="16" alt="" /><?php endfor; endif; ?>
<?php if ($this->_tpl_vars['controller'] == 'products' && $this->_tpl_vars['mode'] == 'view'): ?></a><?php endif; ?>

</p><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
<?php endif; ?><?php  ob_end_flush();  ?>