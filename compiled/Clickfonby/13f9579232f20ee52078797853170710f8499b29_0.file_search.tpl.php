<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:43
  from 'file:header/search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed71e2010_77929789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f9579232f20ee52078797853170710f8499b29' => 
    array (
      0 => 'header/search.tpl',
      1 => 1764438292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697c5ed71e2010_77929789 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\header';
?><div class="search-cat d-none d-lg-block">
        <form action="<?php echo $_smarty_tpl->getValue('lang_link');?>
all-products" class="input-group">
            <input type="text" class="form-control" id="title-search-input" name="keyword" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->find, ENT_QUOTES, 'UTF-8', true);?>
">
            <button class="search-btn" type="submit"> <i class="fal fa-search"></i> </button>
        </form>

</div><?php }
}
