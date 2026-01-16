{* Product Page *}

{* Modals *}
{if isset($smarty.server.HTTP_X_REQUESTED_WITH) && $smarty.server.HTTP_X_REQUESTED_WITH == 'XMLHttpRequest'}
    {assign var="cleanTpl" value=$smarty.get.tpl|replace:"?":""}
    {if $cleanTpl == 'quickview'}
        {$wrapper = 'modals/quickview.tpl' scope=global}
    {elseif $cleanTpl == 'detail_clothes'}
        {$wrapper = 'modals/detail_clothes.tpl' scope=global}
    {elseif $cleanTpl == 'fast_order'}
        {$wrapper = 'modals/fast_order.tpl' scope=global}
    {elseif $cleanTpl == 'grid'}
        {$wrapper = 'loading/grid.tpl' scope=global}
    {elseif $cleanTpl == 'list'}
        {$wrapper = 'loading/list.tpl' scope=global}
    {elseif $cleanTpl == 'price'}
        {$wrapper = 'loading/price.tpl' scope=global}
    {/if}
{/if}

{* Canonical *}
{$canonical="/products/{$product->url}" scope=global}

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
            {* Страница товара (если есть) *}
            {if isset($product)}
                <li class="breadcrumb-item active color-000" aria-current="page">{$product->name|escape}</li>
            {/if}
        </ol>
    </nav>

</section>

