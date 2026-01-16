<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:50:42
  from 'file:stats.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69177a02b8e807_85247599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034e0b637d24b5b172bdeeba5c404fc30cf1ebf7' => 
    array (
      0 => 'stats.tpl',
      1 => 1732657022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69177a02b8e807_85247599 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_stats, false, 32);?>

<h1 class="mb-3">
	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_stats, ENT_QUOTES, 'UTF-8', true);?>

</h1>

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
	<div class="collapse-card boxed-sorting">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form method="get">
						<input type="hidden" name="module" value="StatsAdmin">
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
							<div class="col-sm-12 col-md-4 col-lg-4 mb-3">
								<button class="btn btn-primary" type="submit"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3 mb-md-0">
							<select class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option <?php if (!(null !== ($_GET['status'] ?? null))) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('status'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_all_statuses, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'StatsAdmin','status'=>1,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 1) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'StatsAdmin','status'=>2,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 2) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'StatsAdmin','status'=>3,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 3) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'StatsAdmin','status'=>4,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('status') == 4) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-12 mb-3 mb-md-0">
							<select class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option <?php if (!$_smarty_tpl->getValue('label')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('label'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_all_orders, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'l');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach0DoElse = false;
?>
									<option value="<?php ob_start();
echo $_smarty_tpl->getValue('l')->id;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('keyword'=>null,'id'=>null,'page'=>null,'from_date'=>null,'to_date'=>null,'label'=>$_prefixVariable1), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('label') && $_smarty_tpl->getValue('label')->id == $_smarty_tpl->getValue('l')->id) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('l')->name;?>
</option>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 mb-3 mb-md-0">
							<select onchange="location = this.value;" data-live-search="true" data-size="15" class="selectpicker">
								<option <?php if ($_smarty_tpl->getValue('date_filter') == 'all') {?>selected<?php }?> value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('date_filter'=>'all','date_to'=>null,'date_from'=>null,'filter_check'=>null), $_smarty_tpl);?>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row gx-2">
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-up"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stat_orders_amount, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div id="containerAmount" class="chart chart-xl"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-up"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stat_orders_number, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div id="containerOrders" class="chart chart-xl"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"loader",'priority'=>99,'include'=>array("turbo/design/js/loader.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"loader",'priority'=>99,'include'=>array("turbo/design/js/loader.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>



	<?php echo '<script'; ?>
>
	$(window).on("load", function() {
		// Flatpickr
		flatpickr(".flatpickr", {
			dateFormat: "d.m.Y",
			locale: "<?php if ($_smarty_tpl->getValue('settings')->lang == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('settings')->lang;
}?>"
		});
	});
	<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
	
		<?php echo '<script'; ?>
