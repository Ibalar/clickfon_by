<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f4a5dd3_19961549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e209645bb2b1c0727fd9c68bef34561859488a83' => 
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
function content_696a2a0f4a5dd3_19961549 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html';
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
