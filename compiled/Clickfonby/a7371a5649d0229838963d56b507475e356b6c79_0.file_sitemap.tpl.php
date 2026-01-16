<?php
/* Smarty version 5.4.2, created on 2025-11-24 21:58:52
  from 'file:sitemap.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6924aaec525b63_43653372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7371a5649d0229838963d56b507475e356b6c79' => 
    array (
      0 => 'sitemap.tpl',
      1 => 1763894760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6924aaec525b63_43653372 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
		<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
		<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->sitemap, false, 32);?>

		<?php $_smarty_tpl->assign('canonical', "/sitemap", false, 32);
}?>

<style>
    .cat-list ul {
        margin: 0;
        padding-left: 16px;
    }

    .cat-list li {
        line-height: 1.2;
    }

    .cat-list li a{
        margin-bottom: 15px;
    }

    .cat-list ul ul {
        padding-left: 32px;
    }

    .cat-list ul ul li a{
        font-weight: bold;
    }

    .cat-list ul ul ul {
        padding-left: 48px;
    }

    .cat-list ul ul ul ul {
        padding-left: 64px;
    }

</style>

<!--title_content-->
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

<!--end-title_content-->


<section class="tc-about-cards">
    <div class="row gx-2">
        <div class="col-lg-6 mt-3">
            <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->online_store, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p1');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p1')->value) {
$foreach0DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('p1')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_sitemap_1 && $_smarty_tpl->getValue('p1')->visible) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p1')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p1')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                <?php if ($_smarty_tpl->getValue('p1')->subpages) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p1')->subpages, 'p1_2');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p1_2')->value) {
$foreach1DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('p1_2')->visible) {?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p1_2')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p1_2')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                    <?php if ($_smarty_tpl->getValue('p1_2')->subpages) {?>
                                                        <ul>
                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p1_2')->subpages, 'p1_3');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p1_3')->value) {
$foreach2DoElse = false;
?>
                                                                <?php if ($_smarty_tpl->getValue('p1_3')->visible) {?>
                                                                    <li>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p1_3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p1_3')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                    </li>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    <?php }?>
                                                </li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
                        <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->catalog, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p2');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p2')->value) {
$foreach3DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('p2')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_sitemap_2 && $_smarty_tpl->getValue('p2')->visible) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p2')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p2')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                <?php if ($_smarty_tpl->getValue('p2')->subpages) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p2')->subpages, 'p2_2');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p2_2')->value) {
$foreach4DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('p2_2')->visible) {?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p2_2')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p2_2')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                    <?php if ($_smarty_tpl->getValue('p2_2')->subpages) {?>
                                                        <ul>
                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p2_2')->subpages, 'p2_3');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p2_3')->value) {
$foreach5DoElse = false;
?>
                                                                <?php if ($_smarty_tpl->getValue('p2_3')->visible) {?>
                                                                    <li>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p2_3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p2_3')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                    </li>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    <?php }?>
                                                </li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

                        <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->information, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p3');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p3')->value) {
$foreach6DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('p3')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_sitemap_3 && $_smarty_tpl->getValue('p3')->visible) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p3')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                <?php if ($_smarty_tpl->getValue('p3')->subpages) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p3')->subpages, 'p3_2');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p3_2')->value) {
$foreach7DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('p3_2')->visible) {?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p3_2')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p3_2')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                    <?php if ($_smarty_tpl->getValue('p3_2')->subpages) {?>
                                                        <ul>
                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p3_2')->subpages, 'p3_3');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p3_3')->value) {
$foreach8DoElse = false;
?>
                                                                <?php if ($_smarty_tpl->getValue('p3_3')->visible) {?>
                                                                    <li>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p3_3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p3_3')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                    </li>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    <?php }?>
                                                </li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

                        <div class="cat-list pt-20">
                <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->help, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p4');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p4')->value) {
$foreach9DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('p4')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_sitemap_4 && $_smarty_tpl->getValue('p4')->visible) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p4')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p4')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                <?php if ($_smarty_tpl->getValue('p4')->subpages) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p4')->subpages, 'p4_2');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p4_2')->value) {
$foreach10DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('p4_2')->visible) {?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p4_2')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p4_2')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                    <?php if ($_smarty_tpl->getValue('p4_2')->subpages) {?>
                                                        <ul>
                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p4_2')->subpages, 'p4_3');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p4_3')->value) {
$foreach11DoElse = false;
?>
                                                                <?php if ($_smarty_tpl->getValue('p4_3')->visible) {?>
                                                                    <li>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p4_3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p4_3')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                    </li>
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    <?php }?>
                                                </li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>

                        <?php if ($_smarty_tpl->getValue('posts')) {?>
                <div class="cat-list pt-20">
                    <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_blog, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
blog" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->news, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <ul>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'p');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach12DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('p')->visible) {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
blog/<?php echo $_smarty_tpl->getValue('p')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        </li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('articles_cats')) {?>
                <div class="cat-list pt-20">
                    <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_articles, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                    <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles_cats'), 'cat');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach13DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('cat')->visible) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
articles/<?php echo $_smarty_tpl->getValue('cat')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    <?php if ($_smarty_tpl->getValue('cat')->subcategories || $_smarty_tpl->getValue('cat')->articles) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat')->subcategories, 'subcat');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subcat')->value) {
$foreach14DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('subcat')->visible) {?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
articles/<?php echo $_smarty_tpl->getValue('subcat')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('subcat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                        <?php if ($_smarty_tpl->getValue('subcat')->subcategories || $_smarty_tpl->getValue('subcat')->articles) {?>
                                                            <ul>
                                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subcat')->subcategories, 'subcat3');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subcat3')->value) {
$foreach15DoElse = false;
?>
                                                                    <?php if ($_smarty_tpl->getValue('subcat3')->visible) {?>
                                                                        <li>
                                                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
articles/<?php echo $_smarty_tpl->getValue('subcat3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('subcat3')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                            <?php if ($_smarty_tpl->getValue('subcat3')->articles) {?>
                                                                                <ul>
                                                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subcat3')->articles, 'article');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach16DoElse = false;
?>
                                                                                        <?php if ($_smarty_tpl->getValue('article')->visible) {?>
                                                                                            <li>
                                                                                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
article/<?php echo $_smarty_tpl->getValue('article')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                                            </li>
                                                                                        <?php }?>
                                                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                                                </ul>
                                                                            <?php }?>
                                                                        </li>
                                                                    <?php }?>
                                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                                <?php if ($_smarty_tpl->getValue('subcat')->articles) {?>
                                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subcat')->articles, 'article');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach17DoElse = false;
?>
                                                                        <?php if ($_smarty_tpl->getValue('article')->visible) {?>
                                                                            <li>
                                                                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
article/<?php echo $_smarty_tpl->getValue('article')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                            </li>
                                                                        <?php }?>
                                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </ul>
                                                        <?php }?>
                                                    </li>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <?php if ($_smarty_tpl->getValue('cat')->articles) {?>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat')->articles, 'article');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach18DoElse = false;
?>
                                                    <?php if ($_smarty_tpl->getValue('article')->visible) {?>
                                                        <li>
                                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
article/<?php echo $_smarty_tpl->getValue('article')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('article')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                        </li>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
        </div>
        <div class="col-lg-6 mt-3">
            <?php if ($_smarty_tpl->getValue('cats')) {?>
                <div class="cat-list pt-20">
                    <h6 class="fsz-14 fw-bold mb-20"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_products, ENT_QUOTES, 'UTF-8', true);?>
</h6>
                    <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cats'), 'cat');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach19DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('cat')->visible) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('cat')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    <?php if ($_smarty_tpl->getValue('cat')->subcategories || $_smarty_tpl->getValue('cat')->products) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat')->subcategories, 'subcat');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subcat')->value) {
$foreach20DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('subcat')->visible) {?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('subcat')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('subcat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                        <?php if ($_smarty_tpl->getValue('subcat')->subcategories || $_smarty_tpl->getValue('subcat')->products) {?>
                                                            <ul>
                                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subcat')->subcategories, 'subcat3');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subcat3')->value) {
$foreach21DoElse = false;
?>
                                                                    <?php if ($_smarty_tpl->getValue('subcat3')->visible) {?>
                                                                        <li>
                                                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('subcat3')->url;?>
" class="dark_link"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('subcat3')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                            <?php if ($_smarty_tpl->getValue('subcat3')->products) {?>
                                                                                <ul>
                                                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subcat3')->products, 'product');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach22DoElse = false;
?>
                                                                                        <?php if ($_smarty_tpl->getValue('product')->visible) {?>
                                                                                            <li>
                                                                                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                                            </li>
                                                                                        <?php }?>
                                                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                                                </ul>
                                                                            <?php }?>
                                                                        </li>
                                                                    <?php }?>
                                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                                <?php if ($_smarty_tpl->getValue('subcat')->products) {?>
                                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subcat')->products, 'product');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach23DoElse = false;
?>
                                                                        <?php if ($_smarty_tpl->getValue('product')->visible) {?>
                                                                            <li>
                                                                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                            </li>
                                                                        <?php }?>
                                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </ul>
                                                        <?php }?>
                                                    </li>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <?php if ($_smarty_tpl->getValue('cat')->products) {?>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat')->products, 'product');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach24DoElse = false;
?>
                                                    <?php if ($_smarty_tpl->getValue('product')->visible) {?>
                                                        <li>
                                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="dark_link font_14"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                        </li>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
        </div>

    </div>
</section>








<?php }
}
