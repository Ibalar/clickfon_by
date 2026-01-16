<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:41:21
  from 'file:cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300f1bf0e89_08697724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0157175bb52d9b0a1512d5d0e8186c0527fff0e5' => 
    array (
      0 => 'cart.tpl',
      1 => 1763798206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692300f1bf0e89_08697724 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->global_cart, false, 32);?>

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">

            <li class="breadcrumb-item color-999">
                <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</a>
            </li>

                        <li class="breadcrumb-item active color-000" aria-current="page">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_cart, ENT_QUOTES, 'UTF-8', true);?>

            </li>

        </ol>
    </nav>

    <h6 class="fsz-18 fw-bold text-uppercase mt-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_cart, ENT_QUOTES, 'UTF-8', true);?>
</h6>
</section>



<section class="tc-cart p-5 radius-4 bg-white mt-3 mb-3">


        <?php if ($_smarty_tpl->getValue('cart')->purchases) {?>
            <form class="form cart" method="post" name="cart" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-8" id="basket-root">

                        <div class="products">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')->purchases, 'purchase');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach0DoElse = false;
?>
                                <div class="product-card">
                                    <div class="top-inf">
                                        <?php if ($_smarty_tpl->getValue('purchase')->variant->compare_price > 0) {?>
                                            <div class="dis-card">
                                                <small class="fsz-10 d-block text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_sale, ENT_QUOTES, 'UTF-8', true);?>
 </small>
                                                <h6 class="fsz-14">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('purchase')->variant->compare_price);
if ($_smarty_tpl->getValue('currency')->sign) {
echo $_smarty_tpl->getValue('currency')->sign;
}?>
                                                </h6>
                                            </div>
                                        <?php }?>
                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/<?php echo $_smarty_tpl->getValue('purchase')->product->url;?>
" class="fav-btn" title="В избранное">
                                            <i class="las la-heart<?php if ($_smarty_tpl->getValue('wishlist_products') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('purchase')->product->url,$_smarty_tpl->getValue('wishlist_products'))) {?> color-red2<?php }?>"></i>
                                        </a>
                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
cart/remove/<?php echo $_smarty_tpl->getValue('purchase')->variant->id;?>
" class="remove-btn" title="Удалить из корзины">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </div>
                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('purchase')->product->url;?>
" class="img">
                                        <?php if ($_smarty_tpl->getValue('purchase')->product->images) {?>
                                            <?php $_smarty_tpl->assign('image', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('purchase')->product->images), false, NULL);?>
                                            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,160,160);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
" class="img-contain main-image">
                                        <?php } else { ?>
                                            <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" class="img-contain main-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php }?>
                                    </a>
                                    <div class="info">
                                        <?php if ($_smarty_tpl->getValue('purchase')->product->rating) {?>
                                            <div class="rating">
                                                <div class="stars">
                                                    <?php
$_smarty_tpl->tpl_vars['__smarty_section_star'] = new \Smarty\Variable(array());
if (true) {
for ($__section_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index'] = 0; $__section_star_0_iteration <= 5; $__section_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_star']->value['index']++){
?>
                                                        <i class="la la-star<?php if (($_smarty_tpl->getValue('__smarty_section_star')['index'] ?? null) < $_smarty_tpl->getValue('purchase')->product->rating) {?> color-yellow<?php }?>"></i>
                                                    <?php
}
}
?>
                                                </div>
                                                <span class="num">(<?php echo $_smarty_tpl->getValue('purchase')->product->comments_count;?>
)</span>
                                            </div>
                                        <?php }?>
                                        <h6>
                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('purchase')->product->url;?>
" class="prod-title fsz-14 fw-bold mt-2 hover-green2"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        </h6>
                                        <div class="price mt-15">
                                            <h5 class="fsz-18 color-red1 fw-600">
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')(($_smarty_tpl->getValue('purchase')->variant->price*$_smarty_tpl->getValue('purchase')->amount));?>

                                                <?php if ($_smarty_tpl->getValue('currency')->sign) {
echo $_smarty_tpl->getValue('currency')->sign;
}?>
                                            </h5>
                                        </div>
                                        <div class="add-more mt-3">
                                            <span class="qt-minus"><i class="fas fa-minus"></i></span>
                                            <input type="text" class="qt border-0"
                                                   value="<?php echo $_smarty_tpl->getValue('purchase')->amount;?>
" min="1"
                                                   data-price="<?php echo $_smarty_tpl->getValue('purchase')->variant->price;?>
"
                                                   data-id="<?php echo $_smarty_tpl->getValue('purchase')->variant->id;?>
