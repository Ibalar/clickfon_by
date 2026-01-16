<?php
/* Smarty version 5.4.2, created on 2025-11-24 21:55:42
  from 'file:comments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6924aa2e3b8456_64362463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cca5e0289aa3692eadade09735361b3a3c99dfb' => 
    array (
      0 => 'comments.tpl',
      1 => 1733176884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_6924aa2e3b8456_64362463 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/8cca5e0289aa3692eadade09735361b3a3c99dfb_0.file_comments.tpl.php',
    'uid' => '8cca5e0289aa3692eadade09735361b3a3c99dfb',
    'call_name' => 'smarty_template_function_comments_tree_14218579406924aa2e334b71_34437184',
  ),
));
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_comments, false, 32);?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php if (!$_smarty_tpl->getValue('type')) {?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('comments_count');?>

				<?php } elseif ($_smarty_tpl->getValue('type') == 'product') {?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_product_small, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('comments_count');?>

				<?php } elseif ($_smarty_tpl->getValue('type') == 'blog') {?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_news_small, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('comments_count');?>

				<?php } elseif ($_smarty_tpl->getValue('type') == 'article') {?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_article_small, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('comments_count');?>

				<?php } elseif ($_smarty_tpl->getValue('type') == 'review') {?>
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_review, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('comments_count');?>

				<?php }?>
			</h1>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 float-sm-end">
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
			<div class="col-lg-12 col-md-12">
				<div class="collapse-card boxed-sorting">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 mb-3">
							<select class="selectpicker" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('type'=>null,'item_id'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('type')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'item_id'=>null,'page'=>null,'type'=>'product'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('type') == 'product') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'item_id'=>null,'page'=>null,'type'=>'blog'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('type') == 'blog') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_news, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'item_id'=>null,'page'=>null,'type'=>'article'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('type') == 'article') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_articles, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'item_id'=>null,'page'=>null,'type'=>'review'), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('type') == 'review') {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_review, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->getValue('comments')) {?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form class="js-form-list" method="post">
						<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
						<div class="post-wrap turbo-list">
							<div class="turbo-list-head">
								<div class="turbo-list-heading turbo-list-check">
									<label class="form-check">
										<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
									</label>
								</div>
								<div class="turbo-list-heading turbo-list-comments-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-comments-btn"></div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								
								<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->getValue('comments')), true);?>

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
											<option value="approve"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>
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
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div>

<div class="modal fade" id="answer-popup" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_answer, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post">
				<div class="modal-body">
					<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
					<input id="js-parent-id" type="hidden" name="parent_id" value="">
					<textarea id="js-comment-area" class="form-control turbo-textarea" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enter_answer, ENT_QUOTES, 'UTF-8', true);?>
" name="text" rows="10" cols="50"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="align-middle" data-feather="x"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_cancel, ENT_QUOTES, 'UTF-8', true);?>
</button>
					<button type="submit" name="comment_answer" value="1" class="btn btn-success"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_answer, ENT_QUOTES, 'UTF-8', true);?>
</button>
				</div>
			</form>
		</div>
	</div>
</div>


	<?php echo '<script'; ?>
>
		$(function() {
			$('.js-answer').on('click', function() {
				$('#js-parent-id').val($(this).data('parent-id'));
				$('#js-comment-area').html($(this).data('user-name') + ', ');
			});
		});
	<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_comments_tree_14218579406924aa2e334b71_34437184 */
if (!function_exists('smarty_template_function_comments_tree_14218579406924aa2e334b71_34437184')) {
function smarty_template_function_comments_tree_14218579406924aa2e334b71_34437184(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'comments_tree','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('comments'), 'comment');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comment')->value) {
$foreach0DoElse = false;
?>
										<div class="js-row turbo-list-body-item <?php if (!$_smarty_tpl->getValue('comment')->approved) {?>unapproved<?php }?> <?php if ($_smarty_tpl->getValue('level') > 0) {?>subcomments-level-<?php echo $_smarty_tpl->getValue('level');
}?>">
											<div class="turbo-list-row">
												<?php if ($_smarty_tpl->getValue('level') > 0) {?><div class="turbo-list-heading turbo-list-subcomment"></div><?php }?>
												<div class="turbo-list-boding turbo-list-check">
													<label class="form-check">
														<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('comment')->id;?>
">
													</label>
												</div>
												<div class="turbo-list-boding turbo-list-comments-name <?php if ($_smarty_tpl->getValue('level') > 0) {?>admin-note<?php }?>">
													<div class="me-1 <?php if (!$_smarty_tpl->getValue('comment')->admin) {?>admin<?php }?>">
														<span class="fw-bold text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_name, ENT_QUOTES, 'UTF-8', true);?>
: </span>
														<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CommentAdmin','id'=>$_smarty_tpl->getValue('comment')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('comment')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
														<?php if ($_smarty_tpl->getValue('comment')->admin) {?><span class="badge badge-danger-light align-top">Admin</span><?php }?>
													</div>
													<div class="mb-0">
														<span class="fw-bold text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_message, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<span class="text-body"><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->getValue('comment')->text, ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</span>
													</div>
													<div class="mb-0">
														<span class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_left, ENT_QUOTES, 'UTF-8', true);?>
