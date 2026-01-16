<?php
/* Smarty version 5.4.2, created on 2025-11-15 19:57:25
  from 'file:feature.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6918b0f5492e63_36222941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e5a43f0a34f4d755c99cc7d77c6b59a86e57ba' => 
    array (
      0 => 'feature.tpl',
      1 => 1732739260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:pagination.tpl' => 1,
  ),
))) {
function content_6918b0f5492e63_36222941 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/33e5a43f0a34f4d755c99cc7d77c6b59a86e57ba_0.file_feature.tpl.php',
    'uid' => '33e5a43f0a34f4d755c99cc7d77c6b59a86e57ba',
    'call_name' => 'smarty_template_function_category_select_3044043616918b0f5456683_64494743',
  ),
));
if ($_smarty_tpl->getValue('feature')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('feature')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->feature_new, false, 32);
}?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php if (!$_smarty_tpl->getValue('feature')->id) {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_add, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
	</h1>
</div>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_updated, ENT_QUOTES, 'UTF-8', true);?>

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
					<?php if ($_smarty_tpl->getValue('message_error') == 'empty_name') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_name, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == "url_exists") {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_duplicate_url, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form class="js-fast-button" method="post" enctype="multipart/form-data">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-lg-10 col-md-9 col-sm-12">
							<div class="translate-container mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<input class="form-control translate-input" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
							<div class="row">
								<div class="col-xs-12 col-lg-6 col-md-6">
									<div class="mt-2 mb-3">
										<div class="input-group">
											<span class="input-group-text">URL</span>
											<input name="url" class="form-control js-url <?php if ($_smarty_tpl->getValue('feature')->id) {?>js-disabled<?php }?>" <?php if ($_smarty_tpl->getValue('feature')->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->url, ENT_QUOTES, 'UTF-8', true);?>
">
											<input type="checkbox" id="block-translit" class="d-none" value="1" <?php if ($_smarty_tpl->getValue('feature')->id) {?>checked="" <?php }?>>
											<span class="input-group-text js-disable-url">
												<?php if ($_smarty_tpl->getValue('feature')->id) {?>
													<i class="url-lock"></i>
												<?php } else { ?>
													<i class="url-lock url-unlock"></i>
												<?php }?>
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="d-flex justify-content-center align-content-start flex-wrap flex-md-column h-100">
										<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
											<input class="form-check-input ms-2" type="checkbox" id="url-in-product" name="url_in_product" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('feature')->url_in_product) {?>checked=""<?php }?>>
											<label class="form-check-label ms-2" for="url-in-product"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_url_in_product, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-12">
							<div class="d-flex justify-content-center align-content-center flex-wrap flex-md-column h-100">
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="in-filter" name="in_filter" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('feature')->in_filter) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="in-filter"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_filter, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="is-color" name="is_color" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('feature')->is_color) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="is-color"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->color_filter, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="is-size" name="is_size" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('feature')->is_size) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="is-size"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->size_filter, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_in_categories, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<div class="alert-message">
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_message, ENT_QUOTES, 'UTF-8', true);?>

								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-check form-switch form-check-reverse float-start mb-3">
									<input class="form-check-input ms-2" type="checkbox" id="select-all-categories">
									<label class="form-check-label" for="select-all-categories"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_select_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-6">
								<select class="selectpicker js-select-all-categories px-0 d-none" multiple name="feature_categories[]" size="15" data-selected-text-format="count">
									
									<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->getValue('feature')->id && $_smarty_tpl->getValue('feature_categories')) {?>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card mh-210px">
					<div class="card-header">
						<div class="card-actions float-end">
							<div class="d-block d-lg-none position-relative collapse-icon">
								<a href="javascript:;" class="collapse-chevron">
									<i class="align-middle" data-feather="chevron-up"></i>
								</a>
							</div>
						</div>
						<h5 class="card-title mb-0 translate-button-card"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_feature_values, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->getValue('options_count');?>
) <span role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></h5>
					</div>
					<div class="collapse-card">
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<div class="turbo-list tb-related-list">
										<div class="turbo-list-head">
											<div class="turbo-list-heading turbo-list-drag"></div>
											<div class="turbo-list-heading feature-value-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<div class="turbo-list-heading feature-value-translit text-center"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_value_translit, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<div class="turbo-list-heading feature-value-products-num text-center"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_value_products_num, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<div class="turbo-list-heading turbo-list-delete"></div>
										</div>
										<div class="turbo-list-body sortable js-values-list">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('options'), 'option');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach1DoElse = false;
?>
												<div class="js-row turbo-list-body-item js-sort-item">
													<div class="turbo-list-row mb-3 mb-md-0">
														<input type="hidden" name="options[id][]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->id, ENT_QUOTES, 'UTF-8', true);?>
">
														<input type="hidden" class="js-options-delete" name="options_delete[]" disabled="" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->id, ENT_QUOTES, 'UTF-8', true);?>
">
														<div class="turbo-list-boding turbo-list-drag move-zone">
															<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
														</div>
														<div class="turbo-list-boding feature-value-name">
															<div class="form-label d-block d-md-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
															<?php if ($_smarty_tpl->getValue('feature')->is_color) {?>
																<div class="input-group color-picker">
																	<input type="text" class="form-control" name="options[value][]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
">
																	<span class="input-group-text add-on"><i></i></span>
																</div>
															<?php } else { ?>
																<div class="translate-container input-group">
																	<input type="text" class="form-control translate-input translate-input-card" name="options[value][]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
">
																	<span class="input-group-text translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span>
																</div>
															<?php }?>
														</div>
														<div class="turbo-list-boding feature-value-translit">
															<div class="form-label d-block d-md-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_value_translit, ENT_QUOTES, 'UTF-8', true);?>
</div>
															<input type="text" class="form-control" name="options[translit][]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->translit, ENT_QUOTES, 'UTF-8', true);?>
">
														</div>
														<div class="turbo-list-boding feature-value-products-num">
															<div class="form-label d-block d-md-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_value_products_num, ENT_QUOTES, 'UTF-8', true);?>
</div>
															<a href="index.php?module=ProductsAdmin&features[<?php echo $_smarty_tpl->getValue('feature')->id;?>
]=<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->translit, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control text-body text-decoration-none" target="_blank" disabled><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->count, ENT_QUOTES, 'UTF-8', true);?>
</a>
														</div>
														<div class="turbo-list-setting feature-save">
															<div class="form-label d-block d-md-none">&nbsp;</div>
															<button type="button" class="btn-delete js-remove-option">
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
											<div class="js-row turbo-list-body-item js-sort-item js-new-value" style="display: none;">
												<div class="turbo-list-row mb-3 mb-md-0">
													<input type="hidden" name="options[id][]" value="">
													<input type="hidden" class="js-options-delete" name="options_delete[]" disabled="" value="">
													<div class="turbo-list-boding turbo-list-drag move-zone">
														<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
													</div>
													<div class="turbo-list-boding feature-value-name">
														<div class="form-label d-block d-md-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<?php if ($_smarty_tpl->getValue('feature')->is_color) {?>
															<div class="input-group input-color">
																<input type="text" class="form-control" name="options[value][]" value="">
																<span class="input-group-text add-on"><i></i></span>
															</div>
														<?php } else { ?>
															<div class="translate-container input-group">
																<input type="text" class="form-control translate-input translate-input-card" name="options[value][]" value="">
																<span class="input-group-text translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span>
															</div>
														<?php }?>
													</div>
													<div class="turbo-list-boding feature-value-translit">
														<div class="form-label d-block d-md-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_value_translit, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<input type="text" class="form-control" name="options[translit][]" value="">
													</div>
													<div class="turbo-list-boding feature-value-products-num">
														<div class="form-label d-block d-md-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_value_products_num, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<a href="#" class="form-control text-body text-decoration-none" disabled>0</a>
													</div>
													<div class="turbo-list-setting feature-save">
														<div class="form-label d-block d-md-none">&nbsp;</div>
														<button type="button" class="btn-delete js-remove-option">
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
								</div>
							</div>
							<div class="row">
								<div class="col-12 mt-3">
									<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<div class="row">
		<?php if ($_smarty_tpl->getValue('feature')->id && $_smarty_tpl->getValue('feature_categories')) {?>
			<div class="col-md-6">
				<div class="d-grid d-md-block">
					<button type="button" class="js-add-value btn btn-success mt-3">
						<i data-feather="plus"></i>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_add_value, ENT_QUOTES, 'UTF-8', true);?>

					</button>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-grid d-md-block">
					<button type="submit" class="btn btn-primary float-end mt-3">
						<i class="align-middle" data-feather="check"></i>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

					</button>
				</div>
			</div>
		<?php } else { ?>
			<div class="col">
				<div class="d-grid d-md-block">
					<button type="submit" class="btn btn-primary float-end mt-3">
						<i class="align-middle" data-feather="check"></i>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

					</button>
				</div>
			</div>
		<?php }?>
	</div>
</form>

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



	<?php echo '<script'; ?>
>
		$(window).on('load', function() {
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

			$('.color-picker').colorpicker(colorPickerOptions);

			$(document).on('change', '#select-all-categories', function() {
				$('.js-select-all-categories option').prop("selected", $(this).is(':checked'));
				$('.js-select-all-categories').selectpicker('refresh');
			});

			var new_value = $('.js-new-value').clone(true);
			$('.js-new-value').remove().removeAttr('id');
			$('.js-add-value').click(function() {
				var new_line = $(new_value).clone(true);
				new_line.appendTo('.turbo-list-body').fadeIn('slow');
				new_line.find('.input-color').addClass('color-picker').colorpicker(colorPickerOptions);
				new_line.find('[data-bs-toggle="tooltip"]').tooltip();
				return false;
			});

			$(function() {
				$('input[name="name"]').keyup(function() {
					if (!$('#block-translit').is(':checked')) {
						$('input[name="url"]').val(generate_url());
					}
				});
			});

			function generate_url() {
				url = $('input[name="name"]').val();
				url = url.replace(/[\s-_]+/gi, '');
				url = translit(url);
				url = url.replace(/[^0-9a-z\-]+/gi, '').toLowerCase();
				return url;
			}

			function translit(str) {
				var cyr = ("А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я-'_'").split("-")
				var lat = ("A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya-''").split("-")
				var res = '';
				for (var i = 0, l = str.length; i < l; i++) {
					var s = str.charAt(i),
						n = cyr.indexOf(s);
					if (n >= 0) { res += lat[n]; } else { res += s; }
				}
				return res;
			}

			$(document).on('click', '.js-remove-option', function() {
				$(this).closest('.js-row').fadeOut(200, function() {
					$('[data-bs-toggle="tooltip"]').tooltip('hide');
					$(this).closest('.js-row').find('.js-options-delete').attr('disabled', false);
				});
			});

			$('.js-select-all-categories').removeClass('d-none');
		});
	<?php echo '</script'; ?>
>
	<style>
		.colorpicker-element .add-on i:before {
			content: "";
			position: absolute;
			width: 16px;
			height: 16px;
			display: inline-block;
			vertical-align: text-top;
			margin-left: -8px;
			background: linear-gradient(45deg, rgba(0, 0, 0, 0.1) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, 0.1) 75%, rgba(0, 0, 0, 0.1) 0), linear-gradient(45deg, rgba(0, 0, 0, 0.1) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, 0.1) 75%, rgba(0, 0, 0, 0.1) 0), white;
			background-size: 10px 10px;
			background-position: 0 0, 5px 5px;
		}

		.colorpicker-element .add-on i[style*="background-color"]::before {
			content: none;
		}
	</style>
<?php }
/* smarty_template_function_category_select_3044043616918b0f5456683_64494743 */
if (!function_exists('smarty_template_function_category_select_3044043616918b0f5456683_64494743')) {
function smarty_template_function_category_select_3044043616918b0f5456683_64494743(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'category_select','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
											<option value="<?php echo $_smarty_tpl->getValue('category')->id;?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('category')->id,$_smarty_tpl->getValue('feature_categories'))) {?>selected<?php }?> <?php if ((null !== ($_smarty_tpl->getValue('category')->single_name ?? null))) {?>category_name="<?php echo $_smarty_tpl->getValue('category')->single_name;?>
"<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
?> <?php echo $_smarty_tpl->getValue('category')->name;?>
</option>
											<?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
												<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('category')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

											<?php }?>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									<?php
}}
/*/ smarty_template_function_category_select_3044043616918b0f5456683_64494743 */
}
