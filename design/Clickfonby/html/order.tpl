{* Order Page *}

{* Meta Title *}
{$meta_title = "`$lang->email_order_title` `$order->id`" scope=global}

<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>
            <li class="breadcrumb-item active color-000" aria-current="page">
                {$lang->order_page|escape}
            </li>
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading flexbox--wrap-nowrap">
                <h1 id="pagetitle" class="switcher-title">
                    {$lang->email_order_title|escape}{$order->id}
                    {if $order->status == 0}
                        {$lang->accepted|escape}
                    {/if}
                    {if $order->status == 1}
                        {$lang->in_processing|escape}
                    {elseif $order->status == 2}
                        {$lang->completed|escape}
                    {/if}
                    {if $order->paid == 1}
                        (<span class="text-success">{$lang->paid|escape}</span>)
                    {/if}
                </h1>
            </div>
        </div>
    </div>
</section>


<section class="shopping-cart p-30 radius-4 bg-white mt-3 wow fadeInUp mb-3 animated">

    <div class="shopping-table table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Стоимость</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Итого</th>
                </tr>
            </thead>
            <tbody>
            {foreach $purchases as $purchase}
                <tr>
                    <td>
                        {if $purchase->product->images}
                            {$image = $purchase->product->images|first}
                            <div class="prod_img">
                                {img url=$image->filename|resize:70:70 alt=$purchase->product->name width=70 height=70}
                            </div>
                        {else}
                            <div class="prod_img">
                                {img url="design/{$settings->theme|escape}/images/no-photo.svg" alt=$purchase->product->name width=70 height=70}
                            </div>
                        {/if}
                    </td>
                    <td> {$purchase->product->name|escape} </td>
                    <td>{($purchase->variant->price * $purchase->amount)|convert}
                        {if $currency->sign}{$currency->sign}{/if}</td>
                    <td>
                        &times; {$purchase->amount}&nbsp;{$settings->units}
                    </td>
                    <td>
                        {if $purchase->variant->compare_price > $purchase->variant->price && $purchase->variant->price > 0}
                            <div class="stickers-basket sticker sticker--upper sticker--static flexbox--justify-end">
                                <div>
                                    <div class="stickers-basket--item sticker__item sticker__item--sale font_12">
                                        {round((($purchase->variant->price-$purchase->variant->compare_price)/$purchase->variant->compare_price)*100, 0)}%
                                    </div>
                                </div>
                            </div>
                        {/if}
                        <div class="basket-item-price-current">
                            <div class="basket-item-price-current-value">
                                {($purchase->variant->price*$purchase->amount)|convert}&nbsp;{$currency->sign}
                            </div>
                        </div>
                        {if $purchase->variant->compare_price > 0}
                            <div class="basket-item-price-old">
                                <span class="basket-item-price-old-text">
                                    {($purchase->variant->compare_price*$purchase->amount)|convert}&nbsp;{$currency->sign}
                                </span>
                            </div>
                        {/if}
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>


</section>

<div class="container">
    <div class="row">
        <div class="maxwidth-theme">
            <div class="col-md-12 col-sm-12 col-xs-12 content-md">
                <div class="right_block narrow_N">
                    <div class="form cart">
                        <div id="basket-root" class="tb-basket tb-blue tb-step-opacity" style="opacity: 1;">
                            <div class="flexbox flexbox--row basket-items-list">
                                <div class="basket-items-list-outer">
                                    <div class="row basket-items-list-wrapper">
                                        <div class="col-md-12">
                                            {* Order Details *}
                                            <h2>{$lang->order_details|escape}</h2>
                                            <div class="bordered outer-rounded-x">
                                                <table class="table table-details">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">
                                                                {$lang->order_date|escape}
                                                            </td>
                                                            <td>
                                                                {$order->date|date} {$lang->at|escape}
                                                                {$order->date|time}
                                                            </td>
                                                        </tr>
                                                        {if $order->name}
                                                            <tr>
                                                                <td scope="row">
                                                                    {$lang->name|escape}
                                                                </td>
                                                                <td>
                                                                    {$order->name|escape}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                        {if $order->email}
                                                            <tr>
                                                                <td scope="row">
                                                                    Email
                                                                </td>
                                                                <td>
                                                                    {$order->email|escape}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                        {if $order->phone}
                                                            <tr>
                                                                <td scope="row">
                                                                    {$lang->phone|escape}
                                                                </td>
                                                                <td>
                                                                    {$order->phone|escape}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                        {if $delivery}
                                                            <tr>
                                                                <td scope="row">
                                                                    {$lang->delivery_method|escape}
                                                                </td>
                                                                <td>
                                                                    {$delivery->name|escape}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                        {if $order->address}
                                                            <tr>
                                                                <td scope="row">
                                                                    {$lang->delivery_address|escape}
                                                                </td>
                                                                <td>
                                                                    {$order->address|escape}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                        {if $order->comment}
                                                            <tr>
                                                                <td scope="row">
                                                                    {$lang->comment|escape}
                                                                </td>
                                                                <td>
                                                                    {$order->comment|escape|nl2br}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basket-total-outer">
                                    <div class="basket-total-block">
                                        <div class="basket-checkout-container visible">
                                            <div class="basket-checkout-section">
                                                <div class="basket-checkout-section-inner">
                                                    <div class="basket-checkout-section-left">
                                                        <div class="total d-flex justify-content-between py-3 fsz-16 fw-bold">
                                                            <span> {$lang->total|escape} </span>
                                                            <span class="color-green2"> {$order->total_price|convert}&nbsp;{$currency->sign} </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>