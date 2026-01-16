<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:26:54
  from 'file:clear.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e1ea2b909_47928629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5cbacb31ca5ebcd1c9493e22b1a981af9e1113' => 
    array (
      0 => 'clear.tpl',
      1 => 1713889162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69172e1ea2b909_47928629 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_clear, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_clear, ENT_QUOTES, 'UTF-8', true);?>
</h1>
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
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_parameters, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				<div class="position-relative">
					<div class="progress position-absolute w-100 mt-2" style="display: none;">
						<div id="progressbar" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
					</div>
				</div>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div class="row">
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->site_cache, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<a class="btn btn-danger rotate-icon" id="clear-site" href="javascript:void(0);">
									<i class="align-middle me-1" data-feather="refresh-cw"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->clear_cache, ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->admin_cache, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<a class="btn btn-danger rotate-icon" id="clear-admin" href="javascript:void(0);">
									<i class="align-middle me-1" data-feather="refresh-cw"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->clear_cache, ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->clear_resize_images, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<a class="btn btn-danger rotate-icon" id="clear-resize" href="javascript:void(0);">
									<i class="align-middle me-1" data-feather="refresh-cw"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->remove_resize_images, ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
		$(document).on('click', '#clear-site', function() {
			Piecon.setOptions({fallback: 'force'});
			Piecon.setProgress(0);
			var progress_item = $("#progressbar");
			$(".progress").show();
			clear_site('', progress_item);
		});

		function clear_site(page, progress) {
			page = typeof(page) != 'undefined' ? page : 1;
			$.ajax({
				url: "ajax/clear_site.php",
				dataType: 'json',
				success: function(data) {
					if (data && !data.end) {
						Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
						progress.css('width', 100 * data.page / data.totalpages + '%');
						clear_site(data.page * 1 + 1, progress);
					} else {
						Piecon.setProgress(100);
						progress.css('width', '100%');
						$(".progress").fadeOut(500);
					}
				},
				error: function(xhr, status, errorThrown) {
					alert(errorThrown + '\n' + xhr.responseText);
				}
			});
		}

		$(document).on('click', '#clear-admin', function() {
			Piecon.setOptions({fallback: 'force'});
			Piecon.setProgress(0);
			var progress_item = $("#progressbar");
			$(".progress").show();
			clear_admin('', progress_item);
		});

		function clear_admin(page, progress) {
			page = typeof(page) != 'undefined' ? page : 1;
			$.ajax({
				url: "ajax/clear_admin.php",
				dataType: 'json',
				success: function(data) {
					if (data && !data.end) {
						Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
						progress.css('width', 100 * data.page / data.totalpages + '%');
						clear_admin(data.page * 1 + 1, progress);
					} else {
						Piecon.setProgress(100);
						progress.css('width', '100%');
						$(".progress").fadeOut(500);
					}
				},
				error: function(xhr, status, errorThrown) {
					alert(errorThrown + '\n' + xhr.responseText);
				}
			});
		}

		$(document).on('click', '#clear-resize', function() {
			Piecon.setOptions({fallback: 'force'});
			Piecon.setProgress(0);
			var progress_item = $("#progressbar");
			$(".progress").show();
			clear_resize('', progress_item);
		});

		function clear_resize(page, progress) {
			page = typeof(page) != 'undefined' ? page : 1;
			$.ajax({
				url: "ajax/clear_resize.php",
				dataType: 'json',
				success: function(data) {
					if (data && !data.end) {
						Piecon.setProgress(Math.round(100 * data.page / data.totalpages));
						progress.css('width', 100 * data.page / data.totalpages + '%');
						clear_resize(data.page * 1 + 1, progress);
					} else {
						Piecon.setProgress(100);
						progress.css('width', '100%');
						$(".progress").fadeOut(500);
					}
				},
				error: function(xhr, status, errorThrown) {
					alert(errorThrown + '\n' + xhr.responseText);
				}
			});
		}
	<?php echo '</script'; ?>
>
<?php }
}
