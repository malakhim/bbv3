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

Hi <Firstname>,

You have made an offer on the following auction(s):

<table>
<th>
 <td><tr>Item Requested/Description</tr><tr>Current Price</tr><tr>Time to Expiry</tr></td>
<th>
<details>
</table>

If you have made an offer in error, please click on the following link to rescind your offer:
<link to cancel offer>

Regards,
BilliBuys
<insert contact details here>

Please do not hesitate to contact us at <email> if you have any support enquiries. We will always try to respond to you as soon as possible.