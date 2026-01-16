<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:action/top_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f52ac09_52765256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff44a9a5da25e19c10347db702c8da0d448ca17' => 
    array (
      0 => 'action/top_menu.tpl',
      1 => 1762973568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f52ac09_52765256 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\action';
?><div class="tc-top-navbar-style1 py-3 bg-red1 text-white d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <div class="top-nav-side justify-content-lg-start">
                    <div class="side-links">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach10DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('p')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_top) {?>
                                <a class="me-lg-3" href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p')->url;?>
"><span data-page="<?php echo $_smarty_tpl->getValue('p')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')->header, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