<section class="product-main-details p-30 radius-4 bg-white mt-3 wow fadeInUp">
    <div class="row">
        <div class="col-lg-5">
            <div class="img-slider">
                <div class="top-title">
                    {if $product->is_new}
                        <small class="fsz-10 py-1 px-2 radius-2 bg-222 text-white text-uppercase">
                            {$lang->badge_new|escape}
                        </small>
                    {/if}
                </div>

                {* Основной слайдер изображений *}
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        {if $product->images}
                            {foreach $product->images as $image}
                                <div class="swiper-slide">
                                    <div class="img">
                                        {img url=$image->filename|resize:700:700 alt=$product->name width=700 height=700 lazy=$image@index!=0}
                                    </div>
                                </div>
                            {/foreach}
                        {else}
                            <div class="swiper-slide">
                                <div class="img">
                                    {img url="design/{$settings->theme|escape}/images/no-photo.svg" alt=$product->name width=700 height=700 lazy=false}
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>

                {* Thumbs-слайдер *}
                <div class="swiper-container gallery-thumbs py-3">
                    <div class="swiper-wrapper">
                        {if $product->images}
                            {foreach $product->images as $image}
                                <div class="swiper-slide">
                                    <div class="img">
                                        {img url=$image->filename|resize:88:88 alt=$product->name width=88 height=88}
                                    </div>
                                </div>
                            {/foreach}
                        {else}
                            <div class="swiper-slide">
                                <div class="img">
                                    {img url="design/{$settings->theme|escape}/images/no-photo.svg" alt=$product->name width=88 height=88}
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="info">
                <div class="rating" title="{if $product->ratings|string_format:'%.1f'|floatval > 0}{$lang->rating|escape} {$product->ratings|string_format:'%.1f'} {$lang->out_of|escape} 5{else}{$lang->no_ratings|escape}{/if}">

                    <div class="stars">
                        {assign var="rating" value=$product->ratings|string_format:'%.1f'}
                        {assign var="intRating" value=$rating|floor}
                        {assign var="i" value=1}
                        {section name=star loop=5}
                            <i class="la la-star{if $smarty.section.star.index+1 > $rating} color-999{/if}"></i>
                        {/section}
                    </div>
                    <span class="num">
                       ({if $rating > 0}{$rating}{else}0{/if})
                    </span>
                </div>

                <h4 class="product_title">
                    <span data-product="{$product->id}">{$product->name|escape}</span>
                </h4>

                {if $product->features}

                    <ul class="fsz-12 mt-15 lh-5">
                        {foreach $product->features|@array_slice:0:5 as $f}
                        {if !$f->is_color}
                            <li> <span class="icon-6 bg-666 rounded-circle me-2"></span> {$f->name}: {foreach $f->values as $v}
                                    {$v->value|escape}{if !$v@last},{/if}
                                {/foreach} </li>
                        {/if}
                        {/foreach}
                    </ul>
                {/if}

                {if $product->variant->color}
                    <div class="color-content">
                        <p class="color-666">
                            <strong class="color-000 text-uppercase me-1">{$lang->color|escape}:</strong>
                            <span>{$product->variant->color|escape}</span>
                        </p>
                        <div class="memory-choose mt-10">

                                {foreach $product->related_products as $related_product}
                                    <div class="form-check form-check-inline">
                                        <a class="form-check-label {if $related_product->id == $product->id} color-item-active{/if}" href="{$lang_link}products/{$related_product->url}">
                                            <div class="color-item pointer ">
                                                <div class="inf">
                                                    <p class="fsz-12">{$related_product->variant->color|escape}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                {/foreach}
                        </div>

                        {* Аналогичный выбор памяти, если такие варианты представлены как связанные товары/варианты *}
                        {if $product->features.memory}
                            <p class="color-666 mt-20">
                                <strong class="color-000 text-uppercase me-1">{$product->features.memory->name|escape}:</strong>
                                <span>{$product->variant->memory|escape}</span>
                            </p>
                            {foreach $product->related_products as $related_product}
                                {if $related_product->variant->memory}
                                    <a class="memory-link form-check-label d-inline-block me-2"
                                       href="{$lang_link}products/{$related_product->url}">
                                        <span>{$related_product->variant->memory|escape}</span>
                                    </a>
                                {/if}
                            {/foreach}
                        {/if}
                    </div>
                {/if}



                {if $product->annotation}
                    <p class="fsz-12 mt-15 lh-5">
                        {$product->annotation|strip_tags}
                    </p>
                {/if}



                {if $product->variant->sku}
                    <p class="color-666"> <strong class="color-000 text-uppercase me-1"> {$lang->sku|escape}: </strong> <span> {$product->variant->sku} </span> </p>
                {/if}
                {if $cat@last }
                    <p class="color-666"> <strong class="color-000 text-uppercase me-1"> Категория: </strong> <span> <a href="{$lang_link}catalog/{$cat->url}">{$cat->name|escape}</a> </span> </p>
                {/if}


                {if $brand}
                <p class="color-666"> <strong class="color-000 text-uppercase me-1"> Производитель: </strong> <span class="color-green2"> {$brand->name|escape} </span> </p>
                {/if}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="payment-side">
                <div class="payment-card">
                    <small class="fsz-12 color-666 text-uppercase mb-2"> Стоимость: </small>
                    <h5 class="fsz-30 fw-bold"> {$product->variant->price|convert} {$currency->sign|escape}</h5>
                    {if $product->variant->stock}
                    <p class="fsz-12 mt-3"> <i class="fas fa-check-circle color-green2 me-1"></i> В наличии </p>
                    {/if}
                    <form class="variants" data-action="/ajax/cart.php">
                        {foreach $product->variants as $v}
                            <input name="variant" value="{$v->id}" type="radio" {if $v@first}checked{/if} style="display:none;">
                        {/foreach}
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

                        {if $wishlist || ($wishlist_products && in_array($product->url, $wishlist_products))}
                            <a href="{$lang_link}wishlist/remove/{$product->url}" class="wishlist-btn me-2 pe-2 border-end" title="{$lang->delete|escape}">
                                <i class="fas fa-heart color-red2 me-1"></i> В избранном
                            </a>
                        {else}
                            <a href="{$lang_link}wishlist/{$product->url}" class="wishlist-btn me-2 pe-2 border-end" title="{$lang->add_to_wishlist|escape}">
                                <i class="fas fa-heart me-1"></i> В избранное
                            </a>
                        {/if}

                        {if isset($smarty.session.compared_products) && in_array($product->url, $smarty.session.compared_products)}

                            <a href="{$lang_link}compare/remove/{$product->url}" class="compare-btn ms-2 ps-2 active" title="{$lang->added_to_compare|escape}">
                                <i class="fas fa-redo color-red2 me-1"></i> В сравнении
                            </a>

                        {else}

                            <a href="{$lang_link}compare/{$product->url}" class="compare-btn ms-2 ps-2" title="{$lang->add_to_compare|escape}" data-title_added="{$lang->added_to_compare|escape}">
                                <i class="fas fa-redo me-1"></i> Сравнить
                            </a>
                        {/if}

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="product-text-details  radius-4 bg-white mt-3 wow fadeInUp mb-3">

    <h6 class="fsz-18 fw-bold text-uppercase p-30"> Характеристики </h6>


                {* Поделить характеристики на две части *}
                {assign var="feature_count" value=$product->features|count}
                {assign var="column1" value=[]}
                {assign var="column2" value=[]}
                {foreach $product->features as $f}
                    {if $f@index % 2 == 0}
                        {append var="column1" value=$f}
                    {else}
                        {append var="column2" value=$f}
                    {/if}
                {/foreach}

                <div class="item-specs__unit__body">
                    <div class="item-specs__unit__body__inner">
                        <div class="item-specs__table more-text">
                            <table class="item-specs__table__column">
                                <tbody>
                                {foreach $column1 as $f}
                                    {if !$f->is_color}
                                        <tr class="item-specs__table__unit">
                                            <td>
                                                <span class="item-specs__table__unit__title">{$f->name}:</span>
                                            </td>
                                            <td>
                                <span class="item-specs__table__unit__content">
                                    {foreach $f->values as $v}
                                        {$v->value|escape}{if !$v@last},{/if}
                                    {/foreach}
                                </span>
                                            </td>
                                        </tr>
                                    {/if}
                                {/foreach}
                                </tbody>
                            </table>
                            <table class="item-specs__table__column">
                                <tbody>
                                {foreach $column2 as $f}
                                    {if !$f->is_color}
                                        <tr class="item-specs__table__unit">
                                            <td>
                                                <span class="item-specs__table__unit__title">{$f->name}:</span>
                                            </td>
                                            <td>
                                <span class="item-specs__table__unit__content">
                                    {foreach $f->values as $v}
                                        {$v->value|escape}{if !$v@last},{/if}
                                    {/foreach}
                                </span>
                                            </td>
                                        </tr>
                                    {/if}
                                {/foreach}
                                </tbody>
                            </table>
                            <div class="overlay"></div>
                            <a href="javascript:void(0);" class="more-btn color-red1 text-uppercase fsz-13 pt-5"> Все характеристики <i class="la la-angle-down ms-1"></i> </a>
                        </div>
                    </div>
                </div>
</section>
