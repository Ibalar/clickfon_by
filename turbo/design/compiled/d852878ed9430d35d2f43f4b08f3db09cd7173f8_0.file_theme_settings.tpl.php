<?php
/* Smarty version 5.4.2, created on 2025-11-14 17:58:55
  from 'file:theme_settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691743af88ac10_52308880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd852878ed9430d35d2f43f4b08f3db09cd7173f8' => 
    array (
      0 => 'theme_settings.tpl',
      1 => 1733288798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691743af88ac10_52308880 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_theme_settings, false, 32);?>

<h1 class="mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_theme_settings, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme'), ENT_QUOTES, 'UTF-8', true);?>
</h1>

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

<?php if ($_smarty_tpl->getValue('locked_theme')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_protected, ENT_QUOTES, 'UTF-8', true);?>

					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('theme_settings_xml')) {?>
	<form method="post" enctype="multipart/form-data" <?php if (!$_smarty_tpl->getValue('locked_theme')) {?>class="js-fast-button js-form-list"<?php }?>>
		<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('theme_settings_xml'), 'theme_setting_xml');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme_setting_xml')->value) {
$foreach0DoElse = false;
?>
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('theme_setting_xml')->groups, 'group');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach1DoElse = false;
?>
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
								<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('group')->name, ENT_QUOTES, 'UTF-8', true);?>
</h5>
							</div>
							<div class="collapse-card">
								<div class="card-body">
									<div class="row">
										<?php if ($_smarty_tpl->getValue('group')->type == 'sort') {?>
											<div class="col-12">
												<div class="turbo-list">
													<div class="turbo-list-head">
														<div class="turbo-list-heading turbo-list-drag"></div>
														<div class="turbo-list-heading turbo-list-settings-name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
														<div class="turbo-list-heading turbo-list-settings-status"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
													</div>
													<div class="turbo-list-body sort">
														<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('sort')($_smarty_tpl->getValue('group')->settings,$_smarty_tpl->getValue('theme_settings')), 'setting');
$_smarty_tpl->getVariable('setting')->index = -1;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('setting')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('setting')->index++;
$_smarty_tpl->getVariable('setting')->first = !$_smarty_tpl->getVariable('setting')->index;
$foreach2Backup = clone $_smarty_tpl->getVariable('setting');
?>
															<?php $_smarty_tpl->assign('option', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('setting')->options), false, NULL);?>
															<div class="js-row turbo turbo-list-body-item body-narrow js-sort-item <?php if ($_smarty_tpl->getVariable('setting')->first) {?>no-drag<?php }?>">
																<div class="turbo-list-row narrow">
																	<input type="hidden" name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" value="<?php if ($_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable]) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable], ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->getValue('option')->value;
}?>" class="js-sort-hidden-input">
																	<div class="turbo-list-boding turbo-list-drag move-zone">
																		<i class="align-middle" transform="rotate(-45)" data-feather="maximize-2"></i>
																	</div>
																	<div class="turbo-list-boding turbo-list-settings-name">
																		<div class="fw-bold text-body text-decoration-none"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
																	</div>
																	<div class="turbo-list-boding turbo-list-settings-status">
																		<div class="form-check form-switch">
																			<input type="hidden" name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->visible;?>
]" value="0">
																			<input class="form-check-input me-2" type="checkbox" id="visible-settings-<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->variable, ENT_QUOTES, 'UTF-8', true);?>
" name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->visible;?>
]" value="1" <?php if ($_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->visible] == 1) {?>checked<?php }?>>
																			<label class="form-check-label" for="visible-settings-<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->variable, ENT_QUOTES, 'UTF-8', true);?>
"></label>
																		</div>
																	</div>
																</div>
															</div>
														<?php
$_smarty_tpl->setVariable('setting', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
													</div>
												</div>
											</div>
										<?php } else { ?>
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')->settings, 'setting');
$_smarty_tpl->getVariable('setting')->index = -1;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('setting')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('setting')->index++;
$_smarty_tpl->getVariable('setting')->first = !$_smarty_tpl->getVariable('setting')->index;
$foreach3Backup = clone $_smarty_tpl->getVariable('setting');
?>
												<?php if (!empty($_smarty_tpl->getValue('setting')->options) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('setting')->options) > 1) {?>
													<div class="col-lg-6">
														<div class="mb-3">
															<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
															<?php if ($_smarty_tpl->getValue('setting')->variable == "colors" || $_smarty_tpl->getValue('setting')->variable == "more_colors") {?>
																<select name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" class="selectpicker" data-size="10">
																	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('setting')->options, 'option');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach4DoElse = false;
?>
																		<option value="<?php echo $_smarty_tpl->getValue('option')->value;?>
" data-content="<span class='translate-middle px-color me-2 rounded-circle' style='background-color: <?php echo $_smarty_tpl->getValue('option')->value;?>
;'><span class='visually-hidden'>New alerts</span></span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->name, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((null !== ($_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)) && $_smarty_tpl->getValue('option')->value == $_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable]) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
																	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
																</select>
															<?php } else { ?>
																<select name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" class="selectpicker">
																	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('setting')->options, 'option');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach5DoElse = false;
?>
																		<option value="<?php echo $_smarty_tpl->getValue('option')->value;?>
" <?php if ((null !== ($_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)) && $_smarty_tpl->getValue('option')->value == $_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable]) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
																	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
																</select>
															<?php }?>
														</div>
													</div>
												<?php } elseif (!empty($_smarty_tpl->getValue('setting')->options) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('setting')->options) == 1) {?>
													<?php $_smarty_tpl->assign('option', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('setting')->options), false, NULL);?>
													<div class="col-lg-6 d-flex align-items-center">
														<div class="form-check form-switch mb-3 mt-lg-3 mt-0">
															<input type="hidden" name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" value="0">
															<input class="form-check-input me-2" type="checkbox" id="theme-settings-<?php echo $_smarty_tpl->getValue('setting')->variable;?>
" name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('option')->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((null !== ($_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)) && $_smarty_tpl->getValue('option')->value == $_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable]) {?>checked<?php }?>>
															<label class="form-check-label" for="theme-settings-<?php echo $_smarty_tpl->getValue('setting')->variable;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</label>
														</div>
													</div>
												<?php } else { ?>
													<div class="col-lg-6">
														<div class="mb-3">
															<div class="form-label" for="<?php echo $_smarty_tpl->getValue('setting')->variable;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('setting')->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
															<?php if ($_smarty_tpl->getValue('setting')->variable == "custom_color" || $_smarty_tpl->getValue('setting')->variable == "more_custom_color") {?>
																<div class="input-group color-picker">
																	<input name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" class="form-control" type="text" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->getValue('setting')->variable;?>
">
																	<span class="input-group-text add-on"><i></i></span>
																</div>
															<?php } else { ?>
																<input name="theme_settings[<?php echo $_smarty_tpl->getValue('setting')->variable;?>
]" class="form-control" type="text" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('theme_settings')[$_smarty_tpl->getValue('setting')->variable] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->getValue('setting')->variable;?>
">
															<?php }?>
														</div>
													</div>
												<?php }?>
											<?php
$_smarty_tpl->setVariable('setting', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<?php if (!$_smarty_tpl->getValue('locked_theme')) {?>
			<div class="row">
				<div class="col-12">
					<div class="d-grid d-sm-block mt-3">
						<button type="submit" class="btn btn-primary float-end">
							<i class="align-middle" data-feather="check"></i>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>

						</button>
					</div>
				</div>
			</div>
		<?php }?>
	</form>
<?php } else { ?>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title ms-1 my-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->settings_no, ENT_QUOTES, 'UTF-8', true);?>
</h5>
		</div>
	</div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"colorpicker",'include'=>array("turbo/design/js/colorpicker/css/bootstrap-colorpicker.min.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"colorpicker",'include'=>array("turbo/design/js/colorpicker/css/bootstrap-colorpicker.min.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"colorpicker",'priority'=>99,'include'=>array("turbo/design/js/colorpicker/js/bootstrap-colorpicker.min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"colorpicker",'priority'=>99,'include'=>array("turbo/design/js/colorpicker/js/bootstrap-colorpicker.min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>



	<?php echo '<script'; ?>
>
		$(function() {
			$('.color-picker').colorpicker({
				colorSelectors: {
					'primary': '#3b7ddd',
					'secondary': '#6c757d',
					'success': '#1cbb8c',
					'info': '#17a2b8',
					'warning': '#fcb92c',
					'danger': '#dc3545',
					'dark': '#212529',
					'purple': '#6f42c1',
					'pink': '#e83e8c',
				},
				format: "hex"
			});
		});

		
			<?php if (!$_smarty_tpl->getValue('locked_theme')) {?>
				if ($(".sort").length > 0) {
					var el = document.querySelectorAll(".sort");
					for (var i = 0; i < el.length; i++) {
						var sortable = Sortable.create(el[i], {
							handle: ".move-zone",
							sort: true,
							animation: 150,
							ghostClass: "sortable-ghost",
							chosenClass: "sortable-chosen",
							dragClass: "sortable-drag",
							scrollSensitivity: 30,
							scrollSpeed: 10,
							filter: '.no-drag',
							preventOnFilter: true,
							onStart: function(evt) {
								if (evt.item.classList.contains('no-drag')) {
									evt.preventDefault();
								}
							},
							onMove: function(evt) {
								if (evt.related.classList.contains('no-drag')) {
									return false;
								}
							},
							onUpdate: function(evt) {
								var sortedItems = evt.to.querySelectorAll(".js-sort-item");
								sortedItems.forEach(function(item, index) {
									var hiddenInput = item.querySelector(".js-sort-hidden-input");
									if (hiddenInput) {
										hiddenInput.value = index + 1;
									}
								});
								$(".js-form-list").ajaxSubmit();
								
									notyf.success({message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_success, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true});
								
							}
						});
					}
				}
			<?php }?>
			
	<?php echo '</script'; ?>
>
	<style>
		.colorpicker-element .add-on i:before {
			content: "";
			position: absolute;
			width: 16px;
			height: 16px;
			display: inline-block;
			vertical-align: text-top;
			margin-left: -8px;
			background: linear-gradient(45deg, rgba(0, 0, 0, 0.1) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, 0.1) 75%, rgba(0, 0, 0, 0.1) 0), linear-gradient(45deg, rgba(0, 0, 0, 0.1) 25%, transparent 25%, transparent 75%, rgba(0, 0, 0, 0.1) 75%, rgba(0, 0, 0, 0.1) 0), white;
			background-size: 10px 10px;
			background-position: 0 0, 5px 5px;
		}

		.colorpicker-element .add-on i[style*="background-color"]::before {
			content: none;
		}
	</style>
<?php }
}
