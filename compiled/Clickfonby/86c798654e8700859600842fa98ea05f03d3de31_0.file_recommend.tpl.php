<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:42
  from 'file:loading/recommend.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed6e9f7c2_40996393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86c798654e8700859600842fa98ea05f03d3de31' => 
    array (
      0 => 'loading/recommend.tpl',
      1 => 1763133376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/grid_tab.tpl' => 1,
  ),
))) {
function content_697c5ed6e9f7c2_40996393 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\loading';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('featured'=>1,'var'=>'featured_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('featured_products')) {?>
    <div class="product-row">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('featured_products'), 'product');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach6DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate('file:products/grid_tab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
