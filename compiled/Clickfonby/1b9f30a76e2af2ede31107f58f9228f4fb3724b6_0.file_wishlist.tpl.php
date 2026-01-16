<?php
/* Smarty version 5.4.2, created on 2025-11-30 14:32:46
  from 'file:wishlist.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692c2b5e9e1413_46484346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b9f30a76e2af2ede31107f58f9228f4fb3724b6' => 
    array (
      0 => 'wishlist.tpl',
      1 => 1763667054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692c2b5e9e1413_46484346 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
		<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
		<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->wishlist, false, 32);?>

		<?php $_smarty_tpl->assign('canonical', "/wishlist", false, 32);
}?>

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</a>
            </li>
            <?php if ($_smarty_tpl->getValue('category')) {?>
                <li class="breadcrumb-item color-999">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->catalog, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->path, 'cat', true);
$_smarty_tpl->getVariable('cat')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('cat')->iteration++;
$_smarty_tpl->getVariable('cat')->last = $_smarty_tpl->getVariable('cat')->iteration === $_smarty_tpl->getVariable('cat')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('cat');
?>
                    <?php if (!$_smarty_tpl->getVariable('cat')->last || $_smarty_tpl->getValue('keyword') || $_smarty_tpl->getValue('page') || $_smarty_tpl->getValue('brand')) {?>
                        <li class="breadcrumb-item color-999">
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('cat')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </li>
                    <?php } else { ?>
                        <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
                <?php
$_smarty_tpl->setVariable('cat', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->getValue('brand')) {?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('page')) {?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('brand')) {?>
                <li class="breadcrumb-item color-999">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->getValue('keyword')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->search, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->getValue('page')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
        </ol>
    </nav>

        <?php if ($_smarty_tpl->getValue('keyword')) {?>
        <h6 class="fsz-18 fw-bold text-uppercase mt-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->search, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
</h6>
    <?php } elseif ($_smarty_tpl->getValue('page')) {?>
        <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-page="<?php echo $_smarty_tpl->getValue('page')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->name, ENT_QUOTES, 'UTF-8', true);?>
</h6>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->name_h1) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-category="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name_h1, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php } elseif ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->name) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-category="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->name_h1) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-brand="<?php echo $_smarty_tpl->getValue('brand')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name_h1, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php } elseif ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->name) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-brand="<?php echo $_smarty_tpl->getValue('brand')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php }?>
    <?php }?>
</section>

<section class="tc-cart p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row products">
        <?php if ($_smarty_tpl->getValue('products')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach1DoElse = false;
?>
                <div class="col-lg-6">
                    <div class="product-card">
                        <div class="top-inf">
                            <?php if ($_smarty_tpl->getValue('product')->discount) {?>
                                <div class="dis-card">
                                    <small class="fsz-10 d-block text-uppercase"> скидка </small>
                                    <h6 class="fsz-14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->price, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                                </div>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="fav-btn" title="В избранное">
                                <i class="las la-heart<?php if ($_smarty_tpl->getValue('wishlist_products') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_smarty_tpl->getValue('wishlist_products'))) {?> color-red2<?php }?>"></i>
                            </a>
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/remove/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="remove-btn" title="Удалить из избранного">
                                <i class="las la-trash"></i>
                            </a>
                        </div>
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="img">
                            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,700,700);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" class="img-contain main-image">
                        </a>
                        <div class="info">
                            <?php if ($_smarty_tpl->getValue('product')->rating) {?>
                                <div class="rating">
                                    <div class="stars">
                                        <?php
$_smarty_tpl->tpl_vars['__smarty_section_star'] = new \Smarty\Variable(array());
if (true) {
for ($__section_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] = 0; $__section_star_0_iteration <= 5; $__section_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']++){
?>
                                            <i class="la la-star<?php if (($_smarty_tpl->getValue('__smarty_section_star')['index'] ?? null) < $_smarty_tpl->getValue('product')->rating) {?> color-yellow<?php }?>"></i>
                                        <?php
}
}
?>
                                    </div>
                                    <span class="num">(<?php echo $_smarty_tpl->getValue('product')->comments_count;?>
)</span>
                                </div>
                            <?php }?>
                            <h6>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="prod-title fsz-14 fw-bold mt-2 hover-green2">
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h6>
                            <div class="price mt-15">
                                <h5 class="fsz-18 color-red1 fw-600"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->variant->price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</h5>
                                <?php if ($_smarty_tpl->getValue('product')->variant->compare_price > 0) {?>
                                    <span class="old-price color-999 text-decoration-line-through ms-2 fsz-12"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->compare_price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php }?>
                            </div>
                            <form class="variants" data-action="/ajax/cart.php" method="post">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->variants, 'v');
$_smarty_tpl->getVariable('v')->index = -1;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$foreach2Backup = clone $_smarty_tpl->getVariable('v');
?>
                                    <input id="featured_<?php echo $_smarty_tpl->getValue('v')->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getValue('v')->id;?>
" type="radio" <?php if ($_smarty_tpl->getVariable('v')->first) {?>checked<?php }?> style="display:none;">
                                <?php
$_smarty_tpl->setVariable('v', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <button type="submit" class="butn bg-red1 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-10 w-100 py-3" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->getValue('product')->variant->stock) {?>disabled<?php }?>>
                                    <i class="la la-cart-plus me-1"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
        <div class="col-md-12">
            <div class="alert alert-info">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->wishlist_no_products, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
        <?php }?>
    </div>
</section>
<?php }
}
