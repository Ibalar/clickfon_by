<?php
/* Smarty version 5.4.2, created on 2025-12-04 15:54:29
  from 'file:images.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_693184852d88e2_61904814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96c6680af6344c0e732f4639abb3a94fc8857724' => 
    array (
      0 => 'images.tpl',
      1 => 1733440452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693184852d88e2_61904814 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->images_images, false, 32);?>

<h1 class="mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->images_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme'), ENT_QUOTES, 'UTF-8', true);?>
</h1>

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'permissions') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('images_dir'), ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'name_exists') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->images_exists, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'theme_locked') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_protected, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('folders')) {?>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb mb-3">
			<li class="breadcrumb-item">
				<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ImagesAdmin','file'=>null,'dir'=>null), $_smarty_tpl);?>
" class="text-decoration-none text-muted">
					<i class="align-middle text-warning mt-n1" data-feather="folder"></i>
					images
				</a>
			</li>
			<?php if ((null !== ($_GET['dir'] ?? null))) {?>
				<li class="breadcrumb-item active">
					<i class="align-middle text-warning mt-n1" data-feather="folder"></i>
					<?php echo $_GET['dir'];?>

				</li>
			<?php }?>
		</ol>
	</nav>

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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_folders, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<ul class="nav nav-pills">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('folders'), 'f');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach0DoElse = false;
?>
								<li class="nav-item">
									<a class="nav-link text-decoration-none <?php if ($_smarty_tpl->getValue('f') == $_smarty_tpl->getValue('dir')) {?>active text-white<?php } else { ?>text-muted<?php }?>" aria-current="page" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ImagesAdmin','file'=>null,'dir'=>$_smarty_tpl->getValue('f')), $_smarty_tpl);?>
">
										<i class="align-middle <?php if ($_smarty_tpl->getValue('f') != $_smarty_tpl->getValue('dir')) {?>text-warning<?php }?>  mt-n1" data-feather="folder"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('f'), ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</li>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form method="post" enctype="multipart/form-data">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input type="hidden" name="delete_image" value="">
	<div class="row gx-2">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach1DoElse = false;
?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<div class="card-header px-4 pt-4">
						<div class="card-actions float-end">
							<?php if ((null !== ($_smarty_tpl->getValue('message_error') ?? null)) && $_smarty_tpl->getValue('message_error') == 'theme_locked') {?>
								<span class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_close, ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="align-middle" data-feather="lock"></i>
								</span>
							<?php } else { ?>
								<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="js-rename-image align-middle cursor-pointer me-1" data-feather="edit-2" data-old-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true);?>
"></i>
								</span>
								<div class="btn-delete float-end js-delete-img" data-name="<?php echo $_smarty_tpl->getValue('image')->name;?>
" data-bs-toggle="modal" data-bs-target="#js-delete-image">
									<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
										<i class="align-middle" data-feather="trash-2"></i>
									</span>
								</div>
							<?php }?>
						</div>
						<input type="text" class="d-none" name="old_name[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true);?>
">
						<div class="js-rename-value d-none position-absolute w-auto mt-n2">
							<input type="text" class="form-control" name="new_name[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<h5 class="card-title mb-0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true),33,'...');?>
</h5>
					</div>
					<div class="card-body px-4 pt-2">
						<a class="theme-image-item" href="../<?php echo $_smarty_tpl->getValue('images_dir');
echo htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true);?>
" data-fancybox="gallery">
							<img class="" src="../<?php echo $_smarty_tpl->getValue('images_dir');
echo htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('image')->name, ENT_QUOTES, 'UTF-8', true);?>
">
						</a>
						<div class="badge badge-secondary-light mt-1">
							<?php if ($_smarty_tpl->getValue('image')->size > 1024*1024) {?>
								<?php echo round((float) ($_smarty_tpl->getValue('image')->size/1024/1024), (int) 2, (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_mb, ENT_QUOTES, 'UTF-8', true);?>

							<?php } elseif ($_smarty_tpl->getValue('image')->size > 1024) {?>
								<?php echo round((float) ($_smarty_tpl->getValue('image')->size/1024), (int) 2, (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_kb, ENT_QUOTES, 'UTF-8', true);?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->getValue('image')->size;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_byte, ENT_QUOTES, 'UTF-8', true);?>

								<?php }
if ($_smarty_tpl->getValue('image')->width || $_smarty_tpl->getValue('image')->height) {?>, <?php echo $_smarty_tpl->getValue('image')->width;?>
&times;<?php echo $_smarty_tpl->getValue('image')->height;?>
 px<?php }?>
							</div>
						</div>
					</div>
				</div>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</div>
		<?php if (!$_smarty_tpl->getValue('locked')) {?>
			<div class="row mt-2">
				<div class="col-12">
					<div class="upload-image"></div>
				</div>
				<div class="col-12 col-lg-6 col-md-6 mb-3 d-grid gap-2 d-sm-block">
					<button type="button" class="btn btn-success js-add-image">
						<i class="align-middle" data-feather="plus"></i>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->images_add, ENT_QUOTES, 'UTF-8', true);?>

					</button>
				</div>
				<div class="col-12 col-lg-6 col-md-6 d-grid gap-2 d-sm-block">
					<button type="submit" name="save" class="btn btn-primary js-chek-all float-end">
						<i class="align-middle" data-feather="check"></i>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

					</button>
				</div>
			</div>
		<?php }?>
	</form>

	<div class="modal fade" id="js-delete-image" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_confirm, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body text-center">
					<div class="d-grid gap-2 d-sm-block">
						<button type="submit" class="btn btn-success js-submit-delete me-sm-1"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_yes, ENT_QUOTES, 'UTF-8', true);?>
</button>
						<button type="button" class="btn btn-danger js-dismiss-delete" data-bs-dismiss="modal"><i class="align-middle" data-feather="x"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_no, ENT_QUOTES, 'UTF-8', true);?>
</button>
					</div>
				</div>
			</div>
		</div>
	</div>

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
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


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
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


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
				$('.js-rename-image').on('click', function() {
					$(this).closest('.card-header').find('.js-rename-value').toggleClass('d-none');
					$(this).closest('.card-header').find('.card-title').toggleClass('d-none');
					$(this).parent().find('.js-rename-value > input').val($(this).data('old-name'))
				});

				$(".js-delete-img").on("click", function() {
					image_name = $(this).data("name");
				});

				$('.js-submit-delete').on('click', function() {
					$('input[name=delete_image]').val(image_name);
					$('form').submit();
				});

				$('.js-dismiss-delete').on('click', function() {
					$('input[name=delete_image]').val("");
				});

				$('.js-add-image').on('click', function() {
					$('.upload-image').append($('<div class="mb-3"><input class="form-control" type="file" name="upload_images[]"></div>'));
				});
			});
		<?php echo '</script'; ?>
>
	<?php }
}
