<?php
/* Smarty version 5.4.2, created on 2025-11-14 18:52:32
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69175040317bf3_34799925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed23891f12444d40080fdf8b1a723b45e5da671' => 
    array (
      0 => 'menu.tpl',
      1 => 1732461796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69175040317bf3_34799925 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_menu, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_menu, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<button type="button" id="add-menu" class="btn btn-primary"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->menus_add, ENT_QUOTES, 'UTF-8', true);?>
</button>
	</div>
</div>

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-12">
				<form method="post" class="js-form-list">
					<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
					<div class="turbo-list">
						<div class="currencies-wrap clearfix">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-drag"></div>
								<div class="turbo-list-heading turbo-list-menu-num">ID</div>
								<div class="turbo-list-heading turbo-list-menus-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->menus_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div id="menu-block" class="turbo-list-body sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menus'), 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
									<div class="turbo-list-body-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-drag">
												<div class="move-zone">
													<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-menu-num">
												<span><?php echo $_smarty_tpl->getValue('m')->id;?>
</span>
											</div>
											<div class="turbo-list-boding turbo-list-menus-name">
												<input name="menu[id][<?php echo $_smarty_tpl->getValue('m')->id;?>
]" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->id, ENT_QUOTES, 'UTF-8', true);?>
">
												<input name="menu[name][<?php echo $_smarty_tpl->getValue('m')->id;?>
]" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->name, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
											<div class="turbo-list-boding turbo-list-delete turbo-list-menus-close">
												<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
													<button type="button" class="btn-delete js-remove-menu" data-bs-toggle="modal" data-id="<?php echo $_smarty_tpl->getValue('m')->id;?>
" data-bs-target="#js-menu-delete">
														<i class="align-middle" data-feather="trash-2"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<div id="new-menu" class="turbo-list-body-item" style="display: none">
									<div class="turbo-list-row">
										<div class="turbo-list-boding turbo-list-drag move-zone">
											<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
										</div>
										<div class="turbo-list-boding turbo-list-menu-num"></div>
										<div class="turbo-list-boding turbo-list-menus-name">
											<input name="menu[id][]" type="hidden" value="">
											<input name="menu[name][]" class="form-control" type="text" value="">
										</div>
										<div class="turbo-list-boding turbo-list-delete turbo-list-menus-close">
											<button type="button" class="btn-delete js-remove-new-menu">
												<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="trash-2"></i>
												</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div id="action" class="turbo-list-footer">
								<div class="turbo-list-foot-left"></div>
								<input type="hidden" name="action" value="">
								<input type="hidden" name="action_id" value="">
								<button id="apply-action" type="submit" class="btn btn-primary">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="js-menu-delete" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_confirm_delete, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body text-center">
				<div class="d-grid gap-2 d-sm-block">
					<button type="button" class="btn btn-success js-delete-menu-confirm"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_yes, ENT_QUOTES, 'UTF-8', true);?>
</button>
					<button type="button" class="btn btn-danger js-dismiss-menu" data-bs-dismiss="modal"><i class="align-middle" data-feather="x"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_no, ENT_QUOTES, 'UTF-8', true);?>
</button>
				</div>
			</div>
		</div>
	</div>
</div>


	<?php echo '<script'; ?>
>
		$(window).on("load", function() {
			var new_menu = $('#new-menu').clone(true);

			$('#new-menu').remove().removeAttr('id');

			$('#add-menu').click(function() {
				var cloned_menu = new_menu.clone(true);
				cloned_menu.appendTo('.turbo-list-body').fadeIn('slow');
				cloned_menu.find('[data-bs-toggle="tooltip"]').tooltip();
				return false;
			});

			$(document).on("click", ".js-remove-new-menu", function() {
				$('[data-bs-toggle="tooltip"]').tooltip('hide');
				$(this).closest(".turbo-list-body-item").fadeOut(200);
				$(this).closest(".turbo-list-body-item").remove();
			});

			var menu_to_delete;

			$(document).on("click", ".js-remove-menu", function() {
				menu_to_delete = $(this).data("id");
			});

			$(document).on("click", ".js-delete-menu-confirm", function() {
				$('input[type="hidden"][name="action"]').val('delete');
				$('input[type="hidden"][name="action_id"]').val(menu_to_delete);
				$(".js-form-list").submit();
			});

			$(".js-form-list").submit(function() {
				if ($('input[type="hidden"][name="action"]').val() == 'delete' && !confirm) {
					$('[data-target="#js-menu-delete"]').trigger('click');
					return false;
				}
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
