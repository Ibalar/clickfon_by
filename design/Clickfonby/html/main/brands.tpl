{get_brands var=all_brands}
{if $all_brands}

    <section class="tc-features-style3">
        <div class="row gx-3">
            <div class="col-lg-12">
                <div class="features-brands p-30 radius-4 bg-white mt-3 wow fadeInUp slow animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="title">
                        <div class="row">
                            <div class="col-lg-8">
                                <h6 class="fsz-18 fw-bold text-uppercase"> Популярные Бренды </h6>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <a href="{$lang_link}brands" class="more color-666 fsz-13"> Смотреть все <i class="la la-angle-right ms-1"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="logos">
                        {foreach $all_brands|@array_slice:0:$theme_settings->brands_main_limit as $b}
                        <a href="{$lang_link}brands/{$b->url}" class="logo">
                            {if $b->image}
                                {img url=$b->image|resize_brands:150:50 alt=$b->name width=150 height=50}
                            {else}
                                {img url="design/{$settings->theme|escape}/images/no-photo.svg" alt=$b->name width=100 height=100}
                            {/if}
                        </a>
                        {/foreach}

                    </div>
                </div>
            </div>

        </div>
    </section>



{/if}