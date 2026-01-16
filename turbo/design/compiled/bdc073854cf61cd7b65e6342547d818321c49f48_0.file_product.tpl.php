<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:28:16
  from 'file:product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e700fccc2_61445585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc073854cf61cd7b65e6342547d818321c49f48' => 
    array (
      0 => 'product.tpl',
      1 => 1733440600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 10,
    'file:tinymce_init.tpl' => 1,
  ),
))) {
function content_69172e700fccc2_61445585 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/bdc073854cf61cd7b65e6342547d818321c49f48_0.file_product.tpl.php',
    'uid' => 'bdc073854cf61cd7b65e6342547d818321c49f48',
    'call_name' => 'smarty_template_function_category_select_91473584169172e7006a487_10519075',
  ),
));
if ($_smarty_tpl->getValue('product')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('product')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->product_new, false, 32);
}?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php if (!$_smarty_tpl->getValue('product')->id) {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_add, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
	</h1>
	<?php if ($_smarty_tpl->getValue('product')->id) {?>
		<div class="d-grid d-sm-block mt-2 mt-md-0">
			<a class="btn btn-primary" target="_blank" href="../<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
">
				<i class="align-middle mt-n1" data-feather="external-link"></i>
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_open, ENT_QUOTES, 'UTF-8', true);?>

			</a>
		</div>
	<?php }?>
</div>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_updated, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_success'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<?php if ($_GET['return']) {?>
						<a class="alert-link fw-normal btn-return text-decoration-none me-5" href="<?php echo $_GET['return'];?>
">
							<i class="align-middle mt-n1" data-feather="corner-up-left"></i>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_back, ENT_QUOTES, 'UTF-8', true);?>

						</a>
					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'url_exists') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_exists, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'empty_name') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_name, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'empty_url') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_url, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'url_wrong') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'empty_categories') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_no_category, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'invalid_file') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_invalid_file_type, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form method="post" id="product" enctype="multipart/form-data" class="js-fast-button">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->getValue('lang_id');?>
">
	<div class="row g-2">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="translate-container mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<input class="form-control translate-input" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
							<div class="row">
								<div class="col-xs-12 col-lg-8 col-md-12">
									<div class="mb-3">
										<div class="input-group">
											<span class="input-group-text">URL</span>
											<input name="url" class="js-meta-field form-control js-url" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->url, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->getValue('product')->id) {?>readonly<?php }?>>
											<input type="checkbox" id="block-translit" class="d-none" value="1" <?php if ($_smarty_tpl->getValue('product')->id) {?>checked=""<?php }?>>
											<span class="input-group-text js-disable-url">
												<?php if ($_smarty_tpl->getValue('product')->id) {?>
													<i class="url-lock"></i>
												<?php } else { ?>
													<i class="url-lock url-unlock"></i>
												<?php }?>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div class="d-flex justify-content-center align-content-center flex-wrap flex-md-column h-100">
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="visible" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('product')->visible) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="visible"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="featured" name="featured" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('product')->featured) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="featured"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="new" name="is_new" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('product')->is_new) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="new"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="hit" name="is_hit" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('product')->is_hit) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="hit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_hit, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="export" name="to_xml" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('product')->to_xml) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="export"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_xml, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row gx-2">
		<div class="col-lg-8 col-md-12">
			<div class="card mh-315px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_images, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-12 mb-1">
								<ul class="js-droplist-wrap product-images-list sortable" data-image="product">
									<li class="js-dropzone dropzone-block">
										<i class="align-middle" data-feather="plus"></i>
										<input type="file" name="dropped_images[]" multiple class="dropinput">
									</li>
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_images'), 'image');
$_smarty_tpl->getVariable('image')->iteration = 0;
$_smarty_tpl->getVariable('image')->index = -1;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('image')->iteration++;
$_smarty_tpl->getVariable('image')->index++;
$_smarty_tpl->getVariable('image')->first = !$_smarty_tpl->getVariable('image')->index;
$foreach0Backup = clone $_smarty_tpl->getVariable('image');
?>
										<li class="product-image-item <?php if ($_smarty_tpl->getVariable('image')->first) {?>first-image<?php }?> <?php if ($_smarty_tpl->getVariable('image')->iteration > 4) {?>js-toggle-hidden d-none<?php }?> js-sort-item">
											<button type="button" class="js-remove-image remove-image"></button>
											<i class="move-zone">
												<?php if ($_smarty_tpl->getValue('image')) {?>
													<img class="product-icon" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,200,100);?>
" alt="">
												<?php } else { ?>
													<i class="align-middle" data-feather="camera"></i>
												<?php }?>
												<input type="hidden" name='images[]' value="<?php echo $_smarty_tpl->getValue('image')->id;?>
">
											</i>
										</li>
									<?php
$_smarty_tpl->setVariable('image', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									<li class="js-new-image-item product-image-item js-sort-item d-none">
										<button type="button" class="js-remove-image remove-image"></button>
										<img src="" alt="">
										<input type="hidden" name='images_urls[]' value="">
									</li>
								</ul>
							</div>
							<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_images')) > 4) {?>
								<div class="col-12">
									<a href="javascript:;" class="js-icon-arrow card-link js-show-images text-body"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_images_all, ENT_QUOTES, 'UTF-8', true);?>
<i class="align-middle chevron" data-feather="chevron-down"></i></a>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="card mh-315px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_additional_settings, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="mb-3">
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_sale_to, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<input id="sale-to" name="sale_to" class="form-control flatpickr-datetime" type="text" value="<?php echo $_smarty_tpl->getValue('product')->sale_to;?>
">
						</div>
						<div class="mb-3" <?php if (!$_smarty_tpl->getValue('brands')) {?>style="display:none;"<?php }?>>
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brand, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<select name="brand_id" class="selectpicker mb-1 js-meta-brand" data-live-search="true">
								<option value="0" <?php if (!$_smarty_tpl->getValue('product')->brand_id) {?>selected=""<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'brand');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand')->value) {
$foreach1DoElse = false;
?>
									<option value="<?php echo $_smarty_tpl->getValue('brand')->id;?>
" <?php if ($_smarty_tpl->getValue('product')->brand_id == $_smarty_tpl->getValue('brand')->id) {?>selected=""<?php }?> data-brand-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="mb-0" <?php if (!$_smarty_tpl->getValue('categories')) {?>style="display:none;"<?php }?>>
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<fieldset class="form-group">
								<div id="product-categories">
									<div class="product-cats" id="product-cats">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_categories'), 'product_category', false, NULL, 'categories', array (
  'first' => true,
  'index' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_category')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'];
