<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:27:23
  from 'file:product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2eab717f22_84157821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79fa75744b85f97dc03effb7f137268fe70fd89d' => 
    array (
      0 => 'product.tpl',
      1 => 1763668961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2eab717f22_84157821 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html';
if ((null !== ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? null)) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {?>
	<?php $_smarty_tpl->assign('cleanTpl', $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_GET['tpl'],"?",''), false, NULL);?>
	<?php if ($_smarty_tpl->getValue('cleanTpl') == 'quickview') {?>
		<?php $_smarty_tpl->assign('wrapper', 'modals/quickview.tpl', false, 32);?>
	<?php } elseif ($_smarty_tpl->getValue('cleanTpl') == 'detail_clothes') {?>
		<?php $_smarty_tpl->assign('wrapper', 'modals/detail_clothes.tpl', false, 32);?>
	<?php } elseif ($_smarty_tpl->getValue('cleanTpl') == 'fast_order') {?>
		<?php $_smarty_tpl->assign('wrapper', 'modals/fast_order.tpl', false, 32);?>
	<?php } elseif ($_smarty_tpl->getValue('cleanTpl') == 'grid') {?>
		<?php $_smarty_tpl->assign('wrapper', 'loading/grid.tpl', false, 32);?>
	<?php } elseif ($_smarty_tpl->getValue('cleanTpl') == 'list') {?>
		<?php $_smarty_tpl->assign('wrapper', 'loading/list.tpl', false, 32);?>
	<?php } elseif ($_smarty_tpl->getValue('cleanTpl') == 'price') {?>
		<?php $_smarty_tpl->assign('wrapper', 'loading/price.tpl', false, 32);?>
	<?php }
}?>

<?php $_smarty_tpl->assign('canonical', "/products/".((string)$_smarty_tpl->getValue('product')->url), false, 32);?>

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
                        <?php if ((null !== ($_smarty_tpl->getValue('product') ?? null))) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
        </ol>
    </nav>

</section>

<section class="product-main-details p-30 radius-4 bg-white mt-3 wow fadeInUp">
    <div class="row">
        <div class="col-lg-5">
            <div class="img-slider">
                <div class="top-title">
                    <?php if ($_smarty_tpl->getValue('product')->is_new) {?>
                        <small class="fsz-10 py-1 px-2 radius-2 bg-222 text-white text-uppercase">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);?>

                        </small>
                    <?php }?>
                </div>

                                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <?php if ($_smarty_tpl->getValue('product')->images) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->images, 'image');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach1DoElse = false;
?>
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,700,700);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>

                                <div class="swiper-container gallery-thumbs py-3">
                    <div class="swiper-wrapper">
                        <?php if ($_smarty_tpl->getValue('product')->images) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->images, 'image');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach2DoElse = false;
?>
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,88,88);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="info">
                <div class="rating" title="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')(sprintf('%.1f',$_smarty_tpl->getValue('product')->ratings)) > 0) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->rating, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo sprintf('%.1f',$_smarty_tpl->getValue('product')->ratings);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->out_of, ENT_QUOTES, 'UTF-8', true);?>
 5<?php } else {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->no_ratings, ENT_QUOTES, 'UTF-8', true);
}?>">

                    <div class="stars">
                        <?php $_smarty_tpl->assign('rating', sprintf('%.1f',$_smarty_tpl->getValue('product')->ratings), false, NULL);?>
                        <?php $_smarty_tpl->assign('intRating', $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('rating')), false, NULL);?>
                        <?php $_smarty_tpl->assign('i', 1, false, NULL);?>
                        <?php
