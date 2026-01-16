<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:42
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0eec4ed6_80102561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eabfa16d4ccaca21bb0751822222c19e7ad5b248' => 
    array (
      0 => 'main.tpl',
      1 => 1764497637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/slider.tpl' => 1,
    'file:main/banners_text.tpl' => 1,
    'file:main/catalog_sections.tpl' => 1,
    'file:main/products_tab.tpl' => 1,
    'file:main/brands.tpl' => 1,
  ),
))) {
function content_696a2a0eec4ed6_80102561 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html';
$_smarty_tpl->assign('wrapper', 'index.tpl', false, 32);?>

<?php $_smarty_tpl->assign('canonical', '', false, 32);?>


<header>

    <!--  Start header  -->
    <section class="tc-header-style1">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <?php $_smarty_tpl->renderSubTemplate('file:main/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    
                                        <?php if ($_smarty_tpl->getValue('theme_settings')->visible_5) {?>
                        <?php $_smarty_tpl->renderSubTemplate('file:main/banners_text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </section>

    <!--  Start popular cat  -->
    <?php $_smarty_tpl->renderSubTemplate('file:main/catalog_sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <!--  End popular cat  -->
</header>



<?php if ($_smarty_tpl->getValue('theme_settings')->visible_3) {?>
    <?php $_smarty_tpl->renderSubTemplate('file:main/products_tab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>

<?php if ($_smarty_tpl->getValue('theme_settings')->visible_4) {?>
    <?php $_smarty_tpl->renderSubTemplate('file:main/brands.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
