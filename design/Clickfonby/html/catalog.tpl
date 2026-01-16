

<section class="tc-categories-style6 p-30 radius-4 bg-white mt-3 wow fadeInUp animated">
    <div class="content grid-list grid-list--items-4-1200 grid-list--items-3-992 grid-list--items-2-601">
        {if $categories}
            <div class="content grid-list grid-list--items-4-1200 grid-list--items-3-992 grid-list--items-2-601">
                {foreach $categories as $c}
                    {if $c->visible}
                        <a href="{$lang_link}catalog/{$c->url}" class="number-item grid-list__item">
                            <div class="inf">
                                <h6 class="fsz-14 fw-bold mb-0 sm-title">{$c->name|escape}</h6>
                                <small class="fsz-12 color-666">
                                    {if isset($c->products_count)}
                                        {$c->products_count} Товаров
                                    {/if}
                                </small>
                            </div>

                                {if $c->image}
                            <div class="img">
                                    {img url=$c->image|resize_catalog:120:120 alt=$c->name width=120 height=120 class="img-contain"}
                            </div>
                                {else}
                                    
                                {/if}

                        </a>
                    {/if}
                {/foreach}
            </div>
        {/if}

    
</section>