?>
											<div class="list">
												<div class="input-group mb-3">
													<select name="categories[]" class="selectpicker select-control js-meta-categories" data-live-search="true">
														
														<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories'),'selected'=>$_smarty_tpl->getValue('product_category')), true);?>

													</select>
													<button <?php if (!($_smarty_tpl->getValue('__smarty_foreach_categories')['first'] ?? null)) {?>style="display:none;" <?php }?> class="add btn input-group-addon-categories" type="button"><i class="align-middle" data-feather="plus"></i></button>
													<button <?php if (($_smarty_tpl->getValue('__smarty_foreach_categories')['first'] ?? null)) {?>style="display:none;" <?php }?> class="delete btn input-group-addon-categories" type="button"><i class="align-middle" data-feather="minus"></i></button>
												</div>
											</div>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0 translate-button-card"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_options, ENT_QUOTES, 'UTF-8', true);?>
 <span role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></h5>
				</div>
				<div class="collapse-card variants-wrapper">
					<div class="card-body">
						<div class="turbo-list variants-list scrollbar-variants">
							<div class="turbo-list-body sortable variants-listadd">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_variants'), 'variant');
$_smarty_tpl->getVariable('variant')->index = -1;
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach4DoElse = false;
$_smarty_tpl->getVariable('variant')->index++;
$_smarty_tpl->getVariable('variant')->first = !$_smarty_tpl->getVariable('variant')->index;
$foreach4Backup = clone $_smarty_tpl->getVariable('variant');
?>
									<div class="turbo-list-body-item variants-list-item">
										<div class="turbo-list-row <?php if ($_smarty_tpl->getValue('variant')->attachment || $_smarty_tpl->getValue('variant')->attachment_url) {?>mb-0<?php }?>">
											<div class="turbo-list-boding variants-item-drag">
												<div class="form-label"></div>
												<div class="move-zone">
													<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
												</div>
											</div>
											<div class="turbo-list-boding variants-item-sku">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sku, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<input class="form-control" name="variants[sku][]" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->sku, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding variants-item-name translate-container">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
												<input name="variants[id][]" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->id, ENT_QUOTES, 'UTF-8', true);?>
">
												<input class="form-control translate-input-card translate-input" name="variants[name][]" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->name, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding variants-item-height color-picker">
												<div class="form-label"></div>
												<input name="variants[color_code][]" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->color_code, ENT_QUOTES, 'UTF-8', true);?>
">
												<div class="add-on colorPicker-picker" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->select_color, ENT_QUOTES, 'UTF-8', true);?>
"></div>
											</div>
											<div class="turbo-list-boding variants-item-color translate-container">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_color, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
												<input name="variants[color][]" class="form-control translate-input-card translate-input" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->color, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding variants-item-price">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
, <?php if ($_smarty_tpl->getValue('variant')->currency_id && $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('variant')->currency_id]) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('variant')->currency_id]->sign, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->getValue('currency')->sign;
}?></div>
												<input class="form-control" name="variants[price][]" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->oprice, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding variants-item-discount">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_old_price, ENT_QUOTES, 'UTF-8', true);?>
, <?php if ($_smarty_tpl->getValue('variant')->currency_id && $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('variant')->currency_id]) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('variant')->currency_id]->sign, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->getValue('currency')->sign;
}?></div>
												<input class="form-control text-secondary" name="variants[compare_price][]" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->compare_oprice, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding variants-item-currency">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<select name="variants[currency_id][]" class="selectpicker">
													<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'c');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach5DoElse = false;
?>
														<option value="<?php echo $_smarty_tpl->getValue('c')->id;?>
" <?php if ($_smarty_tpl->getValue('c')->id == $_smarty_tpl->getValue('variant')->currency_id) {?>selected="" <?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->code, ENT_QUOTES, 'UTF-8', true);?>
</option>
													<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
												</select>
											</div>
											<div class="turbo-list-boding variants-item-weight">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_weight, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('settings')->weight_units;?>
</div>
												<input class="form-control" name="variants[weight][]" type="text" value="<?php if ($_smarty_tpl->getValue('variant')->weight) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->weight, ENT_QUOTES, 'UTF-8', true);
}?>">
											</div>
											<div class="turbo-list-boding variants-item-amount">
												<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<div class="input-group">
													<input class="form-control" name="variants[stock][]" type="text" value="<?php if ($_smarty_tpl->getValue('variant')->infinity || $_smarty_tpl->getValue('variant')->stock == '') {?>∞<?php } else {
echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->stock, ENT_QUOTES, 'UTF-8', true);
}?>">
													<span class="input-group-text">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												</div>
											</div>
											<div class="turbo-list-boding variants-item-file">
												<div class="form-label"></div>
												<button type="button" class="add-attachment btn-attachment">
													<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_attachment, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="download"></i>
													</span>
												</button>
											</div>
											<?php if (!$_smarty_tpl->getVariable('variant')->first) {?>
												<div class="turbo-list-boding turbo-list-delete remove-variant">
													<div class="form-label"></div>
													<button type="button" class="btn-delete js-remove-variant">
														<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
															<i class="align-middle" data-feather="trash-2"></i>
														</span>
													</button>
												</div>
											<?php }?>
										</div>
										<div class="turbo-list-row browse-attachment" <?php if (!$_smarty_tpl->getValue('variant')->attachment && !$_smarty_tpl->getValue('variant')->attachment_url) {?>style="display:none;"<?php }?>>
											<div class="turbo-list-boding variants-item-drag"></div>
											<div class="turbo-list-boding attachment-url">
												<div class="form-label mb-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_file_link, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<input class="form-control" type="text" name="variants[attachment_url][]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('variant')->attachment_url, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding download-attachment" <?php if ($_smarty_tpl->getValue('variant')->attachment) {?>style="display:none;" <?php }?>>
												<div for="download-attachment" class="form-label mb-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_attachment, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<input class="form-control" type="file" name="attachment[]" id="download-attachment">
											</div>
											<?php if ($_smarty_tpl->getValue('variant')->attachment) {?>
												<div class="turbo-list-boding">
													<div class="form-label"></div>
													<input type="hidden" name="delete_attachment[]">
													<span class=js-attachment-name><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('variant')->attachment,25,'...',false,true);?>
</span>
													<button type="button" class="btn-delete js-remove-attachment">
														<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
															<i class="align-middle" data-feather="trash-2"></i>
														</span>
													</button>
												</div>
											<?php }?>
										</div>
									</div>
								<?php
$_smarty_tpl->setVariable('variant', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<div class="turbo-list-body-item variants-list-item js-new-row-variant" style="display:none;">
									<div class="turbo-list-row">
										<div class="turbo-list-boding variants-item-drag">
											<div class="form-label"></div>
											<div class="move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
										</div>
										<div class="turbo-list-boding variants-item-sku">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sku, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input class="form-control" name="variants[sku][]" type="text" value="">
										</div>
										<div class="turbo-list-boding variants-item-name translate-container">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
											<input name="variants[id][]" type="hidden" value="">
											<input class="form-control translate-input-card translate-input" name="variants[name][]" type="text" value="">
										</div>
										<div class="turbo-list-boding variants-item-height">
											<div class="form-label"></div>
											<input name="variants[color_code][]" type="hidden" value="">
											<div class="add-on colorPicker-picker" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->select_color, ENT_QUOTES, 'UTF-8', true);?>
