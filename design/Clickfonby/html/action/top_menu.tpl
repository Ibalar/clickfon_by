<div class="tc-top-navbar-style1 py-3 bg-red1 text-white d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <div class="top-nav-side justify-content-lg-start">
                    <div class="side-links">
                        {foreach $pages as $p}
                            {if $p->menu_id == $theme_settings->id_menu_top}
                                <a class="me-lg-3" href="{$lang_link}{$p->url}"><span data-page="{$p->id}">{$p->header|escape}</span></a>
                            {/if}
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>