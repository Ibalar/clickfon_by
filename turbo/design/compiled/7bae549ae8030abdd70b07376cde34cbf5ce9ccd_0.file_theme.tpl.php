<?php
/* Smarty version 5.4.2, created on 2025-11-22 09:59:38
  from 'file:theme.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69215f5a14d2e6_81198439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bae549ae8030abdd70b07376cde34cbf5ce9ccd' => 
    array (
      0 => 'theme.tpl',
      1 => 1732461798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69215f5a14d2e6_81198439 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('theme')->name) {?>
	<?php $_smarty_tpl->assign('meta_title', ((string)$_smarty_tpl->getValue('btr')->global_theme)." ".((string)$_smarty_tpl->getValue('theme')->name), false, 32);
}?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_current, ENT_QUOTES, 'UTF-8', true);?>
 &mdash; <?php echo $_smarty_tpl->getValue('theme')->name;?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<button type="button" class="js-clone-theme btn btn-primary"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_copy, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('settings')->theme;?>
</button>
	</div>
</div>

<?php if ($_smarty_tpl->getValue('theme')->locked) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_close, ENT_QUOTES, 'UTF-8', true);?>

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
					<?php if ($_smarty_tpl->getValue('message_error') == 'permissions') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_permissionse, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('themes_dir');?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'name_exists') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_exists, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form method="post" enctype="multipart/form-data">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input type="hidden" name="action">
	<input type="hidden" name="theme">
	<div class="row gx-2">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('themes'), 't');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('t')->value) {
$foreach0DoElse = false;
?>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card mh-250px">
					<div class="card-header px-4 pt-4">
						<div class="card-actions float-end">
							<?php if (!$_smarty_tpl->getValue('t')->locked) {?>
								<span class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="js-rename-theme align-middle cursor-pointer me-1" data-feather="edit-2" data-old-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
"></i>
								</span>
								<div class="btn-delete float-end js-remove-theme" data-theme-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
" data-bs-toggle="modal" data-bs-target="#js-delete-theme">
									<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
										<i class="align-middle" data-feather="trash-2"></i>
									</span>
								</div>
							<?php } else { ?>
								<span class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_close, ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="align-middle" data-feather="lock"></i>
								</span>
							<?php }?>
						</div>
						<input type="text" class="d-none" name="old_name[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
">
						<div class="js-rename-value d-none position-absolute w-auto mt-n2">
							<input type="text" class="form-control" name="new_name[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('t')->name == $_smarty_tpl->getValue('theme')->name) {?><span class="text-success">- <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->theme_current_item, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></h5>
					</div>
					<div class="card-body px-4 pt-2">
						<div class="text-center">
							<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
								<img class="<?php if ($_smarty_tpl->getValue('theme')->name != $_smarty_tpl->getValue('t')->name) {?>gray-filter<?php }?>" src="../design/<?php echo $_smarty_tpl->getValue('t')->name;?>
/preview_dark.png" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
">
							<?php } else { ?>
								<img class="<?php if ($_smarty_tpl->getValue('theme')->name != $_smarty_tpl->getValue('t')->name) {?>gray-filter<?php }?>" src="../design/<?php echo $_smarty_tpl->getValue('t')->name;?>
/preview.png" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
">
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->getValue('theme')->name != $_smarty_tpl->getValue('t')->name) {?>
							<button type="button" class="js-set-theme btn btn-secondary position-absolute bottom-0 end-0 me-3 mb-3" data-set-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('t')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<i class="align-middle" data-feather="check"></i>
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_select, ENT_QUOTES, 'UTF-8', true);?>

							</button>
						<?php }?>
					</div>
				</div>
			</div>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<div class="col-12 mt-3">
			<button type="submit" name="save" class="btn btn-primary js-chek-all float-end">
				<i class="align-middle" data-feather="check"></i>
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

			</button>
		</div>
	</div>
</form>
<div class="modal fade" id="js-delete-theme" tabindex="-1" style="display: none;" aria-hidden="true">
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

<?php echo '<script'; ?>
>
	
		$(window).on("load", function() {
			$('.js-rename-theme').on('click', function() {
				$(this).closest('.card-header').find('.js-rename-value').toggleClass('d-none');
				$(this).closest('.card-header').find('.card-title').toggleClass('d-none');
				$(this).parent().find('.js-set-theme').toggleClass('opacity-toggle');
				$(this).parent().find('.js-rename-value > input').val($(this).data('old-name'))
			});

			$('.js-set-theme').on('click', function() {
				$("input[name=action]").val('set_main_theme');
				$("input[name=theme]").val($(this).data('set-name'));
				$("form").submit();
			});

			$('.js-clone-theme').on('click', function(e) {
				e.preventDefault();
				$("input[name=action]").val('clone_theme');
				$("form").submit();
			});

			$(".js-remove-theme").on("click", function() {
				action = "delete_theme";
				theme_name = $(this).data("theme-name");
			});

			$(".js-submit-delete").on("click", function() {
				$("form input[name=action]").val(action);
				$("form input[name=theme]").val(theme_name);
				$("form").submit();
			});

			$(".js-dismiss-delete").on("click", function() {
				$("form input[name=action]").val("");
				$("form input[name=theme]").val("");
			});
		});
	
<?php echo '</script'; ?>
><?php }
}
