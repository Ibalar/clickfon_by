{get_banner var=bottom_banners group=$theme_settings->bottom_banners_id}
{if $bottom_banners && $bottom_banners->items}
    {foreach $bottom_banners->items as $b}
        <div class="col-lg-4 d-none d-lg-block">
            <div class="card-overlay card-center">
                <div class="img th-380">
                    {img url=$b->image|resize_banners:1919:180 alt=$b->title width=1919 height=180 class="img-cover"}
                </div>
                <div class="info p-50">
                    <div class="cont">
                        <h3 class="fsz-30"> {if $b->title}<br>{$b->title|escape}{/if} </h3>
                        {if $b->description}
                            <p class="fsz-13 mt-1">{$b->description|escape}</p>
                        {/if}
                    </div>
                    <a href="{$lang_link}{$b->url|escape}" class="butn px-5 py-3 bg-white color-000 rounded-pill fw-600"> <span> {$lang->shop_now|default:"Подробнее"} </span> </a>
                </div>
            </div>
        </div>
    {/foreach}
{/if}

