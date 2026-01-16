<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:50:26
  from 'file:feedbacks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691779f2219537_75532345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b8e4df6d522fbbbc79232df43ee34806df7709' => 
    array (
      0 => 'feedbacks.tpl',
      1 => 1733362862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_691779f2219537_75532345 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_feedback, false, 32);?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feedback, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('feedbacks_count');?>

			</h1>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 float-end">
		<form class="search mb-3" method="get">
			<input type="hidden" name="module" value="CommentsAdmin">
			<div class="input-group">
				<input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
">
				<button class="btn btn-primary" type="submit"><i class="align-middle mt-n1" data-feather="search"></i></button>
			</div>
		</form>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('feedbacks')) {?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form method="post" class="js-form-list">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

						<div class="post-wrap turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-comments-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_messages, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-comments-btn"></div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feedbacks'), 'feedback');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feedback')->value) {
$foreach0DoElse = false;
?>
									<div class="js-row turbo-list-body-item <?php if (!$_smarty_tpl->getValue('feedback')->processed) {?>unapproved<?php }?>">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('feedback')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-comments-name">
												<div class="mb-0">
													<span class="fw-bold text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_name, ENT_QUOTES, 'UTF-8', true);?>
: </span>
													<a href="mailto:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feedback')->name, ENT_QUOTES, 'UTF-8', true);?>
<<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feedback')->email, ENT_QUOTES, 'UTF-8', true);?>
>?subject=<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_request_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feedback')->name, ENT_QUOTES, 'UTF-8', true);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feedback')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
												</div>
												<div class="mb-0">
													<span class="fw-bold text-secondary">Email:</span> <span class="text-body"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feedback')->email, ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
												<div class="mb-0">
													<span class="fw-bold text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_message, ENT_QUOTES, 'UTF-8', true);?>
</span>
													<span class="text-body"><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->getValue('feedback')->message, ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</span>
												</div>
												<span class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_request_sent, ENT_QUOTES, 'UTF-8', true);?>
</span>
												<span class="badge badge-secondary-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('feedback')->date);?>
 | <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('feedback')->date);?>
</span>
												<?php if (!$_smarty_tpl->getValue('feedback')->processed) {?>
													<div class="d-block d-md-none mt-1">
														<button type="button" class="btn btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('feedback')->processed) {?>js-active-class<?php }?>" data-module="feedback" data-action="processed" data-id="<?php echo $_smarty_tpl->getValue('feedback')->id;?>
" onclick="$(this).hide();">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

														</button>
													</div>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-comments-btn">
												<?php if (!$_smarty_tpl->getValue('feedback')->processed) {?>
													<button type="button" class="btn btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('feedback')->processed) {?>js-active-class<?php }?>" data-module="feedback" data-action="processed" data-id="<?php echo $_smarty_tpl->getValue('feedback')->id;?>
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
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->feedbacks_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
