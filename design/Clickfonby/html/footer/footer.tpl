<!--  Start footer  -->
<footer class="tc-footer-style1">

    <div class="container">
        <div class="foot-icons py-4">
            <div class="row">
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-shield"></i> </span> Гарантия  </p>
                    <p class="fsz-14"> Гарантия на весь товар 36 месяцев.  </p>
                </div>
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-cart-arrow-down"></i> </span> Выгодная цена  </p>
                    <p class="fsz-14"> Работаем без посредников. Нашли дешевле? Сделаем!  </p>
                </div>
                <div class="col-lg-4">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-gifts"></i> </span> Подарки  </p>
                    <p class="fsz-14"> Каждому покупателю дарим приятные подарки!  </p>
                </div>
            </div>
        </div>
        <div class="foot-icons py-4 border-1 border-bottom">
            <div class="row">
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-thumbs-up"></i> </span> 100% Оригинал  </p>
                    <p class="fsz-14"> Продаем только оригинальную технику!  </p>
                </div>
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-redo"></i> </span> 14 дней  </p>
                    <p class="fsz-14"> Наш магазин дает 14 дней на проверку заводского брака!  </p>
                </div>
                <div class="col-lg-4">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-shipping-fast"></i> </span> Бесплатная доставка  </p>
                    <p class="fsz-14"> Бесплатная доставка по РБ и Минску!  </p>
                </div>
            </div>
        </div>
        <div class="foot-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="foot-info">
                        <h6 class="fw-bold mb-30 text-capitalize"> {$theme_settings->company_name|escape} </h6>
                        <p class="mb-15">{$theme_settings->unp|escape}</p>
                        <p class="mb-15">{$theme_settings->company_address|escape}</p>
                        <img src="design/{$settings->theme|escape}/images/f.webp" alt="" style="max-width: 300px; display: block;">
                        <small class="fsz-12 text-uppercase"> Оформление 24/7 </small>
                        <h5 class="fw-bold color-blue1 mb-20"> {$theme_settings->phone_1|escape} </h5>
                        <a href="mailto:{$theme_settings->email|escape}"> {$theme_settings->email|escape} </a>
                        <div class="foot-social mt-40">
                            {if $theme_settings->instagram}
                                    <a href="{$theme_settings->instagram|escape}" target="_blank" rel="nofollow" title="Instagram"> <i class="fab fa-instagram"></i> </a>
                            {/if}
                            {if $theme_settings->vk}
                                <a href="{$theme_settings->vk|escape}" target="_blank" rel="nofollow" title="Вконтакте"> <i class="fab fa-vk"></i> </a>
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="links-item mt-5 mt-lg-0">
                        <h6 class="fsz-18 mb-30"> Каталог </h6>
                        <ul class="links">
                        {foreach $pages as $p}
                            {if $p->menu_id == $theme_settings->id_menu_footer_2}
                            <li>
                                <a href="{$lang_link}{$p->url}">{$p->header|escape}</a>
                            </li>
                            {/if}
                        {/foreach}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="links-item mt-5 mt-lg-0">
                        <h6 class="fsz-18 mb-30"> Ваши товары </h6>
                        <ul class="links">
                            {foreach $pages as $p}
                                {if $p->menu_id == $theme_settings->id_menu_footer_3}
                                    <li>
                                        <a href="{$lang_link}{$p->url}">{$p->header|escape}</a>
                                    </li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links-item mt-5 mt-lg-0">
                        <h6 class="fsz-18 mb-30"> Полезное </h6>
                        <ul class="links">
                            {foreach $pages as $p}
                                {if $p->menu_id == $theme_settings->id_menu_footer_4}
                                    <li>
                                        <a href="{$lang_link}{$p->url}">{$p->header|escape}</a>
                                    </li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-start">
                    <p class="color-666"> © 2025 <a href="{if $lang_link}{$lang_link}{else}/{/if}" class="fw-bold color-000"> ClickFon.BY </a>. Все права защищены </p>
                </div>
                <div class="col-lg-4">
                    <div class="pay text-center my-4 my-lg-0">
                        <img src="design/{$settings->theme|escape}/images/pay3.png" alt="" class="mx-2">
                        <img src="design/{$settings->theme|escape}/images/pay5.png" alt="" class="mx-2">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mob-navigation d-flex d-lg-none">
        <ul>
            <li class="list {if $module == 'CompareView'}active{/if}">
                <a href="{$lang_link}compare/">
                    <span class="icon"> <i class="las la-sync-alt"></i> </span>
                    <span class="text">Сравнение</span>
                </a>
            </li>
            <li class="list {if $module == 'WishlistView'}active{/if}">
                <a href="{$lang_link}wishlist">
                    <span class="icon"> <i class="lar la-heart"></i> </span>
                    <span class="text">Избранное</span>
                </a>
            </li>
            <li class="list {if $module == 'MainView'}active{/if}">
                <a href="/">
                    <span class="icon"> <i class="las la-home"></i> </span>
                    <span class="text">Главная</span>
                </a>
            </li>
            <li class="list {if $module == 'CartView'}active{/if}">
                <a href="{$lang_link}cart/">
                    <span class="icon"> <i class="las la-shopping-bag"></i> </span>
                    <span class="text">Корзина</span>
                </a>
            </li>
            <li class="list {if $module == 'LoginView'}active{/if} {if $module == 'RegisterView'}active{/if}">
                {if $user}
                    <a href="{$lang_link}user">
                        <span class="icon"> <i class="las la-user"></i> </span>
                        <span class="text">Профиль</span>
                    </a>
                {else}
                    <a href="{$lang_link}user/login">
                        <span class="icon"> <i class="las la-user"></i> </span>
                        <span class="text">Профиль</span>
                    </a>
                {/if}
            </li>
            <li class="indicator"></li>
        </ul>
    </div>

</footer>
<!--  End footer  -->