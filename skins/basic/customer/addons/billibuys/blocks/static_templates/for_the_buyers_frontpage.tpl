{*<div class="infobox_heading">
	{$lang.for_the_buyers}
</div>
<br/>
*}
{*
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery-timing.min.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
*}
<link rel="stylesheet" type="text/css" href="css/style.css" />

{*<div class="infobox_subheading">
	{$lang.jumbotron_buyer_heading}
</div>

<div class="infobox_text">
	{$lang.jumbotron_buyer_subheading}!
</div>

<div class="learn_more_box">
	{$lang.learn_more}
</div> -->
{capture name="slide"}
	{literal}
		$lang_group = {$lang_group}
		$step_subheading = {$step_subheading}
		$step_number = {$step_number}
	{/literal}
{/capture} *}
<div id="da-slider" class="da-slider buyerslider buyer-panel">
{* <div class="infobox_heading">Buyers</div>
<ul class="bxslider bx-buyer">
	<li><div class="infobox_subheading">Step 1 of 3</div>
		<div class="infobox_text">Request a product</div>
		<div class="infobox_desc">Enter an item you want to buy, and name your price</div>
		<img class="slider-img" src="http://placekitten.com/g/400/160" />
	</li>
	<li><div class="infobox_subheading">Step 2 of 3</div>
		<div class="infobox_text">Watch as sellers offer their items</div>
		<div class="infobox_desc">Wait while we notify you immediately as each offer is placed</div>
		<div class="slider-img"></div>
	</li>
	<li><div class="infobox_subheading">Step 3 of 3</div>
		<div class="infobox_text">Request an item</div>
		<div class="infobox_desc">Browse through your offers and pick what you'd like to buy</div>
		<img class="slider-img" src="http://placekitten.com/g/400/160" />
	</li>
</ul>
</div>*}

	<div class="infobox_heading">Are You A Buyer...</div>
	<span class="step_1">
		<div class="infobox_text">Request a product</div>
		<div class="infobox_desc">Enter the item you want to buy, and name your price</div>
		<div class="infobox_img"><div class="slider-img"></div></div>
		<div class="infobox_subheading">Step 1</div>
	</span>
	<span class="step_2">
		<div class="infobox_text">Watch as sellers offer their items</div>
		<div class="infobox_desc">Wait while we notify you immediately as each offer is placed</div>
		<div class="infobox_img"><div class="slider-img"></div></div>
		<div class="infobox_subheading">Step 2</div>
	</span>
	<span class="step_3">
		<div class="infobox_text">Purchase your item</div>
		<div class="infobox_desc">See an offer that catches your fancy? Purchase it right away!</div>
		<div class="infobox_img"><div class="slider-img"></div></div>
		<div class="infobox_subheading">Step 3</div>
	</span>
</div>

{*	
	<div class="da-slide">
		<h2>{$lang.for_the_buyers}</h2>
		<p>{$lang.step} 1 {$lang.request_a_product}</p>
		<span class="slide-body">{$lang.step_1_buyer}</span>

		<div class="da-img stickimg">
			<img src="http://placekitten.com/400/80" />
		</div>

		<!-- <p>{$lang.step_1_buyer}</p> -->
		<div class="da-img">
			<img src="http://placekitten.com/350/250" />
		</div>
	</div>

	<div class="da-slide">
		<h2>{$lang.for_the_buyers}</h2>
		<p>{$lang.step} 2 {$lang.get_bids}</p>
		<span class="slide-body">{$lang.step_2_buyer}</span>
		<!-- <p>{$lang.step_1_buyer}</p> -->

		<div class="da-img stickimg">
			<img src="http://placekitten.com/400/80" />
		</div>

		<div class="da-img">
			<img src="http://placekitten.com/350/250" />
		</div>

		<div class="da-img">
			<img src="http://placekitten.com/350/250" />
		</div>
	</div>

	<div class="da-slide">
		<h2>{$lang.for_the_buyers}</h2>
		<p>{$lang.step} 3 {$lang.purchase_items}</p>
		<span class="slide-body">{$lang.step_3_buyer}</span>
		<!-- <p>{$lang.step_1_buyer}</p> -->

		<div class="da-img stickimg">
			<img src="http://placekitten.com/400/80" />
		</div>

		<div class="da-img">
			<img src="http://placekitten.com/350/250" />
		</div>
	</div>

	<nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>

</div>
*}