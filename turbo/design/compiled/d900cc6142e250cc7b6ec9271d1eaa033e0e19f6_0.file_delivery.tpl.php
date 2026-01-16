<?php
/* Smarty version 5.4.2, created on 2025-11-16 18:00:36
  from 'file:delivery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6919e7143a27c0_40896167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd900cc6142e250cc7b6ec9271d1eaa033e0e19f6' => 
    array (
      0 => 'delivery.tpl',
      1 => 1732661062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
    'file:tinymce_init.tpl' => 1,
  ),
))) {
function content_6919e7143a27c0_40896167 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('delivery')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('delivery')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->delivery_new, false, 32);
}?>

<h1 class="mb-3">
	<?php if (!$_smarty_tpl->getValue('delivery')->id) {?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_add, ENT_QUOTES, 'UTF-8', true);?>

	<?php } else { ?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
</h1>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_updated, ENT_QUOTES, 'UTF-8', true);?>

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

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'empty_name') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_name, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="js-fast-button">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->getValue('lang_id');?>
">

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-lg-10 col-md-9 col-sm-12">
							<div class="translate-container mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
 <span class="translate-button" role="button" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translation, ENT_QUOTES, 'UTF-8', true);?>
"><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'translate'), (int) 0, $_smarty_current_dir);
?></span></div>
								<input class="form-control mb-h translate-input" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-12">
							<div class="d-flex justify-content-center align-content-center flex-wrap flex-md-column h-100">
								<div class="form-check form-switch form-check-reverse ms-2 mb-2 mb-sm-1">
									<input class="form-check-input ms-2" type="checkbox" id="enabled" name="enabled" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('delivery')->enabled) {?>checked=""<?php }?>>
									<label class="form-check-label ms-2" for="enabled"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_method_settings, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group clearfix">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_method_type, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<select name="module" class="selectpicker">
												<option value="null"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_method_manual, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('delivery_modules'), 'delivery_module');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('delivery_module')->key => $_smarty_tpl->getVariable('delivery_module')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('delivery_module');
?>
													<option value="<?php echo htmlspecialchars((string)$_smarty_tpl->getVariable('delivery_module')->key, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->getValue('delivery')->module == $_smarty_tpl->getVariable('delivery_module')->key) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery_module')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
$_smarty_tpl->setVariable('delivery_module', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
									<div class="col-12 mt-3">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('delivery_modules'), 'delivery_module');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('delivery_module')->key => $_smarty_tpl->getVariable('delivery_module')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('delivery_module');
?>
											<div class="row js-module-settings" <?php if ($_smarty_tpl->getValue('delivery')->id) {
if ($_smarty_tpl->getVariable('delivery_module')->key != $_smarty_tpl->getValue('delivery')->module) {?>style="display:none;" <?php }
} else { ?>style="display:none;" <?php }?> module="<?php echo $_smarty_tpl->getVariable('delivery_module')->key;?>
">
												<h4><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery_module')->name, ENT_QUOTES, 'UTF-8', true);?>
</h4>
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('delivery_module')->settings, 'setting');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('setting')->value) {
$foreach2DoElse = false;
?>
													<?php if (!empty($_smarty_tpl->getValue('setting')->options) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('setting')->options) > 1) {?>
														<div class="col-lg-6">
															<div class="mb-3">
																<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
																<select name="delivery_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" class="selectpicker">
																	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('setting')->options, 'option');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach3DoElse = false;
?>
																		<option value="<?php echo $_smarty_tpl->getValue('option')->value;?>
" <?php if ((null !== ($_smarty_tpl->getValue('delivery_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)) && $_smarty_tpl->getValue('option')->value == $_smarty_tpl->getValue('delivery_settings')[$_smarty_tpl->getValue('setting')->variable]) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
																	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
																</select>
															</div>
														</div>
													<?php } elseif (!empty($_smarty_tpl->getValue('setting')->options) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('setting')->options) == 1) {?>
														<?php $_smarty_tpl->assign('option', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('setting')->options), false, NULL);?>
														<div class="col-lg-6 d-flex align-items-center">
															<div class="form-check form-switch mb-3 mt-lg-3 mt-0">
																<input class="form-check-input me-2" type="checkbox" id="delivery-settings-<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
" name="delivery_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((null !== ($_smarty_tpl->getValue('delivery_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)) && $_smarty_tpl->getValue('option')->value == $_smarty_tpl->getValue('delivery_settings')[$_smarty_tpl->getValue('setting')->variable]) {?>checked<?php }?>>
																<label class="form-check-label" for="delivery-settings-<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</label>
															</div>
														</div>
													<?php } else { ?>
														<div class="col-lg-6">
															<div class="mb-3">
																<div class="form-label" for="<?php echo $_smarty_tpl->getValue('setting')->variable;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
																<input name="delivery_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" class="form-control" type="text" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('delivery_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->getValue('setting')->variable;?>
">
															</div>
														</div>
													<?php }?>
												<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</div>
										<?php
$_smarty_tpl->setVariable('delivery_module', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row gx-2">
		<div class="col-lg-4 col-md-12">
			<div class="card mh-250px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_icon, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<ul class="checkout-images-list mb-1">
							<li class="checkout-image-item border-image-item-two <?php if ($_smarty_tpl->getValue('delivery')->icon) {?>border<?php }?>">
								<?php if ($_smarty_tpl->getValue('delivery')->icon) {?>
									<input type="hidden" class="js-accept-delete-two" name="delete_icon" value="">
									<div class="js-parent-image-two">
										<div class="checkout-image image-wrapper js-image-wrapper-two text-xs-center">
											<a href="javascript:;" class="js-delete-item-two remove-image"></a>
											<img src="../<?php echo $_smarty_tpl->getValue('config')->delivery_images_dir;
echo $_smarty_tpl->getValue('delivery')->icon;?>
" alt="">
										</div>
									</div>
								<?php } else { ?>
									<div class="js-parent-image-two"></div>
								<?php }?>
								<div class="js-upload-image-two dropzone-block-image <?php if ($_smarty_tpl->getValue('delivery')->icon) {?>d-none<?php }?>">
									<i class="align-middle" data-feather="plus"></i>
									<input class="dropzone-image-two" name="icon" type="file">
								</div>
								<div class="checkout-image image-wrapper js-image-wrapper-two js-new-image-two text-xs-center">
									<a href="javascript:;" class="js-delete-item-two remove-image"></a>
									<img src="" alt="">
								</div>
							</li>
						</ul>
						<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->icon_code, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<input class="form-control" name="code" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->code, ENT_QUOTES, 'UTF-8', true);?>
">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8 col-md-12">
			<div class="card mh-250px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_type, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="d-grid d-sm-block">
							<button type="button" class="btn btn-outline-primary js-type-delivery delivery-type mb-3 me-sm-2 <?php if ($_smarty_tpl->getValue('delivery')->price > 0) {?>active<?php }?>" data-type="paid">
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_paid, ENT_QUOTES, 'UTF-8', true);?>

							</button>
							<button type="button" class="btn btn-outline-primary js-type-delivery delivery-type mb-3 me-sm-2 <?php if ($_smarty_tpl->getValue('delivery')->price == 0 && !$_smarty_tpl->getValue('delivery')->separate_payment) {?>active<?php }?>" data-type="free">
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>

							</button>
							<button type="button" class="btn btn-outline-primary js-type-delivery delivery-type mb-3 <?php if ($_smarty_tpl->getValue('delivery')->separate_payment) {?>active<?php }?>" data-type="delivery">
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_paid_separately, ENT_QUOTES, 'UTF-8', true);?>

							</button>
						</div>
						<div class="row row-cols-sm-auto align-items-center js-delivery-option gx-3 <?php if ($_smarty_tpl->getValue('delivery')->price == 0) {?>d-none<?php }?>">
							<div class="col-12">
								<label for="price" class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_cost, ENT_QUOTES, 'UTF-8', true);?>
</label>
								<div class="input-group mb-2 me-sm-2 dl-price">
									<input name="price" id="price" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->price, ENT_QUOTES, 'UTF-8', true);?>
">
									<div class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
								</div>
							</div>
							<div class="col-12">
								<label for="free-from" class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
</label>
								<div class="input-group mb-2 me-sm-2 dl-price">
									<input name="free_from" id="free-from" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->free_from, ENT_QUOTES, 'UTF-8', true);?>
">
									<div class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
								</div>
							</div>
						</div>
						<input class="d-none" name="separate_payment" type="checkbox" value="1" <?php if ($_smarty_tpl->getValue('delivery')->separate_payment) {?>checked<?php }?>>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row gx-2">
		<div class="col-12">
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->delivery_payments, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment_method');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment_method')->value) {
$foreach4DoElse = false;
?>
								<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 my-2">
									<div class="d-flex align-items-center">
										<div class="form-check">
											<input class="form-check-input me-2" type="checkbox" id="delivery-payments-<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
" name="delivery_payments[]" value="<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('payment_method')->id,$_smarty_tpl->getValue('delivery_payments'))) {?>checked<?php }?>>
										</div>
										<label class="form-check-label" for="delivery-payments-<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('payment_method')->name, ENT_QUOTES, 'UTF-8', true);?>
</label>
									</div>
								</div>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_description, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<textarea name="description" id="js-editor" class="editor js-editor-class"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						<div class="row">
							<div class="col-12">
								<div class="d-grid d-sm-block mt-3">
									<button type="submit" class="btn btn-primary float-end">
										<i class="align-middle" data-feather="check"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
	$(document).on("click", ".js-type-delivery", function() {
		var action = $(this).data("type");
		$(".delivery-type").removeClass("active");

		switch (action) {
			case 'paid':
				$(".js-delivery-option").removeClass("d-none");
				$("input[name=separate_payment]").removeAttr("checked");
				$(this).addClass("active");
				break;
			case 'free':
				$(".js-delivery-option").addClass("d-none");
				$(".js-delivery-option").find("input").val(0);
				$("input[name=separate_payment]").removeAttr("checked");
				$(this).addClass("active");
				break;
			case 'delivery':
				$(".js-delivery-option").addClass("d-none");
				$(".js-delivery-option").find("input").val(0);
				$("input[name=separate_payment]").trigger("click");
				$(this).addClass("active");
				break;
		}
	});

	$(function() {
		$('div.js-module-settings').filter(':hidden').find("input, select, textarea").attr("disabled", true);
		$('select[name=module]').on('change', function() {
			$('div.js-module-settings').hide().find("input, select, textarea").attr("disabled", true);
			$('div.js-module-settings[module=' + $(this).val() + ']').show().find("input, select, textarea").attr("disabled", false);
			$('div.js-module-settings[module=' + $(this).val() + ']').find('select').selectpicker('refresh');
		});
	});
<?php echo '</script'; ?>
><?php }
}