</span>
														<span class="badge badge-secondary-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('comment')->date);?>
 | <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('comment')->date);?>
</span>
														<?php if ($_smarty_tpl->getValue('level') == 0) {?>
															<span class="text-secondary"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_to_the, ENT_QUOTES, 'UTF-8', true);?>
</span>
															<?php if ($_smarty_tpl->getValue('comment')->type == 'product') {?>
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_product, ENT_QUOTES, 'UTF-8', true);?>
<a target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/products/<?php echo $_smarty_tpl->getValue('comment')->product->url;?>
#comment_<?php echo $_smarty_tpl->getValue('comment')->id;?>
" class="fw-bold text-body text-decoration-none ms-1"><?php echo $_smarty_tpl->getValue('comment')->product->name;?>
</a>
															<?php } elseif ($_smarty_tpl->getValue('comment')->type == "blog") {?>
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_blog, ENT_QUOTES, 'UTF-8', true);?>
<a target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/blog/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('comment')->post->url, ENT_QUOTES, 'UTF-8', true);?>
#comment_<?php echo $_smarty_tpl->getValue('comment')->id;?>
" class="fw-bold text-body text-decoration-none ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('comment')->post->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
															<?php } elseif ($_smarty_tpl->getValue('comment')->type == 'article') {?>
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->comments_article, ENT_QUOTES, 'UTF-8', true);?>
<a target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/article/<?php echo $_smarty_tpl->getValue('comment')->article->url;?>
#comment_<?php echo $_smarty_tpl->getValue('comment')->id;?>
" class="fw-bold text-body text-decoration-none ms-1"><?php echo $_smarty_tpl->getValue('comment')->article->name;?>
</a>
															<?php } elseif ($_smarty_tpl->getValue('comment')->type == 'review') {?><a target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/reviews/#comment_<?php echo $_smarty_tpl->getValue('comment')->id;?>
" class="fw-bold text-body text-decoration-none ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_review, ENT_QUOTES, 'UTF-8', true);?>
</a>
															<?php }?>
														<?php }?>
													</div>
													<?php if ($_smarty_tpl->getValue('level') == 0) {?><a href="index.php?module=CommentsAdmin&item_id=<?php echo $_smarty_tpl->getValue('comment')->object_id;?>
&type=<?php echo $_smarty_tpl->getValue('comment')->type;?>
" class="comment-object fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->all_comments_to_object, ENT_QUOTES, 'UTF-8', true);?>
 <i class="align-middle" data-feather="arrow-right"></i></a><?php }?>
													<div class="d-block d-md-none mt-1">
														<?php if (!$_smarty_tpl->getValue('comment')->approved) {?>
															<button type="button" class="btn btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('comment')->approved) {?>js-active-class<?php }?>" data-module="comment" data-action="approved" data-id="<?php echo $_smarty_tpl->getValue('comment')->id;?>
" onclick="$(this).hide();">
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

															</button>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('level') == 0) {?>
															<div class="answer-wrap <?php if (!$_smarty_tpl->getValue('comment')->approved) {?>d-none<?php }?>">
																<button type="button" data-parent-id="<?php echo $_smarty_tpl->getValue('comment')->id;?>
" data-user-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('comment')->name, ENT_QUOTES, 'UTF-8', true);?>
" data-bs-toggle="modal" data-bs-target="#answer-popup" class="btn btn-outline-primary js-answer">
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_answer, ENT_QUOTES, 'UTF-8', true);?>

																</button>
															</div>
														<?php }?>
													</div>
												</div>
												<div class="turbo-list-boding turbo-list-comments-btn">
													<?php if (!$_smarty_tpl->getValue('comment')->approved) {?>
														<button type="button" class="btn btn-outline-secondary js-ajax-action <?php if ($_smarty_tpl->getValue('comment')->approved) {?>js-active-class<?php }?>" data-module="comment" data-action="approved" data-id="<?php echo $_smarty_tpl->getValue('comment')->id;?>
" onclick="$(this).hide();">
															<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_process, ENT_QUOTES, 'UTF-8', true);?>

														</button>
													<?php }?>
													<?php if ($_smarty_tpl->getValue('level') == 0) {?>
														<div class="answer-wrap js-answer_btn" <?php if (!$_smarty_tpl->getValue('comment')->approved) {?>style="display: none;" <?php }?>>
															<button type="button" data-parent-id="<?php echo $_smarty_tpl->getValue('comment')->id;?>
" data-user-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('comment')->name, ENT_QUOTES, 'UTF-8', true);?>
" data-bs-toggle="modal" data-bs-target="#answer-popup" class="btn btn-outline-primary js-answer">
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_answer, ENT_QUOTES, 'UTF-8', true);?>

															</button>
														</div>
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
										<?php if ($_smarty_tpl->getValue('children')[$_smarty_tpl->getValue('comment')->id]) {?>
											<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->getValue('children')[$_smarty_tpl->getValue('comment')->id],'level'=>$_smarty_tpl->getValue('level')+1), true);?>

										<?php }?>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<?php
}}
/*/ smarty_template_function_comments_tree_14218579406924aa2e334b71_34437184 */
}
