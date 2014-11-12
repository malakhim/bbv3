{capture name="title"}<span>{$request.title}</span>{/capture}

{literal}
<link rel="stylesheet" type="text/css" href="addons/billibuys/js/jquery.countdown/jquery.countdown.css">
<script src="addons/billibuys/js/jquery.countdown/jquery.plugin.min.js" type="text/javascript"></script>
<script src="addons/billibuys/js/jquery.countdown/jquery.countdown.min.js" type="text/javascript"></script>
<script src="addons/billibuys/js/view_request.js" type="text/javascript"></script>
{/literal}


<div id="info-box">
	{include file="common_templates/image.tpl" image_width="80" image_height="80" images=$request.image show_thumbnail="N" no_ids=true class="request-item-image"}
		<div id="request-infobox-right">
			<div class="bb-time-remaining" expiry="{$request.expiry_date}"></div>
			{if $expired == 0}
				{if $request.user_id != $smarty.session.auth.user_id}
					{include file="buttons/button.tpl" but_text="`$lang.place_bid`" but_role="action" but_meta="place_offer" but_href="vendor.php?dispatch=billibuys.place_bid&request_id=`$request.bb_request_id`"|@fn_url  but_id="place_offer"}
				{/if}
			{else if $expired > 0}
				{$lang.auction_finished}. <a href="{"billibuys.view"|fn_url}">{$lang.click_here_to_return_to_main_page}</a>
			{/if}
		</div>
	<div id="description-text">{$request.description}</div>
	<div id="max-price">
		<div class="infobox-label">{$lang.max_price}:</div></br>
		{if $request.max_price != 0}
			{include file="common_templates/price.tpl" value=$request.max_price is_integer=false}
		{else}
			{$lang.no_max_price}
		{/if}
	</div>
{*
{foreach from=$request item=r key=k}
	{if $k NEQ "title" && $k NEQ "bb request id" && $k NEQ "id" && $k NEQ "timestamp" && $k NEQ "user id"}
		{if $k EQ 'expiry date'}
			<strong>{$k|@ucwords}</strong>: {$expiry}<br />
		{elseif $k EQ 'max price' && $r EQ '0.00'}
			<strong>{$k|@ucwords}</strong>: {$lang.no_max_price}<br />
		{else}
			<strong>{$k|@ucwords}</strong>: {$r}<br />
		{/if}
	{/if}
{/foreach}*}
</div>

{*
<table cellpadding="0" cellspacing="0" width="100%" border="0" class="table sortable">
	<tr>
		<th><span>{$lang.item}</span></th>
		<th>{$lang.price}</th>
		<th>{$lang.name}</th>
		<th>{$lang.quantity}</th>
		<th>{$lang.total_price}</th>
		{*<th>{$lang.user}</th>*}{*
	</tr>
	{if $bids != null & isset($bids)}
		{foreach from=$bids item=bid}
			{if is_array($bid)}
				<tr {cycle values="class=\"table-row\","}>
					<td>{include file="buttons/button.tpl" but_text=$bid.product but_href="products.view&product_id=`$bid.product_id`&request_id=`$_REQUEST.request_id`&bid_id=`$bid.bb_bid_id`"|fn_url but_role="text"}</td>
					<td>{$bid.price}</td>
					<td>{$bid.profile_name}</td>
					<td>{$bid.quantity}</td>
					<td>{$bid.tot_price}</td>
				</tr>
			{/if}
		{/foreach}
	{else}
		<tr class="no-items">
			<td colspan="7"><p>{$lang.no_data}</p></td>
		</tr>
	{/if}
</table>
<br />

*}
{if $bids != null & isset($bids)}
	<div id="bids-list">
		{include file="addons/billibuys/components/sorting.tpl" hide_layouts=true}
		{include file="common_templates/pagination.tpl"}
			{foreach from=$bids item=bid}
				{if is_array($bid)}
					<a class="bb-large-list-href" href="{"products.view&product_id=`$bid.product_id`&request_id=`$_REQUEST.request_id`&bid_id=`$bid.bb_bid_id`"|fn_url}"><span class="bb-large-list">
						<div class="bb-list-img">
						{include file="common_templates/image.tpl" image_width="100" image_height="100" images=$bid.image show_thumbnail="Y" no_ids=true class="request-list-image"}
						</div>
						<div class="bb-list-txt">
							<div class="bb-list-field bb-list-title">{$bid.product}</div>
							<div class="bb-list-rating bb-list-field ratings-star-container">{*Placeholder for rating stars*}	
						{section name=num start=1 loop=6 step=1}
							<i class="fa ratings-star fa-star-o {if $smarty.section.num.index == $bid.rating_score}star-selected{/if} no-hover" data-num="{$smarty.section.num.index}"></i>
						{/section}
						</div>
							{*<div class="bb-list-desc bb-list-field">{$bid.full_description}</div>*}
							<div class="bb-list-field bb-list-price">{*<span class="bb-list-txt-title">{$lang.price}:</span> &nbsp;*}{include file="common_templates/price.tpl" value=$bid.price"}</div>
							{*<div class="bb-list-field bb-list-price"><span class="bb-list-txt-title">{$lang.qty}:</span> &nbsp;{$bid.quantity}</div>*}
							<!-- <div class="bb-list-view">{$lang.view}</div> -->
						</div>
					</span></a>
				{/if}
			{/foreach}
		{include file="common_templates/pagination.tpl"}
	</div>
{/if}
{*if $expired == 0}
	{if $request_user_id != $smarty.session.auth.user_id}
		{include file="buttons/button.tpl" but_text=$lang.place_bid but_href="vendor.php?dispatch=billibuys.place_bid&request_id=`$request.id`"|@fn_url but_role="link"}
	{/if}
{else if $expired > 0}
	{$lang.auction_finished}. <a href="{"billibuys.view"|fn_url}">{$lang.click_here_to_return_to_main_page}</a>
{/if*}