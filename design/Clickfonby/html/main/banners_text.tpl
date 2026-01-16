{get_banner var=banners_text group=$theme_settings->banners_text_id} 
{if $banners_text && $banners_text->items}
    {if $banners_text->items}
        
            {foreach $banners_text->items as $b}
                <div class="col-lg-6 col-xl-4 col-md-6 text-center">
                    <a href="{$lang_link}{$b->url|escape}">
                    <div class="card-overlay wow fadeInUp slow" data-wow-delay="0.2s">
                        <div class="img">
                            <img src="{$b->image|resize_banners:694:463}" alt="{$b->name|escape}" class="img-cover">
                        </div>
                    </div>
                    </a>
                </div>
            {/foreach}

    {/if}

{/if}