">
                                            <span class="qt-plus"><i class="fas fa-plus"></i></span>
                                        </div>
                                        <div class="meta">
                                            <?php if ($_smarty_tpl->getValue('purchase')->product->shipping_free) {?>
                                                <a href="#" class="meta-item color-green2"> бесплатная доставка <span class="bg bg-green2"></span> </a>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('purchase')->product->gift) {?>
                                                <a href="#" class="meta-item color-red1"> подарок <span class="bg bg-red1"></span> </a>
                                            <?php }?>
                                        </div>
                                        <p class="fsz-12 mt-2">
                                            <i class="fas fa-check-circle color-green2 me-1"></i>
                                            <?php if ($_smarty_tpl->getValue('purchase')->variant->stock > 0) {?>В наличии<?php } else { ?>Нет в наличии<?php }?>
                                        </p>
                                    </div>
                                    <input type="hidden" name="product_id[]" value="<?php echo $_smarty_tpl->getValue('purchase')->product->id;?>
">
                                    <input type="hidden" name="variant_id[]" value="<?php echo $_smarty_tpl->getValue('purchase')->variant->id;?>
">
                                    <input type="hidden" name="amounts[<?php echo $_smarty_tpl->getValue('purchase')->variant->id;?>
]" value="<?php echo $_smarty_tpl->getValue('purchase')->amount;?>
">
                                    <input type="hidden" name="price[]" value="<?php echo $_smarty_tpl->getValue('purchase')->variant->price;?>
">
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>

                        <?php if ($_smarty_tpl->getValue('deliveries')) {?>
                            <h3 class="fsz-18 fw-bold mb-4"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->select_delivery_method, ENT_QUOTES, 'UTF-8', true);?>
:</h3>
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('deliveries'), 'delivery');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('delivery')->value) {
$foreach1DoElse = false;
?>
                                    <div class="col-lg-12 mb-3">
                                        <div class="payment-card p-3 radius-4 border bg-light2">
                                            <div class="form-check">
                                                <input class="form-check-input delivery-radio"
                                                       type="radio"
                                                       name="delivery_id"
                                                       id="delivery-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
"
                                                       value="<?php echo $_smarty_tpl->getValue('delivery')->id;?>
">
                                                <label class="form-check-label d-block" for="delivery-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
">
                                                    <h6 class="fw-bold fsz-14 mb-1"><?php if ($_smarty_tpl->getValue('delivery')->icon) {?><img src="<?php echo $_smarty_tpl->getValue('config')->delivery_images_dir;
echo $_smarty_tpl->getValue('delivery')->icon;?>
" style="width:21px; height:21px;" alt=""><?php }?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                                                    <?php if ($_smarty_tpl->getValue('delivery')->description) {?>
                                                        <p class="fsz-13 color-666 mb-2"><?php echo $_smarty_tpl->getValue('delivery')->description;?>
</p>
                                                    <?php }?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>

                            <h3 class="fsz-18 fw-bold mb-4 mt-4"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->select_payment_method, ENT_QUOTES, 'UTF-8', true);?>
