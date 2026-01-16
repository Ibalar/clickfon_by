<?php
/* Smarty version 5.4.2, created on 2025-11-19 11:35:21
  from 'file:feeds.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691d8149255695_08330656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a06a9d41338f1ff28771280b3c4888dc5a77c2' => 
    array (
      0 => 'feeds.tpl',
      1 => 1716764138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691d8149255695_08330656 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('btr')->global_feeds, false, 32);?>

<div class="d-md-flex mb-3">
	<h1 class="d-inline align-middle me-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feeds, ENT_QUOTES, 'UTF-8', true);?>
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
			</div>
			<div class="collapse-card">
				<div class="card-body">
					<div class="row">
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<a class="btn btn-success" target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/<?php echo $_smarty_tpl->getValue('lang_link');?>
feeds/feed.xml">
									<i class="align-middle me-1" data-feather="external-link"></i>
									<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_xml_feed, ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<a class="btn btn-success" target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/<?php echo $_smarty_tpl->getValue('lang_link');?>
feeds/rozetka.xml">
									<i class="align-middle me-1" data-feather="external-link"></i>
									Rozetka
								</a>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<a class="btn btn-success" target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/<?php echo $_smarty_tpl->getValue('lang_link');?>
feeds/google.xml">
									<i class="align-middle me-1" data-feather="external-link"></i>
									Google Merchant
								</a>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4">
							<div class="mb-3 d-grid d-sm-block">
								<a class="btn btn-danger" target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/<?php echo $_smarty_tpl->getValue('lang_link');?>
feeds/rss.xml">
									<i class="align-middle me-1" data-feather="rss"></i>
									RSS
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
