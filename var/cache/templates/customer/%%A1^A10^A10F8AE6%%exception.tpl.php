<?php /* Smarty version 2.6.18, created on 2015-01-16 17:54:14
         compiled from exception.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'exception.tpl', 16, false),array('modifier', 'html_entity_decode', 'exception.tpl', 40, false),array('modifier', 'default', 'exception.tpl', 40, false),array('modifier', 'fn_seo_is_indexed_page', 'exception.tpl', 42, false),array('modifier', 'sizeof', 'exception.tpl', 46, false),array('modifier', 'fn_link_attach', 'exception.tpl', 48, false),array('modifier', 'fn_url', 'exception.tpl', 48, false),array('modifier', 'defined', 'exception.tpl', 75, false),array('modifier', 'count', 'exception.tpl', 101, false),array('modifier', 'escape', 'exception.tpl', 138, false),array('modifier', 'fn_generate_security_hash', 'exception.tpl', 210, false),array('modifier', 'strpos', 'exception.tpl', 223, false),array('modifier', 'fn_query_remove', 'exception.tpl', 224, false),array('block', 'hook', 'exception.tpl', 34, false),array('function', 'join_css', 'exception.tpl', 108, false),array('function', 'script', 'exception.tpl', 127, false),array('function', 'render_location', 'exception.tpl', 349, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','in_stock','items','text_required_group_product','notice','warning','loading','none','text_are_you_sure_to_proceed','text_invalid_url','text_cart_changed','error_validator_email','error_validator_confirm_email','error_validator_phone','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','view_cart','checkout','product_added_to_cart','products_added_to_cart','product_added_to_wl','product_added_to_cl','close','error','error_ajax','text_changes_not_saved','text_data_changed','twg_visit_our_mobile_store','twg_app_for_android','twg_app_for_iphone','twg_app_for_ipad','bundled_products_fill_the_mandatory_fields','customization_mode','translate_mode','switch_to_translation_mode','switch_to_customization_mode'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'common_templates/design_mode_panel.tpl' => 1406444269,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo smarty_modifier_lower(@CART_LANGUAGE); ?>
">
<head>
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>

<?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'addons/seo/hooks/index/meta.post.tpl' => 1414657791,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php $this->_tag_stack[] = array('hook', array('name' => "index:meta")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['display_base_href']): ?>
<base href="<?php echo $this->_tpl_vars['config']['current_location']; ?>
/" />
<?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo @CHARSET; ?>
" />
<meta http-equiv="Content-Language" content="<?php echo smarty_modifier_lower(@CART_LANGUAGE); ?>
" />
<meta name="description" content="<?php echo smarty_modifier_default(html_entity_decode($this->_tpl_vars['meta_description'], @ENT_COMPAT, "UTF-8"), @$this->_tpl_vars['location_data']['meta_description']); ?>
" />
<meta name="keywords" content="<?php echo smarty_modifier_default(@$this->_tpl_vars['meta_keywords'], @$this->_tpl_vars['location_data']['meta_keywords']); ?>
" />
<?php if ($this->_tpl_vars['addons']['seo']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php if (! fn_seo_is_indexed_page($this->_tpl_vars['_REQUEST'])): ?>
<meta name="robots" content="noindex<?php if (@HTTPS === true): ?>,nofollow<?php endif; ?>" />
<?php endif; ?>

<?php if (sizeof($this->_tpl_vars['languages']) > 1): ?>
<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['language']):
?>
<link title="<?php echo $this->_tpl_vars['language']['name']; ?>
" dir="rtl" type="text/html" rel="alternate" charset="<?php echo @CHARSET; ?>
" hreflang="<?php echo smarty_modifier_lower($this->_tpl_vars['language']['lang_code']); ?>
" href="<?php echo fn_url(fn_link_attach($this->_tpl_vars['config']['current_url'], "sl=".($this->_tpl_vars['language']['lang_code']))); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
<link href="<?php echo $this->_tpl_vars['images_dir']; ?>
/icons/favicon.ico" rel="shortcut icon" />
<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('include_dropdown' => true, )); ?><?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'addons/billibuys/hooks/index/styles.post.tpl' => 1421124078,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?>

<?php ob_start(); ?>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/css/960/reset.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/css/ui/jqueryui.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/css/960/960.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/styles.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/print.css" rel="stylesheet" media="print" type="text/css" />
<?php if (defined('TRANSLATION_MODE') || defined('CUSTOMIZATION_MODE')): ?>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/design_mode.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if ($this->_tpl_vars['include_dropdown']): ?>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/dropdown.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<!--[if lte IE 7]>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/styles_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

<?php $this->_tag_stack[] = array('hook', array('name' => "index:styles")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['addons']['twigmo']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/twigmo/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['bundled_products']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/bundled_products/styles.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/bundled_products/styles_ie.css" rel="stylesheet" type="text/css" />
<![endif]--><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['tags']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/tags/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['product_configurator']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/product_configurator/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['news_and_emails']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/news_and_emails/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['gift_certificates']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/gift_certificates/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['rma']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/rma/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['bestsellers']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/bestsellers/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['form_builder']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/form_builder/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['polls']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/polls/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['banners']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/banners/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['discussion']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/discussion/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['wishlist']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/wishlist/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['recurring_billing']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/recurring_billing/styles.css" rel="stylesheet" type="text/css" /><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['billibuys']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1'/>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://code.jquery.com/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['http_location']; ?>
/lib/js/jquery/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Titillium+Web:600' rel='stylesheet' type='text/css' />


<link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/billibuys/styles.css" rel="stylesheet" type="text/css" />
<?php echo '
<script src="addons/billibuys/js/billibuys.js" type="text/javascript"></script>
'; ?>


<?php if (count($this->_tpl_vars['_REQUEST']) == 1): ?>
	<!-- <link href="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/css/960/960_old.css" rel="stylesheet" type="text/css" /> -->
<?php endif; ?>

<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['styles'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo smarty_function_join_css(array('content' => $this->_smarty_vars['capture']['styles']), $this);?>


<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
<?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'addons/recurring_billing/hooks/index/scripts.post.tpl' => 1406444269,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?>

<?php echo smarty_function_script(array('src' => "lib/js/jquery/jquery.min.js"), $this);?>

<?php echo smarty_function_script(array('src' => "lib/js/jqueryui/jquery-ui.custom.min.js"), $this);?>

<?php echo smarty_function_script(array('src' => "lib/js/tools/tooltip.min.js"), $this);?>

<?php echo smarty_function_script(array('src' => "lib/js/appear/jquery.appear-1.1.1.js"), $this);?>


<?php echo smarty_function_script(array('src' => "js/editors/".($this->_tpl_vars['settings']['Appearance']['default_wysiwyg_editor']).".editor.js"), $this);?>


<?php echo smarty_function_script(array('src' => "js/core.js"), $this);?>

<?php echo smarty_function_script(array('src' => "js/ajax.js"), $this);?>

<script type="text/javascript">
//<![CDATA[
var index_script = '<?php echo smarty_modifier_escape($this->_tpl_vars['index_script'], 'javascript'); ?>
';
var current_path = '<?php echo smarty_modifier_escape($this->_tpl_vars['config']['current_path'], 'javascript'); ?>
';
var changes_warning = '<?php echo smarty_modifier_escape($this->_tpl_vars['settings']['Appearance']['changes_warning'], 'javascript'); ?>
';

var lang = <?php echo $this->_tpl_vars['ldelim']; ?>

	cannot_buy: '<?php echo smarty_modifier_escape(fn_get_lang_var('cannot_buy', $this->getLanguage()), 'javascript'); ?>
',
	no_products_selected: '<?php echo smarty_modifier_escape(fn_get_lang_var('no_products_selected', $this->getLanguage()), 'javascript'); ?>
',
	error_no_items_selected: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_no_items_selected', $this->getLanguage()), 'javascript'); ?>
',
	delete_confirmation: '<?php echo smarty_modifier_escape(fn_get_lang_var('delete_confirmation', $this->getLanguage()), 'javascript'); ?>
',
	text_out_of_stock: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_out_of_stock', $this->getLanguage()), 'javascript'); ?>
',
	in_stock: '<?php echo smarty_modifier_escape(fn_get_lang_var('in_stock', $this->getLanguage()), 'javascript'); ?>
',
	items: '<?php echo smarty_modifier_escape(fn_get_lang_var('items', $this->getLanguage()), 'javascript'); ?>
',
	text_required_group_product: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_required_group_product', $this->getLanguage()), 'javascript'); ?>
',
	notice: '<?php echo smarty_modifier_escape(fn_get_lang_var('notice', $this->getLanguage()), 'javascript'); ?>
',
	warning: '<?php echo smarty_modifier_escape(fn_get_lang_var('warning', $this->getLanguage()), 'javascript'); ?>
',
	loading: '<?php echo smarty_modifier_escape(fn_get_lang_var('loading', $this->getLanguage()), 'javascript'); ?>
',
	none: '<?php echo smarty_modifier_escape(fn_get_lang_var('none', $this->getLanguage()), 'javascript'); ?>
',
	text_are_you_sure_to_proceed: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_are_you_sure_to_proceed', $this->getLanguage()), 'javascript'); ?>
',
	text_invalid_url: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_invalid_url', $this->getLanguage()), 'javascript'); ?>
',
	text_cart_changed: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_cart_changed', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_email: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_email', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_confirm_email: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_confirm_email', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_phone: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_phone', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_integer: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_integer', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_multiple: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_multiple', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_password: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_password', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_required: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_required', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_zipcode: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_zipcode', $this->getLanguage()), 'javascript'); ?>
',
	error_validator_message: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_validator_message', $this->getLanguage()), 'javascript'); ?>
',
	text_page_loading: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_page_loading', $this->getLanguage()), 'javascript'); ?>
',
	view_cart: '<?php echo smarty_modifier_escape(fn_get_lang_var('view_cart', $this->getLanguage()), 'javascript'); ?>
',
	checkout: '<?php echo smarty_modifier_escape(fn_get_lang_var('checkout', $this->getLanguage()), 'javascript'); ?>
',
	product_added_to_cart: '<?php echo smarty_modifier_escape(fn_get_lang_var('product_added_to_cart', $this->getLanguage()), 'javascript'); ?>
',
	products_added_to_cart: '<?php echo smarty_modifier_escape(fn_get_lang_var('products_added_to_cart', $this->getLanguage()), 'javascript'); ?>
',
	product_added_to_wl: '<?php echo smarty_modifier_escape(fn_get_lang_var('product_added_to_wl', $this->getLanguage()), 'javascript'); ?>
',
	product_added_to_cl: '<?php echo smarty_modifier_escape(fn_get_lang_var('product_added_to_cl', $this->getLanguage()), 'javascript'); ?>
',
	close: '<?php echo smarty_modifier_escape(fn_get_lang_var('close', $this->getLanguage()), 'javascript'); ?>
',
	error: '<?php echo smarty_modifier_escape(fn_get_lang_var('error', $this->getLanguage()), 'javascript'); ?>
',
	error_ajax: '<?php echo smarty_modifier_escape(fn_get_lang_var('error_ajax', $this->getLanguage()), 'javascript'); ?>
',
	text_changes_not_saved: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_changes_not_saved', $this->getLanguage()), 'javascript'); ?>
',
	text_data_changed: '<?php echo smarty_modifier_escape(fn_get_lang_var('text_data_changed', $this->getLanguage()), 'javascript'); ?>
'
<?php echo $this->_tpl_vars['rdelim']; ?>


var currencies = <?php echo $this->_tpl_vars['ldelim']; ?>

	'primary': <?php echo $this->_tpl_vars['ldelim']; ?>

		'decimals_separator': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['primary_currency']]['decimals_separator'], 'javascript'); ?>
',
		'thousands_separator': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['primary_currency']]['thousands_separator'], 'javascript'); ?>
',
		'decimals': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['primary_currency']]['decimals'], 'javascript'); ?>
',
		'coefficient': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['primary_currency']]['coefficient'], 'javascript'); ?>
'
	<?php echo $this->_tpl_vars['rdelim']; ?>
,
	'secondary': <?php echo $this->_tpl_vars['ldelim']; ?>

		'decimals_separator': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']]['decimals_separator'], 'javascript'); ?>
',
		'thousands_separator': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']]['thousands_separator'], 'javascript'); ?>
',
		'decimals': '<?php echo smarty_modifier_escape($this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']]['decimals'], 'javascript'); ?>
',
		'coefficient': '<?php echo $this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']]['coefficient']; ?>
'
	<?php echo $this->_tpl_vars['rdelim']; ?>

<?php echo $this->_tpl_vars['rdelim']; ?>
;

var default_editor = '<?php echo $this->_tpl_vars['settings']['Appearance']['default_wysiwyg_editor']; ?>
';
var default_previewer = '<?php echo $this->_tpl_vars['settings']['Appearance']['default_image_previewer']; ?>
';

var cart_language = '<?php echo @CART_LANGUAGE; ?>
';
var default_language = '<?php echo @DEFAULT_LANGUAGE; ?>
';
var images_dir = '<?php echo $this->_tpl_vars['images_dir']; ?>
';
var skin_name = '<?php echo $this->_tpl_vars['settings']['skin_name_customer']; ?>
';
var notice_displaying_time = <?php if ($this->_tpl_vars['settings']['Appearance']['notice_displaying_time']): ?><?php echo $this->_tpl_vars['settings']['Appearance']['notice_displaying_time']; ?>
<?php else: ?>0<?php endif; ?>;
var cart_prices_w_taxes = <?php if (( $this->_tpl_vars['settings']['Appearance']['cart_prices_w_taxes'] == 'Y' && defined('CHECKOUT') ) || ( $this->_tpl_vars['settings']['Appearance']['show_prices_taxed_clean'] == 'Y' && ! defined('CHECKOUT') )): ?>true<?php else: ?>false<?php endif; ?>;
var translate_mode = <?php if (defined('TRANSLATION_MODE')): ?>true<?php else: ?>false<?php endif; ?>;
var regexp = new Array();

<?php if ($this->_tpl_vars['config']['tweaks']['anti_csrf']): ?>
	// CSRF form protection key
	var security_hash = '<?php echo fn_generate_security_hash(""); ?>
';
<?php endif; ?>


$(function()<?php echo $this->_tpl_vars['ldelim']; ?>

	$.runCart('C');
<?php echo $this->_tpl_vars['rdelim']; ?>
);
//]]>
</script>
<?php $this->_tag_stack[] = array('hook', array('name' => "index:scripts")); $_block_repeat=true;smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['addons']['twigmo']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php $this->assign('but_role', 'general', false); ?>

<?php ob_start(); ?>
	<?php if (strpos($this->_tpl_vars['config']['current_url'], "?")): ?>
		<?php $this->assign('but_href', fn_url(fn_query_remove(($this->_tpl_vars['config']['current_url'])."&auto", 'desktop')), false); ?>
	<?php else: ?>
		<?php $this->assign('but_href', fn_url(fn_query_remove(($this->_tpl_vars['config']['current_url'])."?auto", 'desktop')), false); ?>
	<?php endif; ?>
	<a href="<?php echo $this->_tpl_vars['but_href']; ?>
"><?php echo fn_get_lang_var('twg_visit_our_mobile_store', $this->getLanguage()); ?>
</a>
<?php $this->_smarty_vars['capture']['mobile_store_link'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
	<?php $this->assign('but_href', smarty_modifier_default(@$this->_tpl_vars['tw_settings']['url_on_googleplay'], "https://play.google.com/store"), false); ?>
	<a href="<?php echo $this->_tpl_vars['but_href']; ?>
"><?php echo fn_get_lang_var('twg_app_for_android', $this->getLanguage()); ?>
</a>
<?php $this->_smarty_vars['capture']['android'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
	<?php $this->assign('but_href', smarty_modifier_default(@$this->_tpl_vars['tw_settings']['url_on_appstore'], "https://itunes.apple.com/en/genre/ios/id36?mt=8"), false); ?>
	<?php if ($_SESSION['device'] == 'iphone'): ?>
		<?php $this->assign('but_text', fn_get_lang_var('twg_app_for_iphone', $this->getLanguage()), false); ?>
	<?php elseif ($_SESSION['device'] == 'ipad'): ?>
	    <?php $this->assign('but_text', fn_get_lang_var('twg_app_for_ipad', $this->getLanguage()), false); ?>
	<?php endif; ?>
	<a href="<?php echo $this->_tpl_vars['but_href']; ?>
"><?php echo $this->_tpl_vars['but_text']; ?>
</a>
<?php $this->_smarty_vars['capture']['ios'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
<div class="mobile-avail-notice<?php if ($_SESSION['twigmo_mobile_avail_notice_off']): ?> hidden<?php endif; ?>">
	<div class="buttons-container">
		<?php echo $this->_smarty_vars['capture']['mobile_store_link']; ?>

		<?php if ($_SESSION['device'] == 'android' && $this->_tpl_vars['tw_settings']['url_on_googleplay']): ?>
			<?php echo $this->_smarty_vars['capture']['android']; ?>

		<?php elseif (( $_SESSION['device'] == 'iphone' || $_SESSION['device'] == 'ipad' ) && $this->_tpl_vars['tw_settings']['url_on_appstore']): ?>
			<?php echo $this->_smarty_vars['capture']['ios']; ?>

		<?php endif; ?>
		<img id="close_notification_mobile_avail_notice" class="cm-notification-close hand" src="<?php echo $this->_tpl_vars['config']['skin_path']; ?>
/addons/twigmo/images/icons/icon_close.png" border="0" alt="Close" title="Close" />
	</div>
</div>
<?php $this->_smarty_vars['capture']['notice_block'] = ob_get_contents(); ob_end_clean(); ?>

<?php if (( $_SESSION['twg_user_agent'] && $_SESSION['twg_user_agent'] == 'tablet' && $this->_tpl_vars['tw_settings']['use_mobile_frontend'] == 'tablet' ) || ( $_SESSION['twg_user_agent'] && $_SESSION['twg_user_agent'] == 'phone' && $this->_tpl_vars['tw_settings']['use_mobile_frontend'] == 'phone' ) || ( $_SESSION['twg_user_agent'] && ( $_SESSION['twg_user_agent'] == 'tablet' || $_SESSION['twg_user_agent'] == 'phone' ) && $this->_tpl_vars['tw_settings']['use_mobile_frontend'] == 'both_tablet_and_phone' )): ?>
	<?php $this->assign('show_avail_notice', 'Y', false); ?>
<?php else: ?>
	<?php $this->assign('show_avail_notice', 'N', false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['tw_settings']['use_mobile_frontend'] != 'never' && $this->_tpl_vars['show_avail_notice'] == 'Y'): ?>
	<?php if ($_SESSION['device'] == 'iphone' || $_SESSION['device'] == 'ipad' || $_SESSION['device'] == 'android' || $_SESSION['device'] == 'winphone'): ?>
		<?php echo $this->_smarty_vars['capture']['notice_block']; ?>

	<?php endif; ?>

	<script>
	//<![CDATA[
	<?php echo '
	$(function () {
		$(\'.mobile-avail-notice\').insertBefore(\'a[name="top"]\');
		$(\'#close_notification_mobile_avail_notice\').live(\'click\', function () {
			$(this).parents(\'div.mobile-avail-notice\').hide();
			$.ajax({
				url: \''; ?>
<?php echo fn_url("twigmo.post&close_notice=1", 'C', 'rel', "&"); ?>
<?php echo '\',
				dataType: \'json\'
			});
		});
		if(window.devicePixelRatio){
			if(window.devicePixelRatio > 1){
				changeSizes();
			}
		}
		function changeSizes(){
			var scale = 1,
					buttonsHeight = '; ?>
<?php if ($_SESSION['device'] == 'ipad'): ?>54<?php else: ?>80<?php endif; ?><?php echo ',
					noticeHeight = '; ?>
<?php if ($_SESSION['device'] == 'ipad'): ?>80<?php else: ?>120<?php endif; ?><?php echo ',
					fontSize = '; ?>
<?php if ($_SESSION['device'] == 'ipad'): ?>30<?php else: ?>34<?php endif; ?><?php echo ',
					fontTop = '; ?>
<?php if ($_SESSION['device'] == 'ipad'): ?>15<?php else: ?>18<?php endif; ?><?php echo ',
					buttonsTop = (noticeHeight - buttonsHeight) / 2 || 13,
					crossTopMargin = (noticeHeight - $(\'#close_notification_mobile_avail_notice\').height()) / 2 - buttonsTop - 2,
					crossWidth = 30,
					textPadding = '; ?>
<?php if ($_SESSION['device'] == 'ipad'): ?>'0 1% 0 1%'<?php else: ?>'0 2% 0 2%'<?php endif; ?><?php echo ';

			if (typeof orientation !== \'undefined\' && Math.abs(orientation) === 90) {
					scale = 0.7;
					textPadding = \'0 1% 0 1%\';
			}
			$(\'.mobile-avail-notice a\').css({\'height\': buttonsHeight * scale + \'px\', \'line-height\': buttonsHeight * scale + \'px\', \'font-size\': fontSize * scale + \'px\', \'padding\': textPadding});
			$(\'.mobile-avail-notice img\').css({\'width\': crossWidth * scale + \'px !important\', \'height\': crossWidth * scale + \'px !important\', \'margin-top\': -1 * (crossWidth * scale/2) + \'px\'});

		}
		window.onorientationchange = function () {
				changeSizes();
		};
		changeSizes();
	});
	'; ?>

	//]]>
	</script>
<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['bundled_products']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php echo smarty_function_script(array('src' => "addons/bundled_products/js/func.js"), $this);?>


<script type="text/javascript">
//<![CDATA[
	lang['bundled_products_fill_the_mandatory_fields'] = '<?php echo fn_get_lang_var('bundled_products_fill_the_mandatory_fields', $this->getLanguage()); ?>
';
//]]>
</script><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['news_and_emails']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php echo smarty_function_script(array('src' => "addons/news_and_emails/js/func.js"), $this);?>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['reward_points']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php echo smarty_function_script(array('src' => "addons/reward_points/js/func.js"), $this);?>

<script type="text/javascript">
//<![CDATA[
var price_in_points_with_discounts = '<?php echo $this->_tpl_vars['addons']['reward_points']['price_in_points_with_discounts']; ?>
';
var points_with_discounts = '<?php echo $this->_tpl_vars['addons']['reward_points']['points_with_discounts']; ?>
';

// Extend core function
fn_register_hooks('reward_points', ['check_exceptions']);

//]]>
</script><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['banners']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php echo smarty_function_script(array('src' => "addons/banners/js/slider.js"), $this);?>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php if ($this->_tpl_vars['addons']['recurring_billing']['status'] == 'A'): ?><?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php if (@CONTROLLER != 'checkout'): ?>
<?php echo smarty_function_script(array('src' => "addons/recurring_billing/js/func.js"), $this);?>

<script type="text/javascript">

// Extend core function
fn_register_hooks('recurring_billing', ['check_exceptions']);

</script>
<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
</head>

<body>
<div class="helper-container">
	<a name="top"></a>

	<?php echo smarty_function_render_location(array('dispatch' => 'no_page'), $this);?>


	<?php if (defined('TRANSLATION_MODE')): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/translate_box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if (defined('CUSTOMIZATION_MODE')): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "common_templates/template_editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if (defined('CUSTOMIZATION_MODE') || defined('TRANSLATION_MODE')): ?>
		<?php $__parent_tpl_vars = $this->_tpl_vars; ?><div id="design_mode_panel" class="popup <?php if (defined('CUSTOMIZATION_MODE')): ?>customization<?php else: ?>translate<?php endif; ?>-mode" style="<?php if ($_COOKIE['design_mode_panel_offset']): ?><?php echo $_COOKIE['design_mode_panel_offset']; ?>
<?php endif; ?>">
	<div>
		<h1><?php if (defined('CUSTOMIZATION_MODE')): ?><?php echo fn_get_lang_var('customization_mode', $this->getLanguage()); ?>
<?php else: ?><?php echo fn_get_lang_var('translate_mode', $this->getLanguage()); ?>
<?php endif; ?></h1>
	</div>
	<div>
		<form action="<?php echo fn_url(""); ?>
" method="post" name="design_mode_panel_form">
			<input type="hidden" name="design_mode" value="<?php if (defined('CUSTOMIZATION_MODE')): ?>translation_mode<?php else: ?>customization_mode<?php endif; ?>" />
			<input type="hidden" name="current_url" value="<?php echo $this->_tpl_vars['config']['current_url']; ?>
" />
			<input type="submit" name="dispatch[design_mode.update_design_mode]" value="" class="hidden" />
			<?php if (defined('CUSTOMIZATION_MODE')): ?>
				<?php $this->assign('mode_val', fn_get_lang_var('switch_to_translation_mode', $this->getLanguage()), false); ?>
			<?php else: ?>
				<?php $this->assign('mode_val', fn_get_lang_var('switch_to_customization_mode', $this->getLanguage()), false); ?>
			<?php endif; ?>
			<p class="right"><a class="cm-submit" name="dispatch[design_mode.update_design_mode]" rev="design_mode_panel_form"><?php echo $this->_tpl_vars['mode_val']; ?>
</a></p>
		</form>
	</div>
</div><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
	<?php endif; ?>
</div>
</body>

</html>