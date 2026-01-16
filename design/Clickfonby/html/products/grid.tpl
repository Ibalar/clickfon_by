<div class="col-lg-3 my-1">
    <div class="product-card">
        <div class="top">
            {if $product->is_hit}
                <small class="fsz-11 py-1 px-3 rounded-pill color-red1 border-red1 border"> {$lang->badge_hit|escape} </small>
            {/if}
            <div class="icons">

                {if $wishlist || ($wishlist_products && in_array($product->url, $wishlist_products))}
                    <a href="{$lang_link}wishlist/remove/{$product->url}" class="icon fav active" title="{$lang->delete|escape}">
                        <i class="fal fa-heart"></i>
                    </a>
                {else}
                    <a href="{$lang_link}wishlist/{$product->url}" class="icon fav" title="{$lang->add_to_wishlist|escape}">
                        <i class="fal fa-heart"></i>
                    </a>
                {/if}


                <a href="#0" class="icon"> <i class="fal fa-sync"></i> </a>
                <a href="assets/img/products/prod3.png" class="icon" data-fancybox="deal"> <i class="fal fa-eye"></i> </a>
            </div>
        </div>

        <a href="{$lang_link}products/{$product->url}" class="img mb-20 d-block">
            {if $product->image}
                <img class="img-contain" src="{$product->image->filename|resize:700:700}" alt="{$product->name|escape}" title="{$product->name|escape}" />
            {else}
                <img class="img-contain" style="width: 170px; height: 170px;" src="design/{$settings->theme|escape}/images/no-photo.svg" alt="{$product->name|escape}" title="{$product->name|escape}" />
            {/if}
        </a>
        <div class="info">
            <div class="tags">
                {if $product->variant->compare_price > $product->variant->price && $product->variant->price > 0}
                    <span class="label fsz-11 py-1 px-3 rounded-pill bg-red1 text-white text-uppercase"> {round((($product->variant->price-$product->variant->compare_price)/$product->variant->compare_price)*100, 0)}% </span>
                {/if}
                {if $product->featured && !$product->is_new}
                    <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> {$lang->badge_featured|escape} </span>
                {/if}
                {if !$product->featured && $product->is_new}
                    <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> {$lang->badge_new|escape} </span>
                {/if}
                {if $product->featured && $product->is_new}
                    <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> {$lang->badge_new|escape} </span>
                {/if}
            </div>
            <a href="{$lang_link}products/{$product->url}" class="title fsz-14 mt-15 fw-600 hover-blue1"> {$product->name|escape} </a>
            <div class="stars fsz-13 mt-2">
                {assign var="avg" value=$product->rating|floatval}
                {if $avg > 0}
                    <i class="fas fa-star active"></i>
                    <span> {$avg} </span>
                {else}
                    <i class="la la-star color-999"></i>
                    <span> нет оценок </span>
                {/if}
            </div>
            <p class="price color-red1 mt-2 fsz-18">
                {$product->variant->price|convert} {$currency->sign|escape}
                {if $product->variant->compare_price > 0}
                    <span class="old-price color-999 text-decoration-line-through ms-2 fsz-12"> {$product->variant->compare_price|convert} {$currency->sign|escape}</span>
                {/if}
            </p>
            <div class="thumbnail-imgs mt-10">
                {foreach $product->related_products as $related_product}
                    <a href="{$lang_link}products/{$related_product->url}" class="color-img" title="{$related_product->variant->color|escape}">
                        <span class="thumbnail{if $product->id == $related_product->id} selected{/if}" style="display:inline-block; width:20px; height:20px; border-radius:50%; background:{$related_product->variant->color_code|escape}; border:2px solid #edeef1;"></span>
                    </a>
                {/foreach}
            </div>
        </div>
        <form class="variants" data-action="/ajax/cart.php" method="post">
            {foreach $product->variants as $v}
                <input id="featured_{$v->id}" name="variant" value="{$v->id}" type="radio" {if $v@first}checked{/if} style="display:none;">
            {/foreach}
            <button type="submit" class="cart-btn addCart" value="{$lang->add_cart|escape}" title="{$lang->add_cart|escape}" {if !$product->variant->stock}disabled{/if}>
                <i class="la la-cart-plus me-1"></i> {$lang->add_cart|escape}
            </button>
        </form>

    </div>

</div>