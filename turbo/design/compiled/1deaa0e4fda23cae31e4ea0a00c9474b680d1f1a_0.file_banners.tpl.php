<?php
/* Smarty version 5.4.2, created on 2025-11-15 18:27:54
  from 'file:banners.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69189bfab59bb4_82855941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1deaa0e4fda23cae31e4ea0a00c9474b680d1f1a' => 
    array (
      0 => 'banners.tpl',
      1 => 1732659122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69189bfab59bb4_82855941 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->banners_groups_title, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_groups_title, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'BannerAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('banners')) {?>
			<div class="categories">
				<form class="js-form-list" method="post">
					<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
					<div class="turbo-list ">
						<div class="turbo-list-head">
							<div class="turbo-list-heading turbo-list-drag"></div>
							<div class="turbo-list-heading turbo-list-check">
								<label class="form-check">
									<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
								</label>
							</div>
							<div class="turbo-list-heading turbo-list-banners-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_group_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<div class="turbo-list-heading turbo-list-banners-tag"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_display, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<div class="turbo-list-heading turbo-list-delete"></div>
						</div>
						<div class="banners-groups-wrap turbo-list-body features-wrap sortable">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners'), 'banner');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('banner')->value) {
$foreach0DoElse = false;
?>
								<div class="js-row turbo-list-body-item js-sort-item">
									<div class="turbo-list-row">
										<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('banner')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('banner')->position;?>
">
										<div class="turbo-list-boding turbo-list-drag move-zone">
											<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
										</div>
										<div class="turbo-list-boding turbo-list-check">
											<label class="form-check">
												<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('banner')->id;?>
">
											</label>
										</div>
										<div class="turbo-list-boding turbo-list-banners-name">
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'BannerAdmin','id'=>$_smarty_tpl->getValue('banner')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none">
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banner')->name, ENT_QUOTES, 'UTF-8', true);?>

											</a>
										</div>
										<div class="turbo-list-boding turbo-list-banners-tag">
											<div class="wrap_tags">
												<?php if ($_smarty_tpl->getValue('banner')->show_all_pages) {?>
													<span class="badge badge-success-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
												<?php }?>
												<?php if (!$_smarty_tpl->getValue('banner')->show_all_pages && (null !== ($_smarty_tpl->getValue('banner')->articles_category_show ?? null))) {?>
													<div class="mb-0">
														<span class="fw-bold text-muted"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
:</span>
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banner')->articles_category_show, 'cat_show');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat_show')->value) {
$foreach1DoElse = false;
?>
															<span class="badge badge-info-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat_show')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</div>
												<?php }?>
												<?php if (!$_smarty_tpl->getValue('banner')->show_all_pages && (null !== ($_smarty_tpl->getValue('banner')->category_show ?? null))) {?>
													<div class="mb-0">
														<span class="fw-bold text-muted"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
:</span>
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banner')->category_show, 'cat_show');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat_show')->value) {
$foreach2DoElse = false;
?>
															<span class="badge badge-primary-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat_show')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</div>
												<?php }?>
												<?php if (!$_smarty_tpl->getValue('banner')->show_all_pages && (null !== ($_smarty_tpl->getValue('banner')->brands_show ?? null))) {?>
													<div class="mb-0">
														<span class="fw-bold text-muted"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
:</span>
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banner')->brands_show, 'brand_show');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand_show')->value) {
$foreach3DoElse = false;
?>
															<span class="badge badge-warning-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand_show')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</div>
												<?php }?>
												<?php if (!$_smarty_tpl->getValue('banner')->show_all_pages && (null !== ($_smarty_tpl->getValue('banner')->page_show ?? null))) {?>
													<div class="mb-0">
														<span class="fw-bold text-muted"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
:</span>
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banner')->page_show, 'page_show');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page_show')->value) {
$foreach4DoElse = false;
?>
															<span class="badge badge-danger-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page_show')->header, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</div>
												<?php }?>
											</div>
										</div>
										<div class="turbo-list-boding turbo-list-status">
											<div class="form-check form-switch">
												<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('banner')->visible) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('banner')->id;?>
" data-module="banner" data-action="visible" data-id="<?php echo $_smarty_tpl->getValue('banner')->id;?>
" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('banner')->visible) {?>checked=""<?php }?>>
												<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('banner')->id;?>
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
										<option value="enable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="disable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
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
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_no_groups, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
