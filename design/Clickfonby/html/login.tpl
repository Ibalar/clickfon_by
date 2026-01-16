{* Login *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->login scope=global}

	{* Canonical *}
	{$canonical="/user/login" scope=global}
{/if}

{* Modals *}
{if isset($smarty.server.HTTP_X_REQUESTED_WITH) && $smarty.server.HTTP_X_REQUESTED_WITH == 'XMLHttpRequest'}
	{$wrapper='modals/auth.tpl' scope=global}
{/if}

<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>
            {if $page}
                <li class="breadcrumb-item active color-000" aria-current="page">{$page->header|escape}</li>
            {else}
                <li class="breadcrumb-item active color-000" aria-current="page">{$lang->authorization|escape}</li>
            {/if}
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                {if $page}
                    <h1 id="pagetitle" class="switcher-title"><span data-page="{$page->id}">{$page->name|escape}</span></h1>
                {else}
                    <h1 id="pagetitle" class="switcher-title">{$lang->authorization|escape}</h1>
                {/if}
            </div>
        </div>
    </div>
</section>


<section class="tc-login p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row align-items-center justify-content-around">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="img">
                <img src="design/{$settings->theme|escape}/images/login.svg" alt="{$lang->authorization|escape}">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="login-form">
                <div class="title mb-30">
                    <h3 class="color-red2 mb-10">{$lang->welcome_back|default:"Добро пожаловать"}</h3>
                    <p class="fsz-14 text-uppercase ltspc-2 color-999">{$lang->login_to_continue|default:"Авторизируйтесь для продолжения"}</p>
                    {if $lang->authorization_text}
                        <div class="fsz-14 mt-2 mb-20 color-666">
                            {$lang->authorization_text|escape}
                        </div>
                    {/if}
                </div>
                {if $error}
                    <div class="alert alert-danger mb-3" role="alert">
                        {if $error == 'login_incorrect'}
                            {$lang->wrong_login_password|escape}
                        {elseif $error == 'user_disabled'}
                            {$lang->not_activated|escape}
                        {else}
                            {$error}
                        {/if}
                    </div>
                {/if}
                <form id="auth-page-form" class="form d-block" method="post" target="_top" novalidate="novalidate">
                    <div class="form-group mb-4">
                        <label for="USER_LOGIN_FORM">{$lang->login|escape} <span class="required-star">*</span></label>
                        <input type="text" name="email" id="USER_LOGIN_FORM" class="form-control required input-filed"
                               maxlength="50" value="{$email|escape}" autocomplete="on" tabindex="1" aria-required="true" aria-invalid="false" placeholder="Example@gmail.com">
                    </div>
                    <div class="form-group mb-4 show_hide_password">
                        <label for="USER_PASSWORD_FORM">{$lang->password|escape} <span class="required-star">*</span></label>
                        <input type="password" name="password" id="USER_PASSWORD_FORM" class="form-control required"
                               maxlength="50" value="" autocomplete="on" tabindex="2" aria-required="true" placeholder="••••••••••••">
                        <i class="show_pass fal fa-eye-slash"></i>
                    </div>
                    <a href="{$lang_link}user/password_remind" class="d-block text-decoration-underline mt-2 color-999 fsz-13">{$lang->forgot_password|escape}</a>
                    <div class="btns">
                        <button type="submit" class="butn bg-red2 text-white radius-4 fw-500 fsz-14 text-uppercase text-center mt-4 px-5" name="login" value="login">
                            <span>{$lang->login|escape}</span>
                        </button>
                    </div>
                    <a href="{$lang_link}user/register" rel="nofollow" class="text-uppercase color-999 fsz-13 mt-3 d-block">
                        {$lang->new_user|default:"Новый пользователь?"} <span class="color-green2 ms-2">{$lang->registration|escape}</span>
                    </a>
                    <div class="mt-3 licence_block">
                        <label for="licenses_auth" class="fsz-13 color-666">
                            <span>{$lang->licenses_text|escape}
                                <a href="{$lang_link}licenses" target="_blank">{$lang->licenses_link|escape}</a>
                            </span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
