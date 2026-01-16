<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:27:01
  from 'file:banners_image.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e25b35d62_83544461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '734853b748af0b5d8dd22b0cde72cecfb793c37c' => 
    array (
      0 => 'banners_image.tpl',
      1 => 1732737420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 5,
  ),
))) {
function content_69172e25b35d62_83544461 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('banners_image')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('banners_image')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->banners_image_new_banner, false, 32);
}?>

<h1 class="mb-3">
	<?php if (!$_smarty_tpl->getValue('banners_image')->id) {?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_add_banner, ENT_QUOTES, 'UTF-8', true);?>

	<?php } else { ?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->name, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
</h1>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_updated, ENT_QUOTES, 'UTF-8', true);?>

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

<form method="post" enctype="multipart/form-data" class="js-fast-button">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-lg-10 col-md-9 col-sm-12">
							<div class="translate-container-banner mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button-banner" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<input class="form-control translate-input-banner" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
							<div class="row">
								<div class="col-xs-12 col-lg-6 col-md-12">
									<div class="mb-3">
										<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_banner_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
										<select name="banner_id" class="selectpicker">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners'), 'banner');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('banner')->value) {
$foreach0DoElse = false;
?>
												<option value="<?php echo $_smarty_tpl->getValue('banner')->id;?>
" <?php if ($_smarty_tpl->getValue('banners_image')->banner_id == $_smarty_tpl->getValue('banner')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banner')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-12">
							<div class="d-flex justify-content-center align-content-center flex-wrap flex-md-column h-100">
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="visible" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('banners_image')->visible) {?>checked=""<?php }?>>
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
		<div class="col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_param, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_url, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="url" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->url, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_background_color, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<div id="cp" class="input-group colorpicker-component">
										<input type="text" name="color" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->color, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
										<span class="input-group-text add-on"><i></i></span>
									</div>
								</div>
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_color_mode, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="style" class="selectpicker">
										<option value="" <?php if ($_smarty_tpl->getValue('banners_image')->style == '') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_default, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="light" <?php if ($_smarty_tpl->getValue('banners_image')->style == "light") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_light, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="dark" <?php if ($_smarty_tpl->getValue('banners_image')->style == "dark") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_dark, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_position, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="side" class="selectpicker">
										<option value="left" <?php if ($_smarty_tpl->getValue('banners_image')->side == "left") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_left, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="right" <?php if ($_smarty_tpl->getValue('banners_image')->side == "right") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_right, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_code, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="code" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->code, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
							<div class="translate-container-banner mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_button, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button-banner" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="button" class="form-control translate-input-banner" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->button, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="translate-container-banner mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_alt, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button-banner" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="alt" class="form-control translate-input-banner" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->alt, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="translate-container-banner mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_image_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button-banner" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<input name="title" class="form-control translate-input-banner" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->title, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="translate-container-banner mb-3">
									<div class="form-label translate-button-banner"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_description, ENT_QUOTES, 'UTF-8', true);?>
 <span role="button" class="translate-button-banner" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
									<textarea name="description" class="form-control textarea turbo-textarea translate-input-banner"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('banners_image')->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row gx-2">
		<div class="col-lg-6 col-md-12">
			<div class="card mh-230px">
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
						<ul class="banner-images-list">
							<li class="banner-image-item border-image-item <?php if ($_smarty_tpl->getValue('banners_image')->image) {?>border<?php }?>">
								<?php if ($_smarty_tpl->getValue('banners_image')->image) {?>
									<input type="hidden" class="js-accept-delete" name="delete_image" value="">
									<div class="js-parent-image">
										<div class="banner-image image-wrapper js-image-wrapper text-xs-center">
											<a href="javascript:;" class="js-delete-item remove-image"></a>
											<?php $_smarty_tpl->assign('image', ((string)$_smarty_tpl->getValue('banners_image')->image), false, NULL);?>
											<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_svg')($_smarty_tpl->getValue('image'))) {?>
												<img src="../<?php echo $_smarty_tpl->getValue('config')->banners_images_dir;
echo $_smarty_tpl->getValue('image');?>
" alt="">
											<?php } else { ?> 
												<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('image'),800,400);?>
