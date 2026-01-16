{* New *}
{get_products is_new=1 var=new_products limit=$theme_settings->products_tab_products_limit}
{if $new_products}
    <div class="product-row">
        {foreach $new_products as $product}
            {include file='products/grid_tab.tpl'}
        {/foreach}
    </div>
{/if}