$_smarty_tpl->tpl_vars['__smarty_section_star'] = new \Smarty\Variable(array());
if (true) {
for ($__section_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] = 0; $__section_star_0_iteration <= 5; $__section_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']++){
?>
                            <i class="la la-star<?php if (($_smarty_tpl->getValue('__smarty_section_star')['index'] ?? null)+1 > $_smarty_tpl->getValue('rating')) {?> color-999<?php }?>"></i>
                        <?php
}
}
?>
                    </div>
                    <span class="num">
                       (<?php if ($_smarty_tpl->getValue('rating') > 0) {
echo $_smarty_tpl->getValue('rating');
} else { ?>0<?php }?>)
                    </span>
                </div>

                <h4 class="product_title">
                    <span data-product="<?php echo $_smarty_tpl->getValue('product')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </h4>

                <?php if ($_smarty_tpl->getValue('product')->features) {?>

                    <ul class="fsz-12 mt-15 lh-5">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')->features,0,5), 'f');
$_smarty_tpl->getVariable('f')->index = -1;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('f')->index++;
$foreach3Backup = clone $_smarty_tpl->getVariable('f');
?>
                        <?php if (!$_smarty_tpl->getValue('f')->is_color) {?>
                            <li> <span class="icon-6 bg-666 rounded-circle me-2"></span> <?php echo $_smarty_tpl->getValue('f')->name;?>
: <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('f')->values, 'v', true);
$_smarty_tpl->getVariable('v')->iteration = 0;
$_smarty_tpl->getVariable('v')->index = -1;
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach4DoElse = false;
$_smarty_tpl->getVariable('v')->iteration++;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$_smarty_tpl->getVariable('v')->last = $_smarty_tpl->getVariable('v')->iteration === $_smarty_tpl->getVariable('v')->total;
$foreach4Backup = clone $_smarty_tpl->getVariable('v');
?>
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('v')->value, ENT_QUOTES, 'UTF-8', true);
if (!$_smarty_tpl->getVariable('v')->last) {?>,<?php }?>
                                <?php
$_smarty_tpl->setVariable('v', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </li>
                        <?php }?>
                        <?php
$_smarty_tpl->setVariable('f', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('product')->variant->color) {?>
                    <div class="color-content">
                        <p class="color-666">
                            <strong class="color-000 text-uppercase me-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->color, ENT_QUOTES, 'UTF-8', true);?>
:</strong>
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->variant->color, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </p>
                        <div class="memory-choose mt-10">

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->related_products, 'related_product');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('related_product')->value) {
$foreach5DoElse = false;
?>
                                    <div class="form-check form-check-inline">
                                        <a class="form-check-label <?php if ($_smarty_tpl->getValue('related_product')->id == $_smarty_tpl->getValue('product')->id) {?> color-item-active<?php }?>" href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('related_product')->url;?>
">
                                            <div class="color-item pointer ">
                                                <div class="inf">
                                                    <p class="fsz-12"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->variant->color, ENT_QUOTES, 'UTF-8', true);?>
</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>

                                                <?php if ($_smarty_tpl->getValue('product')->features['memory']) {?>
                            <p class="color-666 mt-20">
                                <strong class="color-000 text-uppercase me-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->features['memory']->name, ENT_QUOTES, 'UTF-8', true);?>
:</strong>
                                <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->variant->memory, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </p>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->related_products, 'related_product');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('related_product')->value) {
$foreach6DoElse = false;
?>
                                <?php if ($_smarty_tpl->getValue('related_product')->variant->memory) {?>
                                    <a class="memory-link form-check-label d-inline-block me-2"
                                       href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('related_product')->url;?>
">
                                        <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->variant->memory, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </div>
                <?php }?>



                <?php if ($_smarty_tpl->getValue('product')->annotation) {?>
                    <p class="fsz-12 mt-15 lh-5">
                        <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')->annotation);?>

                    </p>
                <?php }?>



                <?php if ($_smarty_tpl->getValue('product')->variant->sku) {?>
                    <p class="color-666"> <strong class="color-000 text-uppercase me-1"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->sku, ENT_QUOTES, 'UTF-8', true);?>
: </strong> <span> <?php echo $_smarty_tpl->getValue('product')->variant->sku;?>
 </span> </p>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('cat')->last) {?>
                    <p class="color-666"> <strong class="color-000 text-uppercase me-1"> Категория: </strong> <span> <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('cat')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a> </span> </p>
                <?php }?>


                <?php if ($_smarty_tpl->getValue('brand')) {?>
                <p class="color-666"> <strong class="color-000 text-uppercase me-1"> Производитель: </strong> <span class="color-green2"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
 </span> </p>
                <?php }?>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="payment-side">
                <div class="payment-card">
                    <small class="fsz-12 color-666 text-uppercase mb-2"> Стоимость: </small>
                    <h5 class="fsz-30 fw-bold"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</h5>
                    <?php if ($_smarty_tpl->getValue('product')->variant->stock) {?>
                    <p class="fsz-12 mt-3"> <i class="fas fa-check-circle color-green2 me-1"></i> В наличии </p>
                    <?php }?>
                    <form class="variants" data-action="/ajax/cart.php">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->variants, 'v', true);
