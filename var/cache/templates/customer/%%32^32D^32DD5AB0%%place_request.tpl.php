<?php /* Smarty version 2.6.18, created on 2015-02-27 11:40:01
         compiled from addons/billibuys/views/billibuys/place_request.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fn_url', 'addons/billibuys/views/billibuys/place_request.tpl', 37, false),array('modifier', 'replace', 'addons/billibuys/views/billibuys/place_request.tpl', 68, false),array('modifier', 'escape', 'addons/billibuys/views/billibuys/place_request.tpl', 151, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('bb_request_title','title_description','description','desc_description','desc_description','max_price','maxprice_description','bb_allow_over_max_price','bb_allow_over_max_price','max_price_within','desired_amount','desired_quantity_description','bb_select_expiry_date','expiry_description','category','image','submit','delete','bb_error_validator_price_format','twg_msg_date_invalid','place_request'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'buttons/button.tpl' => 1416450827,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?>

<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript" src="addons/billibuys/js/moment-locales.min.js"></script>
<script type="text/javascript" src="addons/billibuys/js/place_request.js"></script>
<form name="bb_request_form" action="<?php echo fn_url("billibuys.view"); ?>
" method="post" enctype="multipart/form-data" id="bb_request_form">

		<div class="form-field">
				<label for="bb_request_title" class="cm-required cm-trim"><?php echo fn_get_lang_var('bb_request_title', $this->getLanguage()); ?>
</label>

				<input id="bb_request_title" type="text" name="request[title]" size="50" maxlength="50" value="<?php if ($this->_tpl_vars['_REQUEST']['request']['title']): ?><?php echo $this->_tpl_vars['_REQUEST']['request']['title']; ?>
<?php endif; ?>" title="<?php echo fn_get_lang_var('title_description', $this->getLanguage()); ?>
" class="cm-hint input-text" />
	</div>

	<div class="form-field">
		<label for="bb_request_desc" class="cm-required cm-trim"><?php echo fn_get_lang_var('description', $this->getLanguage()); ?>
</label>
		<textarea id="bb_request_desc" name="request[description]" size="500" maxlength="500" value="<?php if ($this->_tpl_vars['_REQUEST']['request']['desc']): ?><?php echo $this->_tpl_vars['_REQUEST']['request']['desc']; ?>
<?php endif; ?>" title="<?php echo fn_get_lang_var('desc_description', $this->getLanguage()); ?>
" class="input-textarea cm-hint"><?php if ($this->_tpl_vars['_REQUEST']['request']['desc']): ?><?php echo $this->_tpl_vars['_REQUEST']['request']['desc']; ?>
<?php else: ?><?php echo fn_get_lang_var('desc_description', $this->getLanguage()); ?>
<?php endif; ?></textarea>
	</div>

	<div class="form-field">
		<label for="bb_max_price" class="cm-trim cm-regexp"><?php echo fn_get_lang_var('max_price', $this->getLanguage()); ?>
</label>
		<input id="bb_max_price" type="text" name="request[max_price]" size="32" maxlength="32" value="<?php if ($this->_tpl_vars['_REQUEST']['request']['max_price']): ?><?php echo $this->_tpl_vars['_REQUEST']['request']['max_price']; ?>
<?php endif; ?>" title="<?php echo fn_get_lang_var('maxprice_description', $this->getLanguage()); ?>
" class="input-text cm-hint" />
		
		<input type="checkbox" id="bb_over_max_price" name="allow_over_max_price" value="N" title="<?php echo fn_get_lang_var('bb_allow_over_max_price', $this->getLanguage()); ?>
" class="checkbox cm-check-items" <?php if (( $this->_tpl_vars['_REQUEST']['request']['allow_over_max_price'] == 1 )): ?> checked="checked"<?php endif; ?>/>
		
		<label for="bb_over_max_price" class="label-inline"><?php echo fn_get_lang_var('bb_allow_over_max_price', $this->getLanguage()); ?>
&nbsp;(<a class="cm-tooltip" title="<?php echo smarty_modifier_replace(fn_get_lang_var('max_price_within', $this->getLanguage()), '[max_price_variation]', $this->_tpl_vars['max_price_variation']); ?>
">?</a>)</label>
	</div>

	<div class="form-field">
		<label for="bb_desired_qty" class="cm-trim cm-required cm-custom (check_positive)"><?php echo fn_get_lang_var('desired_amount', $this->getLanguage()); ?>
</label>
		<input id="bb_desired_qty" type="number" id="bb_desired_qty" name="request[quantity]" size="32" maxlength="32" value="<?php if ($this->_tpl_vars['_REQUEST']['request']['max_price']): ?><?php echo $this->_tpl_vars['_REQUEST']['request']['max_price']; ?>
<?php endif; ?>" title="<?php echo fn_get_lang_var('desired_quantity_description', $this->getLanguage()); ?>
" class="input-text" min="0" maxlength="11" cm-value-integer/>
	</div>

	<div class="form-field">
			<label for="bb_expiry_date" class="cm-trim cm-required cm-regexp"><?php echo fn_get_lang_var('bb_select_expiry_date', $this->getLanguage()); ?>
</label>
		<input type="text" id="bb_expiry_date" class="cm-hint" value="<?php if ($this->_tpl_vars['_REQUEST']['request']['expiry_date']): ?><?php echo $this->_tpl_vars['_REQUEST']['request']['expiry_date']; ?>
<?php endif; ?>" title="<?php echo fn_get_lang_var('expiry_description', $this->getLanguage()); ?>
"/>
		<div class="hidden date-text" id="date-expiry-msg"></div>
		<input type="hidden" name="request[expiry_date]" id="expiry_date_val" value=""/>
	</div>

	<div class="form-field">
		<label for="bb_category" class="cm-trim cm-required"><?php echo fn_get_lang_var('category', $this->getLanguage()); ?>
</label>

		
		<select name="category" id="bb_category">
			<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
				<option value="<?php echo $this->_tpl_vars['cat']['bb_request_category_id']; ?>
"><?php echo $this->_tpl_vars['cat']['category_name']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
	</div>	

	<div class="form-field">
		<label><?php echo fn_get_lang_var('image', $this->getLanguage()); ?>
</label>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "../admin/common_templates/attach_images.tpl", 'smarty_include_vars' => array('image_name' => 'request_main','image_object_type' => 'request','hide_server' => true,'no_thumbnail' => true,'hide_images' => true,'hide_alt' => true,'hide_titles' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>


	<div class="buttons-container">
				<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('but_text' => fn_get_lang_var('submit', $this->getLanguage()), 'but_name' => "dispatch[billibuys.view]", 'but_id' => 'but_submit_request', )); ?>

<?php if ($this->_tpl_vars['but_role'] == 'action'): ?>
	<?php $this->assign('suffix', "-action", false); ?>
	<?php $this->assign('file_prefix', 'action_', false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'act'): ?>
	<?php $this->assign('suffix', "-act", false); ?>
	<?php $this->assign('file_prefix', 'action_', false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'disabled_big'): ?>
	<?php $this->assign('suffix', "-disabled-big", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'big'): ?>
	<?php $this->assign('suffix', "-big", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>
	<?php $this->assign('suffix', "-delete", false); ?>
<?php elseif ($this->_tpl_vars['but_role'] == 'tool'): ?>
	<?php $this->assign('suffix', "-tool", false); ?>
<?php else: ?>
	<?php $this->assign('suffix', "", false); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['but_name'] && $this->_tpl_vars['but_role'] != 'text' && $this->_tpl_vars['but_role'] != 'act' && $this->_tpl_vars['but_role'] != 'delete'): ?> 
	<span <?php if ($this->_tpl_vars['but_id']): ?>id="wrap_<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="button-submit<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-left"><span <?php if ($this->_tpl_vars['but_css']): ?>style="<?php echo $this->_tpl_vars['but_css']; ?>
"<?php endif; ?> class="button-submit<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-right"><input <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_meta']): ?>class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?> type="submit" name="<?php echo $this->_tpl_vars['but_name']; ?>
" <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
"<?php endif; ?> value="<?php echo $this->_tpl_vars['but_text']; ?>
" /></span></span>

<?php elseif ($this->_tpl_vars['but_role'] == 'text' || $this->_tpl_vars['but_role'] == 'act' || $this->_tpl_vars['but_role'] == 'edit' || ( $this->_tpl_vars['but_role'] == 'text' && $this->_tpl_vars['but_name'] )): ?> 

	<a class="<?php if ($this->_tpl_vars['but_meta']): ?><?php echo $this->_tpl_vars['but_meta']; ?>
 <?php endif; ?><?php if ($this->_tpl_vars['but_name']): ?>cm-submit-link <?php endif; ?>text-button<?php echo $this->_tpl_vars['suffix']; ?>
"<?php if ($this->_tpl_vars['but_id']): ?> id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo smarty_modifier_replace(smarty_modifier_replace($this->_tpl_vars['but_name'], "[", ":-"), "]", "-:"); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
 return false;"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php elseif ($this->_tpl_vars['but_role'] == 'delete'): ?>

	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_name']): ?> name="<?php echo smarty_modifier_replace(smarty_modifier_replace($this->_tpl_vars['but_name'], "[", ":-"), "]", "-:"); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_href']): ?>href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
 return false;"<?php endif; ?><?php if ($this->_tpl_vars['but_meta']): ?> class="<?php echo $this->_tpl_vars['but_meta']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_target']): ?> target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?>><span title="<?php echo fn_get_lang_var('delete', $this->getLanguage()); ?>
" class="icon-delete-small"></span></a>

<?php elseif ($this->_tpl_vars['but_role'] == 'icon'): ?> 
	<a <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_href']): ?> href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_onclick']): ?>onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
;<?php if (! $this->_tpl_vars['allow_href']): ?> return false;<?php endif; ?>"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?> rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?> <?php echo $this->_tpl_vars['but_meta']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['but_text']; ?>
</a>

<?php else: ?> 

	<span class="button<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-left" <?php if ($this->_tpl_vars['but_id']): ?>id="<?php echo $this->_tpl_vars['but_id']; ?>
"<?php endif; ?>><span class="button<?php echo $this->_tpl_vars['suffix']; ?>
 button-wrap-right"><a <?php if ($this->_tpl_vars['but_href']): ?>href="<?php echo fn_url($this->_tpl_vars['but_href']); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_onclick']): ?> onclick="<?php echo $this->_tpl_vars['but_onclick']; ?>
 return false;"<?php endif; ?> <?php if ($this->_tpl_vars['but_target']): ?>target="<?php echo $this->_tpl_vars['but_target']; ?>
"<?php endif; ?> class="<?php if ($this->_tpl_vars['but_meta']): ?><?php echo $this->_tpl_vars['but_meta']; ?>
 <?php endif; ?>" <?php if ($this->_tpl_vars['but_rel']): ?> rel="<?php echo $this->_tpl_vars['but_rel']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['but_rev']): ?>rev="<?php echo $this->_tpl_vars['but_rev']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['but_text']; ?>
</a></span></span>

<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
	</div>
</form>

<script type="text/javascript">
//<![CDATA[
<?php echo '
regexp[\'bb_max_price\'] = {
	regexp: /^(([1-9][0-9]{0,2}(,[0-9]{3})*)|[0-9]+)(\\.[0-9]{1,2})?$/'; ?>
, message: "<?php echo smarty_modifier_escape(fn_get_lang_var('bb_error_validator_price_format', $this->getLanguage()), 'javascript'); ?>
"
<?php echo '
};

regexp[\'bb_expiry_date\'] = {
	regexp: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\\d\\d$/'; ?>
, message: "<?php echo smarty_modifier_escape(fn_get_lang_var('twg_msg_date_invalid', $this->getLanguage()), 'javascript'); ?>
"
<?php echo '
};
'; ?>

<?php echo '
function fn_check_positive(id){
	var elm = $(\'#\' + id);

	if(elm.val() < 0){
		return lang.error_validator_integer;
	}else{
		return true;
	}
}
'; ?>

//]]>
</script>

<?php ob_start(); ?><?php echo fn_get_lang_var('place_request', $this->getLanguage()); ?>
<?php $this->_smarty_vars['capture']['mainbox_title'] = ob_get_contents(); ob_end_clean(); ?>