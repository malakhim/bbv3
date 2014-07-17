{include file="letter_header.tpl"}

{if !empty($firstname)}{$lang.dear}&nbsp;{$firstname|strtolower|capitalize}{else}{$lang.hello}{/if},<br /><br />

{$lang.text_offer_made_on_following_auction}<b>{$request_item.title}</b>
<br /><br />
<table class="table" style="border: 1px white solid">
	<tr class="table-row" style="background-color: #f1f3f7">
		<td><b>{$lang.item}:</b></td>
		<td>{$product.product}</td>
	</tr>
	<tr class="table-row" style="background-color: #f1f3f7">
		<td><b>{$lang.price}:</b></td>
		<td>{include file="common_templates/price.tpl" value=$bid.price"}</td>
	</tr>
</table>
<br/>
<a href="{$url|replace:'$amp;':'&'}">{$lang.text_click_to_view_request}</a>

{include file="addons/billibuys/bb_letter_footer.tpl"}