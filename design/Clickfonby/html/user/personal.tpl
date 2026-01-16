{get_banner var=personal_banners group=$theme_settings->id_banner_account}

<section class="tc-about-cards">
    <div class="row gx-2">
        <div class="col-lg-4 mt-3">
            <div class="about-card wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="title">
                    <h6 class="fsz-18 fw-bold text-uppercase"> {$lang->personal_data|escape} </h6>
                    <span class="icon"> <i class="la la-check-circle"></i> </span>
                </div>
                <div class="text fsz-14 color-666">
                    {$email|escape}<br>
                    {if $phone|escape}
                            {$phone|escape}<br>
                    {/if}
                    <a class="color-red1" href="javascript:void(0)" onclick="document.cookie='user=private;path=/';document.location.reload();">{$lang->change_password|escape}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="about-card wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="title">
                    <h6 class="fsz-18 fw-bold text-uppercase"> {$lang->wishlist|escape} </h6>
                    <span class="icon"> <i class="la la-heart"></i> </span>
                </div>
                <div class="text fsz-14 color-666">
                    {if $wishlist_products > 0}{$wishlist_products|count} {$wishlist_products|count|plural:$lang->products_1:$lang->products_2:$lang->products_3}{else}{$lang->no_products|escape}{/if}
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="about-card wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="title">
                    <h6 class="fsz-18 fw-bold text-uppercase"> {$lang->orders_global|escape} </h6>
                    <span class="icon"> <i class="la la-hand-holding-usd"></i> </span>
                </div>
                <div class="text fsz-14 color-666">
                    {$orders|count} {$orders|count|plural:$lang->orders_1:$lang->orders_2:$lang->orders_3}
                </div>
            </div>
        </div>
    </div>
</section>


