{* Hit *}
{get_products is_hit=1 var=hit_products limit=$theme_settings->products_tab_products_limit}
{if $hit_products}
    <div class="product-row">
        {foreach $hit_products as $product}
            {include file='products/grid_tab.tpl'}
        {/foreach}
    </div>
{/if}