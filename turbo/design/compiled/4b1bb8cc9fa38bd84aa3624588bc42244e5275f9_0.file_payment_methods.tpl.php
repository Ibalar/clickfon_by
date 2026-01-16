<?php
/* Smarty version 5.4.2, created on 2025-11-16 18:05:59
  from 'file:payment_methods.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6919e8575b6706_96749186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b1bb8cc9fa38bd84aa3624588bc42244e5275f9' => 
    array (
      0 => 'payment_methods.tpl',
      1 => 1717216760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6919e8575b6706_96749186 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->payment_methods_methods, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->payment_methods_methods, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PaymentMethodAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->payment_methods_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('payment_methods')) {?>
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
						<div class="turbo-list-heading turbo-list-payment-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delete"></div>
					</div>
					<div class="deliveries-wrap turbo-list-body sortable">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment_method');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment_method')->value) {
$foreach0DoElse = false;
?>
							<div class="js-row turbo-list-body-item js-sort-item body-narrow">
								<div class="turbo-list-row narrow">
									<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('payment_method')->position;?>
">
									<div class="turbo-list-boding turbo-list-drag move-zone">
										<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
									</div>
									<div class="turbo-list-boding turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
">
										</label>
									</div>
									<div class="turbo-list-boding turbo-list-photo small-photo boding-small turbo-list-payment-photo">
										<?php if ($_smarty_tpl->getValue('payment_method')->icon) {?>
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->getValue('payment_method')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
												<img src="../<?php echo $_smarty_tpl->getValue('config')->payment_images_dir;
echo $_smarty_tpl->getValue('payment_method')->icon;?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('payment_method')->name, ENT_QUOTES, 'UTF-8', true);?>
">
											</a>
										<?php } elseif ($_smarty_tpl->getValue('payment_method')->code) {?>
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->getValue('payment_method')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
												<i class="align-middle" data-feather="code"></i>
											</a>
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->getValue('payment_method')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
												<i class="align-middle" data-feather="camera"></i>
											</a>
										<?php }?>
									</div>
									<div class="turbo-list-boding turbo-list-payment-name">
										<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->getValue('payment_method')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('payment_method')->name, ENT_QUOTES, 'UTF-8', true);?>

										</a>
									</div>
									<div class="turbo-list-boding turbo-list-status">
										<div class="form-check form-switch">
											<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('payment_method')->enabled) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
" data-module="payment" data-action="enabled" data-id="<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('payment_method')->enabled) {?>checked=""<?php }?>>
											<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
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
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->payment_methods_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
