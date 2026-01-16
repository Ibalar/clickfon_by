<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:products/grid_tab.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f3031c1_21141516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca9369d7e48e87a14423b979b9c8563ef25a7a9' => 
    array (
      0 => 'products/grid_tab.tpl',
      1 => 1763666606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f3031c1_21141516 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\products';
?><div class="product-card">
    <div class="top">
        <?php if ($_smarty_tpl->getValue('product')->is_hit) {?>
            <small class="fsz-11 py-1 px-3 rounded-pill color-red1 border-red1 border"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_hit, ENT_QUOTES, 'UTF-8', true);?>
 </small>
        <?php }?>
        <div class="icons">

            <?php if ($_smarty_tpl->getValue('wishlist') || ($_smarty_tpl->getValue('wishlist_products') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_smarty_tpl->getValue('wishlist_products')))) {?>
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/remove/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon fav active" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->delete, ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="fal fa-heart"></i>
                </a>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon fav" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_to_wishlist, ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="fal fa-heart"></i>
                </a>
            <?php }?>


            <?php if ((null !== ($_SESSION['compared_products'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_SESSION['compared_products'])) {?>

                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare" class="icon compare active" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->added_to_compare, ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="fal fa-sync"></i>
                </a>

            <?php } else { ?>

                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon compare" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_to_compare, ENT_QUOTES, 'UTF-8', true);?>
" data-title_added="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->added_to_compare, ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="fal fa-sync"></i>
                </a>
            <?php }?>

        </div>
    </div>

    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="img mb-20 d-block">
        <?php if ($_smarty_tpl->getValue('product')->image) {?>
            <img class="img-contain" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,700,700);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" />
        <?php } else { ?>
            <img class="img-contain" style="width: 170px; height: 170px;" src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" />
        <?php }?>
    </a>
    <div class="info">
        <div class="tags">
            <?php if ($_smarty_tpl->getValue('product')->variant->compare_price > $_smarty_tpl->getValue('product')->variant->price && $_smarty_tpl->getValue('product')->variant->price > 0) {?>
                <span class="label fsz-11 py-1 px-3 rounded-pill bg-red1 text-white text-uppercase"> <?php echo round((float) (($_smarty_tpl->getValue('product')->variant->price-$_smarty_tpl->getValue('product')->variant->compare_price)/$_smarty_tpl->getValue('product')->variant->compare_price)*100, (int) 0, (int) 1);?>
% </span>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('product')->featured && !$_smarty_tpl->getValue('product')->is_new) {?>
                <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_featured, ENT_QUOTES, 'UTF-8', true);?>
 </span>
            <?php }?>
            <?php if (!$_smarty_tpl->getValue('product')->featured && $_smarty_tpl->getValue('product')->is_new) {?>
                <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);?>
 </span>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('product')->featured && $_smarty_tpl->getValue('product')->is_new) {?>
                <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);?>
 </span>
            <?php }?>
        </div>
        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="title fsz-14 mt-15 fw-600 hover-blue1"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
 </a>
        <div class="stars fsz-13 mt-2">
            <?php $_smarty_tpl->assign('avg', $_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')->rating), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('avg') > 0) {?>
                <i class="fas fa-star active"></i>
                <span> <?php echo $_smarty_tpl->getValue('avg');?>
 </span>
            <?php } else { ?>
                <i class="la la-star color-999"></i>
                <span> нет оценок </span>
            <?php }?>
        </div>
        <p class="price color-red1 mt-2 fsz-18">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

            <?php if ($_smarty_tpl->getValue('product')->variant->compare_price > 0) {?>
                <span class="old-price color-999 text-decoration-line-through ms-2 fsz-12"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->compare_price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
            <?php }?>
        </p>
        <div class="thumbnail-imgs mt-10">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->related_products, 'related_product');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('related_product')->value) {
$foreach4DoElse = false;
?>
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('related_product')->url;?>
" class="color-img" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->variant->color, ENT_QUOTES, 'UTF-8', true);?>
">
                    <span class="thumbnail<?php if ($_smarty_tpl->getValue('product')->id == $_smarty_tpl->getValue('related_product')->id) {?> selected<?php }?>" style="display:inline-block; width:20px; height:20px; border-radius:50%; background:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->variant->color_code, ENT_QUOTES, 'UTF-8', true);?>
; border:2px solid #edeef1;"></span>
                </a>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <form class="variants" data-action="/ajax/cart.php" method="post">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->variants, 'v');
$_smarty_tpl->getVariable('v')->index = -1;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$foreach5Backup = clone $_smarty_tpl->getVariable('v');
?>
            <input id="featured_<?php echo $_smarty_tpl->getValue('v')->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getValue('v')->id;?>
" type="radio" <?php if ($_smarty_tpl->getVariable('v')->first) {?>checked<?php }?> style="display:none;">
        <?php
$_smarty_tpl->setVariable('v', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <button type="submit" class="cart-btn addCart" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->getValue('product')->variant->stock) {?>disabled<?php }?>>
            <i class="la la-cart-plus me-1"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>

        </button>
    </form>

</div><?php }
}
