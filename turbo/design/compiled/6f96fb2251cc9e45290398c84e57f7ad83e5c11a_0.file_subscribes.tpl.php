<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:50:33
  from 'file:subscribes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691779f9a92e81_27539906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f96fb2251cc9e45290398c84e57f7ad83e5c11a' => 
    array (
      0 => 'subscribes.tpl',
      1 => 1732736460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_691779f9a92e81_27539906 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_subscribes_email, false, 32);?>

<div class="row">
	<div class="col-12">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_subscribes_email, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('subscribes_count');?>

			</h1>
			<?php if ($_smarty_tpl->getValue('subscribes_count') > 0) {?>
				<div class="d-inline-block heading-block text-dark mb-3 mt-1" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export, ENT_QUOTES, 'UTF-8', true);?>
">
					<i class="align-middle cursor-pointer" data-feather="file-text"></i>
				</div>
			<?php }?>
		</div>
	</div>
</div>

<?php if ($_smarty_tpl->getValue('subscribes_count') > 0) {?>
	<div class="position-relative mb-4 mt-n4">
		<div class="progress position-absolute w-100" style="display: none;">
			<div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
		</div>
	</div>
<?php }?>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('subscribes')) {?>
			<div class="row">
				<div class="col-12">
					<form class="js-form-list" method="post">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
						<div class="users-wrap turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-subscribe-name">Email</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subscribes'), 'subscribe');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subscribe')->value) {
$foreach0DoElse = false;
?>
									<div class="js-row turbo-list-body-item <?php if (!$_smarty_tpl->getValue('subscribe')->processed) {?>unapproved<?php }?> body-narrow">
										<div class="turbo-list-row narrow">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('subscribe')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-subscribe-name">
												<a class="fw-bold text-body text-decoration-none" href="mailto:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('subscribe')->email, ENT_QUOTES, 'UTF-8', true);?>
">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('subscribe')->email, ENT_QUOTES, 'UTF-8', true);?>

												</a>
												<div class="mb-0">
													<span class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_request_sent, ENT_QUOTES, 'UTF-8', true);?>
:</span>
													<span class="badge badge-secondary-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('subscribe')->date);?>
 | <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('subscribe')->date);?>
</span>
												</div>
												<?php if (!$_smarty_tpl->getValue('subscribe')->processed) {?>
													<div class="d-block d-md-none mt-1">
														<button type="button" class="btn btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('subscribe')->processed) {?>js-active-class<?php }?>" data-module="subscribe" data-action="processed" data-id="<?php echo $_smarty_tpl->getValue('subscribe')->id;?>
" onclick="$(this).hide();">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

														</button>
													</div>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-comments-btn">
												<?php if (!$_smarty_tpl->getValue('subscribe')->processed) {?>
													<button type="button" class="btn unapproved btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('subscribe')->processed) {?>js-active-class<?php }?>" data-module="subscribe" data-action="processed" data-id="<?php echo $_smarty_tpl->getValue('subscribe')->id;?>
" onclick="$(this).hide();">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

													</button>
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
											<option value="processed"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>
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
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->subscribe_mailing_mo, ENT_QUOTES, 'UTF-8', true);?>
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
	var in_process = false;
	var keyword='<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
';
	var sort='<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('sort'), ENT_QUOTES, 'UTF-8', true);?>
';

	
		$(function() {

			$(document).on('click', '.feather-file-text', function() {
				Piecon.setOptions({fallback: 'force'});
				Piecon.setProgress(0);
				var progress_item = $("#progressbar");
				$(".progress").show();
				do_export('', progress_item);
			});

			function do_export(page, progress) {
				page = typeof(page) != 'undefined' ? page : 1;
				$.ajax({
					url: "ajax/export_subscribes.php",
					data: {page:page, keyword:keyword, sort:sort},
					dataType: 'json',
					success: function(data) {
						if (data && !data.end) {
							Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
							progress.css('width', 100 * data.page / data.totalpages + '%');
							do_export(data.page * 1 + 1, progress);
						} else {
							Piecon.setProgress(100);
							progress.css('width', '100%');
							window.location.href = 'files/export_users/subscribes.csv';
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
