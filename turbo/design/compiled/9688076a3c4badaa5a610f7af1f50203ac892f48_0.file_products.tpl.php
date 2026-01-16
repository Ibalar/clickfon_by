<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:28:14
  from 'file:products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e6e8f7954_11825005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9688076a3c4badaa5a610f7af1f50203ac892f48' => 
    array (
      0 => 'products.tpl',
      1 => 1733650240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_69172e6e8f7954_11825005 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/9688076a3c4badaa5a610f7af1f50203ac892f48_0.file_products.tpl.php',
    'uid' => '9688076a3c4badaa5a610f7af1f50203ac892f48',
    'call_name' => 'smarty_template_function_category_select_185202494169172e6e8924c3_21246590',
  ),
  'category_select_btn' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/9688076a3c4badaa5a610f7af1f50203ac892f48_0.file_products.tpl.php',
    'uid' => '9688076a3c4badaa5a610f7af1f50203ac892f48',
    'call_name' => 'smarty_template_function_category_select_btn_185202494169172e6e8924c3_21246590',
  ),
));
if ($_smarty_tpl->getValue('category')) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('category')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_products, false, 32);
}?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php if ($_smarty_tpl->getValue('category') || $_smarty_tpl->getValue('brand')) {?>
					<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('category')->name ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('brand')->name ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('products_count');?>

				<?php } else { ?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_products, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('products_count');?>

				<?php }?>
			</h1>
			<div class="d-grid d-sm-block mt-2 mt-md-0">
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 float-sm-end">
		<form class="search mb-3" method="get">
			<input type="hidden" name="module" value="ProductsAdmin">
			<div class="input-group">
				<input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
">
				<button class="btn btn-primary" type="submit"><i class="align-middle mt-n1" data-feather="search"></i></button>
			</div>
		</form>
	</div>
</div>

<div class="card">
	<div class="card-header d-block d-lg-none">
		<div class="card-actions float-end">
			<div class="position-relative collapse-icon">
				<a href="javascript:;" class="collapse-chevron">
					<i class="align-middle" data-feather="chevron-down"></i>
				</a>
			</div>
		</div>
		<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_filter, ENT_QUOTES, 'UTF-8', true);?>
</h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-12">
				<div class="collapse-card boxed-sorting">
					<div class="row">
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select id="id-filter" name="products_filter" class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('brand_id'=>null,'category_id'=>null,'keyword'=>null,'page'=>null,'limit'=>null,'filter'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('filter')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'featured'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'featured') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_bestsellers, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'new'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'new') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'hit'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'hit') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_hit, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'discounted'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'discounted') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_discount, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'to_xml'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'to_xml') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_xml, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'visible'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'visible') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'hidden'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'hidden') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'outofstock'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'outofstock') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_out_of_stock, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select id="id-categories" name="categories_filter" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('category')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
								
								<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

							</select>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select id="id-brands" name="brands_filter" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brand_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('brand')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_brands, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'b');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
?>
									<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'page'=>null,'limit'=>null,'brand_id'=>$_smarty_tpl->getValue('b')->id), $_smarty_tpl);?>
" brand_id="<?php echo $_smarty_tpl->getValue('b')->id;?>
" <?php if ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->id == $_smarty_tpl->getValue('b')->id) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('b')->name;?>
</option>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->getValue('products')) {?>
			<div class="row">
				<div class="col-12">
					<form method="post" class="js-form-list">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
						<div class="turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-boding turbo-list-drag"></div>
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-photo"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-price"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-count"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-setting turbo-list-products-setting"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach2DoElse = false;
?>
									<div class="js-row turbo-list-body-item">
										<div class="turbo-list-row">
											<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('product')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('product')->position;?>
">
											<div class="turbo-list-boding turbo-list-drag move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
											<div class="turbo-list-boding turbo-list-check form-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-photo">
												<?php $_smarty_tpl->assign('image', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('product')->images), false, NULL);?>
												<?php if ($_smarty_tpl->getValue('image')) {?>
													<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('product')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,45,45);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
