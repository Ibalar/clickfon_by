<nav class="navbar tc-navbar-style1 navbar-expand-lg navbar-light">
    <div class="container">
        <div class="content">
            <a class="navbar-brand" href="{if $lang_link}{$lang_link}{else}/{/if}">
                {* Logo *}
                {include file='includes/logo.tpl'}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {* Search *}
            {include file='header/search.tpl'}


            <div class="hot-line">
                <span class="icon"> <i class="las la-tty"></i> </span>
                <div class="inf">
                    <small class="fsz-13 d-block"> Оформление 24/7 </small>
                    <h6 class="fsz-18 color-red1 fw-bold"> <a href="tel:{$theme_settings->phone_1|regex_replace:'/[\s()-]/':''}"> {$theme_settings->phone_1|escape} </a> </h6>
                </div>
            </div>
            <div class="icons">

                {* Compare Informer *}
                {if $compare_products > 0}
                    <a href="{$lang_link}compare/" title="{$lang->compare|escape}"> <i class="la la-sync"></i> <span class="dot"></span> </a>
                {else}
                    <a href="{$lang_link}compare/" title="{$lang->compare|escape}"> <i class="la la-sync"></i> </a>
                {/if}

                {* Wishlist Informer *}
                <a title="{$lang->wishlist|escape}" href="{$lang_link}wishlist" class="header-wishlist-icon">
                    <i class="lar la-heart"></i>
                    <span class="dot" style="display: none;"></span>
                </a>


                {* User *}
                {if $user}
                    <a title="{$user->name}" href="{$lang_link}user" onclick="document.cookie='user=personal;path=/';document.location.reload();"> <i class="la la-user"></i> </a>
                {else}
                    <a title="{$lang->login|escape}" data-url="{$lang_link}user/login/?tpl=auth" data-name="auth" href="{$lang_link}user/login"><i class="la la-user"></i></a>
                {/if}

                {* Cart Informer *}
                {include file='informers/cart_informer.tpl'}
            </div>
        </div>
        {* Mob Categories *}
        {include file='header/mob_categories.tpl'}
    </div>
</nav>