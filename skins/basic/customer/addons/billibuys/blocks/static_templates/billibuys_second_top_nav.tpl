<ul id="second-top-nav-elements" class="row">
	<a href="{'billibuys.view'|fn_url}"><li class="top_menu_item">{$lang.bb_browse}</li></a>
	<li class="top_menu_item">{$lang.buy}&nbsp;&nbsp;&nbsp;<i class="fa-angle-down fa"></i>
		<div class="submenu-wrapper"></div>
		<ul class="top-nav-submenu header-solid">
			<div class="top-nav-triangle"></div>
			{*Placeholder for my_requests for now*}
			{*<a href="{"billibuys.view_requests&user_id=`$smarty.session.auth.user_id`"|fn_url}"><li class="submenu_item">{$lang.my_requests}</li></a>*}
			<a href="{'billibuys.place_request'|fn_url}"><li class="submenu_item">{$lang.place_request}</li></a>
			<a href="{"orders.search"|fn_url}"><li class="submenu_item">{$lang.view_orders}</li></a>
		</ul>
	</li>
	<li class="top_menu_item">{$lang.sell}&nbsp;&nbsp;&nbsp;<i class="fa-angle-down fa"></i>
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