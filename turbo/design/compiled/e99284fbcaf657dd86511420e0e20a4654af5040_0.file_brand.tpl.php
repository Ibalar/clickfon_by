<?php
/* Smarty version 5.4.2, created on 2025-11-14 23:24:50
  from 'file:brand.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691790129e5683_79228545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99284fbcaf657dd86511420e0e20a4654af5040' => 
    array (
      0 => 'brand.tpl',
      1 => 1734792420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 5,
    'file:tinymce_init.tpl' => 1,
  ),
))) {
function content_691790129e5683_79228545 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('brand')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('brand')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->brand_new, false, 32);
}?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php if (!$_smarty_tpl->getValue('brand')->id) {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->brand_add, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
	</h1>
	<?php if ($_smarty_tpl->getValue('brand')->id) {?>
		<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
			<a class="btn btn-primary" target="_blank" href="../<?php echo $_smarty_tpl->getValue('lang_link');?>
brands/<?php echo $_smarty_tpl->getValue('brand')->url;?>
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
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->brand_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->brand_updated, ENT_QUOTES, 'UTF-8', true);?>

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
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->brand_exists, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'empty_name') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_name, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'url_exists') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_url, ENT_QUOTES, 'UTF-8', true);?>

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
							<div class="translate-container mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<input class="form-control translate-input" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
							<div class="translate-container mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_h1, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<input class="form-control translate-input" name="name_h1" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name_h1, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
							<div class="row">
								<div class="col-12 col-lg-6 col-md-10">
									<div class="mt-2 mb-3 mb-h">
										<div class="input-group">
											<span class="input-group-text">URL</span>
											<input name="url" class="js-meta-field form-control js-url" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->url, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->getValue('brand')->id) {?>readonly=""<?php }?>>
											<input type="checkbox" id="block-translit" class="d-none" value="1" <?php if ($_smarty_tpl->getValue('brand')->id) {?>checked=""<?php }?>>
											<span class="input-group-text js-disable-url">
												<?php if ($_smarty_tpl->getValue('brand')->id) {?>
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
						<div class="col-lg-2 col-md-3 col-sm-12">
							<div class="d-flex justify-content-center align-content-center flex-wrap flex-md-column h-100">
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="visible" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('brand')->visible) {?>checked=""<?php }?>>
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
	<div class="row gx-2">
		<div class="col-lg-4 col-md-12">
			<div class="card mh-250px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_image, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<ul class="brand-images-list">
							<li class="brand-image-item border-image-item <?php if ($_smarty_tpl->getValue('brand')->image) {?>border<?php }?>">
								<?php if ($_smarty_tpl->getValue('brand')->image) {?>
									<input type="hidden" class="js-accept-delete" name="delete_image" value="">
									<div class="js-parent-image">
										<div class="brand-image image-wrapper js-image-wrapper text-xs-center">
											<a href="javascript:;" class="js-delete-item remove-image"></a>
											<?php $_smarty_tpl->assign('image', ((string)$_smarty_tpl->getValue('brand')->image), false, NULL);?>
											<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_svg')($_smarty_tpl->getValue('image'))) {?>
												<img src="../<?php echo $_smarty_tpl->getValue('config')->brands_images_dir;
echo $_smarty_tpl->getValue('image');?>
" alt="">
											<?php } else { ?> 
												<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_brands')($_smarty_tpl->getValue('brand')->image,180,100);?>
" alt="">
											<?php }?>
										</div>
									</div>
								<?php } else { ?>
									<div class="js-parent-image"></div>
								<?php }?>
								<div class="js-upload-image dropzone-block-image <?php if ($_smarty_tpl->getValue('brand')->image) {?>d-none<?php }?>">
									<i class="align-middle" data-feather="plus"></i>
									<input class="dropzone-image" name="image" type="file">
								</div>
								<div class="brand-image image-wrapper js-image-wrapper js-new-image text-xs-center">
									<a href="javascript:;" class="js-delete-item remove-image"></a>
									<img src="" alt="">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8 col-md-12">
			<div class="card mh-250px">
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
									<div class="form-label">Meta-title <span id="js-meta-title-counter"></span> <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="meta_title" class="form-control js-meta-field mb-h translate-input" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="translate-container mb-3">
									<div class="form-label">Meta-keywords <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="meta_keywords" class="form-control js-meta-field mb-h translate-input" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="translate-container col-lg-6 col-md-6">
								<div class="form-label">Meta-description <span id="js-meta-description-counter"></span> <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<textarea name="meta_description" class="form-control turbo-textarea js-meta-field translate-input"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->meta_description, ENT_QUOTES, 'UTF-8', true);?>
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
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_description, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<textarea name="description" id="js-editor" class="editor js-editor-class"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						<div class="row">
							<div class="col-12">
								<div class="d-grid d-sm-block mt-3">
									<button type="submit" class="btn btn-primary float-end">
										<i class="align-middle" data-feather="check"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
