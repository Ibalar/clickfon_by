<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:43
  from 'file:informers/cart_informer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed71eda47_97109113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc951a5ca42bb419d0d5dc3a558645516fbb9424' => 
    array (
      0 => 'informers/cart_informer.tpl',
      1 => 1762973568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697c5ed71eda47_97109113 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\informers';
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