"></a>
												<?php } else { ?>
													<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('product')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<i class="align-middle" data-feather="camera"></i>
													</a>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-name">
												<a class="fw-bold text-body text-decoration-none" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('product')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>

													<?php if ($_smarty_tpl->getValue('product')->variants[0]->name || $_smarty_tpl->getValue('product')->variants[0]->color) {?>
														<span class="text-secondary">(<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->variants[0]->color, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->getValue('product')->variants[0]->color && $_smarty_tpl->getValue('product')->variants[0]->name) {?>/<?php }
echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->variants[0]->name, ENT_QUOTES, 'UTF-8', true);?>
)</span>
													<?php }?>
												</a>
												<div class="d-block d-lg-none mt-1">
													<span class="text-primary fw-bold">
														<?php echo $_smarty_tpl->getValue('product')->variants[0]->oprice;?>

														<?php if ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('product')->variants[0]->currency_id]) {?>
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('product')->variants[0]->currency_id]->code, ENT_QUOTES, 'UTF-8', true);?>

														<?php }?>
													</span>
													<span class="fw-bold"><?php if ($_smarty_tpl->getValue('product')->variants[0]->infinity) {?>∞<?php } else {
echo $_smarty_tpl->getValue('product')->variants[0]->stock;
}?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
												<div class="turbo-list-name-brand text-muted"><?php if ($_smarty_tpl->getValue('product')->brand) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brand, ENT_QUOTES, 'UTF-8', true);
}?> <?php echo $_smarty_tpl->getValue('product')->brand;?>
</div>
												<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')->variants) > 1) {?>
													<div class="js-variants-toggle variants-toggle">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_options, ENT_QUOTES, 'UTF-8', true);?>

														<span class="js-icon-arrow">
															<i class="align-middle" data-feather="chevron-down"></i>
														</span>
													</div>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-price">
												<div class="input-group">
													<input class="form-control <?php if ($_smarty_tpl->getValue('product')->variants[0]->compare_price > 0) {?>text-danger<?php }?>" type="text" name="price[<?php echo $_smarty_tpl->getValue('product')->variants[0]->id;?>
]" value="<?php echo $_smarty_tpl->getValue('product')->variants[0]->oprice;?>
">
													<span class="input-group-text">
														<?php if ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('product')->variants[0]->currency_id]) {?>
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('product')->variants[0]->currency_id]->sign, ENT_QUOTES, 'UTF-8', true);?>

														<?php } else { ?>
															<?php echo $_smarty_tpl->getValue('currency')->sign;?>

														<?php }?>
													</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-count">
												<div class="input-group">
													<input class="form-control" type="text" name="stock[<?php echo $_smarty_tpl->getValue('product')->variants[0]->id;?>
]" value="<?php if ($_smarty_tpl->getValue('product')->variants[0]->infinity) {?>∞<?php } else {
echo $_smarty_tpl->getValue('product')->variants[0]->stock;
}?>">
													<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-status">
												<div class="form-check form-switch">
													<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('product')->visible) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('product')->id;?>
" data-module="product" data-action="visible" data-id="<?php echo $_smarty_tpl->getValue('product')->id;?>
" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('product')->visible) {?>checked="" <?php }?>>
													<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('product')->id;?>
"></label>
												</div>
											</div>
											<div class=" turbo-list-setting turbo-list-products-setting">
												<a href="../<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="setting-icon setting-icon-open" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_view, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="external-link"></i>
												</a>
												<button type="button" class="setting-icon setting-icon-featured js-ajax-action <?php if ($_smarty_tpl->getValue('product')->featured) {?>js-active-class<?php }?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_bestseller, ENT_QUOTES, 'UTF-8', true);?>
" data-module="product" data-action="featured" data-id="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
													<i class="align-middle" data-feather="star"></i>
												</button>
												<button type="button" class="setting-icon setting-icon-new js-ajax-action <?php if ($_smarty_tpl->getValue('product')->is_new) {?>js-active-class<?php }?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new, ENT_QUOTES, 'UTF-8', true);?>
" data-module="product" data-action="is_new" data-id="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
													<i class="align-middle" data-feather="calendar"></i>
												</button>
												<button type="button" class="setting-icon setting-icon-xml js-ajax-action <?php if ($_smarty_tpl->getValue('product')->to_xml) {?>js-active-class<?php }?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_add_xml, ENT_QUOTES, 'UTF-8', true);?>
" data-module="product" data-action="to_xml" data-id="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
													<i class="align-middle" data-feather="rss"></i>
												</button>
												<button type="button" class="setting-icon setting-icon-hit js-ajax-action <?php if ($_smarty_tpl->getValue('product')->is_hit) {?>js-active-class<?php }?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_hit, ENT_QUOTES, 'UTF-8', true);?>
