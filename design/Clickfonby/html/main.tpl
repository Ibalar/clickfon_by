{* Home Page *}

{$wrapper = 'index.tpl' scope=global}

{* Canonical *}
{$canonical="" scope=global}


<header>

    <!--  Start header  -->
    <section class="tc-header-style1">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        {include file='main/slider.tpl'}
                    </div>
                    
                    {* Banners Text *}
                    {if $theme_settings->visible_5}
                        {include file='main/banners_text.tpl'}
                    {/if}
                    
                </div>
            </div>
        </div>
    </section>

    <!--  Start popular cat  -->
    {include file='main/catalog_sections.tpl'}
    <!--  End popular cat  -->
</header>



{* Products Tab *}
{if $theme_settings->visible_3}
    {include file='main/products_tab.tpl'}
{/if}

{if $theme_settings->visible_4}
    {include file='main/brands.tpl'}
{/if}