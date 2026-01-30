<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:42
  from 'file:main/slider.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed6c17142_73599558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58a9f6ed19247610767548416c51a191b076dc5a' => 
    array (
      0 => 'main/slider.tpl',
      1 => 1768592542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697c5ed6c17142_73599558 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_banner')->handle(array('var'=>'big_banners','group'=>$_smarty_tpl->getValue('theme_settings')->big_banners_id), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('big_banners') && $_smarty_tpl->getValue('big_banners')->items) {?>
        <div class="main-slider">
            <div class="swiper-wrapper">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('big_banners')->items, 's');
$_smarty_tpl->getVariable('s')->index = -1;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('s')->index++;
$foreach0Backup = clone $_smarty_tpl->getVariable('s');
?>
                    <div class="swiper-slide text-center">
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo htmlspecialchars((string)$_smarty_tpl->getValue('s')->url, ENT_QUOTES, 'UTF-8', true);?>
">
                        <div class="slide-card">
                            <div class="img ">
                                <img src="<?php if ($_smarty_tpl->getValue('s')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('s')->image,1080,1080);
} else { ?>design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg<?php }?>" 
                                     alt="<?php echo (($tmp = htmlspecialchars((string)$_smarty_tpl->getValue('s')->alt, ENT_QUOTES, 'UTF-8', true) ?? null)===null||$tmp==='' ? 'Слайдер' ?? null : $tmp);?>
" 
                                     class="img-cover" 
                                     width="1080" 
                                     height="1080" 
                                     loading="<?php if ($_smarty_tpl->getVariable('s')->index == 0) {?>eager<?php } else { ?>lazy<?php }?>">
                                </div>

                        </div>
                        </a>
                    </div>
                <?php
$_smarty_tpl->setVariable('s', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <div class="slider-controls">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
<?php }
}
}
