	<div class="buttons-container float-right">

		{if $smarty.session.auth.user_id}
		{*<span class="flat-btn">*}<a href="{"auth.logout?redirect_url=`$return_current_url`"|fn_url}" rel="nofollow" class="account"><span class="top_menu_item">{$lang.sign_out}</a></span>{*</span>*}
		{else}
			<a href="{if $controller == "auth" && $mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" {if $settings.General.secure_auth != "Y"} rev="login_block{$block.snapping_id}" class="cm-dialog-opener cm-dialog-auto-size account"{else}rel="nofollow" class="account"{/if}><span class="top_menu_item">{$lang.sign_in}</span></a> <a href="{"profiles.add"|fn_url}" rel="nofollow" class="account"><span class="top_menu_item">{$lang.register}</span></a>
			{if $settings.General.secure_auth != "Y"}
				<div  id="login_block{$block.snapping_id}" class="hidden" title="{$lang.sign_in}"> 
					<div class="login-popup">
						{include file="views/auth/login_form.tpl" style="popup" form_name="login_popup_form`$block.snapping_id`" id="popup`$block.snapping_id`"}
					</div>
				</div>
			{/if}
		{/if}
	</div>