"></div>
										</div>
										<div class="turbo-list-boding variants-item-color translate-container">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_color, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
											<input name="variants[color][]" class="form-control translate-input-card translate-input" type="text" value="">
										</div>
										<div class="turbo-list-boding variants-item-price">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
</div>
											<input class="form-control" name="variants[price][]" type="text" value="">
										</div>
										<div class="turbo-list-boding variants-item-discount">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_old_price, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
</div>
											<input class="form-control" name="variants[compare_price][]" type="text" value="">
										</div>
										<div class="turbo-list-boding variants-item-currency">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<select name="variants[currency_id][]">
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'c');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach6DoElse = false;
?>
													<option value="<?php echo $_smarty_tpl->getValue('c')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->code, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</select>
										</div>
										<div class="turbo-list-boding variants-item-weight">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_weight, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('settings')->weight_units;?>
</div>
											<input class="form-control" name="variants[weight][]" type="text" value="">
										</div>
										<div class="turbo-list-boding variants-item-amount">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<div class="input-group">
												<input class="form-control" name="variants[stock][]" type="text" value="∞">
												<span class="input-group-text">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>

												</span>
											</div>
										</div>
										<div class="turbo-list-boding variants-item-file">
											<div class="form-label"></div>
											<button type="button" class="add-attachment btn-attachment">
												<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_attachment, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="download"></i>
												</span>
											</button>
										</div>
										<div class="turbo-list-boding turbo-list-delete remove-variant">
											<div class="form-label"></div>
											<button type="button" class="btn-delete js-remove-variant">
												<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="trash-2"></i>
												</span>
											</button>
										</div>
									</div>
									<div class="turbo-list-row browse-attachment" style="display:none;">
										<div class="turbo-list-boding variants-item-drag"></div>
										<div class="turbo-list-boding attachment-url">
											<div class="form-label mb-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_file_link, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input class="form-control" type="text" name="variants[attachment_url][]" value="">
										</div>
										<div class="turbo-list-boding download-attachment">
											<div class="form-label mb-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_attachment, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input class="form-control" type="file" name="attachment[]">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box_btn_heading mt-3">
							<button type="button" class="btn btn-primary js-add-variant">
								<i class="align-middle" data-feather="plus"></i>
								<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_add_option, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row gx-2">
		<div class="col-lg-6 col-md-12">
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0 translate-button-card"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_features, ENT_QUOTES, 'UTF-8', true);?>
 <span role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></h5>
				</div>
				<div class="collapse-card">
					<div class="card-body features-wrap js-features-wrap">
						<?php if ($_smarty_tpl->getValue('features')) {?>
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'feature');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach7DoElse = false;
?>
								<div class="js-feature-block-<?php echo $_smarty_tpl->getValue('feature')->id;?>
">
									<?php $_smarty_tpl->assign('feature_id', $_smarty_tpl->getValue('feature')->id, false, NULL);?>
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (($tmp = $_smarty_tpl->getValue('options')[$_smarty_tpl->getValue('feature_id')] ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'option');
$_smarty_tpl->getVariable('option')->index = -1;
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach8DoElse = false;
$_smarty_tpl->getVariable('option')->index++;
$_smarty_tpl->getVariable('option')->first = !$_smarty_tpl->getVariable('option')->index;
$foreach8Backup = clone $_smarty_tpl->getVariable('option');
?>
										<div class="feature-row clearfix">
											<div class="feature-name <?php if (!$_smarty_tpl->getVariable('option')->first) {?>additional-values feature-value-mobile<?php }?>">
												<?php if ($_smarty_tpl->getVariable('option')->first) {?>
													<div title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>
">
														<a href="index.php?module=FeatureAdmin&id=<?php echo $_smarty_tpl->getValue('feature')->id;?>
" target="_blank">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>

														</a>
													</div>
												<?php }?>
											</div>
											<input <?php if ($_smarty_tpl->getValue('lang_id') == $_smarty_tpl->getValue('first_lang') && $_smarty_tpl->getValue('option')->id) {?>class="js-id-option" <?php }?> type="hidden" name="options_id[<?php echo $_smarty_tpl->getValue('feature_id');?>
][]" value="<?php echo $_smarty_tpl->getValue('option')->id;?>
">
											<div class="feature-value <?php if ($_smarty_tpl->getValue('feature')->is_color) {?>color-picker<?php }?>">
												<input class="feature-input js-auto-option <?php if (!$_smarty_tpl->getVariable('option')->first) {?>feature-input-single<?php }?> translate-input-card" data-id="<?php echo $_smarty_tpl->getValue('feature_id');?>
" data-color="<?php echo $_smarty_tpl->getValue('feature')->is_color;?>
" type="text" name="options_values[<?php echo $_smarty_tpl->getValue('feature_id');?>
][]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
">
												<?php if ($_smarty_tpl->getValue('feature')->is_color) {?><div class="add-on colorPicker-picker"></div><?php }?>
												<button type="button" class="btn <?php if ($_smarty_tpl->getVariable('option')->first) {?>btn-feature <?php if ($_smarty_tpl->getValue('feature')->is_color) {?>js-add-color<?php } else { ?>js-add<?php }?> <?php } else { ?>btn-minus-feature js-remove<?php }?> js-feature-multi-values feature-multi-values">
													<span class="js-plus" <?php if (!$_smarty_tpl->getVariable('option')->first) {?>style="display: none;" <?php }?>>
														<i class="align-middle" data-feather="plus"></i>
													</span>
													<span class="js-minus" <?php if ($_smarty_tpl->getVariable('option')->first) {?>style="display: none;" <?php }?>>
														<i class="align-middle" data-feather="minus"></i>
													</span>
												</button>
											</div>
										</div>
									<?php
$_smarty_tpl->setVariable('option', $foreach8Backup);
}
if ($foreach8DoElse) {
?>
										<div class="feature-row clearfix">
											<div class="feature-name">
												<div title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>
">
													<a href="index.php?module=FeatureAdmin&id=<?php echo $_smarty_tpl->getValue('feature')->id;?>
" target="_blank">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>

													</a>
												</div>
											</div>
											<input class="js-id-option" type="hidden" name="options_id[<?php echo $_smarty_tpl->getValue('feature_id');?>
][]" value="">
											<div class="feature-value <?php if ($_smarty_tpl->getValue('feature')->is_color) {?>color-picker<?php }?>">
												<input class="feature-input js-auto-option translate-input-card" data-id="<?php echo $_smarty_tpl->getValue('feature_id');?>
