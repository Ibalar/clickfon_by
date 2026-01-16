<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:49:31
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691779bb265457_28101958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd76e4f6b573d131a4f7f3bd37eb9a8c55b73e21' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1697695386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691779bb265457_28101958 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_dashboard, false, 32);?>

<h1 class="mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_dashboard, ENT_QUOTES, 'UTF-8', true);?>
</h3>

<div class="row gx-2">
	<div class="col-12 col-md-6 col-xxl d-flex">
		<div class="card flex-fill">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_orders, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="align-middle" data-feather="shopping-cart"></i>
						</div>
					</div>
				</div>
				<h2 class="mt-0 mb-1"><?php echo $_smarty_tpl->getValue('new_orders_counter');?>
</h2>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xxl d-flex">
		<div class="card flex-fill">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="align-middle" data-feather="message-square"></i>
						</div>
					</div>
				</div>
				<h2 class="mt-0 mb-1"><?php echo $_smarty_tpl->getValue('new_comments_counter');?>
</h2>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xxl d-flex">
		<div class="card flex-fill">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feedback, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="align-middle" data-feather="mail"></i>
						</div>
					</div>
				</div>
				<h2 class="mt-0 mb-1"><?php echo $_smarty_tpl->getValue('new_feedbacks_counter');?>
</h2>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xxl d-flex">
		<div class="card flex-fill">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_subscribes, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="align-middle" data-feather="at-sign"></i>
						</div>
					</div>
				</div>
				<h2 class="mt-0 mb-1"><?php echo $_smarty_tpl->getValue('new_subscribes_counter');?>
</h2>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xxl d-flex d-none d-xxl-flex">
		<div class="card flex-fill">
			<div class="card-body">
				<div class="row">
					<div class="col mt-0">
						<h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_callback, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					</div>
					<div class="col-auto">
						<div class="stat text-primary">
							<i class="align-middle" data-feather="phone"></i>
						</div>
					</div>
				</div>
				<h2 class="mt-0 mb-1"><?php echo $_smarty_tpl->getValue('new_callbacks_counter');?>
</h2>
			</div>
		</div>
	</div>
</div>

