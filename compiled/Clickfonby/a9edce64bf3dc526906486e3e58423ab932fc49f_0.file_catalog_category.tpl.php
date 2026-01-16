<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:41:15
  from 'file:products/catalog_category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300eb299609_55269637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9edce64bf3dc526906486e3e58423ab932fc49f' => 
    array (
      0 => 'products/catalog_category.tpl',
      1 => 1762973569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692300eb299609_55269637 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/products';
if ($_smarty_tpl->getValue('theme_settings')->catalog_category_type == '1') {?>
	<div class="top-content-block">
		<div class="section-block">
			<div class="sections-list .default-template">
				<div class="line-block line-block--align-normal line-block--flex-wrap line-block--gap line-block--gap-12 line-block--gap-8-to-600">
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->subcategories, 'c');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach10DoElse = false;
?>
						<div class="sections-list__wrapper line-block__item stroke-theme-parent-all colored_theme_hover_bg-block animate-arrow-hover">
							<div class="sections-list__item height-100 outer-rounded-x shadow-hovered shadow-no-border-hovered color-theme-parent-all <?php if ($_smarty_tpl->getValue('theme_settings')->catalog_category_bordered) {?>bordered<?php }?>">
								<a class="sections-list__item-link dark_link height-100" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('c')->url;?>
">
									<span class="sections-list__item-inner flexbox flexbox--direction-row flexbox--align-center height-100">
										<?php if ($_smarty_tpl->getValue('theme_settings')->catalog_category_images_type == '2') {?>
											<span class="sections-list__item-image-wrapper sections-list__item-image-wrapper--ICONS">
												<?php if ($_smarty_tpl->getValue('c')->icon) {?>
													<?php $_smarty_tpl->assign('icon', ((string)$_smarty_tpl->getValue('config')->categories_images_dir).((string)$_smarty_tpl->getValue('c')->icon), false, NULL);?>
													<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_svg')($_smarty_tpl->getValue('icon'))) {?>
														<i class="svg inline svg-inline- fill-theme sections-list__item-image" aria-hidden="true">
															<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('svg')($_smarty_tpl->getValue('icon'));?>

														</i>
													<?php } else { ?>
														<img style="max-width: 40px; max-height: 40px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $_smarty_tpl->getValue('icon');?>
" class="lazyload sections-list__item-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
">
													<?php }?>
												<?php } else { ?>
													<img style="width: 40px; height: 40px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" class="lazyload sections-list__item-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
">
												<?php }?>
											</span>
										<?php } else { ?>
											<span class="sections-list__item-image-wrapper sections-list__item-image-wrapper--PICTURES">
												<?php if ($_smarty_tpl->getValue('c')->image) {?>
													<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_catalog')($_smarty_tpl->getValue('c')->image,40,40);?>
" class="lazyload sections-list__item-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
">
												<?php } else { ?>
													<img style="width: 40px; height: 40px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" class="lazyload sections-list__item-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
">
												<?php }?>
											</span>
										<?php }?>
										<span class="sections-list__item-text color-theme-target font_short" data-category="<?php echo $_smarty_tpl->getValue('c')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
									</span>
								</a>
							</div>
						</div>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('theme_settings')->catalog_category_type == '2') {?>
    <section class="tc-categories-style6 p-30 radius-4 bg-white mt-3 wow fadeInUp animated">
        <div class="content">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->subcategories, 'c');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach11DoElse = false;
?>
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('c')->url;?>
" class="number-item">
                    <div class="inf">
                        <h6 class="fsz-14 fw-bold mb-0 sm-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                        <small class="fsz-12 color-666">
                            <?php if ((null !== ($_smarty_tpl->getValue('c')->products_count ?? null))) {?>
                                <?php echo $_smarty_tpl->getValue('c')->products_count;?>
 Товаров
                            <?php }?>
                        </small>
                    </div>

                        <?php if ($_smarty_tpl->getValue('c')->image) {?>
                    <div class="img">
                            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_catalog')($_smarty_tpl->getValue('c')->image,120,120);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
" class="img-contain">
                    </div>
                        <?php } else { ?>

                        <?php }?>

                </a>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </section>
<?php }?>

<?php }
}
