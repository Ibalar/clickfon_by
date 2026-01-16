<?php
/* Smarty version 5.4.2, created on 2025-11-22 09:57:45
  from 'file:order.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69215ee98abb74_74775290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca6b3b42f96eafd890c2b688f9b212ef4c00387' => 
    array (
      0 => 'order.tpl',
      1 => 1732737150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:labels_ajax.tpl' => 1,
  ),
))) {
function content_69215ee98abb74_74775290 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('order')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', ((string)$_smarty_tpl->getValue('btr')->global_order_number)." ".((string)$_smarty_tpl->getValue('order')->id), false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->order_new, false, 32);
}?>

<form method="post" id="order" enctype="multipart/form-data" class="js-fast-button">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input name="id" type="hidden" value="<?php echo $_smarty_tpl->getValue('order')->id;?>
">
	
	<div class="d-flex flex-wrap align-items-center mb-3">
		<div class="me-3">
			<h1 class="d-inline align-middle">
				<?php if ($_smarty_tpl->getValue('order')->id) {?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_order_number, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('order')->id;?>

				<?php } else { ?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_add, ENT_QUOTES, 'UTF-8', true);?>

				<?php }?>
			</h1>
		</div>
	
		<div class="d-grid d-sm-inline-block me-sm-3 me-0">
			<select class="selectpicker" name="status">
				<option value='0' <?php if ($_smarty_tpl->getValue('order')->status == 0) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
				<option value='1' <?php if ($_smarty_tpl->getValue('order')->status == 1) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
				<option value='2' <?php if ($_smarty_tpl->getValue('order')->status == 2) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
				<option value='3' <?php if ($_smarty_tpl->getValue('order')->status == 3) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
			</select>
		</div>
	
		<?php if ($_smarty_tpl->getValue('order')->id) {?>
			<div class="d-none d-lg-inline-block me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_view, ENT_QUOTES, 'UTF-8', true);?>
">
				<a href="../<?php echo $_smarty_tpl->getValue('lang_link');?>
order/<?php echo $_smarty_tpl->getValue('order')->url;?>
" target="_blank" class="heading-block text-dark">
					<i class="align-middle" data-feather="external-link"></i>
				</a>
			</div>
	
			<div class="d-none d-lg-inline-block me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_print, ENT_QUOTES, 'UTF-8', true);?>
">
				<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('view'=>'print','id'=>$_smarty_tpl->getValue('order')->id), $_smarty_tpl);?>
" target="_blank" class="heading-block text-dark">
					<i class="align-middle" data-feather="printer"></i>
				</a>
			</div>
	
			<?php if ($_smarty_tpl->getValue('labels')) {?>
				<div class="dropdown me-3 d-none d-lg-block">
					<a class="nav-link dropdown-toggle order-dropdown-toggle" href="#" id="labelsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_select_label, ENT_QUOTES, 'UTF-8', true);?>

					</a>
					<div class="dropdown-menu dropdown-menu-start js-labels-hide box-labels-hide" aria-labelledby="labelsDropdown">
						<ul class="option-labels-box">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'l');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach0DoElse = false;
?>
								<li class="js-ajax-labels badge d-block text-start my-2" data-order-id="<?php echo $_smarty_tpl->getValue('order')->id;?>
" style="background-color: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->color, ENT_QUOTES, 'UTF-8', true);?>
">
									<input id="<?php echo $_smarty_tpl->getValue('order')->id;?>
_<?php echo $_smarty_tpl->getValue('l')->id;?>
" type="checkbox" class="d-none" name="order_labels[]" value="<?php echo $_smarty_tpl->getValue('l')->id;?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('l')->id,$_smarty_tpl->getValue('order_labels')) && is_array($_smarty_tpl->getValue('order_labels'))) {?>checked<?php }?>>
									<label for="<?php echo $_smarty_tpl->getValue('order')->id;?>
_<?php echo $_smarty_tpl->getValue('l')->id;?>
" class="cursor-pointer w-100">
										<span class="d-inline-block align-middle ms-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
									</label>
								</li>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
	
				<div class="d-none d-lg-block">
					<div class="js-ajax-label">
						<?php $_smarty_tpl->renderSubTemplate("file:labels_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
					</div>
				</div>
			<?php }?>
		<?php }?>
	
		<?php if ($_smarty_tpl->getValue('prev_order') || $_smarty_tpl->getValue('next_order')) {?>
			<div class="btn-group ms-auto" role="group">
				<?php if ($_smarty_tpl->getValue('prev_order')) {?>
					<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('id'=>$_smarty_tpl->getValue('prev_order')->id), $_smarty_tpl);?>
" class="btn btn-sm btn-light bg-white">
						<i class="align-middle" data-feather="chevron-left"></i>
					</a>
				<?php }?>
				<?php if ($_smarty_tpl->getValue('next_order')) {?>
					<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('id'=>$_smarty_tpl->getValue('next_order')->id), $_smarty_tpl);?>
" class="btn btn-sm btn-light bg-white">
						<i class="align-middle" data-feather="chevron-right"></i>
					</a>
				<?php }?>
			</div>
		<?php }?>
	</div>
			
	<?php if ($_smarty_tpl->getValue('message_error')) {?>
		<div class="row">
			<div class="col-12">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
						<?php if ($_smarty_tpl->getValue('message_error') == 'error_closing') {?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_shortage, ENT_QUOTES, 'UTF-8', true);?>

						<?php } else { ?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

						<?php }?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->getValue('message_success')) {?>
		<div class="row">
			<div class="col-12">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
						<?php if ($_smarty_tpl->getValue('message_success') == 'updated') {?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_updated, ENT_QUOTES, 'UTF-8', true);?>

						<?php } elseif ($_smarty_tpl->getValue('message_success') == 'added') {?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_added, ENT_QUOTES, 'UTF-8', true);?>

						<?php } else { ?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_success'), ENT_QUOTES, 'UTF-8', true);?>

						<?php }?>
						<?php if ($_GET['return']) {?>
							<a class="alert-link fw-normal btn-return text-decoration-none me-5" href="<?php echo $_GET['return'];?>
">
								<i class="align-middle mt-n1" data-feather="corner-up-left"></i>
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_back, ENT_QUOTES, 'UTF-8', true);?>

							</a>
						<?php }?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

	<div class="row gx-2">
		<div class="col-xl-12 col-xxl-8">
			<div class="card mh-230px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_content, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div id="js-purchase" class="turbo-list turbo-list-order">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-photo"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-order-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_name_option, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-price"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-count"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>

								</div>
								<div class="turbo-list-heading turbo-list-order-amount-price"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
</div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('purchases'), 'purchase');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach1DoElse = false;
?>
									<div class="js-row turbo-list-body-item purchases">
										<div class="turbo-list-row">
											<input type="hidden" name="purchases[id][<?php echo $_smarty_tpl->getValue('purchase')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('purchase')->id;?>
">
											<div class="turbo-list-boding turbo-list-photo">
												<?php if ($_smarty_tpl->getValue('purchase')->product->images) {?>
													<?php $_smarty_tpl->assign('image', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('purchase')->product->images), false, NULL);?>
													<img class="product-icon" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,50,50);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
												<?php } else { ?>
													<i class="align-middle" data-feather="camera"></i>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-order-name">
												<div class="d-inline-block me-3 mb-2">
													<?php if ($_smarty_tpl->getValue('purchase')->product) {?>
														<div class="mb-0"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->getValue('purchase')->product->id), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none me-2"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a></div>
														<?php if (!$_smarty_tpl->getValue('order')->closed) {?>
															<?php if (!$_smarty_tpl->getValue('purchase')->product) {?>
																<span class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_does_not_exist, ENT_QUOTES, 'UTF-8', true);?>
"><i class="align-middle mt-n1" data-feather="alert-circle"></i></span>
															<?php } elseif (!(null !== ($_smarty_tpl->getValue('purchase')->variant ?? null))) {?>
																<span class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_variant_does_not_exist, ENT_QUOTES, 'UTF-8', true);?>
"><i class="align-middle mt-n1" data-feather="alert-circle"></i></span>
															<?php } elseif ($_smarty_tpl->getValue('purchase')->variant->stock < $_smarty_tpl->getValue('purchase')->amount) {?>
																<span class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->in_stock_left, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant->stock, ENT_QUOTES, 'UTF-8', true);?>
"><i class="align-middle mt-n1" data-feather="alert-circle"></i></span>
															<?php }?>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('purchase')->variant->color || $_smarty_tpl->getValue('purchase')->variant_name) {?>
															<span class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_option, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant->color, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('purchase')->variant->color && $_smarty_tpl->getValue('purchase')->variant_name) {?>/<?php }?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('purchase')->sku) {?>
															<span class="text-secondary">/ <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sku, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo (($tmp = $_smarty_tpl->getValue('purchase')->sku ?? null)===null||$tmp==='' ? "&mdash;" ?? null : $tmp);?>
</span>
														<?php }?>
													<?php } else { ?>
														<div class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<?php if ($_smarty_tpl->getValue('purchase')->variant_name) {?>
															<div class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_option, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('purchase')->sku) {?>
															<div class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sku, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo (($tmp = $_smarty_tpl->getValue('purchase')->sku ?? null)===null||$tmp==='' ? "&mdash;" ?? null : $tmp);?>
</div>
														<?php }?>
													<?php }?>
													<div class="d-block d-lg-none">
														<span class="text-primary fw-bold"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->price, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<span class="fw-bold"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->amount, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>
</span>
													</div>
												</div>
												<?php if (!$_smarty_tpl->getValue('purchase')->variant) {?>
													<input class="form-control" type="hidden" name="purchases[variant_id][<?php echo $_smarty_tpl->getValue('purchase')->id;?>
]" value="">
												<?php } else { ?>
													<div class="d-inline-block">
														<select name="purchases[variant_id][<?php echo $_smarty_tpl->getValue('purchase')->id;?>
]" class="selectpicker <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('purchase')->product->variants) == 1) {?>d-none<?php }?> js-purchase-variant">
															<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('purchase')->product->variants, 'v');
$_smarty_tpl->getVariable('v')->iteration = 0;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('v')->iteration++;
$foreach2Backup = clone $_smarty_tpl->getVariable('v');
?>
																<option data-price="<?php echo $_smarty_tpl->getValue('v')->price;?>
" data-amount="<?php echo $_smarty_tpl->getValue('v')->stock;?>
" value="<?php echo $_smarty_tpl->getValue('v')->id;?>
" <?php if ($_smarty_tpl->getValue('v')->id == $_smarty_tpl->getValue('purchase')->variant_id) {?>selected<?php }?>>
																	<?php if ($_smarty_tpl->getValue('v')->name) {?>
																		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('v')->color, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('v')->color && $_smarty_tpl->getValue('v')->name) {?>/<?php }?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('v')->name, ENT_QUOTES, 'UTF-8', true);?>

																	<?php } else { ?>
																		#<?php echo $_smarty_tpl->getVariable('v')->iteration;?>

																	<?php }?>
																</option>
															<?php
$_smarty_tpl->setVariable('v', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
														</select>
													</div>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-price">
												<div class="input-group">
													<input type="text" class="form-control js-purchase-price" name="purchases[price][<?php echo $_smarty_tpl->getValue('purchase')->id;?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->price, ENT_QUOTES, 'UTF-8', true);?>
">
													<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-count">
												<div class="input-group">
													<input class="form-control js-purchase-amount" type="text" name="purchases[amount][<?php echo $_smarty_tpl->getValue('purchase')->id;?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->amount, ENT_QUOTES, 'UTF-8', true);?>
">
													<span class="input-group-text">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>

													</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-order-amount-price">
												<div class="text-dark">
													<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')(($_smarty_tpl->getValue('purchase')->price*$_smarty_tpl->getValue('purchase')->amount),2,".",'');?>
</span>
													<span><?php echo $_smarty_tpl->getValue('currency')->sign;?>
</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-delete">
												<button type="button" class="btn-delete js-remove-item">
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
							<div class="js-row turbo-list-body-item js-new-purchase" style="display: none">
								<div class="turbo-list-row">
									<div class="turbo-list-boding turbo-list-photo">
										<input type="hidden" name="purchases[id][]" value="">
										<img class="js-new-image" src="">
									</div>
									<div class="turbo-list-boding turbo-list-order-name">
										<div class="d-inline-block">
											<a class="js-new-product fw-bold text-body text-decoration-none me-2" href=""></a>
											<div class="js-new-variant-name"></div>
										</div>
										<div class="d-inline-block">
											<select name="purchases[variant_id][]" class="js-new-variant"></select>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-price">
										<div class="input-group">
											<input type="text" class="form-control js-purchase-price" name="purchases[price][]" value="">
											<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-count">
										<div class="input-group">
											<input class="form-control js-purchase-amount" type="text" name="purchases[amount][]" value="1">
											<span class="input-group-text">
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>

											</span>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-order-amount-price">
										<div class="text-dark">
											<span class="js-purchase-amount-price"></span>
											<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</div>
									</div>
									<div class="turbo-list-boding turbo-list-delete">
										<button type="button" class="btn-delete js-remove-item">
											<span data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
">
												<i class="align-middle" data-feather="trash-2"></i>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-lg-6 col-md-12 mb-1">
								<div class="autocomplete-arrow">
									<input type="text" name="new_purchase" id="js-add-purchase" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_add_product, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<?php if ($_smarty_tpl->getValue('purchases')) {?>
									<div class="text-dark fw-bold text-end me-1 mt-2">
										<div class="h3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_total, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('subtotal'),2,".",'');?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mh-230px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_parameters, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="turbo-list turbo-list-order">
							<div class="turbo-list-body">
								<div class="turbo-list-body-item">
									<div class="turbo-list-row d-md-flex d-block">
										<div class="turbo-list-boding turbo-turbo-list-order-content-name">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_discount, ENT_QUOTES, 'UTF-8', true);?>

										</div>
										<div class="turbo-list-boding turbo-list-order-content-val">
											<div class="input-group">
												<input type="text" class="form-control <?php if ($_smarty_tpl->getValue('order')->discount > 0) {?>text-danger<?php }?>" name="discount" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->discount, ENT_QUOTES, 'UTF-8', true);?>
">
												<span class="input-group-text">%</span>
											</div>
										</div>
										<?php if ($_smarty_tpl->getValue('order')->discount) {?>
											<div class="turbo-list-boding turbo-list-order-content-price">
												<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')(($_smarty_tpl->getValue('subtotal')-$_smarty_tpl->getValue('subtotal')*$_smarty_tpl->getValue('order')->discount/100),2,".",'');?>
</span>
												<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="turbo-list-body-item">
									<div class="turbo-list-row d-md-flex d-block">
										<div class="turbo-list-boding turbo-turbo-list-order-content-name">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_coupon, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('order')->coupon_code) {?>(<?php echo $_smarty_tpl->getValue('order')->coupon_code;?>
)<?php }?>
										</div>
										<div class="turbo-list-boding turbo-list-order-content-val">
											<div class="input-group">
												<input type="text" class="form-control <?php if ($_smarty_tpl->getValue('order')->coupon_discount > 0) {?>text-danger<?php }?>" name="coupon_discount" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->coupon_discount, ENT_QUOTES, 'UTF-8', true);?>
">
												<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
											</div>
										</div>
										<?php if ($_smarty_tpl->getValue('order')->discount) {?>
											<div class="turbo-list-boding turbo-list-order-content-price">
												<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')(($_smarty_tpl->getValue('subtotal')-$_smarty_tpl->getValue('subtotal')*$_smarty_tpl->getValue('order')->discount/100-$_smarty_tpl->getValue('order')->coupon_discount),2,".",'');?>
</span>
												<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="turbo-list-body-item">
									<div class="turbo-list-row d-md-flex d-block">
										<div class="turbo-list-boding turbo-turbo-list-order-content-name">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_weight, ENT_QUOTES, 'UTF-8', true);?>

										</div>
										<div class="turbo-list-boding turbo-list-order-content-val">
											<div class="input-group">
												<input type="text" class="form-control" name="weight" value="<?php if ($_smarty_tpl->getValue('order')->weight) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->weight, ENT_QUOTES, 'UTF-8', true);
}?>">
												<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->weight_units, ENT_QUOTES, 'UTF-8', true);?>
</span>
											</div>
										</div>
									</div>
								</div>
								<div class="turbo-list-body-item">
									<div class="turbo-list-row d-md-flex d-block">
										<div class="turbo-list-boding turbo-turbo-list-order-content-name">
											<div class="d-inline-block form-label me-2"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_shipping, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<div class="d-inline-block">
												<select name="delivery_id" class="selectpicker">
													<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_not_selected, ENT_QUOTES, 'UTF-8', true);?>
</option>
													<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('deliveries'), 'd');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach3DoElse = false;
?>
														<option value="<?php echo $_smarty_tpl->getValue('d')->id;?>
" <?php if ((null !== ($_smarty_tpl->getValue('delivery') ?? null)) && $_smarty_tpl->getValue('d')->id == $_smarty_tpl->getValue('delivery')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('d')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
													<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
												</select>
											</div>
										</div>
										<div class="turbo-list-boding turbo-list-order-content-val">
											<div class="input-group">
												<input type="text" name="delivery_price" class="form-control" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->delivery_price, ENT_QUOTES, 'UTF-8', true);?>
">
												<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
											</div>
										</div>
										<div class="turbo-list-boding turbo-list-order-content-price">
											<div class="form-check d-inline-block align-top mt-1">
												<input class="form-check-input" type="checkbox" id="separate-delivery" name="separate_delivery" value="1" <?php if ($_smarty_tpl->getValue('order')->separate_delivery) {?>checked<?php }?> data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
">
												<label class="form-check-label" for="separate-delivery"></label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-12 mt-2">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_payment, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="mt-1">
									<select name="payment_method_id" class="selectpicker">
										<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_not_selected, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'pm');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pm')->value) {
$foreach4DoElse = false;
?>
											<option value="<?php echo $_smarty_tpl->getValue('pm')->id;?>
" <?php if ((null !== ($_smarty_tpl->getValue('payment_method') ?? null)) && $_smarty_tpl->getValue('pm')->id == $_smarty_tpl->getValue('payment_method')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('pm')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="col-lg-8 col-md-12">
								<?php if ($_smarty_tpl->getValue('order')->total_price) {?>
									<div class="text-dark fw-bold text-end mt-3">
										<div class="h3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_total, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->total_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
									</div>
								<?php }?>
								<div class="fw-bold text-end me-1 mt-1">
									<?php if ($_smarty_tpl->getValue('payment_method')) {?>
										<div class="h3 text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_to_pay, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('order')->total_price,$_smarty_tpl->getValue('payment_currency')->id), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('payment_currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<?php }?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-check form-switch form-check-reverse float-start mt-3">
									<input class="paid form-check-input" type="checkbox" id="paid" name="paid" value="1" <?php if ($_smarty_tpl->getValue('order')->paid) {?>checked=""<?php }?>>
									<label class="form-check-label me-2" for="paid"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_paid, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-xxl-4">
			<div class="card mh-230px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_buyer_information, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<?php if ($_smarty_tpl->getValue('order')->date) {?>
							<div class="mb-3">
								<label class="form-label d-inline-block"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_date, ENT_QUOTES, 'UTF-8', true);?>
</label>
								<div class="d-inline-block text-dark fw-bold"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('order')->date);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('order')->date);?>
</div>
							</div>
						<?php }?>
						<div class="mb-3">
							<label class="form-label" for="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_full_name, ENT_QUOTES, 'UTF-8', true);?>
</label>
							<input name="name" class="form-control" id="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->name, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<div class="mb-3">
							<label class="form-label" for="phone"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_phone, ENT_QUOTES, 'UTF-8', true);?>
</label>
							<input name="phone" class="form-control" id="phone" ype="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->phone, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<div class="mb-3">
							<label class="form-label" for="email">E-mail</label>
							<input name="email" class="form-control" id="email" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->email, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<div class="mb-3">
							<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_address, ENT_QUOTES, 'UTF-8', true);?>
 <i class="align-middle text-secondary" data-feather="map"></i> <a href="https://www.google.com/maps/search/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->address, ENT_QUOTES, 'UTF-8', true);?>
?hl=<?php echo $_smarty_tpl->getValue('settings')->lang;?>
" target="_blank"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_on_map, ENT_QUOTES, 'UTF-8', true);?>
</a></label>
							<textarea name="address" class="form-control short-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->address, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
						<div class="mb-3">
							<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comment, ENT_QUOTES, 'UTF-8', true);?>
</label>
							<textarea name="comment" class="form-control short-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->comment, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
						<?php if ($_smarty_tpl->getValue('order')->ip) {?>
							<div class="mb-3">
								<label class="form-label d-inline-block"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_ip, ENT_QUOTES, 'UTF-8', true);?>
 <i class="align-middle text-secondary" data-feather="map-pin"></i> <a href="https://who.is/whois-ip/ip-address/<?php echo $_smarty_tpl->getValue('order')->ip;?>
" target="_blank"> whois</a></label>
								<div class="d-inline-block text-dark fw-bold"><?php echo $_smarty_tpl->getValue('order')->ip;?>
</div>
							</div>
						<?php }?>
						<div class="mb-3">
							<?php if (!$_smarty_tpl->getValue('user')) {?>
								<hr>
								<label class="form-label">
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_buyer_not_registred, ENT_QUOTES, 'UTF-8', true);?>

								</label>
								<input type="hidden" name="user_id" value="<?php echo (($tmp = $_smarty_tpl->getValue('user')->id ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
								<input type="text" class="js-user-complite form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_user_select, ENT_QUOTES, 'UTF-8', true);?>
">
								<hr>
							<?php } else { ?>
								<div class="js-user-row">
									<hr>
									<label class="form-label">
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_buyer, ENT_QUOTES, 'UTF-8', true);?>
:
										<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'UserAdmin','id'=>$_smarty_tpl->getValue('user')->id), $_smarty_tpl);?>
" target="_blank" class="me-1">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->name, ENT_QUOTES, 'UTF-8', true);?>

										</a>
										<a href="javascript:;" class="js-edit-user btn-edit text-body text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
">
											<i class="align-middle" data-feather="edit"></i>
										</a>
										<a href="javascript:;" class="js-delete-user btn-delete mt-n1" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->users_delete, ENT_QUOTES, 'UTF-8', true);?>
">
											<i class="align-middle" data-feather="trash-2"></i>
										</a>
									</label>
									<?php if ($_smarty_tpl->getValue('user')->group_id > 0) {?>
										<div class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->group->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<?php } else { ?>
										<div class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_not_in_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<?php }?>
									<hr>
								</div>
								<div class="edit-user mb-3" style="display:none;">
									<label class="form-label">
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_buyer, ENT_QUOTES, 'UTF-8', true);?>

									</label>
									<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->getValue('user')->id;?>
">
									<input type="text" class="js-user-complite form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_user_select, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							<?php }?>
						</div>
						<div class="mb-3">
							<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_language, ENT_QUOTES, 'UTF-8', true);?>
</label>
							<select name="lang_id" class="selectpicker">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'l');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach5DoElse = false;
?>
									<option value="<?php echo $_smarty_tpl->getValue('l')->id;?>
" <?php if ($_smarty_tpl->getValue('l')->id == $_smarty_tpl->getValue('order')->lang_id) {?>selected<?php }?> data-content='<span class="flag-icon flag-icon-<?php echo $_smarty_tpl->getValue('l')->label;?>
"></span> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_note, ENT_QUOTES, 'UTF-8', true);?>
</label>
							<textarea name="note" class="form-control short-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->note, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 mt-3">
			<div class="d-grid d-sm-block">
				<button type="submit" class="btn btn-primary float-end">
					<i class="align-middle" data-feather="check"></i>
					<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
				</button>
				<label class="form-check float-end mt-3 mt-sm-1">
					<input class="form-check-input" type="checkbox" name="notify_user" value="1">
					<span class="form-check-label align-middle ms-2 me-3">
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_email, ENT_QUOTES, 'UTF-8', true);?>

					</span>
				</label>
			</div>
		</div>
	</div>
</form>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"autocomplete",'priority'=>99,'include'=>array("turbo/design/js/autocomplete/jquery.autocomplete-min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"autocomplete",'priority'=>99,'include'=>array("turbo/design/js/autocomplete/jquery.autocomplete-min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"flag",'include'=>array("turbo/design/css/flag-icon.min.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"flag",'include'=>array("turbo/design/css/flag-icon.min.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>



	<?php echo '<script'; ?>
>
		$(window).on("load", function() {
			$(document).on("click", "#js-purchase .js-remove-item", function() {
				$('[data-bs-toggle="tooltip"]').tooltip('hide');
				$(this).closest(".js-row").fadeOut(200, function() { $(this).remove(); });
				return false;
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
							$(".js-ajax-label").html(data.data);
							notyf.success({ message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_success, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true });
						} else {
							notyf.error({ message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_error, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true });
						}
					}
				});
			});

			var new_purchase = $('#js-purchase .js-new-purchase').clone(true);
			$('#js-purchase .js-new-purchase').remove().removeAttr('class');
			$("#js-add-purchase").autocomplete({
				serviceUrl: 'ajax/add_order_product.php',
				minChars: 0,
				maxHeight: 353,
				noCache: false,
				onSelect: function(suggestion) {
					new_item = new_purchase.clone().appendTo('#js-purchase .turbo-list-body');
					new_item.removeAttr('id');
					new_item.find('.js-new-product').html(suggestion.data.name);
					new_item.find('.js-new-product').attr('href', 'index.php?module=ProductAdmin&id=' + suggestion.data.id);
					new_item.find('[data-bs-toggle="tooltip"]').tooltip();
					var variants_select = new_item.find("select.js-new-variant");
					for (var i in suggestion.data.variants) {
						variants_select.append("<option value='" + suggestion.data.variants[i].id + "' data-price='" + suggestion.data.variants[i].price + "' data-amount='" + suggestion.data.variants[i].stock + "'>" + suggestion.data.variants[i].color + (suggestion.data.variants[i].color && suggestion.data.variants[i].name ? " / " : "") + suggestion.data.variants[i].name + "</option>");
					}
					if (suggestion.data.variants.length > 1 || suggestion.data.variants[0].name != '') {
						variants_select.show();
						variants_select.selectpicker();
					} else {
						variants_select.hide();
					}
					variants_select.find('option:first').attr('selected', true);
					variants_select.bind('change', function() {
						change_variant(variants_select);
					});
					change_variant(variants_select);
					if (suggestion.data.image) {
						new_item.find('.js-new-image').attr("src", suggestion.data.image);
					} else {
						new_item.find('.js-new-image').remove();
					}
					$("input#js-add-purchase").val('').focus().blur();
					new_item.show();
				},
				formatResult: function(suggestions, currentValue) {
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
					return "<div>" + (suggestions.data.image ? "<img align=absmiddle src='" + suggestions.data.image + "'> " : '') + "</div>" + "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
				}
			});

			function change_variant(element) {
				var price = element.find('option:selected').data('price');
				var amount = element.find('option:selected').data('amount');
				element.closest('.js-row').find('input.js-purchase-price').val(price);
				element.closest('.js-row').find('.js-purchase-amount-price').text(price);
				var amount_input = element.closest('.js-row').find('input.js-purchase-amount');
				amount_input.val('1');
				amount_input.data('max', amount);
				return false;
			}

			$(".js-user-complite").autocomplete({
				serviceUrl: 'ajax/search_users.php',
				minChars: 0,
				noCache: false,
				onSelect: function(suggestion) {
					$('input[name="user_id"]').val(suggestion.data.id);
				},
				formatResult: function(suggestions, currentValue) {
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
					return "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
				}
			});

			$(document).on("click", ".js-delete-user", function() {
				$(this).closest(".js-user-row").hide();
				$('input[name="user_id"]').val(0);
			});

			$(document).on("click", ".js-edit-user", function() {
				$(".js-user-row").hide();
				$(".edit-user").show();
				return false;
			});

			$("select.js-purchase-variant").bind("change", function() {
				change_variant($(this));
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
