<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:main/catalog_sections.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f03c0f8_98126114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1354564d9c67bf20b9329915491b3946960affab' => 
    array (
      0 => 'main/catalog_sections.tpl',
      1 => 1764446899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f03c0f8_98126114 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\main';
?><section class="tc-popular-cat-style1 pt-30 pb-50">
    <div class="container">
        <div class="sec-title">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="fsz-24 text-capitalize">Популярные разделы</h3>
                </div>
                <div class="col-lg-6 text-lg-end mt-4 mt-lg-0">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog" class="more-link text-capitalize">
                        Смотреть все <i class="la la-angle-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="cat-content">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'c');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach2DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('c')->featured && $_smarty_tpl->getValue('c')->visible) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('c')->url;?>
" class="cat-card">
                        <div class="img">
                            <?php if ($_smarty_tpl->getValue('c')->image) {?>
                                <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_catalog')($_smarty_tpl->getValue('c')->image,120,120);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php } else { ?>
                                <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php }?>
                        </div>
                        <p class="fsz-13 fw-bold mt-15"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>
</p>
                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
