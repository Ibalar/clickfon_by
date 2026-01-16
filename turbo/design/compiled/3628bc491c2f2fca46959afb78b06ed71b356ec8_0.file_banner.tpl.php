<?php
/* Smarty version 5.4.2, created on 2025-11-23 21:25:19
  from 'file:banner.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6923518fd70309_37232364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3628bc491c2f2fca46959afb78b06ed71b356ec8' => 
    array (
      0 => 'banner.tpl',
      1 => 1732659622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6923518fd70309_37232364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'page_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/3628bc491c2f2fca46959afb78b06ed71b356ec8_0.file_banner.tpl.php',
    'uid' => '3628bc491c2f2fca46959afb78b06ed71b356ec8',
    'call_name' => 'smarty_template_function_page_select_6072541126923518fd23798_92530998',
  ),
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/3628bc491c2f2fca46959afb78b06ed71b356ec8_0.file_banner.tpl.php',
    'uid' => '3628bc491c2f2fca46959afb78b06ed71b356ec8',
    'call_name' => 'smarty_template_function_category_select_6072541126923518fd23798_92530998',
  ),
  'articles_category_selected' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/3628bc491c2f2fca46959afb78b06ed71b356ec8_0.file_banner.tpl.php',
    'uid' => '3628bc491c2f2fca46959afb78b06ed71b356ec8',
    'call_name' => 'smarty_template_function_articles_category_selected_6072541126923518fd23798_92530998',
  ),
));
if ($_smarty_tpl->getValue('banner')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('banner')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->banner_new_group, false, 32);
}?>

<h1 class="mb-3">
	<?php if (!$_smarty_tpl->getValue('banner')->id) {?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_add, ENT_QUOTES, 'UTF-8', true);?>

	<?php } else { ?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banner')->name, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
</h1>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_group_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_updated, ENT_QUOTES, 'UTF-8', true);?>

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
					<?php if ($_smarty_tpl->getValue('message_error') == 'group_id_exists') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_id_exists, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'empty_group_id') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_enter_id, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="js-fast-button">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-lg-10 col-md-9 col-sm-12">
							<div class="mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banner')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banner')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
							<div class="row">
								<div class="col-lg-2 col-sm-12">
									<div class="mt-2 mb-3">
										<div class="input-group">
											<span class="input-group-text">ID</span>
											<input name="group_id" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banner')->group_id, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
								</div>
								<div class="col-lg-10 col-sm-12">
									<div class="d-flex justify-content-center align-content-start flex-wrap flex-md-column h-100">
										<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
											<input class="form-check-input ms-2" type="checkbox" id="show-all-pages" name="show_all_pages" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('banner')->show_all_pages) {?>checked=""<?php }?>>
											<label class="form-check-label ms-2" for="show-all-pages"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_show_group, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-12">
							<div class="d-flex justify-content-center align-content-center flex-wrap flex-md-column h-100">
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="visible" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('banner')->visible) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="visible"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
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
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_show_banner, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row mb-1">
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</label>
									<select name="pages[]" class="js-action-select selectpicker d-none" multiple="multiple" data-live-search="true" data-size="10" data-selected-text-format="count">
										<option value="0" <?php if (!(null !== ($_smarty_tpl->getValue('banner')->page_selected ?? null)) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')(0,$_smarty_tpl->getValue('banner')->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
										
										<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'page_select', array('pages'=>$_smarty_tpl->getValue('pages'),'selected'=>$_smarty_tpl->getValue('banner')->page_selected ?? null), true);?>

									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</label>
									<select name="categories[]" class="js-action-select selectpicker d-none" multiple="multiple" data-live-search="true" data-size="10" data-selected-text-format="count">
										<option value="0" <?php if (!(null !== ($_smarty_tpl->getValue('banner')->category_selected ?? null)) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')(0,$_smarty_tpl->getValue('banner')->category_selected)) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
										
										<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories'),'selected'=>$_smarty_tpl->getValue('banner')->category_selected ?? null), true);?>

									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</label>
									<select name="brands[]" class="js-action-select selectpicker d-none" multiple="multiple" data-live-search="true" data-size="10" data-selected-text-format="count">
										<option value="0" <?php if (!(null !== ($_smarty_tpl->getValue('banner')->brand_selected ?? null)) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')(0,$_smarty_tpl->getValue('banner')->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'brand');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand')->value) {
$foreach2DoElse = false;
?>
											<option value="<?php echo $_smarty_tpl->getValue('brand')->id;?>
" <?php if ((null !== ($_smarty_tpl->getValue('banner')->brand_selected ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('brand')->id,$_smarty_tpl->getValue('banner')->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</label>
									<select name="articles_categories[]" class="js-action-select selectpicker d-none" multiple="multiple" data-live-search="true" data-size="10" data-selected-text-format="count">
										<option value="0" <?php if (!(null !== ($_smarty_tpl->getValue('banner')->articles_category_selected ?? null)) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')(0,$_smarty_tpl->getValue('banner')->articles_category_selected)) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
										
										<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'articles_category_selected', array('articles_categories'=>$_smarty_tpl->getValue('articles_categories'),'selected'=>$_smarty_tpl->getValue('banner')->articles_category_selected ?? null), true);?>

									</select>
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
			<div class="d-grid d-sm-block mt-2">
				<button type="submit" class="btn btn-primary float-end">
					<i class="align-middle" data-feather="check"></i>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

				</button>
			</div>
		</div>
	</div>
</form>


	<?php echo '<script'; ?>
>
		$(window).on("load", function() {
			$('.js-action-select').removeClass('d-none');
		});
	<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_page_select_6072541126923518fd23798_92530998 */
