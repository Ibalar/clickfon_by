<?php
/* Smarty version 5.4.2, created on 2025-11-23 16:21:00
  from 'file:catalog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69230a3cf26b63_05585714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c511ad089af944deb85b809097ae80c56a780d72' => 
    array (
      0 => 'catalog.tpl',
      1 => 1762973566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69230a3cf26b63_05585714 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
?>

<section class="tc-categories-style6 p-30 radius-4 bg-white mt-3 wow fadeInUp animated">
    <div class="content grid-list grid-list--items-4-1200 grid-list--items-3-992 grid-list--items-2-601">
        <?php if ($_smarty_tpl->getValue('categories')) {?>
            <div class="content grid-list grid-list--items-4-1200 grid-list--items-3-992 grid-list--items-2-601">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('c')->visible) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('c')->url;?>
" class="number-item grid-list__item">
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
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

    
</section><?php }
}
