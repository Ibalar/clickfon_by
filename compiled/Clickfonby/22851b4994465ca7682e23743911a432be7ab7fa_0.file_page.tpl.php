<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:52:03
  from 'file:page.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69230373e0baf9_13981380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22851b4994465ca7682e23743911a432be7ab7fa' => 
    array (
      0 => 'page.tpl',
      1 => 1763894066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:404.tpl' => 1,
  ),
))) {
function content_69230373e0baf9_13981380 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
$_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);?>

<?php if ($_smarty_tpl->getValue('page')->url == "404") {?>
	<?php $_smarty_tpl->renderSubTemplate('file:404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
    <section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated"
             style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fw-bold mb-0">
                <li class="breadcrumb-item color-999">
                    <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
                <?php if ($_smarty_tpl->getValue('page')) {?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php } else { ?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->sitemap, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
            </ol>
        </nav>
        <div class="topic mt-3">
            <div class="topic__inner">
                <div class="topic__heading">
                    <?php if ($_smarty_tpl->getValue('page')) {?>
                        <h1 id="pagetitle" class="switcher-title"><span data-page="<?php echo $_smarty_tpl->getValue('page')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>
                    <?php } else { ?>
                        <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->sitemap, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>


    <section class="tc-page-section p-30 radius-4 bg-white mt-3 wow fadeInUp animated">
        <div class="main-content pb-30 border-bottom row gx-4">
            <div class="col-lg-12">
                <div class="content-block">
                                        <?php if ($_smarty_tpl->getValue('page')) {?>
                        <div class="fsz-14 mb-30 text">
                            <?php echo $_smarty_tpl->getValue('page')->body;?>

                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

<?php }
}
}
