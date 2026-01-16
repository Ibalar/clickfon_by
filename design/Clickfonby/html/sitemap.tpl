{* Sitemap *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->sitemap scope=global}

	{* Canonical *}
	{$canonical="/sitemap" scope=global}
{/if}

<style>
    .cat-list ul {
        margin: 0;
        padding-left: 16px;
    }

    .cat-list li {
        line-height: 1.2;
    }

    .cat-list li a{
        margin-bottom: 15px;
    }

    .cat-list ul ul {
        padding-left: 32px;
    }

    .cat-list ul ul li a{
        font-weight: bold;
    }

    .cat-list ul ul ul {
        padding-left: 48px;
    }

    .cat-list ul ul ul ul {
        padding-left: 64px;
    }

</style>

<!--title_content-->
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

<!--end-title_content-->


<section class="tc-about-cards">
    <div class="row gx-2">
        <div class="col-lg-6 mt-3">
            <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20">{$lang->online_store|escape}</h6>
                <ul>
                    {foreach $pages as $p1}
                        {if $p1->menu_id == $theme_settings->id_menu_sitemap_1 && $p1->visible}
                            <li>
                                <a href="{$lang_link}{$p1->url}" class="dark_link">{$p1->header|escape}</a>
                                {if $p1->subpages}
                                    <ul>
                                        {foreach $p1->subpages as $p1_2}
                                            {if $p1_2->visible}
                                                <li>
                                                    <a href="{$lang_link}{$p1_2->url}" class="dark_link">{$p1_2->header|escape}</a>
                                                    {if $p1_2->subpages}
                                                        <ul>
                                                            {foreach $p1_2->subpages as $p1_3}
                                                                {if $p1_3->visible}
                                                                    <li>
                                                                        <a href="{$lang_link}{$p1_3->url}" class="dark_link">{$p1_3->header|escape}</a>
                                                                    </li>
                                                                {/if}
                                                            {/foreach}
                                                        </ul>
                                                    {/if}
                                                </li>
                                            {/if}
                                        {/foreach}
                                    </ul>
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>
            {* Каталог *}
            <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20">{$lang->catalog|escape}</h6>
                <ul>
                    {foreach $pages as $p2}
                        {if $p2->menu_id == $theme_settings->id_menu_sitemap_2 && $p2->visible}
                            <li>
                                <a href="{$lang_link}{$p2->url}" class="dark_link">{$p2->header|escape}</a>
                                {if $p2->subpages}
                                    <ul>
                                        {foreach $p2->subpages as $p2_2}
                                            {if $p2_2->visible}
                                                <li>
                                                    <a href="{$lang_link}{$p2_2->url}" class="dark_link">{$p2_2->header|escape}</a>
                                                    {if $p2_2->subpages}
                                                        <ul>
                                                            {foreach $p2_2->subpages as $p2_3}
                                                                {if $p2_3->visible}
                                                                    <li>
                                                                        <a href="{$lang_link}{$p2_3->url}" class="dark_link">{$p2_3->header|escape}</a>
                                                                    </li>
                                                                {/if}
                                                            {/foreach}
                                                        </ul>
                                                    {/if}
                                                </li>
                                            {/if}
                                        {/foreach}
                                    </ul>
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>

            {* Информация *}
            <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20">{$lang->information|escape}</h6>
                <ul>
                    {foreach $pages as $p3}
                        {if $p3->menu_id == $theme_settings->id_menu_sitemap_3 && $p3->visible}
                            <li>
                                <a href="{$lang_link}{$p3->url}" class="dark_link">{$p3->header|escape}</a>
                                {if $p3->subpages}
                                    <ul>
                                        {foreach $p3->subpages as $p3_2}
                                            {if $p3_2->visible}
                                                <li>
                                                    <a href="{$lang_link}{$p3_2->url}" class="dark_link">{$p3_2->header|escape}</a>
                                                    {if $p3_2->subpages}
                                                        <ul>
                                                            {foreach $p3_2->subpages as $p3_3}
                                                                {if $p3_3->visible}
                                                                    <li>
                                                                        <a href="{$lang_link}{$p3_3->url}" class="dark_link">{$p3_3->header|escape}</a>
                                                                    </li>
                                                                {/if}
                                                            {/foreach}
                                                        </ul>
                                                    {/if}
                                                </li>
                                            {/if}
                                        {/foreach}
                                    </ul>
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>

            {* Помощь *}
            <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20">{$lang->help|escape}</h6>
                <ul>
                    {foreach $pages as $p4}
                        {if $p4->menu_id == $theme_settings->id_menu_sitemap_4 && $p4->visible}
                            <li>
                                <a href="{$lang_link}{$p4->url}" class="dark_link">{$p4->header|escape}</a>
                                {if $p4->subpages}
                                    <ul>
                                        {foreach $p4->subpages as $p4_2}
                                            {if $p4_2->visible}
                                                <li>
                                                    <a href="{$lang_link}{$p4_2->url}" class="dark_link">{$p4_2->header|escape}</a>
                                                    {if $p4_2->subpages}
                                                        <ul>
                                                            {foreach $p4_2->subpages as $p4_3}
                                                                {if $p4_3->visible}
                                                                    <li>
                                                                        <a href="{$lang_link}{$p4_3->url}" class="dark_link">{$p4_3->header|escape}</a>
                                                                    </li>
                                                                {/if}
                                                            {/foreach}
                                                        </ul>
                                                    {/if}
                                                </li>
                                            {/if}
                                        {/foreach}
                                    </ul>
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>

            {* Блог *}
            {if $posts}
                <div class="cat-list pt-20">
                    <h6 class="fsz-14 fw-bold mb-20">{$lang->global_blog|escape}</h6>
                    <ul>
                        <li>
                            <a href="{$lang_link}blog" class="dark_link">{$lang->news|escape}</a>
                            <ul>
                                {foreach $posts as $p}
                                    {if $p->visible}
                                        <li>
                                            <a href="{$lang_link}blog/{$p->url}" class="dark_link font_14">{$p->name|escape}</a>
                                        </li>
                                    {/if}
                                {/foreach}
                            </ul>
                        </li>
                    </ul>
                </div>
            {/if}

            {if $articles_cats}
                <div class="cat-list pt-20">
                    <h6 class="fsz-14 fw-bold mb-20">{$lang->global_articles|escape}</h6>
                    <ul>
                        {foreach $articles_cats as $cat}
                            {if $cat->visible}
                                <li>
                                    <a href="{$lang_link}articles/{$cat->url}" class="dark_link">{$cat->name|escape}</a>
                                    {if $cat->subcategories || $cat->articles}
                                        <ul>
                                            {foreach $cat->subcategories as $subcat}
                                                {if $subcat->visible}
                                                    <li>
                                                        <a href="{$lang_link}articles/{$subcat->url}" class="dark_link">{$subcat->name|escape}</a>
                                                        {if $subcat->subcategories || $subcat->articles}
                                                            <ul>
                                                                {foreach $subcat->subcategories as $subcat3}
                                                                    {if $subcat3->visible}
                                                                        <li>
                                                                            <a href="{$lang_link}articles/{$subcat3->url}" class="dark_link">{$subcat3->name|escape}</a>
                                                                            {if $subcat3->articles}
                                                                                <ul>
                                                                                    {foreach $subcat3->articles as $article}
                                                                                        {if $article->visible}
                                                                                            <li>
                                                                                                <a href="{$lang_link}article/{$article->url}" class="dark_link font_14">{$article->name|escape}</a>
                                                                                            </li>
                                                                                        {/if}
                                                                                    {/foreach}
                                                                                </ul>
                                                                            {/if}
                                                                        </li>
                                                                    {/if}
                                                                {/foreach}
                                                                {if $subcat->articles}
                                                                    {foreach $subcat->articles as $article}
                                                                        {if $article->visible}
                                                                            <li>
                                                                                <a href="{$lang_link}article/{$article->url}" class="dark_link font_14">{$article->name|escape}</a>
                                                                            </li>
                                                                        {/if}
                                                                    {/foreach}
                                                                {/if}
                                                            </ul>
                                                        {/if}
                                                    </li>
                                                {/if}
                                            {/foreach}
                                            {if $cat->articles}
                                                {foreach $cat->articles as $article}
                                                    {if $article->visible}
                                                        <li>
                                                            <a href="{$lang_link}article/{$article->url}" class="dark_link font_14">{$article->name|escape}</a>
                                                        </li>
                                                    {/if}
                                                {/foreach}
                                            {/if}
                                        </ul>
                                    {/if}
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            {/if}
        </div>
        <div class="col-lg-6 mt-3">
            {if $cats}
                <div class="cat-list pt-20">
                    <h6 class="fsz-14 fw-bold mb-20">{$lang->global_products|escape}</h6>
                    <ul>
                        {foreach $cats as $cat}
                            {if $cat->visible}
                                <li>
                                    <a href="{$lang_link}catalog/{$cat->url}" class="dark_link">{$cat->name|escape}</a>
                                    {if $cat->subcategories || $cat->products}
                                        <ul>
                                            {foreach $cat->subcategories as $subcat}
                                                {if $subcat->visible}
                                                    <li>
                                                        <a href="{$lang_link}catalog/{$subcat->url}" class="dark_link">{$subcat->name|escape}</a>
                                                        {if $subcat->subcategories || $subcat->products}
                                                            <ul>
                                                                {foreach $subcat->subcategories as $subcat3}
                                                                    {if $subcat3->visible}
                                                                        <li>
                                                                            <a href="{$lang_link}catalog/{$subcat3->url}" class="dark_link">{$subcat3->name|escape}</a>
                                                                            {if $subcat3->products}
                                                                                <ul>
                                                                                    {foreach $subcat3->products as $product}
                                                                                        {if $product->visible}
                                                                                            <li>
                                                                                                <a href="{$lang_link}products/{$product->url}" class="dark_link font_14">{$product->name|escape}</a>
                                                                                            </li>
                                                                                        {/if}
                                                                                    {/foreach}
                                                                                </ul>
                                                                            {/if}
                                                                        </li>
                                                                    {/if}
                                                                {/foreach}
                                                                {if $subcat->products}
                                                                    {foreach $subcat->products as $product}
                                                                        {if $product->visible}
                                                                            <li>
                                                                                <a href="{$lang_link}products/{$product->url}" class="dark_link font_14">{$product->name|escape}</a>
                                                                            </li>
                                                                        {/if}
                                                                    {/foreach}
                                                                {/if}
                                                            </ul>
                                                        {/if}
                                                    </li>
                                                {/if}
                                            {/foreach}
                                            {if $cat->products}
                                                {foreach $cat->products as $product}
                                                    {if $product->visible}
                                                        <li>
                                                            <a href="{$lang_link}products/{$product->url}" class="dark_link font_14">{$product->name|escape}</a>
                                                        </li>
                                                    {/if}
                                                {/foreach}
                                            {/if}
                                        </ul>
                                    {/if}
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            {/if}
        </div>

    </div>
</section>








