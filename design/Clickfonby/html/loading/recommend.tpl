{get_products featured=1 var=featured_products limit=$theme_settings->products_tab_products_limit}
{if $featured_products}
    <div class="product-row">
        {foreach $featured_products as $product}
            {include file='products/grid_tab.tpl'}
        {/foreach}
    </div>
{/if}