" alt="">
											<?php }?> 
										</div>
									</div>
								<?php } else { ?>
									<div class="js-parent-image"></div>
								<?php }?>
								<div class="js-upload-image dropzone-block-image <?php if ($_smarty_tpl->getValue('banners_image')->image) {?>d-none<?php }?>">
									<i class="align-middle" data-feather="plus"></i>
									<input class="dropzone-image" name="image" type="file">
								</div>
								<div class="banner-image image-wrapper js-image-wrapper js-new-image text-xs-center">
									<a href="javascript:;" class="js-delete-item remove-image"></a>
									<img src="" alt="">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="card mh-230px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_background, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<ul class="banner-images-list">
							<li class="banner-image-item border-image-item-two <?php if ($_smarty_tpl->getValue('banners_image')->background) {?>border<?php }?>">
								<?php if ($_smarty_tpl->getValue('banners_image')->background) {?>
									<input type="hidden" class="js-accept-delete-two" name="delete_background" value="">
									<div class="js-parent-image-two">
										<div class="banner-image image-wrapper js-image-wrapper-two text-xs-center">
											<a href="javascript:;" class="js-delete-item-two remove-image"></a>
											<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('banners_image')->background,800,400);?>
" alt="">
										</div>
									</div>
								<?php } else { ?>
									<div class="js-parent-image-two"></div>
								<?php }?>
								<div class="js-upload-image-two dropzone-block-image <?php if ($_smarty_tpl->getValue('banners_image')->background) {?>d-none<?php }?>">
									<i class="align-middle" data-feather="plus"></i>
									<input class="dropzone-image-two" name="background" type="file">
								</div>
								<div class="banner-image image-wrapper js-image-wrapper-two js-new-image-two text-xs-center">
									<a href="javascript:;" class="js-delete-item-two remove-image"></a>
									<img src="" alt="">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
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
		$(function() {
			$('#cp').colorpicker({
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
			});
		});

		$(document).ready(function() {
			var targetLang = '<?php if ($_smarty_tpl->getValue('lang_label') == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('lang_label');
}?>';

			$('.translate-button-banner').on('click', function() {
				var inputElement = $(this).closest('.translate-container-banner').find('.translate-input-banner');
				var text = inputElement.val();

				if (text.trim() !== '') {
					$.post('ajax/translate.php', {
						'source_lang': 'auto',
						'target_lang': targetLang,
						'text': text
					}, function(data) {
						inputElement.val(data);
						set_banner(); 
					});
				}
			});

			$('input[name="name"]').on('keyup change', function() {
				name_touched = true;
				set_banner(); 
			});

			$(window).on("load", function() {
				init_touch_flags();
				set_touch_events();
				set_banner(); 
			});
		});

		var name_touched = true;
		var title_touched = true;
		var alt_touched = true;

		function init_touch_flags() {
			if ($('input[name="name"]').val() == generate_name() || $('input[name="name"]').val() == '')
				name_touched = false;
			if ($('input[name="title"]').val() == generate_title() || $('input[name="title"]').val() == '')
				title_touched = false;
			if ($('input[name="alt"]').val() == generate_alt() || $('input[name="alt"]').val() == '')
				alt_touched = false;
		}

		function set_touch_events() {
			$('input[name="name"]').change(function() { name_touched = true; });
			$('input[name="title"]').change(function() { title_touched = true; });
			$('input[name="alt"]').change(function() { alt_touched = true; });
		}

		function set_banner() {
			if (!name_touched)
				$('input[name="name"]').val(generate_name());
			if (!title_touched)
				$('input[name="title"]').val(generate_title());
			if (!alt_touched)
				$('input[name="alt"]').val(generate_alt());
		}

		function generate_name() {
			return $('input[name="name"]').val();
		}

		function generate_title() {
			return $('input[name="name"]').val();
		}

		function generate_alt() {
			return $('input[name="name"]').val();
		}
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
}
