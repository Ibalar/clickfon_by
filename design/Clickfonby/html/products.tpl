{* List Products *}

{* Canonical *}
{if $page}
    {$canonical="/{$page->url}" scope=global}
{elseif $category && $brand}
    {$canonical="/catalog/{$category->url}/{$brand->url}" scope=global}
{elseif $category}
    {$canonical="/catalog/{$category->url}" scope=global}
{elseif $brand}
    {$canonical="/brands/{$brand->url}" scope=global}
{elseif $keyword}
    {$canonical="/all-products?keyword={$keyword|escape}" scope=global}
{else}
    {$canonical="/all-products" scope=global}
{/if}

{* Load *}
{if isset($smarty.get.tpl) && $smarty.get.tpl == 'new'}
    {$wrapper='loading/new.tpl' scope=global}
{/if}

{if isset($smarty.get.tpl) && $smarty.get.tpl == 'recommend'}
    {$wrapper='loading/recommend.tpl' scope=global}
{/if}

{if isset($smarty.get.tpl) && $smarty.get.tpl == 'stock'}
    {$wrapper='loading/stock.tpl' scope=global}
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





{* Catalog *}
{if $page && $page->url=='catalog'}
    {include file='catalog.tpl'}
{else}

    {* Subcategories *}
    {if $category && $category->subcategories}
        {include file='products/catalog_category.tpl'}
    {/if}


    <section class="tc-products-style6 radius-4 bg-white mt-3 wow fadeInUp animated">
        <div class="row">
            {if $products}
                <div class="col-lg-3">
                    <div class="filters">

                        <div class="filter-box mt-10">
                            <div class="title mb-20">
                                <h6 class="fsz-18 fw-bold text-uppercase"> {$category->name|escape} </h6>
                                <a href="{$lang_link}catalog/{$category->url}" class="rest-btn hover-green2">
                                    <i class="la la-sync me-1"></i> {$lang->reset|escape}
                                </a>
                            </div>

                            {* Выбранные фильтры (пример) *}
                            <div class="selected-filters">

                                {* Выбранные бренды *}
                                {if isset($smarty.get.b) && $smarty.get.b}
                                    {foreach $category->brands as $b}
                                        {if $b->id|in_array:$smarty.get.b}
                                            <span class="selected-item">
                                                {$b->name|escape}
                                                <a href="{furl params=[brand=>$b->url, page=>null]}" class="ms-1">
                                                    <i class="la la-times ms-1"></i>
                                                </a>
                                            </span>
                                        {/if}
                                    {/foreach}
                                {/if}

                                {* Выбранные характеристики/features *}
                                {if $features}
                                    {foreach $features as $key=>$f}
                                        {if isset($smarty.get.{$f@key}) && $smarty.get.{$f@key}}
                                            {foreach $f->options as $k=>$o}
                                                {if in_array($o->translit,$smarty.get.{$f@key},true)}
                                                    <span class="selected-item">
                                                        {if $f->is_color}
                                                            <span style="display:inline-block;width:16px;height:16px;border-radius:50%;margin-right:7px;background:{$o->value|escape}"></span>
                                                        {else}
                                                            {if $f->name}{$f->name|escape}: {/if}{$o->value|escape}
                                                        {/if}
                                                        <a href="{furl params=[$f->url=>$o->translit, page=>null]}" class="ms-1">
                                                            <i class="la la-times ms-1"></i>
                                                        </a>
                                                    </span>
                                                {/if}
                                            {/foreach}
                                        {/if}
                                    {/foreach}
                                {/if}

                                {* Фильтр по цене *}
                                {if $current_minprice != $minprice || $current_maxprice != $maxprice}
                                    <span class="selected-item">
                                        {$lang->general_price|escape}: {$current_minprice|convert|regex_replace:'/[^0-9\.]/':''|floor}
                                            -
                                        {$current_maxprice|convert|regex_replace:'/[^0-9\.]/':''|ceil}
                                        {$currency->sign|escape}
                                        <a href="{furl}" class="ms-1">
                                            <i class="la la-times ms-1"></i>
                                        </a>
                                    </span>
                                {/if}
                            </div>


                            <div class="filter-groups">
                                {* Фильтр брендов *}
                                {if $category->brands}
                                    <div class="filter-group">
                                        <div class="group-title">
                                            <strong class="fsz-14"> {$lang->global_brands|escape} </strong>
                                            <span class="arrow"><i class="la la-angle-up"></i></span>
                                        </div>
                                        <div class="group-body">
                                            <div class="scroll-cont">
                                                <div class="check-group check-brands">
                                                    {foreach $category->brands as $b}
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="brand{$b->id}" onclick="location.href='{furl params=[brand=>$b->url, page=>null]}'" {if isset($brand->id) == $b->id || (isset($smarty.get.b) && in_array($b->id, $smarty.get.b))}checked{/if}>
                                                            <label class="form-check-label" for="brand{$b->id}">
                                                                <span class="color-888 ms-2"> {$b->name|escape} </span>
                                                            </label>
                                                        </div>
                                                    {/foreach}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/if}

                                {if ($minprice != 0 && $maxprice != 0) && ($minprice != $maxprice)}
                                    <div class="filter-group">
                                        <div class="group-title">
                                            <strong class="fsz-14"> {$lang->general_price|escape} </strong>
                                            <span class="arrow"><i class="la la-angle-up"></i></span>
                                        </div>
                                        <div class="group-body">
                                            <div class="price-card">
                                                <form method="post">
                                                    <div class="row mt-20 align-items-center gx-0">
                                                        <div class="col-9">
                                                            <div class="price-input">
                                                                <div class="field">
                                                                    <span class="sympol">{$currency->sign|escape}</span>
                                                                    <input type="number"
                                                                           class="input-min"
                                                                           name="min_price"
                                                                           value="{$current_minprice|regex_replace:'/[^0-9\.]/':''|floor}"
                                                                           min="{$minprice|regex_replace:'/[^0-9\.]/':''|floor}"
                                                                           max="{$maxprice|regex_replace:'/[^0-9\.]/':''|ceil}">
                                                                </div>
                                                                <div class="separator"></div>
                                                                <div class="field">
                                                                    <span class="sympol">{$currency->sign|escape}</span>
                                                                    <input type="number"
                                                                           class="input-max"
                                                                           name="max_price"
                                                                           value="{$current_maxprice|regex_replace:'/[^0-9\.]/':''|ceil}"
                                                                           min="{$minprice|regex_replace:'/[^0-9\.]/':''|floor}"
                                                                           max="{$maxprice|regex_replace:'/[^0-9\.]/':''|ceil}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 text-end">
                                                            <button class="bttn"> ОК </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                {/if}


                                {* Фильтр по характеристикам-через features *}
                                {if $features}
                                    {foreach $features as $f}
                                        <div class="filter-group">
                                            <div class="group-title">
                                                <strong class="fsz-14"> {$f->name|escape} </strong>
                                                <span class="arrow"><i class="la la-angle-up"></i></span>
                                            </div>
                                            <div class="group-body">
                                                <div class="check-boxes">
                                                    {foreach $f->options as $o}
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="feat_{$o->id}" onclick="location.href='{furl params=[$f->url=>$o->translit, page=>null]}'" {if isset($smarty.get.{$f@key}) && in_array($o->translit, $smarty.get.{$f@key})}checked{/if}>
                                                            <label class="form-check-label" for="feat_{$o->id}">
                                                                {if $f->is_color}
                                                                    <span class="color-box" style="background:{$o->value|escape}"><i class="la la-check"></i></span>
                                                                {else}
                                                                    <span>{$o->value|escape}</span>
                                                                {/if}
                                                            </label>
                                                        </div>
                                                    {/foreach}
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}
                                {/if}


                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="products-content">

                        <div class="prod-filter color-666">
                            <div class="row">


                                <div class="col-lg-6 mt-3 mt-lg-0 align-items-start">
                                    <div class="sort-item">
                                        <span class="s-title">Сортировать</span>
                                        <select name="sort" id="sort" class="form-control form-select" onchange="location.href=this.value;">
                                            <option value="{furl sort=position page=null}"{if $sort=='position'} selected{/if}>{$lang->default|escape}</option>
                                            <option value="{furl sort=name page=null}"{if $sort=='name'} selected{/if}>{$lang->name_a_z|escape}</option>
                                            <option value="{furl sort=name_desc page=null}"{if $sort=='name_desc'} selected{/if}>{$lang->name_z_a|escape}</option>
                                            <option value="{furl sort=price page=null}"{if $sort=='price'} selected{/if}>{$lang->cheap_expensive|escape}</option>
                                            <option value="{furl sort=price_desc page=null}"{if $sort=='price_desc'} selected{/if}>{$lang->expensive_cheap|escape}</option>
                                            <option value="{furl sort=rate page=null}"{if $sort=='rate'} selected{/if}>{$lang->by_rating|escape}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                                    <div class="view-item">
                                        <span class="s-title"> Отображение </span>
                                        <span class="v-item grid-btn active"> <i class="la la-th-large" title="Плиточный вид"></i> </span>
                                        <span class="v-item list-btn"> <i class="la la-list-ul" title="Строчный вид"></i> </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="products tc-best-seller-style1" style="padding: 20px 0;">
                            <div class="row">
                                {foreach $products as $product}
                                    <div class="col-lg-3 my-1">
                                        <div class="product-card">
                                            <div class="top">
                                                {if $product->is_hit}
                                                    <small class="fsz-11 py-1 px-3 rounded-pill color-red1 border-red1 border"> {$lang->badge_hit|escape} </small>
                                                {/if}
                                                <div class="icons">

                                                    {if $wishlist || ($wishlist_products && in_array($product->url, $wishlist_products))}
                                                        <a href="{$lang_link}wishlist/remove/{$product->url}" class="icon fav wishlist active" title="{$lang->delete|escape}">
                                                            <i class="fal fa-heart"></i>
                                                        </a>
                                                    {else}
                                                        <a href="{$lang_link}wishlist/{$product->url}" class="icon wishlist fav" title="{$lang->add_to_wishlist|escape}">
                                                            <i class="fal fa-heart"></i>
                                                        </a>
                                                    {/if}


                                                    {if isset($smarty.session.compared_products) && in_array($product->url, $smarty.session.compared_products)}

                                                            <a href="{$lang_link}compare" class="icon compare active" title="{$lang->added_to_compare|escape}">
                                                                <i class="fal fa-sync"></i>
                                                            </a>

                                                    {else}

                                                            <a href="{$lang_link}compare/{$product->url}" class="icon compare" title="{$lang->add_to_compare|escape}" data-title_added="{$lang->added_to_compare|escape}">
                                                                <i class="fal fa-sync"></i>
                                                            </a>
                                                    {/if}


                                                </div>
                                            </div>

                                            <a href="{$lang_link}products/{$product->url}" class="img mb-20 d-block">
                                                {if $product->image}
                                                    {img url=$product->image->filename|resize:700:700 alt=$product->name width=700 height=700 class="img-contain"}
                                                {else}
                                                    {img url="design/{$settings->theme|escape}/images/no-photo.svg" alt=$product->name width=170 height=170 class="img-contain"}
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
                                {/foreach}

                            </div>
                        </div>

                        {if $total_pages_num > 1}
                            {assign var="show_ellipsis" value=($total_pages_num > 7)}
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {* "Назад" *}
                                    {if $current_page_num > 1}
                                        <li class="page-item">
                                            <a class="page-link" href="{furl page=$current_page_num-1}">
                                                <i class="la la-angle-left me-1"></i> {$lang->previous|escape}
                                            </a>
                                        </li>
                                    {/if}

                                    {* Первая страница *}
                                    {if $current_page_num == 1}
                                        <li class="page-item"><a class="page-link active" href="{furl page=null}">1</a></li>
                                    {else}
                                        <li class="page-item"><a class="page-link" href="{furl page=null}">1</a></li>
                                    {/if}

                                    {* Пропуск (начало) если страниц много и текущий > 4 *}
                                    {if $show_ellipsis && $current_page_num > 4}
                                        <li class="page-item"><span class="page-link">...</span></li>
                                    {/if}

                                    {* Диапазон страниц *}
                                    {assign var="start" value=2}
                                    {assign var="end" value=$total_pages_num-1}
                                    {if $show_ellipsis}
                                        {assign var="start" value=max(2, $current_page_num-2)}
                                        {assign var="end" value=min($total_pages_num-1, $current_page_num+2)}
                                    {/if}

                                    {section name=pages loop=$end+1 start=$start}
                                        {$p = $smarty.section.pages.index}
                                        {if $p == $current_page_num}
                                            <li class="page-item"><a class="page-link active" href="{furl page=$p}">{$p}</a></li>
                                        {else}
                                            <li class="page-item"><a class="page-link" href="{furl page=$p}">{$p}</a></li>
                                        {/if}
                                    {/section}

                                    {* Пропуск (конец) если страниц много и текущий < последней - 3 *}
                                    {if $show_ellipsis && $current_page_num < $total_pages_num-3}
                                        <li class="page-item"><span class="page-link">...</span></li>
                                    {/if}

                                    {* Последняя страница *}
                                    {if $total_pages_num > 1}
                                        {if $current_page_num == $total_pages_num}
                                            <li class="page-item"><a class="page-link active" href="{furl page=$total_pages_num}">{$total_pages_num}</a></li>
                                        {else}
                                            <li class="page-item"><a class="page-link" href="{furl page=$total_pages_num}">{$total_pages_num}</a></li>
                                        {/if}
                                    {/if}

                                    {* "Next" *}
                                    {if $current_page_num < $total_pages_num}
                                        <li class="page-item">
                                            <a class="page-link" href="{furl page=$current_page_num+1}">
                                                {$lang->next|escape} <i class="la la-angle-right ms-1"></i>
                                            </a>
                                        </li>
                                    {/if}
                                </ul>
                            </nav>
                        {/if}
                    </div>
                </div>
            {/if}
        </div>
    </section>
{/if}

