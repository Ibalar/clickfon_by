<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:47:07
  from 'file:manager.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6917792b487924_20863129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f012d51b28ffdb90a74d673159e468fd5c6cf17b' => 
    array (
      0 => 'manager.tpl',
      1 => 1732736300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6917792b487924_20863129 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('m')->login) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('m')->login, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->manager_new, false, 32);
}?>

<h1 class="mb-3">
	<?php if ($_smarty_tpl->getValue('m')->login) {?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->login, ENT_QUOTES, 'UTF-8', true);?>

	<?php } else { ?>
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_add, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
</h1>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_added, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_updated, ENT_QUOTES, 'UTF-8', true);?>

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

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'login_exists') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_exists, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'empty_login') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_enter_login, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'not_writable') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_not_writable, ENT_QUOTES, 'UTF-8', true);?>

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
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_basic, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="mb-3">
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_login, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<input class="form-control" name="login" autocomplete="off" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->login, ENT_QUOTES, 'UTF-8', true);?>
">
							<input name="old_login" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('m')->login, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<div class="mb-3">
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_pass, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<input class="form-control" autocomplete="off" name="password" type="password" value="" placeholder="••••••">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card mh-230px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_rights, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="d-flex align-content-start mb-3">
							<div class="form-check form-switch form-check-reverse">
								<input class="form-check-input ms-2 js-all-perms" type="checkbox" id="all-perms">
								<label class="form-check-label" for="all-perms"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_all_access, ENT_QUOTES, 'UTF-8', true);?>
</label>
							</div>
						</div>
						<?php $_smarty_tpl->assign('dashboard', array('dashboard'=>$_smarty_tpl->getValue('btr')->global_dashboard), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_dashboard, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dashboard'), 'items', false, 'title');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach0DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('catalog', array('products'=>$_smarty_tpl->getValue('btr')->global_products,'categories'=>$_smarty_tpl->getValue('btr')->global_categories,'brands'=>$_smarty_tpl->getValue('btr')->global_brands,'features'=>$_smarty_tpl->getValue('btr')->global_features), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_catalog, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('catalog'), 'items', false, 'title');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach2DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach3DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('orders', array('orders'=>$_smarty_tpl->getValue('btr')->global_orders,'labels'=>$_smarty_tpl->getValue('btr')->global_labels), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_orders, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'items', false, 'title');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach4DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach5DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('users', array('users'=>$_smarty_tpl->getValue('btr')->global_users,'groups'=>$_smarty_tpl->getValue('btr')->global_groups,'coupons'=>$_smarty_tpl->getValue('btr')->global_coupons), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_users, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'items', false, 'title');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach6DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach7DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('pages', array('pages'=>$_smarty_tpl->getValue('btr')->global_pages,'menus'=>$_smarty_tpl->getValue('btr')->global_menu), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'items', false, 'title');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach8DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach9DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('blog', array('blog'=>$_smarty_tpl->getValue('btr')->global_blog,'articles'=>$_smarty_tpl->getValue('btr')->global_articles), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blog, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blog'), 'items', false, 'title');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach10DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach11DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('feedbacks', array('comments'=>$_smarty_tpl->getValue('btr')->global_comments,'feedbacks'=>$_smarty_tpl->getValue('btr')->global_feedback,'callbacks'=>$_smarty_tpl->getValue('btr')->global_callbacks,'subscribes'=>$_smarty_tpl->getValue('btr')->global_subscribes), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feedback, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feedbacks'), 'items', false, 'title');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach12DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach13DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('faq', array('faq'=>$_smarty_tpl->getValue('btr')->global_faq), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_faq, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq'), 'items', false, 'title');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach14DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach15DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('automation', array('import'=>$_smarty_tpl->getValue('btr')->global_import,'export'=>$_smarty_tpl->getValue('btr')->global_export,'backup'=>$_smarty_tpl->getValue('btr')->global_backup,'clear'=>$_smarty_tpl->getValue('btr')->global_clear), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_automation, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('automation'), 'items', false, 'title');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach16DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach17DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('stats', array('stats'=>$_smarty_tpl->getValue('btr')->global_stats), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_stats, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stats'), 'items', false, 'title');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach18DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach19DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('design', array('design'=>$_smarty_tpl->getValue('btr')->global_design), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_design, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('design'), 'items', false, 'title');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach20DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach21DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('banners', array('banners'=>$_smarty_tpl->getValue('btr')->global_banners), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_banners, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners'), 'items', false, 'title');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach22DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach23DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('seo', array('seo'=>$_smarty_tpl->getValue('btr')->seo_automation,'scripts'=>$_smarty_tpl->getValue('btr')->global_scripts,'robots'=>'Robots.txt'), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_seo, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('seo'), 'items', false, 'title');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach24DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach25DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('settings', array('settings'=>$_smarty_tpl->getValue('btr')->global_settings,'currency'=>$_smarty_tpl->getValue('btr')->global_currency,'delivery'=>$_smarty_tpl->getValue('btr')->global_shipping,'payment'=>$_smarty_tpl->getValue('btr')->global_payment,'managers'=>$_smarty_tpl->getValue('btr')->global_managers,'languages'=>$_smarty_tpl->getValue('btr')->global_languages), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('settings'), 'items', false, 'title');
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach26DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach27DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<?php $_smarty_tpl->assign('feeds', array('feeds'=>$_smarty_tpl->getValue('btr')->global_feeds), false, NULL);?>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<h5 class="fw-bold text-black-50 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feeds, ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<div class="row">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feeds'), 'items', false, 'title');
$foreach28DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach28DoElse = false;
?>
										<div class="col-xl-3 col-lg-4 col-md-6 mb-3">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'key');
$foreach29DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach29DoElse = false;
?>
												<div class="form-check form-switch form-check-reverse form-check-inline <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>text-muted<?php }?>">
													<input class="form-check-input ms-2 js-item-perm" id="<?php echo $_smarty_tpl->getValue('title');?>
" name="permissions[]" value="<?php echo $_smarty_tpl->getValue('title');?>
" type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('title'),$_smarty_tpl->getValue('m')->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->getValue('m')->login == $_smarty_tpl->getValue('manager')->login) {?>disabled<?php }?>>
													<label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('title');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item'), ENT_QUOTES, 'UTF-8', true);?>
</label>
												</div>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="d-grid d-sm-block mt-1 mb-3">
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

<?php echo '<script'; ?>
>
	$(document).on("change", ".js-all-perms", function() {
		if ($(this).is(":checked")) {
			$('.js-item-perm').each(function() {
				if (!$(this).is(":checked")) {
					$(this).trigger("click");
				}
			});
		} else {
			$('.js-item-perm').each(function() {
				if ($(this).is(":checked")) {
					$(this).trigger("click");
				}
			})
		}
	})
<?php echo '</script'; ?>
><?php }
}
