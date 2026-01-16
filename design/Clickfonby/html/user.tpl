{* User *}

{* Meta Title *}
{$meta_title = $lang->personal_area scope=global}

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>
            <li class="breadcrumb-item active color-000" aria-current="page">{$lang->personal_area|escape}</li>
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                <h1 id="pagetitle" class="switcher-title">{$lang->personal_area|escape}</h1>
            </div>
        </div>
    </div>
</section>

<!--end-title_content-->

<section class="tc-profile p-30 radius-4 bg-white mt-3 wow fadeInUp mb-3 animated"
         style="visibility: visible; animation-name: fadeInUp;">
    <div class="row">
        <div class="col-lg-3">
            <div class="tabs-side me-lg-5 mb-4 mb-lg-0">
                <div class="main-info text-center">
                    <h5 class="fw-bold mb-1">{$user->name|default:'Ваше имя'|escape}</h5>
                    <ul class="mt-2 color-666 lh-lg list-unstyled fsz-14">
                        <li>
                            <a href="mailto:{$user->email|escape}">
                                {$user->email|escape}
                            </a>
                        </li>
                        {* Можно добавить город, адрес, телефон... *}
                    </ul>
                </div>
                <ul class="nav nav-pills flex-column mt-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {if !isset($smarty.cookies.user) || $smarty.cookies.user == 'personal'}active{/if}"
                                id="pills-prof1-tab" data-bs-toggle="pill" data-bs-target="#pills-prof1"
                                type="button" role="tab" aria-controls="pills-prof1" aria-selected="{if !isset($smarty.cookies.user) || $smarty.cookies.user == 'personal'}true{else}false{/if}">
                            <span>{$lang->my_account|escape}</span> <i class="fal fa-arrow-right"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {if $smarty.cookies.user == 'private'}active{/if}"
                                id="pills-prof2-tab" data-bs-toggle="pill" data-bs-target="#pills-prof2"
                                type="button" role="tab" aria-controls="pills-prof2" aria-selected="{if $smarty.cookies.user == 'private'}true{else}false{/if}">
                            <span>{$lang->personal_data|escape}</span> <i class="fal fa-arrow-right"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {if $smarty.cookies.user == 'orders'}active{/if}"
                                id="pills-prof3-tab" data-bs-toggle="pill" data-bs-target="#pills-prof3"
                                type="button" role="tab" aria-controls="pills-prof3" aria-selected="{if $smarty.cookies.user == 'orders'}true{else}false{/if}">
                            <span>{$lang->orders_global|escape}</span> <i class="fal fa-arrow-right"></i>
                        </button>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="{$lang_link}wishlist" class="nav-link">
                            <span>{$lang->wishlist_products|escape}</span> <i class="fal fa-heart"></i>
                        </a>
                    </li>
{*                    <li class="nav-item">*}
{*                        <a href="{$lang_link}faq" class="nav-link">*}
{*                            <span>{$lang->help|escape}</span> <i class="fal fa-question"></i>*}
{*                        </a>*}
{*                    </li>*}
                    <li class="nav-item">
                        <a href="{$lang_link}user/logout" class="nav-link">
                            <span>{$lang->logout|escape}</span> <i class="fal fa-sign-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade {if !isset($smarty.cookies.user) || $smarty.cookies.user == 'personal'}show active{/if}" id="pills-prof1" role="tabpanel">
                    {include file='user/personal.tpl'}
                </div>
                <div class="tab-pane fade {if $smarty.cookies.user == 'private'}show active{/if}" id="pills-prof2" role="tabpanel">
                    {include file='user/private.tpl'}
                </div>
                <div class="tab-pane fade {if $smarty.cookies.user == 'orders'}show active{/if}" id="pills-prof3" role="tabpanel">
                    {include file='user/user_orders.tpl'}
                </div>
            </div>
        </div>
    </div>
</section>
