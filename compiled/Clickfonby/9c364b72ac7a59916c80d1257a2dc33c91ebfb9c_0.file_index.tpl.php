<?php
/* Smarty version 5.4.2, created on 2025-12-23 20:51:55
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_694ad6bb816909_68436948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c364b72ac7a59916c80d1257a2dc33c91ebfb9c' => 
    array (
      0 => 'index.tpl',
      1 => 1766512309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head/meta.tpl' => 1,
    'file:head/css.tpl' => 1,
    'file:loader/loader.tpl' => 1,
    'file:action/top_menu.tpl' => 1,
    'file:header/header.tpl' => 1,
    'file:header/categories.tpl' => 1,
    'file:footer/footer.tpl' => 1,
    'file:scripts/js.tpl' => 1,
  ),
))) {
function content_694ad6bb816909_68436948 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
?><!DOCTYPE html>

<html lang="ru">
    <head>

                <?php $_smarty_tpl->renderSubTemplate('file:head/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->renderSubTemplate('file:head/css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </head>

    
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58QFM7M2"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    

    <body class="home-style1 <?php if ($_smarty_tpl->getValue('module') == 'ProductView') {?>sin-prod-pg-1<?php }?> <?php if ($_smarty_tpl->getValue('module') == 'WishlistView') {?>cart-pg-1<?php }?> <?php if ($_smarty_tpl->getValue('module') == 'CartView') {?>cart-pg-1<?php }?> <?php if ($_smarty_tpl->getValue('module') == 'OrderView') {?>cart-pg-1<?php }?> <?php if ($_smarty_tpl->getValue('module') == 'UserView') {?>profile-pg-1 about-pg-1<?php }?>">

                <?php $_smarty_tpl->renderSubTemplate('file:loader/loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->renderSubTemplate('file:action/top_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


        
            <?php $_smarty_tpl->renderSubTemplate('file:header/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


                        <?php $_smarty_tpl->renderSubTemplate('file:header/categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <div class="container container-llgg">
            <main>
                                <?php echo $_smarty_tpl->getValue('content');?>


            </main>
        </div>
    <!--Contents-->

<!--End-Contents-->

        <?php $_smarty_tpl->renderSubTemplate('file:footer/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



<!--  Start to top button  -->
<a href="#" class="to_top">
    <i class="la la-angle-up"></i>
</a>
<!--  End to top button  -->



<?php $_smarty_tpl->renderSubTemplate('file:scripts/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



</body>
</html><?php }
}
