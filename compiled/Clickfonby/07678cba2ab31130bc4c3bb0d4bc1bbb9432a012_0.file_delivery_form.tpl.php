<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:41:21
  from 'file:delivery/ExpressDelivery/design/html/delivery_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300f1bad067_41397565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07678cba2ab31130bc4c3bb0d4bc1bbb9432a012' => 
    array (
      0 => 'delivery/ExpressDelivery/design/html/delivery_form.tpl',
      1 => 1712396476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692300f1bad067_41397565 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/delivery/ExpressDelivery/design/html';
if ($_smarty_tpl->getValue('delivery')->module) {?>
	<div id="expressDelivery" class="row">
		<div class="col-md-12 mb-3">
			<div class="form-group fill-animate">
				<label for="ex-city" class="form-label"><?php echo $_smarty_tpl->getValue('translate')->city;?>
<span class="text-danger">*</span></label>
				<div class="input">
					<input type="text" class="form-control" id="ex-city" name="ex-city" value="" required="" aria-required="true">
					<div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('translate')->invalid;?>
</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<div class="form-group fill-animate">
				<label for="ex-street" class="form-label"><?php echo $_smarty_tpl->getValue('translate')->street;?>
<span class="text-danger">*</span></label>
				<div class="input">
					<input type="text" class="form-control" id="ex-street" name="ex-street" value="" required="" aria-required="true">
					<div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('translate')->invalid;?>
</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<div class="form-group fill-animate">
				<label for="ex-house" class="form-label"><?php echo $_smarty_tpl->getValue('translate')->house;?>
<span class="text-danger">*</span></label>
				<div class="input">
					<input type="text" class="form-control" id="ex-house" name="ex-house" value="" required="" aria-required="true">
					<div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('translate')->invalid;?>
</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<div class="form-group fill-animate">
				<label for="ex-apartment" class="form-label"><?php echo $_smarty_tpl->getValue('translate')->apartment;?>
</label>
				<input type="text" class="form-control" id="ex-apartment" name="ex-apartment" value="">
			</div>
		</div>
	</div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"np",'include'=>array("delivery/".((string)$_smarty_tpl->getValue('delivery')->module)."/design/css/style.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"np",'include'=>array("delivery/".((string)$_smarty_tpl->getValue('delivery')->module)."/design/css/style.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('js')) {
throw new \Smarty\Exception('block tag \'js\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"ex",'priority'=>10,'include'=>array("delivery/".((string)$_smarty_tpl->getValue('delivery')->module)."/design/js/ex.js")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('js')->handle(array('id'=>"ex",'priority'=>10,'include'=>array("delivery/".((string)$_smarty_tpl->getValue('delivery')->module)."/design/js/ex.js")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('javascript')->handle(array('minify'=>true), $_smarty_tpl);
}
}
