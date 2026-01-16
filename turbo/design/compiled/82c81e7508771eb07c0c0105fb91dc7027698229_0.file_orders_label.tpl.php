<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:51:36
  from 'file:orders_label.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69177a38316618_92018316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82c81e7508771eb07c0c0105fb91dc7027698229' => 
    array (
      0 => 'orders_label.tpl',
      1 => 1732575646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69177a38316618_92018316 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('label')->id) {?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('label')->name, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->orders_new_label, false, 32);
}?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3">
		<?php if ($_smarty_tpl->getValue('label')->id) {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_label, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('label')->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_new_label, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
	</h1>
</div>

<?php if ($_smarty_tpl->getValue('message_success')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_success') == 'added') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_added_label, ENT_QUOTES, 'UTF-8', true);?>

					<?php } elseif ($_smarty_tpl->getValue('message_success') == 'updated') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->orders_updated_label, ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<?php if ($_GET['return']) {?>
						<a class="alert-link fw-normal btn-return text-decoration-none me-5" href="<?php echo $_GET['return'];?>
">
							<i class="align-middle mt-n1" data-feather="corner-up-left"></i>
							<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_back, ENT_QUOTES, 'UTF-8', true);?>

						</a>
					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<form class="js-form-list" enctype="multipart/form-data" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('label')->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<input name="id" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('label')->id, ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="mb-3">
								<div class="form-label"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_color, ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div id="cp" class="input-group color-picker">
									<input type="text" name="color" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('label')->color, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
									<span class="input-group-text add-on"><i></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="d-grid d-sm-block mt-1">
				<button type="submit" class="btn btn-primary float-end">
					<i class="align-middle" data-feather="check"></i>
					<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
				</button>
			</div>
		</div>
	</div>
</form>

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
			$('#cp').colorpicker({
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
