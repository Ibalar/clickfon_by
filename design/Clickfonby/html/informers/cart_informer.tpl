<div id="cart-block-header">
    {if $cart->total_products>0}
        <a title="{$lang->index_cart|escape}" href="{$lang_link}cart/"> <i class="la la-shopping-cart"></i> <span class="num"> {$cart->total_products} </span> </a>
    {else}
        <a title="{$lang->index_cart|escape}" href="{$lang_link}cart/"> <i class="la la-shopping-cart"></i> <span class="num"> 0 </span> </a>
    {/if}
</div>