$_smarty_tpl->getVariable('v')->iteration = 0;
$_smarty_tpl->getVariable('v')->index = -1;
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach7DoElse = false;
$_smarty_tpl->getVariable('v')->iteration++;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$_smarty_tpl->getVariable('v')->last = $_smarty_tpl->getVariable('v')->iteration === $_smarty_tpl->getVariable('v')->total;
$foreach7Backup = clone $_smarty_tpl->getVariable('v');
?>
                            <input name="variant" value="<?php echo $_smarty_tpl->getValue('v')->id;?>
" type="radio" <?php if ($_smarty_tpl->getVariable('v')->first) {?>checked<?php }?> style="display:none;">
                        <?php
$_smarty_tpl->setVariable('v', $foreach7Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <div class="add-more">
                            <span class="qt-minus"><i class="fas fa-minus"></i></span>
                            <input type="text" class="qt border-0" name="amount" value="1">
                            <span class="qt-plus"><i class="fas fa-plus"></i></span>
                        </div>
                        <button id="add-to-cart" type="submit" class="butn bg-red1 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-10 w-100 py-3">
                            <span>В корзину</span>
                        </button>
                    </form>
                    <div class="d-flex color-666 fsz-13 py-3 border-bottom">

                        <?php if ($_smarty_tpl->getValue('wishlist') || ($_smarty_tpl->getValue('wishlist_products') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_smarty_tpl->getValue('wishlist_products')))) {?>
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/remove/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="wishlist-btn me-2 pe-2 border-end" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->delete, ENT_QUOTES, 'UTF-8', true);?>
">
                                <i class="fas fa-heart color-red2 me-1"></i> В избранном
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="wishlist-btn me-2 pe-2 border-end" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_to_wishlist, ENT_QUOTES, 'UTF-8', true);?>
">
                                <i class="fas fa-heart me-1"></i> В избранное
                            </a>
                        <?php }?>

                        <?php if ((null !== ($_SESSION['compared_products'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_SESSION['compared_products'])) {?>

                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/remove/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="compare-btn ms-2 ps-2 active" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->added_to_compare, ENT_QUOTES, 'UTF-8', true);?>
">
                                <i class="fas fa-redo color-red2 me-1"></i> В сравнении
                            </a>

                        <?php } else { ?>

                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="compare-btn ms-2 ps-2" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_to_compare, ENT_QUOTES, 'UTF-8', true);?>
" data-title_added="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->added_to_compare, ENT_QUOTES, 'UTF-8', true);?>
">
                                <i class="fas fa-redo me-1"></i> Сравнить
                            </a>
                        <?php }?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="product-text-details  radius-4 bg-white mt-3 wow fadeInUp mb-3">

    <h6 class="fsz-18 fw-bold text-uppercase p-30"> Характеристики </h6>


                                <?php $_smarty_tpl->assign('feature_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')->features), false, NULL);?>
                <?php $_smarty_tpl->assign('column1', array(), false, NULL);?>
                <?php $_smarty_tpl->assign('column2', array(), false, NULL);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->features, 'f');
