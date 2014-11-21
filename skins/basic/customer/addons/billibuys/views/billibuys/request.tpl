{literal}
<link rel="stylesheet" type="text/css" href="addons/billibuys/js/jquery.countdown/jquery.countdown.css">
<script src="addons/billibuys/js/jquery.countdown/jquery.plugin.min.js" type="text/javascript"></script>
<script src="addons/billibuys/js/jquery.countdown/jquery.countdown.min.js" type="text/javascript"></script>
<script src="addons/billibuys/js/view_request.js" type="text/javascript"></script>
{/literal}
{$request|var_dump}
{$smarty.session.auth.user_id}
<div id="info-box">
	{include file="common_templates/image.tpl" image_width="80" image_height="80" images=$request.image show_thumbnail="N" no_ids=true class="request-item-image"}
	{*<div id="request-infobox-right">*}

	{*</div>*}
	<div id="info-box-text">
		<div id="request-page-title">{$request.title}</div>
		<hr/>
		<div id="max-price">
			{$lang.max_price}:
			{if $request.max_price != 0}
				{include file="common_templates/price.tpl" value=$request.max_price is_integer=false}
			{else}
				{$lang.no_max_price}
			{/if}
		</div>

		{$lang.time_remaining}:&nbsp;<span class="bb-time-remaining" expiry="{$request.expiry_date}"></span> ({$lang.ends} {$request.expiry_date|date_format:"%e %B %Y %l:%M:%S%p"})
		<br/><br/>
		<div id="description-text">{$request.description}</div>
		<br/><br/>
		{if $expired == 0}
		<a href="{"vendor.php?dispatch=billibuys.place_bid&request_id=`$request.bb_request_id`"|@fn_url}" class="request-page-btn" id="place-offer">{$lang.place_bid}</a>
			{*{if $request.user_id != $smarty.session.auth.user_id}
				{include file="buttons/button.tpl" but_text="`$lang.place_bid`" but_role="action" but_meta="place_offer" but_href="vendor.php?dispatch=billibuys.place_bid&request_id=`$request.bb_request_id`"|@fn_url  but_id="place_offer"}
			{/if}*}
		{else if $expired > 0}
			{$lang.auction_finished}. <a href="{"billibuys.view"|fn_url}">{$lang.click_here_to_return_to_main_page}</a>
		{/if}
	</div>
</div>

{if $bids != null && isset($bids)}
	<div id="bids-list">
		{include file="addons/billibuys/components/sorting.tpl" hide_layouts=true}
		{include file="common_templates/pagination.tpl"}
			{foreach from=$bids item=bid}
				{if is_array($bid)}
				<div class="bb-bid-item">
					<div class="bb-list-img">
						{include file="common_templates/image.tpl" image_width="100" image_height="100" images=$bid.image show_thumbnail="Y" no_ids=true class="request-list-image"}
					</div>
					<div class="bb-list-txt">
						<div class="bb-list-field bb-list-title">{$bid.product}</div>
						{*<div class="bb-list-rating bb-list-field ratings-star-container">{*Placeholder for rating stars*}{*
							{section name=num start=1 loop=6 step=1}
								<i class="fa ratings-star fa-star-o {if $smarty.section.num.index == $bid.rating_score}star-selected{/if} no-hover" data-num="{$smarty.section.num.index}"></i>
							{/section}
						</div>*}
						<div class="bb-list-field bb-list-qty"><span class="bb-list-txt-title">{$lang.qty}:</span> &nbsp;{$bid.quantity}</div>
						<div class="bb-list-desc bb-list-field">
						{if !empty($bid.full_description)}
							{$bid.full_description}
						{else}
							{$lang.bb_no_description}
						{/if}
						</div>
						<div class="bb-list-field bb-list-price">{*<span class="bb-list-txt-title">{$lang.price}:</span> &nbsp;*}<span class="bid-price">{include file="common_templates/price.tpl" value=$bid.price"}{if $bid.user_id == $smarty.session.auth.user_id}</span>&nbsp;<a href="#" class="edit-bid-price" data-id="{$bid.bb_bid_id}">({$lang.edit})</a>{/if}</div>
						{assign var="return_current_url" value=$config.current_url|escape:"url"}
						<a class="request-page-btn {if $bid.user_id == $smarty.session.auth.user_id}delete-offer-btn{else}view-offer-btn{/if}" href="{if $bid.user_id == $smarty.session.auth.user_id}{"index.php?dispatch=billibuys.withdraw_bid&bid_id=`$bid.bb_bid_id`&return_url=`$return_current_url`"|fn_url}{else}{"products.view&product_id=`$bid.product_id`&request_id=`$_REQUEST.request_id`&bid_id=`$bid.bb_bid_id`"|fn_url}{/if}">
							{if $bid.user_id == $smarty.session.auth.user_id}
								{$lang.delete_offer}
							{else}
								{$lang.view_offer}
							{/if}
						</a>
					</div>
				</div>

				{$bid|var_dump}
				div>








					{*
					<a class="bb-large-list-href" href="{"products.view&product_id=`$bid.product_id`&request_id=`$_REQUEST.request_id`&bid_id=`$bid.bb_bid_id`"|fn_url}"><span class="bb-large-list">
						<div class="bb-list-img">
						{include file="common_templates/image.tpl" image_width="100" image_height="100" images=$bid.image show_thumbnail="Y" no_ids=true class="request-list-image"}
						</div>
						<div class="bb-list-txt">
							<div class="bb-list-field bb-list-title">{$bid.product}</div>
							{*<div class="bb-list-rating bb-list-field ratings-star-container">{*Placeholder for rating stars*}{*
								{section name=num start=1 loop=6 step=1}
									<i class="fa ratings-star fa-star-o {if $smarty.section.num.index == $bid.rating_score}star-selected{/if} no-hover" data-num="{$smarty.section.num.index}"></i>
								{/section}
							</div>*}{*
							<div class="bb-list-desc bb-list-field">{$bid.full_description}</div>
							<div class="bb-list-field bb-list-price">*}{*<span class="bb-list-txt-title">{$lang.price}:</span> &nbsp;*}{*include file="common_templates/price.tpl" value=$bid.price"}</div>*}
							{*<div class="bb-list-field bb-list-price"><span class="bb-list-txt-title">{$lang.qty}:</span> &nbsp;{$bid.quantity}</div>*}{*
							<!-- <div class="bb-list-view">{$lang.view}</div> -->
						</div>
					</span></a>
					*}
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