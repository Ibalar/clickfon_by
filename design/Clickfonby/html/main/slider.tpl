{get_banner var=big_banners group=$theme_settings->big_banners_id}
{if $big_banners && $big_banners->items}
        <div class="main-slider">
            <div class="swiper-wrapper">
                {foreach $big_banners->items as $s}
                    <div class="swiper-slide text-center">
                        <a href="{$lang_link}{$s->url|escape}">
                        <div class="slide-card">
                            <div class="img ">
                                <img src="{if $s->image}{$s->image|resize_banners:1080:1080}{else}design/{$settings->theme|escape}/images/no-photo.svg{/if}" 
                                     alt="{$s->alt|escape|default:'Слайдер'}" 
                                     class="img-cover" 
                                     width="1080" 
                                     height="1080" 
                                     loading="{if $s@index == 0}eager{else}lazy{/if}">
                                </div>

                        </div>
                        </a>
                    </div>
                {/foreach}
            </div>
            <div class="slider-controls">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
{/if}
