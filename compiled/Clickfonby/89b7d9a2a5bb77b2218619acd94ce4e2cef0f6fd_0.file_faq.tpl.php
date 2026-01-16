<?php
/* Smarty version 5.4.2, created on 2025-11-23 16:10:18
  from 'file:faq.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692307baa840c3_10611188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b7d9a2a5bb77b2218619acd94ce4e2cef0f6fd' => 
    array (
      0 => 'faq.tpl',
      1 => 1763891280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:paginations/pagination.tpl' => 1,
  ),
))) {
function content_692307baa840c3_10611188 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
		<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
		<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->faq_name, false, 32);?>

		<?php $_smarty_tpl->assign('canonical', "/faq", false, 32);
}?>

<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</a>
            </li>
            <?php if ($_smarty_tpl->getValue('category')) {?>
                <li class="breadcrumb-item color-999">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->catalog, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->path, 'cat', true);
$_smarty_tpl->getVariable('cat')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('cat')->iteration++;
$_smarty_tpl->getVariable('cat')->last = $_smarty_tpl->getVariable('cat')->iteration === $_smarty_tpl->getVariable('cat')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('cat');
?>
                    <?php if (!$_smarty_tpl->getVariable('cat')->last || $_smarty_tpl->getValue('keyword') || $_smarty_tpl->getValue('page') || $_smarty_tpl->getValue('brand')) {?>
                        <li class="breadcrumb-item color-999">
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('cat')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </li>
                    <?php } else { ?>
                        <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
                <?php
$_smarty_tpl->setVariable('cat', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->getValue('page')) {?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('brand')) {?>
                <li class="breadcrumb-item color-999">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->getValue('keyword')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->search, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->getValue('page')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } else { ?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->faq_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
            <?php if ((null !== ($_smarty_tpl->getValue('product') ?? null))) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                                <?php if ($_smarty_tpl->getValue('page')) {?>
                    <h1 id="pagetitle" class="switcher-title"><span data-page="<?php echo $_smarty_tpl->getValue('page')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>
                <?php } elseif ($_smarty_tpl->getValue('category')) {?>
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php } elseif ($_smarty_tpl->getValue('brand')) {?>
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php } elseif ($_smarty_tpl->getValue('keyword')) {?>
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->search, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php } elseif ($_smarty_tpl->getValue('product')) {?>
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php } else { ?>
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->faq_name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php }?>
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
										<?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->body) {?>
						<div class="text_before_items">
							<div>
								<?php echo $_smarty_tpl->getValue('page')->body;?>

							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->getValue('faqs')) {?>
						<div class="js_append faq-accordion__list accordion-type-1 grid-list grid-list--items-1 grid-list--no-gap">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faqs'), 'faq', false, NULL, 'active', array (
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('faq')->value) {
$foreach1DoElse = false;
?>
								<div class="js-infinite grid-list__item item-accordion-wrapper shadow-hovered shadow-no-border-hovered faq-accordion__wrapper">
									<div id="<?php echo $_smarty_tpl->getValue('faq')->id;?>
" class="faq-accordion__item">
										<div class="accordion-head stroke-theme-hover accordion-close collapsed" data-toggle="collapse" data-parent="#accordion-<?php echo $_smarty_tpl->getValue('faq')->id;?>
" href="#accordion-<?php echo $_smarty_tpl->getValue('faq')->id;?>
">
											<div class="faq-accordion__head">
												<span class="faq-accordion__name switcher-title font_weight--500 font_18"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('faq')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
											</div>
											<i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
										</div>
										<div id="accordion-<?php echo $_smarty_tpl->getValue('faq')->id;?>
" class="panel-collapse collapse" style="height: 0px;">
											<div class="accordion-body color_666">
												<div class="faq-accordion__preview-text  accordion-preview">
													<div class="faq-accordion__detail-text">
														<?php echo $_smarty_tpl->getValue('faq')->answer;?>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</div>
						<?php if ($_smarty_tpl->getValue('total_pages_num') > 1) {?>
							<div class="wrap_nav bottom_nav_wrapper">
								<div class="bottom_nav_wrapper nav-compact">
									<div class="bottom_nav">
										<?php if ($_smarty_tpl->getValue('current_page_num') < $_smarty_tpl->getValue('total_pages_num')) {?>
											<div class="ajax_load_btn">
												<span class="more_text_ajax btn btn-transparent">
													<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->load_more, ENT_QUOTES, 'UTF-8', true);?>

												</span>
											</div>
										<?php }?>
																				<?php $_smarty_tpl->renderSubTemplate('file:paginations/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
									</div>
								</div>
							</div>
						<?php }?>
					<?php } else { ?>
						<div class="alert alert-info">
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->no_faqs_found, ENT_QUOTES, 'UTF-8', true);?>

						</div>
					<?php }?>
					<div class="rounded-x grey-bg order-block__wrapper">
						<div class="order-info-block">
							<div class="line-block line-block--align-normal line-block--40">
								<div class="line-block__item flex-1">
									<h3><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->ask_question, ENT_QUOTES, 'UTF-8', true);?>
</h3>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->text_faq, ENT_QUOTES, 'UTF-8', true);?>

								</div>
								<div class="line-block__item order-info-btns">
									<div class="line-block line-block--align-normal line-block--12">
										<div class="line-block__item">
											<span class="btn btn-default btn-lg min_width--300" data-event="jqm" data-url="<?php echo $_smarty_tpl->getValue('lang_link');?>
contact/?tpl=feedback_modal" data-name="question">
												<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->write_message, ENT_QUOTES, 'UTF-8', true);?>
</span>
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
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach2DoElse = false;
?>
									<?php if ($_smarty_tpl->getValue('p')->menu_id == $_smarty_tpl->getValue('page')->menu_id) {?>
										<?php if ($_smarty_tpl->getValue('p')->visible) {?>
											<li class="<?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id == $_smarty_tpl->getValue('p')->id) {?>active<?php }?> <?php if ($_smarty_tpl->getValue('p')->subpages) {?>opened child<?php }?>">
												<span class="bg-opacity-theme-parent-hover link-wrapper font_short fill-theme-parent-all fill-dark-light">
													<a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p')->url;?>
" class="dark_link top-level-link rounded-x link-with-flag <?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id == $_smarty_tpl->getValue('p')->id) {?>link--active<?php }?>">
														<span data-page="<?php echo $_smarty_tpl->getValue('p')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')->header, ENT_QUOTES, 'UTF-8', true);?>
</span>
													</a>
												</span>
												<?php if ($_smarty_tpl->getValue('p')->subpages) {?>
													<div class="submenu-wrapper">
														<ul class="submenu">
															<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p')->subpages, 'p2');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p2')->value) {
$foreach3DoElse = false;
?>
																<li class="<?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id == $_smarty_tpl->getValue('p2')->id) {?>active<?php }?> <?php if ($_smarty_tpl->getValue('p2')->subpages) {?>opened child<?php }?>">
																	<span class="bg-opacity-theme-parent-hover link-wrapper font_short fill-theme-parent-all fill-dark-light">
																		<a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p2')->url;?>
" class="dark_link sublink rounded-x <?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id == $_smarty_tpl->getValue('p2')->id) {?>link--active<?php }?>">
																			<span data-page="<?php echo $_smarty_tpl->getValue('p2')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p2')->header, ENT_QUOTES, 'UTF-8', true);?>
</span>
																		</a>
																	</span>
																	<?php if ($_smarty_tpl->getValue('p2')->subpages) {?>
																		<div class="submenu-wrapper">
																			<ul class="submenu">
																				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p2')->subpages, 'p3');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p3')->value) {
$foreach4DoElse = false;
?>
																					<li class="<?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id == $_smarty_tpl->getValue('p3')->id) {?>active<?php }?>">
																						<span class="bg-opacity-theme-parent-hover link-wrapper font_short fill-theme-parent-all fill-dark-light">
																							<a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p3')->url;?>
" class="dark_link sublink rounded-x <?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id == $_smarty_tpl->getValue('p3')->id) {?>link--active<?php }?>">
																								<span data-page="<?php echo $_smarty_tpl->getValue('p3')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p3')->header, ENT_QUOTES, 'UTF-8', true);?>
</span>
																							</a>
																						</span>
																					</li>
																				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
																			</ul>
																		</div>
																	<?php }?>
																</li>
															<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
														</ul>
													</div>
												<?php }?>
											</li>
										<?php }?>
									<?php }?>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
