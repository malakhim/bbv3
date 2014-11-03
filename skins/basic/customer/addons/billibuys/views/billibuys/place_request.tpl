<script type="text/javascript" src="js/datepicker.js"></script>

<form name="bb_request_form" action="{"billibuys.view"|fn_url}" method="post" enctype="multipart/form-data">

	<div class="form-field">
		<label for="bb_request_title" class="cm-required cm-trim">{$lang.title}</label>
		<input id="bb_request_title" type="text" name="request[title]" size="50" maxlength="50" value="{$smarty.request.request_title}" class="input-text" />
	</div>

	<div class="form-field">
		<label for="bb_request_desc" class="cm-required cm-trim">{$lang.description}</label>
		<textarea id="bb_request_desc" name="request[description]" size="255" maxlength="255" value="{$request.desc}" class="input-textarea-long">{$request.desc}</textarea>
	</div>

	<div class="form-field">
		<label for="bb_max_price" class="cm-trim cm-regexp">{$lang.max_price}</label>
		<input id="bb_max_price" type="text" name="request[max_price]" size="32" maxlength="32" value="{$request.max_price}" class="input-text" />
	</div>

	<div class="form-field">
		<input type="checkbox" id="bb_over_max_price" name="allow_over_max_price" value="N" title="{$lang.bb_allow_over_max_price}" class="checkbox cm-check-items">
		<label for="bb_over_max_price" class="label-inline">{$lang.bb_allow_over_max_price}</label>
	</div>	

	<div class="form-field">
		<label for="bb_expiry_date" class="cm-trim cm-required">{$lang.bb_select_expiry_date}</label>
		<input type="text" name="expiry_date" id="bb_expiry_date"/>
	</div>

	<div class="form-field">
		<label for="bb_category" class="cm-trim cm-required">{$lang.category}</label>
		<select name="category" id="bb_category">
			{foreach from=$categories item='cat'}
			<option value="{$cat.bb_request_category_id}">{$cat.category_name}</option>
			{/foreach}
		</select>
	</div>	

	<div class="form-field">
		<label>{$lang.image}</label>
		{include file="../admin/common_templates/attach_images.tpl" image_name="request_main" image_object_type="request" hide_server=true no_thumbnail=true hide_images=true hide_alt=true hide_titles=true}
	</div>

	<div class="buttons-container">
		{include file="buttons/button.tpl" but_text=$lang.submit but_name="dispatch[billibuys.view]" but_id="but_submit_request" }
	</div>
</form>

<script type="text/javascript">
//<![CDATA[
{literal}
regexp['bb_max_price'] = {
	regexp: "(([1-9][0-9]{0,2}(,[0-9]{3})*)|[0-9]+)(\.[0-9]{1,2})?$"{/literal}, message: "{$lang.bb_error_validator_price_format|escape:'javascript'}"
{literal}
};
{/literal}
//]]>
</script>

{capture name="mainbox_title"}{$lang.place_request}{/capture}
