<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:49:39
  from 'file:orders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691779c3bac5e0_90144661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69efbf8f62fd9cebed99a1529dffc17e409c13f' => 
    array (
      0 => 'orders.tpl',
      1 => 1733362338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:labels_ajax.tpl' => 1,
    'file:pagination.tpl' => 1,
  ),
))) {
function content_691779c3bac5e0_90144661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_orders, false, 32);?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_orders, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('orders_count');?>

			</h1>
			<?php if ($_smarty_tpl->getValue('orders')) {?>
				<div class="d-inline-block heading-block text-dark me-3 mb-3 mt-1" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_export, ENT_QUOTES, 'UTF-8', true);?>
">
					<i class="align-middle cursor-pointer" data-feather="file-text"></i>
				</div>
			<?php }?>
			<div class="d-grid d-sm-block mt-2 mt-md-0">
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrderAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 float-end">
		<form class="search mb-3" method="get">
			<input type="hidden" name="module" value="OrdersAdmin">
			<div class="input-group">
				<input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
">
				<button class="btn btn-primary" type="submit"><i class="align-middle mt-n1" data-feather="search"></i></button>
			</div>
		</form>
	</div>
</div>

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'error_closing') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_in, ENT_QUOTES, 'UTF-8', true);?>

						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('error_orders'), 'error_order_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error_order_id')->value) {
$foreach0DoElse = false;
?>
							№ <?php echo $_smarty_tpl->getValue('error_order_id');?>

						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_shortage, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('orders_count') > 0) {?>
	<div class="position-relative pt-1 mb-4 mt-n4">
		<div class="progress position-absolute w-100" style="display: none;">
			<div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
		</div>
	</div>
<?php }?>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="d-block d-md-none">
					<div class="row mb-3">
						<div class="col-md-6 col-sm-12">
							<select name="status" class="selectpicker" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>0,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 0 || $_smarty_tpl->getValue('keyword')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>1,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 1) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>2,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 2) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>3,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 3) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>4,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 4) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
					</div>
				</div>
				<div class="d-none d-md-block">
					<form method="get">
						<input type="hidden" name="module" value="OrdersAdmin">
						<input type="hidden" name="status" value="<?php echo $_smarty_tpl->getValue('status');?>
">
						<div class="row">
							<div class="col-sm-12 col-md-4 col-lg-4">
								<div class="input-group mb-3">
									<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from, ENT_QUOTES, 'UTF-8', true);?>
</span>
									<input type="text" class="flatpickr form-control" name="from_date" value="<?php if ($_smarty_tpl->getValue('from_date')) {
echo $_smarty_tpl->getValue('from_date');
}?>" autocomplete="off">
									<span class="input-group-text"><i class="align-middle" data-feather="calendar"></i></span>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4">
								<div class="input-group mb-3">
									<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_to, ENT_QUOTES, 'UTF-8', true);?>
</span>
									<input type="text" class="flatpickr form-control" name="to_date" value="<?php if ($_smarty_tpl->getValue('to_date')) {
echo $_smarty_tpl->getValue('to_date');
}?>" autocomplete="off">
									<span class="input-group-text"><i class="align-middle" data-feather="calendar"></i></span>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4">
								<button class="btn btn-primary" type="submit"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
							<select name="status" class="selectpicker" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>0,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 0 || $_smarty_tpl->getValue('keyword')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>1,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 1) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>2,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 2) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>3,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 3) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','status'=>4,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 4) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
						<?php if ($_smarty_tpl->getValue('labels')) {?>
							<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
								<select class="selectpicker" onchange="location = this.value;">
									<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('label'=>null), $_smarty_tpl);?>
" selected><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_all_labels, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'l');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach1DoElse = false;
?>
										<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('label'=>$_smarty_tpl->getValue('l')->id), $_smarty_tpl);?>
" <?php if ((null !== ($_smarty_tpl->getValue('label') ?? null)) && $_smarty_tpl->getValue('label')->id == $_smarty_tpl->getValue('l')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->getValue('orders')) {?>
			<div class="row">
				<div class="col-12">
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
								<div class="turbo-list-heading turbo-list-order-number">№</div>
								<div class="turbo-list-heading turbo-list-orders-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_full_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-order-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_status, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-order-product-count"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-orders-price"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-order-marker"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_label, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach2DoElse = false;
