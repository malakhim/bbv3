<?php /* Smarty version 2.6.18, created on 2014-11-27 16:04:50
         compiled from C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_top_nav_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_top_nav_login.tpl', 5, false),array('modifier', 'count', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_top_nav_login.tpl', 5, false),array('modifier', 'capitalize', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_top_nav_login.tpl', 7, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('view_cart','block_my_account','sign_out','sign_in','register','sign_in'));
?>
	<div class="buttons-container float-right">

		<?php if ($_SESSION['auth']['user_id'] > 0): ?>
			<?php if ($_SESSION['cart']['products']): ?>
				<a href="<?php echo fn_url("checkout.cart"); ?>
" rel="nofollow" class="account"><span class="top_menu_item"><?php echo fn_get_lang_var('view_cart', $this->getLanguage()); ?>
&nbsp;(<?php echo count($_SESSION['cart']['products']); ?>
)</a></span>
			<?php endif; ?>
			<a href="<?php echo fn_url("profiles.update"); ?>
" rel="nofollow" class="account"><span class="top_menu_item"><?php echo smarty_modifier_capitalize(fn_get_lang_var('block_my_account', $this->getLanguage())); ?>
</a></span>
			<a href="<?php echo fn_url("auth.logout"); ?>
" rel="nofollow" class="account"><span class="top_menu_item"><?php echo smarty_modifier_capitalize(fn_get_lang_var('sign_out', $this->getLanguage())); ?>
</a></span>
		<?php else: ?>
			<a href="<?php if ($this->_tpl_vars['controller'] == 'auth' && $this->_tpl_vars['mode'] == 'login_form'): ?><?php echo fn_url($this->_tpl_vars['config']['current_url']); ?>
<?php else: ?><?php echo fn_url("auth.login_form?return_url=".($this->_tpl_vars['return_current_url'])); ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['settings']['General']['secure_auth'] != 'Y'): ?> rev="login_block<?php echo $this->_tpl_vars['block']['snapping_id']; ?>
" class="cm-dialog-opener cm-dialog-auto-size account"<?php else: ?>rel="nofollow" class="account"<?php endif; ?>><span class="top_menu_item"><?php echo smarty_modifier_capitalize(fn_get_lang_var('sign_in', $this->getLanguage())); ?>
</span></a> <a href="<?php echo fn_url("profiles.add"); ?>
" rel="nofollow" class="account"><span class="top_menu_item"><?php echo fn_get_lang_var('register', $this->getLanguage()); ?>
</span></a>
			<?php if ($this->_tpl_vars['settings']['General']['secure_auth'] != 'Y'): ?>
				<div  id="login_block<?php echo $this->_tpl_vars['block']['snapping_id']; ?>
" class="hidden" title="<?php echo fn_get_lang_var('sign_in', $this->getLanguage()); ?>
"> 
					<div class="login-popup">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "views/auth/login_form.tpl", 'smarty_include_vars' => array('style' => 'popup','form_name' => "login_popup_form".($this->_tpl_vars['block']['snapping_id']),'id' => "popup".($this->_tpl_vars['block']['snapping_id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>