{* Password Recovery *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->password_recovery scope=global}

	{* Canonical *}
	{$canonical="/user/password_remind" scope=global}
{/if}

<!--title_content-->
<section class="page-top-info p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0" itemscope itemtype="http://schema.org/BreadcrumbList">
            {$level = 1}
            <li class="breadcrumb-item color-999" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}" title="{$lang->home|escape}" itemprop="item">
                    <span itemprop="name">{$lang->home|escape}</span>
                </a>
                <meta itemprop="position" content="{$level++}">
            </li>
            <li class="breadcrumb-item color-999" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="{$lang_link}user/login" title="{$lang->authorization|escape}" itemprop="item">
                    <span itemprop="name">{$lang->authorization|escape}</span>
                </a>
                <meta itemprop="position" content="{$level++}">
            </li>
            {if $page}
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="{$lang_link}{$page->url}" itemprop="item">
                    <span itemprop="name">{$page->header|escape}</span>
                    <meta itemprop="position" content="{$level++}">
                </li>
            {else}
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="{$lang_link}user/password_remind" itemprop="item">
                    <span itemprop="name">{$lang->password_recovery|escape}</span>
                    <meta itemprop="position" content="{$level++}">
                </li>
            {/if}
        </ol>
    </nav>

    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                {if $page}
                    <h1 id="pagetitle" class="switcher-title"><span data-page="{$page->id}">{$page->name|escape}</span></h1>
                {else}
                    <h1 id="pagetitle" class="switcher-title">{$lang->password_recovery|escape}</h1>
                {/if}
            </div>
        </div>
    </div>
</section>
<!--end-title_content-->

<section class="tc-login p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row align-items-center justify-content-around">
        <div class="col-lg-12">
            <div class="login-form">

                {if $email_sent}
                    <div class="alert alert-success" role="alert">
                        {$email|escape} - {$lang->password_recovery_email|escape}
                    </div>
                {/if}
                {if $error}
                    <div class="alert alert-danger" role="alert">
                        {if $error == 'user_not_found'}
                            {$lang->user_not_found|escape}
                        {else}
                            {$error}
                        {/if}
                    </div>
                {/if}
                <form id="forgotpasswd-page-form" class="validate" method="post" novalidate="novalidate">
                    <div class="top-text font_16">
                        {$lang->password_recovery_text|escape}
                    </div>
                    <div class="form-body">
                        <div class="form-group fill-animate">
                            <label for="FORGOTPASSWD_USER_LOGIN" class="font_14"><span>Email:&nbsp;<span class="required-star">*</span></span></label>
                            <div class="input">
                                <input id="FORGOTPASSWD_USER_LOGIN" class="form-control required" type="text" name="email" value="{$email|escape}" required="" maxlength="255" autocomplete="off" aria-required="true">
                            </div>
                            <div class="text_block font_13">{$lang->recovery_text|escape}</div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button class="butn bg-green2 text-white radius-4 fw-500 fsz-14 text-uppercase text-center mt-40 px-5" type="submit" name="login" value="{$lang->restore|escape}"><span>{$lang->restore|escape}</span></button>
                        <div class="clearboth"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

