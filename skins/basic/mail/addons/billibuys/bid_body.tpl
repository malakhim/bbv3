{include file="letter_header.tpl"}

{$lang.hello}{if !empty($firstname)}&nbsp;{$firstname|strtolower|capitalize}{/if},<br /><br />

{$lang.text_offer_made_on_following_auction}<b>{$request_item.title}</b>
<br /><br />
<table>
	<tr>
		<td>{$lang.item}</td>
		<td>{$product.product}</td>
	</tr>
	<tr>
		<td>{$lang.price}</td>
		<td>{$bid.price}</td>
	</tr>
	<tr>
		<td>{$lang.quantity}</td>
		<td>{$bid.quantity}</td>
	</tr>
</table>

<a href="{$url|replace:'$amp;':'&'}">{$lang.text_click_to_view_request}</a>

{include file="/addons/billibuys/bb_letter_footer.tpl"}