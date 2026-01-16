<?php
/* Smarty version 5.4.2, created on 2025-11-16 17:59:46
  from 'file:deliveries.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6919e6e2507a53_39910229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca851ba58e430d37fb488babe9229ec438110234' => 
    array (
      0 => 'deliveries.tpl',
      1 => 1717215454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6919e6e2507a53_39910229 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_shipping, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_shipping, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'DeliveryAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('deliveries')) {?>
			<form class="js-form-list" method="post">
				<div class="turbo-list ">
					<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
					<div class="turbo-list-head">
						<div class="turbo-list-boding turbo-list-drag"></div>
						<div class="turbo-list-heading turbo-list-check">
							<label class="form-check">
								<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
							</label>
						</div>
						<div class="turbo-list-heading turbo-list-photo"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delivery-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delivery-condit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_conditions, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delete"></div>
					</div>
					<div class="deliveries-wrap turbo-list-body sortable">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('deliveries'), 'delivery');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('delivery')->value) {
$foreach0DoElse = false;
?>
							<div class="js-row turbo-list-body-item js-sort-item body-narrow">
								<div class="turbo-list-row narrow">
									<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('delivery')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('delivery')->position;?>
">
									<div class="turbo-list-boding turbo-list-drag move-zone">
										<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
									</div>
									<div class="turbo-list-boding turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('delivery')->id;?>
">
										</label>
									</div>
									<div class="turbo-list-boding turbo-list-photo small-photo boding-small turbo-list-delivery-photo">
										<?php if ($_smarty_tpl->getValue('delivery')->icon) {?>
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->getValue('delivery')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
												<img src="../<?php echo $_smarty_tpl->getValue('config')->delivery_images_dir;
echo $_smarty_tpl->getValue('delivery')->icon;?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>
">
											</a>
										<?php } elseif ($_smarty_tpl->getValue('delivery')->code) {?>
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->getValue('delivery')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
												<i class="align-middle" data-feather="code"></i>
											</a>
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->getValue('delivery')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
												<i class="align-middle" data-feather="camera"></i>
											</a>
										<?php }?>
									</div>
									<div class="turbo-list-boding turbo-list-delivery-name">
										<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->getValue('delivery')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>

										</a>
										<div class="d-block d-lg-none mt-1">
											<?php if ($_smarty_tpl->getValue('delivery')->separate_payment) {?>
												<div><span class="badge badge-primary-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
											<?php }?>
											<?php if ($_smarty_tpl->getValue('delivery')->price > 0) {?>
												<div><span class="badge badge-danger-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('delivery')->price;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
											<?php } else { ?>
												<div><span class="badge badge-success-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
											<?php }?>
											<?php if ($_smarty_tpl->getValue('delivery')->free_from > 0) {?>
												<div><span class="badge badge-info-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('delivery')->free_from;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
											<?php }?>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-delivery-condit">
										<?php if ($_smarty_tpl->getValue('delivery')->separate_payment) {?>
											<div><span class="badge badge-primary-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
										<?php }?>
										<?php if ($_smarty_tpl->getValue('delivery')->price > 0) {?>
											<div><span class="badge badge-danger-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('delivery')->price;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
										<?php } else { ?>
											<div><span class="badge badge-success-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
										<?php }?>
										<?php if ($_smarty_tpl->getValue('delivery')->free_from > 0) {?>
											<div><span class="badge badge-info-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('delivery')->free_from;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
										<?php }?>
									</div>
									<div class="turbo-list-boding turbo-list-status">
										<div class="form-check form-switch">
											<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('delivery')->enabled) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
" data-module="delivery" data-action="enabled" data-id="<?php echo $_smarty_tpl->getValue('delivery')->id;?>
" name="enabled" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('delivery')->enabled) {?>checked=""<?php }?>>
											<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
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
							<div class="turbo-list-boding turbo-list-drag"></div>
							<div class="turbo-list-heading turbo-list-check">
								<label class="form-check">
									<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
								</label>
							</div>
							<div class="turbo-list-option">
								<select name="action" class="selectpicker">
									<option value="enable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<option value="disable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
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
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
