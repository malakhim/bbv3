<?php /* Smarty version 2.6.18, created on 2015-02-27 12:08:12
         compiled from C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 31, false),array('modifier', 'fn_query_remove', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 49, false),array('modifier', 'escape', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 49, false),array('modifier', 'fn_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 62, false),array('modifier', 'unescape', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 188, false),array('modifier', 'fn_generate_thumbnail', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 188, false),array('modifier', 'fn_convert_relative_to_absolute_image_url', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 191, false),array('modifier', 'format_price', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 319, false),array('function', 'script', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 34, false),array('function', 'math', 'C:/wamp3/www/public_html/skins/basic/customer/addons/billibuys/blocks/static_templates/billibuys_view.tpl', 106, false),)), $this); ?>
<?php
fn_preload_lang_vars(array('prev_page','next','view_larger_image','lowest_bid','bb_max_price','no_max_price','desired_quantity','prev_page','next'));
?>
<?php 

				$rname = !empty($resource_name) ? $resource_name : $params['smarty_include_tpl_file'];
				if ($this->compile_check && empty($inline_no_check[$rname]) && $this->is_cached($rname)) {
					if ($this->check_inline_blocks(array (
  'common_templates/pagination.tpl' => 1406444269,
))) {
						$_smarty_compile_path = $this->_get_compile_path($rname);
						$this->_compile_resource($rname, $_smarty_compile_path);
						$inline_no_check[$rname] = true;
						include $_smarty_compile_path;
						return;
					}
				}
			 ?><?php echo '
<link rel="stylesheet" type="text/css" href="addons/billibuys/js/jquery.countdown/jquery.countdown.css">
<script src="addons/billibuys/js/jquery.countdown/jquery.plugin.min.js" type="text/javascript"></script>
<script src="addons/billibuys/js/jquery.countdown/jquery.countdown.min.js" type="text/javascript"></script>
<script src="addons/billibuys/js/view_requests.js" type="text/javascript"></script>
'; ?>



<?php if ($this->_tpl_vars['requests']['success'] == 1): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;$this->_smarty_include(array('smarty_include_tpl_file' => "addons/billibuys/components/sorting.tpl", 'smarty_include_vars' => array('hide_layouts' => true,'location' => 'requests')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php $this->assign('id', smarty_modifier_default(@$this->_tpl_vars['id'], 'pagination_contents'), false); ?>
<?php if ($this->_smarty_vars['capture']['pagination_open'] != 'Y'): ?>
	<?php if (( $this->_tpl_vars['settings']['DHTML']['customer_ajax_based_pagination'] == 'Y' || $this->_tpl_vars['force_ajax'] ) && $this->_tpl_vars['pagination']['total_pages'] > 1): ?>
		<?php echo smarty_function_script(array('src' => "lib/js/history/jquery.history.js"), $this);?>

	<?php endif; ?>
	<div class="pagination-container" id="<?php echo $this->_tpl_vars['id']; ?>
">

	<?php if ($this->_tpl_vars['save_current_page']): ?>
	<input type="hidden" name="page" value="<?php echo smarty_modifier_default(@$this->_tpl_vars['search']['page'], @$this->_tpl_vars['_REQUEST']['page']); ?>
" />
	<?php endif; ?>

	<?php if ($this->_tpl_vars['save_current_url']): ?>
	<input type="hidden" name="redirect_url" value="<?php echo $this->_tpl_vars['config']['current_url']; ?>
" />
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['pagination']['total_pages'] > 1): ?>
	<?php if ($this->_tpl_vars['settings']['Appearance']['top_pagination'] == 'Y' && $this->_smarty_vars['capture']['pagination_open'] != 'Y' || $this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	<?php $this->assign('current_url', smarty_modifier_escape(fn_query_remove($this->_tpl_vars['config']['current_url'], 'page', 'result_ids')), false); ?>

	<?php if ($this->_tpl_vars['settings']['DHTML']['customer_ajax_based_pagination'] == 'Y' || $this->_tpl_vars['force_ajax']): ?>
		<?php $this->assign('ajax_class', "cm-ajax cm-ajax-force", false); ?>
	<?php else: ?>
		<?php $this->assign('current_url', fn_query_remove($this->_tpl_vars['current_url'], 'is_ajax'), false); ?>
	<?php endif; ?>

	<?php if ($this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	<div class="pagination-bottom">
	<?php endif; ?>
	<div class="pagination cm-pagination-wraper">
		<?php if ($this->_tpl_vars['pagination']['prev_range']): ?>
			<a name="pagination" href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['prev_range']).($this->_tpl_vars['extra_url'])); ?>
<?php echo $this->_tpl_vars['extra_url']; ?>
" rel="<?php echo $this->_tpl_vars['pagination']['prev_range']; ?>
" class="cm-history prev <?php echo $this->_tpl_vars['ajax_class']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['pagination']['prev_range_from']; ?>
 - <?php echo $this->_tpl_vars['pagination']['prev_range_to']; ?>
</a>
		<?php endif; ?>
		<a name="pagination" class="prev <?php if ($this->_tpl_vars['pagination']['prev_page']): ?>cm-history <?php echo $this->_tpl_vars['ajax_class']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['pagination']['prev_page']): ?>href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['prev_page'])); ?>
" rel="<?php echo $this->_tpl_vars['pagination']['prev_page']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>><i class="text-arrow">&larr;</i>&nbsp;<?php echo fn_get_lang_var('prev_page', $this->getLanguage()); ?>
</a>

		<?php $_from = $this->_tpl_vars['pagination']['navi_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pg']):
?>
			<?php if ($this->_tpl_vars['pg'] != $this->_tpl_vars['pagination']['current_page']): ?>
				<a name="pagination" href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pg']).($this->_tpl_vars['extra_url'])); ?>
" rel="<?php echo $this->_tpl_vars['pg']; ?>
" class="cm-history <?php echo $this->_tpl_vars['ajax_class']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['pg']; ?>
</a>
			<?php else: ?>
				<span class="pagination-selected-page"><?php echo $this->_tpl_vars['pg']; ?>
</span>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<span class="lowercase"><a name="pagination" class="next <?php if ($this->_tpl_vars['pagination']['next_page']): ?>cm-history <?php echo $this->_tpl_vars['ajax_class']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['pagination']['next_page']): ?>href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['next_page']).($this->_tpl_vars['extra_url'])); ?>
" rel="<?php echo $this->_tpl_vars['pagination']['next_page']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>><?php echo fn_get_lang_var('next', $this->getLanguage()); ?>
&nbsp;<i class="text-arrow">&rarr;</i></a></span>

		<?php if ($this->_tpl_vars['pagination']['next_range']): ?>
			<a name="pagination" href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['next_range']).($this->_tpl_vars['extra_url'])); ?>
" rel="<?php echo $this->_tpl_vars['pagination']['next_range']; ?>
" class="cm-history next <?php echo $this->_tpl_vars['ajax_class']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['pagination']['next_range_from']; ?>
 - <?php echo $this->_tpl_vars['pagination']['next_range_to']; ?>
</a>
		<?php endif; ?>
	</div>
	<?php if ($this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	</div>
	<?php endif; ?>
	<?php else: ?>
	<div class="cm-pagination-wraper"><a name="pagination" href="" rel="<?php echo $this->_tpl_vars['pg']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
" class="hidden"></a></div>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	<!--<?php echo $this->_tpl_vars['id']; ?>
--></div>
	<?php ob_start(); ?>N<?php $this->_smarty_vars['capture']['pagination_open'] = ob_get_contents(); ob_end_clean(); ?>
<?php elseif ($this->_smarty_vars['capture']['pagination_open'] != 'Y'): ?>
	<?php ob_start(); ?>Y<?php $this->_smarty_vars['capture']['pagination_open'] = ob_get_contents(); ob_end_clean(); ?>
<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>

	<?php $_from = $this->_tpl_vars['requests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['request']):
?>
		<?php if (is_array ( $this->_tpl_vars['request'] )): ?>
			<a class="bb-large-list-href" href="<?php echo fn_url("billibuys.request&request_id=".($this->_tpl_vars['request']['bb_request_id'])); ?>
"><span class="bb-large-list">
				<div class="bb-list-img">
				<?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('image_width' => '100', 'image_height' => '100', 'images' => $this->_tpl_vars['request']['image'], 'show_thumbnail' => 'Y', 'no_ids' => true, 'class' => "request-list-image", )); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['capture_image']): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['obj_id']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "rand()",'assign' => 'obj_id'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('flash', false, false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['show_thumbnail'] != 'Y'): ?><?php echo ''; ?><?php if (! $this->_tpl_vars['image_width']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_x']): ?><?php echo ''; ?><?php $this->assign('image_width', $this->_tpl_vars['images']['icon']['image_x'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_y']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['images']['icon']['image_y'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['image_width'] || ! $this->_tpl_vars['image_height']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['detailed']['image_x']): ?><?php echo ''; ?><?php $this->assign('image_width', $this->_tpl_vars['images']['detailed']['image_x'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['detailed']['image_y']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['images']['detailed']['image_y'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_x'] && $this->_tpl_vars['images']['icon']['image_y']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_width'],'x' => $this->_tpl_vars['images']['icon']['image_x'],'y' => $this->_tpl_vars['images']['icon']['image_y'],'format' => "%d",'assign' => 'image_height'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['image_height'] && $this->_tpl_vars['images']['detailed']['image_x'] && $this->_tpl_vars['images']['detailed']['image_y']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_width'],'x' => $this->_tpl_vars['images']['detailed']['image_x'],'y' => $this->_tpl_vars['images']['detailed']['image_y'],'format' => "%d",'assign' => 'image_height'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['max_width'] && ! $this->_tpl_vars['image_width']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_x']): ?><?php echo ''; ?><?php $this->assign('image_width', $this->_tpl_vars['images']['icon']['image_x'], false); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['images']['detailed']['image_x']): ?><?php echo ''; ?><?php $this->assign('image_width', $this->_tpl_vars['images']['detailed']['image_x'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['max_height'] && ! $this->_tpl_vars['image_height']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_y']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['images']['icon']['image_y'], false); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['images']['detailed']['image_y']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['images']['detailed']['image_y'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['max_width'] && $this->_tpl_vars['image_width'] && $this->_tpl_vars['image_width'] > $this->_tpl_vars['max_width']): ?><?php echo ''; ?><?php $this->assign('image_width', $this->_tpl_vars['max_width'], false); ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_width'],'x' => smarty_modifier_default(@$this->_tpl_vars['images']['icon']['image_x'], @$this->_tpl_vars['images']['detailed']['image_x']),'y' => smarty_modifier_default(@$this->_tpl_vars['images']['icon']['image_y'], @$this->_tpl_vars['images']['detailed']['image_y']),'format' => "%d",'assign' => 'image_height'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['max_height'] && $this->_tpl_vars['image_height'] && $this->_tpl_vars['image_height'] > $this->_tpl_vars['max_height']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['max_height'], false); ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_y * x / y",'new_y' => $this->_tpl_vars['image_height'],'y' => smarty_modifier_default(@$this->_tpl_vars['images']['icon']['image_y'], @$this->_tpl_vars['images']['detailed']['image_y']),'x' => smarty_modifier_default(@$this->_tpl_vars['images']['icon']['image_x'], @$this->_tpl_vars['images']['detailed']['image_x']),'format' => "%d",'assign' => 'image_width'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']): ?><?php echo ''; ?><?php $this->assign('image_id', $this->_tpl_vars['images']['image_id'], false); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['images']['detailed']): ?><?php echo ''; ?><?php $this->assign('image_id', $this->_tpl_vars['images']['detailed_id'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id']): ?><?php echo '<span class="'; ?><?php if (! $this->_tpl_vars['images']['detailed_id'] || $this->_tpl_vars['flash']): ?><?php echo 'hidden'; ?><?php endif; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['detailed_link_class']; ?><?php echo ' larger-image-wrap center" id="box_det_img_link_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '"><a class="cm-external-click cm-view-larger-image" rev="det_img_link_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '" title="'; ?><?php echo fn_get_lang_var('view_larger_image', $this->getLanguage()); ?><?php echo '"></a></span>'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['images']['icon']['is_flash'] && ! $this->_tpl_vars['images']['detailed']['is_flash']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['show_thumbnail'] == 'Y' && ( $this->_tpl_vars['image_width'] || $this->_tpl_vars['image_height'] ) && $this->_tpl_vars['image_id']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['image_width'] && $this->_tpl_vars['image_height']): ?><?php echo ''; ?><?php $this->assign('make_box', true, false); ?><?php echo ''; ?><?php $this->assign('proportional', true, false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('object_type', smarty_modifier_default(@$this->_tpl_vars['object_type'], 'product'), false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_path']): ?><?php echo ''; ?><?php $this->assign('image_path', $this->_tpl_vars['images']['icon']['image_path'], false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('image_path', $this->_tpl_vars['images']['detailed']['image_path'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('icon_image_path', smarty_modifier_escape(fn_generate_thumbnail(smarty_modifier_unescape($this->_tpl_vars['image_path']), $this->_tpl_vars['image_width'], $this->_tpl_vars['image_height'], $this->_tpl_vars['make_box'])), false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['absolute_image_path']): ?><?php echo ''; ?><?php $this->assign('icon_image_path', fn_convert_relative_to_absolute_image_url($this->_tpl_vars['icon_image_path']), false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['make_box'] && ! $this->_tpl_vars['proportional']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['image_width'], false); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['object_type'] == 'detailed_product'): ?><?php echo ''; ?><?php if (! $this->_tpl_vars['image_height'] && $this->_tpl_vars['image_width']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_x'] && $this->_tpl_vars['images']['icon']['image_y']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_width'],'x' => $this->_tpl_vars['images']['icon']['image_x'],'y' => $this->_tpl_vars['images']['icon']['image_y'],'format' => "%d",'assign' => 'image_height'), $this);?><?php echo ''; ?><?php elseif ($this->_tpl_vars['images']['detailed']['image_x'] && $this->_tpl_vars['images']['detailed']['image_y']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_width'],'x' => $this->_tpl_vars['images']['detailed']['image_x'],'y' => $this->_tpl_vars['images']['detailed']['image_y'],'format' => "%d",'assign' => 'image_height'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['image_width'] && $this->_tpl_vars['image_height']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['image_x'] && $this->_tpl_vars['images']['icon']['image_y']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_height'],'x' => $this->_tpl_vars['images']['icon']['image_y'],'y' => $this->_tpl_vars['images']['icon']['image_x'],'format' => "%d",'assign' => 'image_width'), $this);?><?php echo ''; ?><?php elseif ($this->_tpl_vars['images']['detailed']['image_x'] && $this->_tpl_vars['images']['detailed']['image_y']): ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_height'],'x' => $this->_tpl_vars['images']['detailed']['image_y'],'y' => $this->_tpl_vars['images']['detailed']['image_x'],'format' => "%d",'assign' => 'image_width'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('icon_image_path', $this->_tpl_vars['images']['icon']['image_path'], false); ?><?php echo ''; ?><?php if (! $this->_tpl_vars['icon_image_path']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['object_type'] == 'detailed_product' && $this->_tpl_vars['images']['detailed']['image_x']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['settings']['Thumbnails']['product_details_thumbnail_width']): ?><?php echo ''; ?><?php $this->assign('image_width', $this->_tpl_vars['settings']['Thumbnails']['product_details_thumbnail_width'], false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['make_box'] && ! $this->_tpl_vars['proportional']): ?><?php echo ''; ?><?php $this->assign('image_height', $this->_tpl_vars['image_width'], false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_function_math(array('equation' => "new_x * y / x",'new_x' => $this->_tpl_vars['image_width'],'x' => $this->_tpl_vars['images']['detailed']['image_x'],'y' => $this->_tpl_vars['images']['detailed']['image_y'],'format' => "%d",'assign' => 'image_height'), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('icon_image_path', smarty_modifier_escape(fn_generate_thumbnail(smarty_modifier_unescape($this->_tpl_vars['images']['detailed']['image_path']), $this->_tpl_vars['image_width'], $this->_tpl_vars['image_height'], $this->_tpl_vars['make_box'])), false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['object_type'] == 'detailed_product' && ( $this->_tpl_vars['settings']['Thumbnails']['product_detailed_image_width'] || $this->_tpl_vars['settings']['Thumbnails']['product_detailed_image_height'] )): ?><?php echo ''; ?><?php $this->assign('detailed_image_path', smarty_modifier_escape(fn_generate_thumbnail(smarty_modifier_unescape($this->_tpl_vars['images']['detailed']['image_path']), $this->_tpl_vars['settings']['Thumbnails']['product_detailed_image_width'], $this->_tpl_vars['settings']['Thumbnails']['product_detailed_image_height'], $this->_tpl_vars['make_box'])), false); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['object_type'] == 'detailed_category' && ( $this->_tpl_vars['settings']['Thumbnails']['category_detailed_image_width'] || $this->_tpl_vars['settings']['Thumbnails']['category_detailed_image_height'] )): ?><?php echo ''; ?><?php $this->assign('detailed_image_path', smarty_modifier_escape(fn_generate_thumbnail(smarty_modifier_unescape($this->_tpl_vars['images']['detailed']['image_path']), $this->_tpl_vars['settings']['Thumbnails']['category_detailed_image_width'], $this->_tpl_vars['settings']['Thumbnails']['category_detailed_image_height'], $this->_tpl_vars['make_box'])), false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('detailed_image_path', $this->_tpl_vars['images']['detailed']['image_path'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['icon_image_path'] || ! $this->_tpl_vars['hide_if_no_image']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['detailed_image_path'] || $this->_tpl_vars['wrap_image']): ?><?php echo '<a id="det_img_link_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['detailed_image_path'] && $this->_tpl_vars['rel']): ?><?php echo 'rel="'; ?><?php echo $this->_tpl_vars['rel']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['rel']): ?><?php echo 'rev="'; ?><?php echo $this->_tpl_vars['rel']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' class="'; ?><?php echo $this->_tpl_vars['link_class']; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['detailed_image_path']): ?><?php echo 'cm-previewer'; ?><?php endif; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['detailed_image_path']): ?><?php echo 'href="'; ?><?php echo $this->_tpl_vars['detailed_image_path']; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['images']['detailed']['alt']; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('alt_text', smarty_modifier_default(@$this->_tpl_vars['images']['icon']['alt'], @$this->_tpl_vars['images']['detailed']['alt']), false); ?><?php echo '<img class="'; ?><?php echo $this->_tpl_vars['valign']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['class']; ?><?php echo '"  '; ?><?php if ($this->_tpl_vars['obj_id'] && ! $this->_tpl_vars['no_ids']): ?><?php echo 'id="det_img_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' src="'; ?><?php echo $this->_tpl_vars['config']['full_host_name']; ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['icon_image_path'], @$this->_tpl_vars['config']['no_image_path']); ?><?php echo '" '; ?><?php if ($this->_tpl_vars['image_width']): ?><?php echo 'width="'; ?><?php echo $this->_tpl_vars['image_width']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['image_height']): ?><?php echo 'height="'; ?><?php echo $this->_tpl_vars['image_height']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' alt="'; ?><?php echo $this->_tpl_vars['alt_text']; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['alt_text']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['image_onclick']): ?><?php echo 'onclick="'; ?><?php echo $this->_tpl_vars['image_onclick']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' border="0" />'; ?><?php if ($this->_tpl_vars['detailed_image_path'] || $this->_tpl_vars['wrap_image']): ?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('flash', true, false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['images']['icon']['is_flash']): ?><?php echo ''; ?><?php $this->assign('flash_path', $this->_tpl_vars['images']['icon']['image_path'], false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('flash_path', $this->_tpl_vars['images']['detailed']['image_path'], false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('icon_image_path', smarty_modifier_default(@$this->_tpl_vars['flash_path'], @$this->_tpl_vars['config']['no_image_path']), false); ?><?php echo ''; ?><?php $this->assign('detailed_image_path', smarty_modifier_default(@$this->_tpl_vars['flash_path'], @$this->_tpl_vars['config']['no_image_path']), false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id'] || $this->_tpl_vars['wrap_image']): ?><?php echo '<a id="det_img_link_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['rel']): ?><?php echo 'rel="'; ?><?php echo $this->_tpl_vars['rel']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['rel']): ?><?php echo 'rev="'; ?><?php echo $this->_tpl_vars['rel']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' class="'; ?><?php echo $this->_tpl_vars['link_class']; ?><?php echo ' swf-thumb '; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id']): ?><?php echo 'cm-previewer'; ?><?php endif; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id']): ?><?php echo 'href="'; ?><?php echo $this->_tpl_vars['config']['full_host_name']; ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['flash_path'], @$this->_tpl_vars['config']['no_image_path']); ?><?php echo '"'; ?><?php endif; ?><?php echo ' onclick="return false;">'; ?><?php endif; ?><?php echo '<span id="'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['image_onclick']): ?><?php echo 'onmousedown="'; ?><?php echo $this->_tpl_vars['image_onclick']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' class="option-changer '; ?><?php if ($this->_tpl_vars['_class']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['_class']; ?><?php echo ' object-image'; ?><?php endif; ?><?php echo '" style="'; ?><?php if ($this->_tpl_vars['image_width']): ?><?php echo 'width: '; ?><?php echo $this->_tpl_vars['image_width']; ?><?php echo 'px;'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['image_height']): ?><?php echo 'height: '; ?><?php echo $this->_tpl_vars['image_height']; ?><?php echo 'px;'; ?><?php endif; ?><?php echo ' position: relative; z-index: 0; margin: 3px '; ?><?php if (! ( $this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id'] || $this->_tpl_vars['wrap_image'] )): ?><?php echo 'auto'; ?><?php endif; ?><?php echo ';"><span class="option-changer-container" style="'; ?><?php if ($this->_tpl_vars['image_width']): ?><?php echo 'width: '; ?><?php echo $this->_tpl_vars['image_width']; ?><?php echo 'px;'; ?><?php endif; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['image_height']): ?><?php echo 'height: '; ?><?php echo $this->_tpl_vars['image_height']; ?><?php echo 'px;'; ?><?php endif; ?><?php echo '"><span id="swf_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '"></span></span><script type="text/javascript">if (typeof swfobject == \'undefined\') '; ?>{<?php echo 'var res = $.get(\'lib/js/swfobject/swfobject.js\', function() '; ?>{<?php echo 'swfobject.embedSWF("'; ?><?php echo $this->_tpl_vars['config']['full_host_name']; ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['flash_path'], @$this->_tpl_vars['config']['no_image_path']); ?><?php echo '", "swf_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '", "'; ?><?php if ($this->_tpl_vars['image_width']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['image_width']; ?><?php echo ''; ?><?php else: ?><?php echo '30'; ?><?php endif; ?><?php echo '", "'; ?><?php if ($this->_tpl_vars['image_height']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['image_height']; ?><?php echo ''; ?><?php else: ?><?php echo '30'; ?><?php endif; ?><?php echo '", "9.0.0", "lib/js/swfobject/expressInstall.swf"'; ?><?php if ($this->_tpl_vars['flash_vars']): ?><?php echo ' ,'; ?><?php echo $this->_tpl_vars['flash_vars']; ?><?php echo ','; ?><?php else: ?><?php echo ',"",'; ?><?php endif; ?><?php echo ' '; ?><?php echo '{wmode: \'opaque\'}'; ?><?php echo ');'; ?>}<?php echo ');'; ?>}<?php echo ' else '; ?>{<?php echo 'swfobject.embedSWF("'; ?><?php echo $this->_tpl_vars['config']['full_host_name']; ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['flash_path'], @$this->_tpl_vars['config']['no_image_path']); ?><?php echo '", "swf_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '", "'; ?><?php if ($this->_tpl_vars['image_width']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['image_width']; ?><?php echo ''; ?><?php else: ?><?php echo '30'; ?><?php endif; ?><?php echo '", "'; ?><?php if ($this->_tpl_vars['image_height']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['image_height']; ?><?php echo ''; ?><?php else: ?><?php echo '30'; ?><?php endif; ?><?php echo '", "9.0.0", "lib/js/swfobject/expressInstall.swf"'; ?><?php if ($this->_tpl_vars['flash_vars']): ?><?php echo ' ,'; ?><?php echo $this->_tpl_vars['flash_vars']; ?><?php echo ','; ?><?php else: ?><?php echo ',"",'; ?><?php endif; ?><?php echo ' '; ?><?php echo '{wmode: \'opaque\'}'; ?><?php echo ');'; ?>}<?php echo '</script><span class="option-changer-overlay'; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id']): ?><?php echo ' cm-external-click'; ?><?php endif; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id']): ?><?php echo 'rev="det_img_link_'; ?><?php echo $this->_tpl_vars['obj_id']; ?><?php echo '"'; ?><?php endif; ?><?php echo '></span></span>'; ?><?php if ($this->_tpl_vars['show_detailed_link'] && $this->_tpl_vars['images']['detailed_id'] || $this->_tpl_vars['wrap_image']): ?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['capture_image']): ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['image'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['icon_image_path'], @$this->_tpl_vars['config']['no_image_path']); ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['icon_image_path'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo smarty_modifier_default(@$this->_tpl_vars['detailed_image_path'], @$this->_tpl_vars['config']['no_image_path']); ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['detailed_image_path'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
				</div>
				<div class="bb-list-txt">
					<div class="bb-list-field bb-list-title"><?php echo $this->_tpl_vars['request']['title']; ?>
</div>
										<div class="bb-list-field bb-list-time-remaining" expiry="<?php echo $this->_tpl_vars['request']['expiry_date']; ?>
"></div>
					<div class="bb-list-field bb-list-current-bid">
						<div class="bb-list-txt-title">
							<?php echo fn_get_lang_var('lowest_bid', $this->getLanguage()); ?>
<br/>
							<?php if ($this->_tpl_vars['request']['lowest_bid'] != ''): ?>$<?php echo $this->_tpl_vars['request']['lowest_bid']; ?>
<?php else: ?> --- <?php endif; ?>
						</div>
					</div>
					<div class="bb-list-desc bb-list-field"><?php echo $this->_tpl_vars['request']['description']; ?>
</div>
					<div class="bb-list-field bb-list-price"><span class="bb-list-txt-title"><?php echo fn_get_lang_var('bb_max_price', $this->getLanguage()); ?>
:</span> &nbsp;<?php if ($this->_tpl_vars['request']['max_price']): ?><?php $__parent_tpl_vars = $this->_tpl_vars;$this->_tpl_vars = array_merge($this->_tpl_vars, array('value' => $this->_tpl_vars['request']['max_price'], )); ?><?php echo ''; ?><?php if ($this->_tpl_vars['settings']['General']['alternative_currency'] == 'Y'): ?><?php echo ''; ?><?php echo smarty_modifier_format_price($this->_tpl_vars['value'], $this->_tpl_vars['currencies'][$this->_tpl_vars['primary_currency']], $this->_tpl_vars['span_id'], $this->_tpl_vars['class'], false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['secondary_currency'] != $this->_tpl_vars['primary_currency']): ?><?php echo '&nbsp;'; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '<span class="'; ?><?php echo $this->_tpl_vars['class']; ?><?php echo '">'; ?><?php endif; ?><?php echo '('; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php echo smarty_modifier_format_price($this->_tpl_vars['value'], $this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']], $this->_tpl_vars['span_id'], $this->_tpl_vars['class'], true, $this->_tpl_vars['is_integer']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '<span class="'; ?><?php echo $this->_tpl_vars['class']; ?><?php echo '">'; ?><?php endif; ?><?php echo ')'; ?><?php if ($this->_tpl_vars['class']): ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_format_price($this->_tpl_vars['value'], $this->_tpl_vars['currencies'][$this->_tpl_vars['secondary_currency']], $this->_tpl_vars['span_id'], $this->_tpl_vars['class'], true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?><?php else: ?><?php echo fn_get_lang_var('no_max_price', $this->getLanguage()); ?>
<?php endif; ?></div>
					<?php if ($this->_tpl_vars['request']['quantity']): ?><div class="bb-list-field bb-list-qty"><?php echo fn_get_lang_var('desired_quantity', $this->getLanguage()); ?>
:&nbsp;<?php echo $this->_tpl_vars['request']['quantity']; ?>
</div><?php endif; ?>

				</div>
			</span></a>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	<?php $__parent_tpl_vars = $this->_tpl_vars; ?><?php $this->assign('id', smarty_modifier_default(@$this->_tpl_vars['id'], 'pagination_contents'), false); ?>
<?php if ($this->_smarty_vars['capture']['pagination_open'] != 'Y'): ?>
	<?php if (( $this->_tpl_vars['settings']['DHTML']['customer_ajax_based_pagination'] == 'Y' || $this->_tpl_vars['force_ajax'] ) && $this->_tpl_vars['pagination']['total_pages'] > 1): ?>
		<?php echo smarty_function_script(array('src' => "lib/js/history/jquery.history.js"), $this);?>

	<?php endif; ?>
	<div class="pagination-container" id="<?php echo $this->_tpl_vars['id']; ?>
">

	<?php if ($this->_tpl_vars['save_current_page']): ?>
	<input type="hidden" name="page" value="<?php echo smarty_modifier_default(@$this->_tpl_vars['search']['page'], @$this->_tpl_vars['_REQUEST']['page']); ?>
" />
	<?php endif; ?>

	<?php if ($this->_tpl_vars['save_current_url']): ?>
	<input type="hidden" name="redirect_url" value="<?php echo $this->_tpl_vars['config']['current_url']; ?>
" />
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['pagination']['total_pages'] > 1): ?>
	<?php if ($this->_tpl_vars['settings']['Appearance']['top_pagination'] == 'Y' && $this->_smarty_vars['capture']['pagination_open'] != 'Y' || $this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	<?php $this->assign('current_url', smarty_modifier_escape(fn_query_remove($this->_tpl_vars['config']['current_url'], 'page', 'result_ids')), false); ?>

	<?php if ($this->_tpl_vars['settings']['DHTML']['customer_ajax_based_pagination'] == 'Y' || $this->_tpl_vars['force_ajax']): ?>
		<?php $this->assign('ajax_class', "cm-ajax cm-ajax-force", false); ?>
	<?php else: ?>
		<?php $this->assign('current_url', fn_query_remove($this->_tpl_vars['current_url'], 'is_ajax'), false); ?>
	<?php endif; ?>

	<?php if ($this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	<div class="pagination-bottom">
	<?php endif; ?>
	<div class="pagination cm-pagination-wraper">
		<?php if ($this->_tpl_vars['pagination']['prev_range']): ?>
			<a name="pagination" href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['prev_range']).($this->_tpl_vars['extra_url'])); ?>
<?php echo $this->_tpl_vars['extra_url']; ?>
" rel="<?php echo $this->_tpl_vars['pagination']['prev_range']; ?>
" class="cm-history prev <?php echo $this->_tpl_vars['ajax_class']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['pagination']['prev_range_from']; ?>
 - <?php echo $this->_tpl_vars['pagination']['prev_range_to']; ?>
</a>
		<?php endif; ?>
		<a name="pagination" class="prev <?php if ($this->_tpl_vars['pagination']['prev_page']): ?>cm-history <?php echo $this->_tpl_vars['ajax_class']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['pagination']['prev_page']): ?>href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['prev_page'])); ?>
" rel="<?php echo $this->_tpl_vars['pagination']['prev_page']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>><i class="text-arrow">&larr;</i>&nbsp;<?php echo fn_get_lang_var('prev_page', $this->getLanguage()); ?>
</a>

		<?php $_from = $this->_tpl_vars['pagination']['navi_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pg']):
?>
			<?php if ($this->_tpl_vars['pg'] != $this->_tpl_vars['pagination']['current_page']): ?>
				<a name="pagination" href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pg']).($this->_tpl_vars['extra_url'])); ?>
" rel="<?php echo $this->_tpl_vars['pg']; ?>
" class="cm-history <?php echo $this->_tpl_vars['ajax_class']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['pg']; ?>
</a>
			<?php else: ?>
				<span class="pagination-selected-page"><?php echo $this->_tpl_vars['pg']; ?>
</span>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<span class="lowercase"><a name="pagination" class="next <?php if ($this->_tpl_vars['pagination']['next_page']): ?>cm-history <?php echo $this->_tpl_vars['ajax_class']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['pagination']['next_page']): ?>href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['next_page']).($this->_tpl_vars['extra_url'])); ?>
" rel="<?php echo $this->_tpl_vars['pagination']['next_page']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>><?php echo fn_get_lang_var('next', $this->getLanguage()); ?>
&nbsp;<i class="text-arrow">&rarr;</i></a></span>

		<?php if ($this->_tpl_vars['pagination']['next_range']): ?>
			<a name="pagination" href="<?php echo fn_url(($this->_tpl_vars['current_url'])."&amp;page=".($this->_tpl_vars['pagination']['next_range']).($this->_tpl_vars['extra_url'])); ?>
" rel="<?php echo $this->_tpl_vars['pagination']['next_range']; ?>
" class="cm-history next <?php echo $this->_tpl_vars['ajax_class']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['pagination']['next_range_from']; ?>
 - <?php echo $this->_tpl_vars['pagination']['next_range_to']; ?>
</a>
		<?php endif; ?>
	</div>
	<?php if ($this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	</div>
	<?php endif; ?>
	<?php else: ?>
	<div class="cm-pagination-wraper"><a name="pagination" href="" rel="<?php echo $this->_tpl_vars['pg']; ?>
" rev="<?php echo $this->_tpl_vars['id']; ?>
" class="hidden"></a></div>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_smarty_vars['capture']['pagination_open'] == 'Y'): ?>
	<!--<?php echo $this->_tpl_vars['id']; ?>
--></div>
	<?php ob_start(); ?>N<?php $this->_smarty_vars['capture']['pagination_open'] = ob_get_contents(); ob_end_clean(); ?>
<?php elseif ($this->_smarty_vars['capture']['pagination_open'] != 'Y'): ?>
	<?php ob_start(); ?>Y<?php $this->_smarty_vars['capture']['pagination_open'] = ob_get_contents(); ob_end_clean(); ?>
<?php endif; ?><?php if (isset($__parent_tpl_vars)) { $this->_tpl_vars = $__parent_tpl_vars; unset($__parent_tpl_vars);} ?>
<?php else: ?>
	<p class="no-items"><?php echo $this->_tpl_vars['error_msg']; ?>
</p>
<?php endif; ?>