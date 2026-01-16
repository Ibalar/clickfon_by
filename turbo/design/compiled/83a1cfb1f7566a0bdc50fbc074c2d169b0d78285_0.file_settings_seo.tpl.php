<?php
/* Smarty version 5.4.2, created on 2025-11-15 18:32:49
  from 'file:settings_seo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69189d21bd2f49_89574899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a1cfb1f7566a0bdc50fbc074c2d169b0d78285' => 
    array (
      0 => 'settings_seo.tpl',
      1 => 1732461796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69189d21bd2f49_89574899 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->seo_automation_title, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_automation_title, ENT_QUOTES, 'UTF-8', true);?>
</h1>
</div>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'saved') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="js-fast-button">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->additional_templates_seo, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-5 col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->url_site, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="am_url" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->am_url, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_site_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="am_name" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->am_name, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_phone, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="am_phone" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->am_phone, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label">E-mail</div>
											<input name="am_email" class="form-control" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->am_email, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_automation, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<select name="seo_automation" class="selectpicker">
												<option value="on" <?php if ($_smarty_tpl->getValue('seo')->seo_automation == "on") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_default, ENT_QUOTES, 'UTF-8', true);?>
</option>
												<option value="off" <?php if ($_smarty_tpl->getValue('seo')->seo_automation == "off") {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_forcibly, ENT_QUOTES, 'UTF-8', true);?>
</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="mt-4">
									<div class="alert alert-primary alert-dismissible" role="alert">
										<div class="alert-message p-4">
											<h4 class="alert-heading"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->basic_templates, ENT_QUOTES, 'UTF-8', true);?>
</h4>
											<ul class="mb-0 ps-3">
												<li class="mb-1"><strong>{category} </strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_cat_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
												<li class="mb-1"><strong>{brand} </strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_brand_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
												<li class="mb-1"><strong>{product} </strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_product_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
												<li class="mb-1"><strong>{price} </strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_product_price, ENT_QUOTES, 'UTF-8', true);?>
</li>
												<li class="mb-1"><strong>{page} </strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->pages_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
												<li class="mb-1"><strong>{post} </strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_post_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary float-end">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0">Meta-title</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-5 col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="category_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="category_brand_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_brand_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="brand_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->brand_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="product_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->product_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="page_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->page_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blogs, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="post_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->post_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="category_article_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_article_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="article_meta_title" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->article_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="mt-4">
									<div class="alert alert-primary alert-dismissible" role="alert">
										<div class="alert-message p-4">
											<h4 class="alert-heading"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_caution, ENT_QUOTES, 'UTF-8', true);?>
</h4>
											<div class="mb-3">
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message1, ENT_QUOTES, 'UTF-8', true);?>

												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message2, ENT_QUOTES, 'UTF-8', true);?>
 <strong>{$brand}</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message3, ENT_QUOTES, 'UTF-8', true);?>

											</div>
											<div class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message4, ENT_QUOTES, 'UTF-8', true);?>
</strong> </div>
											<ul class="mb-0 ps-3">
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_brands, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_brands, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_products, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {product}, {price}, {category}, {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {page}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blogs, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {post}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {post}, {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary float-end">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0">Meta-keywords</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-5 col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="category_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="category_brand_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_brand_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="brand_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->brand_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="product_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->product_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="page_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->page_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blogs, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="post_meta_title_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->post_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="category_article_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_article_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<input name="article_meta_keywords" class="form-control mb-h" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->article_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="mt-4">
									<div class="alert alert-primary alert-dismissible" role="alert">
										<div class="alert-message p-4">
											<h4 class="alert-heading"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_caution, ENT_QUOTES, 'UTF-8', true);?>
</h4>
											<div class="mb-3">
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message1, ENT_QUOTES, 'UTF-8', true);?>

												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message2, ENT_QUOTES, 'UTF-8', true);?>
 <strong>{$brand}</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message3, ENT_QUOTES, 'UTF-8', true);?>

											</div>
											<div class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message4, ENT_QUOTES, 'UTF-8', true);?>
</strong> </div>
											<ul class="mb-0 ps-3">
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_brands, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_brands, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_products, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {product}, {price}, {category}, {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {page}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blogs, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {post}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {post}, {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary float-end">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0">Meta-description</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-5 col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="category_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="category_brand_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_brand_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="brand_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->brand_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="product_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->product_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="page_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->page_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blogs, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="post_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->post_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="category_article_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->category_article_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</div>
											<textarea name="article_meta_description" class="form-control turbo-textarea"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('seo')->article_meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="mt-4">
									<div class="alert alert-primary alert-dismissible" role="alert">
										<div class="alert-message p-4">
											<h4 class="alert-heading"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_caution, ENT_QUOTES, 'UTF-8', true);?>
</h4>
											<div class="mb-3">
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message1, ENT_QUOTES, 'UTF-8', true);?>

												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message2, ENT_QUOTES, 'UTF-8', true);?>
 <strong>{$brand}</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message3, ENT_QUOTES, 'UTF-8', true);?>

											</div>
											<div class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_patterns_message4, ENT_QUOTES, 'UTF-8', true);?>
</strong> </div>
											<ul class="mb-0 ps-3">
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->categories_brands, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_brands, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_products, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {product}, {price}, {category}, {brand}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {page}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blogs, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {post}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
												<li class="mb-1"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</strong> - {post}, {category}, {site_name}, {site_url}, {site_phone}, {site_email}</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary float-end">
									<i class="align-middle" data-feather="check"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form><?php }
}
