<?php
/* Smarty version 5.4.2, created on 2025-12-02 19:12:53
  from 'file:reportstats.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692f10052bcf53_43334119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92b50ac46fe4547da41d42a99b8dacbfdb5fc62' => 
    array (
      0 => 'reportstats.tpl',
      1 => 1732739582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:pagination.tpl' => 1,
  ),
))) {
function content_692f10052bcf53_43334119 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/b92b50ac46fe4547da41d42a99b8dacbfdb5fc62_0.file_reportstats.tpl.php',
    'uid' => 'b92b50ac46fe4547da41d42a99b8dacbfdb5fc62',
    'call_name' => 'smarty_template_function_category_select_103314720692f10052451d9_90993906',
  ),
));
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->reportstats_orders, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_orders, ENT_QUOTES, 'UTF-8', true);?>
</h1>
</div>

<div class="card">
	<div class="card-header d-block d-lg-none">
		<div class="card-actions float-end">
			<div class="position-relative collapse-icon">
				<a href="javascript:;" class="collapse-chevron">
					<i class="align-middle" data-feather="chevron-down"></i>
				</a>
			</div>
		</div>
		<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_filter, ENT_QUOTES, 'UTF-8', true);?>
</h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-12">
				<div class="collapse-card boxed-sorting">
					<form method="get">
						<input type="hidden" name="module" value="ReportStatsAdmin">
						<input type="hidden" name="date_filter" value="">
						<div class="row">
							<div class="col-sm-12 col-md-4 col-lg-4">
								<div class="input-group mb-3">
									<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from, ENT_QUOTES, 'UTF-8', true);?>
</span>
									<input type="text" class="flatpickr form-control" name="date_from" value="<?php echo $_smarty_tpl->getValue('date_from');?>
" autocomplete="off">
									<span class="input-group-text"><i class="align-middle" data-feather="calendar"></i></span>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4">
								<div class="input-group mb-3">
									<span class="input-group-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_to, ENT_QUOTES, 'UTF-8', true);?>
</span>
									<input type="text" class="flatpickr form-control" name="date_to" value="<?php echo $_smarty_tpl->getValue('date_to');?>
" autocomplete="off">
									<span class="input-group-text"><i class="align-middle" data-feather="calendar"></i></span>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 mb-3 d-grid d-sm-block">
								<button class="btn btn-primary" type="submit"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('category')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
								
								<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

							</select>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3">
							<select class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option <?php if (!(null !== ($_GET['status'] ?? null))) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('status'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_all_statuses, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ReportStatsAdmin','status'=>1,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 1) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ReportStatsAdmin','status'=>2,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 2) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ReportStatsAdmin','status'=>3,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 3) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ReportStatsAdmin','status'=>4,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 4) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 mb-3">
							<select onchange="location = this.value;" data-live-search="true" data-size="15" class="selectpicker">
								<option <?php if (!$_smarty_tpl->getValue('date_filter')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>null,'date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_all_orders, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'today') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'today','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_today, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'this_week') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'this_week','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_this_week, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'this_month') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'this_month','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_this_month, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'this_year') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'this_year','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_this_year, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'yesterday') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'yesterday','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_yesterday, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'last_week') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'last_week','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_last_week, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'last_month') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'last_month','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_last_month, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'last_year') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'last_year','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_last_year, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'last_24hour') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'last_24hour','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_last_24, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'last_7day') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'last_7day','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_last_7_days, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'last_30day') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'last_30day','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_last_30_days, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-12 mb-3 d-grid d-sm-block">
							<button id="js-start" type="submit" class="btn btn-primary float-md-end">
								<i class="align-middle" data-feather="download"></i>
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export, ENT_QUOTES, 'UTF-8', true);?>

							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<form method="post" class="js-form-list">
			<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
			<?php $_smarty_tpl->assign('total_summ', 0, false, NULL);?>
			<?php $_smarty_tpl->assign('total_amount', 0, false, NULL);?>
			<div class="turbo-list">
				<div class="turbo-list-head">
					<div class="turbo-list-heading turbo-list-reportstats-categories"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
					<div class="turbo-list-heading turbo-list-reportstats-products"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
					<div class="turbo-list-heading turbo-list-reportstats-total">
						<?php if ($_smarty_tpl->getValue('sort_prod') == 'price') {?>
							<?php $_smarty_tpl->assign('sort', 'price-in', false, NULL);?>
						<?php } else { ?>
							<?php $_smarty_tpl->assign('sort', 'price', false, NULL);?>
						<?php }?>
						<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
</span>
						<a href="<?php if ($_smarty_tpl->getValue('sort_prod') == 'price') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort_prod'=>'price_in'), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort_prod'=>'price'), $_smarty_tpl);
}?>" <?php if ($_smarty_tpl->getValue('sort_prod') == 'price' || $_smarty_tpl->getValue('sort_prod') == 'price_in') {?>class="<?php echo $_smarty_tpl->getValue('sort');?>
 selected" <?php }?>><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), (int) 0, $_smarty_current_dir);
?></a>
					</div>
					<div class="turbo-list-heading turbo-list-reportstats-setting">
						<?php if ($_smarty_tpl->getValue('sort_prod') == 'amount') {?>
							<?php $_smarty_tpl->assign('sort', 'amount-in', false, NULL);?>
						<?php } else { ?>
							<?php $_smarty_tpl->assign('sort', 'amount', false, NULL);?>
						<?php }?>
						<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
</span>
						<a href="<?php if ($_smarty_tpl->getValue('sort_prod') == 'amount') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort_prod'=>'amount_in'), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('sort_prod'=>'amount'), $_smarty_tpl);
}?>" <?php if ($_smarty_tpl->getValue('sort_prod') == 'amount' || $_smarty_tpl->getValue('sort_prod') == 'amount_in') {?>class="<?php echo $_smarty_tpl->getValue('sort');?>
 selected" <?php }?>><?php $_smarty_tpl->renderSubTemplate('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), (int) 0, $_smarty_current_dir);
?></a>
					</div>
				</div>
				<div class="turbo-list-body">
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('report_stat_purchases'), 'purchase');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach1DoElse = false;
?>
						<?php $_smarty_tpl->assign('total_summ', $_smarty_tpl->getValue('total_summ')+$_smarty_tpl->getValue('purchase')->sum_price, false, NULL);?>
						<?php $_smarty_tpl->assign('total_amount', $_smarty_tpl->getValue('total_amount')+$_smarty_tpl->getValue('purchase')->amount, false, NULL);?>
						<div class="turbo-list-body-item">
							<div class="turbo-list-row">
								<div class="turbo-list-boding turbo-list-reportstats-categories text-body">
									<?php if ($_smarty_tpl->getValue('purchase')->category) {?> 	
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('purchase')->category->path, 'c');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach2DoElse = false;
?>
											<?php echo $_smarty_tpl->getValue('c')->name;?>
/
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									<?php }?>
								</div>
								<div class="turbo-list-boding turbo-list-reportstats-products">
									<a title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product_name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ReportStatsProdAdmin','id'=>$_smarty_tpl->getValue('purchase')->product_id,'return'=>$_SERVER['REQUEST_URI']), $_smarty_tpl);?>
" class="fw-bold text-body text-decoration-none"><?php echo $_smarty_tpl->getValue('purchase')->product_name;?>
</a>
									<?php if ($_smarty_tpl->getValue('purchase')->variant_color || $_smarty_tpl->getValue('purchase')->variant_name) {?><div class="mb-0"><span class="text-body"><?php if ($_smarty_tpl->getValue('purchase')->variant_color) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant_color, ENT_QUOTES, 'UTF-8', true);?>
 / <?php }?> <?php echo $_smarty_tpl->getValue('purchase')->variant_name;?>
</span></div><?php }?>
									<div class="d-block d-md-none mt-1">
										<span class="fw-bold text-body">
											<span class="d-none d-sm-block"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
:</span>
											<span class="text-primary">
												<?php echo $_smarty_tpl->getValue('purchase')->sum_price;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

											</span>
										</span>
									</div>
								</div>
								<div class="turbo-list-boding turbo-list-reportstats-total text-body">
									<?php echo $_smarty_tpl->getValue('purchase')->sum_price;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

								</div>

								<div class="turbo-list-reportstats-setting text-body">
									<?php echo $_smarty_tpl->getValue('purchase')->amount;?>
 <?php if ((null !== ($_smarty_tpl->getValue('purchase')->units ?? null))) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->getValue('settings')->units;
}?>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="text-dark fw-bold text-end mt-3">
						<div class="h3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_total, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo sprintf('%.2f',$_smarty_tpl->getValue('total_summ'));?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
 <span class="text-secondary">(<?php echo $_smarty_tpl->getValue('total_amount');?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_units, ENT_QUOTES, 'UTF-8', true);?>
)</span></div>
					</div>
				</div>
			</div>
		</form>
		<div class="col-12">
			<?php $_smarty_tpl->renderSubTemplate('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
	<?php if ($_smarty_tpl->getValue('date_filter')) {?>
		var date_filter = '<?php echo $_smarty_tpl->getValue('date_filter');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('date_from')) {?>
		var date_from = '<?php echo $_smarty_tpl->getValue('date_from');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('date_to')) {?>
		var date_to = '<?php echo $_smarty_tpl->getValue('date_to');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('status')) {?>
		var status = '<?php echo $_smarty_tpl->getValue('status');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('sort_prod')) {?>
		var sort_prod = '<?php echo $_smarty_tpl->getValue('sort_prod');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('page')) {?>
		var page = '<?php echo $_smarty_tpl->getValue('page');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('category')) {?>
		var category = '<?php echo $_smarty_tpl->getValue('category');?>
';
	<?php }
echo '</script'; ?>
>


	<?php echo '<script'; ?>
>
		$(window).on("load", function() {

			flatpickr(".flatpickr", {
				dateFormat: "d.m.Y",
				locale: "<?php if ($_smarty_tpl->getValue('settings')->lang == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('settings')->lang;
}?>"
			});

			$('#js-start').click(function() {
				do_export();
			});

			function do_export(page) {
				page = typeof(page) != 'undefined' ? page : 1;
				category = typeof(category) != 'undefined' ? category : 0;
				date_filter = typeof(date_filter) != 'undefined' ? date_filter : 0;
				date_from = typeof(date_from) != 'undefined' ? date_from : 0;
				date_to = typeof(date_to) != 'undefined' ? date_to : 0;
				status = typeof(status) != 'undefined' ? status : 0;
				sort_prod = typeof(sort_prod) != 'undefined' ? sort_prod : 0;
				$.ajax({
					url: "ajax/export_stat_products.php",
					data: {
						page: page,
						category: category,
						date_filter: date_filter,
						date_from: date_from,
						date_to: date_to,
						status: status,
						sort_prod: sort_prod
					},
					dataType: 'json',
					success: function() {
						window.location.href = 'files/export/export_stat_products.csv';
					},
					error: function(xhr, status, errorThrown) {
						alert(errorThrown + '\n' + xhr.responseText);
					}
				});
			}
		});
	<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_category_select_103314720692f10052451d9_90993906 */
if (!function_exists('smarty_template_function_category_select_103314720692f10052451d9_90993906')) {
function smarty_template_function_category_select_103314720692f10052451d9_90993906(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'category_select','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
										<option value="<?php ob_start();
echo $_smarty_tpl->getValue('c')->id;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'brand_id'=>null,'page'=>null,'category_id'=>$_prefixVariable1), $_smarty_tpl);?>
" <?php if ((null !== ($_GET['category_id'] ?? null)) && $_GET['category_id'] == $_smarty_tpl->getValue('c')->id) {?>selected<?php }?>>
											<?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('c')->name, ENT_QUOTES, 'UTF-8', true);?>

										</option>
										<?php if ($_smarty_tpl->getValue('c')->subcategories) {?>
											<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('c')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

										<?php }?>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<?php
}}
/*/ smarty_template_function_category_select_103314720692f10052451d9_90993906 */
}