?>
									<div class="js-row turbo-list-body-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('order')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-boding-order turbo-list-order-number">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->getValue('order')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_order_number, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('order')->id;?>
</a>
												<?php if ($_smarty_tpl->getValue('order')->paid) {?>
													<div class="mt-1">
														<span class="badge badge-success-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_paid, ENT_QUOTES, 'UTF-8', true);?>
</span>
													</div>
												<?php } else { ?>
													<div class="mt-1">
														<span class="badge badge-secondary-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_not_paid, ENT_QUOTES, 'UTF-8', true);?>
</span>
													</div>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-orders-name">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->getValue('order')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
												<?php if ($_smarty_tpl->getValue('order')->discount > 0) {?><span class="badge badge-danger-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')->discount);?>
%</span><?php }?>
												<?php if ($_smarty_tpl->getValue('order')->coupon_discount > 0) {?><span class="badge badge-danger-light"><?php echo $_smarty_tpl->getValue('order')->coupon_discount;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
												<?php if ($_smarty_tpl->getValue('order')->note) {?>
													<div class="text-muted fw-light"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->note, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<?php }?>
												<div class="d-block d-lg-none mt-1">
													<?php if ($_smarty_tpl->getValue('order')->status == 0) {?>
														<span class="badge badge-primary-light">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>

														</span>
													<?php }?>
													<?php if ($_smarty_tpl->getValue('order')->status == 1) {?>
														<span class="badge badge-warning-light">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>

														</span>
													<?php }?>
													<?php if ($_smarty_tpl->getValue('order')->status == 2) {?>
														<span class="badge badge-info-light">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>

														</span>
													<?php }?>
													<?php if ($_smarty_tpl->getValue('order')->status == 3) {?>
														<span class="badge badge-danger-light">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>

														</span>
													<?php }?>
												</div>
												<div class="mt-1">
													<span class="d-none d-lg-inline-block text-secondary me-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_order_in, ENT_QUOTES, 'UTF-8', true);?>
:</span>
													<span class="badge badge-secondary-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('order')->date);?>
 l <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('order')->date);?>
</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-order-status">
												<?php if ($_smarty_tpl->getValue('order')->status == 0) {?>
													<span class="badge badge-primary-light">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												<?php }?>
												<?php if ($_smarty_tpl->getValue('order')->status == 1) {?>
													<span class="badge badge-warning-light">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												<?php }?>
												<?php if ($_smarty_tpl->getValue('order')->status == 2) {?>
													<span class="badge badge-info-light">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												<?php }?>
												<?php if ($_smarty_tpl->getValue('order')->status == 3) {?>
													<span class="badge badge-danger-light">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-order-product-count">
												<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('order')->purchases);?>
</span>
												<span class="js-orders-toggle cursor-pointer">
													<span class="js-icon-arrow">
														<i class="align-middle" data-feather="chevron-down"></i>
													</span>
												</span>
											</div>
											<div class="turbo-list-boding turbo-list-orders-price">
												<div class="input-group">
													<span class="form-control <?php if ($_smarty_tpl->getValue('order')->discount > 0 || $_smarty_tpl->getValue('order')->coupon_discount > 0) {?>text-danger<?php }?>">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->total_price, ENT_QUOTES, 'UTF-8', true);?>

													</span>
													<span class="input-group-text">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-order-marker">
												<span class="js-ajax-label-wrapper">
													<a class="nav-link dropdown-toggle" href="#" id="labelsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_select_label, ENT_QUOTES, 'UTF-8', true);?>
</a>
													<div class="dropdown-menu dropdown-menu-start js-labels-hide box-labels-hide" aria-labelledby="labelsDropdown">
														<ul class="option-labels-box">
															<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'l');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach3DoElse = false;
?>
																<li class="js-ajax-labels badge d-block text-start my-2" data-order-id="<?php echo $_smarty_tpl->getValue('order')->id;?>
" style="background-color: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->color, ENT_QUOTES, 'UTF-8', true);?>
">
																	<input id="l<?php echo $_smarty_tpl->getValue('order')->id;?>
