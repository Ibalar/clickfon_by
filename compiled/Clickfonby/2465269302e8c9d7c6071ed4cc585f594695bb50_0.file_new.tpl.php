<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:41:04
  from 'file:loading/new.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300e0347df1_30404320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2465269302e8c9d7c6071ed4cc585f594695bb50' => 
    array (
      0 => 'loading/new.tpl',
      1 => 1763133351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/grid_tab.tpl' => 1,
  ),
))) {
function content_692300e0347df1_30404320 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/loading';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('is_new'=>1,'var'=>'new_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('new_products')) {?>
    <div class="product-row">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_products'), 'product');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach7DoElse = false;
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
