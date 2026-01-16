<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:main/brands.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f487581_89145180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf07156abaec2d888fad7b0789a29563d01e69d' => 
    array (
      0 => 'main/brands.tpl',
      1 => 1763834755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f487581_89145180 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_brands')->handle(array('var'=>'all_brands'), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('all_brands')) {?>

    <section class="tc-features-style3">
        <div class="row gx-3">
            <div class="col-lg-12">
                <div class="features-brands p-30 radius-4 bg-white mt-3 wow fadeInUp slow animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="title">
                        <div class="row">
                            <div class="col-lg-8">
                                <h6 class="fsz-18 fw-bold text-uppercase"> Популярные Бренды </h6>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands" class="more color-666 fsz-13"> Смотреть все <i class="la la-angle-right ms-1"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="logos">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('all_brands'),0,$_smarty_tpl->getValue('theme_settings')->brands_main_limit), 'b');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach9DoElse = false;
?>
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands/<?php echo $_smarty_tpl->getValue('b')->url;?>
" class="logo">
                            <?php if ($_smarty_tpl->getValue('b')->image) {?>
                                <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_brands')($_smarty_tpl->getValue('b')->image,150,50);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php } else { ?>
                                <img style="width: 100px; height: 100px;" class="brands-list__image ls-is-cached lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php }?>
                        </a>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    </div>
                </div>
            </div>

        </div>
    </section>



<?php }
}
}
