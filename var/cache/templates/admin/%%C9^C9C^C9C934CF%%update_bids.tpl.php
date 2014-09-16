<?php /* Smarty version 2.6.18, created on 2014-09-17 03:46:33
         compiled from addons/billibuys/views/billibuys/update_bids.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'addons/billibuys/views/billibuys/update_bids.tpl', 3, false),array('modifier', 'fn_check_form_permissions', 'addons/billibuys/views/billibuys/update_bids.tpl', 4, false),array('modifier', 'replace', 'addons/billibuys/views/billibuys/update_bids.tpl', 18, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('create_notification','update_bids_auto_update_option_text','update_bids_manual_update_option_text','update_bids_no_update_option_text','no_disabled_bids','here','update_bids'));
?>
<?php ob_start(); ?>
	<?php if ($this->_tpl_vars['bids']): ?>
		<a href="<?php echo fn_url("admin.php?dispatch=billibuys.notify"); ?>
"><?php echo fn_get_lang_var('create_notification', $this->getLanguage()); ?>
</a>
		<form action="<?php echo fn_url(""); ?>
" method="post" name="category_tree_form" class="<?php if (fn_check_form_permissions("")): ?>cm-hide-inputs<?php endif; ?>">

			<?php ob_start(); ?>
				<select name="quantity">
					<?php unset($this->_sections['quantity']);
$this->_sections['quantity']['name'] = 'quantity';
$this->_sections['quantity']['start'] = (int)$this->_tpl_vars['bids'][0]['amount'];
$this->_sections['quantity']['loop'] = is_array($_loop=0) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['quantity']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$this->_sections['quantity']['show'] = true;
$this->_sections['quantity']['max'] = $this->_sections['quantity']['loop'];
if ($this->_sections['quantity']['start'] < 0)
    $this->_sections['quantity']['start'] = max($this->_sections['quantity']['step'] > 0 ? 0 : -1, $this->_sections['quantity']['loop'] + $this->_sections['quantity']['start']);
else
    $this->_sections['quantity']['start'] = min($this->_sections['quantity']['start'], $this->_sections['quantity']['step'] > 0 ? $this->_sections['quantity']['loop'] : $this->_sections['quantity']['loop']-1);
if ($this->_sections['quantity']['show']) {
    $this->_sections['quantity']['total'] = min(ceil(($this->_sections['quantity']['step'] > 0 ? $this->_sections['quantity']['loop'] - $this->_sections['quantity']['start'] : $this->_sections['quantity']['start']+1)/abs($this->_sections['quantity']['step'])), $this->_sections['quantity']['max']);
    if ($this->_sections['quantity']['total'] == 0)
        $this->_sections['quantity']['show'] = false;
} else
    $this->_sections['quantity']['total'] = 0;
if ($this->_sections['quantity']['show']):

            for ($this->_sections['quantity']['index'] = $this->_sections['quantity']['start'], $this->_sections['quantity']['iteration'] = 1;
                 $this->_sections['quantity']['iteration'] <= $this->_sections['quantity']['total'];
                 $this->_sections['quantity']['index'] += $this->_sections['quantity']['step'], $this->_sections['quantity']['iteration']++):
$this->_sections['quantity']['rownum'] = $this->_sections['quantity']['iteration'];
$this->_sections['quantity']['index_prev'] = $this->_sections['quantity']['index'] - $this->_sections['quantity']['step'];
$this->_sections['quantity']['index_next'] = $this->_sections['quantity']['index'] + $this->_sections['quantity']['step'];
$this->_sections['quantity']['first']      = ($this->_sections['quantity']['iteration'] == 1);
$this->_sections['quantity']['last']       = ($this->_sections['quantity']['iteration'] == $this->_sections['quantity']['total']);
?>
						<option value="<?php echo $this->_sections['quantity']['index']; ?>
"><?php echo $this->_sections['quantity']['index']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			<?php $this->_smarty_vars['capture']['amount_dropdown'] = ob_get_contents();  $this->assign('amount', ob_get_contents());ob_end_clean(); ?>

			<?php ob_start(); ?>
				<input type="text" value="<?php echo $this->_tpl_vars['highest_price']; ?>
" class="input-text" />
			<?php $this->_smarty_vars['capture']['price_inputbox'] = ob_get_contents();  $this->assign('price', ob_get_contents());ob_end_clean(); ?>

			<input type="radio" name="update_bid_option" value="auto_update" id="a_update" /><label for="a_update"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(fn_get_lang_var('update_bids_auto_update_option_text', $this->getLanguage()), "[product]", $this->_tpl_vars['bids'][0]['product']), "[quantity]", $this->_tpl_vars['amount']), 'currency', $this->_tpl_vars['currency']), "[price]", $this->_tpl_vars['price']); ?>
</label>
			<input type="radio" name="update_bid_option" value="manual_update" id="m_update" /><label for="m_update"><?php echo fn_get_lang_var('update_bids_manual_update_option_text', $this->getLanguage()); ?>
</label>
			<input type="radio" name="update_bid_option" value="no_update" id="n_update" /><label for="n_update"><?php echo fn_get_lang_var('update_bids_no_update_option_text', $this->getLanguage()); ?>
</label>
	<?php else: ?>
				<?php echo smarty_modifier_replace(fn_get_lang_var('no_disabled_bids', $this->getLanguage()), "[here]", "<a href='".($this->_tpl_vars['url'])."'>".(fn_get_lang_var('here', $this->getLanguage()))."|@lower</a>"); ?>

	<?php endif; ?>

<?php $this->_smarty_vars['capture']['mainbox'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/mainbox.tpl", 'smarty_include_vars' => array('title' => fn_get_lang_var('update_bids', $this->getLanguage()),'content' => $this->_smarty_vars['capture']['mainbox'],'title_extra' => $this->_smarty_vars['capture']['title_extra'],'tools' => $this->_smarty_vars['capture']['tools'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>