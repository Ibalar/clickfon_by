<?php
/* Smarty version 5.4.2, created on 2025-11-30 13:01:25
  from 'file:brands.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692c15f5a1ffc5_90724594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d9c063f74da81374c4edf547ac4fea401941b0' => 
    array (
      0 => 'brands.tpl',
      1 => 1764496882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692c15f5a1ffc5_90724594 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
		<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
		<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->global_brands, false, 32);?>

		<?php $_smarty_tpl->assign('canonical', "/brands", false, 32);
}?>

<!--title_content-->
<section class="page-top-info p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0" itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php $_smarty_tpl->assign('level', 1, false, NULL);?>
            <li class="breadcrumb-item color-999" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
            </li>
            <?php if ($_smarty_tpl->getValue('page')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('page')->url;?>
" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
                </li>
            <?php } else { ?>
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
                </li>
            <?php }?>
        </ol>
    </nav>

    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                <h1 id="pagetitle" class="switcher-title">
                    <?php if ($_smarty_tpl->getValue('page')) {?>
                        <span data-page="<?php echo $_smarty_tpl->getValue('page')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_brands, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </h1>
            </div>
        </div>
    </div>
</section>
<!--end-title_content-->

<section class="tc-trend-search-style1 wow fadeInUp slow animated">
    <div class="main-content pb-30 border-bottom row gx-4">
        <div class="col-lg-12">
            <div class="content-block">
                <?php if ($_smarty_tpl->getValue('brands')) {?>
                    <div class="links">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('brands'), 'b');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
?>
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands/<?php echo $_smarty_tpl->getValue('b')->url;?>
" class="link"> <?php echo $_smarty_tpl->getValue('b')->name;?>
 </a>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->no_brands_found, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<?php }
}
