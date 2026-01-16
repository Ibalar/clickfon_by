<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:main/banners_text.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f024a66_08320443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bdc0d231f096116cd180d6b30ca6ee244b2418b' => 
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
function content_696a2a0f024a66_08320443 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_banner')->handle(array('var'=>'banners_text','group'=>$_smarty_tpl->getValue('theme_settings')->banners_text_id), $_smarty_tpl);?>
 
<?php if ($_smarty_tpl->getValue('banners_text') && $_smarty_tpl->getValue('banners_text')->items) {?>
    <?php if ($_smarty_tpl->getValue('banners_text')->items) {?>
        
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('banners_text')->items, 'b');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
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
