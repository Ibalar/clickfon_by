<?php
/* Smarty version 5.4.2, created on 2025-11-29 20:45:00
  from 'file:header/search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692b311c5f7b58_70093096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '672cbd0db5219e39044bd8fe63c1c693725235a0' => 
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
function content_692b311c5f7b58_70093096 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/header';
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
