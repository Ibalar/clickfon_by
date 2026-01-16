<?php
/* Smarty version 5.4.2, created on 2025-12-02 19:13:12
  from 'file:groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692f1018abbfa4_09078095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d6e1b71693f8d21e82b7d18e4d562735e111e03' => 
    array (
      0 => 'groups.tpl',
      1 => 1717215676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692f1018abbfa4_09078095 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_groups, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_groups, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('groups'));?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'GroupAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->user_groups_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('groups')) {?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form class="js-form-list" method="post">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

						<div class="groups-wrap turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-usergroups-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->user_groups_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-usergroups-sale"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach0DoElse = false;
?>
									<div class="js-row turbo-list-body-item body-narrow">
										<div class="turbo-list-row narrow">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('group')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-usergroups-name">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'GroupAdmin','id'=>$_smarty_tpl->getValue('group')->id), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('group')->name, ENT_QUOTES, 'UTF-8', true);?>

												</a>
											</div>
											<div class="turbo-list-boding turbo-list-usergroups-sale">
												<span class="tag tag-danger"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_discount, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('group')->discount*1;?>
%</span>
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
											<option value="delete"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn_small btn-primary">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->user_groups_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
