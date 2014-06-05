<div id="checkout_info_products_{$block.snapping_id}">
	<ul class="order-product-list">
	{hook name="block_checkout:cart_items"}
	{foreach from=$cart_products key="key" item="product" name="cart_products"}
		{hook name="block_checkout:cart_products"}
			{if !$cart.products.$key.extra.parent}
			<li>
				<a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="product-name">{$product.product|unescape}</a>{if !$product.exclude_from_calculate}{include file="buttons/button.tpl" but_href="checkout.delete?cart_id=`$key`&amp;redirect_mode=`$mode`" but_meta="delete" but_rev="cart_status*" but_role="delete" but_name="delete_cart_item"}{/if}
				<span class="product-price">{$product.amount}&nbsp;x&nbsp;{include file="common_templates/price.tpl" value=$product.display_price}</span>
				{include file="common_templates/options_info.tpl" product_options=$product.product_options no_block=true}
				{hook name="block_checkout:product_extra"}{/hook}
			</li>
			{/if}
		{/hook}
	{/foreach}
	{/hook}
	</ul>
<div class="edit-products"><a href="{"checkout.cart"|fn_url}" rel="nofollow" class="text-button">{$lang.edit_products}</a></div>
<!--checkout_info_products_{$block.snapping_id}--></div>