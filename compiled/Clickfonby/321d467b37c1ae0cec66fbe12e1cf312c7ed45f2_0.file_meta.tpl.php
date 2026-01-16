<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:head/meta.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f506125_19289666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '321d467b37c1ae0cec66fbe12e1cf312c7ed45f2' => 
    array (
      0 => 'head/meta.tpl',
      1 => 1766596504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f506125_19289666 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\head';
?><base href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php if ($_smarty_tpl->getValue('seo')->seo_automation == "on") {?>
    <meta name="description" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('meta_description') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('auto_meta')->description ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
<?php } else { ?>
    <meta name="description" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('auto_meta')->description ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('meta_description') ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>

<?php if ($_smarty_tpl->getValue('seo')->seo_automation == "on") {?>
    <meta name="keywords" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('meta_keywords') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('auto_meta')->keywords ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
<?php } else { ?>
    <meta name="keywords" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('auto_meta')->keywords ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('meta_keywords') ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>

<meta name="author" content="">

<!-- Title  -->
<?php if ($_smarty_tpl->getValue('seo')->seo_automation == "on") {?>
    <title><?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('meta_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('auto_meta')->title ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php } else { ?>
    <title><?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('auto_meta')->title ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('meta_title') ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php }?>

<?php if ($_smarty_tpl->getValue('module') == 'ProductView') {?>
    <meta property="og:url" content="<?php echo $_smarty_tpl->getValue('config')->root_url;
if ($_smarty_tpl->getValue('lang_link')) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('lang_link'),'/','');
}
echo $_smarty_tpl->getValue('canonical');?>
">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta property="og:description" content='<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
    <meta property="og:image" content="<?php if ($_smarty_tpl->getValue('product')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,330,300);
}?>">
    <link rel="image_src" href="<?php if ($_smarty_tpl->getValue('product')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,330,300);
}?>">
    <meta name="twitter:card" content="product">
    <meta name="twitter:url" content="<?php echo $_smarty_tpl->getValue('config')->root_url;
echo $_smarty_tpl->getValue('canonical');?>
">
    <meta name="twitter:site" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:description" content="<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:image" content="<?php if ($_smarty_tpl->getValue('product')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,330,300);
}?>">
    <meta name="twitter:label1" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->price,null,false);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->code, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:label2" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
