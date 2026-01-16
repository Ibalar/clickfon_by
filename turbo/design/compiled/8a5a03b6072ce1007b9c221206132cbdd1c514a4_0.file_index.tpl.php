<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:26:54
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e1eb369c3_63972633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5a03b6072ce1007b9c221206132cbdd1c514a4' => 
    array (
      0 => 'index.tpl',
      1 => 1732739318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include_languages.tpl' => 1,
  ),
))) {
function content_69172e1eb369c3_63972633 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->getValue('settings')->lang;?>
">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="icon" href="design/images/favicon.svg" />

	<title><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('meta_title'), ENT_QUOTES, 'UTF-8', true);?>
</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

		<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"main",'include'=>array("turbo/design/css/dark-min.css","turbo/design/css/turbo-dark.css","turbo/design/css/media.css","turbo/design/css/bootstrap-select-dark.css","turbo/design/css/jquery.scrollbar.css","turbo/design/css/icon-font.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"main",'include'=>array("turbo/design/css/dark-min.css","turbo/design/css/turbo-dark.css","turbo/design/css/media.css","turbo/design/css/bootstrap-select-dark.css","turbo/design/css/jquery.scrollbar.css","turbo/design/css/icon-font.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
		<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>

	<?php } else { ?>
		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"main",'include'=>array("turbo/design/css/light-min.css","turbo/design/css/turbo-light.css","turbo/design/css/media.css","turbo/design/css/bootstrap-select.css","turbo/design/css/jquery.scrollbar.css","turbo/design/css/icon-font.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"main",'include'=>array("turbo/design/css/light-min.css","turbo/design/css/turbo-light.css","turbo/design/css/media.css","turbo/design/css/bootstrap-select.css","turbo/design/css/jquery.scrollbar.css","turbo/design/css/icon-font.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
		<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>

	<?php }?>

		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"libs",'priority'=>99,'include'=>array("turbo/design/js/jquery/jquery.min.js","turbo/design/js/jquery/jquery.form.min.js","turbo/design/js/jquery/jquery.scrollbar.min.js","turbo/design/js/bootstrap-select.js","turbo/design/js/sortable.min.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"libs",'priority'=>99,'include'=>array("turbo/design/js/jquery/jquery.min.js","turbo/design/js/jquery/jquery.form.min.js","turbo/design/js/jquery/jquery.scrollbar.min.js","turbo/design/js/bootstrap-select.js","turbo/design/js/sortable.min.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>

</head>

<body data-theme="<?php echo $_smarty_tpl->getValue('settings')->admin_theme;?>
" data-layout="<?php echo $_smarty_tpl->getValue('settings')->layout;?>
" data-sidebar-position="<?php echo $_smarty_tpl->getValue('settings')->position;?>
" data-sidebar-layout="<?php echo $_smarty_tpl->getValue('settings')->sidebar;?>
">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php?module=DashboardAdmin">
					<span class="sidebar-brand-text align-middle">
						<svg class="sidebar-brand-logo align-middle" xmlns="http://www.w3.org/2000/svg" width="172px" height="25.75px" viewBox="0 0 166 25.75">
							<g>
								<path d="M10,24.68a6.22,6.22,0,0,1-4.22-1.43,5.25,5.25,0,0,1-1.63-4.14V11H0V7.72H4.16V2.85h3.7V7.72H13V11H7.86v7.5c0,1.91.87,2.86,2.62,2.86a4.52,4.52,0,0,0,2.38-.61L14,23.84A9,9,0,0,1,10,24.68Zm21.22-17V24.51H27.54V22.77a5.55,5.55,0,0,1-4.64,2.08,6.12,6.12,0,0,1-4.73-1.93,7.28,7.28,0,0,1-1.78-5.16v-10h3.69V17.2a4.82,4.82,0,0,0,1,3.17,3.29,3.29,0,0,0,2.67,1.16A3.81,3.81,0,0,0,26,20.77a4.64,4.64,0,0,0,1.55-1.93V7.72Zm5,16.79V7.72h3.69V10a4.32,4.32,0,0,1,1.68-1.71,4.88,4.88,0,0,1,2.55-.71,7.1,7.1,0,0,1,1.72.21l-.54,3.59a4,4,0,0,0-1.45-.2,4.46,4.46,0,0,0-2.3.67,4.07,4.07,0,0,0-1.66,1.91V24.51Zm21.09.34a6.44,6.44,0,0,1-4.91-1.92v1.58H48.69V0h3.69V9.27a6.47,6.47,0,0,1,4.91-1.88,7.85,7.85,0,0,1,6,2.55,8.74,8.74,0,0,1,2.37,6.18,8.74,8.74,0,0,1-2.37,6.18,7.85,7.85,0,0,1-6,2.55Zm-.41-3.36a4.62,4.62,0,0,0,3.6-1.56,5.47,5.47,0,0,0,1.41-3.81,5.47,5.47,0,0,0-1.41-3.81,4.67,4.67,0,0,0-3.6-1.57A5.2,5.2,0,0,0,52.4,13V19.1a5.13,5.13,0,0,0,4.48,2.39Zm26.45.82a9,9,0,0,1-12.53,0,8.41,8.41,0,0,1-2.53-6.19,8.8,8.8,0,0,1,17.59-.59,5.8,5.8,0,0,1,0,.59,8.43,8.43,0,0,1-2.55,6.23Zm-6.27-.89a4.71,4.71,0,0,0,3.61-1.52,5.29,5.29,0,0,0,1.43-3.78,5.29,5.29,0,0,0-1.43-3.78,4.7,4.7,0,0,0-3.61-1.53,4.76,4.76,0,0,0-3.64,1.53A5.35,5.35,0,0,0,72,16.12a5.33,5.33,0,0,0,1.43,3.78,4.75,4.75,0,0,0,3.63,1.52Zm20.19,3.43a8.69,8.69,0,0,1-6.33-2.5,8.38,8.38,0,0,1-2.54-6.23,8.38,8.38,0,0,1,2.54-6.23,8.65,8.65,0,0,1,6.33-2.5,8.86,8.86,0,0,1,4.65,1.24A8.42,8.42,0,0,1,105.07,12l-3.22,1.75A5.29,5.29,0,0,0,100,11.62a5.11,5.11,0,0,0-6.41.72,5.27,5.27,0,0,0-1.45,3.78,5.27,5.27,0,0,0,1.45,3.78,4.81,4.81,0,0,0,3.66,1.52,5,5,0,0,0,2.75-.8,5.35,5.35,0,0,0,1.85-2.15l3.22,1.74a8.31,8.31,0,0,1-3.17,3.4,9,9,0,0,1-4.65,1.24Zm32.6-.34V15.14a5.39,5.39,0,0,0-.84-3.2,2.89,2.89,0,0,0-2.52-1.16,3.71,3.71,0,0,0-2.25.72,4.44,4.44,0,0,0-1.47,1.93,6.56,6.56,0,0,1,.09,1.08v10h-3.69V15.14a5.26,5.26,0,0,0-.85-3.2,3,3,0,0,0-2.54-1.16,3.89,3.89,0,0,0-3.63,2.38V24.51h-3.69V7.72h3.69V9.3a5.33,5.33,0,0,1,4.47-1.91,5.56,5.56,0,0,1,4.83,2.48A6.42,6.42,0,0,1,127,7.39a6.05,6.05,0,0,1,4.83,2,7.56,7.56,0,0,1,1.71,5.16v10Zm13.77.34a9.08,9.08,0,0,1-4.1-.89,5.76,5.76,0,0,1-2.65-2.67l2.72-1.95A3.69,3.69,0,0,0,141.2,21a4.87,4.87,0,0,0,2.42.62,3,3,0,0,0,1.73-.47,1.47,1.47,0,0,0,.69-1.31,1.53,1.53,0,0,0-.56-1.21,6.22,6.22,0,0,0-2-.94l-1.48-.4c-3-.81-4.44-2.52-4.4-5.14a4.15,4.15,0,0,1,1.72-3.49,6.8,6.8,0,0,1,4.29-1.31,6.2,6.2,0,0,1,5.68,2.85l-2.55,2a3.88,3.88,0,0,0-3.19-1.71,2.93,2.93,0,0,0-1.58.42A1.28,1.28,0,0,0,141.3,12a1.63,1.63,0,0,0,.43,1.15,3.78,3.78,0,0,0,1.58.84l1.71.5a8.11,8.11,0,0,1,3.53,1.9,4.35,4.35,0,0,1,1.17,3.2A4.69,4.69,0,0,1,148,23.4a6.64,6.64,0,0,1-4.39,1.45Z" />
								<path class="sidebar-brand-arrow" d="M154.15,23.63l7.52-7.31L154.15,9l2.15-2.18,9.7,9.47-9.7,9.46Z" />
							</g>
						</svg>
					</span>
					<svg class="sidebar-brand-icon align-middle" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 62.59 100">
						<path d="M0,88.65,39.72,50,0,11.52,11.35,0,62.59,50,11.35,100Z"/>
					</svg>
				</a>
				<ul class="sidebar-nav">
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('dashboard',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('DashboardAdmin'))) {?>active<?php }?>">
							<a class="sidebar-link" href="index.php?module=DashboardAdmin">
								<i class="align-middle" data-feather="sliders"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_dashboard, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('products',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('categories',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('brands',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('features',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ProductsAdmin','ProductAdmin','CategoriesAdmin','CategoryAdmin','BrandsAdmin','BrandAdmin','FeaturesAdmin','FeatureAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#catalog" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ProductsAdmin','ProductAdmin','CategoriesAdmin','CategoryAdmin','BrandsAdmin','BrandAdmin','FeaturesAdmin','FeatureAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="grid"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_catalog, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="catalog" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ProductsAdmin','ProductAdmin','CategoriesAdmin','CategoryAdmin','BrandsAdmin','BrandAdmin','FeaturesAdmin','FeatureAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('products',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ProductsAdmin','ProductAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ProductsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_products, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('categories',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CategoriesAdmin','CategoryAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=CategoriesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('brands',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BrandsAdmin','BrandAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=BrandsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('features',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FeaturesAdmin','FeatureAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=FeaturesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_features, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('orders',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('labels',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('OrdersAdmin','OrderAdmin','OrdersLabelsAdmin','OrdersLabelAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#orders" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('OrdersAdmin','OrderAdmin','OrdersLabelsAdmin','OrdersLabelAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="shopping-cart"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_orders, ENT_QUOTES, 'UTF-8', true);?>
</span>
								<?php if ($_smarty_tpl->getValue('new_orders_counter')) {?><span class="sidebar-badge badge bg-primary"><?php echo $_smarty_tpl->getValue('new_orders_counter');?>
</span><?php }?>
							</a>
							<ul id="orders" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('OrdersAdmin','OrderAdmin','OrdersLabelsAdmin','OrdersLabelAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('orders',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_smarty_tpl->getValue('status') ?? null)) && $_smarty_tpl->getValue('status') == 0 || (null !== ($_smarty_tpl->getValue('order')->status ?? null)) && $_smarty_tpl->getValue('order')->status == 0) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=OrdersAdmin&status=0"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_new_order, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
									<li class="sidebar-item <?php if ((null !== ($_smarty_tpl->getValue('status') ?? null)) && $_smarty_tpl->getValue('status') == 1 || (null !== ($_smarty_tpl->getValue('order')->status ?? null)) && $_smarty_tpl->getValue('order')->status == 1) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=OrdersAdmin&status=1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_accepted_order, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
									<li class="sidebar-item <?php if ((null !== ($_smarty_tpl->getValue('status') ?? null)) && $_smarty_tpl->getValue('status') == 2 || (null !== ($_smarty_tpl->getValue('order')->status ?? null)) && $_smarty_tpl->getValue('order')->status == 2) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=OrdersAdmin&status=2"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_closed_order, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
									<li class="sidebar-item <?php if ((null !== ($_smarty_tpl->getValue('status') ?? null)) && $_smarty_tpl->getValue('status') == 3 || (null !== ($_smarty_tpl->getValue('order')->status ?? null)) && $_smarty_tpl->getValue('order')->status == 3) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=OrdersAdmin&status=3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_canceled_order, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getValue('keyword')) {?>
									<li class="sidebar-item active">
										<a class="sidebar-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('module'=>'OrdersAdmin','keyword'=>$_smarty_tpl->getValue('keyword'),'id'=>null,'label'=>null), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_search, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('labels',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('OrdersLabelsAdmin','OrdersLabelAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=OrdersLabelsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_labels, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('users',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('groups',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('coupons',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('UsersAdmin','UserAdmin','GroupsAdmin','GroupAdmin','CouponsAdmin','CouponAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#users" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('UsersAdmin','UserAdmin','GroupsAdmin','GroupAdmin','CouponsAdmin','CouponAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="users"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_users, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="users" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('UsersAdmin','UserAdmin','GroupsAdmin','GroupAdmin','CouponsAdmin','CouponAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('users',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('UsersAdmin','UserAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=UsersAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_users_list, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('groups',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('GroupsAdmin','GroupAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=GroupsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_groups, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('coupons',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CouponsAdmin','CouponAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=CouponsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_coupons, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('pages',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('menus',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('PagesAdmin','PageAdmin','MenuAdmin','indexAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#pages" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('PagesAdmin','PageAdmin','MenuAdmin','indexAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="layers"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="pages" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('PagesAdmin','PageAdmin','MenuAdmin','indexAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('pages',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menus'), 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
										<li class="sidebar-item <?php if ((null !== ($_smarty_tpl->getValue('m') ?? null)) && (null !== ($_smarty_tpl->getValue('menu') ?? null)) && $_smarty_tpl->getValue('m')->id == $_smarty_tpl->getValue('menu')->id) {?>active<?php }?>">
											<a class="sidebar-link" href="index.php?module=PagesAdmin&menu_id=<?php echo $_smarty_tpl->getValue('m')->id;?>
"><?php echo $_smarty_tpl->getValue('m')->name;?>
</a>
										</li>
									<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('menus',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('MenuAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=MenuAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->menus_settings, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('blog',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('articles',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BlogAdmin','ArticlesCategoriesAdmin','ArticlesAdmin','ArticleAdmin','PostAdmin','ArticlesCategoryAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#blog" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BlogAdmin','ArticlesCategoriesAdmin','ArticlesAdmin','ArticleAdmin','PostAdmin','ArticlesCategoryAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="edit-2"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_blog, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="blog" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BlogAdmin','ArticlesCategoriesAdmin','ArticlesAdmin','ArticleAdmin','PostAdmin','ArticlesCategoryAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('blog',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BlogAdmin','PostAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=BlogAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->blog_posts, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('articles',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ArticlesCategoriesAdmin','ArticlesCategoryAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ArticlesCategoriesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->article_categories, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ArticlesAdmin','ArticleAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ArticlesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('comments',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('feedbacks',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('callbacks',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('subscribes',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CommentsAdmin','CommentAdmin','FeedbacksAdmin','SubscribesAdmin','CallbacksAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#feedbacks" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CommentsAdmin','CommentAdmin','FeedbacksAdmin','SubscribesAdmin','CallbacksAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="message-square"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feedback, ENT_QUOTES, 'UTF-8', true);?>
</span>
								<?php if ($_smarty_tpl->getValue('all_counter')) {?><span class="sidebar-badge badge bg-secondary"><?php echo $_smarty_tpl->getValue('all_counter');?>
</span><?php }?>
							</a>
							<ul id="feedbacks" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CommentsAdmin','CommentAdmin','FeedbacksAdmin','SubscribesAdmin','CallbacksAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('comments',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CommentsAdmin','CommentAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=CommentsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('new_comments_counter') > 0) {?><span class="sidebar-badge badge bg-danger"><?php echo $_smarty_tpl->getValue('new_comments_counter');?>
</span><?php }?></a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('feedbacks',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FeedbacksAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=FeedbacksAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feedback, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('new_feedbacks_counter') > 0) {?><span class="sidebar-badge badge bg-warning"><?php echo $_smarty_tpl->getValue('new_feedbacks_counter');?>
</span><?php }?></a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('callbacks',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CallbacksAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=CallbacksAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_callbacks, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('new_callbacks_counter') > 0) {?><span class="sidebar-badge badge bg-primary"><?php echo $_smarty_tpl->getValue('new_callbacks_counter');?>
</span><?php }?></a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('subscribes',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SubscribesAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=SubscribesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_subscribes, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('new_subscribes_counter') > 0) {?><span class="sidebar-badge badge bg-info"><?php echo $_smarty_tpl->getValue('new_subscribes_counter');?>
</span><?php }?></a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('faq',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FAQsAdmin','FAQAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#faq" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FAQsAdmin','FAQAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="help-circle"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_faq, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="faq" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FAQsAdmin','FAQAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FAQsAdmin','FAQAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=FAQsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->faq_list, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('import',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('export',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('backup',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ImportAdmin','ImportYmlAdmin','ExportAdmin','BackupAdmin','ClearAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#auto" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ImportAdmin','ImportYmlAdmin','ExportAdmin','BackupAdmin','ClearAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="repeat"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_automation, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="auto" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ImportAdmin','ImportYmlAdmin','ExportAdmin','BackupAdmin','ClearAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('import',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ImportAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ImportAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_import, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('import',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ImportYmlAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ImportYmlAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_yml_import, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('export',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ExportAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ExportAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_export, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('backup',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BackupAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=BackupAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_backup, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('backup',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ClearAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ClearAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_clear, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('stats',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('StatsAdmin','ReportStatsAdmin','ReportStatsProdAdmin','CategoryStatsAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#stats" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('StatsAdmin','ReportStatsAdmin','ReportStatsProdAdmin','CategoryStatsAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="pie-chart"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_stats, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="stats" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('StatsAdmin','ReportStatsAdmin','ReportStatsProdAdmin','CategoryStatsAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('StatsAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=StatsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->stats_orders, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ReportStatsAdmin','ReportStatsProdAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=ReportStatsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_products_stat, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CategoryStatsAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=CategoryStatsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_categories_stat, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('seo',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('scripts',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('robots',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SeoAdmin','SettingsCounterAdmin','RobotsAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#seo" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SeoAdmin','SettingsCounterAdmin','RobotsAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="target"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_seo, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="seo" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SeoAdmin','SettingsCounterAdmin','RobotsAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('seo',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SeoAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=SeoAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->seo_automation, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('scripts',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SettingsCounterAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=SettingsCounterAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_scripts, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('robots',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('RobotsAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=RobotsAdmin">Robots.txt</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('design',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ThemeAdmin','TemplatesAdmin','StylesAdmin','ScriptsAdmin','ImagesAdmin','TranslationsAdmin','TranslationAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#design" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ThemeAdmin','TemplatesAdmin','StylesAdmin','ScriptsAdmin','ImagesAdmin','TranslationsAdmin','TranslationAdmin','ThemeSettingsAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="layout"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_design, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="design" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ThemeAdmin','TemplatesAdmin','StylesAdmin','ScriptsAdmin','ImagesAdmin','TranslationsAdmin','TranslationAdmin','ThemeSettingsAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ThemeAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=ThemeAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_templates, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('TemplatesAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=TemplatesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_template_files, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('StylesAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=StylesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_template_style, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ScriptsAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=ScriptsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_template_script, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ImagesAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=ImagesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_template_images, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('TranslationsAdmin','TranslationAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=TranslationsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_translations, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ThemeSettingsAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=ThemeSettingsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_theme_settings, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('banners',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BannersAdmin','BannerAdmin','BannersImagesAdmin','BannersImageAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#banners" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BannersAdmin','BannerAdmin','BannersImagesAdmin','BannersImageAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="image"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_banners, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="banners" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BannersAdmin','BannerAdmin','BannersImagesAdmin','BannersImageAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BannersAdmin','BannerAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=BannersAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->banners_groups, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
								<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('BannersImagesAdmin','BannersImageAdmin'))) {?>active<?php }?>">
									<a class="sidebar-link" href="index.php?module=BannersImagesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_banners_images, ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('settings',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('currency',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('delivery',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('payment',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('managers',$_smarty_tpl->getValue('manager')->permissions) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('languages',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SettingsAdmin','CurrencyAdmin','DeliveriesAdmin','DeliveryAdmin','PaymentMethodsAdmin','PaymentMethodAdmin','ManagersAdmin','ManagerAdmin','SettingsFeedAdmin','LanguagesAdmin','LanguageAdmin','SystemAdmin'))) {?>active<?php }?>">
							<a data-bs-target="#settings" data-bs-toggle="collapse" <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SettingsAdmin','CurrencyAdmin','DeliveriesAdmin','DeliveryAdmin','PaymentMethodsAdmin','PaymentMethodAdmin','ManagersAdmin','ManagerAdmin','SettingsFeedAdmin','LanguagesAdmin','LanguageAdmin','SystemAdmin'))) {?>class="sidebar-link" aria-expanded="true" <?php } else { ?>class="sidebar-link collapsed" aria-expanded="false"<?php }?>>
								<i class="align-middle" data-feather="settings"></i>
								<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
							<ul id="settings" class="sidebar-dropdown list-unstyled collapse <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SettingsAdmin','CurrencyAdmin','DeliveriesAdmin','DeliveryAdmin','PaymentMethodsAdmin','PaymentMethodAdmin','ManagersAdmin','ManagerAdmin','SettingsFeedAdmin','LanguagesAdmin','LanguageAdmin','SystemAdmin'))) {?>show<?php }?>" data-bs-parent="#sidebar">
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('settings',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SettingsAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=SettingsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings_site, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('settings',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SettingsFeedAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=SettingsFeedAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_setting_feed, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('currency',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('CurrencyAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=CurrencyAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_currency, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('delivery',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('DeliveriesAdmin','DeliveryAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=DeliveriesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_shipping, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('payment',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('PaymentMethodsAdmin','PaymentMethodAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=PaymentMethodsAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_payment, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('managers',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('ManagersAdmin','ManagerAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=ManagersAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_managers, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('languages',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('LanguagesAdmin','LanguageAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=LanguagesAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_languages, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('settings',$_smarty_tpl->getValue('manager')->permissions)) {?>
									<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('SystemAdmin'))) {?>active<?php }?>">
										<a class="sidebar-link" href="index.php?module=SystemAdmin"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_system, ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('feeds',$_smarty_tpl->getValue('manager')->permissions)) {?>
						<li class="sidebar-item <?php if ((null !== ($_GET['module'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FeedsAdmin'))) {?>active<?php }?>">
							<a class="sidebar-link" href="index.php?module=FeedsAdmin">
								<i class="align-middle" data-feather="rss"></i> <span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feeds, ENT_QUOTES, 'UTF-8', true);?>
</span>
							</a>
						</li>
					<?php }?>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<?php if ($_smarty_tpl->getValue('all_counter')) {?>
										<i class="align-middle" data-feather="bell"></i>
										<span class="indicator"><?php echo $_smarty_tpl->getValue('all_counter');?>
</span>
									<?php } else { ?>
										<i class="align-middle" data-feather="bell-off"></i>
									<?php }?>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									<?php if ($_smarty_tpl->getValue('all_counter')) {?>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->new_notifications, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->getValue('all_counter');?>
)
									<?php } else { ?>
										<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->no_notification, ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
								</div>
								<?php if ($_smarty_tpl->getValue('all_counter')) {?>
									<div class="list-group">
										<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('orders',$_smarty_tpl->getValue('manager')->permissions)) {?>
											<?php if ($_smarty_tpl->getValue('new_orders_counter') > 0) {?>
												<a href="index.php?module=OrdersAdmin" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-1">
															<i class="text-success mt-n1" data-feather="shopping-cart"></i>
														</div>
														<div class="col-9">
															<div class="text-dark ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_orders, ENT_QUOTES, 'UTF-8', true);?>
</div>
														</div>
														<div class="col-2 text-end">
															<span class="badge bg-success"><?php echo $_smarty_tpl->getValue('new_orders_counter');?>
</span>
														</div>
													</div>
												</a>
											<?php }?>
										<?php }?>
										<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('comments',$_smarty_tpl->getValue('manager')->permissions)) {?>
											<?php if ($_smarty_tpl->getValue('new_comments_counter') > 0) {?>
												<a href="index.php?module=CommentsAdmin" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-1">
															<i class="text-danger mt-n1" data-feather="message-square"></i>
														</div>
														<div class="col-9">
															<div class="text-dark ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comments, ENT_QUOTES, 'UTF-8', true);?>
</div>
														</div>
														<div class="col-2 text-end">
															<span class="badge bg-danger"><?php echo $_smarty_tpl->getValue('new_comments_counter');?>
</span>
														</div>
													</div>
												</a>
											<?php }?>
										<?php }?>
										<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('feedbacks',$_smarty_tpl->getValue('manager')->permissions)) {?>
											<?php if ($_smarty_tpl->getValue('new_feedbacks_counter') > 0) {?>
												<a href="index.php?module=FeedbacksAdmin" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-1">
															<i class="text-warning mt-n1" data-feather="mail"></i>
														</div>
														<div class="col-9">
															<div class="text-dark ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_feedback, ENT_QUOTES, 'UTF-8', true);?>
</div>
														</div>
														<div class="col-2 text-end">
															<span class="badge bg-warning"><?php echo $_smarty_tpl->getValue('new_feedbacks_counter');?>
</span>
														</div>
													</div>
												</a>
											<?php }?>
										<?php }?>
										<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('subscribes',$_smarty_tpl->getValue('manager')->permissions)) {?>
											<?php if ($_smarty_tpl->getValue('new_subscribes_counter') > 0) {?>
												<a href="index.php?module=SubscribesAdmin" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-1">
															<i class="text-info mt-n1" data-feather="at-sign"></i>
														</div>
														<div class="col-9">
															<div class="text-dark ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_subscribes, ENT_QUOTES, 'UTF-8', true);?>
</div>
														</div>
														<div class="col-2 text-end">
															<span class="badge bg-info"><?php echo $_smarty_tpl->getValue('new_subscribes_counter');?>
</span>
														</div>
													</div>
												</a>
											<?php }?>
										<?php }?>
										<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('callbacks',$_smarty_tpl->getValue('manager')->permissions)) {?>
											<?php if ($_smarty_tpl->getValue('new_callbacks_counter') > 0) {?>
												<a href="index.php?module=CallbacksAdmin" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-1">
															<i class="text-primary mt-n1" data-feather="phone"></i>
														</div>
														<div class="col-9">
															<div class="text-dark ms-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_callback, ENT_QUOTES, 'UTF-8', true);?>
</div>
														</div>
														<div class="col-2 text-end">
															<span class="badge bg-primary"><?php echo $_smarty_tpl->getValue('new_callbacks_counter');?>
</span>
														</div>
													</div>
												</a>
											<?php }?>
										<?php }?>
									</div>
								<?php }?>
							</div>
						</li>
						<?php $_smarty_tpl->renderSubTemplate("file:include_languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
						<li class="nav-item">
							<a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
								<div class="position-relative">
									<i class="align-middle" data-feather="maximize"></i>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
								<i class="align-middle me-1" data-feather="user"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/<?php echo $_smarty_tpl->getValue('lang_link');?>
"><i class="align-middle me-1 mt-n1" data-feather="external-link"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_go_to_site, ENT_QUOTES, 'UTF-8', true);?>
</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.php?module=ManagerAdmin&login=<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('manager')->login, ENT_QUOTES, 'UTF-8', true);?>
"><i class="align-middle me-1 mt-n1" data-feather="user"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('manager')->login), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<a class="dropdown-item" href="index.php?module=SettingsAdmin"><i class="align-middle me-1" data-feather="settings"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_settings, ENT_QUOTES, 'UTF-8', true);?>
</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
?logout"><i class="align-middle me-1" data-feather="power"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_exit, ENT_QUOTES, 'UTF-8', true);?>
</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<?php echo $_smarty_tpl->getValue('content');?>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index.php?module=DashboardAdmin" class="text-muted">&copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"Y");?>
 <strong>TurboCMS</strong></a>
							</p>
						</div>
						<div class="col-6 text-end">
							<p class="mb-0">
								TurboShop v.<?php echo $_smarty_tpl->getValue('config')->version;?>
 | <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('manager')->login, ENT_QUOTES, 'UTF-8', true);?>

							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>
	
	<div class="js-fast-save justify-content-center">
		<button type="submit" class="btn btn-primary"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
	</div>

	<div class="modal fade" id="actionModal" tabindex="-1" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_confirm, ENT_QUOTES, 'UTF-8', true);?>
</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body text-center">
					<div class="d-grid gap-2 d-sm-block">
						<button type="button" class="btn btn-success js-submit-delete me-sm-1"><i class="align-middle" data-feather="check"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_yes, ENT_QUOTES, 'UTF-8', true);?>
</button>
						<button type="button" class="btn btn-danger js-dismiss-delete" data-bs-dismiss="modal"><i class="align-middle" data-feather="x"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_no, ENT_QUOTES, 'UTF-8', true);?>
</button>
					</div>
				</div>
			</div>
		</div>
	</div>

		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"app",'priority'=>99,'include'=>array("turbo/design/js/app.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"app",'priority'=>99,'include'=>array("turbo/design/js/app.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);?>

	
		<?php if ($_smarty_tpl->getValue('settings')->lang != 'en') {?>
		<?php echo '<script'; ?>
 src="https://npmcdn.com/flatpickr/dist/l10n/<?php if ($_smarty_tpl->getValue('settings')->lang == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('settings')->lang;
}?>.js"><?php echo '</script'; ?>
>
	<?php }?>

	<?php echo '<script'; ?>
>
		$(function() {
			if ($('.translate-button').length > 0) {
				$(document).ready(function() {
					var targetLang = '<?php if ($_smarty_tpl->getValue('lang_label') == 'ua') {?>uk<?php } else {
echo $_smarty_tpl->getValue('lang_label');
}?>';

					$('.translate-button').on('click', function() {
						var inputElement = $(this).closest('.translate-container').find('.translate-input');
						var text = inputElement.val();

						if (text.trim() !== '') {
							$.post('ajax/translate.php', {
								'source_lang': 'auto',
								'target_lang': targetLang,
								'text': text
							}, function(data) {
								inputElement.val(data);
								<?php if ((null !== ($_GET['module'] ?? null)) && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_GET['module'],array('FeatureAdmin','FAQAdmin','DeliveryAdmin','PaymentMethodAdmin'))) {?>
									set_meta();
								<?php }?>
							});
						}
					});
				});
			}

			if ($('form.js-fast-button').length > 0) {
				$('input,textarea,select, .dropdown-toggle').bind('keyup change dragover click', function() {
					$('.js-fast-save').show();
				});
				$(document).on('click', '.translate-button', function() {
					$('.js-fast-save').show();
				});
				$('.js-fast-save').on('click', function() {
					$('body').find("form.js-fast-button").trigger('submit');
				});
			}
			
			if ($('.js-check-all').length > 0) {
				$(document).on('change', '.js-check-all', function() {
					if ($(this).is(":checked")) {
						$('.js-check-all-single').each(function() {
							if (!$(this).is(":checked")) {
								$(this).trigger("click");
							}
						});
					} else {
						$('.js-check-all-single').each(function() {
							if ($(this).is(":checked")) {
								$(this).trigger("click");
							}
						})
					}
				});
			}
			
			if ($('.input-file').length > 0) {
				document.querySelector("html").classList.add('js-input-file');

				var fileInput = document.querySelector(".input-file"),
					button = document.querySelector(".input-file-trigger"),
					the_return = document.querySelector(".input-file-return");

				button.addEventListener("keydown", function(event) {
					if (event.keyCode == 13 || event.keyCode == 32) {
						fileInput.focus();
					}
				});
				button.addEventListener("click", function(event) {
					fileInput.focus();
					return false;
				});
				fileInput.addEventListener("change", function(event) {
					the_return.innerHTML = this.value;
				});
			}
			
			if ($('.scrollbar-inner').length > 0) {
				$('.scrollbar-inner').scrollbar();
			}

			if ($(window).width() < 1620) {
				if ($('.scrollbar-variants').length > 0) {
					$('.scrollbar-variants').scrollbar();
				}
			}
			
			if ($(".sortable").length > 0) {
				
					var el = document.querySelectorAll(".sortable");
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
							onUpdate: function(evt) {
								if ($(".product-images-list").length > 0) {
									var itemEl = evt.item;
									if ($(itemEl).closest(".js-droplist-wrap").data("image") == "product") {
										$(".product-images-list").find("li.first-image").removeClass("first-image");
										$(".product-images-list").find("li:nth-child(2)").addClass("first-image");
									}
								}
								if ($(".js-form-list").length > 0) {
									$(".js-form-list").ajaxSubmit();
									notyf.success({message: "<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_success, ENT_QUOTES, 'UTF-8', true);?>
", dismissible: true});
								}
							},
						});
					}
				
			}
			
			if ($(".js-ajax-action").length > 0) {
				$(document).on("click", ".js-ajax-action", function() {
					ajax_action($(this));
				});
			}
			
			if ($(".js-parent-image").length > 0) {
				var image_wrapper = $(".js-new-image").clone(true);
				$(".js-new-image").remove();
				$(document).on("click", '.js-delete-item', function() {
					$(".js-upload-image").removeClass("d-none");
					$(".border-image-item").removeClass("border");
					$(".js-accept-delete").val(1);
					$(this).closest(".js-image-wrapper").remove()
				});
				if (window.File && window.FileReader && window.FileList) {
					$(".js-upload-image").on('dragover', function(e) {
						e.preventDefault();
						<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
							$(this).css('background', '#28323f');
						<?php } else { ?>
							$(this).css('background', '#f8f8f8');
						<?php }?>
					});
					$(".js-upload-image").on('dragleave', function() {
						<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
							$(this).css('background', '#28323f');
						<?php } else { ?>
							$(this).css('background', '#f8f8f8');
						<?php }?>
					}); 

					function handleFileSelect(evt) {
						var parent = $(".js-parent-image");
						var files = evt.target.files;
						for (var i = 0, f; f = files[i]; i++) {
							if (!f.type.match('image.*')) {
								continue;
							}
							var reader = new FileReader();
							reader.onload = (function(theFile) {
								return function(e) {
									clone_image = image_wrapper.clone(true);
									clone_image.find("img").attr("src", e.target.result);
									clone_image.find("img").attr("onerror", '$(this).closest(\"div\").remove()');
									clone_image.appendTo(parent);
									$(".js-upload-image").addClass("d-none");
									$(".border-image-item").addClass("border");
								};
							})(f);
							reader.readAsDataURL(f);
						}
						$(".js-upload-image").removeAttr("style");
					}
					$(document).on('change', '.dropzone-image', handleFileSelect);
				}
					}
				if ($(".js-parent-image-two").length > 0) {
					var image_wrapper_two = $(".js-new-image-two").clone(true);
					$(".js-new-image-two").remove();
					$(document).on("click", '.js-delete-item-two', function() {
						$(".js-upload-image-two").removeClass("d-none");
						$(".border-image-item-two").removeClass("border");
						$(".js-accept-delete-two").val(1);
						$(this).closest(".js-image-wrapper-two").remove()
					});
					if (window.File && window.FileReader && window.FileList) {
						$(".js-upload-image-two").on('dragover', function(e) {
							e.preventDefault();
							<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?>
								$(this).css('background', '#28323f');
							<?php } else { ?>
								$(this).css('background', '#f8f8f8');
							<?php }?>
						}); 
 
						$(".js-upload-image-two").on('dragleave', function() {
							<?php if ($_smarty_tpl->getValue('settings')->admin_theme == "dark") {?> 
								$(this).css('background', '#28323f');
							<?php } else { ?>
								$(this).css('background', '#f8f8f8');
							<?php }?> 
						}); 

						function handleFileSelectTwo(evt) {
							var parent = $(".js-parent-image-two");
							var files = evt.target.files;
							for (var i = 0, f; f = files[i]; i++) { 
								if (!f.type.match('image.*')) {
									continue;
								}
								var reader = new FileReader(); 
								reader.onload = (function(theFile) {
									return function(e) {
										clone_image = image_wrapper_two.clone(true);
										clone_image.find("img").attr("src", e.target.result);
										clone_image.find("img").attr("onerror", '$(this).closest(\"div\").remove()');
										clone_image.appendTo(parent);
										$(".js-upload-image-two").addClass("d-none");
										$(".border-image-item-two").addClass("border");
									};
								})(f);
								reader.readAsDataURL(f);
							}
							$(".js-upload-image-two").removeAttr("style");
						}
						$(document).on('change', '.dropzone-image-two', handleFileSelectTwo);
					}
				}
			});
			
			if ($('.js-remove').length > 0) {
				function success_action($this) {
					$(document).on('click', '.js-submit-delete', function() {
						$('.js-form-list input[type="checkbox"][name*="check"]').attr('checked', false);
						$this.closest(".js-row").find('input[type="checkbox"][name*="check"]').prop('checked', true);
						$this.closest(".js-form-list").find('select[name="action"] option[value=delete]').prop('selected', true);
						$this.closest(".js-form-list").submit();
					});
					$(document).on('click', '.js-dismiss-delete', function() {
						$('.js-form-list input[type="checkbox"][name*="check"]').prop('checked', false);
						$this.closest(".js-form-list").find('select[name="action"] option[value=delete]').removeAttr('selected');
						return false;
					});
				}
			}
			
				if ($(".js-ajax-action").length > 0) {
					function ajax_action($this) {
						var state, module, session_id, action, id;
						state = $this.hasClass('js-active-class') ? 0 : 1;
						id = parseInt($this.data('id'));
						module = $this.data('module');
						action = $this.data('action');
						session_id = '<?php echo $_SESSION['id'];?>
';
						$.ajax({
							type: "POST",
							dataType: 'json',
							url: 'ajax/update_object.php',
							data: {
								object: module,
								id: id,
								values: {[action]: state},
								session_id: session_id
							},
							success: function(data) {
								var msg = "";
								if (data) {
									$this.toggleClass('js-active-class');
									$this.removeClass('unapproved');
									notyf.success({message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_success, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true});
									if (action == 'approved' || action == 'processed') {
										$this.closest('div').find('.js-answer_btn').show();
										$this.closest('.js-row').removeClass('unapproved');
									}
								} else {
									notyf.error({message: '<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_error, ENT_QUOTES, 'UTF-8', true);?>
', dismissible: true});
								}
							}
						});
						return false;
					}
				}
			
		
			if ($('input').is('.js-meta-field')) {
				$(window).on("load", function() {
					header_touched = true;
					meta_title_touched = true;
					meta_keywords_touched = true;
					meta_description_touched = true;
					if ($('input[name="header"]').val() == generate_header() || $('input[name="header"]').val() == '')
						header_touched = false;
					if ($('input[name="meta_title"]').val() == generate_meta_title() || $('input[name="meta_title"]').val() == '')
						meta_title_touched = false;
					if ($('input[name="meta_keywords"]').val() == generate_meta_keywords() || $('input[name="meta_keywords"]').val() == '')
						meta_keywords_touched = false;
					if ($('textarea[name="meta_description"]').val() == generate_meta_description() || $('textarea[name="meta_description"]').val() == '')
						meta_description_touched = false;
					$('input[name="header"]').change(function() { header_touched = true; });
					$('input[name="meta_title"]').change(function() { meta_title_touched = true; });
					$('input[name="meta_keywords"]').change(function() { meta_keywords_touched = true; });
					$('textarea[name="meta_description"]').change(function() { meta_description_touched = true; });

					$('#js-meta-title-counter').text('(' + $('input[name="meta_title"]').val().length + ')');
					$('#js-meta-description-counter').text('(' + $('textarea[name="meta_description"]').val().length + ')');

					$('input[name="name"]').keyup(function() { set_meta(); });
					$('input[name="author"]').keyup(function() { set_meta(); });
					$('input[name="meta_title"]').keyup(function() { $('#js-meta-title-counter').text('(' + $('input[name="meta_title"]').val().length + ')'); });
					$('textarea[name="meta_description"]').keyup(function() { $('#js-meta-description-counter').text('(' + $('textarea[name="meta_description"]').val().length + ')'); });

					if ($(".js-meta-brand").length > 0) {
						$("select[name=brand_id]").on("change", function() {
							set_meta();
						})
					}
					
					if ($(".js-meta-categories").length > 0) {
						$(".js-meta-categories").on("change", function() {
							set_meta();
						})
					}
				});

				function set_meta() {
					if (!header_touched)
						$('input[name="header"]').val(generate_header());
					if (!meta_title_touched)
						$('input[name="meta_title"]').val(generate_meta_title());
					if (!meta_keywords_touched)
						$('input[name="meta_keywords"]').val(generate_meta_keywords());
					if (!meta_description_touched)
						$('textarea[name="meta_description"]').val(generate_meta_description());
					if (!$('#block-translit').is(':checked'))
						$('input[name="url"]').val(generate_url());
				}

				function generate_header() {
					name = $('input[name="name"]').val();
					return name;
				}

				function generate_meta_title() {
					name = $('input[name="name"]').val();
					$('#js-meta-title-counter').text('(' + name.length + ')');
					return name;
				}

				function generate_meta_keywords() {
					name = $('input[name="name"]').val();
					result = name;
					if ($('input[name="author"]').length > 0) {
						author = $('input[name="author"]').val();
						if (typeof(author) == 'string' && author != '')
							result += ', ' + author;
					}
					if ($(".js-meta-brand").length > 0) {
						brand = $('select[name="brand_id"] option:selected').data('brand-name');
						if (typeof(brand) == 'string' && brand != '')
							result += ', ' + brand;
					}
					$('select[name="categories[]"]').each(function(index) {
						c = $(this).find('option:selected').attr('category-name');
						if (typeof(c) == 'string' && c != '')
							result += ', ' + c;
					});
					$('select[name="category_id"]').each(function(index) {
						c = $(this).find('option:selected').attr('category-name');
						if (typeof(c) == 'string' && c != '')
							result += ', ' + c;
					});
					return result;
				}

				$(document).ready(function() {
					if (typeof tinyMCE !== 'undefined') {
						tinyMCE.init({
							selector: '#js-editor',
							setup: function(editor) {
								editor.on('init', function() {
									generate_meta_description();
								});
							}
						});
					}
				});

				function generate_meta_description() {
					var editor = tinyMCE.get("js-editor");
					if (editor) {
						var description = editor.getContent().replace(/(<([^>]+)>)/ig, " ").replace(/(\&nbsp;)/ig, " ").replace(/^\s+|\s+$/g, '').substr(0, 512);
						$('#js-meta-description-counter').text('(' + description.length + ')');
						return description;
					} else {
						return $('.js-editor-class').val().replace(/(<([^>]+)>)/ig, " ").replace(/(\&nbsp;)/ig, " ").replace(/^\s+|\s+$/g, '').substr(0, 512);
					}
				}

				function generate_url() {
					url = $('input[name="name"]').val();
					url = url.replace(/[\s]+/gi, '-');
					url = translit(url);
					url = url.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();
					return url;
				}

				function translit(str) {
					var cyr = ("А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я").split("-")
					var lat = ("A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya").split("-")
					var res = '';
					for (var i = 0, l = str.length; i < l; i++) {
						var s = str.charAt(i),
							n = cyr.indexOf(s);
						if (n >= 0) { res += lat[n]; } else { res += s; }
					}
					return res;
				}
			}
			
			$(window).on('load', function() {
				 $(document).on('click', '.card-actions', function() {
					$(this).closest('.card').find('.collapse-chevron').toggleClass('rotate-180');
					$(this).closest('.card').find('.collapse-card').slideToggle(500);
				});
				
				$(document).on('click', '.js-disable-url', function() {
					if ($('.js-url').attr('readonly')) {
						$('.js-url').removeAttr('readonly');
					} else {
						$('.js-url').attr('readonly', true);
					}

					$(this).find('i').toggleClass('url-unlock');
					$('#block-translit').trigger('click');
				});
				
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
					$('.selectpicker').selectpicker('mobile');
				}
			});

			(function toggleFullscreen() {
				document.querySelectorAll(".js-fullscreen").forEach((e) => {
					e.addEventListener("click", () => {
						if (document.fullscreenElement) {
							document.exitFullscreen();
						} else {
							document.body.requestFullscreen();
						}
					});
				});
			})();
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