<div class="row gx-2">
	<div class="col-12 col-lg-6 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-down"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stats_orders, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div id="containerStat"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-down"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->sales_statistics, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div id="containerSales"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row gx-2">
	<div class="col-12 col-lg-6 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-down"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stat_orders_number, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div id="containerOrders" class="chart mb-3"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-down"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stat_orders_amount, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div id="containerAmount" class="chart mb-3"></div>
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


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"highcharts",'priority'=>99,'include'=>array("turbo/design/js/highcharts/highcharts.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"highcharts",'priority'=>99,'include'=>array("turbo/design/js/highcharts/highcharts.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
	
		<?php echo '<script'; ?>
>
			var chart;

			$(function() {
				var options = {
					exporting: {
						chartOptions: {
							plotOptions: {
								series: {
									dataLabels: {
										enabled: true
									}
								}
							}
						},
						fallbackToExportServer: false
					},
					chart: {
						zoomType: 'x',
						renderTo: 'containerStat',
						defaultSeriesType: 'area',
						type: "line"
					},
					title: {
						text: ''
					},
					xAxis: {
						type: 'datetime',
						minRange: 7 * 24 * 3600000,
						maxZoom: 7 * 24 * 3600000,
						gridLineWidth: 1,
						gridLineColor: '#19222d',
						tickColor: '#19222d',
						ordinal: true,
						showEmpty: false
					},
					yAxis: {
						title: {
							text: '<?php echo $_smarty_tpl->getValue('currency')->name;?>
'
						},
						gridLineColor: '#19222d'
					},
					plotOptions: {
						line: {
							dataLabels: {
								enabled: true
							},
							enableMouseTracking: true,
							connectNulls: false
						},
						area: {
							marker: {
								enabled: false
							},
						},
						series: {
							dataLabels: {
								color: '#fff',
							},
						}
					},
					series: []
				};
				$.get('ajax/stat/stat.php', function(data) {
					var series = {
						data: []
					};
					var minDate = Date.UTC(data[0].year, data[0].month - 1, data[0].day),
						maxDate = Date.UTC(data[data.length - 1].year, data[data.length - 1].month - 1, data[data.length - 1].day);
					var newDates = [],
						currentDate = minDate,
						d;
					while (currentDate <= maxDate) {
						d = new Date(currentDate);
						newDates.push((d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear());
						currentDate += (24 * 60 * 60 * 1000);
					}
					series.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stats_orders_amount, ENT_QUOTES, 'UTF-8', true);?>
' + '<?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					$.each(data, function(lineNo, line) {
						series.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.y)]);
					});
					//
					options.series.push(series);
					var chart = new Highcharts.Chart(options);
				});
			});

			$(function() {
				var options = {
					chart: {
						renderTo: 'containerSales',
						defaultSeriesType: 'column',
						zoomType: 'x'
					},
					title: {
						text: ''
					},
					subtitle: {
						text: ''
					},
					xAxis: {
						type: 'datetime'
					},
					yAxis: {
						title: {
							text: '<?php echo $_smarty_tpl->getValue('currency')->name;?>
'
						}
					},
					yAxis: {
						gridLineColor: '#19222d'
					},
					plotOptions: {
						column: {
							borderWidth: 0,
							enableMouseTracking: true
						}
					},
					series: []
				};
				$.get('ajax/stat/stat_sales.php', function(data) {
					var series = { data: [] };
					var series0 = { data: [] };
					var series1 = { data: [] };
					series.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->sum_of_all_orders, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					series0.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->amount_unpaid, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					series1.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->amount_paid, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					d = new Date();
					for (i = 0; i < 31; i++) {
						series.data.push([Date.UTC(1900 + d.getYear(), d.getMonth(), d.getDate()), 0]);
						series0.data.push([Date.UTC(1900 + d.getYear(), d.getMonth(), d.getDate()), 0]);
						series1.data.push([Date.UTC(1900 + d.getYear(), d.getMonth(), d.getDate()), 0]);
					}
					$.each(data, function(lineNo, line) {
						series.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.x)]);
						series0.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.y)]);
						series1.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.z)]);
					});
					options.series.push(series);
					options.series.push(series0);
					options.series.push(series1);
					console.log(options.series);
					var chart = new Highcharts.Chart(options);
				});
			});

			Highcharts.theme = {
				colors: ['#3b7ddd', '#fcb92c', '#1cbb8c', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
				chart: {
					backgroundColor: null,
					style: {
						fontFamily: 'Inter'
					}
				},

				tooltip: {
					shadow: false
				},
				legend: {
					itemStyle: {
						fontWeight: 'normal',
						fontSize: '13px',
						color: '#a7abb1'
					},
					itemHoverStyle: {
						color: '#a7abb1'
					},
					itemHiddenStyle: {
						color: '#5d6670'
					}
				},
				xAxis: {
					gridLineWidth: 1,
					gridLineColor: '#19222d',
					tickColor: '#19222d',
					lineColor: '#19222d',
					labels: {
						style: {
							fontSize: '12px',
							color: '#a7abb1',
						}
					}
				},
				yAxis: {
					labels: {
						style: {
							color: "#a7abb1"
						}
					},
					title: {
						style: {
							fontSize: '12px',
							textTransform: 'none',
							color: '#a7abb1'
						}
					}

				},
				plotOptions: {
					candlestick: {
						lineColor: '#404048'
					}
				},
				background2: '#f0f0ea'
			};

			var highchartsOptions = Highcharts.setOptions(Highcharts.theme);
			google.load("visualization", "1", {packages:["corechart"]});
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
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach0DoElse = false;
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
					legend: { position: "bottom", textStyle: {fontName: 'Inter', color: '#a7abb1'}},
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
					legend: { position: "bottom", textStyle: {fontName: 'Inter', color: '#a7abb1'}},
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
		<?php echo '</script'; ?>
>
	
<?php } else { ?>
	
		<?php echo '<script'; ?>
>
			var chart;

			$(function() {
				var options = {
					exporting: {
						chartOptions: {
							plotOptions: {
								series: {
									dataLabels: {
										enabled: true
									}
								}
							}
						},
						fallbackToExportServer: false
					},
					chart: {
						zoomType: 'x',
						renderTo: 'containerStat',
						defaultSeriesType: 'area',
						type: "line"
					},
					title: {
						text: ''
					},
					xAxis: {
						type: 'datetime',
						minRange: 7 * 24 * 3600000,
						maxZoom: 7 * 24 * 3600000,
						gridLineWidth: 1,
						ordinal: true,
						showEmpty: false
					},
					yAxis: {
						title: {
							text: '<?php echo $_smarty_tpl->getValue('currency')->name;?>
'
						}
					},
					plotOptions: {
						line: {
							dataLabels: {
								enabled: true
							},
							enableMouseTracking: true,
							connectNulls: false
						},
						area: {
							marker: {
								enabled: false
							},
						}
					},
					series: []
				};
				$.get('ajax/stat/stat.php', function(data) {
					var series = {
						data: []
					};
					var minDate = Date.UTC(data[0].year, data[0].month - 1, data[0].day),
						maxDate = Date.UTC(data[data.length - 1].year, data[data.length - 1].month - 1, data[data.length - 1].day);
					var newDates = [],
						currentDate = minDate,
						d;
					while (currentDate <= maxDate) {
						d = new Date(currentDate);
						newDates.push((d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear());
						currentDate += (24 * 60 * 60 * 1000);
					}
					series.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stats_orders_amount, ENT_QUOTES, 'UTF-8', true);?>
' + '<?php echo $_smarty_tpl->getValue('currency')->sign;?>
';

					$.each(data, function(lineNo, line) {
						series.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.y)]);
					});

					options.series.push(series);

					var chart = new Highcharts.Chart(options);
				});
			});

			$(function() {
				var options = {
					chart: {
						renderTo: 'containerSales',
						defaultSeriesType: 'column',
						zoomType: 'x'
					},
					title: {
						text: ''
					},
					subtitle: {
						text: ''
					},
					xAxis: {
						type: 'datetime'
					},
					yAxis: {
						title: {
							text: '<?php echo $_smarty_tpl->getValue('currency')->name;?>
'
						}
					},
					plotOptions: {
						column: {
							borderWidth: 0,
							enableMouseTracking: true
						}
					},
					series: []
				};
				$.get('ajax/stat/stat_sales.php', function(data) {
					var series = { data: [] };
					var series0 = { data: [] };
					var series1 = { data: [] };
					series.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->sum_of_all_orders, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					series0.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->amount_unpaid, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					series1.name = '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->amount_paid, ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->getValue('currency')->sign;?>
';
					d = new Date();
					for (i = 0; i < 31; i++) {
						series.data.push([Date.UTC(1900 + d.getYear(), d.getMonth(), d.getDate()), 0]);
						series0.data.push([Date.UTC(1900 + d.getYear(), d.getMonth(), d.getDate()), 0]);
						series1.data.push([Date.UTC(1900 + d.getYear(), d.getMonth(), d.getDate()), 0]);
					}
					$.each(data, function(lineNo, line) {
						series.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.x)]);
						series0.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.y)]);
						series1.data.push([Date.UTC(line.year, line.month - 1, line.day), parseInt(line.z)]);
					});
					options.series.push(series);
					options.series.push(series0);
					options.series.push(series1);
					console.log(options.series);

					var chart = new Highcharts.Chart(options);
				});
			});

			Highcharts.theme = {
				colors: ['#3b7ddd', '#fcb92c', '#1cbb8c', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
				chart: {
					backgroundColor: null,
					style: {
						fontFamily: 'Inter'
					}
				},
				tooltip: {
					shadow: false
				},
				legend: {
					itemStyle: {
						fontWeight: 'normal',
						fontSize: '13px',
						color: '#6c757d'
					},
					itemHoverStyle: {
						color: '#6c757d'
					},
				},
				xAxis: {
					gridLineWidth: 1,
					labels: {
						style: {
							fontSize: '12px',
							color: '#6c757d'
						}
					}
				},
				yAxis: {
					labels: {
						style: {
							color: "#6c757d"
						}
					},
					title: {
						style: {
							fontSize: '12px',
							textTransform: 'none',
							color: '#6c757d'
						}
					}
				},
				plotOptions: {
					candlestick: {
						lineColor: '#404048'
					}
				},
				background2: '#f0f0ea'
			};
			var highchartsOptions = Highcharts.setOptions(Highcharts.theme);

			google.load("visualization", "1", {packages:["corechart"]});

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
					legend: { position: "bottom", textStyle: {fontName: 'Inter', color: '#6c757d'}},
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
		<?php echo '</script'; ?>
>
	
<?php }
}
}
