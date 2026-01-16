<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:loading/sale.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f3c7dd8_91779540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2272a13d030db35ee033b549255715b1df4bfc7a' => 
    array (
      0 => 'loading/sale.tpl',
      1 => 1763133391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/grid_tab.tpl' => 1,
  ),
))) {
function content_696a2a0f3c7dd8_91779540 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\loading';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('discounted'=>1,'var'=>'discounted_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('discounted_products')) {?>
    <div class="product-row">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discounted_products'), 'product');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach8DoElse = false;
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
