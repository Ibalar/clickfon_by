{if $orders}
    <div class="orders-tab">
        <h4 class="fw-bold text-capitalize mb-30">{$lang->orders_history|default:"История заказов"}</h4>
        <div class="orders">
            {foreach $orders as $order}
                {if $order->status != 3}
                    <div class="order-card mb-4">
                        <div class="order-head">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <p class="my-2">
                                        <span>Номер:</span> <strong> #{$order->id} </strong>
                                    </p>
                                    <p class="my-2">
                                        <span>{$lang->date_order|default:'Дата'}:</span>
                                        <span>{$order->date|date_format:"%d.%m.%Y"}</span>
                                    </p>
                                </div>
                                <div class="col-lg-6 text-lg-end mt-4 mt-lg-0">
                                    <span class="alert
                                        {if $order->status == 2}alert-success{elseif $order->status == 1}alert-warning{elseif $order->status == 0}alert-info{else}alert-danger{/if}
                                        mb-0 py-2" role="alert">
                                        {if $order->status == 2}
                                            {$lang->delivered|default:"Доставлен"}
                                        {elseif $order->status == 1}
                                            {$lang->in_processing|default:"В процессе"}
                                        {elseif $order->status == 0}
                                            {$lang->accepted_name|default:"Новый"}
                                        {else}
                                            {$lang->rejected|default:"Отклонен"}
                                        {/if}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="products">
                            <div class="row gx-3">
                                {foreach $order->purchases as $purchase}
                                    <div class="col-lg-6">
                                        <div class="product-card mb-3">
                                            <div class="top-inf">
                                                {if $purchase->variant->compare_price > 0}
                                                    <div class="dis-card">
                                                        <small class="fsz-10 d-block text-uppercase">
                                                            {$lang->badge_sale|escape}
                                                        </small>
                                                        <h6 class="fsz-14">
                                                            {$purchase->variant->compare_price|convert}{$currency->sign}
                                                        </h6>
                                                    </div>
                                                {else}
                                                    <small class="fsz-10 py-1 px-2 radius-2 bg-222 text-white text-uppercase">
                                                        {if $purchase->is_new}{$lang->badge_new|escape}{else}новинка{/if}
                                                    </small>
                                                {/if}
                                            </div>
                                            <a href="{$lang_link}products/{$purchase->product->url}" class="img">
                                                {if $purchase->product->images}
                                                    {$image = $purchase->product->images|first}
                                                    <img src="{$image->filename|resize:160:160}" alt="{$purchase->product->name|escape}" class="img-contain main-image">
                                                {else}
                                                    <img src="design/{$settings->theme|escape}/images/no-photo.svg" class="img-contain main-image" alt="{$purchase->product->name|escape}">
                                                {/if}
                                            </a>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                        <div class="price mt-15">
                            <h5 class="fsz-18 fw-600">
                                Сумма заказа: {$order->total_price|convert} {$currency->sign}
                            </h5>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>

{else}
    <div class="alert alert-info">
        {$lang->no_orders|escape}
    </div>
{/if}