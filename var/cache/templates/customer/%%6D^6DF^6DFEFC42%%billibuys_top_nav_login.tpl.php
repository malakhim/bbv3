<?php /* Smarty version 2.6.18, created on 2014-10-30 02:34:43
         compiled from C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_top_nav_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp5/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_top_nav_login.tpl', 4, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('sign_out','sign_in','register','sign_in'));
?>
	<div class="buttons-container float-right">

		<?php if ($_SESSION['auth']['user_id']): ?>
			<span class="flat-btn"><a href="<?php echo fn_url("auth.logout?redirect_url=".($this->_tpl_vars['return_current_url'])); ?>
" rel="nofollow" class="account"><?php echo fn_get_lang_var('sign_out', $this->getLanguage()); ?>
</a></span>
		<?php else: ?>
			<span class="flat-btn"><a href="<?php if ($this->_tpl_vars['controller'] == 'auth' && $this->_tpl_vars['mode'] == 'login_form'): ?><?php echo fn_url($this->_tpl_vars['config']['current_url']); ?>
<?php else: ?><?php echo fn_url("auth.login_form?return_url=".($this->_tpl_vars['return_current_url'])); ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['settings']['General']['secure_auth'] != 'Y'): ?> rev="login_block<?php echo $this->_tpl_vars['block']['snapping_id']; ?>
" class="cm-dialog-opener cm-dialog-auto-size account"<?php else: ?>rel="nofollow" class="account"<?php endif; ?>><?php echo fn_get_lang_var('sign_in', $this->getLanguage()); ?>
</a></span> <span class="flat-btn"><a href="<?php echo fn_url("profiles.add"); ?>
" rel="nofollow" class="account"><?php echo fn_get_lang_var('register', $this->getLanguage()); ?>
</a></span>
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