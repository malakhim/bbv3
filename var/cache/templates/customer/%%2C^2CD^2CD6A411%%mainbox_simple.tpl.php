<?php /* Smarty version 2.6.18, created on 2014-06-07 02:47:01
         compiled from C:/wamp5/www/public_html/skins/basic/customer/blocks/wrappers/mainbox_simple.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'trim', 'C:/wamp5/www/public_html/skins/basic/customer/blocks/wrappers/mainbox_simple.tpl', 1, false),array('modifier', 'unescape', 'C:/wamp5/www/public_html/skins/basic/customer/blocks/wrappers/mainbox_simple.tpl', 15, false),array('block', 'hook', 'C:/wamp5/www/public_html/skins/basic/customer/blocks/wrappers/mainbox_simple.tpl', 7, false),)), $this); ?>
<?php  ob_start();  ?><?php if (trim($this->_tpl_vars['content'])): ?>
	<?php if ($this->_tpl_vars['anchor']): ?>
	<a name="<?php echo $this->_tpl_vars['anchor']; ?>
"></a>
	<?php endif; ?>
	<div class="mainbox2-container<?php if ($this->_tpl_vars['block']['user_class']): ?> <?php echo $this->_tpl_vars['block']['user_class']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['content_alignment'] == 'RIGHT'): ?> float-right<?php elseif ($this->_tpl_vars['content_alignment'] == 'LEFT'): ?> float-left<?php endif; ?>">
		<h1 class="mainbox2-title clearfix">
			<?php $this->_tag_stack[] = array('hook', array('name' => "wrapper:mainbox_simple_title")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if (trim($this->_smarty_vars['capture']['title'])): ?>
				<?php echo $this->_smarty_vars['capture']['title']; ?>

			<?php else: ?>
				<span><?php echo $this->_tpl_vars['title']; ?>
</span>
			<?php endif; ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</h1>
		<div class="mainbox2-body"><?php echo smarty_modifier_unescape($this->_tpl_vars['content']); ?>
</div>
		<div class="mainbox2-bottom"><span>&nbsp;</span></div>
	</div>
<?php endif; ?><?php  ob_end_flush();  ?>