_<?php echo $_smarty_tpl->getValue('l')->id;?>
" type="checkbox" class="d-none" name="order_labels[]" value="<?php echo $_smarty_tpl->getValue('l')->id;?>
" <?php if ((null !== ($_smarty_tpl->getValue('order')->labels_ids ?? null)) && is_array($_smarty_tpl->getValue('order')->labels_ids) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('l')->id,$_smarty_tpl->getValue('order')->labels_ids)) {?>checked=""<?php }?>																		>
																	<label for="l<?php echo $_smarty_tpl->getValue('order')->id;?>
_<?php echo $_smarty_tpl->getValue('l')->id;?>
" class="cursor-pointer w-100"><span class="d-inline-block align-middle ms-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
</span></label>
																</li>
															<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
														</ul>
													</div>
													<div class="js-order-labels">
														<?php $_smarty_tpl->renderSubTemplate("file:labels_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
													</div>
												</span>
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
										<div class="turbo-list-row purchases-block">
											<div class="orders-purchases-block" style="display: none">
												<div class="purchases-table">
													<div class="purchases-head">
														<div class="purchases-heading purchases-table-orders-num">№</div>
														<div class="purchases-heading purchases-table-orders-sku"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sku, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<div class="purchases-heading purchases-table-orders-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<div class="purchases-heading purchases-table-orders-price"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<div class="purchases-heading purchases-table-orders-unit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<div class="purchases-heading purchases-table-orders-total"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_total_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
													</div>
													<div class="purchases-body">
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')->purchases, 'purchase');
$_smarty_tpl->getVariable('purchase')->iteration = 0;
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach4DoElse = false;
$_smarty_tpl->getVariable('purchase')->iteration++;
$foreach4Backup = clone $_smarty_tpl->getVariable('purchase');
?>
															<div class="purchases-body-items">
																<div class="purchases-body-item">
																	<div class="purchases-bodyng purchases-table-orders-num"><?php echo $_smarty_tpl->getVariable('purchase')->iteration;?>
</div>
																	<div class="purchases-bodyng purchases-table-orders-sku"><?php echo (($tmp = $_smarty_tpl->getValue('purchase')->sku ?? null)===null||$tmp==='' ? "&mdash;" ?? null : $tmp);?>
</div>
																	<div class="purchases-bodyng purchases-table-orders-name">
																		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product_name, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('purchase')->variant_color) {?>/ <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant_color, ENT_QUOTES, 'UTF-8', true);
}?> <?php if ($_smarty_tpl->getValue('purchase')->variant_name) {?>/ <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant_name, ENT_QUOTES, 'UTF-8', true);
}?>
																	</div>
																	<div class="purchases-bodyng purchases-table-orders-price"><?php echo $_smarty_tpl->getValue('purchase')->price;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div> 
																	<div class="purchases-bodyng purchases-table-orders-unit"><?php echo $_smarty_tpl->getValue('purchase')->amount;
echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>
</div>
																	<div class="purchases-bodyng purchases-table-orders-total"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')(($_smarty_tpl->getValue('purchase')->price*$_smarty_tpl->getValue('purchase')->amount),2,".",'');?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
																</div>
															</div>
														<?php
