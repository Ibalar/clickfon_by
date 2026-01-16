<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:41:10
  from 'file:/home/clickfon/public_html/design/Clickfonby/html/informers/cart_informer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300e6242655_01467902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c54a8ef29eaba8973687151d512d30aa3a850a4' => 
    array (
      0 => '/home/clickfon/public_html/design/Clickfonby/html/informers/cart_informer.tpl',
      1 => 1762973568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692300e6242655_01467902 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/informers';
?><div id="cart-block-header">
    <?php if ($_smarty_tpl->getValue('cart')->total_products > 0) {?>
        <a title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->index_cart, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
cart/"> <i class="la la-shopping-cart"></i> <span class="num"> <?php echo $_smarty_tpl->getValue('cart')->total_products;?>
 </span> </a>
    <?php } else { ?>
        <a title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->index_cart, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
cart/"> <i class="la la-shopping-cart"></i> <span class="num"> 0 </span> </a>
    <?php }?>
</div>
<?php }
}
