<?php
/* Smarty version 5.4.2, created on 2026-01-16 21:46:05
  from 'file:includes/logo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a876dd59470_65343773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2286e2df753054823908d9279849e0f61162a350' => 
    array (
      0 => 'includes/logo.tpl',
      1 => 1768589145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a876dd59470_65343773 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\includes';
ob_start();
echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('img')->handle(array('url'=>"design/".$_prefixVariable3."/images/logo.svg",'alt'=>htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true),'width'=>162,'height'=>40,'lazy'=>false,'class'=>"logo"), $_smarty_tpl);
}
}
