<?php
/* Smarty version 5.4.2, created on 2025-12-02 19:12:48
  from 'file:category_stats.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692f100024cf60_21162282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108883a7f58478b478c56a356d2d4d3e41e42a55' => 
    array (
      0 => 'category_stats.tpl',
      1 => 1732738130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692f100024cf60_21162282 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/108883a7f58478b478c56a356d2d4d3e41e42a55_0.file_category_stats.tpl.php',
    'uid' => '108883a7f58478b478c56a356d2d4d3e41e42a55',
    'call_name' => 'smarty_template_function_category_select_1632141608692f10001d7984_02822347',
  ),
  'categories_list_tree' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/108883a7f58478b478c56a356d2d4d3e41e42a55_0.file_category_stats.tpl.php',
    'uid' => '108883a7f58478b478c56a356d2d4d3e41e42a55',
    'call_name' => 'smarty_template_function_categories_list_tree_1632141608692f10001d7984_02822347',
  ),
));
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->category_stats_sales, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->category_stats_sales, ENT_QUOTES, 'UTF-8', true);?>

		<?php if ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->name) {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
		<?php if ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->name) {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
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
						<input type="hidden" name="module" value="CategoryStatsAdmin">
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
						<div class="col-md-4 col-lg-4 col-sm-12 mb-3">
							<select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('brand'=>null,'category'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('category')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
								
								<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
							<select onchange="location = this.value;" class="selectpicker">
								<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('brand'=>null), $_smarty_tpl);?>
" <?php if (!$_smarty_tpl->getValue('brand')) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_brands, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'b');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
?>
									<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('brand'=>$_smarty_tpl->getValue('b')->id), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->id == $_smarty_tpl->getValue('b')->id) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</select>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
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
			<div class="turbo-list ">
				<div class="turbo-list-head">
					<div class="turbo-list-heading turbo-list-categorystats-categories"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
					<div class="turbo-list-heading turbo-list-categorystats-total"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
</div>
					<div class="turbo-list-heading turbo-list-categorystats-setting"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
				</div>
				<div class="turbo-list-body">
					
					<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'categories_list_tree', array('categories'=>$_smarty_tpl->getValue('categories_list')), true);?>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="text-dark fw-bold text-end mt-3">
						<div class="h3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_total, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('total_price');?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
 <span class="text-secondary">(<?php echo $_smarty_tpl->getValue('total_amount');?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_units, ENT_QUOTES, 'UTF-8', true);?>
)</span></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php echo '<script'; ?>
>
	<?php if ($_smarty_tpl->getValue('category')) {?>
		var category = <?php echo $_smarty_tpl->getValue('category')->id;?>
;
	<?php }?>
	<?php if ($_smarty_tpl->getValue('brand')) {?>
		var brand = <?php echo $_smarty_tpl->getValue('brand')->id;?>
;
	<?php }?>
	<?php if ($_smarty_tpl->getValue('date_from')) {?>
		var date_from = '<?php echo $_smarty_tpl->getValue('date_from');?>
';
	<?php }?>
	<?php if ($_smarty_tpl->getValue('date_to')) {?>
		var date_to = '<?php echo $_smarty_tpl->getValue('date_to');?>
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

			$('button#js-start').click(function() {
				do_export();
			});

			function do_export(page) {
				page = typeof(page) != 'undefined' ? page : 1;
				category = typeof(category) != 'undefined' ? category : 0;
				brand = typeof(brand) != 'undefined' ? brand : 0;
				date_from = typeof(date_from) != 'undefined' ? date_from : 0;
				date_to = typeof(date_to) != 'undefined' ? date_to : 0;
				$.ajax({
					url: "ajax/export_stat_categories.php",
					data: {
						page: page,
						category: category,
						brand: brand,
						date_from: date_from,
						date_to: date_to
					},
					dataType: 'json',
					success: function() {
						window.location.href = 'files/export/export_stat_categories.csv';
					},
					error: function(xhr, status, errorThrown) {
						alert(errorThrown + '\n' + xhr.responseText + 'asdasd');
					}
				});
			}
		});
	<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_category_select_1632141608692f10001d7984_02822347 */
if (!function_exists('smarty_template_function_category_select_1632141608692f10001d7984_02822347')) {
function smarty_template_function_category_select_1632141608692f10001d7984_02822347(\Smarty\Template $_smarty_tpl,$params) {
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
										<option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('brand'=>null,'category'=>$_smarty_tpl->getValue('c')->id), $_smarty_tpl);?>
" <?php if ($_smarty_tpl->getValue('category') && $_GET['category'] == $_smarty_tpl->getValue('c')->id) {?>selected<?php }?>>
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
/*/ smarty_template_function_category_select_1632141608692f10001d7984_02822347 */
/* smarty_template_function_categories_list_tree_1632141608692f10001d7984_02822347 */
if (!function_exists('smarty_template_function_categories_list_tree_1632141608692f10001d7984_02822347')) {
function smarty_template_function_categories_list_tree_1632141608692f10001d7984_02822347(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'categories_list_tree','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach2DoElse = false;
?>
							<?php if ($_smarty_tpl->getValue('categories')) {?>
								<div class="turbo-list-body-item">
									<div class="turbo-list-row">
										<div class="turbo-list-boding turbo-list-categorystats-categories">
											<span class="text-body"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
											<div class="d-block d-md-none mt-1">
												<span class="fw-bold text-body">
													<span class="d-none d-sm-block"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
:</span>
													<span class="<?php if ($_smarty_tpl->getValue('category')->price) {?>text-primary<?php } else { ?>text-body<?php }?>">
														<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('category')->price,2,".",'');?>
 <?php echo $_smarty_tpl->getValue('currency')->sign;?>

													</span>
												</span>
											</div>
										</div>
										<div class="turbo-list-boding turbo-list-categorystats-total text-body">
											<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('category')->price,2,".",'');?>
 <?php echo $_smarty_tpl->getValue('currency')->sign;?>

										</div>
										<div class="turbo-list-boding turbo-list-categorystats-setting text-body">
											<?php echo $_smarty_tpl->getValue('category')->amount;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->reportstats_units, ENT_QUOTES, 'UTF-8', true);?>

										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
								<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'categories_list_tree', array('categories'=>$_smarty_tpl->getValue('category')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

							<?php }?>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<?php
}}
/*/ smarty_template_function_categories_list_tree_1632141608692f10001d7984_02822347 */
}