:</h3>
                            <div class="row" id="payments-row">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('deliveries'), 'delivery');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('delivery')->value) {
$foreach2DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('delivery')->payment_methods) {?>
                                        <div class="row payment-methods" id="payment-methods-delivery-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
" style="<?php if ($_smarty_tpl->getValue('delivery_id') != $_smarty_tpl->getValue('delivery')->id) {?>display:none<?php }?>">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('delivery')->payment_methods, 'payment_method');
$_smarty_tpl->getVariable('payment_method')->index = -1;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment_method')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('payment_method')->index++;
$_smarty_tpl->getVariable('payment_method')->first = !$_smarty_tpl->getVariable('payment_method')->index;
$foreach3Backup = clone $_smarty_tpl->getVariable('payment_method');
?>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="payment-card p-3 radius-4 border bg-light2">
                                                        <div class="form-check">
                                                            <input class="form-check-input"
                                                                   type="radio"
                                                                   name="payment_method_id"
                                                                   id="payment-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
-<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
"
                                                                   value="<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
"
                                                                   <?php if ($_smarty_tpl->getVariable('payment_method')->first && $_smarty_tpl->getValue('delivery_id') == $_smarty_tpl->getValue('delivery')->id) {?>checked<?php }?>>
                                                            <label class="form-check-label d-block" for="payment-<?php echo $_smarty_tpl->getValue('delivery')->id;?>
-<?php echo $_smarty_tpl->getValue('payment_method')->id;?>
">
                                                                <h6 class="fw-bold fsz-14 mb-1">
                                                                    <?php if ($_smarty_tpl->getValue('payment_method')->icon) {?><img src="<?php echo $_smarty_tpl->getValue('config')->payment_images_dir;
echo $_smarty_tpl->getValue('payment_method')->icon;?>
" style="width:21px; height:21px;" alt=""><?php }?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('payment_method')->name, ENT_QUOTES, 'UTF-8', true);?>

                                                                </h6>
                                                                <?php if ($_smarty_tpl->getValue('payment_method')->description) {?>
                                                                    <p class="fsz-13 color-666 mb-2"><?php echo $_smarty_tpl->getValue('payment_method')->description;?>
</p>
                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
$_smarty_tpl->setVariable('payment_method', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>




                        <div  class="tb-basket tb-blue tb-step-opacity" style="opacity: 1;">
                            <div class="flexbox flexbox--row basket-items-list">
                                <div class="basket-items-list-outer">


                                    <div class="row basket-items-list-wrapper no-print">
                                        <div class="col-md-12">

                                                                                        <h3><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->address_recipient, ENT_QUOTES, 'UTF-8', true);?>
</h3>
                                            <?php if ($_smarty_tpl->getValue('error')) {?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php if ($_smarty_tpl->getValue('error') == 'empty_name') {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_your_name, ENT_QUOTES, 'UTF-8', true);
}?>
                                                    <?php if ($_smarty_tpl->getValue('error') == 'empty_email') {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_your_email, ENT_QUOTES, 'UTF-8', true);
}?>
                                                    <?php if ($_smarty_tpl->getValue('error') == 'captcha') {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->captcha_incorrect, ENT_QUOTES, 'UTF-8', true);
}?>
                                                </div>
                                            <?php }?>
                                            <div class="form-group">
                                                <label for="cart-name" class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->general_full_name, ENT_QUOTES, 'UTF-8', true);?>
<span class="required-star">*</span></label>
                                                <div class="input">
                                                    <input type="text" class="form-control" name="name" id="cart-name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_your_name, ENT_QUOTES, 'UTF-8', true);?>
" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-email" class="form-label">Email<span class="required-star">*</span></label>
                                                <div class="input">
                                                    <input type="text" class="form-control" name="email" id="cart-email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_your_email, ENT_QUOTES, 'UTF-8', true);?>
" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-phone" class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->phone, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                                <div class="input">
                                                    <input type="text" class="form-control phone" name="phone" id="cart-phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('phone'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_phone_number, ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-address" class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->delivery_address, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                                <div class="input">
                                                    <input type="text" class="form-control" name="address" id="cart-address" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('address'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_the_address, ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-comment" class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->comment, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                                <div class="input">
                                                    <textarea class="form-control" name="comment" id="cart-comment" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_a_comment, ENT_QUOTES, 'UTF-8', true);?>
" rows="4"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('comment'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->getValue('settings')->captcha_cart) {?>
                                                <div class="clearfix fill-animate">
                                                    <label class="font_14">
                                                        <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->captcha_label, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;<span class="required-star">*</span></span>
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6 pb-3">
                                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_captcha')->handle(array('var'=>"captcha_cart"), $_smarty_tpl);?>

                                                        <div class="secret-number"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('captcha_cart')[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? = <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('captcha_cart')[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <div class="input">
                                                            <input type="text" class="form-control required" name="captcha_code" value="" autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-card">
                            <strong class="fsz-16 d-block mb-20"> Ваш заказ</strong>
                            <div class="card-item border-0"> <strong class="color-000 text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->sum, ENT_QUOTES, 'UTF-8', true);?>
: </strong> <strong class="color-000"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('cart')->total_cart);?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>
 </strong> </div>
                            <div class="btns pt-3">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <button type="submit" class="butn bg-green2 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-3 mt-lg-0 py-3 px-3 w-100" name="checkout"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->checkout, ENT_QUOTES, 'UTF-8', true);?>
</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('empty'=>1), $_smarty_tpl);?>
" class="butn bg-red2 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-3 mt-lg-0 py-3 px-3 w-100">
                                            Очистить
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-light2 mb-3" role="alert">
                        <p> <span class="icon"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->cart_no_products, ENT_QUOTES, 'UTF-8', true);?>
 <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>" class="color-red1 text-decoration-underline"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->click_here, ENT_QUOTES, 'UTF-8', true);?>
 </a>, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->to_continue_shopping, ENT_QUOTES, 'UTF-8', true);?>
 </p>
                    </div>
                </div>
            </div>
        <?php }?>



    </div>
</section>
<?php }
}
