<?php
/* Smarty version 5.4.2, created on 2026-01-16 21:53:44
  from 'file:products/catalog_category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a8938da8242_73891426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953f3eff823803b55b4d419435daaa488d5dca87' => 
    array (
      0 => 'products/catalog_category.tpl',
      1 => 1768589145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a8938da8242_73891426 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\products';
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
                                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('img')->handle(array('url'=>$_smarty_tpl->getValue('icon'),'alt'=>$_smarty_tpl->getValue('c')->name,'width'=>40,'height'=>40,'class'=>"sections-list__item-image"), $_smarty_tpl);?>

                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('img')->handle(array('url'=>"design/".$_prefixVariable3."/images/no-photo.svg",'alt'=>$_smarty_tpl->getValue('c')->name,'width'=>40,'height'=>40,'class'=>"sections-list__item-image"), $_smarty_tpl);?>

                                                <?php }?>
                                            </span>
                                        <?php } else { ?>
                                            <span class="sections-list__item-image-wrapper sections-list__item-image-wrapper--PICTURES">
                                                <?php if ($_smarty_tpl->getValue('c')->image) {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('img')->handle(array('url'=>$_smarty_tpl->getSmarty()->getModifierCallback('resize_catalog')($_smarty_tpl->getValue('c')->image,40,40),'alt'=>$_smarty_tpl->getValue('c')->name,'width'=>40,'height'=>40,'class'=>"sections-list__item-image"), $_smarty_tpl);?>

                                                <?php } else { ?>
                                                    <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('img')->handle(array('url'=>"design/".$_prefixVariable4."/images/no-photo.svg",'alt'=>$_smarty_tpl->getValue('c')->name,'width'=>40,'height'=>40,'class'=>"sections-list__item-image"), $_smarty_tpl);?>

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
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('img')->handle(array('url'=>$_smarty_tpl->getSmarty()->getModifierCallback('resize_catalog')($_smarty_tpl->getValue('c')->image,120,120),'alt'=>$_smarty_tpl->getValue('c')->name,'width'=>120,'height'=>120,'class'=>"img-contain"), $_smarty_tpl);?>

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
