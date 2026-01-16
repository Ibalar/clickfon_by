<?php
/* Smarty version 5.4.2, created on 2025-12-04 15:28:01
  from 'file:scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69317e5165c9f5_84680491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03706040aa1a2bd0b5708153c67251701138b02b' => 
    array (
      0 => 'scripts.tpl',
      1 => 1732461796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69317e5165c9f5_84680491 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('script_file')) {?>
	<?php $_smarty_tpl->assign('meta_title', ((string)$_smarty_tpl->getValue('btr')->global_script)." ".((string)$_smarty_tpl->getValue('script_file')), false, 32);
}?>

<h1 class="h3 mb-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('theme');?>
, <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_script, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('script_file');?>
</h1>

<?php if ($_smarty_tpl->getValue('message_error')) {?>
	<div class="row">
		<div class="col-12">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<div class="alert-message">
					<?php if ($_smarty_tpl->getValue('message_error') == 'permissions') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_permission, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('script_file');?>

					<?php } elseif ($_smarty_tpl->getValue('message_error') == 'theme_locked') {?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_protected, ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('message_error'), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<div class="row">
	<div class="col-12">
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<div class="alert-message">
				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_design_message, ENT_QUOTES, 'UTF-8', true);?>

				<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_design_message2, ENT_QUOTES, 'UTF-8', true);?>

				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
</div>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb mb-3">
		<li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ScriptsAdmin','file'=>null,'dir'=>null), $_smarty_tpl);?>
" class="text-decoration-none text-muted">
				<i class="align-middle text-warning mt-n1" data-feather="folder"></i>
				js
			</a>
		</li>
		<?php if ((null !== ($_GET['dir'] ?? null)) && !$_smarty_tpl->getValue('script_file')) {?>
			<li class="breadcrumb-item active">
				<?php echo $_GET['dir'];?>

			</li>
		<?php } elseif ((null !== ($_GET['dir'] ?? null)) && $_smarty_tpl->getValue('script_file')) {?>
			<li class="breadcrumb-item active">
				<a href="/turbo/index.php?module=ScriptsAdmin&dir=<?php echo $_GET['dir'];?>
" class="text-decoration-none text-muted">
					<i class="align-middle text-warning mt-n1" data-feather="folder"></i>
					<?php echo $_GET['dir'];?>

				</a>
			</li>
			<li class="breadcrumb-item active">
				<i class="align-middle mt-n1" data-feather="file-text"></i>
				<?php echo $_smarty_tpl->getValue('script_file');?>

			</li>
		<?php } elseif ($_smarty_tpl->getValue('script_file')) {?>
			<li class="breadcrumb-item active">
				<i class="align-middle mt-n1" data-feather="file-text"></i>
				<?php echo $_smarty_tpl->getValue('script_file');?>

			</li>
		<?php }?>
	</ol>
</nav>

<?php if ($_smarty_tpl->getValue('folders')) {?>
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
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_folders, ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<ul class="nav nav-pills">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('folders'), 'f');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach0DoElse = false;
?>
								<li class="nav-item">
									<a class="nav-link text-decoration-none <?php if ($_smarty_tpl->getValue('f') == $_smarty_tpl->getValue('dir')) {?>active text-white<?php } else { ?>text-muted<?php }?>" aria-current="page" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ScriptsAdmin','file'=>null,'dir'=>$_smarty_tpl->getValue('f')), $_smarty_tpl);?>
">
										<i class="align-middle <?php if ($_smarty_tpl->getValue('f') != $_smarty_tpl->getValue('dir')) {?>text-warning<?php }?> mt-n1" data-feather="folder"></i>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('f'), ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</li>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>

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
				<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_scripts, ENT_QUOTES, 'UTF-8', true);?>
</h5>
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<ul class="nav nav-pills">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scripts'), 's');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach1DoElse = false;
?>
							<li class="nav-item">
								<a class="nav-link text-decoration-none <?php if ($_smarty_tpl->getValue('script_file') == $_smarty_tpl->getValue('s')) {?>active text-white<?php } else { ?>text-muted<?php }?>" aria-current="page" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'ScriptsAdmin','file'=>$_smarty_tpl->getValue('s')), $_smarty_tpl);?>
">
									<i class="align-middle mt-n1" data-feather="file-text"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('s'), ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</li>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ($_smarty_tpl->getValue('script_file')) {?>
	<div class="row">
		<div class="col-12">
			<div class="card mh-230px">
				<div class="card-header">
					<div class="card-actions float-end">
						<div class="d-block d-lg-none position-relative collapse-icon">
							<a href="javascript:;" class="collapse-chevron">
								<i class="align-middle" data-feather="chevron-up"></i>
							</a>
						</div>
					</div>
					<h5 class="card-title mb-0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_script, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('script_file'), ENT_QUOTES, 'UTF-8', true);?>
</h5>
				</div>
				<div class="collapse-card">
					<div class="card-body">
						<form>
							<textarea id="content" class="d-none" name="content"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('script_content'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</form>
						<div class="row">
							<div class="col-12">
								<button type="submit" name="save" class="js-save btn btn-primary float-end mt-2">
									<i class="align-middle" data-feather="check"></i>
									<span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"codemirror-css",'include'=>array("turbo/design/js/codemirror/lib/codemirror.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"codemirror-css",'include'=>array("turbo/design/js/codemirror/lib/codemirror.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
	<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"codemirror-css",'include'=>array("turbo/design/js/codemirror/theme/dark.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"codemirror-css",'include'=>array("turbo/design/js/codemirror/theme/dark.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>

<?php } else { ?>
	<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"codemirror-css",'include'=>array("turbo/design/js/codemirror/theme/light.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"codemirror-css",'include'=>array("turbo/design/js/codemirror/theme/light.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>

<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"codemirror-js",'priority'=>99,'include'=>array("turbo/design/js/codemirror/lib/codemirror.js","turbo/design/js/codemirror/mode/smarty/smarty.js","turbo/design/js/codemirror/mode/smartymixed/smartymixed.js","turbo/design/js/codemirror/mode/xml/xml.js","turbo/design/js/codemirror/mode/htmlmixed/htmlmixed.js","turbo/design/js/codemirror/mode/css/css.js","turbo/design/js/codemirror/mode/javascript/javascript.js","turbo/design/js/codemirror/addon/selection/active-line.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"codemirror-js",'priority'=>99,'include'=>array("turbo/design/js/codemirror/lib/codemirror.js","turbo/design/js/codemirror/mode/smarty/smarty.js","turbo/design/js/codemirror/mode/smartymixed/smartymixed.js","turbo/design/js/codemirror/mode/xml/xml.js","turbo/design/js/codemirror/mode/htmlmixed/htmlmixed.js","turbo/design/js/codemirror/mode/css/css.js","turbo/design/js/codemirror/mode/javascript/javascript.js","turbo/design/js/codemirror/addon/selection/active-line.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>



	<style>
		.CodeMirror {
			font-family: 'Courier New';
			margin-bottom: 10px;
			background-color: #ffffff;
			height: auto;
			min-height: 100px;
			width: 100%;
		}

		.CodeMirror-scroll {
			overflow-y: hidden;
			overflow-x: auto;
		}
	</style>
	<?php echo '<script'; ?>
>
		$(function() {
			function save() {
			
			<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
				$('.CodeMirror').css('background-color', '#223b3c');
			<?php } else { ?>
				$('.CodeMirror').css('background-color', '#d2f1e8');
			<?php }?>
			
				content = editor.getValue();
				$.ajax({
					type: 'POST',
					url: 'ajax/save_script.php',
					data: {'content': content, 'theme':'<?php echo $_smarty_tpl->getValue('theme');?>
', 'script': '<?php echo $_smarty_tpl->getValue('script_file');?>
', 'dir': '<?php echo $_smarty_tpl->getValue('dir');?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
					success: function(data) {
						$('.CodeMirror').animate({'background-color': '#eef2f4'});
					},
					dataType: 'json'
				});
			}

			$('.js-save').on('click', function() {
				save();
			});

			var isCtrl = false;
			var isCmd = false;
			$(document).keyup(function(e) {
				if (e.which == 17) isCtrl = false;
				if (e.which == 91) isCmd = false;
			}).keydown(function(e) {
				if (e.which == 17) isCtrl = true;
				if (e.which == 91) isCmd = true;
				if (e.which == 83 && (isCtrl || isCmd)) {
					save();
					e.preventDefault();
				}
			});
		});
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		var editor = CodeMirror.fromTextArea(document.getElementById("content"), {
			mode: "javascript",
			lineNumbers: true,
			styleActiveLine: true,
			matchBrackets: false,
			enterMode: 'keep',
			indentWithTabs: false,
			indentUnit: 1,
			tabMode: 'classic',
			<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>theme: 'dark'<?php } else { ?>theme: 'light'<?php }?>
			});
	<?php echo '</script'; ?>
>
<?php }
}
