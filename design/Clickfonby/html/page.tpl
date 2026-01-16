{* Page *}

{* Canonical *}
{$canonical="/{$page->url}" scope=global}

{if $page->url=="404"}
	{include file='404.tpl'}
{else}
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
                    <li class="breadcrumb-item active color-000" aria-current="page">{$lang->sitemap|escape}</li>
                {/if}
            </ol>
        </nav>
        <div class="topic mt-3">
            <div class="topic__inner">
                <div class="topic__heading">
                    {if $page}
                        <h1 id="pagetitle" class="switcher-title"><span data-page="{$page->id}">{$page->name|escape}</span></h1>
                    {else}
                        <h1 id="pagetitle" class="switcher-title">{$lang->sitemap|escape}</h1>
                    {/if}
                </div>
            </div>
        </div>
    </section>


    <section class="tc-page-section p-30 radius-4 bg-white mt-3 wow fadeInUp animated">
        <div class="main-content pb-30 border-bottom row gx-4">
            <div class="col-lg-12">
                <div class="content-block">
                    {* Page Body *}
                    {if $page}
                        <div class="fsz-14 mb-30 text">
                            {$page->body}
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </section>

{/if}