if (!function_exists('smarty_template_function_page_select_6072541126923518fd23798_92530998')) {
function smarty_template_function_page_select_6072541126923518fd23798_92530998(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'page_select','level'=>0,'selected'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'page');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach0DoElse = false;
?>
												<option value="<?php echo $_smarty_tpl->getValue('page')->id;?>
" <?php if ($_smarty_tpl->getValue('selected') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page')->id,$_smarty_tpl->getValue('selected'))) {?>selected<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php if ((null !== ($_smarty_tpl->getValue('page')->subpages ?? null))) {?>
													<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'page_select', array('pages'=>$_smarty_tpl->getValue('page')->subpages,'selected'=>$_smarty_tpl->getValue('selected'),'level'=>$_smarty_tpl->getValue('level')+1), true);?>

												<?php }?>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										<?php
}}
/*/ smarty_template_function_page_select_6072541126923518fd23798_92530998 */
/* smarty_template_function_category_select_6072541126923518fd23798_92530998 */
if (!function_exists('smarty_template_function_category_select_6072541126923518fd23798_92530998')) {
function smarty_template_function_category_select_6072541126923518fd23798_92530998(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'category_select','level'=>0,'selected'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach1DoElse = false;
?>
												<option value="<?php echo $_smarty_tpl->getValue('category')->id;?>
" <?php if ($_smarty_tpl->getValue('selected') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('category')->id,$_smarty_tpl->getValue('selected'))) {?>selected<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
													<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('category')->subcategories,'selected'=>$_smarty_tpl->getValue('selected'),'level'=>$_smarty_tpl->getValue('level')+1), true);?>

												<?php }?>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										<?php
}}
/*/ smarty_template_function_category_select_6072541126923518fd23798_92530998 */
/* smarty_template_function_articles_category_selected_6072541126923518fd23798_92530998 */
if (!function_exists('smarty_template_function_articles_category_selected_6072541126923518fd23798_92530998')) {
function smarty_template_function_articles_category_selected_6072541126923518fd23798_92530998(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'articles_category_selected','level'=>0,'selected'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles_categories'), 'articles_category');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('articles_category')->value) {
$foreach3DoElse = false;
?>
												<option value="<?php echo $_smarty_tpl->getValue('articles_category')->id;?>
" <?php if ($_smarty_tpl->getValue('selected') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('articles_category')->id,$_smarty_tpl->getValue('selected'))) {?>selected<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;<?php
}
}
echo htmlspecialchars((string)$_smarty_tpl->getValue('articles_category')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php if ($_smarty_tpl->getValue('articles_category')->subcategories) {?>
													<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'articles_category_selected', array('articles_categories'=>$_smarty_tpl->getValue('articles_category')->subcategories,'selected'=>$_smarty_tpl->getValue('banner')->articles_category_selected,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

												<?php }?>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										<?php
}}
/*/ smarty_template_function_articles_category_selected_6072541126923518fd23798_92530998 */
}