>
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);

			function drawChart() {
				var serie = [];
				serie.push(['<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_date, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
']); 
				
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stat'), 's');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach1DoElse = false;
?>
						serie.push(['<?php echo $_smarty_tpl->getValue('s')['title'];?>
', <?php echo $_smarty_tpl->getValue('s')['new'];?>
, <?php echo $_smarty_tpl->getValue('s')['confirm'];?>
, <?php echo $_smarty_tpl->getValue('s')['complite'];?>
, <?php echo $_smarty_tpl->getValue('s')['delete'];?>
]);
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				
				var options = {
					legend: {position: "bottom", textStyle: {fontName: 'Inter', color: '#a7abb1'}},
					bar: {groupWidth: '90%'},
					colors: ['#3b7ddd', '#fcb92c', '#1cbb8c', '#dc3545'],
					hAxis: {textStyle: {fontName: 'Inter', color: '#a7abb1'}},
					vAxis: {minValue: 0, textStyle: {fontName: 'Inter', fontSize: 11, color: '#a7abb1'}, gridlines: {color: '#19222d'}, baselineColor:'#19222d'},
					tooltip: {textStyle: {fontName: 'Inter', color: '#6c757d'}},
					backgroundColor: '#222e3c',
					isStacked: true
				};
				var chart = new google.visualization.ColumnChart(document.getElementById('containerAmount'));
				chart.draw(google.visualization.arrayToDataTable(serie), options);
			}

			google.setOnLoadCallback(drawChartOrders);

			function drawChartOrders() {
				var serie = [];
				serie.push(['<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_date, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
']); 
				
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stat_orders'), 's');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach2DoElse = false;
?>
						serie.push(['<?php echo $_smarty_tpl->getValue('s')['title'];?>
', <?php echo $_smarty_tpl->getValue('s')['new'];?>
, <?php echo $_smarty_tpl->getValue('s')['confirm'];?>
, <?php echo $_smarty_tpl->getValue('s')['complite'];?>
, <?php echo $_smarty_tpl->getValue('s')['delete'];?>
]); 
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				
				var options = {
					legend: {position: "bottom", textStyle: {fontName: 'Inter', color: '#a7abb1'}},
					bar: {groupWidth: '90%'},
					colors: ['#3b7ddd', '#fcb92c', '#1cbb8c', '#dc3545'],
					hAxis: {textStyle: {fontName: 'Inter', color: '#a7abb1'}},
					vAxis: {minValue: 0, textStyle: {fontName: 'Inter', fontSize: 11, color: '#a7abb1'}, gridlines: {color: '#19222d'}, baselineColor:'#19222d'},
					tooltip: {textStyle: {fontName: 'Inter', color: '#6c757d'}},
					backgroundColor: '#222e3c',
					isStacked: true
				};
				var chart = new google.visualization.ColumnChart(document.getElementById('containerOrders'));
				chart.draw(google.visualization.arrayToDataTable(serie), options);
			}
		<?php echo '</script'; ?>
>
	
<?php } else { ?>
	
		<?php echo '<script'; ?>
>
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);

			function drawChart() {
				var serie = [];
				serie.push(['<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_date, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
']); 
				
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stat'), 's');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach3DoElse = false;
?>
						serie.push(['<?php echo $_smarty_tpl->getValue('s')['title'];?>
', <?php echo $_smarty_tpl->getValue('s')['new'];?>
, <?php echo $_smarty_tpl->getValue('s')['confirm'];?>
, <?php echo $_smarty_tpl->getValue('s')['complite'];?>
, <?php echo $_smarty_tpl->getValue('s')['delete'];?>
]);
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				
				var options = {
					legend: { position: "bottom", textStyle: {fontName: 'Inter', color: '#6c757d'}},
					bar: {groupWidth: '90%'},
					colors: ['#3b7ddd', '#fcb92c', '#1cbb8c', '#dc3545'],
					hAxis: {textStyle: {fontName: 'Inter', color: '#6c757d'}},
					vAxis: {minValue: 0, textStyle: {fontName: 'Inter', fontSize: 11, color: '#6c757d'}},
					tooltip: {textStyle: {fontName: 'Inter', color: '#6c757d'}},
					backgroundColor: '#fff',
					isStacked: true
				};
				var chart = new google.visualization.ColumnChart(document.getElementById('containerAmount'));
				chart.draw(google.visualization.arrayToDataTable(serie), options);
			}

			google.setOnLoadCallback(drawChartOrders);

			function drawChartOrders() {
				var serie = [];
				serie.push(['<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_date, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
']); 
				
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stat_orders'), 's');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach4DoElse = false;
?>
						serie.push(['<?php echo $_smarty_tpl->getValue('s')['title'];?>
', <?php echo $_smarty_tpl->getValue('s')['new'];?>
, <?php echo $_smarty_tpl->getValue('s')['confirm'];?>
, <?php echo $_smarty_tpl->getValue('s')['complite'];?>
, <?php echo $_smarty_tpl->getValue('s')['delete'];?>
]); 
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				
				var options = {
					legend: { position: "bottom", textStyle: {fontName: 'Inter', color: '#6c757d'}},
					bar: {groupWidth: '90%'},
					colors: ['#3b7ddd', '#fcb92c', '#1cbb8c', '#dc3545'],
					hAxis: {textStyle: {fontName: 'Inter', color: '#6c757d'}},
					vAxis: {minValue: 0, textStyle: {fontName: 'Inter', fontSize: 11, color: '#6c757d'}},
					tooltip: {textStyle: {fontName: 'Inter', color: '#6c757d'}},
					backgroundColor: '#fff',
					isStacked: true
				};
				var chart = new google.visualization.ColumnChart(document.getElementById('containerOrders'));
				chart.draw(google.visualization.arrayToDataTable(serie), options);
			}
		<?php echo '</script'; ?>
>
	
<?php }
}
}
