<?php
/* Smarty version 5.4.2, created on 2025-11-23 16:23:42
  from 'file:users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69230adec96965_14934304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd99e3053e7feba2a9a8d8549e3ffb46a3b4cd1' => 
    array (
      0 => 'users.tpl',
      1 => 1733362466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
    'file:pagination.tpl' => 1,
  ),
))) {
function content_69230adec96965_14934304 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_users, false, 32);?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_users, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('users_count');?>

			</h1>
			<?php if ($_smarty_tpl->getValue('users_count') > 0) {?>
				<div class="d-inline-block heading-block text-dark me-3 mb-3 mt-1" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->users_export, ENT_QUOTES, 'UTF-8', true);?>
">
					<i class="align-middle cursor-pointer" data-feather="file-text"></i>
				</div>
			<?php }?>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 float-sm-end">
		<form class="search mb-3" method="get">
			<input type="hidden" name="module" value="UsersAdmin">
			<div class="input-group">
				<input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
">
				<button class="btn btn-primary" type="submit"><i class="align-middle mt-n1" data-feather="search"></i></button>
			</div>
		</form>
	</div>
</div>

<?php if ($_smarty_tpl->getValue('users_count') > 0) {?>
	<div class="position-relative pt-1 mb-4 mt-n4">
		<div class="progress position-absolute w-100" style="display: none;">
			<div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
		</div>
	</div>
<?php }?>

<div class="card">
	<div class="card-header d-block d-lg-none">
		<div class="card-actions float-end">
			<div class="position-relative collapse-icon">
				<a href="javascript:;" class="collapse-chevron">
					<i class="align-middle" data-feather="chevron-down"></i>
				</a>
			</div>
		</div>
		<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_filter, ENT_QUOTES, 'UTF-8', true);?>
</h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-12">
				<div class="collapse-card boxed-sorting">
					<div class="row">
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select class="selectpicker" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('group_id'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php if ($_smarty_tpl->getValue('groups')) {?>
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'g');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach0DoElse = false;
?>
										<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('group_id'=>$_smarty_tpl->getValue('g')->id), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('group') && $_smarty_tpl->getValue('group')->id == $_smarty_tpl->getValue('g')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('g')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<?php }?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->getValue('users')) {?>
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
								<div class="turbo-list-heading turbo-list-users-name">
									<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
									<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort'=>'name'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('sort') == 'name') {?>class="active" <?php }?>><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), (int) 0, $_smarty_current_dir);
?></a>
								</div>
								<div class="turbo-list-heading turbo-list-users-email">
									<span>Email</span>
									<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort'=>'email'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('sort') == 'email') {?>class="active" <?php }?>><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), (int) 0, $_smarty_current_dir);
?></a>
								</div>
								<div class="turbo-list-heading turbo-list-users-date">
									<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_registration_date, ENT_QUOTES, 'UTF-8', true);?>
</span>
									<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort'=>'date'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('sort') == 'date') {?>class="active" <?php }?>><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), (int) 0, $_smarty_current_dir);
?></a>
								</div>
								<div class="turbo-list-heading turbo-list-users-group"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-count"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->users_orders, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body sortable">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach1DoElse = false;
?>
									<div class="js-row turbo-list-body-item js-sort-item body-narrow">
										<div class="turbo-list-row narrow">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('user')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-users-name">
												<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'UserAdmin','id'=>$_smarty_tpl->getValue('user')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->name, ENT_QUOTES, 'UTF-8', true);?>

												</a>
											</div>
											<div class="turbo-list-boding turbo-list-users-email">
												<a href="mailto:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->name, ENT_QUOTES, 'UTF-8', true);?>
<<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->email, ENT_QUOTES, 'UTF-8', true);?>
>" class="fw-bold text-body text-decoration-none">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->email, ENT_QUOTES, 'UTF-8', true);?>

												</a>
											</div>
											<div class="turbo-list-boding turbo-list-users-date">
												<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('user')->created);?>
 | <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('user')->created);?>

											</div>
											<div class="turbo-list-boding turbo-list-users-group">
												<?php if ($_smarty_tpl->getValue('groups')[$_smarty_tpl->getValue('user')->group_id]) {?>
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('groups')[$_smarty_tpl->getValue('user')->group_id]->name, ENT_QUOTES, 'UTF-8', true);?>

												<?php } else { ?>
													—
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-count">
												<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user')->orders);?>

											</div>
											<div class="turbo-list-boding turbo-list-status">
												<div class="form-check form-switch">
													<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('user')->enabled) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('user')->id;?>
" data-module="user" data-action="enabled" data-id="<?php echo $_smarty_tpl->getValue('user')->id;?>
" name="enabled" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('user')->enabled) {?>checked=""<?php }?>>
													<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('user')->id;?>
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
									<div class="turbo-list-heading turbo-list-check">
										<label class="form-check">
											<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
										</label>
									</div>
									<div class="turbo-list-option">
										<select name="action" class="selectpicker js-user-select">
											<option value="0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_select_action, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="enable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="disable"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="move_to"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->users_move, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<option value="delete"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
										</select>
									</div>
									<div id="move_to" class="turbo-list-option hidden js-hide-block">
										<select name="move_group" class="selectpicker">
											<?php if ($_smarty_tpl->getValue('groups')) {?>
												<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach2DoElse = false;
?>
													<option value="<?php echo $_smarty_tpl->getValue('group')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('group')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											<?php }?>
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
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->users_no, ENT_QUOTES, 'UTF-8', true);?>
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
	var group_id='<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('group_id'), ENT_QUOTES, 'UTF-8', true);?>
';
	var keyword='<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
';
	var sort='<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('sort'), ENT_QUOTES, 'UTF-8', true);?>
';
<?php echo '</script'; ?>
>


	<?php echo '<script'; ?>
>
		$(function() {
			$(document).on('change', 'select.js-user-select', function() {
				var elem = $(this).find('option:selected').val();
				$('.js-hide-block').addClass('hidden');
				if ($('#' + elem).length > 0) {
					$('#' + elem).removeClass('hidden');
				}
			});

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
					url: "ajax/export_users.php",
					data: {page:page, group_id:group_id, keyword:keyword, sort:sort},
					dataType: 'json',
					success: function(data) {
						if (data && !data.end) {
							Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
							progress.css('width', 100 * data.page / data.totalpages + '%');
							do_export(data.page * 1 + 1, progress);
						} else {
							Piecon.setProgress(100);
							progress.css('width', '100%');
							window.location.href = 'files/export_users/users.csv';
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
