{get_products discounted=1 var=discounted_products limit=$theme_settings->products_tab_products_limit}
{if $discounted_products}
    <div class="product-row">
        {foreach $discounted_products as $product}
            {include file='products/grid_tab.tpl'}
        {/foreach}
    </div>
{/if}