<?php } elseif ($_smarty_tpl->getValue('module') == 'BlogView' && $_smarty_tpl->getValue('post')) {?>
    <meta property="og:url" content="<?php echo $_smarty_tpl->getValue('config')->root_url;
if ($_smarty_tpl->getValue('lang_link')) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('lang_link'),'/','');
}
echo $_smarty_tpl->getValue('canonical');?>
">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php if ($_smarty_tpl->getValue('post')->image) {?>
        <meta property="og:image" content="<?php if ($_smarty_tpl->getValue('post')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_posts')($_smarty_tpl->getValue('post')->image,400,300);
}?>">
        <link rel="image_src" href="<?php if ($_smarty_tpl->getValue('post')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_posts')($_smarty_tpl->getValue('post')->image,400,300);
}?>">
    <?php } else { ?>
        <meta property="og:image" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
    <?php }?>
    <meta property="og:description" content='<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('post')->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:description" content="<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('post')->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:image" content="<?php if ($_smarty_tpl->getValue('post')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_posts')($_smarty_tpl->getValue('post')->image,400,300);
}?>">
<?php } elseif ($_smarty_tpl->getValue('module') == 'ArticlesView' && $_smarty_tpl->getValue('post')) {?>
    <meta property="og:url" content="<?php echo $_smarty_tpl->getValue('config')->root_url;
if ($_smarty_tpl->getValue('lang_link')) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('lang_link'),'/','');
}
echo $_smarty_tpl->getValue('canonical');?>
">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php if ($_smarty_tpl->getValue('post')->image) {?>
        <meta property="og:image" content="<?php if ($_smarty_tpl->getValue('post')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_articles')($_smarty_tpl->getValue('post')->image,400,300);
}?>">
        <link rel="image_src" href="<?php if ($_smarty_tpl->getValue('post')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_articles')($_smarty_tpl->getValue('post')->image,400,300);
}?>">
    <?php } else { ?>
        <meta property="og:image" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
    <?php }?>
    <meta property="og:description" content='<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('post')->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:description" content="<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('post')->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
    <meta name="twitter:image" content="<?php if ($_smarty_tpl->getValue('post')->image) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('resize_articles')($_smarty_tpl->getValue('post')->image,400,300);
}?>">
<?php } else { ?>
    <meta property="og:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
">
    <meta property="og:image" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
    <meta property="og:site_name" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php if ($_smarty_tpl->getValue('seo')->seo_automation == "on") {?>
        <meta property="og:description" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('meta_description') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('auto_meta')->description ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } else { ?>
        <meta property="og:description" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('auto_meta')->description ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('meta_description') ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>
    <link rel="image_src" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php if ($_smarty_tpl->getValue('seo')->seo_automation == "on") {?>
        <meta name="twitter:description" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('meta_description') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('auto_meta')->description ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } else { ?>
        <meta name="twitter:description" content="<?php echo htmlspecialchars((string)((($tmp = $_smarty_tpl->getValue('auto_meta')->description ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('meta_description') ?? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.svg">
<?php }?>

<?php if ($_smarty_tpl->getValue('module') == 'ProductsView') {?>
    <?php if ($_smarty_tpl->getValue('is_filter') && !$_smarty_tpl->getValue('page')) {?>
        <meta name="robots" content="noindex,nofollow">
    <?php } elseif ((null !== ($_GET['page'] ?? null)) || (null !== ($_GET['sort'] ?? null))) {?>
        <meta name="robots" content="noindex,follow">
    <?php } elseif ((null !== ($_GET['keyword'] ?? null))) {?>
        <meta name="robots" content="noindex,follow">
    <?php } else { ?>
        <meta name="robots" content="index,follow">
    <?php }
} elseif ($_GET['module'] == "RegisterView" || $_GET['module'] == "LoginView" || $_GET['module'] == "UserView" || $_GET['module'] == "CartView") {?>
    <meta name="robots" content="noindex,follow">
<?php } elseif ($_GET['module'] == "OrderView") {?>
    <meta name="robots" content="noindex,nofollow">
<?php } elseif ($_GET['module'] == "BlogView" && (null !== ($_GET['sort'] ?? null)) || (null !== ($_GET['keyword'] ?? null))) {?>
    <meta name="robots" content="noindex,follow">
<?php } elseif ($_GET['module'] == "ArticlesView" && (null !== ($_GET['sort'] ?? null)) || (null !== ($_GET['keyword'] ?? null)) || (null !== ($_GET['author'] ?? null))) {?>
    <meta name="robots" content="noindex,follow">
<?php } else { ?>
    <meta name="robots" content="index,follow">
<?php }?>

<meta name="google-site-verification" content="09Xq94s4qspoJAVDuIWC2PiR3Bj53329zGAEkRJhXyU" />

<?php if ($_smarty_tpl->getValue('canonical')) {?>
    <link rel="canonical" href="<?php echo $_smarty_tpl->getValue('config')->root_url;
if ($_smarty_tpl->getValue('lang_link')) {?>/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('lang_link'),'/','');
}
echo $_smarty_tpl->getValue('canonical');?>
">
<?php }?>

<link rel="shortcut icon" href="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/apple-touch-icon.png" />
<link rel="manifest" href="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/site.webmanifest">

<!-- Yandex.Metrika counter -->
<?php echo '<script'; ?>
 type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105984402', 'ym');

    ym(105984402, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
<?php echo '</script'; ?>
>
    <noscript><div><img src="https://mc.yandex.ru/watch/105984402" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->

<!-- Google Tag Manager -->

    <?php echo '<script'; ?>
>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-58QFM7M2');<?php echo '</script'; ?>
>


<!-- End Google Tag Manager -->
<?php }
}
