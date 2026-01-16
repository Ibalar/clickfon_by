<!DOCTYPE html>

<html lang="ru">
    <head>

        {* Meta *}
        {include file='head/meta.tpl'}

        {* CSS *}
        {include file='head/css.tpl'}
    </head>

    {literal}
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58QFM7M2"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    {/literal}

    <body class="home-style1 {if $module == 'ProductView'}sin-prod-pg-1{/if} {if $module == 'WishlistView'}cart-pg-1{/if} {if $module == 'CartView'}cart-pg-1{/if} {if $module == 'OrderView'}cart-pg-1{/if} {if $module == 'UserView'}profile-pg-1 about-pg-1{/if}">

        {* Loader *}
        {include file='loader/loader.tpl'}

        {* Top navbar *}
        {include file='action/top_menu.tpl'}


        {* Headers *}

            {include file='header/header.tpl'}


            {* Categories *}
            {include file='header/categories.tpl'}

        <div class="container container-llgg">
            <main>
                {* Content *}
                {$content}

            </main>
        </div>
    <!--Contents-->

<!--End-Contents-->

        {include file='footer/footer.tpl'}



<!--  Start to top button  -->
<a href="#" class="to_top">
    <i class="la la-angle-up"></i>
</a>
<!--  End to top button  -->



{* JS *}
{include file='scripts/js.tpl'}



</body>
</html>