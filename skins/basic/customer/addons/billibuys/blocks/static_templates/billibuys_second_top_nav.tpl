<ul id="second-top-nav-elements" class="row">
	<li class="top_menu_item"><a href="{'billibuys.view'|fn_url}">{$lang.bb_browse}</a></li>
	<li class="top_menu_item">{$lang.buy}
		<ul class="top-nav-submenu header-solid">
			{*Placeholder for my_requests for now*}
			{*<li class="submenu_item"><a href="{"billibuys.view_requests&user_id=`$smarty.session.auth.user_id`"|fn_url}">{$lang.my_requests}</a></li>*}
			<li class="submenu_item"><a href="{'billibuys.place_request'|fn_url}">{$lang.place_request}</a></li>
			<li class="submenu_item"><a href="{"orders.search"|fn_url}">{$lang.view_orders}</a></li>
		</ul>
	</li>
	<li class="top_menu_item">{$lang.sell}
		<ul class="top-nav-submenu header-solid">
			{*Placeholder for my_offers for now*}
			{*<li class="submenu_item"><a href="{"billibuys.view_offers&user_id=`$smarty.session.auth.user_id`"|fn_url}">{$lang.my_offers}</a></li>*}
			<li class="submenu_item"><a href="{'/vendor.php?dispatch=products.manage'|fn_url}">{$lang.block_products}</a></li>
			<li class="submenu_item"><a href="{'/vendor.php?dispatch=products.add'|fn_url}">{$lang.add_new_product}</a></li>
			<li class="submenu_item"><a href="{'/vendor.php?dispatch=orders.manage'|fn_url}">{$lang.sales}</a></li>
		</ul>
	</li>
	<form method='get' action="{"billibuys.view"|fn_url}" id="top-search-form" name="top_search_bar">
    	  <input type="text" class="form-control input-text input-search" name="search" id="input-search" value="{if $smarty.request.search}{$smarty.request.search}{else}Enter an item you want to sell{/if}">
    	  <i class="fa fa-search" id="search-submit"></i>
	</form>
</ul>