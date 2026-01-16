{* Wishlist *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->wishlist scope=global}

	{* Canonical *}
	{$canonical="/wishlist" scope=global}
{/if}

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>
            {if $category}
                <li class="breadcrumb-item color-999">
                    <a href="{$lang_link}catalog">{$lang->catalog|escape}</a>
                </li>
                {foreach $category->path as $cat}
                    {if !$cat@last || $keyword || $page || $brand}
                        <li class="breadcrumb-item color-999">
                            <a href="{$lang_link}catalog/{$cat->url}">{$cat->name|escape}</a>
                        </li>
                    {else}
                        <li class="breadcrumb-item active color-000" aria-current="page">{$cat->name|escape}</li>
                    {/if}
                {/foreach}
                {if $brand}
                    <li class="breadcrumb-item active color-000" aria-current="page">{$brand->name|escape}</li>
                {/if}
                {if $page}
                    <li class="breadcrumb-item active color-000" aria-current="page">{$page->header|escape}</li>
                {/if}
            {elseif $brand}
                <li class="breadcrumb-item color-999">
                    <a href="{$lang_link}brands">{$lang->global_brands|escape}</a>
                </li>
                <li class="breadcrumb-item active color-000" aria-current="page">{$brand->name|escape}</li>
            {elseif $keyword}
                <li class="breadcrumb-item active color-000" aria-current="page">{$lang->search|escape}</li>
            {elseif $page}
                <li class="breadcrumb-item active color-000" aria-current="page">{$page->header|escape}</li>
            {/if}
        </ol>
    </nav>

    {* Page Title *}
    {if $keyword}
        <h6 class="fsz-18 fw-bold text-uppercase mt-3">{$lang->search|escape} {$keyword|escape}</h6>
    {elseif $page}
        <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-page="{$page->id}">{$page->name|escape}</h6>
    {else}
        {if $category && $category->name_h1}
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-category="{$category->id}">
                {$category->name_h1|escape}
            </h6>
        {elseif $category && $category->name}
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-category="{$category->id}">
                {$category->name|escape}
            </h6>
        {/if}

        {if $brand && $brand->name_h1}
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-brand="{$brand->id}">
                {$brand->name_h1|escape}
            </h6>
        {elseif $brand && $brand->name}
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-brand="{$brand->id}">
                {$brand->name|escape}
            </h6>
        {/if}
    {/if}
</section>

<section class="tc-cart p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row products">
        {if $products}
            {foreach $products as $product}
                <div class="col-lg-6">
                    <div class="product-card">
                        <div class="top-inf">
                            {if $product->discount}
                                <div class="dis-card">
                                    <small class="fsz-10 d-block text-uppercase"> скидка </small>
                                    <h6 class="fsz-14">{$product->price|escape}</h6>
                                </div>
                            {/if}
                            <a href="{$lang_link}wishlist/{$product->url}" class="fav-btn" title="В избранное">
                                <i class="las la-heart{if $wishlist_products && in_array($product->url, $wishlist_products)} color-red2{/if}"></i>
                            </a>
                            <a href="{$lang_link}wishlist/remove/{$product->url}" class="remove-btn" title="Удалить из избранного">
                                <i class="las la-trash"></i>
                            </a>
                        </div>
                        <a href="{$lang_link}products/{$product->url}" class="img">
                            <img src="{$product->image->filename|resize:700:700}" alt="{$product->name|escape}" class="img-contain main-image">
                        </a>
                        <div class="info">
                            {if $product->rating}
                                <div class="rating">
                                    <div class="stars">
                                        {section name=star loop=5}
                                            <i class="la la-star{if $smarty.section.star.index < $product->rating} color-yellow{/if}"></i>
                                        {/section}
                                    </div>
                                    <span class="num">({$product->comments_count})</span>
                                </div>
                            {/if}
                            <h6>
                                <a href="{$lang_link}products/{$product->url}" class="prod-title fsz-14 fw-bold mt-2 hover-green2">
                                    {$product->name|escape}
                                </a>
                            </h6>
                            <div class="price mt-15">
                                <h5 class="fsz-18 color-red1 fw-600">{$product->variant->price|escape} {$currency->sign|escape}</h5>
                                {if $product->variant->compare_price > 0}
                                    <span class="old-price color-999 text-decoration-line-through ms-2 fsz-12"> {$product->variant->compare_price|convert} {$currency->sign|escape}</span>
                                {/if}
                            </div>
                            <form class="variants" data-action="/ajax/cart.php" method="post">
                                {foreach $product->variants as $v}
                                    <input id="featured_{$v->id}" name="variant" value="{$v->id}" type="radio" {if $v@first}checked{/if} style="display:none;">
                                {/foreach}
                                <button type="submit" class="butn bg-red1 text-white radius-4 fw-500 fsz-12 text-uppercase text-center mt-10 w-100 py-3" value="{$lang->add_cart|escape}" title="{$lang->add_cart|escape}" {if !$product->variant->stock}disabled{/if}>
                                    <i class="la la-cart-plus me-1"></i> {$lang->add_cart|escape}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
        <div class="col-md-12">
            <div class="alert alert-info">
                {$lang->wishlist_no_products|escape}
            </div>
        </div>
        {/if}
    </div>
</section>
