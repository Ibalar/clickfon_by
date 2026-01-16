<?php
/* Smarty version 5.4.2, created on 2025-11-14 17:58:47
  from 'file:settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691743a7a44844_37930798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05538fd753b96426507d63c59519ad9b24b72a98' => 
    array (
      0 => 'settings.tpl',
      1 => 1733260374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691743a7a44844_37930798 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_settings_title, false, 32);?>

<h1 class="mb-3">
	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings_title, ENT_QUOTES, 'UTF-8', true);?>

</h1>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'saved') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'cache_cleared') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->cache_cleared, ENT_QUOTES, 'UTF-8', true);?>

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
	<div class="row gx-2">
		<div class="col-lg-6 col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_parameters, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_sitename, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="site_name" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_company_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="company_name" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->company_name, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="date_format" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->date_format, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_admintooltip, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="admintooltip" class="selectpicker">
										<option value="on" <?php if ($_smarty_tpl->getValue('settings')->admintooltip == "on") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="off" <?php if ($_smarty_tpl->getValue('settings')->admintooltip == "off") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div><div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_shutdown, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="site_work" class="selectpicker">
										<option value="on" <?php if ($_smarty_tpl->getValue('settings')->site_work == "on") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="off" <?php if ($_smarty_tpl->getValue('settings')->site_work == "off") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->manager_language, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="manager_lang" class="selectpicker" data-width="fit">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('btr_languages'), 'label', false, 'name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('name')->value => $_smarty_tpl->getVariable('label')->value) {
$foreach0DoElse = false;
?>
											<option value='<?php echo $_smarty_tpl->getValue('label');?>
' <?php if ($_smarty_tpl->getValue('settings')->lang == $_smarty_tpl->getValue('label')) {?>selected<?php }?> data-content='<span class="flag-icon flag-icon-<?php echo $_smarty_tpl->getValue('label');?>
"></span> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_notifications, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_emails, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="order_email" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->order_email, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_comments, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="comment_email" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->comment_email, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_reverce, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="notify_from_email" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->notify_from_email, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_admin_email, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="admin_email" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->admin_email, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_email_lang, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="email_lang" class="selectpicker">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('btr_languages'), 'label', false, 'name');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('name')->value => $_smarty_tpl->getVariable('label')->value) {
$foreach1DoElse = false;
?>
											<option value='<?php echo $_smarty_tpl->getValue('label');?>
' <?php if ($_smarty_tpl->getValue('settings')->email_lang == $_smarty_tpl->getValue('label')) {?>selected<?php }?> data-content='<span class="flag-icon flag-icon-<?php echo $_smarty_tpl->getValue('label');?>
"></span> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_sender_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="notify_from_name" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->notify_from_name, ENT_QUOTES, 'UTF-8', true);?>
">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_customize, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_color_mode, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="admin_theme" class="selectpicker">
										<option value="default" <?php if ($_smarty_tpl->getValue('settings')->admin_theme == "default") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_default, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="dark" <?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_dark, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="light" <?php if ($_smarty_tpl->getValue('settings')->admin_theme == "light") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_light, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="colored" <?php if ($_smarty_tpl->getValue('settings')->admin_theme == "colored") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_colored, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_sidebar, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="sidebar" class="selectpicker">
										<option value="default" <?php if ($_smarty_tpl->getValue('settings')->sidebar == "default") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_default, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="compact" <?php if ($_smarty_tpl->getValue('settings')->sidebar == "compact") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_compact, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_layout, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="layout" class="selectpicker">
										<option value="fluid" <?php if ($_smarty_tpl->getValue('settings')->layout == "fluid") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_fluid, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="boxed" <?php if ($_smarty_tpl->getValue('settings')->layout == "boxed") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_boxed, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_sidebar_position, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="position" class="selectpicker">
										<option value="left" <?php if ($_smarty_tpl->getValue('settings')->position == "left") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_left, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="right" <?php if ($_smarty_tpl->getValue('settings')->position == "right") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_right, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_smtp, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="smtp-notify" name="use_smtp" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->use_smtp) {?>checked="" <?php }?>>
											<label class="form-check-label" for="smtp-notify"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_use_smtp, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_smtp_server, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="smtp_server" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->smtp_server, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_smtp_port, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="smtp_port" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->smtp_port, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_smtp_user, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="smtp_user" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->smtp_user, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_smtp_pass, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="smtp_pass" class="form-control" type="password" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->smtp_pass, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<button type="button" class="js-test-smtp btn btn-primary rotate-icon">
										<i class="align-middle me-1" data-feather="refresh-cw"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_do_test_smtp, ENT_QUOTES, 'UTF-8', true);?>

									</button>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="js-test-smtp-status form-label"></div>
								</div>
							</div>
							<div class="js-trace col-12 d-none">
								<div class="alert alert-primary alert-dismissible mb-2" role="alert">
									<div class="alert-message">
										<h4 class="alert-heading"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_notify_test_smtp_trace, ENT_QUOTES, 'UTF-8', true);?>
</h4>
										<div class="js-test-smtp-trace"></div>
									</div>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_messengers_settings, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label">Viber</div>
									<input name="chat_viber" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->chat_viber, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="XXXXXXXXXXXX">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label">WhatsApp</div>
									<input name="chat_whats_app" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->chat_whats_app, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="XXXXXXXXXXXX">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label">Telegram</div>
									<input name="chat_telegram" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->chat_telegram, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="username">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="form-label">Facebook Messenger</div>
									<input name="chat_facebook" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->chat_facebook, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="username">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->notifications_telegram, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="tg-notify" name="tg_notify" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->tg_notify) {?>checked="" <?php }?>>
											<label class="form-check-label" for="tg-notify"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->enable_notifications, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="mb-3">
									<div class="form-label">Token</div>
									<input name="tg_token" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->tg_token, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<div class="form-label">API URL</div>
									<input name="tg_apiurl" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->tg_apiurl, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<div class="form-label">Chat ID</div>
									<input name="tg_channel" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->tg_channel, ENT_QUOTES, 'UTF-8', true);?>
">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->gpt_settings, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="alert alert-primary" role="alert">
							<div class="alert-message">
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->gpt_get_key, ENT_QUOTES, 'UTF-8', true);?>
 <a href="https://platform.openai.com/api-keys" class="alert-link" target="_blank"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->gpt_account, ENT_QUOTES, 'UTF-8', true);?>
</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label">Key</div>
									<input name="gpt_key" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->gpt_key, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label">Model</div>
									<input name="model" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->model, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="mb-3">
									<div class="form-label">Max Tokens</div>
									<input name="max_tokens" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->max_tokens, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="mb-3">
									<div class="form-label">Temperature</div>
									<input name="temperature" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->temperature, ENT_QUOTES, 'UTF-8', true);?>
">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_products_on_page, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="products_num" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->products_num, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_products_on_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="products_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->products_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_features_on_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="features_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->features_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_products_max, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="max_order_amount" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->max_order_amount, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="units" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->units, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_weight_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="weight_units" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->weight_units, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_cents, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="decimals_point" class="selectpicker">
										<option value='.' <?php if ($_smarty_tpl->getValue('settings')->decimals_point == '.') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_dot, ENT_QUOTES, 'UTF-8', true);?>
 12.45 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value=',' <?php if ($_smarty_tpl->getValue('settings')->decimals_point == ',') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_comma, ENT_QUOTES, 'UTF-8', true);?>
 12,45 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_thousands, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="thousands_separator" class="selectpicker">
										<option value=' ' <?php if ($_smarty_tpl->getValue('settings')->thousands_separator == ' ') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_space, ENT_QUOTES, 'UTF-8', true);?>
 1 245 678 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value='' <?php if ($_smarty_tpl->getValue('settings')->thousands_separator == '') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_without, ENT_QUOTES, 'UTF-8', true);?>
 1245678 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
						</div>
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="category-count" name="category_count" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->category_count) {?>checked="" <?php }?>>
											<label class="form-check-label" for="category-count"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->count_products_category, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_brands_on_site, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="brands_num" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->brands_num, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_brands_on_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="brands_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->brands_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_faq, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_faq_on_site, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="faq_num" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->faq_num, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_faq_on_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="faq_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->faq_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_blog_articles, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_blog_posts_site, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="blog_num" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->blog_num, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_blog_posts_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="blog_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->blog_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_articles_on_site, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="articles_num" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->articles_num, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_articles_on_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="articles_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->articles_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_comments, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_comments_site, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="comments_num" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->comments_num, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_comments_admin, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="comments_num_admin" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->comments_num_admin, ENT_QUOTES, 'UTF-8', true);?>
">
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
			<div class="card mh-210px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_capcha, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-product" name="captcha_product" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_product) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-product"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_product, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-post" name="captcha_post" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_post) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-post"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_blog, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-article" name="captcha_article" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_article) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-article"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_article, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-cart" name="captcha_cart" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_cart) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-cart"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_cart, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-register" name="captcha_register" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_register) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-register"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_register, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-feedback" name="captcha_feedback" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_feedback) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-feedback"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_contact_form, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-callback" name="captcha_callback" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_callback) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-callback"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_callback, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-fastorder" name="captcha_fastorder" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_fastorder) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-fastorder"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_fastorder, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="captcha-review" name="captcha_review" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->captcha_review) {?>checked="" <?php }?>>
											<label class="form-check-label" for="captcha-review"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_general_review, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->caching_settings, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->cache_database_queries, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="cached" class="selectpicker">
										<option value='0' <?php if ($_smarty_tpl->getValue('settings')->cached == '0') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_no, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value='1' <?php if ($_smarty_tpl->getValue('settings')->cached == '1') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_yes, ENT_QUOTES, 'UTF-8', true);?>
</option>
									</select>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->caching_service, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<select name="cache_type" class="selectpicker">
										<option value='0' <?php if ($_smarty_tpl->getValue('settings')->cache_type == '0') {?>selected<?php }?>>Memcache</option>
										<option value='1' <?php if ($_smarty_tpl->getValue('settings')->cache_type == '1') {?>selected<?php }?>>Memcached</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-3">
								<div class="mb-3">
									<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->cache_lifetime, ENT_QUOTES, 'UTF-8', true);?>
</div>
									<input name="cache_time" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->cache_time, ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
							</div>
							<div class="col-lg-3 col-md-3">
								<div class="mb-3">
									<div class="form-label">&nbsp;</div>
									<button name="clear_cache" type="submit" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->clear_cache, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-danger rotate-icon">
										<i class="align-middle me-1" data-feather="refresh-cw"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->clear_cache, ENT_QUOTES, 'UTF-8', true);?>

									</button>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_image, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="bg-light rounded mb-3">
							<div class="p-3">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="smart-resize" name="smart_resize" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->smart_resize) {?>checked=""<?php }?>>
											<label class="form-check-label" for="smart-resize"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_precise_resizing_images, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="webp-support" name="webp_support" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->webp_support) {?>checked=""<?php }?>>
											<label class="form-check-label" for="webp-support"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_enable_webp, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2">
										<div class="form-check form-switch form-check-reverse form-check-inline">
											<input class="form-check-input ms-2" id="watermark-enable" name="watermark_enable" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('settings')->watermark_enable) {?>checked=""<?php }?>>
											<label class="form-check-label" for="watermark-enable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_watermark_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 my-2 js-range-wrap">
										<div class="form-label">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_image_quality, ENT_QUOTES, 'UTF-8', true);?>

											<span class="font-weight-bold js-show-range"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->image_quality, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</div>
										<div class="raiting-boxed">
											<input class="js-range-value" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->image_quality, ENT_QUOTES, 'UTF-8', true);?>
" name="image_quality">
											<input class="js-range form-range" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->image_quality, ENT_QUOTES, 'UTF-8', true);?>
">
											<div class="raiting-range-number">
												<span class="float-start">0</span>
												<span class="float-end">100</span>
											</div>
										</div>
									</div>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_watermark, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="nested-boxed-watermark">
									<ul class="watermark-images-list">
										<li class="watermark-image-item border-image-item <?php if ($_smarty_tpl->getValue('config')->watermark_file) {?>border<?php }?>">
											<?php if ($_smarty_tpl->getValue('config')->watermark_file) {?>
												<input type="hidden" class="js-accept-delete" name="delete_image" value="">
												<div class="js-parent-image">
													<div class="watermark-image image-wrapper js-image-wrapper text-center">
														<a href="javascript:;" class="js-delete-item remove-image"></a>
														<img src="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/<?php echo $_smarty_tpl->getValue('config')->watermark_file;?>
?<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>'rand(10,10000)'), $_smarty_tpl);?>
" alt="">
													</div>
												</div>
											<?php } else { ?>
												<div class="js-parent-image"></div>
											<?php }?>
											<div class="js-upload-image dropzone-block-image <?php if ($_smarty_tpl->getValue('config')->watermark_file) {?>d-none<?php }?>">
												<i class="align-middle" data-feather="plus"></i>
												<input class="dropzone-image" name="watermark_file" type="file">
											</div>
											<div class="watermark-image image-wrapper js-image-wrapper js-new-image text-center">
												<a href="javascript:;" class="js-delete-item remove-image"></a>
												<img src="" alt="">
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="row">
									<div class="col-xs-12 js-range-wrap">
										<div class="form-label">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_watermark_position, ENT_QUOTES, 'UTF-8', true);?>

											<span class="js-show-range"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</div>
										<div class="raiting-boxed mb-4">
											<input class="js-range-value" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
" name="watermark_offset_x">
											<input class="js-range form-range" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
">
											<div class="raiting-range-number">
												<span class="float-start">0</span>
												<span class="float-end">100</span>
											</div>
										</div>
									</div>
									<div class="col-xs-12 js-range-wrap">
										<div class="form-label">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_watermark_position_y, ENT_QUOTES, 'UTF-8', true);?>

											<span class="font-weight-bold js-show-range"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</div>
										<div class="raiting-boxed mb-4">
											<input class="js-range-value" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
" name="watermark_offset_y">
											<input class="js-range form-range" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
">
											<div class="raiting-range-number">
												<span class="float-start">0</span>
												<span class="float-end">100</span>
											</div>
										</div>
									</div>
									<div class="col-xs-12 js-range-wrap">
										<div class="form-label">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_watermark_transparency, ENT_QUOTES, 'UTF-8', true);?>

											<span class="font-weight-bold js-show-range"><?php echo $_smarty_tpl->getValue('settings')->watermark_transparency;?>
</span>
										</div>
										<div class="raiting-boxed mb-4">
											<input class="js-range-value" type="hidden" value="<?php echo $_smarty_tpl->getValue('settings')->watermark_transparency;?>
" name="watermark_transparency">
											<input class="js-range form-range" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->watermark_transparency, ENT_QUOTES, 'UTF-8', true);?>
">
											<div class="raiting-range-number">
												<span class="float-start">0</span>
												<span class="float-end">100</span>
											</div>
										</div>
									</div>
									<div class="col-xs-12 js-range-wrap">
										<div class="form-label">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_catalog_watermark_sharpness, ENT_QUOTES, 'UTF-8', true);?>

											<span class="font-weight-bold js-show-range"><?php echo $_smarty_tpl->getValue('settings')->images_sharpen;?>
</span>
										</div>
										<div class="raiting-boxed mb-4">
											<input class="js-range-value" type="hidden" value="<?php echo $_smarty_tpl->getValue('settings')->images_sharpen;?>
" name="images_sharpen">
											<input class="js-range form-range" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->images_sharpen, ENT_QUOTES, 'UTF-8', true);?>
">
											<div class="raiting-range-number">
												<span class="float-start">0</span>
												<span class="float-end">100</span>
											</div>
										</div>
									</div>
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
			<div class="d-grid d-sm-block mt-3">
				<button type="submit" class="btn btn-primary float-end">
					<i class="align-middle" data-feather="check"></i>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

				</button>
			</div>
		</div>
	</div>
</form>

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
	$(document).on("input", ".js-range", function() {
		$(this).closest(".js-range-wrap").find(".js-show-range").html($(this).val());
		$(this).closest(".js-range-wrap").find(".js-range-value").val($(this).val());
	});

	$(document).on('click', '.js-test-smtp', function() {
		$('.js-test-smtp-status').fadeOut(100);

		var server = $('input[name="smtp_server"]').val(),
			port = $('input[name="smtp_port"]').val(),
			user = $('input[name="smtp_user"]').val(),
			pass = $('input[name="smtp_pass"]').val();

		$.ajax({
			url: 'ajax/test_smtp.php',
			type: 'POST',
			data: {
				server: server,
				port: port,
				user: user,
				pass: pass
			},
			success: function(data) {
				$('.js-test-smtp-status').text(data.message);

				if (data.status == true) {
					$('.js-test-smtp-trace').text('').closest('.js-trace').addClass('d-none');
					$('.js-test-smtp-status').removeClass('text-danger').addClass('text-success');
				} else {
					$('.js-test-smtp-trace').html(data.trace).closest('.js-trace').removeClass('d-none');
					$('.js-test-smtp-status').removeClass('text-success').addClass('text-danger');
				}

				$('.js-test-smtp-status').fadeIn(500);
			}
		});
	});
<?php echo '</script'; ?>
><?php }
}
