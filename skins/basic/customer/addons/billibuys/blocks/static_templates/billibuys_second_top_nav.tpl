<div id="second-top-nav-elements" class="row">
	<a href="{'billibuys.view'|fn_url}"><span class="top_menu_item" >{$lang.bb_browse}</span></a>
	<a href="{'billibuys.place_request'|fn_url}"><span class="top_menu_item" >{$lang.buy}</span></a>
	<a href="{'/vendor.php?dispatch=products.add'|fn_url}"><span class="top_menu_item">{$lang.sell}</span></a>
	<form method='get' action="{"billibuys.view"|fn_url}" id="top-search-form" name="top_search_bar">
		<!-- <div class="input-group"> -->
    	  <input type="text" class="form-control input-text input-search" name="search" id="input-search" value="{if $smarty.request.search}{$smarty.request.search}{else}Enter an item you want to sell{/if}">
    	  <i class="fa fa-search" id="search-submit"></i>
{*
	      <span class="input-group-btn">
	      	{include file="buttons/search.tpl" but_name="dispatch[billibuys.view]" but_role="submit"}
	        <!-- <button class="btn btn-default" type="button">Go!</button> -->
	      </span>
	    <!-- </div>/input-group -->
		<!-- <input type="text" class="input-text" name="search" id="input-search" value="Find an item to buy here" /> -->
		<!-- {include file="buttons/button.tpl" but_text=$lang.search but_name="dispatch[`$controller`.`$mode`]" but_role="submit"} -->*}
	</form>
	{*<span class="top_menu_item" href="{'profiles.update'|fn_url}">[ ]Searchbargoes here</span>
	<span class="top_menu_item" href="{'profiles.update'|fn_url}">{$lang.support}</span>*}
</div>