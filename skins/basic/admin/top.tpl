{if $config.current_url|strpos:$config.admin_index !== false}
	<div class="header-wrap">
	<div id="header">
		<div id="logo">
			{assign var="name" value=$settings.Company.company_name|truncate:40:"...":true}
			

			
			<a href="{$index_script|fn_url}">{$name}</a><a href="{$config.http_location|fn_url|escape}" class="view-storefront-icon" target="_blank" title="{$lang.view_storefront}">&nbsp;</a>
			

		</div>

		<div id="top_quick_links">
			{if $auth.user_id}
			<div class="nowrap">
				{include file="top_quick_links.tpl"}
			</div>
			{/if}
		</div>

		<div id="top_menu">
		<ul id="alt_menu">
		{if $auth.user_id && $navigation.static}
		{foreach from=$navigation.static key=first_level_title item=m name="first_level_top"}
		{if $first_level_title == "administration" || $first_level_title == "design" || $first_level_title == "settings"}
			<li{if $first_level_title == $navigation.selected_tab} class="active"{/if}>
			<a class="drop {$first_level_title}">{$lang.$first_level_title}</a>
				<div class="dropdown-column">
				<div class="dropdown-column-col">
					<ul>
					{foreach from=$m key=second_level_title item="second_level" name="sec_level_top"}
						<li class="{if $second_level.subitems}sub-level {/if}{if $second_level_title == $navigation.subsection}active{/if}"><a href="{$second_level.href|fn_url}">{if $second_level.title}{$second_level.title}{else}{$lang[$second_level_title]}{/if}</a>
						{if $second_level.subitems}
							<div class="dropdown-second-level{if "COMPANY_ID"|defined} drop-left{/if}">
							<ul>
							{foreach from=$second_level.subitems key=subitem_title item=sm}
								<li{if $subitem_title == $navigation.subitem} class="active"{/if}><a href="{$sm.href}">{$lang[$subitem_title]}</a></li>
							{/foreach}
							</ul>
							</div>
						{/if}
					</li>
					{/foreach}
					</ul>
					</div>
				</div>
			</li>
		{/if}
		{/foreach}
		{/if}

		</ul>
		</div>

	{if $smarty.const.PRODUCT_TYPE == "MULTIVENDOR" || $smarty.const.PRODUCT_TYPE == "ULTIMATE"}
		<div class="float-left">
		{if $s_companies|sizeof > 1}
			{if "TRANSLATION_MODE"|defined}
				{assign var="company_name" value=$s_companies.$s_company.company}
			{else}
				{assign var="company_name" value=$s_companies.$s_company.company|substr:0:40}
				{if $s_companies.$s_company.company|fn_strlen > 40}
					{assign var="company_name" value="`$company_name`..."}
				{/if}
			{/if}
			{include file="common_templates/ajax_select_object.tpl" data_url="companies.get_companies_list?show_all=Y&action=href" text=$company_name id="top_company_id"}
		{else}
				{*{$lang.vendor}: <a href="{"companies.update?company_id=`$s_company`"|fn_url}">{$s_companies.$s_company.company}</a>*}
		{/if}
		</div>
	{/if}
		<ul id="menu">
			<li class="dashboard {if !$navigation.selected_tab}dashboard-active{/if}">
				<a href="{$index_script|fn_url}" title="{$lang.dashboard}">&nbsp;</a>
			</li>

			{if $auth.user_id && $navigation.static}
			{foreach from=$navigation.static key=first_level_title item=m name="first_level"}
			{if $first_level_title != "administration" && $first_level_title != "design" && $first_level_title != "settings"}
			<li{if $first_level_title == $navigation.selected_tab} class="active"{/if}>
				<a class="drop">{$lang.$first_level_title}</a>
				<div class="dropdown-column">
					<div class="dropdown-column-col">
					<ul>
					{foreach from=$m key=second_level_title item="second_level" name="sec_level"}
						<li class="blank {$second_level_title}{if $second_level.subitems} sub-level{/if}{if $second_level_title == $navigation.subsection && $first_level_title == $navigation.selected_tab} active{/if}"><a href="{$second_level.href|fn_url}"><span>{$lang.$second_level_title}</span>
							{if $lang[$second_level.description] != "_`$second_level_title`_menu_description"}{if $settings.Appearance.show_menu_descriptions == "Y"}<span class="hint">{$lang[$second_level.description]}</span>{/if}{/if}</a>
							{if $second_level.subitems}
								<div class="dropdown-second-level">
								<ul>
								{foreach from=$second_level.subitems key=subitem_title item=sm}
									<li{if $subitem_title == $navigation.subitem} class="active"{/if}><a href="{$sm.href}">{$lang[$subitem_title]}</a></li>
								{/foreach}
								</ul>
								</div>
							{/if}
						</li>
					{/foreach}
					</ul>
					</div>
				</div>
			</li>
			{/if}
			{/foreach}
			{/if}
			<li class="search">
				{include file="common_templates/quick_search.tpl"}
			</li>
		</ul>
	<!--header--></div></div>

	{literal}
	<script type="text/javascript">
	//<![CDATA[
	$(function() {
		if ($.isMobile()) {
			$("#menu li a").click(function(){
			});
			$("#top_menu li a").click(function(){
			});
			$('#header').css('padding-top', '15px !important'); 
		}
	});
	//]]>
	</script>
	{/literal}
{else}
	<div class="helper-container">
		<div id="ci_top_wrapper" class="header clearfix header-solid">
			<div class="container_16 ">	
			<div class="grid_16 header-top-bar">
			 
				<div class="grid_8 alpha ">
					&nbsp;
			</div>
		<div class="grid_8 omega ">
					&nbsp;
			</div>
		<div class="grid_10 alpha ">
			 
				<div class="	float-left">
				{*TODO: Include the customer-side version of this as a smarty include*}

				{*assign var=path value=$config.http_location}
				{include file="$customer_skin_path/customer/addons/billibuys/blocks/static_templates/logo.tpl"*}
				<div class="logo-container">
					<a href="{""|fn_url}" style="background: url('/skins/basic/customer/images/Logo_sml_8.png') no-repeat; width:{$manifest.Customer_logo.width}px; height:{$manifest.Customer_logo.height}px;" title="{$manifest.Customer_logo.alt}" class="logo"></a>
				</div>
			</div><div class="	float-left">
				<ul id="second-top-nav-elements" class="row">
					<a href="{'billibuys.view'|fn_url}"><li class="top_menu_item">{$lang.bb_browse}</li></a>
					<li class="top_menu_item">{$lang.buy}&nbsp;&nbsp;<i class="fa-angle-down fa"></i>
						<div class="submenu-wrapper"></div>
						<ul class="top-nav-submenu header-solid">
							<div class="top-nav-triangle"></div>
							{*Placeholder for my_requests for now*}
							{*<a href="{"billibuys.view_requests&user_id=`$smarty.session.auth.user_id`"|fn_url}"><li class="submenu_item">{$lang.my_requests}</li></a>*}
							<a href="{'billibuys.place_request'|fn_url}"><li class="submenu_item">{$lang.place_request}</li></a>
							<a href="{"orders.search"|fn_url}"><li class="submenu_item">{$lang.view_orders}</li></a>
						</ul>
					</li>
					<li class="top_menu_item">{$lang.sell}&nbsp;&nbsp;<i class="fa-angle-down fa"></i>
						<div class="submenu-wrapper"></div>
						<ul class="top-nav-submenu header-solid">
							<div class="top-nav-triangle"></div>
							{*Placeholder for my_offers for now*}
							{*<a href="{"billibuys.view_offers&user_id=`$smarty.session.auth.user_id`"|fn_url}"><li class="submenu_item">{$lang.my_offers}</li></a>*}
							<a href="{'/vendor.php?dispatch=products.manage'|fn_url}"><li class="submenu_item">{$lang.block_products}</li></a>
							<a href="{'/vendor.php?dispatch=products.add'|fn_url}"><li class="submenu_item">{$lang.add_new_product}</li></a>
							<a href="{'/vendor.php?dispatch=orders.manage'|fn_url}"><li class="submenu_item">{$lang.sales}</li></a>
						</ul>
					</li>
					<form method='get' action="{"billibuys.view"|fn_url}" id="top-search-form" name="top_search_bar">
				    	  <input type="text" class="form-control input-text input-search" name="search" id="input-search" value="{if $smarty.request.search}{$smarty.request.search}{else}Enter an item you want to sell{/if}">
				    	  <i class="fa fa-search" id="search-submit"></i>
					</form>
				</ul>
			</div>
			</div>
		<div class="grid_6 omega top-links-right">
			 
				<div class=" top-nav-login float-right">
					<div class="buttons-container float-right">

						{if $smarty.session.auth.user_id > 0}
							{if $smarty.session.cart.products}
								<a href="{"checkout.cart"|fn_url}" rel="nofollow" class="account"><span class="top_menu_item">{$lang.view_cart}&nbsp;({$smarty.session.cart.products|@count})</a></span>
							{/if}
							<a href="{"profiles.update"|fn_url}" rel="nofollow" class="account"><span class="top_menu_item">{$lang.block_my_account|capitalize}</a></span>
							{*<a href="{"auth.logout?redirect_url=`$config.current_url`"|fn_url}" rel="nofollow" class="account">*}<a href="{"auth.logout"|fn_url}" rel="nofollow" class="account"><span class="top_menu_item">{$lang.sign_out|capitalize}</a></span>
						{else}
							<a href="{if $controller == "auth" && $mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" {if $settings.General.secure_auth != "Y"} rev="login_block{$block.snapping_id}" class="cm-dialog-opener cm-dialog-auto-size account"{else}rel="nofollow" class="account"{/if}><span class="top_menu_item">{$lang.sign_in|capitalize}</span></a> <a href="{"profiles.add"|fn_url}" rel="nofollow" class="account"><span class="top_menu_item">{$lang.register}</span></a>
							{if $settings.General.secure_auth != "Y"}
								<div  id="login_block{$block.snapping_id}" class="hidden" title="{$lang.sign_in}"> 
									<div class="login-popup">
										{include file="views/auth/login_form.tpl" style="popup" form_name="login_popup_form`$block.snapping_id`" id="popup`$block.snapping_id`"}
									</div>
								</div>
							{/if}
						{/if}
					</div>


			</div>
			</div>
			<div class="clear"></div>

			</div>
			<div class="clear"></div>
		<div class="grid_16 ">
					&nbsp;
			</div>
			<div class="clear"></div>

			<div class="clear"></div>
		</div>
		<!--ci_top_wrapper--></div>
	</div>
{/if}