$_smarty_tpl->setVariable('purchase', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</div>
												</div>
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
										<select name="action" class="selectpicker js-change-orders">
											<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_select_action, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php if ($_smarty_tpl->getValue('status') !== 0) {?><option value="set_status_0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->move_to_new, ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?>
											<?php if ($_smarty_tpl->getValue('status') !== 1) {?><option value="set_status_1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->move_to_accepted, ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?>
											<?php if ($_smarty_tpl->getValue('status') !== 2) {?><option value="set_status_2"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->move_to_closed, ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?>
											<option data-item="label" value="set_label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_set_label, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option data-item="label" value="unset_label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_unset_label, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="delete"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delete_selected_orders, ENT_QUOTES, 'UTF-8', true);?>
</option>
										</select>
									</div>
									<div class="row row-cols-md-auto align-items-center ms-3 d-none js-show-label">
										<div class="col-12">
											<select name="change_label_id" class="selectpicker">
												<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_select_label, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'change_label');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('change_label')->value) {
$foreach5DoElse = false;
?>
													<option value="<?php echo $_smarty_tpl->getValue('change_label')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('change_label')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">
									<i class="align-middle" data-feather="check"></i>
									<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
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
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"piecon",'priority'=>99,'include'=>array("turbo/design/js/piecon/piecon.min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"piecon",'priority'=>99,'include'=>array("turbo/design/js/piecon/piecon.min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>



	<?php echo '<script'; ?>
>
		$(window).on("load", function() {

			flatpickr(".flatpickr", {
				dateFormat: "d.m.Y",
				locale: "<?php if ($_smarty_tpl->getValue('settings')->lang == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('settings')->lang;
}?>"
			});

			$(document).on("change", ".js-change-orders", function() {
				var item = $(this).find("option:selected").data("item");
				if (item == "label") {
					$(".js-show-label").removeClass('d-none');
				} else {
					$(".js-show-label").addClass('d-none');
				}
			});

			$(document).on("change", ".js-ajax-labels input", function() {
				elem = $(this);
				var order_id = parseInt($(this).closest(".js-ajax-labels").data("order-id"));
				var state = "";
				session_id = '<?php echo $_SESSION['id'];?>
';
				var label_id = parseInt($(this).closest(".js-ajax-labels").find("input").val());
				if ($(this).closest(".js-ajax-labels").find("input").is(":checked")) {
					state = "add";
				} else {
					state = "remove";
				}
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: "ajax/update_order.php",
					data: {
						order_id: order_id,
						state: state,
						label_id: label_id,
						session_id: session_id
					},
					success: function(data) {
						var msg = "";
						if (data) {
							elem.closest(".js-ajax-label-wrapper").find(".js-order-labels").html(data.data);
							notyf.success({message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_success, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true});
							} else {
								notyf.error({message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_error, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true});
								}
							}
						});
					});

					$(document).on('click', '.js-orders-toggle', function() {
						$(this).find('.js-icon-arrow').toggleClass('rotate-180');
						$(this).parents('.js-row').find('.orders-purchases-block').slideToggle();
					});

				
					var status = '<?php if ($_smarty_tpl->getValue('status')) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('status'), ENT_QUOTES, 'UTF-8', true);
}?>',
					label='<?php if ($_smarty_tpl->getValue('label')) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('label')->id, ENT_QUOTES, 'UTF-8', true);
}?>',
					from_date = '<?php if ($_smarty_tpl->getValue('from_date')) {
echo $_smarty_tpl->getValue('from_date');
}?>',
					to_date = '<?php if ($_smarty_tpl->getValue('to_date')) {
echo $_smarty_tpl->getValue('to_date');
}?>';
				

					$(document).on('click', '.feather-file-text', function() {
						Piecon.setOptions({fallback: 'force'});
						Piecon.setProgress(0);
						var progress_item = $("#progressbar");
						$(".progress").show();
						do_export('', progress_item);
					});

				function do_export(page, progress) {
					page = typeof(page) != 'undefined' ? page : 1;
					label = typeof(label) != 'undefined' ? label : null;
					status = typeof(status) != 'undefined' ? status : null;
					from_date = typeof(from_date) != 'undefined' ? from_date : null;
					to_date = typeof(to_date) != 'undefined' ? to_date : null;
					$.ajax({
						url: "ajax/export_orders.php",
						data: {
							page: page,
							label: label,
							status: status,
							from_date: from_date,
							to_date: to_date
						},
						dataType: 'json',
						success: function(data) {
							if (data && !data.end) {
								Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
								progress.css('width', 100 * data.page / data.totalpages + '%');
								do_export(data.page * 1 + 1, progress);
							} else {
								Piecon.setProgress(100);
								progress.css('width', '100%');
								window.location.href = 'files/export/export_orders.csv';
								$(".progress").fadeOut(500);
							}
						},
						error: function(xhr, status, errorThrown) {
							alert(errorThrown + '\n' + xhr.responseText);
						}
					});
				}
			});
	<?php echo '</script'; ?>
>
<?php }
}
