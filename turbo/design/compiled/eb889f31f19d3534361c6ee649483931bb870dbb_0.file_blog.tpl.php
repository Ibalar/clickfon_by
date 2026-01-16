<?php
/* Smarty version 5.4.2, created on 2025-11-23 12:41:27
  from 'file:blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6922d6c7b59634_55469132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb889f31f19d3534361c6ee649483931bb870dbb' => 
    array (
      0 => 'blog.tpl',
      1 => 1733362450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_6922d6c7b59634_55469132 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_blog, false, 32);?>

<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-3">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blog, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getValue('posts_count');?>

			</h1>
			<div class="d-grid d-sm-block mt-2 mt-md-0">
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PostAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->blog_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 float-sm-end">
		<form class="search mb-3" method="get">
			<input type="hidden" name="module" value="BlogAdmin">
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
		<?php if ($_smarty_tpl->getValue('posts')) {?>
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
								<div class="turbo-list-heading turbo-list-photo"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-blog-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->blog_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-setting turbo-list-blog-setting"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="turbo-list-heading turbo-list-delete"></div>
							</div>
							<div class="turbo-list-body">
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
									<div class="js-row turbo-list-body-item">
										<div class="turbo-list-row">
											<div class="turbo-list-boding turbo-list-check">
												<label class="form-check">
													<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('post')->id;?>
">
												</label>
											</div>
											<div class="turbo-list-boding turbo-list-photo">
												<?php if ($_smarty_tpl->getValue('post')->image) {?>
													<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PostAdmin','id'=>$_smarty_tpl->getValue('post')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_posts')($_smarty_tpl->getValue('post')->image,45,45);?>
">
													</a>
												<?php } else { ?>
													<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PostAdmin','id'=>$_smarty_tpl->getValue('post')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<i class="align-middle" data-feather="camera"></i>
													</a>
												<?php }?>
											</div>
											<div class="turbo-list-boding turbo-list-blog-name">
												<a class="fw-bold text-body text-decoration-none" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'PostAdmin','id'=>$_smarty_tpl->getValue('post')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
												<div class="mb-0">
													<span class="fw-bold text-secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('post')->date);?>
</span>
												</div>
											</div>
											<div class="turbo-list-boding turbo-list-status">
												<div class="form-check form-switch">
													<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('post')->visible) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('post')->id;?>
" data-module="blog" data-action="visible" data-id="<?php echo $_smarty_tpl->getValue('post')->id;?>
" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('post')->visible) {?>checked=""<?php }?>>
													<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('post')->id;?>
"></label>
												</div>
											</div>
											<div class="turbo-list-setting turbo-list-blog-setting">
												<a href="../<?php echo $_smarty_tpl->getValue('lang_link');?>
blog/<?php echo $_smarty_tpl->getValue('post')->url;?>
" target="_blank" class="setting-icon setting-icon-open" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_view, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="align-middle" data-feather="external-link"></i>
												</a>
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
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				</div>
			</div>
		<?php } else { ?>
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->blog_no_post, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div><?php }
}
