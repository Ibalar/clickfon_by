<?php
/* Smarty version 5.4.2, created on 2025-12-02 19:13:21
  from 'file:coupons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692f1021c4fae6_93983200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '827269359d75f5cc56e43c36bfe667e2db98b77b' => 
    array (
      0 => 'coupons.tpl',
      1 => 1733362650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:pagination.tpl' => 1,
  ),
))) {
function content_692f1021c4fae6_93983200 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_coupons, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_coupons, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('coupons_count');?>

	</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CouponAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('coupons')) {?>
			<form class="js-form-list" method="post">
				<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
				<div class="turbo-list">
					<div class="turbo-list-head">
						<div class="turbo-list-heading turbo-list-check">
							<label class="form-check">
								<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
							</label>
						</div>
						<div class="turbo-list-heading turbo-list-coupon-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-coupon-sale"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-coupon-condit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_conditions, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-coupon-validity"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_terms, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-coupon-disposable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_one_off, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delete"></div>
					</div>
					<div class="turbo-list-body js-coupon_wrap">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('coupons'), 'coupon');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('coupon')->value) {
$foreach0DoElse = false;
?>
							<div class="js-row turbo-list-body-item body-narrow">
								<div class="turbo-list-row narrow">
									<div class="turbo-list-boding turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('coupon')->id;?>
">
										</label>
									</div>
									<div class="turbo-list-boding turbo-list-coupon-name">
										<span class="text_dark">
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CouponAdmin','id'=>$_smarty_tpl->getValue('coupon')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo $_smarty_tpl->getValue('coupon')->code;?>
</a>
										</span>
										<div class="d-block d-lg-none mt-1">
											<?php if ($_smarty_tpl->getValue('coupon')->expire) {?>
												<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),'Ymd') <= $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('coupon')->expire,'Ymd')) {?>
													<span class="badge badge-primary-light">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_valid_until, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('coupon')->expire);?>

													</span>
												<?php } else { ?>
													<span class="badge badge-danger-light">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_expired, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('coupon')->expire);?>

													</span>
												<?php }?>
											<?php } else { ?>
												<span class="badge badge-warning-light">
													<?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'infinity'), (int) 0, $_smarty_current_dir);
?>
												</span>
											<?php }?>
											<?php if ($_smarty_tpl->getValue('coupon')->min_order_price > 0) {?>
												<span class="badge badge-success-light">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_order_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('coupon')->min_order_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

												</span>
											<?php }?>
											<div class="mt-1">
												<?php if ($_smarty_tpl->getValue('coupon')->single) {?>
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_one_off, ENT_QUOTES, 'UTF-8', true);?>

												<?php } else { ?>
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_many, ENT_QUOTES, 'UTF-8', true);?>

												<?php }?>
											</div>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-coupon-sale">
										<?php if ($_smarty_tpl->getValue('coupon')->type == 'absolute') {?>
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('coupon')->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->getValue('coupon')->value*1;?>
%
										<?php }?>
									</div>
									<div class="turbo-list-boding turbo-list-coupon-condit">
										<?php if ($_smarty_tpl->getValue('coupon')->min_order_price > 0) {?>
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_order_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('coupon')->min_order_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

										<?php } else { ?>
											-
										<?php }?>
									</div>
									<div class="turbo-list-boding turbo-list-coupon-validity">
										<?php if ($_smarty_tpl->getValue('coupon')->expire) {?>
											<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),'Ymd') <= $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('coupon')->expire,'Ymd')) {?>
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_valid_until, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('coupon')->expire);?>

											<?php } else { ?>
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_expired, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('coupon')->expire);?>

											<?php }?>
										<?php } else { ?>
											<?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'infinity'), (int) 0, $_smarty_current_dir);
?>
										<?php }?>
									</div>
									<div class="turbo-list-boding turbo-list-coupon-disposable">
										<?php if ($_smarty_tpl->getValue('coupon')->single) {?>
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_yes, ENT_QUOTES, 'UTF-8', true);?>

										<?php } else { ?>
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_no, ENT_QUOTES, 'UTF-8', true);?>

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
			<div class="row">
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->coupons_not, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
