{* Compare *}

{if $page}
    {* Canonical *}
    {$canonical="/{$page->url}" scope=global}
{else}
    {* Meta Title *}
    {$meta_title = $lang->compare scope=global}

    {* Canonical *}
    {$canonical="/compare" scope=global}
{/if}

<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated container container-llgg"  style="visibility: visible; animation-name: fadeInUp; background-color: #eeeff6;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fw-bold mb-0">
                {$level = 1}
                    <li class="breadcrumb-item color-999"><a href="{if $lang_link}{$lang_link}{else}/{/if}" title="{$lang->home|escape}">{$lang->home|escape}</a></li>
                    <li class="breadcrumb-item active color-000" aria-current="page"><link href="{$lang_link}compare">{$lang->compare|escape}</li>
            </ol>
        </nav>
    </div>
</section>

<section class="tc-suggest-today-style1">
    <div class="container">
        <div class="tab-content wow fadeInUp slow" data-wow-delay="0.2s " id="pills-tabContent2">
            <div class="tab-pane fade show active" id="pills-tab3" role="tabpanel" aria-labelledby="pills-tab3-tab">
                <div class="product-row sin-prod-pg-1">
                    {if $products}
                        {foreach $products as $product}
                            <div class="col-md-6 col-lg-4">
                                <div class="product-card product-card-compare">
                                    <div class="top">
                                        <div class="icons">
                                            <a href="{$lang_link}compare/remove/{$product->url}" class="icon fav"> <i class="fal fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <a href="{$lang_link}products/{$product->url}" class="img th-160 mb-20 d-block">
                                        {if $product->image}
                                            <img src="{$product->image->filename|resize:700:700}" alt="" class="img-contain">
                                        {else}
                                            <img src="{$product->image->filename|resize:700:700}" alt="" class="img-contain">
                                        {/if}
                                    </a>
                                    <div class="info">
                                        <a href="{$lang_link}products/{$product->url}" class="title fsz-14 mt-15 fw-600 hover-blue1"> {$product->name|escape} </a>

                                        <p class="price mt-2 fsz-20"> {$product->variant->price|convert} {$currency->sign|escape} </p>
                                    </div>
                                </div>
                                <div class="additional-info additional-info-compare">
                                    <ul>
                                    {foreach $compare_features as $feature}
                                        {if !$feature->is_color}
                                            <li>
                                                <strong>{$feature->name}</strong>
                                                <span>{foreach $product->features as $f}
                                                    {if $f->name == $feature->name}
                                                        {foreach $f->values as $v}
                                                            {$v->value}{if !$v@last},{/if}
                                                        {/foreach}
                                                    {/if}
                                                {/foreach}</span>
                                            </li>
                                        {/if}
                                    {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/foreach}
                    {else}
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                {$lang->compare_no_products|escape}
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</section>
