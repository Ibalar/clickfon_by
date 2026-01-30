<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:43
  from 'file:header/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed71cd6c1_81532691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c215ad27ff199f58f476125ba3a92935d59e569a' => 
    array (
      0 => 'header/header.tpl',
      1 => 1764440396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/logo.tpl' => 1,
    'file:header/search.tpl' => 1,
    'file:informers/cart_informer.tpl' => 1,
    'file:header/mob_categories.tpl' => 1,
  ),
))) {
function content_697c5ed71cd6c1_81532691 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\header';
?><nav class="navbar tc-navbar-style1 navbar-expand-lg navbar-light">
    <div class="container">
        <div class="content">
            <a class="navbar-brand" href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>">
                                <?php $_smarty_tpl->renderSubTemplate('file:includes/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                        <?php $_smarty_tpl->renderSubTemplate('file:header/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


            <div class="hot-line">
                <span class="icon"> <i class="las la-tty"></i> </span>
                <div class="inf">
                    <small class="fsz-13 d-block"> Оформление 24/7 </small>
                    <h6 class="fsz-18 color-red1 fw-bold"> <a href="tel:<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('theme_settings')->phone_1,'/[\s()-]/','');?>
"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->phone_1, ENT_QUOTES, 'UTF-8', true);?>
 </a> </h6>
                </div>
            </div>
            <div class="icons">

                                <?php if ($_smarty_tpl->getValue('compare_products') > 0) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->compare, ENT_QUOTES, 'UTF-8', true);?>
"> <i class="la la-sync"></i> <span class="dot"></span> </a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->compare, ENT_QUOTES, 'UTF-8', true);?>
"> <i class="la la-sync"></i> </a>
                <?php }?>

                                <a title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->wishlist, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist" class="header-wishlist-icon">
                    <i class="lar la-heart"></i>
                    <span class="dot" style="display: none;"></span>
                </a>


                                <?php if ($_smarty_tpl->getValue('user')) {?>
                    <a title="<?php echo $_smarty_tpl->getValue('user')->name;?>
" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user" onclick="document.cookie='user=personal;path=/';document.location.reload();"> <i class="la la-user"></i> </a>
                <?php } else { ?>
                    <a title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->login, ENT_QUOTES, 'UTF-8', true);?>
" data-url="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/login/?tpl=auth" data-name="auth" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/login"><i class="la la-user"></i></a>
                <?php }?>

                                <?php $_smarty_tpl->renderSubTemplate('file:informers/cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
                <?php $_smarty_tpl->renderSubTemplate('file:header/mob_categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</nav><?php }
}
