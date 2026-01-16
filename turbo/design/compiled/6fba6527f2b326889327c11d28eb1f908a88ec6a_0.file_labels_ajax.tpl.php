<?php
/* Smarty version 5.4.2, created on 2025-11-14 21:49:39
  from 'file:labels_ajax.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691779c3bbbc54_86300361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fba6527f2b326889327c11d28eb1f908a88ec6a' => 
    array (
      0 => 'labels_ajax.tpl',
      1 => 1732641408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691779c3bbbc54_86300361 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ((null !== ($_GET['module'] ?? null)) && $_GET['module'] == "OrderAdmin") {?>
	<?php if ($_smarty_tpl->getValue('labels')) {?>
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('labels'), 'l');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach6DoElse = false;
?>
			<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('l')->id,$_smarty_tpl->getValue('order_labels'))) {?>
				<span class="badge me-1" style="background-color:<?php echo $_smarty_tpl->getValue('l')->color;?>
;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
				<input type="hidden" name="order_labels[]" value="<?php echo $_smarty_tpl->getValue('l')->id;?>
">
			<?php }?>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	<?php }
} else { ?>
	<?php if ((null !== ($_smarty_tpl->getValue('order')->labels ?? null))) {?>
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')->labels, 'l');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value) {
$foreach7DoElse = false;
?>
			<span class="badge me-1" style="background-color:<?php echo $_smarty_tpl->getValue('l')->color;?>
;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('l')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	<?php }
}
}
}
