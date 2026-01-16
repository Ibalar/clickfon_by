<?php
/* Smarty version 5.4.2, created on 2025-11-21 10:40:33
  from 'file:import.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69201771dfac62_24143211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '139cf876f3f370831179b18931c861786a2fc1e7' => 
    array (
      0 => 'import.tpl',
      1 => 1732739754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69201771dfac62_24143211 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->import_products, false, 32);?>

<div class="row">
	<div class="col-12">
		<div class="d-md-flex mb-3">
			<h1 class="d-inline align-middle me-2">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_products, ENT_QUOTES, 'UTF-8', true);?>

			</h1>
			<div class="d-inline-block heading-block mb-3 mt-1" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_example, ENT_QUOTES, 'UTF-8', true);?>
">
				<a href="files/import/example.csv" class="text-dark" target="_blank">
					<i class="align-middle cursor-pointer" data-feather="file-text"></i>
				</a>
			</div>
		</div>
	</div>
</div>

<div id="import-error" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;"></div>

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'no_permission') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('import_files_dir'), ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'convert_error') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_utf, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'locale_error') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_locale, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_not_correctly, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'upload_error') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->upload_error, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'required_fields') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_required, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'duplicated_columns') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_duplicated, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('implode')($_smarty_tpl->getValue('duplicated_columns'),", ");?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'duplicated_columns_pairs') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_duplicated_pairs, ENT_QUOTES, 'UTF-8', true);?>
:<BR>
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('duplicated_columns_pairs'), 'pair', true);
$_smarty_tpl->getVariable('pair')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pair')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('pair')->iteration++;
$_smarty_tpl->getVariable('pair')->last = $_smarty_tpl->getVariable('pair')->iteration === $_smarty_tpl->getVariable('pair')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('pair');
?>
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('implode')($_smarty_tpl->getValue('pair'),", ");?>

							<?php if (!$_smarty_tpl->getVariable('pair')->last) {?><BR><?php }?>
						<?php
$_smarty_tpl->setVariable('pair', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('message_error') != 'no_permission') {?>
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
		<?php if ((null !== ($_smarty_tpl->getValue('filename') ?? null)) || (null !== ($_smarty_tpl->getValue('import') ?? null))) {?>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_file, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('file')->name, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo round((float) ($_smarty_tpl->getValue('file')->size/1024), (int) '2', (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_kb, ENT_QUOTES, 'UTF-8', true);?>
)</h5>
						</div>
						<div class="card-body">
							<?php if ((null !== ($_smarty_tpl->getValue('filename') ?? null))) {?>
								<div class="alert alert-primary alert-dismissible" role="alert">
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									<div class="alert-message">
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_info, ENT_QUOTES, 'UTF-8', true);?>

									</div>
								</div>
								<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
									<button class="btn btn-danger me-md-2 js-skip-all" type="button"><i class="align-middle" data-feather="minus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_skip_all, ENT_QUOTES, 'UTF-8', true);?>
</button>
									<button class="btn btn-success js-new-all" type="button"><i class="align-middle" data-feather="plus"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_new_all, ENT_QUOTES, 'UTF-8', true);?>
</button>
								</div>
								<div class="turbo-list">
									<div class="turbo-list-head">
										<div class="turbo-list-heading turbo-list-import-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_csv_columns, ENT_QUOTES, 'UTF-8', true);?>
</div>
										<div class="turbo-list-heading turbo-list-import-value">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_field_system, ENT_QUOTES, 'UTF-8', true);?>

										</div>
									</div>
									<div class="turbo-list-body import-body">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('source_columns'), 'column');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('column')->value) {
$foreach1DoElse = false;
?>
											<div class="turbo-list-body-item body-narrow">
												<div class="turbo-list-row narrow">
													<div class="turbo-list-boding turbo-list-import-name">
														<span class="fw-bold"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('column')->name, ENT_QUOTES, 'UTF-8', true);?>
</span><?php if ($_smarty_tpl->getValue('column')->is_feature || !$_smarty_tpl->getValue('column')->is_exist) {?> (<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_feature, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?>
													</div>
													<div class="turbo-list-boding turbo-list-import-value js-row">
														<input type="hidden" name="csv_fields[<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('column')->name, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('column')->value, ENT_QUOTES, 'UTF-8', true);?>
">
														<a href="javascript:;" class="js-edit-column fw-bold text-decoration-none <?php if (empty($_smarty_tpl->getValue('column')->value)) {?>text-danger<?php } elseif ($_smarty_tpl->getValue('column')->is_nf_selected) {?>text-success<?php }?>" data-column-name="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('column')->name, ENT_QUOTES, 'UTF-8', true);?>
" data-is-exist="<?php if ($_smarty_tpl->getValue('column')->is_exist) {?>1<?php } else { ?>0<?php }?>">
															<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('column')->value,$_smarty_tpl->getValue('columns_names'))) {?>
																<?php echo $_smarty_tpl->getValue('btr')->get_translation(('import_field_').($_smarty_tpl->getValue('column')->value));?>

															<?php } elseif (empty($_smarty_tpl->getValue('column')->value)) {?>
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_skip, ENT_QUOTES, 'UTF-8', true);?>

															<?php } elseif ($_smarty_tpl->getValue('column')->is_nf_selected) {?>
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_new_feature, ENT_QUOTES, 'UTF-8', true);?>

															<?php } else { ?>
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('column')->value, ENT_QUOTES, 'UTF-8', true);?>

															<?php }?>
														</a>
													</div>
												</div>
											</div>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</div>
									<div class="turbo-list-footer">
										<div class="col-12">
											<button type="submit" name="import" value="1" class="btn btn-primary float-md-end">
												<i class="align-middle" data-feather="check"></i>
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_do_import, ENT_QUOTES, 'UTF-8', true);?>

											</button>
										</div>
									</div>
								</div>
								<select class="selectpicker import-select js-select" data-live-search="true">
									<optgroup label="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_additional, ENT_QUOTES, 'UTF-8', true);?>
">
										<option value="" data-label="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_skip, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_skip, ENT_QUOTES, 'UTF-8', true);?>
</option>
										<option value="" data-label="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_new_feature, ENT_QUOTES, 'UTF-8', true);?>
" class="js-new-feature">
											<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_new_feature, ENT_QUOTES, 'UTF-8', true);?>

										</option>
									</optgroup>
									<optgroup label="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_main_fields, ENT_QUOTES, 'UTF-8', true);?>
">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('columns_names'), 'cname');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cname')->value) {
$foreach2DoElse = false;
?>
											<option value="<?php echo $_smarty_tpl->getValue('cname');?>
" data-label="<?php echo $_smarty_tpl->getValue('btr')->get_translation(('import_field_').($_smarty_tpl->getValue('cname')));?>
">
												<?php echo $_smarty_tpl->getValue('btr')->get_translation(('import_field_').($_smarty_tpl->getValue('cname')));?>

											</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</optgroup>
									<optgroup label="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_shop_features, ENT_QUOTES, 'UTF-8', true);?>
">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'feature');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach3DoElse = false;
?>
											<option value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature'), ENT_QUOTES, 'UTF-8', true);?>
" data-label="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature'), ENT_QUOTES, 'UTF-8', true);?>
">
												<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('feature'), ENT_QUOTES, 'UTF-8', true);?>

											</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</optgroup>
								</select>
							<?php } elseif ($_smarty_tpl->getValue('import')) {?>
								<div class="position-relative">
									<div class="progress position-absolute w-100 mt-n4 mb-1" style="display: none;">
										<div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
									</div>
								</div>
								<ul class="import-result list-unstyled" id="js-import-result"></ul>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-actions float-end">
								<div class="d-block d-lg-none position-relative collapse-icon">
									<a href="javascript:;" class="collapse-chevron">
										<i class="align-middle" data-feather="chevron-up"></i>
									</a>
								</div>
							</div>
							<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_download, ENT_QUOTES, 'UTF-8', true);?>
</h5>
						</div>
						<div class="collapse-card">
							<div class="card-body mb-3">
								<div class="alert alert-primary alert-dismissible" role="alert">
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									<div class="alert-message"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_backup, ENT_QUOTES, 'UTF-8', true);?>
</div>
								</div>
								<label for="file" class="form-label">
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_maxsize, ENT_QUOTES, 'UTF-8', true);?>

									<?php if ($_smarty_tpl->getValue('config')->max_upload_filesize > 1024*1024) {?>
										<?php echo $_smarty_tpl->getValue('config')->max_upload_filesize/1024/round((float) 1024, (int) '2', (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_mb, ENT_QUOTES, 'UTF-8', true);?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->getValue('config')->max_upload_filesize/round((float) 1024, (int) '2', (int) 1);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_kb, ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
								</label>
								<div class="input-group">
									<input name="file" class="form-control" id="file" type="file">
									<button type="submit" class="btn btn-primary">
										<i class="align-middle" data-feather="upload"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_to_download, ENT_QUOTES, 'UTF-8', true);?>

									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
	</form>
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
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php echo '<script'; ?>
>
	
		var new_feature_label = "<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_new_feature, ENT_QUOTES, 'UTF-8', true);?>
";
		var skip_label = "<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_skip, ENT_QUOTES, 'UTF-8', true);?>
";
		$(function() {
			var select_column = $(".js-select");
			$(".js-select").remove();
			$(document).on("click", ".js-edit-column", function() {
				var edit = $(this),
					parent = edit.closest(".js-row");
				$(".js-edit-column").show();
				edit.hide();
				$(".selectpicker").selectpicker("destroy");
				$(".js-select").remove();
				parent.append(select_column.clone());

				var select = parent.find("select.js-select"),
					new_feature = parent.find(".js-new-feature"),
					input = parent.find("[name*='csv_fields']");
				new_feature.val(edit.data("column_name"));
				new_feature.prop("disabled", edit.data("is-exist") ? true : false);
				select.find("option[value='" + input.val() + "']").prop("selected", true);

				$("[name*='csv_fields']").each(function() {
					if ($(this).val() != "") {
						select.find("option[value='" + $(this).val() + "']").prop("disabled", true);
					}
				});

				select.selectpicker();
				select.on("hide.bs.select", function() {
					select.closest(".js-row").find(".js-edit-column").show();
					$(".selectpicker").selectpicker("destroy");
					$(".js-select").remove();
				});
				setTimeout(function() {
					select.selectpicker("toggle");
				}, 10);
			});

			$(document).on("change", ".js-select select", function() {
				var select = $(this),
					parent = select.closest(".js-row"),
					selected = select.find("option:selected"),
					edit = parent.find(".js-edit-column");
				edit.text(selected.data("label"));
				edit.removeClass("text-danger").removeClass("text-success");
				if (select.val() == "") {
					edit.addClass("text-danger");
				} else if (selected.hasClass("js-new-feature")) {
					edit.addClass("text-success");
				}
				parent.find("[name*='csv_fields']").val(select.val());
			});

			$(document).on("click", ".js-skip-all", function() {
				$('.js-edit-column').each(function() {
					var edit = $(this),
						parent = edit.closest(".js-row");
					edit.text(skip_label);
					edit.removeClass("text-danger").removeClass("text-success");
					edit.addClass("text-danger");
					parent.find("[name*='csv_fields']").val("");
				});
				return false;
			});

			$(document).on("click", ".js-new-all", function() {
				$('.js-edit-column').each(function() {
					var edit = $(this),
						parent = edit.closest(".js-row");
					if (!edit.data("is-exist")) {
						edit.text(new_feature_label);
						edit.removeClass("text-danger").removeClass("text-success");
						edit.addClass("text-success");
						parent.find("[name*='csv_fields']").val(edit.data('column-name'));
					}
				});
				return false;
			});
		});
	
	<?php if ((null !== ($_smarty_tpl->getValue('import') ?? null))) {?>
		
			var in_process = false;
			var count = 1;

			$(function() {
				Piecon.setOptions({fallback: 'force'});
				Piecon.setProgress(0);
				var progress_item = $("#progressbar");
				$(".progress").show();
				do_import('', progress_item);
			});

			function do_import(from, progress) {
				from = typeof(from) != 'undefined' ? from : 0;
				$.ajax({
					url: "ajax/import.php",
					data: {from:from},
					dataType: 'json',
					success: function(data) {
						for (var key in data.items) {
							$('#js-import-result').prepend('<li><span class=count>' + count + '</span> <span title=' + data.items[key].status + ' class="status ' + data.items[key].status + '"></span> <a target=_blank href="index.php?module=ProductAdmin&id=' + data.items[key].product.id + '">' + data.items[key].product.name + '</a> ' + data.items[key].variant.name + '</li>');
							count++;
						}
						if (data.error) {
							var error = '';
							if (data.missing_fields) {
								error = '<span class="alert-message"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->import_required_columns, ENT_QUOTES, 'UTF-8', true);?>
: </span><b>';
								for (var i in data.missing_fields) {
									error += data.missing_fields[i] + ', ';
								}
								error = error.substring(0, error.length - 2);
								error += '</b>';
							}

							$(".progress").fadeOut(500);
							$('#import-error').html(error);
							$('#import-error').show();
						} else {
							Piecon.setProgress(Math.round(100 * data.from / data.totalsize));
							progress.css('width', 100 * data.from / data.totalsize + '%');

							if (data != false && !data.end) {
								do_import(data.from, progress);
							} else {
								Piecon.setProgress(100);
								progress.css('width', '100%');
								$("#js-import-result").show();
								$(".progress").fadeOut(500);
							}
						}
					},
					error: function(xhr, status, errorThrown) {
						alert(errorThrown + '\n' + xhr.responseText);
					}
				});
			}
		
	<?php }
echo '</script'; ?>
><?php }
}
