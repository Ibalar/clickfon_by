{* Brands *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->global_brands scope=global}

	{* Canonical *}
	{$canonical="/brands" scope=global}
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
            {if $page}
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="{$lang_link}{$page->url}" itemprop="item">
                    <span itemprop="name">{$page->header|escape}</span>
                    <meta itemprop="position" content="{$level++}">
                </li>
            {else}
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="{$lang_link}brands" itemprop="item">
                    <span itemprop="name">{$lang->global_brands|escape}</span>
                    <meta itemprop="position" content="{$level++}">
                </li>
            {/if}
        </ol>
    </nav>

    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                <h1 id="pagetitle" class="switcher-title">
                    {if $page}
                        <span data-page="{$page->id}">{$page->name|escape}</span>
                    {else}
                        {$lang->global_brands|escape}
                    {/if}
                </h1>
            </div>
        </div>
    </div>
</section>
<!--end-title_content-->

<section class="tc-trend-search-style1 wow fadeInUp slow animated">
    <div class="main-content pb-30 border-bottom row gx-4">
        <div class="col-lg-12">
            <div class="content-block">
                {if $brands}
                    <div class="links">
                        {foreach $brands as $b}
                        <a href="{$lang_link}brands/{$b->url}" class="link"> {$b->name} </a>
                        {/foreach}
                    </div>
                {else}
                    <div class="alert alert-info">
                        {$lang->no_brands_found|escape}
                    </div>
                {/if}
            </div>
        </div>
    </div>
</section>

