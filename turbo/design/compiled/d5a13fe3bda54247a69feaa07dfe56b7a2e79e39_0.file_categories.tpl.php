<?php
/* Smarty version 5.4.2, created on 2025-11-14 17:17:08
  from 'file:categories.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691739e411af60_98855879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a13fe3bda54247a69feaa07dfe56b7a2e79e39' => 
    array (
      0 => 'categories.tpl',
      1 => 1734791770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691739e411af60_98855879 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'categories_tree' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/d5a13fe3bda54247a69feaa07dfe56b7a2e79e39_0.file_categories.tpl.php',
    'uid' => 'd5a13fe3bda54247a69feaa07dfe56b7a2e79e39',
    'call_name' => 'smarty_template_function_categories_tree_1517944493691739e40e8e31_18253800',
  ),
));
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_categories, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<div class="d-grid gap-2 d-sm-block mt-2 mt-md-0">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CategoryAdmin','return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
"><i data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_add, ENT_QUOTES, 'UTF-8', true);?>
</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php if ($_smarty_tpl->getValue('categories')) {?>
			<form method="post" class="js-form-list">
				<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
				<div class="turbo-list">
					<div class="turbo-list-head">
						<div class="turbo-list-heading turbo-list-subicon"></div>
						<div class="turbo-list-heading turbo-list-drag"></div>
						<div class="turbo-list-heading turbo-list-check">
							<label class="form-check">
								<input class="form-check-input js-check-all js-check-all-single" type="checkbox" value="">
							</label>
						</div>
						<div class="turbo-list-heading turbo-list-photo d-none d-md-block"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-categories-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-setting"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
						<div class="turbo-list-heading turbo-list-delete"></div>
					</div>
					<div class="turbo-list-body categories-wrap sortable">
						
						<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

					</div>
					<div class="turbo-list-footer js-action-block">
						<div class="turbo-list-foot-left">
							<div class="turbo-list-heading turbo-list-subicon"></div>
							<div class="turbo-list-heading turbo-list-drag"></div>
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
									<option value="set_featured"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_mark_featured, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<option value="unset_featured"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_unmark_featured, ENT_QUOTES, 'UTF-8', true);?>
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
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		<?php }?>
	</div>
</div>

<?php echo '<script'; ?>
>
	$(document).on("click", ".js-ajax-toggle", function() {
		elem = $(this);
		var el = document.querySelectorAll("div.sortable , .js-ajax-categories.sortable");
		for (i = 0; i < el.length; i++) {
			var sortable = Sortable.create(el[i], {
				handle: ".move-zone",
				sort: true,
				animation: 150,
				scroll: true,
				ghostClass: "sortable-ghost",
				chosenClass: "sortable-chosen",
				dragClass: "sortable-drag",
				scrollSensitivity: 30,
				scrollSpeed: 10,
			});
		}
		elem.closest(".js-row").children(".js-ajax-categories").slideToggle(500);
		elem.closest(".js-row").children(".js-ajax-categories").addClass("sortable");
		elem.find("i").toggleClass("minus-category");
	});
<?php echo '</script'; ?>
><?php }
/* smarty_template_function_categories_tree_1517944493691739e40e8e31_18253800 */
if (!function_exists('smarty_template_function_categories_tree_1517944493691739e40e8e31_18253800')) {
function smarty_template_function_categories_tree_1517944493691739e40e8e31_18253800(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'categories_tree','level'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

							<?php if ($_smarty_tpl->getValue('categories')) {?>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
									<?php if ($_smarty_tpl->getValue('level') > 1) {?>
										<div class="js-row row-narrow">
										<?php }?>
										<div class="js-row <?php if ($_smarty_tpl->getValue('level') == 1) {?>turbo-list-body-item<?php }?> js-sort-item body-narrow row-narrow">
											<div class="turbo-list-row narrow <?php if ($_smarty_tpl->getValue('level') > 1) {?>js-sort-item<?php }?>">
												<input type="hidden" name="positions[<?php echo $_smarty_tpl->getValue('category')->id;?>
]" value="<?php echo $_smarty_tpl->getValue('category')->position;?>
">
												<?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
													<div class="turbo-list-heading turbo-list-subicon">
														<a href="javascript:;" class="js-ajax-toggle" data-toggle="0" data-category_id="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
															<i class="icon-category plus-category"></i>
														</a>
													</div>
												<?php } else { ?>
													<div class="turbo-list-heading turbo-list-subicon"></div>
												<?php }?>
												<div class="turbo-list-boding turbo-list-drag move-zone">
													<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
												</div>
												<div class="turbo-list-boding turbo-list-check">
													<label class="form-check">
														<input class="form-check-input js-check-all-single" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
													</label>
												</div>
												<div class="turbo-list-boding turbo-list-photo turbo-list-category-photo hidden-sm-down small-photo boding-small d-none d-md-block">
													<?php if ($_smarty_tpl->getValue('category')->image) {?>
														<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->getValue('category')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
															<?php $_smarty_tpl->assign('image', ((string)$_smarty_tpl->getValue('category')->image), false, NULL);?>
															<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_svg')($_smarty_tpl->getValue('image'))) {?>
																<img src="../<?php echo $_smarty_tpl->getValue('config')->categories_images_dir;
echo $_smarty_tpl->getValue('image');?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
">
															<?php } else { ?> 
																<img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_catalog')($_smarty_tpl->getValue('image'),30,30);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
">
															<?php }?> 
														</a>
													<?php } elseif ($_smarty_tpl->getValue('category')->icon) {?>
														<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->getValue('category')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
															<img src="../<?php echo $_smarty_tpl->getValue('config')->categories_images_dir;
echo $_smarty_tpl->getValue('category')->icon;?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
">
														</a>
													<?php } elseif ($_smarty_tpl->getValue('category')->code) {?>
														<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->getValue('category')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
															<i class="align-middle" data-feather="code"></i>
														</a>
													<?php } else { ?>
														<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->getValue('category')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
															<i class="align-middle" data-feather="camera"></i>
														</a>
													<?php }?>
												</div>
												<div class="turbo-list-boding turbo-list-categories-name">
													<a class="fw-bold text-body text-decoration-none" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->getValue('category')->id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