" data-module="product" data-action="is_hit" data-id="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
													<i class="align-middle" data-feather="award"></i>
												</button>
												<button type="button" class="setting-icon setting-icon-copy js-copy" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_dublicate, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="copy"></i>
												</button>
											</div>
											<div class="turbo-list-boding turbo-list-delete">
												<button type="button" class="btn-delete js-remove" data-bs-toggle="modal" data-bs-target="#actionModal" onclick="success_action($(this));">
													<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="trash-2"></i>
													</span>
												</button>
											</div>
										</div>
										<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')->variants) > 1) {?>
											<div class="turbo-list-variants products-variants-block">
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->variants, 'variant');
$_smarty_tpl->getVariable('variant')->iteration = 0;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('variant')->iteration++;
$foreach3Backup = clone $_smarty_tpl->getVariable('variant');
?>
													<?php if ($_smarty_tpl->getVariable('variant')->iteration > 1) {?>
														<div class="turbo-list-row products">
															<div class="turbo-list-boding turbo-list-drag"></div>
															<div class="turbo-list-boding turbo-list-check"></div>
															<div class="turbo-list-boding turbo-list-photo"></div>
															<div class="turbo-list-boding turbo-list-variant-name">
																<span class="text-secondary fw-bold"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->color, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->getValue('variant')->color && $_smarty_tpl->getValue('variant')->name) {?>/<?php }
echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
															</div>
															<div class="turbo-list-boding turbo-list-price">
																<div class="input-group">
																	<input class="form-control <?php if ($_smarty_tpl->getValue('product')->variants[0]->compare_price > 0) {?>text-danger<?php }?>" type="text" name="price[<?php echo $_smarty_tpl->getValue('variant')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('variant')->oprice;?>
">
																	<span class="input-group-text">
																		<?php if ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('variant')->currency_id]) {?>
																			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('variant')->currency_id]->sign, ENT_QUOTES, 'UTF-8', true);?>

																		<?php } else { ?>
																			<?php echo $_smarty_tpl->getValue('currency')->sign;?>

																		<?php }?>
																	</span>
																</div>
															</div>
															<div class="turbo-list-boding turbo-list-count">
																<div class="input-group">
																	<input class="form-control" type="text" name="stock[<?php echo $_smarty_tpl->getValue('variant')->id;?>
]" value="<?php if ($_smarty_tpl->getValue('variant')->infinity) {?>∞<?php } else {
echo $_smarty_tpl->getValue('variant')->stock;
}?>">
																	<span class="input-group-text">
																		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>

																	</span>
																</div>
															</div>
															<div class="turbo-list-boding turbo-list-status"></div>
															<div class="turbo-list-boding turbo-list-delete"></div>
														</div>
													<?php }?>
												<?php
$_smarty_tpl->setVariable('variant', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</div>
										<?php }?>
									</div>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</div>
							<div class="turbo-list-footer js-action-block">
								<div class="turbo-list-foot-left">
									<div class="turbo-list-boding turbo-list-drag"></div>
									<div class="turbo-list-heading turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
										</label>
									</div>
									<div class="turbo-list-option">
										<select name="action" class="selectpicker products-action">
											<option value="enable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="disable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="set_featured"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_mark_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="unset_featured"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_unmark_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="set_is_new"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_mark_new, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="unset_is_new"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_unmark_new, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="set_is_hit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_mark_hit, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="unset_is_hit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_unmark_hit, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="set_xml"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_add_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="unset_xml"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="duplicate"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_create_dublicate, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php if ($_smarty_tpl->getValue('pages_count') > 1) {?>
												<option value="move_to_page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_move_to_page, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php }?>
											<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('categories')) > 1) {?>
												<option value="move_to_category"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_move_to_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php }?>
											<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('brands')) > 0) {?>
												<option value="move_to_brand"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_specify_brand, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php }?>
											<option value="change_price"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_change_price, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="delete"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
										</select>
									</div>
									<div id="move_to_page" class="row row-cols-md-auto align-items-center ms-3 d-none js-hide-block">
										<div class="col-12">
											<select name="target_page" class="selectpicker">
												<?php
