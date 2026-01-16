<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:47:04
  from 'file:managers.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69177928997625_68372700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78770b964277aed53604b2abba0a6e05d6629b6e' => 
    array (
      0 => 'managers.tpl',
      1 => 1732736196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69177928997625_68372700 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->managers_managers, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->managers_managers, ENT_QUOTES, 'UTF-8', true);?>
 - <?php if ($_smarty_tpl->getValue('managers_count')) {
echo $_smarty_tpl->getValue('managers_count');
}?></h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ManagerAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->managers_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('managers')) {?>
			<div class="row">
				<div class="col-12">
					<form method="post" class="js-form-list">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
						<div class="managers-wrap turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-manager-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_login, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('managers'), 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
									<div class="js-row turbo-list-body-item body-narrow">
										<div class="turbo-list-row narrow">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->login, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->getValue('manager')->login == $_smarty_tpl->getValue('m')->login) {?>disabled<?php }?>>
												</label>
											</div>

											<div class="turbo-list-boding turbo-list-manager-name">
												<a class="fw-bold text-body text-decoration-none" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ManagerAdmin','login'=>$_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('m')->login),'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->login, ENT_QUOTES, 'UTF-8', true);?>

												</a>
											</div>
											<?php if ($_smarty_tpl->getValue('manager')->login != $_smarty_tpl->getValue('m')->login) {?>
												<div class="turbo-list-boding turbo-list-delete">
													<button type="button" class="btn-delete js-remove" data-bs-toggle="modal" data-bs-target="#actionModal" onclick="success_action($(this));">
														<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
															<i class="align-middle" data-feather="trash-2"></i>
														</span>
													</button>
												</div>
											<?php }?>
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
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->managers_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
