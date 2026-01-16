<?php
/* Smarty version 5.4.2, created on 2025-11-20 23:15:12
  from 'file:export.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691f76d0400c16_87979918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06aa078b76ef1ece9663163b0ed807b6f5e2f8f0' => 
    array (
      0 => 'export.tpl',
      1 => 1733359190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691f76d0400c16_87979918 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'categories_tree' => 
  array (
    'compiled_filepath' => '/home/clickfon/public_html/turbo/design/compiled/06aa078b76ef1ece9663163b0ed807b6f5e2f8f0_0.file_export.tpl.php',
    'uid' => '06aa078b76ef1ece9663163b0ed807b6f5e2f8f0',
    'call_name' => 'smarty_template_function_categories_tree_544992873691f76d03ceb92_07382829',
  ),
));
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->export_products, false, 32);?>

<h1 class="mb-3">
	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->export_products, ENT_QUOTES, 'UTF-8', true);?>

</h1>

<?php if ($_smarty_tpl->getValue('categories') || $_smarty_tpl->getValue('brands')) {?>
	<div id="success-export" class="row" style="display: none">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export_successful, ENT_QUOTES, 'UTF-8', true);?>
!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>

	<?php if ($_smarty_tpl->getValue('message_error')) {?>
		<div class="row">
			<div class="col-12">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
						<?php if ($_smarty_tpl->getValue('message_error') == 'no_permission') {?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('export_files_dir');?>

						<?php } else { ?>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

						<?php }?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

	<?php if (!$_smarty_tpl->getValue('message_error')) {?>
		<div class="alert alert-primary alert-dismissible" role="alert">
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			<div class="alert-message">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->export_message, ENT_QUOTES, 'UTF-8', true);?>

			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<div class="card-actions float-end">
					<div class="d-block d-lg-none position-relative collapse-icon">
						<a href="javascript:;" class="collapse-chevron">
							<i class="align-middle" data-feather="chevron-up"></i>
						</a>
					</div>
				</div>
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				<div class="position-relative">
					<div class="progress position-absolute w-100 mt-2" style="display: none;">
						<div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
					</div>
				</div>
			</div>
			<div class="collapse-card">
				<div id="js-start" class="card-body">
					<div class="row mb-3">
						<div class="col-md-6 col-lg-4 col-sm-12 mb-3 mb-md-0">
							<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export, ENT_QUOTES, 'UTF-8', true);?>
</div>
							<select class="selectpicker js-type-export">
								<option value="all_products"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_all_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="category_products"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="brands_products"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from_brand, ENT_QUOTES, 'UTF-8', true);?>
</option>
							</select>
						</div>
						<?php if ($_smarty_tpl->getValue('categories')) {?>
							<div id="category_products" class="col-md-6 col-lg-4 col-sm-12 export-options d-none mb-3 mb-md-0">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<select class="selectpicker" data-live-search="true" data-size="10" name="category_id">
									
									<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->getValue('categories'),'level'=>0), true);?>

								</select>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->getValue('brands')) {?>
							<div id="brands_products" class="col-md-6 col-lg-4 col-sm-12 export-options d-none mb-3 mb-md-0">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_from_brand, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<select class="selectpicker" data-size="10" name="brand_id">
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'b');
$_smarty_tpl->getVariable('b')->index = -1;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('b')->index++;
$_smarty_tpl->getVariable('b')->first = !$_smarty_tpl->getVariable('b')->index;
$foreach1Backup = clone $_smarty_tpl->getVariable('b');
?>
										<option value="<?php echo $_smarty_tpl->getValue('b')->id;?>
" <?php if ($_smarty_tpl->getVariable('b')->first) {?>selected="" <?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
$_smarty_tpl->setVariable('b', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						<?php }?>
						<div class="col-md-6 col-lg-4 col-sm-12 d-grid d-sm-block mt-n3 mt-md-0">
							<div class="form-label">&nbsp;</div>
							<button id="js-start" type="submit" class="btn btn-primary">
								<i class="align-middle" data-feather="download"></i>
								<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export, ENT_QUOTES, 'UTF-8', true);?>

							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"piecon",'priority'=>99,'include'=>array("turbo/design/js/piecon/piecon.min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"piecon",'priority'=>99,'include'=>array("turbo/design/js/piecon/piecon.min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


	
		<?php echo '<script'; ?>
>
			var in_process = false;
			var field = '',
				value = '';

			$(function() {
				$(".js-type-export").on("change", function() {
					elem = $("#" + $(this).val());
					$(".export-options").addClass("d-none");
					elem.removeClass("d-none");
				});

				$('button#js-start').click(function() {
					if ($(".export-options:visible")) {
						field = $(".export-options:visible").find('select').attr('name');
						value = $(".export-options:visible").find('select').val();
					}
					Piecon.setOptions({fallback: 'force'});
					Piecon.setProgress(0);
					var progress_item = $("#progressbar");
					$(".progress").show();
					do_export('', progress_item);
				});

				function do_export(page, progress) {
					page = typeof(page) != 'undefined' ? page : 1;
					var data = {page: page};
					if (field && value) {
						data[field] = value;
					}
					$.ajax({
						url: "ajax/export.php",
						data: data,
						dataType: 'json',
						success: function(data) {

							if (data && !data.end) {
								Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
								progress.css('width', 100 * data.page / data.totalpages + '%');
								do_export(data.page * 1 + 1, progress);
							} else {
								if (data && data.end) {
									Piecon.setProgress(100);
									progress.css('width', '100%');
									window.location.href = 'files/export/export.csv';
									$(".progress").fadeOut(500);
									$('#success-export').show();
								}
							}
						},
						error: function(xhr, status, errorThrown) {
							alert(errorThrown + '\n' + xhr.responseText);
						}
					});
				}
			});
		<?php echo '</script'; ?>
>
	
<?php } else { ?>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->products_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		</div>
	</div>
<?php }
}
/* smarty_template_function_categories_tree_544992873691f76d03ceb92_07382829 */
if (!function_exists('smarty_template_function_categories_tree_544992873691f76d03ceb92_07382829')) {
function smarty_template_function_categories_tree_544992873691f76d03ceb92_07382829(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$params = array_merge(array('name'=>'categories_tree'), $params);
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
											<option value="<?php echo $_smarty_tpl->getValue('c')->id;?>
"><?php
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
												<?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->getValue('c')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

											<?php }?>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									<?php
}}
/*/ smarty_template_function_categories_tree_544992873691f76d03ceb92_07382829 */
}
