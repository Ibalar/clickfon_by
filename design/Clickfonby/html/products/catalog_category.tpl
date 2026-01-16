{* Catalog Category Type 1 *}
{if $theme_settings->catalog_category_type == '1'}
	<div class="top-content-block">
		<div class="section-block">
			<div class="sections-list .default-template">
				<div class="line-block line-block--align-normal line-block--flex-wrap line-block--gap line-block--gap-12 line-block--gap-8-to-600">
					{foreach $category->subcategories as $c}
						<div class="sections-list__wrapper line-block__item stroke-theme-parent-all colored_theme_hover_bg-block animate-arrow-hover">
							<div class="sections-list__item height-100 outer-rounded-x shadow-hovered shadow-no-border-hovered color-theme-parent-all {if $theme_settings->catalog_category_bordered}bordered{/if}">
								<a class="sections-list__item-link dark_link height-100" href="{$lang_link}catalog/{$c->url}">
									<span class="sections-list__item-inner flexbox flexbox--direction-row flexbox--align-center height-100">
										{if $theme_settings->catalog_category_images_type == '2'}
											<span class="sections-list__item-image-wrapper sections-list__item-image-wrapper--ICONS">
												{if $c->icon}
													{assign var="icon" value="{$config->categories_images_dir}{$c->icon}"}
													{if $icon|is_svg}
														<i class="svg inline svg-inline- fill-theme sections-list__item-image" aria-hidden="true">
															{$icon|svg}
														</i>
													{else}
														<img style="max-width: 40px; max-height: 40px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{$icon}" class="lazyload sections-list__item-image" alt="{$c->name|escape}">
													{/if}
												{else}
													<img style="width: 40px; height: 40px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="design/{$settings->theme|escape}/images/no-photo.svg" class="lazyload sections-list__item-image" alt="{$c->name|escape}">
												{/if}
											</span>
										{else}
											<span class="sections-list__item-image-wrapper sections-list__item-image-wrapper--PICTURES">
												{if $c->image}
													<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{$c->image|resize_catalog:40:40}" class="lazyload sections-list__item-image" alt="{$c->name|escape}">
												{else}
													<img style="width: 40px; height: 40px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="design/{$settings->theme|escape}/images/no-photo.svg" class="lazyload sections-list__item-image" alt="{$c->name|escape}">
												{/if}
											</span>
										{/if}
										<span class="sections-list__item-text color-theme-target font_short" data-category="{$c->id}">{$c->name|escape}</span>
									</span>
								</a>
							</div>
						</div>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
{/if}

{* Catalog Category Type 2 *}
{if $theme_settings->catalog_category_type == '2'}
    <section class="tc-categories-style6 p-30 radius-4 bg-white mt-3 wow fadeInUp animated">
        <div class="content">
            {foreach $category->subcategories as $c}
                <a href="{$lang_link}catalog/{$c->url}" class="number-item">
                    <div class="inf">
                        <h6 class="fsz-14 fw-bold mb-0 sm-title">{$c->name|escape}</h6>
                        <small class="fsz-12 color-666">
                            {if isset($c->products_count)}
                                {$c->products_count} Товаров
                            {/if}
                        </small>
                    </div>

                        {if $c->image}
                    <div class="img">
                            <img src="{$c->image|resize_catalog:120:120}" alt="{$c->name|escape}" class="img-contain">
                    </div>
                        {else}

                        {/if}

                </a>
            {/foreach}
        </div>
    </section>
{/if}

