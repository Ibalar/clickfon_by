{* Registration *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->registration scope=global}

	{* Canonical *}
	{$canonical="/user/register" scope=global}
{/if}

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>
            <li class="breadcrumb-item color-999">
                <a href="{$lang_link}user/login">{$lang->authorization|escape}</a>
            </li>
            {if $page}
                <li class="breadcrumb-item active color-000" aria-current="page">{$page->header|escape}</li>
            {else}
                <li class="breadcrumb-item active color-000" aria-current="page">{$lang->registration|escape}</li>
            {/if}
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                {if $page}
                    <h1 id="pagetitle" class="switcher-title"><span data-page="{$page->id}">{$page->name|escape}</span></h1>
                {else}
                    <h1 id="pagetitle" class="switcher-title">{$lang->registration|escape}</h1>
                {/if}
            </div>
        </div>
    </div>
</section>

<!--end-title_content-->

<section class="tc-register p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row align-items-center justify-content-around">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="img">
                <img src="design/{$settings->theme|escape}/images/login.svg" alt="{$lang->registration|escape}">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="login-form">
                <div class="title mb-30">
                    <h3 class="color-red2 mb-10">{$lang->register_title|default:"Регистрация"}</h3>
                    <p class="fsz-14 text-uppercase ltspc-2 color-999">{$lang->join_to_us|default:"Заполните поля"}</p>
                </div>
                {if $error}
                    <div class="alert alert-danger mb-3" role="alert">
                        {if $error == 'empty_name'}
                            {$lang->enter_your_name|escape}
                        {elseif $error == 'empty_email'}
                            {$lang->enter_your_email|escape}
                        {elseif $error == 'empty_password'}
                            {$lang->enter_password|escape}
                        {elseif $error == 'user_exists'}
                            {$lang->email_already_registered|escape}
                        {elseif $error == 'captcha'}
                            {$lang->captcha_incorrect|escape}
                        {else}
                            {$error}
                        {/if}
                    </div>
                {/if}
                <form id="registraion-page-form" class="form d-block" method="post" name="regform" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="form-group mb-4">
                        <label for="input_NAME">{$lang->name|escape} <span class="required-star">*</span></label>
                        <input type="text" id="input_NAME" name="name" required value="{$name|escape}" class="form-control" maxlength="255" aria-required="true" placeholder="Иван Иванов">
                    </div>
                    <div class="form-group mb-4">
                        <label for="input_EMAIL">E-mail <span class="required-star">*</span></label>
                        <input type="email" id="input_EMAIL" name="email" required value="{$email|escape}" class="form-control" aria-required="true" placeholder="Example@gmail.com">
                        {if $lang->registraion_login_text}
                            <div class="text_block font_13 mt-1">{$lang->registraion_login_text|escape}</div>
                        {/if}
                    </div>
                    <div class="form-group mb-4">
                        <label for="input_PERSONAL_PHONE">{$lang->phone|escape}</label>
                        <input type="text" id="input_PERSONAL_PHONE" name="phone" class="form-control phone_input" value="{$phone|escape}" placeholder="+375 (__) ___-__-__">
                    </div>
                    <div class="form-group mb-4">
                        <label for="input_PERSONAL_ADDRESS">{$lang->address|escape}</label>
                        <input type="text" id="input_PERSONAL_ADDRESS" name="address" class="form-control" value="{$address|escape}" placeholder="Адрес">
                    </div>
                    <div class="form-group show_hide_password mb-4">
                        <label for="input_PASSWORD">{$lang->password|escape} <span class="required-star">*</span> {if $lang->registraion_password_text}({$lang->registraion_password_text|escape}){/if}</label>
                        <input type="password" id="input_PASSWORD" name="password" required value="" autocomplete="off" class="form-control password" aria-required="true" placeholder="••••••••••••">
                        <i class="show_pass fal fa-eye-slash"></i>
                    </div>
                    {* Confirm Password if you want (uncomment & implement logic)
                    <div class="form-group show_hide_password mb-4">
                        <label for="input_PASSWORD_CONFIRM">{$lang->confirm_password|escape}</label>
                        <input type="password" id="input_PASSWORD_CONFIRM" name="password_confirm" class="form-control" autocomplete="off" placeholder="••••••••••••">
                        <i class="show_pass fal fa-eye-slash"></i>
                    </div>
                    *}
                    {if $settings->captcha_register}
                        <div class="form-group mb-4">
                            <label class="font_14">{$lang->captcha_label|escape} <span class="required-star">*</span></label>
                            <div class="row gx-2 gy-2 align-items-center">
                                <div class="col-6">
                                    {get_captcha var="captcha_register"}
                                    <div class="secret-number fsz-13">{$captcha_register[0]|escape} + ? = {$captcha_register[1]|escape}</div>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control required" name="captcha_code" value="" autocomplete="off" required placeholder="">
                                </div>
                            </div>
                        </div>
                    {/if}
                    <div class="btns">
                        <button class="butn bg-red2 text-white radius-4 fw-500 fsz-14 text-uppercase text-center mt-4 px-5" type="submit" name="register" value="register">
                            <span>{$lang->register|escape}</span>
                        </button>
                    </div>
                    <a href="{$lang_link}user/login" rel="nofollow" class="text-uppercase color-999 fsz-13 mt-3 d-block">
                        {$lang->already_user|default:"уже зарегестрированы?"} <span class="color-green2 ms-2">{$lang->authorization|escape}</span>
                    </a>
                    <div class="mt-3 licence_block">
                        <label for="licenses_reg" class="fsz-13 color-666">
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

<script>
	$(document).ready(function() {
		if (turboOptions["THEME"]["PHONE_MASK"].length) {
			var base_mask = turboOptions["THEME"]["PHONE_MASK"].replace(/(\d)/g, "_");
			$('form[name="regform"] input.phone_input').inputmask("mask", { mask: turboOptions["THEME"]["PHONE_MASK"], showMaskOnHover: false });
			$('form[name="regform"] input.phone_input').blur(function() {
				if ($(this).val() == base_mask || $(this).val() == "") {
					if ($(this).hasClass("required")) {
						$(this).parent().find("div.error").html(Turbo.message("JS_REQUIRED"));
					}
				}
			});
		}
	});
</script>