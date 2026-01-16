<?php
/* Smarty version 5.4.2, created on 2025-11-29 23:12:07
  from 'file:main/banners_text.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692b5397c60da8_73851455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69432a549c59e52dea89c9183275e4237f624d0' => 
    array (
      0 => 'main/banners_text.tpl',
      1 => 1764447124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692b5397c60da8_73851455 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_banner')->handle(array('var'=>'banners_text','group'=>$_smarty_tpl->getValue('theme_settings')->banners_text_id), $_smarty_tpl);?>
 
<?php if ($_smarty_tpl->getValue('banners_text') && $_smarty_tpl->getValue('banners_text')->items) {?>
    <?php if ($_smarty_tpl->getValue('banners_text')->items) {?>
        
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners_text')->items, 'b');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
?>
                <div class="col-lg-6 col-xl-4 col-md-6 text-center">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->url, ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="card-overlay wow fadeInUp slow" data-wow-delay="0.2s">
                        <div class="img">
                            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_banners')($_smarty_tpl->getValue('b')->image,694,463);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
" class="img-cover">
                        </div>
                    </div>
                    </a>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php }?>

<?php }
}
}
