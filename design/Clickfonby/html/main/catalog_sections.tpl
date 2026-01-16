<section class="tc-popular-cat-style1 pt-30 pb-50">
    <div class="container">
        <div class="sec-title">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="fsz-24 text-capitalize">Популярные разделы</h3>
                </div>
                <div class="col-lg-6 text-lg-end mt-4 mt-lg-0">
                    <a href="{$lang_link}catalog" class="more-link text-capitalize">
                        Смотреть все <i class="la la-angle-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="cat-content">
            {foreach $categories as $c}
                {if $c->featured && $c->visible}
                    <a href="{$lang_link}catalog/{$c->url}" class="cat-card">
                        <div class="img">
                            {if $c->image}
                                <img src="{$c->image|resize_catalog:120:120}" alt="{$c->name|escape}">
                            {else}
                                <img src="design/{$settings->theme|escape}/images/no-photo.svg" alt="{$c->name|escape}">
                            {/if}
                        </div>
                        <p class="fsz-13 fw-bold mt-15">{$c->name|escape}</p>
                    </a>
                {/if}
            {/foreach}
        </div>
    </div>
</section>