" data-color="<?php echo $_smarty_tpl->getValue('feature')->is_color;?>
" type="text" name="options_values[<?php echo $_smarty_tpl->getValue('feature_id');?>
][]" value="">
												<?php if ($_smarty_tpl->getValue('feature')->is_color) {?><div class="add-on colorPicker-picker"></div><?php }?>
												<button type="button" class="btn btn-feature <?php if ($_smarty_tpl->getValue('feature')->is_color) {?>js-add-color<?php } else { ?>js-add<?php }?> js-feature-multi-values feature-multi-values">
													<span class="js-plus">
														<i class="align-middle" data-feather="plus"></i>
													</span>
													<span class="js-minus" style="display: none">
														<i class="align-middle" data-feather="minus"></i>
													</span>
												</button>
											</div>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						<?php }?>
						<div class="js-new-feature input-group new-feature-row" style="display:none;">
							<input type="text" class="form-control new-feature-name" name="new_features_names[]" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_features_enter, ENT_QUOTES, 'UTF-8', true);?>
">
							<input type="text" class="form-control new-feature-value" name="new_features_values[]" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_features_value_enter, ENT_QUOTES, 'UTF-8', true);?>
">
							<button class="btn btn-delete-new-feature js-delete-feature" type="button">
								<i class="align-middle" data-feather="minus"></i>
							</button>
						</div>
						<div class="js-new-feature-category" style="display:none;">
							<div class="feature-row clearfix">
								<div class="feature-name">
									<div title="" class="js-feature-name">
										<a href="" target="_blank"></a>
									</div>
								</div>
								<input class="js-id-option" type="hidden" name="" value="">
								<div class="feature-value">
									<input class="feature-input js-auto-option translate-input-card" data-id="" data-color="" type="text" name="" value="">
									<button type="button" class="btn btn-feature js-add js-feature-multi-values feature-multi-values">
										<span class="js-plus">
											<i class="align-middle" data-feather="plus"></i>
										</span>
										<span class="js-minus" style="display: none">
											<i class="align-middle" data-feather="minus"></i>
										</span>
									</button>
								</div>
							</div>
						</div>
						<div class="js-new-value" style="display:none;">
							<div class="feature-row clearfix">
								<div class="feature-name feature-value-mobile">
									<div title="" class="js-feature-name">
										<a href="" target="_blank"></a>
									</div>
								</div>
								<input class="js-id-option" type="hidden" name="" value="">
								<div class="feature-value">
									<input class="feature-input js-auto-option translate-input-card" data-id="" data-color="" type="text" name="" value="">
									<button type="button" class="btn btn-feature js-add js-feature-multi-values feature-multi-values">
										<span class="js-plus">
											<i class="align-middle" data-feather="plus"></i>
										</span>
										<span class="js-minus" style="display: none">
											<i class="align-middle" data-feather="minus"></i>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body mt-nb2">
						<button type="button" class="btn btn-primary js-add-feature">
							<i class="align-middle" data-feather="plus"></i>
							<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_feature_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_related, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="turbo-list turbo-related-list">
							<div class="turbo-list-body related-products sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('related_products'), 'related_product');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('related_product')->value) {
$foreach9DoElse = false;
?>
									<div class="js-row turbo turbo-list-body-item js-sort-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-drag move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
											<div class="turbo-list-boding turbo-list-related-photo">
												<input type="hidden" name="related_products[]" value="<?php echo $_smarty_tpl->getValue('related_product')->id;?>
">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('related_product')->id), $_smarty_tpl);?>
">
													<?php if ((null !== ($_smarty_tpl->getValue('related_product')->images[0] ?? null))) {?>
														<img class="product-icon" src='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('related_product')->images[0]->filename,40,40);?>
'>
													<?php } else { ?>
														<i class="align-middle text-muted" data-feather="camera"></i>
													<?php }?>
												</a>
											</div>
											<div class="turbo-list-boding turbo-list-related-name">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('related_product')->id), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
											</div>
											<div class="turbo-list-boding turbo-list-delete">
												<button type="button" class="btn-delete js-remove-item">
													<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="trash-2"></i>
													</span>
												</button>
											</div>
										</div>
									</div>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<div id="new-related-product" class="js-row turbo turbo-list-body-item js-sort-item" style="display:none;">
									<div class="turbo-list-row">
										<div class="turbo-list-boding turbo-list-drag move-zone">
											<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
										</div>
										<div class="turbo-list-boding turbo-list-related-photo">
											<input type="hidden" name="related_products[]" value="">
											<img class="product-icon" src="">
										</div>
										<div class="turbo-list-boding turbo-list-related-name">
											<a href="" class="fw-bold text-body text-decoration-none related-product-name"></a>
										</div>
										<div class="turbo-list-boding turbo-list-delete">
											<button type="button" class="btn-delete js-remove-item">
												<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="trash-2"></i>
												</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-label mt-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_related_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="autocomplete-arrow">
							<input type="text" name="related" id="related-products" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_add_product, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
					</div>
				</div>
			</div>
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_recommended, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="turbo-list turbo-recommended-list">
							<div class="turbo-list-body recommended-products sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('recommended_products'), 'recommended_product');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('recommended_product')->value) {
$foreach10DoElse = false;
?>
									<div class="js-row turbo turbo-list-body-item js-sort-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-drag move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
											<div class="turbo-list-boding turbo-list-recommended-photo">
												<input type="hidden" name="recommended_products[]" value="<?php echo $_smarty_tpl->getValue('recommended_product')->id;?>
">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('recommended_product')->id), $_smarty_tpl);?>
">
													<?php if ((null !== ($_smarty_tpl->getValue('recommended_product')->images[0] ?? null))) {?>
														<img class="product-icon" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('recommended_product')->images[0]->filename,40,40);?>
">
													<?php } else { ?>
														<i class="align-middle text-secondary" data-feather="camera"></i>
													<?php }?>
												</a>
											</div>
											<div class="turbo-list-boding turbo-list-recommended-name">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('recommended_product')->id), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('recommended_product')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
											</div>
											<div class="turbo-list-boding turbo-list-delete">
												<button type="button" class="btn-delete js-remove-item">
													<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="trash-2"></i>
													</span>
												</button>
											</div>
										</div>
									</div>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<div id="new-recommended-product" class="js-row turbo turbo-list-body-item js-sort-item" style="display:none;">
									<div class="turbo-list-row">
										<div class="turbo-list-boding turbo-list-drag move-zone">
											<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
										</div>
										<div class="turbo-list-boding turbo-list-recommended-photo">
											<input type="hidden" name="recommended_products[]" value="">
											<img class="product-icon" src="">
										</div>
										<div class="turbo-list-boding turbo-list-recommended-name">
											<a href="" class="fw-bold text-body text-decoration-none recommended-product-name"></a>
										</div>
										<div class="turbo-list-boding turbo-list-delete">
											<button type="button" class="btn-delete js-remove-item">
												<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="trash-2"></i>
												</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-label mt-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_recommended_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="autocomplete-arrow">
							<input type="text" name="recommended" id="recommended-products" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_add_product, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
					</div>
				</div>
			</div>
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_rating, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<label for="ratingRange" class="form-label">
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_rating_value, ENT_QUOTES, 'UTF-8', true);?>

							<span class="js-show-rating"><?php echo $_smarty_tpl->getValue('product')->rating;?>
