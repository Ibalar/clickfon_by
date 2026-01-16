<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:26:54
  from 'file:include_languages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e1ee440f3_89920948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f84b17c3e9aef91e04b6e78fd23bf56be3bdff' => 
    array (
      0 => 'include_languages.tpl',
      1 => 1732666566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69172e1ee440f3_89920948 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('product') && $_smarty_tpl->getValue('product')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('product')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('category')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('brand')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('feature') && $_smarty_tpl->getValue('feature')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('feature')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('order') && $_smarty_tpl->getValue('order')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('order')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('user') && $_smarty_tpl->getValue('user')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('user')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('group') && $_smarty_tpl->getValue('group')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('group')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('page')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('post') && $_smarty_tpl->getValue('post')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('post')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('faq') && $_smarty_tpl->getValue('faq')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('faq')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('banner') && $_smarty_tpl->getValue('banner')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('banner')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('banners_image') && $_smarty_tpl->getValue('banners_image')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('banners_image')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('delivery') && $_smarty_tpl->getValue('delivery')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('delivery')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('payment_method') && $_smarty_tpl->getValue('payment_method')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('payment_method')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('language') && $_smarty_tpl->getValue('language')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('language')->id, false, NULL);
} elseif ($_smarty_tpl->getValue('translation') && $_smarty_tpl->getValue('translation')->id) {?>
	<?php $_smarty_tpl->assign('id', $_smarty_tpl->getValue('translation')->id, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('languages')) {?>
	<li class="nav-item dropdown">
		<a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
			<img src="design/flags/4x3/<?php echo $_smarty_tpl->getValue('lang_label');?>
.svg" alt="<?php if ($_smarty_tpl->getValue('lang_name')) {
echo $_smarty_tpl->getValue('lang_name');
}?>" title="<?php if ($_smarty_tpl->getValue('lang_name')) {
echo $_smarty_tpl->getValue('lang_name');
}?>">
		</a>
		<div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'lang');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lang')->value) {
$foreach1DoElse = false;
?>
				<a class="dropdown-item <?php if ($_smarty_tpl->getValue('lang')->id == $_smarty_tpl->getValue('lang_id')) {?>active<?php }?>" href="<?php if ($_smarty_tpl->getValue('id')) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('lang_id'=>$_smarty_tpl->getValue('lang')->id,'id'=>$_smarty_tpl->getValue('id')), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('lang_id'=>$_smarty_tpl->getValue('lang')->id), $_smarty_tpl);
}?>">
					<img src="design/flags/4x3/<?php echo $_smarty_tpl->getValue('lang')->label;?>
.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->name, ENT_QUOTES, 'UTF-8', true);?>
" width="20" class="nav-flag-icon align-middle me-1" />
					<span class="align-middle"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
				</a>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</div>
	</li>
<?php }
}
}
