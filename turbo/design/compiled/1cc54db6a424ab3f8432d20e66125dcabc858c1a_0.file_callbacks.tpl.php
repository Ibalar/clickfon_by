<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:50:29
  from 'file:callbacks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691779f5d75273_44636971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc54db6a424ab3f8432d20e66125dcabc858c1a' => 
    array (
      0 => 'callbacks.tpl',
      1 => 1717215146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_691779f5d75273_44636971 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->callbacks_order, false, 32);?>

<h1 class="mb-3">
	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_callbacks, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('callbacks_count');?>

</h1>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('callbacks')) {?>
			<div class="row">
				<div class="col-12">
					<form class="js-form-list" method="post">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
						<div class="post-wrap turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-comments-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_callbacks, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-comments-btn"></div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('callbacks'), 'callback');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('callback')->value) {
$foreach0DoElse = false;
?>
									<div class="js-row turbo-list-body-item <?php if (!$_smarty_tpl->getValue('callback')->processed) {?>unapproved<?php }?>">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('callback')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-comments-name">
												<div class="mb-0">
													<span class="fw-bold text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_name, ENT_QUOTES, 'UTF-8', true);?>
:</span>
													<span class="text-body"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('callback')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
												<div class="mb-0">
													<span class="fw-bold text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_phone, ENT_QUOTES, 'UTF-8', true);?>
:</span>
													<span class="text-body"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('callback')->phone, ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
												<?php if ($_smarty_tpl->getValue('callback')->message) {?>
													<div class="mb-0">
														<span class="fw-bold text-body"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_message, ENT_QUOTES, 'UTF-8', true);?>
 </span>
														<?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->getValue('callback')->message, ENT_QUOTES, 'UTF-8', true), (bool) 1);?>

													</div>
												<?php }?>
												<span class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_request_sent, ENT_QUOTES, 'UTF-8', true);?>
:</span>
												<span class="badge badge-secondary-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('callback')->date);?>
 | <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('callback')->date);?>
</span>
												<?php if (!$_smarty_tpl->getValue('callback')->processed) {?>
													<div class="d-block d-md-none mt-1">
														<button type="button" class="btn btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('callback')->processed) {?>js-active-class<?php }?>" data-module="callback" data-action="processed" data-id="<?php echo $_smarty_tpl->getValue('callback')->id;?>
" onclick="$(this).hide();">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

														</button>
													</div>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-comments-btn">
												<?php if (!$_smarty_tpl->getValue('callback')->processed) {?>
													<button type="button" class="btn unapproved btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('callback')->processed) {?>js-active-class<?php }?>" data-module="callback" data-action="processed" data-id="<?php echo $_smarty_tpl->getValue('callback')->id;?>
" onclick="$(this).hide();">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

													</button>
												<?php }?>
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
									<div class="turbo-list-heading turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
										</label>
									</div>
									<div class="turbo-list-option">
										<select name="action" class="selectpicker">
											<option value="processed"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>
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
			</div>
			<div class="row">
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_no_request, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
