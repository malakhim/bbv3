<?php /* Smarty version 2.6.18, created on 2015-02-27 12:02:23
         compiled from C:/wamp3/www/public_html/skins/basic/customer/blocks/wrappers/sidebox_general.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'trim', 'C:/wamp3/www/public_html/skins/basic/customer/blocks/wrappers/sidebox_general.tpl', 1, false),array('modifier', 'default', 'C:/wamp3/www/public_html/skins/basic/customer/blocks/wrappers/sidebox_general.tpl', 2, false),array('modifier', 'unescape', 'C:/wamp3/www/public_html/skins/basic/customer/blocks/wrappers/sidebox_general.tpl', 12, false),array('block', 'hook', 'C:/wamp3/www/public_html/skins/basic/customer/blocks/wrappers/sidebox_general.tpl', 4, false),)), $this); ?>
<?php  ob_start();  ?><?php if (trim($this->_tpl_vars['content'])): ?>
	<div class="<?php echo smarty_modifier_default(@$this->_tpl_vars['sidebox_wrapper'], "sidebox-wrapper"); ?>
 <?php if ($this->_tpl_vars['hide_wrapper']): ?>hidden cm-hidden-wrapper<?php endif; ?><?php if ($this->_tpl_vars['block']['user_class']): ?> <?php echo $this->_tpl_vars['block']['user_class']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['content_alignment'] == 'RIGHT'): ?> float-right<?php elseif ($this->_tpl_vars['content_alignment'] == 'LEFT'): ?> float-left<?php endif; ?>">
		<h3 class="sidebox-title<?php if ($this->_tpl_vars['header_class']): ?> <?php echo $this->_tpl_vars['header_class']; ?>
<?php endif; ?>">
			<?php $this->_tag_stack[] = array('hook', array('name' => "wrapper:sidebox_general_title")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if (trim($this->_smarty_vars['capture']['title'])): ?>
				<?php echo $this->_smarty_vars['capture']['title']; ?>

			<?php else: ?>
				<span><?php echo $this->_tpl_vars['title']; ?>
</span>
			<?php endif; ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</h3>
		<div class="sidebox-body"><?php echo smarty_modifier_default(smarty_modifier_unescape($this->_tpl_vars['content']), "&nbsp;"); ?>
</div>
	</div>
<?php endif; ?><?php  ob_end_flush();  ?>