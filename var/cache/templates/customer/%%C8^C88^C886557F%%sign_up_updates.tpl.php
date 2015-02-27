<?php /* Smarty version 2.6.18, created on 2015-02-27 12:09:12
         compiled from C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/sign_up_updates.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/sign_up_updates.tpl', 4, false),)), $this); ?>
<?php  ob_start();  ?><div id="subscription-heading">Subscribe to emails on our latest features.</div>
<div id="subscription-body">Receive updates on what we're working on.<br/>Unsubscribe at any time.</div>
<div id="subscription-fields">
	<form method="POST" action="<?php echo fn_url("billibuys.subscribe"); ?>
">
		<input class="input-text cm-hint" type="text" title="Full name" name="subscribe[name]" /><br/><br/>
		<input class="input-text cm-hint cm-email" type="text" title="Email address" name="subscribe[email]" /><br/><br/>
		<div id="subscription-submit">Get Updates</div>
	</form>
</div><?php  ob_end_flush();  ?>