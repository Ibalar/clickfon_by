<?php
/* Smarty version 5.4.2, created on 2025-11-29 20:50:49
  from 'file:main/bottom_banners.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692b32798b9387_91222962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fdb358534d8abde27738618e5709782354731d' => 
    array (
      0 => 'main/bottom_banners.tpl',
      1 => 1764438623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692b32798b9387_91222962 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_banner')->handle(array('var'=>'bottom_banners','group'=>$_smarty_tpl->getValue('theme_settings')->bottom_banners_id), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('bottom_banners') && $_smarty_tpl->getValue('bottom_banners')->items) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('bottom_banners')->items, 'b');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
?>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="card-overlay card-center">
                <div class="img th-380">
                    <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('b')->image,1919,180);?>
" alt="" class="img-cover">
                </div>
                <div class="info p-50">
                    <div class="cont">
                        <h3 class="fsz-30"> <?php if ($_smarty_tpl->getValue('b')->title) {?><br><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->title, ENT_QUOTES, 'UTF-8', true);
}?> </h3>
                        <?php if ($_smarty_tpl->getValue('b')->description) {?>
                            <p class="fsz-13 mt-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->description, ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <?php }?>
                    </div>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->url, ENT_QUOTES, 'UTF-8', true);?>
" class="butn px-5 py-3 bg-white color-000 rounded-pill fw-600"> <span> <?php echo (($tmp = $_smarty_tpl->getValue('lang')->shop_now ?? null)===null||$tmp==='' ? "Подробнее" ?? null : $tmp);?>
 </span> </a>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>

<?php }
}
