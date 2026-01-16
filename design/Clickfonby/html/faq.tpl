{* FAQ *}

{if $page}
	{* Canonical *}
	{$canonical="/{$page->url}" scope=global}
{else}
	{* Meta Title *}
	{$meta_title = $lang->faq_name scope=global}

	{* Canonical *}
	{$canonical="/faq" scope=global}
{/if}

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="{if $lang_link}{$lang_link}{else}/{/if}">{$lang->home|escape}</a>
            </li>
            {if $category}
                <li class="breadcrumb-item color-999">
                    <a href="{$lang_link}catalog">{$lang->catalog|escape}</a>
                </li>
                {foreach $category->path as $cat}
                    {if !$cat@last || $keyword || $page || $brand}
                        <li class="breadcrumb-item color-999">
                            <a href="{$lang_link}catalog/{$cat->url}">{$cat->name|escape}</a>
                        </li>
                    {else}
                        <li class="breadcrumb-item active color-000" aria-current="page">{$cat->name|escape}</li>
                    {/if}
                {/foreach}
                {if $page}
                    <li class="breadcrumb-item active color-000" aria-current="page">{$page->header|escape}</li>
                {/if}
            {elseif $brand}
                <li class="breadcrumb-item color-999">
                    <a href="{$lang_link}brands">{$lang->global_brands|escape}</a>
                </li>
                <li class="breadcrumb-item active color-000" aria-current="page">{$brand->name|escape}</li>
            {elseif $keyword}
                <li class="breadcrumb-item active color-000" aria-current="page">{$lang->search|escape}</li>
            {elseif $page}
                <li class="breadcrumb-item active color-000" aria-current="page">{$page->header|escape}</li>
            {else}
                <li class="breadcrumb-item active color-000" aria-current="page">{$lang->faq_name|escape}</li>
            {/if}
            {if isset($product)}
                <li class="breadcrumb-item active color-000" aria-current="page">{$product->name|escape}</li>
            {/if}
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                {* Page Title *}
                {if $page}
                    <h1 id="pagetitle" class="switcher-title"><span data-page="{$page->id}">{$page->name|escape}</span></h1>
                {elseif $category}
                    <h1 id="pagetitle" class="switcher-title">{$category->name|escape}</h1>
                {elseif $brand}
                    <h1 id="pagetitle" class="switcher-title">{$brand->name|escape}</h1>
                {elseif $keyword}
                    <h1 id="pagetitle" class="switcher-title">{$lang->search|escape}</h1>
                {elseif $product}
                    <h1 id="pagetitle" class="switcher-title">{$product->name|escape}</h1>
                {else}
                    <h1 id="pagetitle" class="switcher-title">{$lang->faq_name|escape}</h1>
                {/if}
            </div>
        </div>
    </div>
</section>

<!--end-title_content-->

<div class="container">
	<div class="row">
		<div class="maxwidth-theme">
			<div class="col-md-12 col-sm-12 col-xs-12 content-md">
				<div class="right_block narrow_Y">
					{* Page Body *}
					{if $page && $page->body}
						<div class="text_before_items">
							<div>
								{$page->body}
							</div>
						</div>
					{/if}
					{if $faqs}
						<div class="js_append faq-accordion__list accordion-type-1 grid-list grid-list--items-1 grid-list--no-gap">
							{foreach $faqs as $faq name=active}
								<div class="js-infinite grid-list__item item-accordion-wrapper shadow-hovered shadow-no-border-hovered faq-accordion__wrapper">
									<div id="{$faq->id}" class="faq-accordion__item">
										<div class="accordion-head stroke-theme-hover accordion-close collapsed" data-toggle="collapse" data-parent="#accordion-{$faq->id}" href="#accordion-{$faq->id}">
											<div class="faq-accordion__head">
												<span class="faq-accordion__name switcher-title font_weight--500 font_18">{$faq->name|escape}</span>
											</div>
											<i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
										</div>
										<div id="accordion-{$faq->id}" class="panel-collapse collapse" style="height: 0px;">
											<div class="accordion-body color_666">
												<div class="faq-accordion__preview-text  accordion-preview">
													<div class="faq-accordion__detail-text">
														{$faq->answer}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							{/foreach}
						</div>
						{if $total_pages_num > 1}
							<div class="wrap_nav bottom_nav_wrapper">
								<div class="bottom_nav_wrapper nav-compact">
									<div class="bottom_nav">
										{if $current_page_num < $total_pages_num}
											<div class="ajax_load_btn">
												<span class="more_text_ajax btn btn-transparent">
													{$lang->load_more|escape}
												</span>
											</div>
										{/if}
										{* Paginations *}
										{include file='paginations/pagination.tpl'}
									</div>
								</div>
							</div>
						{/if}
					{else}
						<div class="alert alert-info">
							{$lang->no_faqs_found|escape}
						</div>
					{/if}
					<div class="rounded-x grey-bg order-block__wrapper">
						<div class="order-info-block">
							<div class="line-block line-block--align-normal line-block--40">
								<div class="line-block__item flex-1">
									<h3>{$lang->ask_question|escape}</h3>
									{$lang->text_faq|escape}
								</div>
								<div class="line-block__item order-info-btns">
									<div class="line-block line-block--align-normal line-block--12">
										<div class="line-block__item">
											<span class="btn btn-default btn-lg min_width--300" data-event="jqm" data-url="{$lang_link}contact/?tpl=feedback_modal" data-name="question">
												<span>{$lang->write_message|escape}</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="left_block">
					<div class="sticky-block sticky-block--show-Y">
						<aside class="sidebar">
							<ul class="nav nav-list side-menu">
								{foreach $pages as $p}
									{if $p->menu_id == $page->menu_id}
										{if $p->visible}
											<li class="{if $page && $page->id == $p->id}active{/if} {if $p->subpages}opened child{/if}">
												<span class="bg-opacity-theme-parent-hover link-wrapper font_short fill-theme-parent-all fill-dark-light">
													<a href="{$lang_link}{$p->url}" class="dark_link top-level-link rounded-x link-with-flag {if $page && $page->id == $p->id}link--active{/if}">
														<span data-page="{$p->id}">{$p->header|escape}</span>
													</a>
												</span>
												{if $p->subpages}
													<div class="submenu-wrapper">
														<ul class="submenu">
															{foreach $p->subpages as $p2}
																<li class="{if $page && $page->id == $p2->id}active{/if} {if $p2->subpages}opened child{/if}">
																	<span class="bg-opacity-theme-parent-hover link-wrapper font_short fill-theme-parent-all fill-dark-light">
																		<a href="{$lang_link}{$p2->url}" class="dark_link sublink rounded-x {if $page && $page->id == $p2->id}link--active{/if}">
																			<span data-page="{$p2->id}">{$p2->header|escape}</span>
																		</a>
																	</span>
																	{if $p2->subpages}
																		<div class="submenu-wrapper">
																			<ul class="submenu">
																				{foreach $p2->subpages as $p3}
																					<li class="{if $page && $page->id == $p3->id}active{/if}">
																						<span class="bg-opacity-theme-parent-hover link-wrapper font_short fill-theme-parent-all fill-dark-light">
																							<a href="{$lang_link}{$p3->url}" class="dark_link sublink rounded-x {if $page && $page->id == $p3->id}link--active{/if}">
																								<span data-page="{$p3->id}">{$p3->header|escape}</span>
																							</a>
																						</span>
																					</li>
																				{/foreach}
																			</ul>
																		</div>
																	{/if}
																</li>
															{/foreach}
														</ul>
													</div>
												{/if}
											</li>
										{/if}
									{/if}
								{/foreach}
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>