</span>
						</label>
						<div class="raiting-boxed mb-4">
							<input class="js-rating-value" type="hidden" value="<?php echo $_smarty_tpl->getValue('product')->rating;?>
" name="rating">
							<input class="js-rating form-range" id="ratingRange" type="range" min="1" max="5" step="0.1" value="<?php echo $_smarty_tpl->getValue('product')->rating;?>
">
							<div class="raiting-range-number">
								<span class="float-start">1</span>
								<span class="float-end">5</span>
							</div>
						</div>
						<div class="mb-1">
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_rating_number, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<input type="text" class="form-control" name="votes" value="<?php echo $_smarty_tpl->getValue('product')->votes;?>
">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row gx-2">
		<div class="col-lg-6 col-md-12">
			<div class="card mh-270px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_files, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="turbo-list turbo-files-list mb-3">
							<div class="turbo-list-body sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cms_files'), 'file');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach11DoElse = false;
?>
									<div class="js-row turbo turbo-list-body-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-drag move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
											<div class="turbo-list-boding">
												<input type="hidden" name="files[id][]" value="<?php echo $_smarty_tpl->getValue('file')->id;?>
">
												<input class="form-control" type="text" name="files[name][]" value="<?php echo $_smarty_tpl->getValue('file')->name;?>
">
											</div>
											<div class="turbo-list-boding turbo-list-files-name">
												<a class="fw-bold text-body text-decoration-none" href="../<?php echo $_smarty_tpl->getValue('config')->cms_files_dir;
