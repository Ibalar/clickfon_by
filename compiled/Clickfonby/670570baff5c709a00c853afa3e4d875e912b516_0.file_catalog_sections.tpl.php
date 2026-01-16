<?php
/* Smarty version 5.4.2, created on 2025-11-29 23:08:22
  from 'file:main/catalog_sections.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692b52b6ad6514_50808662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670570baff5c709a00c853afa3e4d875e912b516' => 
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
function content_692b52b6ad6514_50808662 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/main';
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
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
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
