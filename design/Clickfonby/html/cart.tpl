{* Cart template *}

{$meta_title = $lang->global_cart scope=global}

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">

            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>

            {* Если это страница корзины *}
            <li class="breadcrumb-item active color-000" aria-current="page">
                {$lang->global_cart|escape}
            </li>

        </ol>
    </nav>

    <h6 class="fsz-18 fw-bold text-uppercase mt-3">{$lang->global_cart|escape}</h6>
</section>



<section class="tc-cart p-5 radius-4 bg-white mt-3 mb-3">


        {if $cart->purchases}
            <form class="form cart" method="post" name="cart" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-8" id="basket-root">

                        <div class="products">
                            {foreach $cart->purchases as $purchase}
                                <div class="product-card">
                                    <div class="top-inf">
                                        {if $purchase->variant->compare_price > 0}
                                            <div class="dis-card">
                                                <small class="fsz-10 d-block text-uppercase"> {$lang->badge_sale|escape} </small>
                                                <h6 class="fsz-14">
                                                    {$purchase->variant->compare_price|convert}{if $currency->sign}{$currency->sign}{/if}
                                                </h6>
                                            </div>
                                        {/if}
                                        <a href="{$lang_link}wishlist/{$purchase->product->url}" class="fav-btn" title="В избранное">
                                            <i class="las la-heart{if $wishlist_products && in_array($purchase->product->url, $wishlist_products)} color-red2{/if}"></i>
                                        </a>
                                        <a href="{$lang_link}cart/remove/{$purchase->variant->id}" class="remove-btn" title="Удалить из корзины">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </div>
                                    <a href="{$lang_link}products/{$purchase->product->url}" class="img">
                                        {if $purchase->product->images}
                                            {$image = $purchase->product->images|first}
                                            <img src="{$image->filename|resize:160:160}" alt="{$purchase->product->name|escape}" class="img-contain main-image">
                                        {else}
                                            <img src="design/{$settings->theme|escape}/images/no-photo.svg" class="img-contain main-image" alt="{$purchase->product->name|escape}">
                                        {/if}
                                    </a>
                                    <div class="info">
                                        {if $purchase->product->rating}
                                            <div class="rating">
                                                <div class="stars">
                                                    {section name=star loop=5}
                                                        <i class="la la-star{if $smarty.section.star.index < $purchase->product->rating} color-yellow{/if}"></i>
                                                    {/section}
                                                </div>
                                                <span class="num">({$purchase->product->comments_count})</span>
                                            </div>
                                        {/if}
                                        <h6>
                                            <a href="{$lang_link}products/{$purchase->product->url}" class="prod-title fsz-14 fw-bold mt-2 hover-green2">{$purchase->product->name|escape}</a>
                                        </h6>
                                        <div class="price mt-15">
                                            <h5 class="fsz-18 color-red1 fw-600">
                                                {($purchase->variant->price * $purchase->amount)|convert}
                                                {if $currency->sign}{$currency->sign}{/if}
                                            </h5>
                                        </div>
                                        <div class="add-more mt-3">
                                            <span class="qt-minus"><i class="fas fa-minus"></i></span>
                                            <input type="text" class="qt border-0"
                                                   value="{$purchase->amount}" min="1"
                                                   data-price="{$purchase->variant->price}"
                                                   data-id="{$purchase->variant->id}">
                                            <span class="qt-plus"><i class="fas fa-plus"></i></span>
                                        </div>
                                        <div class="meta">
                                            {if $purchase->product->shipping_free}
                                                <a href="#" class="meta-item color-green2"> бесплатная доставка <span class="bg bg-green2"></span> </a>
                                            {/if}
                                            {if $purchase->product->gift}
                                                <a href="#" class="meta-item color-red1"> подарок <span class="bg bg-red1"></span> </a>
                                            {/if}
                                        </div>
                                        <p class="fsz-12 mt-2">
                                            <i class="fas fa-check-circle color-green2 me-1"></i>
                                            {if $purchase->variant->stock > 0}В наличии{else}Нет в наличии{/if}
                                        </p>
                                    </div>
                                    <input type="hidden" name="product_id[]" value="{$purchase->product->id}">
                                    <input type="hidden" name="variant_id[]" value="{$purchase->variant->id}">
                                    <input type="hidden" name="amounts[{$purchase->variant->id}]" value="{$purchase->amount}">
                                    <input type="hidden" name="price[]" value="{$purchase->variant->price}">
                                </div>
                            {/foreach}
                        </div>

                        {if $deliveries}
                            <h3 class="fsz-18 fw-bold mb-4">{$lang->select_delivery_method|escape}:</h3>
                            <div class="row">
                                {foreach $deliveries as $delivery}
                                    <div class="col-lg-12 mb-3">
                                        <div class="payment-card p-3 radius-4 border bg-light2">
                                            <div class="form-check">
                                                <input class="form-check-input delivery-radio"
                                                       type="radio"
                                                       name="delivery_id"
                                                       id="delivery-{$delivery->id}"
                                                       value="{$delivery->id}">
                                                <label class="form-check-label d-block" for="delivery-{$delivery->id}">
                                                    <h6 class="fw-bold fsz-14 mb-1">{if $delivery->icon}<img src="{$config->delivery_images_dir}{$delivery->icon}" style="width:21px; height:21px;" alt="">{/if} {$delivery->name|escape}</h6>
                                                    {if $delivery->description}
                                                        <p class="fsz-13 color-666 mb-2">{$delivery->description}</p>
                                                    {/if}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>

                            <h3 class="fsz-18 fw-bold mb-4 mt-4">{$lang->select_payment_method|escape}:</h3>
                            <div class="row" id="payments-row">
                                {foreach $deliveries as $delivery}
                                    {if $delivery->payment_methods}
                                        <div class="row payment-methods" id="payment-methods-delivery-{$delivery->id}" style="{if $delivery_id != $delivery->id}display:none{/if}">
                                            {foreach $delivery->payment_methods as $payment_method}
                                                <div class="col-lg-12 mb-3">
                                                    <div class="payment-card p-3 radius-4 border bg-light2">
                                                        <div class="form-check">
                                                            <input class="form-check-input"
                                                                   type="radio"
                                                                   name="payment_method_id"
                                                                   id="payment-{$delivery->id}-{$payment_method->id}"
                                                                   value="{$payment_method->id}"
                                                                   {if $payment_method@first && $delivery_id == $delivery->id}checked{/if}>
                                                            <label class="form-check-label d-block" for="payment-{$delivery->id}-{$payment_method->id}">
                                                                <h6 class="fw-bold fsz-14 mb-1">
                                                                    {if $payment_method->icon}<img src="{$config->payment_images_dir}{$payment_method->icon}" style="width:21px; height:21px;" alt="">{/if} {$payment_method->name|escape}
                                                                </h6>
                                                                {if $payment_method->description}
                                                                    <p class="fsz-13 color-666 mb-2">{$payment_method->description}</p>
                                                                {/if}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            {/foreach}
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        {/if}




                        <div  class="tb-basket tb-blue tb-step-opacity" style="opacity: 1;">
                            <div class="flexbox flexbox--row basket-items-list">
                                <div class="basket-items-list-outer">


                                    <div class="row basket-items-list-wrapper no-print">
                                        <div class="col-md-12">

                                            {* Form Data *}
                                            <h3>{$lang->address_recipient|escape}</h3>
                                            {if $error}
                                                <div class="alert alert-danger" role="alert">
                                                    {if $error == 'empty_name'}{$lang->enter_your_name|escape}{/if}
                                                    {if $error == 'empty_email'}{$lang->enter_your_email|escape}{/if}
                                                    {if $error == 'captcha'}{$lang->captcha_incorrect|escape}{/if}
                                                </div>
                                            {/if}
                                            <div class="form-group">
                                                <label for="cart-name" class="form-label">{$lang->general_full_name|escape}<span class="required-star">*</span></label>
                                                <div class="input">
                                                    <input type="text" class="form-control" name="name" id="cart-name" value="{$name|escape}" placeholder="{$lang->enter_your_name|escape}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-email" class="form-label">Email<span class="required-star">*</span></label>
                                                <div class="input">
                                                    <input type="text" class="form-control" name="email" id="cart-email" value="{$email|escape}" placeholder="{$lang->enter_your_email|escape}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-phone" class="form-label">{$lang->phone|escape}</label>
                                                <div class="input">
                                                    <input type="text" class="form-control phone" name="phone" id="cart-phone" value="{$phone|escape}" placeholder="{$lang->enter_phone_number|escape}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-address" class="form-label">{$lang->delivery_address|escape}</label>
                                                <div class="input">
                                                    <input type="text" class="form-control" name="address" id="cart-address" value="{$address|escape}" placeholder="{$lang->enter_the_address|escape}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cart-comment" class="form-label">{$lang->comment|escape}</label>
                                                <div class="input">
                                                    <textarea class="form-control" name="comment" id="cart-comment" placeholder="{$lang->enter_a_comment|escape}" rows="4">{$comment|escape}</textarea>
                                                </div>
                                            </div>
                                            {if $settings->captcha_cart}
                                                <div class="clearfix fill-animate">
                                                    <label class="font_14">
                                                        <span>{$lang->captcha_label|escape}&nbsp;<span class="required-star">*</span></span>
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6 pb-3">
                                                        {get_captcha var="captcha_cart"}
                                                        <div class="secret-number">{$captcha_cart[0]|escape} + ? = {$captcha_cart[1]|escape}</div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <div class="input">
                                                            <input type="text" class="form-control required" name="captcha_code" value="" autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            {/if}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-card">
                            <strong class="fsz-16 d-block mb-20"> Ваш заказ</strong>
                            <div class="card-item border-0"> <strong class="color-000 text-uppercase"> {$lang->sum|escape}: </strong> <strong class="color-000"> {$cart->total_cart|convert}&nbsp;{$currency->sign} </strong> </div>
                            <div class="btns pt-3">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <button type="submit" class="butn bg-green2 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-3 mt-lg-0 py-3 px-3 w-100" name="checkout">{$lang->checkout|escape}</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{url empty=1}" class="butn bg-red2 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-3 mt-lg-0 py-3 px-3 w-100">
                                            Очистить
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        {else}
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-light2 mb-3" role="alert">
                        <p> <span class="icon"> {$lang->cart_no_products|escape} <a href="{if $lang_link}{$lang_link}{else}/{/if}" class="color-red1 text-decoration-underline"> {$lang->click_here|escape} </a>, {$lang->to_continue_shopping|escape} </p>
                    </div>
                </div>
            </div>
        {/if}



    </div>
</section>