">
														<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

													</a>
												</div>
												<div class="turbo-list-boding turbo-list-status">
													<div class="form-check form-switch">
														<input class="form-check-input js-ajax-action <?php if ($_smarty_tpl->getValue('category')->visible) {?>js-active-class<?php }?>" id="id-<?php echo $_smarty_tpl->getValue('category')->id;?>
" data-module="category" data-action="visible" data-id="<?php echo $_smarty_tpl->getValue('category')->id;?>
" name="visible" value="1" type="checkbox" <?php if ($_smarty_tpl->getValue('category')->visible) {?>checked=""<?php }?>>
														<label class="form-check-label" for="id-<?php echo $_smarty_tpl->getValue('category')->id;?>
"></label>
													</div>
												</div>
												<div class="turbo-list-setting">
													<a href="../<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('category')->url;?>
" target="_blank" class="setting-icon setting-icon-open" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_view, ENT_QUOTES, 'UTF-8', true);?>
">
														<i class="align-middle" data-feather="external-link"></i>
													</a>
													<button type="button" class="setting-icon setting-icon-featured js-ajax-action <?php if ($_smarty_tpl->getValue('category')->featured) {?>js-active-class<?php }?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_featured, ENT_QUOTES, 'UTF-8', true);?>
" data-module="category" data-action="featured" data-id="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
														<i class="align-middle" data-feather="star"></i>
													</button>
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
											<?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
												<div class="js-ajax-categories categories-sub-block subcategories-level-<?php echo $_smarty_tpl->getValue('level');?>
 sortable" style="display: none;">
													<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->getValue('category')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

												</div>
											<?php }?>
										</div>
										<?php if ($_smarty_tpl->getValue('level') > 1) {?>
										</div>
									<?php }?>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							<?php }?>
						<?php
}}
/*/ smarty_template_function_categories_tree_1517944493691739e40e8e31_18253800 */
}
