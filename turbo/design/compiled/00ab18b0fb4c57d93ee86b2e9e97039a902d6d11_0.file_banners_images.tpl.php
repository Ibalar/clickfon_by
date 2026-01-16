<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:26:59
  from 'file:banners_images.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e23269412_34584160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ab18b0fb4c57d93ee86b2e9e97039a902d6d11' => 
    array (
      0 => 'banners_images.tpl',
      1 => 1734791904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_69172e23269412_34584160 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('banner')) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('banner')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_banners, false, 32);
}?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_banners, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('banners_images_count');?>

	</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'BannersImageAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_images_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
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
						<div class="col-md-4 col-lg-4 col-sm-12 mb-3">
							<select class="selectpicker" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('banner_id'=>null,'filter'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('filter')) {
}?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_images_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('banner_id'=>null,'filter'=>'visible'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'visible') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_images_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('banner_id'=>null,'filter'=>'hidden'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('filter') == 'hidden') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_images_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
						<?php if ($_smarty_tpl->getValue('banners')) {?>
							<div class="col-md-4 col-lg-4 col-sm-12 mb-3">
								<select class="selectpicker" onchange="location = this.value;">
									<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('banner_id'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('banner') && !$_smarty_tpl->getValue('banner')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_groups, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners'), 'b');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
?>
										<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'page'=>null,'banner_id'=>$_smarty_tpl->getValue('b')->id), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('banner') && $_smarty_tpl->getValue('banner')->id == $_smarty_tpl->getValue('b')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->getValue('banners_images')) {?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form class="js-form-list" method="post">
						<div id="main-list" class="turbo-list">
							<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-drag"></div>
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-banners-photo"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_image, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-banners-images-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-banners-group"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_banner_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>

							<div class="banners-wrap turbo-list-body features-wrap sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners_images'), 'banners_image');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('banners_image')->value) {
$foreach1DoElse = false;
?>
									<div class="js-row turbo-list-body-item js-sort-item">
										<div class="turbo-list-row">
											<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('banners_image')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('banners_image')->position;?>
">

											<div class="turbo-list-boding turbo-list-drag move-zone">
												<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
											</div>
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('banners_image')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-banners-photo">
												<?php if ($_smarty_tpl->getValue('banners_image')->image) {?>
													<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'BannersImageAdmin','id'=>$_smarty_tpl->getValue('banners_image')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<?php $_smarty_tpl->assign('image', ((string)$_smarty_tpl->getValue('banners_image')->image), false, NULL);?>
														<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_svg')($_smarty_tpl->getValue('image'))) {?>
															<img src="../<?php echo $_smarty_tpl->getValue('config')->banners_images_dir;
echo $_smarty_tpl->getValue('image');?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->name, ENT_QUOTES, 'UTF-8', true);?>
">
														<?php } else { ?>
															<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('image'),90,60);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->name, ENT_QUOTES, 'UTF-8', true);?>
">
														<?php }?>
													</a>
												<?php } else { ?>
													<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'BannersImageAdmin','id'=>$_smarty_tpl->getValue('banners_image')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<i class="align-middle" data-feather="camera"></i>
													</a>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-banners-images-name">
												<a class="fw-bold text-body text-decoration-none" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'BannersImageAdmin','id'=>$_smarty_tpl->getValue('banners_image')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->name, ENT_QUOTES, 'UTF-8', true);?>

												</a>
												<div class="turbo-list-banners-info text-muted">
													<?php $_smarty_tpl->assign('img_url', ((($_smarty_tpl->getValue('config')->root_url).('/')).($_smarty_tpl->getValue('config')->banners_images_dir)).($_smarty_tpl->getValue('banners_image')->image), false, NULL);?>
													<?php $_smarty_tpl->assign('info', $_smarty_tpl->getSmarty()->getModifierCallback('getimagesize')($_smarty_tpl->getValue('img_url')), false, NULL);?>
													<?php if ((null !== ($_smarty_tpl->getValue('info')[0] ?? null)) && (null !== ($_smarty_tpl->getValue('info')[1] ?? null))) {?>
														<?php echo $_smarty_tpl->getValue('info')[0];?>
 X <?php echo $_smarty_tpl->getValue('info')[1];?>
 px
													<?php }?>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-banners-group">
												<?php if ($_smarty_tpl->getValue('banners')) {?>
													<select class="selectpicker" name="image_banners[<?php echo $_smarty_tpl->getValue('banners_image')->id;?>
]">
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners'), 'b');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach2DoElse = false;
?>
															<option value="<?php echo $_smarty_tpl->getValue('b')->id;?>
" <?php if ($_smarty_tpl->getValue('b')->id == $_smarty_tpl->getValue('banners_image')->banner_id) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('b')->name;?>
</option>
														<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</select>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-status">
												<div class="form-check form-switch">
													<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('banners_image')->visible) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('banners_image')->id;?>
" data-module="banners_image" data-action="visible" data-id="<?php echo $_smarty_tpl->getValue('banners_image')->id;?>
" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('banners_image')->visible) {?>checked="" <?php }?>>
													<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('banners_image')->id;?>
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
										<select name="action" class="selectpicker banners-action">
											<option value="enable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="disable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php if ($_smarty_tpl->getValue('banners') > 1) {?>
												<option value="move_to_banner"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_images_move, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php }?>
											<option value="delete"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
										</select>
									</div>
									<div id="move_to_banner" class="row row-cols-md-auto align-items-center ms-3 d-none js-hide-block">
										<div class="col-12">
											<select name="target_banner" class="selectpicker">
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners'), 'b');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach3DoElse = false;
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
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_images_none, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div>


	<?php echo '<script'; ?>
>
		$(function() {
			$(document).on('change', '.js-action-block select.banners-action', function() {
				var elem = $(this).find('option:selected').val();
				$('.js-hide-block').addClass('d-none');
				if ($('#' + elem).length > 0) {
					$('#' + elem).removeClass('d-none');
				}
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
