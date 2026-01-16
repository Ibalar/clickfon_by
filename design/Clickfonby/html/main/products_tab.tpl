{get_products is_hit=1 var=hit_products limit=$theme_settings->products_tab_products_limit}
{get_products is_new=1 var=new_products limit=$theme_settings->products_tab_products_limit}
{get_products featured=1 var=featured_products limit=$theme_settings->products_tab_products_limit}
{get_products discounted=1 var=discounted_products limit=$theme_settings->products_tab_products_limit}
{if $featured_products || $discounted_products || $hit_products || $new_products}

    <section class="tc-suggest-today-style1">
        <div class="container">
            <div class="title mb-40 wow fadeInUp slow" data-wow-delay="0.2s">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="fsz-30"> {$lang->best_actions|escape} </h3>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{$lang_link}catalog" class="more-btn fsz-14 text-uppercase fw-500"> Смотреть все <i class="fal fa-angle-right ms-1"></i> </a>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills mb-40" id="pills-tabs1" role="tablist">
                {if $hit_products}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-tab10-tab" data-bs-toggle="pill" data-bs-target="#pills-tab3" type="button" role="tab" aria-selected="true"> <i class="fal fa-fire me-2"></i> {$lang->badge_hit|escape}</button>
                    </li>
                {/if}
                {if $featured_products}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tab11-tab" data-bs-toggle="pill" data-bs-target="#pills-tab4" type="button" role="tab" aria-selected="false"> <i class="fal fa-bolt me-2"></i> {$lang->badge_featured|escape}</button>
                    </li>
                {/if}
                {if $new_products}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tab12-tab" data-bs-toggle="pill" data-bs-target="#pills-tab5" type="button" role="tab" aria-selected="false"> <i class="fal fa-star me-2"></i> {$lang->badge_new|escape}</button>
                    </li>
                {/if}
                {if $discounted_products}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tab13-tab" data-bs-toggle="pill" data-bs-target="#pills-tab6" type="button" role="tab" aria-selected="false">{$lang->badge_sale|escape}</button>
                    </li>
                {/if}
            </ul>
            <div class="tab-content wow fadeInUp slow" data-wow-delay="0.2s " id="pills-tabContent2">
                {if $hit_products}
                    <div class="tab-pane fade show active" id="pills-tab3" role="tabpanel" aria-labelledby="pills-tab3-tab">
                        {include file='loading/hit.tpl'}
                    </div>
                {/if}

                {if $featured_products}
                    <div class="tab-pane fade" id="pills-tab4" role="tabpanel" aria-labelledby="pills-tab3-tab">
                    {include file='loading/recommend.tpl'}
                    </div>
                {/if}

                {if $new_products}
                    <div class="tab-pane fade" id="pills-tab5" role="tabpanel" aria-labelledby="pills-tab3-tab">
                        {include file='loading/new.tpl'}
                    </div>
                {/if}

                {if $discounted_products}
                        <div class="tab-pane fade" id="pills-tab6" role="tabpanel" aria-labelledby="pills-tab3-tab">
                    {include file='loading/sale.tpl'}
                        </div>
                {/if}



            </div>
        </div>
    </section>
{/if}