{capture name="mainbox"}
	{if $bids}
		<a href="{"admin.php?dispatch=billibuys.notify"|fn_url}">{$lang.create_notification}</a>
		<form action="{""|fn_url}" method="post" name="category_tree_form" class="{if ""|fn_check_form_permissions}cm-hide-inputs{/if}">

			{capture name=amount_dropdown assign=amount}
				<select name="quantity">
					{section name=quantity start=$bids[0].amount loop=0 step=-1}
						<option value="{$smarty.section.quantity.index}">{$smarty.section.quantity.index}</option>
					{/section}
				</select>
			{/capture}

			{capture name=price_inputbox assign=price}
				<input type="text" value="{$highest_price}" class="input-text" />
			{/capture}

			<input type="radio" name="update_bid_option" value="auto_update" id="a_update" /><label for="a_update">{$lang.update_bids_auto_update_option_text|replace:"[product]":$bids[0].product|replace:"[quantity]":$amount|replace:"currency":$currency|replace:"[price]":$price}</label>
			<input type="radio" name="update_bid_option" value="manual_update" id="m_update" /><label for="m_update">{$lang.update_bids_manual_update_option_text}</label>
			<input type="radio" name="update_bid_option" value="no_update" id="n_update" /><label for="n_update">{$lang.update_bids_no_update_option_text}</label>
	{else}
		{*assign var="lowercase_here" value=$lang.here|lower}
		{assign var="url" value="billibuys.offers"|fn_url}
		{assign var="link" value="<a href='".$url."'>".$lowercase_here."</a>"*}
		{$lang.no_disabled_bids|replace:"[here]":"<a href='`$url`'>`$lang.here`|lower</a>"}
	{/if}

{/capture}

{include file="common_templates/mainbox.tpl" title=$lang.update_bids content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra tools=$smarty.capture.tools}