echo htmlspecialchars((string)$_smarty_tpl->getValue('file')->filename, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('file')->filename, ENT_QUOTES, 'UTF-8', true);?>
</a>
											</div>
											<div class="turbo-list-boding turbo-list-delete">
												<button type="button" class="btn-delete js-remove-item">
													<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="trash-2"></i>
													</span>
												</button>
											</div>
										</div>
									</div>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</div>
						</div>
						<input class="form-control" name="files[]" id="file" type="file" multiple accept="pdf/txt/doc/docx">
						<div for="file" class="form-label mt-1">
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->supported_formats, ENT_QUOTES, 'UTF-8', true);?>
: pdf, txt, doc, docx. <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_maxsize, ENT_QUOTES, 'UTF-8', true);?>

							<?php if ($_smarty_tpl->getValue('config')->max_upload_filesize > 1024*1024) {?>
								<?php echo $_smarty_tpl->getValue('config')->max_upload_filesize/1024/round((float) 1024, (int) '2', (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_mb, ENT_QUOTES, 'UTF-8', true);?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->getValue('config')->max_upload_filesize/round((float) 1024, (int) '2', (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_kb, ENT_QUOTES, 'UTF-8', true);?>

							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="card mh-270px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_video, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body videos">
						<div class="turbo-list turbo-video-list mb-3">
							<div class="turbo-list-body sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_videos'), 'video');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach12DoElse = false;
?>
									<div class="js-row turbo turbo-list-body-item js-sort-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-drag move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
											<div class="turbo-list-boding turbo-list-video-photo">
												<a href="https://www.youtube.com/embed/<?php echo $_smarty_tpl->getValue('video')->vid;?>
" data-fancybox class="iframe fancybox.iframe">
													<img class="product-icon" src="https://img.youtube.com/vi/<?php echo $_smarty_tpl->getValue('video')->vid;?>
/mqdefault.jpg">
												</a>
											</div>
											<div class="turbo-list-boding turbo-list-video-name">
												<input name="videos[]" value="<?php echo $_smarty_tpl->getValue('video')->link;?>
" class="form-control">
											</div>
											<div class="turbo-list-boding turbo-list-delete">
												<button type="button" class="btn-delete js-remove-item">
													<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="trash-2"></i>
													</span>
												</button>
											</div>
										</div>
									</div>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</div>
						</div>
						<div id="new-video" class="js-row turbo turbo-list-body-item js-sort-item" style="display:none;">
							<div class="turbo-list-row">
								<div class="turbo-list-boding turbo-list-drag move-zone">
									<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
								</div>
								<div class="turbo-list-boding turbo-list-video-photo"></div>
								<div class="turbo-list-boding turbo-list-video-name">
									<input name="videos[]" class="form-control" value="" placeholder="https://www.youtube.com/watch?v=abc">
								</div>
								<div class="turbo-list-boding turbo-list-delete">
									<button type="button" class="btn-delete js-remove-item delete">
										<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
											<i class="align-middle" data-feather="trash-2"></i>
										</span>
									</button>
								</div>
							</div>
						</div>
						<div class="box_btn_heading">
							<button type="button" class="btn  btn-primary js-add-video">
								<i class="align-middle" data-feather="plus"></i>
								<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_add_video, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_metatags, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="translate-container mb-3">
									<div class="form-label translate-button">Meta-title <span id="js-meta-title-counter"></span> <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="meta_title" class="form-control js-meta-field mb-h translate-input" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="translate-container mb-3">
									<div class="form-label translate-button">Meta-keywords <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="meta_keywords" class="form-control js-meta-field mb-h translate-input" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="translate-container col-lg-6 col-md-6">
								<div class="form-label">Meta-description <span id="js-meta-description-counter"></span> <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<textarea name="meta_description" class="form-control turbo-textarea js-meta-field translate-input"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item" role="presentation"><a class="nav-link active" href="#tab-1" data-bs-toggle="tab" role="tab" aria-selected="true"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_short_description, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#tab-2" data-bs-toggle="tab" role="tab" aria-selected="false" tabindex="-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="tab-1" role="tabpanel">
						<textarea name="annotation" id="annotation" class="editor"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					</div>
					<div class="tab-pane" id="tab-2" role="tabpanel">
						<textarea id="js-editor" name="body" class="editor js-editor-class"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->body, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="d-grid d-sm-block">
				<button type="submit" class="btn btn-primary float-end mt-n2">
					<i class="align-middle" data-feather="check"></i>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

				</button>
			</div>
		</div>
	</div>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"autocomplete",'priority'=>99,'include'=>array("turbo/design/js/autocomplete/jquery.autocomplete-min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"autocomplete",'priority'=>99,'include'=>array("turbo/design/js/autocomplete/jquery.autocomplete-min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"colorpicker",'include'=>array("turbo/design/js/colorpicker/css/bootstrap-colorpicker.min.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"colorpicker",'include'=>array("turbo/design/js/colorpicker/css/bootstrap-colorpicker.min.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"colorpicker",'priority'=>99,'include'=>array("turbo/design/js/colorpicker/js/bootstrap-colorpicker.min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"colorpicker",'priority'=>99,'include'=>array("turbo/design/js/colorpicker/js/bootstrap-colorpicker.min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"fancybox",'include'=>array("turbo/design/js/fancybox/fancybox.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"fancybox",'include'=>array("turbo/design/js/fancybox/fancybox.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"fancybox",'priority'=>99,'include'=>array("turbo/design/js/fancybox/fancybox.umd.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"fancybox",'priority'=>99,'include'=>array("turbo/design/js/fancybox/fancybox.umd.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php echo '<script'; ?>
>
	Fancybox.bind("[data-fancybox]", {
		Thumbs: {
			type: false,
		},
	});
<?php echo '</script'; ?>
>


	<?php echo '<script'; ?>
>
		$(window).on("load", function() {
			$(document).ready(function() {
				var targetLang = '<?php if ($_smarty_tpl->getValue('lang_label') == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('lang_label');
}?>';

				$('.translate-button-card').on('click', function() {
					var cardElement = $(this).closest('.card');
					var inputElements = cardElement.find('.translate-input-card');

					inputElements.each(function() {
						var inputElement = $(this);
						var text = inputElement.val();

						if (text.trim() !== '') {
							$.post('ajax/translate.php', {
								'source_lang': 'auto',
								'target_lang': targetLang,
								'text': text
							}, function(data) {
								inputElement.val(data);
							});
						}
					});
				});
			});

			$(document).on("click", ".js-show-images", function() {
				$(".js-toggle-hidden").toggleClass("d-none");
				$('.js-icon-arrow').toggleClass('rotate-180');
			});

			flatpickr(".flatpickr-datetime", {
				enableTime: true,
				dateFormat: "Y-m-d H:i",
				locale: "<?php if ($_smarty_tpl->getValue('settings')->lang == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('settings')->lang;
}?>",
				time_24hr: true
			});

			var colorPickerOptions = {
				colorSelectors: {
					"black": "#000000",
					"blue": "#0000ff",
					"brown": "#a52a2a",
					"gray": "#808080",
					"green": "#008000",
					"red": "#ff0000",
					"orange": "#ffa500",
					"yellow": "#ffff00",
					"white": "#ffffff"
				},
				format: "hex"
			};

			$(document).on("click", ".js-remove-item", function() {
				$('[data-bs-toggle="tooltip"]').tooltip('hide');
				$(this).closest(".js-row").fadeOut(200, function() { $(this).remove(); });
				return false;
			});

			$(document).on("input", ".js-rating", function() {
				$(".js-show-rating").html($(this).val());
				$(".js-rating-value").val($(this).val());
			});

			$('#product-categories .add').click(function() {
				var $orginal = $('#product-categories .product-cats div.list:last');
				var $cloned = $orginal.clone();
				$cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); })
				$cloned.find('.selectpicker').selectpicker('render');
				$cloned.appendTo('#product-categories .product-cats');
				$("#product-categories .product-cats div.list:last button.add").hide();
				$("#product-categories .product-cats div.list:last button.delete").show();
			});

			$(document).on("click", "#product-categories .delete", function() {
				$(this).closest(".list").remove();
				return false;
			});

			var image_item_clone = $(".js-new-image-item").clone(true).removeClass('d-none');
			$(".js-new-image-item").remove();
			var new_image_tem_clone = $(".js-new-spec-image-item").clone(true).removeClass('d-none');
			$(".js-new-spec-image-item").remove();

			if (window.File && window.FileReader && window.FileList) {
				$(".js-dropzone").on('dragover', function(e) {
					e.preventDefault();
				
				<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
					$(this).css('background', '#28323f');
				<?php } else { ?>
					$(this).css('background', '#f8f8f8');
				<?php }?>
				
				});
				$(".js-dropzone").on('dragleave', function() {
				
				<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
					$(this).css('background', '#28323f');
				<?php } else { ?>
					$(this).css('background', '#f8f8f8');
				<?php }?>
				
				});

				function handleFileSelect(evt) {
					dropInput = $(this).closest(".js-droplist-wrap").find("input.dropinput:last").clone();
					var parent = $(this).closest(".js-droplist-wrap");
					var files = evt.target.files;
					for (var i = 0, f; f = files[i]; i++) {
						if (!f.type.match('image.*')) {
							continue;
						}
						var reader = new FileReader();
						reader.onload = (function(theFile) {
							return function(e) {
								if (parent.data('image') == "product") {
									var clone_item = image_item_clone.clone(true);
								} else if (parent.data('image') == "special") {
									var clone_item = new_image_tem_clone.clone(true);
								}
								clone_item.find("img").attr("onerror", '');
								clone_item.find("img").attr("src", e.target.result);
								clone_item.find("input").val(theFile.name);
								clone_item.appendTo(parent);
								temp_input = dropInput.clone();
								parent.find("input.dropinput").hide();
								parent.find(".js-dropzone").append(temp_input);
							};
						})(f);
						reader.readAsDataURL(f);
					}
					$(".js-dropzone").removeAttr("style");
				}
				$(document).on('change', '.dropinput', handleFileSelect);
			}

			$(document).on("click", ".js-remove-image", function() {
				$(this).closest("li").remove();
			});

			$(document).on("click", ".js-remove-variant", function() {
				$('[data-bs-toggle="tooltip"]').tooltip('hide');
				$(this).closest(".variants-list-item").fadeOut(200);
				$(this).closest(".variants-list-item").remove();
			});

			$(document).on("click", ".add-attachment", function() {
				var $attachmentBlock = $(this).closest('.turbo-list-body-item').find('.browse-attachment');
				var $attachmentInput = $(this).closest('.turbo-list-body-item').find('input[name*=attachment]');
				var $firstTurboListRow = $(this).closest('.turbo-list-body-item').find('.turbo-list-row:first');

				$firstTurboListRow.toggleClass('mb-0', !$attachmentBlock.is(':visible'));

				$attachmentBlock.slideToggle('fast', function() {
					var isVisible = $attachmentBlock.is(':visible');
					$attachmentInput.prop('disabled', !isVisible);

					$firstTurboListRow.toggleClass('mb-0', isVisible);
				});

				return false;
			});

			$(document).on("click", ".js-remove-attachment", function() {
				closest = $(this).closest(".turbo-list-boding");
				closest.find(".js-attachment-name");
				$(this).hide();
				closest.hide();
				closest.find("input[name*=delete_attachment]").val("1");
				$(this).closest(".browse-attachment").find('.download-attachment').show('fast');
				return false;
			});

			$('.color-picker').colorpicker(colorPickerOptions);

			var variant = $('.js-new-row-variant').clone(true);
			$('.js-new-row-variant').remove().removeAttr('id');
			variant.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
			$('.js-add-variant').click(function() {
				if (!$('.variants-wrapper').is('.single-variant')) {
					var new_line = $(variant).clone(true);
					new_line.appendTo('.variants-listadd').fadeIn('slow').find("select").selectpicker();
					new_line.find(".variants-item-height").addClass('.color-picker').colorpicker(colorPickerOptions);
					new_line.find('[data-bs-toggle="tooltip"]').tooltip();
				} else {
					$('.variants-wrapper .variants-item-name').show('slow');
					$('.variants-wrapper').removeClass('single-variant');
				}
				return false;
			});

			var new_feature_category = $(".js-new-feature-category").clone(true);
			var new_val = $(".js-new-value").clone(true);
			$(".js-new-feature-category").remove();
			new_feature_category.removeClass("js-new-feature-category");
			$(".js-new-value").remove();
			new_val.removeClass("js-new-value");

			function show_category_features(category_id) {
				$('.js-features-wrap').empty();
				$.ajax({
					url: "ajax/get_features.php",
					data: {category_id: category_id, product_id: $("input[name=id]").val()},
					dataType: 'json',
					success: function(data) {
						for (i = 0; i < data.length; i++) {
							feature = data[i];
							var new_line = new_feature_category.clone(true);
							new_line.addClass('js-feature-block-' + feature.id);
							new_line.find(".js-feature-name").attr('title', feature.name);
							new_line.find(".js-feature-name a").text(feature.name).attr('href', "index.php?module=FeatureAdmin&id=" + feature.id);
							new_line.find(".js-auto-option").attr('name', "options_values[" + feature.id + "][]").val(feature.values[0].value).data('color', feature.is_color);
							new_line.find(".js-id-option").attr('name', "options_id[" + feature.id + "][]").val(feature.values[0].id);
							if (feature.is_color === "1") {
								new_line.find('.feature-value').append('<div class="add-on colorPicker-picker"></div>');
								new_line.find(".feature-value").addClass('color-picker').colorpicker(colorPickerOptions);
							}
							var value = new_line.find(".js-auto-option");
							id_input = new_line.find(".js-id-option");
							value.data('id', feature.id);
							value.attr('name', "options_values[" + feature.id + "][]");
							id_input.attr('name', "options_id[" + feature.id + "][]");
							if (feature.values.length > 1) {
								for (var j = 1; j < feature.values.length; j++) {
									var new_subline = new_val.clone(true);
									new_subline.find(".js-auto-option").attr('name', "options_values[" + feature.id + "][]").val(feature.values[j].value);
									new_subline.find(".js-id-option").attr('name', "options_id[" + feature.id + "][]").val(feature.values[j].id);
									if (feature.is_color === "1") {
										new_subline.find('.feature-value').append('<div class="add-on colorPicker-picker"></div>');
										new_subline.find(".feature-value").addClass('color-picker').colorpicker(colorPickerOptions);
									}
									new_line.append(new_subline);
									if (j > 0) {
										new_subline.find(".js-feature-multi-values")
										.removeClass("js-add")
										.removeClass("btn-feature")
										.addClass("js-remove")
										.addClass("btn-minus-feature");
										new_subline.find(".js-plus").hide();
										new_subline.find(".js-minus").show();
										new_subline.find(".feature-name").html("").addClass("additional-values");
										new_subline.find(".feature-input").html("").addClass("feature-input-single");
									}
									new_subline.show();
									new_line.appendTo(".js-features-wrap");
								}
							}
						
						<?php if ($_smarty_tpl->getValue('lang_id') != $_smarty_tpl->getValue('first_lang')) {?>
								
								if (feature.values[0].id) {
									new_line.find(".js-id-option").removeClass("js-id-option");
								} else {
									new_line.find(".js-id-option").addClass("js-id-option");
								}
							
						<?php }?>
						
							new_line.appendTo('.js-features-wrap').find("input")
								.autocomplete({
									serviceUrl: 'ajax/options_autocomplete.php',
									minChars: 0,
									maxHeight: 312,
									params: {feature_id:feature.id},
									noCache: false,
									onSelect: function(suggestion) {
										var id_input = $(this).closest('.feature-row').find('.js-id-option');
										id_input.val(suggestion.data.id);
										$(this).trigger('change');
									},
									onSearchStart: function(params) {
										var id_input = $(this).closest('.feature-row').find('.js-id-option');
										id_input.val("");
									}
								});
							new_line.show();
						}
					}
				});
				return false;
			}

			$(document).on("click", ".js-feature-multi-values.js-add-color", function() {
				var feature_id = $(this).closest(".feature-value").find(".js-auto-option").data("id"),
				new_value = new_val.clone(true),
				value_input = new_value.find(".js-auto-option"),
				id_input = new_value.find(".js-id-option");
				value_input.data("id", feature_id);
				value_input.val("");
				value_input.attr('name', "options_values[" + feature_id + "][]");
				id_input.attr("name", "options_id[" + feature_id + "][]");
				new_value.find(".feature-name").html("").addClass("additional-values");
				new_value.find(".feature-input").html("").addClass("feature-input-single");
				new_value.find('.feature-value').append('<div class="add-on colorPicker-picker"></div>');
				new_value.find(".feature-value").addClass('.color-picker').colorpicker(colorPickerOptions);
				new_value.find(".js-feature-multi-values")
				.removeClass("js-add")
				.removeClass("btn-feature")
				.addClass("js-remove")
				.addClass("btn-minus-feature");
				new_value.find(".js-plus").hide();
				new_value.find(".js-minus").show();
				value_input.autocomplete({
					serviceUrl: 'ajax/options_autocomplete.php',
					minChars: 0,
					maxHeight: 312,
					params: {feature_id:feature_id},
					noCache: false,
					onSelect: function(suggestion) {
						var id_input = $(this).closest('.feature-row').find('.js-id-option');
						id_input.val(suggestion.data.id);
						$(this).trigger('change');
					},
					onSearchStart: function(params) {
						var id_input = $(this).closest('.feature-row').find('.js-id-option');
						id_input.val("");
					}
				});
				new_value.appendTo(".js-feature-block-" + feature_id).fadeIn('slow');
				return false;
			});

			$(document).on("click", ".js-feature-multi-values.js-add", function() {
				var feature_id = $(this).closest(".feature-value").find(".js-auto-option").data("id"),
				color = $(this).closest(".feature-value").find(".js-auto-option").data("color"),
				new_value = new_val.clone(true),
				value_input = new_value.find(".js-auto-option"),
				id_input = new_value.find(".js-id-option");
				value_input.data("id", feature_id);
				value_input.val("");
				value_input.attr('name', "options_values[" + feature_id + "][]");
				id_input.attr("name", "options_id[" + feature_id + "][]");
				new_value.find(".feature-name").html("").addClass("additional-values");
				new_value.find(".feature-input").html("").addClass("feature-input-single");
				if (color === "1") {
					new_value.find('.feature-value').append('<div class="add-on colorPicker-picker"></div>');
					new_value.find(".feature-value").addClass('color-picker').colorpicker(colorPickerOptions);
				}
				new_value.find(".js-feature-multi-values")
				.removeClass("js-add")
				.removeClass("btn-feature")
				.addClass("js-remove")
				.addClass("btn-minus-feature");
				new_value.find(".js-plus").hide();
				new_value.find(".js-minus").show();
				value_input.autocomplete({
					serviceUrl: 'ajax/options_autocomplete.php',
					minChars: 0,
					maxHeight: 312,
					params: {feature_id:feature_id},
					noCache: false,
					onSelect: function(suggestion) {
						var id_input = $(this).closest('.feature-row').find('.js-id-option');
						id_input.val(suggestion.data.id);
						$(this).trigger('change');
					},
					onSearchStart: function(params) {
						var id_input = $(this).closest('.feature-row').find('.js-id-option');
						id_input.val("");
					}
				});
				new_value.appendTo(".js-feature-block-" + feature_id).fadeIn('slow');
				return false;
			});

			$(document).on("click", ".js-feature-multi-values.js-remove", function() {
				$(this).closest(".feature-row").remove();
			});

			$('select[name="categories[]"]:first').change(function() {
				show_category_features($("option:selected", this).val());
			});

			$('.js-features-wrap .js-auto-option').each(function(index) {
				feature_id = $(this).closest(".feature-value").find(".js-auto-option").data("id");
				id_input = $(this).closest(".feature-row").find(".js-id-option");
				$(this).autocomplete({
					serviceUrl: 'ajax/options_autocomplete.php',
					minChars: 0,
					maxHeight: 312,
					params: {feature_id:feature_id},
					noCache: false,
					onSelect: function(suggestion) {
						var id_input = $(this).closest('.feature-row').find('.js-id-option');
						id_input.val(suggestion.data.id);
						$(this).trigger('change');
					},
					onSearchStart: function(params) {
						var id_input = $(this).closest('.feature-row').find('.js-id-option');
						id_input.val("");
					}
				});
			});

			var new_feature = $(".js-new-feature").clone(true);
			$(".js-new-feature").remove();
			new_feature.removeClass("js-new-feature");
			$(document).on("click", ".js-add-feature", function() {
				var cloned_feature = new_feature.clone(true);
				cloned_feature.appendTo(".features-wrap").fadeIn('slow');
				return false;
			});

			$(document).on("click", ".js-delete-feature", function() {
				$(this).parent().remove();
			});

			var new_related_product = $('#new-related-product').clone(true);
			$('#new-related-product').remove();
			new_related_product.removeAttr('id');
			$("input#related-products").autocomplete({
				serviceUrl: 'ajax/search_products.php',
				minChars: 0,
				maxHeight: 362,
				noCache: false,
				onSelect: function(suggestion) {
					$("input#related-products").val('').focus().blur();
					new_item = new_related_product.clone().appendTo('.related-products');
					new_item.find('a.related-product-name').html(suggestion.data.name);
					new_item.find('a.related-product-name').attr('href', 'index.php?module=ProductAdmin&id=' + suggestion.data.id);
					new_item.find('input[name*="related_products"]').val(suggestion.data.id);
					new_item.find('[data-bs-toggle="tooltip"]').tooltip();
					if (suggestion.data.image)
						new_item.find('img.product-icon').attr("src", suggestion.data.image);
					else
						new_item.find('img.product-icon').remove();
						new_item.show();
				},
				formatResult: function(suggestions, currentValue) {
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
					return "<div>" + (suggestions.data.image ? "<img align=absmiddle src='" + suggestions.data.image + "'> " : '') + "</div>" + "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
				}
			});

			var new_recommended_product = $('#new-recommended-product').clone(true);
			$('#new-recommended-product').remove();
			new_recommended_product.removeAttr('id');
			$("input#recommended-products").autocomplete({
				serviceUrl: 'ajax/search_products.php',
				minChars: 0,
				maxHeight: 362,
				noCache: false,
				onSelect: function(suggestion) {
					$("input#recommended-products").val('').focus().blur();
					new_item = new_recommended_product.clone().appendTo('.recommended-products');
					new_item.find('a.recommended-product-name').html(suggestion.data.name);
					new_item.find('a.recommended-product-name').attr('href', 'index.php?module=ProductAdmin&id=' + suggestion.data.id);
					new_item.find('input[name*="recommended_products"]').val(suggestion.data.id);
					new_item.find('[data-bs-toggle="tooltip"]').tooltip();
					if (suggestion.data.image)
						new_item.find('img.product-icon').attr("src", suggestion.data.image);
					else
						new_item.find('img.product-icon').remove();
						new_item.show();
				},
				formatResult: function(suggestions, currentValue) {
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
					return "<div>" + (suggestions.data.image ? "<img align=absmiddle src='" + suggestions.data.image + "'> " : '') + "</div>" + "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
				}
			});

			$('.videos .js-add-video').click(function() {
				var new_video = $('#new-video').clone(true);
				new_video.appendTo('.videos .sortable').fadeIn('slow').find("input[name*=videos]").focus();
				new_video.find('[data-bs-toggle="tooltip"]').tooltip();
				return false;
			});

			$("input[name*=variant][name*=stock]").focus(function() {
				if ($(this).val() == '∞')
					$(this).val('');
				return false;
			});

			$("input[name*=variant][name*=stock]").blur(function() {
				if ($(this).val() == '')
					$(this).val('∞');
			});
		});
	<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_category_select_91473584169172e7006a487_10519075 */
if (!function_exists('smarty_template_function_category_select_91473584169172e7006a487_10519075')) {
function smarty_template_function_category_select_91473584169172e7006a487_10519075(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'category_select','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

															<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach3DoElse = false;
?>
																<option value="<?php echo $_smarty_tpl->getValue('category')->id;?>
" <?php if ((null !== ($_smarty_tpl->getValue('selected')->id ?? null)) && $_smarty_tpl->getValue('category')->id == $_smarty_tpl->getValue('selected')->id) {?>selected<?php }?> category-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
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
																	<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('category')->subcategories,'selected'=>$_smarty_tpl->getValue('selected'),'level'=>$_smarty_tpl->getValue('level')+1), true);?>

																<?php }?>
															<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
														<?php
}}
/*/ smarty_template_function_category_select_91473584169172e7006a487_10519075 */
}
