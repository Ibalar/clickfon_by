<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:51:28
  from 'file:orders_labels.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69177a30c55157_08909351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1576dd9226ffefec8a069c305cbf2722d931943' => 
    array (
      0 => 'orders_labels.tpl',
      1 => 1717216616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69177a30c55157_08909351 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->order_settings_labels, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_settings_labels, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersLabelAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_settings_add_label, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('labels')) {?>
			<form class="js-form-list" method="post">
				<input type="hidden" value="labels" name="labels">
				<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
				<div class="turbo-list">
					<div class="turbo-list-head">
						<div class="turbo-list-heading turbo-list-check">
							<label class="form-check">
								<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
							</label>
						</div>
						<div class="turbo-list-heading turbo-list-order-stg-lbl-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-order-stg-sts-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_color, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delete"></div>
					</div>
					<div class="js-labels_list turbo-list-body sortable">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'label');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('label')->value) {
$foreach0DoElse = false;
?>
							<div class="js-row turbo-list-body-item body-narrow">
								<div class="turbo-list-row js-sort-item narrow">
									<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('label')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('label')->position;?>
">
									<input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->getValue('label')->id;?>
">
									<div class="cturbo-list-boding turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('label')->id;?>
">
										</label>
									</div>
									<div class="turbo-list-boding turbo-list-order-stg-lbl-name">
										<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersLabelAdmin','id'=>$_smarty_tpl->getValue('label')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('label')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</div>
									<div class="turbo-list-boding turbo-list-order-stg-sts-label">
										<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersLabelAdmin','id'=>$_smarty_tpl->getValue('label')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" data-hint="<?php echo $_smarty_tpl->getValue('label')->color;?>
" class="label-color-item" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $_smarty_tpl->getValue('label')->color;?>
" style="background-color:<?php echo $_smarty_tpl->getValue('label')->color;?>
;"></a>
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
					<div class="turbo-list-footer">
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
						<button type="submit" value="labels" class="btn btn-primary">
							<i class="align-middle" data-feather="check"></i>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

						</button>
					</div>
				</div>
			</form>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->no_labels, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
