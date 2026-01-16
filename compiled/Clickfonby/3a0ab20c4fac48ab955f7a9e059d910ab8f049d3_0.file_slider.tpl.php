<?php
/* Smarty version 5.4.2, created on 2025-11-29 20:50:49
  from 'file:main/slider.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692b32798a38e4_37085308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0ab20c4fac48ab955f7a9e059d910ab8f049d3' => 
    array (
      0 => 'main/slider.tpl',
      1 => 1764438633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692b32798a38e4_37085308 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_banner')->handle(array('var'=>'big_banners','group'=>$_smarty_tpl->getValue('theme_settings')->big_banners_id), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('big_banners') && $_smarty_tpl->getValue('big_banners')->items) {?>
        <div class="main-slider">
            <div class="swiper-wrapper">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('big_banners')->items, 's');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach0DoElse = false;
?>
                    <div class="swiper-slide text-center">
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo htmlspecialchars((string)$_smarty_tpl->getValue('s')->url, ENT_QUOTES, 'UTF-8', true);?>
">
                        <div class="slide-card">
                            <div class="img ">
                                <picture>
                                    <source srcset="<?php if ($_smarty_tpl->getValue('s')->background) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('s')->background,1920,660);
} else { ?>design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg<?php }?>" media="(max-width: 600px)" class="img-cover">
                                    <img src="<?php if ($_smarty_tpl->getValue('s')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('s')->image,1080,1080);
} else { ?>design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg<?php }?>" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('s')->alt, ENT_QUOTES, 'UTF-8', true);?>
" class="img-cover">
                                </picture>
                                </div>

                        </div>
                        </a>
                    </div>
                <?php
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
