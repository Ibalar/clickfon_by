<?php
/* Smarty version 5.4.2, created on 2025-11-15 18:26:10
  from 'file:features.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69189b924c7497_61289007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50260caae951767bc61a3946f6630821a3434025' => 
    array (
      0 => 'features.tpl',
      1 => 1733362480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_69189b924c7497_61289007 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/50260caae951767bc61a3946f6630821a3434025_0.file_features.tpl.php',
    'uid' => '50260caae951767bc61a3946f6630821a3434025',
    'call_name' => 'smarty_template_function_category_select_190511996469189b92439d44_66371460',
  ),
));
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->features_features, false, 32);?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->features_features, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('features_count');?>

			</h1>
			<div class="d-grid d-sm-block mt-2 mt-md-0">
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'FeatureAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->features_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 float-sm-end">
		<form class="search mb-3" method="get">
			<input type="hidden" name="module" value="FeaturesAdmin">
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
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="collapse-card boxed-sorting">
					<div class="row">
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('category')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
								
								<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->getValue('features')) {?>
			<form method="post" class="js-form-list">
				<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
				<div class="turbo-list">
					<div class="turbo-list-head">
						<div class="turbo-list-heading turbo-list-drag"></div>
						<div class="turbo-list-heading turbo-list-check">
							<label class="form-check">
								<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
							</label>
						</div>
						<div class="turbo-list-heading turbo-list-features-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-url-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_url_in_product_short, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feature_filter, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delete"></div>
					</div>
					<div class="turbo-list-body features-wrap sortable">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'feature');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach1DoElse = false;
?>
							<div class="js-row turbo-list-body-item js-sort-item body-narrow">
								<div class="turbo-list-row narrow">
									<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('feature')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('feature')->position;?>
">
									<div class="turbo-list-boding turbo-list-drag move-zone">
										<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
									</div>
									<div class="turbo-list-boding turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('feature')->id;?>
">
										</label>
									</div>
									<div class="turbo-list-boding turbo-list-features-name">
										<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'FeatureAdmin','id'=>$_smarty_tpl->getValue('feature')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature')->name, ENT_QUOTES, 'UTF-8', true);?>

										</a>
									</div>
									<div class="turbo-list-boding turbo-list-url-status">
										<div class="form-check form-switch">
											<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('feature')->url_in_product) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('feature')->id;?>
" data-module="feature" data-action="url_in_product" data-id="<?php echo $_smarty_tpl->getValue('feature')->id;?>
" name="url_in_product" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('feature')->url_in_product) {?>checked=""<?php }?>>
											<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('feature')->id;?>
"></label>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-status">
										<div class="form-check form-switch">
											<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('feature')->in_filter) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('feature')->id;?>
" data-module="feature" data-action="in_filter" data-id="<?php echo $_smarty_tpl->getValue('feature')->id;?>
" name="in_filter" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('feature')->in_filter) {?>checked=""<?php }?>>
											<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('feature')->id;?>
"></label>
										</div>
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
							</div>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</div>
					<div class="turbo-list-footer js-action-block">
						<div class="turbo-list-foot-left">
							<div class="turbo-list-heading turbo-list-drag"></div>
							<div class="turbo-list-heading turbo-list-check">
								<label class="form-check">
									<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
								</label>
							</div>
							<div class="turbo-list-option">
								<select name="action" class="selectpicker">
									<option value="set_in_filter"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->features_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<option value="unset_in_filter"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->features_not_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<option value="delete"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
								</select>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">
							<i class="align-middle" data-feather="check"></i>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

						</button>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->features_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
/* smarty_template_function_category_select_190511996469189b92439d44_66371460 */
if (!function_exists('smarty_template_function_category_select_190511996469189b92439d44_66371460')) {
function smarty_template_function_category_select_190511996469189b92439d44_66371460(\Smarty\Template $_smarty_tpl,$params) {
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
										<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('category_id'=>$_smarty_tpl->getValue('c')->id), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->id == $_smarty_tpl->getValue('c')->id) {?>selected<?php }?>>
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
/*/ smarty_template_function_category_select_190511996469189b92439d44_66371460 */
}