$__section_target_page_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('pages_count')) ? count($_loop) : max(0, (int) $_loop));
$__section_target_page_0_total = $__section_target_page_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_target_page'] = new \Smarty\Variable(array());
if ($__section_target_page_0_total !== 0) {
for ($__section_target_page_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] = 0; $__section_target_page_0_iteration <= $__section_target_page_0_total; $__section_target_page_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']++){
?>
													<option value="<?php echo ($_smarty_tpl->getValue('__smarty_section_target_page')['index'] ?? null)+1;?>
"><?php echo ($_smarty_tpl->getValue('__smarty_section_target_page')['index'] ?? null)+1;?>
</option>
												<?php
}
}
?>
											</select>
										</div>
									</div>
									<div id="move_to_category" class="row row-cols-md-auto align-items-center ms-3 d-none js-hide-block">
										<div class="col-12">
											<select name="target_category" class="selectpicker" data-live-search="true" data-size="5">
												
												<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select_btn', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

											</select>
										</div>
									</div>
									<div id="move_to_brand" class="row row-cols-md-auto align-items-center ms-3 d-none js-hide-block">
										<div class="col-12">
											<select name="target_brand" class="selectpicker" data-live-search="true" data-size="5">
												<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_brands'), 'b');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach5DoElse = false;
?>
													<option value="<?php echo $_smarty_tpl->getValue('b')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
									<div id="change_price" class="row row-cols-md-auto align-items-center ms-3 d-none js-hide-block">
										<div class="col-md-5 col-lg-5 ps-0 ps-xl-1">
											<select name="op_type" class="selectpicker">
												<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_add_subtract, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<option value="1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_percent, ENT_QUOTES, 'UTF-8', true);?>
</option>
											</select>
										</div>
										<div class="col-md-5 col-lg-5 ps-0 ps-xl-2">
											<input type="text" name="value" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->enter_numeric_value, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
										<div class="col-md-2 col-lg-2 ps-0 ps-xl-2">
											<div class="form-check mb-1 mt-1 me-sm-2">
												<input class="form-check-input js-check-all-single" type="checkbox" checked="checked" name="save_old" value="1" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->save_old_price, ENT_QUOTES, 'UTF-8', true);?>
">
												<label class="form-check-label"></label>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div>


	<?php echo '<script'; ?>
>
		$(function() {
			$(document).on('click', '.js-variants-toggle', function() {
				$(this).find('.js-icon-arrow').toggleClass('rotate-180');
				$(this).parents('.js-row').find('.products-variants-block').slideToggle();
			});

			$(document).on('change', '.js-action-block select.products-action', function() {
				var elem = $(this).find('option:selected').val();
				$('.js-hide-block').addClass('d-none');
				if ($('#' + elem).length > 0) {
					$('#' + elem).removeClass('d-none');
				}
			});

			$(document).on('click', '.js-copy', function() {
				const checkbox = $(this).closest('.js-row').find('input[type="checkbox"][name*="check"]');
				checkbox.prop('checked', true).trigger('change');
				$(this).closest('.js-form-list').find('select[name="action"] option[value="duplicate"]').prop('selected', true);
				$(this).closest('.js-form-list').submit();
			});

			$('input[name*=stock]').focus(function() {
				if ($(this).val() == '∞')
					$(this).val('');
				return false;
			});

			$('input[name*=stock]').blur(function() {
				if ($(this).val() == '')
					$(this).val('∞');
			});
		});
	<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_category_select_185202494169172e6e8924c3_21246590 */
if (!function_exists('smarty_template_function_category_select_185202494169172e6e8924c3_21246590')) {
function smarty_template_function_category_select_185202494169172e6e8924c3_21246590(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'category_select','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
										<option value='<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>$_smarty_tpl->getValue('c')->id), $_smarty_tpl);?>
' <?php if ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->id == $_smarty_tpl->getValue('c')->id) {?>selected<?php }?>>
											<?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>

										</option>
										<?php if ($_smarty_tpl->getValue('c')->subcategories) {?>
											<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('c')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

										<?php }?>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<?php
}}
/*/ smarty_template_function_category_select_185202494169172e6e8924c3_21246590 */
/* smarty_template_function_category_select_btn_185202494169172e6e8924c3_21246590 */
if (!function_exists('smarty_template_function_category_select_btn_185202494169172e6e8924c3_21246590')) {
function smarty_template_function_category_select_btn_185202494169172e6e8924c3_21246590(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'category_select_btn','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

													<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach4DoElse = false;
?>
														<option value="<?php echo $_smarty_tpl->getValue('category')->id;?>
"><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
														<?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
															<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select_btn', array('categories'=>$_smarty_tpl->getValue('category')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

														<?php }?>
													<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
												<?php
}}
/*/ smarty_template_function_category_select_btn_185202494169172e6e8924c3_21246590 */
}
