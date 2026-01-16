<?php
/* Smarty version 5.4.2, created on 2025-11-14 16:26:59
  from 'file:pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69172e23e50d46_82933580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97bb3f359d85ae6741b7e446915256ededb2b8b8' => 
    array (
      0 => 'pagination.tpl',
      1 => 1732667512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69172e23e50d46_82933580 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
if ($_smarty_tpl->getValue('pages_count') > 1) {?>
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center mt-3">

			<?php $_smarty_tpl->assign('visible_pages', 5, false, NULL);?>

			<?php $_smarty_tpl->assign('page_from', 1, false, NULL);?>

			<?php if ($_smarty_tpl->getValue('current_page') > $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('visible_pages')/2)) {?>
				<?php $_smarty_tpl->assign('page_from', $_smarty_tpl->getSmarty()->getModifierCallback('max')(1,$_smarty_tpl->getValue('current_page')-$_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('visible_pages')/2)-1), false, NULL);?>
			<?php }?>

			<?php if ($_smarty_tpl->getValue('current_page') > $_smarty_tpl->getValue('pages_count')-$_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getValue('visible_pages')/2)) {?>
				<?php $_smarty_tpl->assign('page_from', $_smarty_tpl->getSmarty()->getModifierCallback('max')(1,$_smarty_tpl->getValue('pages_count')-$_smarty_tpl->getValue('visible_pages')-1), false, NULL);?>
			<?php }?>

			<?php $_smarty_tpl->assign('page_to', $_smarty_tpl->getSmarty()->getModifierCallback('min')($_smarty_tpl->getValue('page_from')+$_smarty_tpl->getValue('visible_pages'),$_smarty_tpl->getValue('pages_count')-1), false, NULL);?>

			<?php if ($_smarty_tpl->getValue('current_page') > 1) {?>
				<li class="page-item chevron-icon">
					<a id="PrevLink" class="page-link px-2" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('current_page')-1), $_smarty_tpl);?>
"><i class="align-middle" data-feather="chevron-left"></i></a>
				</li>
			<?php }?>

			<li class="page-item <?php if ($_smarty_tpl->getValue('current_page') == 1) {?>active<?php }?>">
				<a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>null), $_smarty_tpl);?>
">1</a>
			</li>

			<?php
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('page_to')) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_0_start = (int)@$_smarty_tpl->getValue('page_from') < 0 ? max(0, (int)@$_smarty_tpl->getValue('page_from') + $__section_pages_0_loop) : min((int)@$_smarty_tpl->getValue('page_from'), $__section_pages_0_loop);
$__section_pages_0_total = min(($__section_pages_0_loop - $__section_pages_0_start), $__section_pages_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new \Smarty\Variable(array());
if ($__section_pages_0_total !== 0) {
for ($__section_pages_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_0_start; $__section_pages_0_iteration <= $__section_pages_0_total; $__section_pages_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
				<?php $_smarty_tpl->assign('p', ($_smarty_tpl->getValue('__smarty_section_pages')['index'] ?? null)+1, false, NULL);?>
				<li class="page-item <?php if ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('current_page')) {?>active<?php }?>">
					<?php if (($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('page_from')+1 && $_smarty_tpl->getValue('p') != 2) || ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('page_to') && $_smarty_tpl->getValue('p') != $_smarty_tpl->getValue('pages_count')-1)) {?>
						<a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('p')), $_smarty_tpl);?>
">...</a>
					<?php } else { ?>
						<a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('p')), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('p');?>
</a>
					<?php }?>
				</li>
			<?php
}
}
?>

			<li class="page-item <?php if ($_smarty_tpl->getValue('current_page') == $_smarty_tpl->getValue('pages_count')) {?>active<?php }?>">
				<a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('pages_count')), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('pages_count');?>
</a>
			</li>

			<?php if ($_smarty_tpl->getValue('current_page') < $_smarty_tpl->getValue('pages_count')) {?>
				<li class="page-item chevron-icon">
					<a id="NextLink" class="page-link px-2" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('current_page')+1), $_smarty_tpl);?>
"><i class="align-middle" data-feather="chevron-right"></i></a>
				</li>
			<?php }?>

			<li class="page-item">
				<a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>'all'), $_smarty_tpl);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->pagination_show_all, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</li>

		</ul>
	</nav>
<?php }
}
}