$_smarty_tpl->getVariable('f')->index = -1;
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach8DoElse = false;
$_smarty_tpl->getVariable('f')->index++;
$foreach8Backup = clone $_smarty_tpl->getVariable('f');
?>
                    <?php if ($_smarty_tpl->getVariable('f')->index%2 == 0) {?>
                        <?php $_tmp_array = $_smarty_tpl->getValue('column1') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('f');
$_smarty_tpl->assign('column1', $_tmp_array, false, NULL);?>
                    <?php } else { ?>
                        <?php $_tmp_array = $_smarty_tpl->getValue('column2') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('f');
$_smarty_tpl->assign('column2', $_tmp_array, false, NULL);?>
                    <?php }?>
                <?php
$_smarty_tpl->setVariable('f', $foreach8Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <div class="item-specs__unit__body">
                    <div class="item-specs__unit__body__inner">
                        <div class="item-specs__table more-text">
                            <table class="item-specs__table__column">
                                <tbody>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('column1'), 'f');
$_smarty_tpl->getVariable('f')->index = -1;
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach9DoElse = false;
$_smarty_tpl->getVariable('f')->index++;
$foreach9Backup = clone $_smarty_tpl->getVariable('f');
?>
                                    <?php if (!$_smarty_tpl->getValue('f')->is_color) {?>
                                        <tr class="item-specs__table__unit">
                                            <td>
                                                <span class="item-specs__table__unit__title"><?php echo $_smarty_tpl->getValue('f')->name;?>
:</span>
                                            </td>
                                            <td>
                                <span class="item-specs__table__unit__content">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('f')->values, 'v', true);
$_smarty_tpl->getVariable('v')->iteration = 0;
$_smarty_tpl->getVariable('v')->index = -1;
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach10DoElse = false;
$_smarty_tpl->getVariable('v')->iteration++;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$_smarty_tpl->getVariable('v')->last = $_smarty_tpl->getVariable('v')->iteration === $_smarty_tpl->getVariable('v')->total;
$foreach10Backup = clone $_smarty_tpl->getVariable('v');
?>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('v')->value, ENT_QUOTES, 'UTF-8', true);
if (!$_smarty_tpl->getVariable('v')->last) {?>,<?php }?>
                                    <?php
$_smarty_tpl->setVariable('v', $foreach10Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </span>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php
$_smarty_tpl->setVariable('f', $foreach9Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <table class="item-specs__table__column">
                                <tbody>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('column2'), 'f');
$_smarty_tpl->getVariable('f')->index = -1;
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach11DoElse = false;
$_smarty_tpl->getVariable('f')->index++;
$foreach11Backup = clone $_smarty_tpl->getVariable('f');
?>
                                    <?php if (!$_smarty_tpl->getValue('f')->is_color) {?>
                                        <tr class="item-specs__table__unit">
                                            <td>
                                                <span class="item-specs__table__unit__title"><?php echo $_smarty_tpl->getValue('f')->name;?>
:</span>
                                            </td>
                                            <td>
                                <span class="item-specs__table__unit__content">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('f')->values, 'v', true);
$_smarty_tpl->getVariable('v')->iteration = 0;
$_smarty_tpl->getVariable('v')->index = -1;
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach12DoElse = false;
$_smarty_tpl->getVariable('v')->iteration++;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$_smarty_tpl->getVariable('v')->last = $_smarty_tpl->getVariable('v')->iteration === $_smarty_tpl->getVariable('v')->total;
$foreach12Backup = clone $_smarty_tpl->getVariable('v');
?>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('v')->value, ENT_QUOTES, 'UTF-8', true);
if (!$_smarty_tpl->getVariable('v')->last) {?>,<?php }?>
                                    <?php
$_smarty_tpl->setVariable('v', $foreach12Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </span>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php
$_smarty_tpl->setVariable('f', $foreach11Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <div class="overlay"></div>
                            <a href="javascript:void(0);" class="more-btn color-red1 text-uppercase fsz-13 pt-5"> Все характеристики <i class="la la-angle-down ms-1"></i> </a>
                        </div>
                    </div>
                </div>
</section>
<?php }
}
