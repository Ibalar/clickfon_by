<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:41:15
  from 'file:products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300eb27ace5_36833029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12012f5d17db97d7f2039f6cb0b29014e93b77cb' => 
    array (
      0 => 'products.tpl',
      1 => 1763665939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog.tpl' => 1,
    'file:products/catalog_category.tpl' => 1,
  ),
))) {
function content_692300eb27ace5_36833029 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
	<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} elseif ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('brand')) {?>
	<?php $_smarty_tpl->assign('canonical', "/catalog/".((string)$_smarty_tpl->getValue('category')->url)."/".((string)$_smarty_tpl->getValue('brand')->url), false, 32);
} elseif ($_smarty_tpl->getValue('category')) {?>
	<?php $_smarty_tpl->assign('canonical', "/catalog/".((string)$_smarty_tpl->getValue('category')->url), false, 32);
} elseif ($_smarty_tpl->getValue('brand')) {?>
	<?php $_smarty_tpl->assign('canonical', "/brands/".((string)$_smarty_tpl->getValue('brand')->url), false, 32);
} elseif ($_smarty_tpl->getValue('keyword')) {?>
	<?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('canonical', "/all-products?keyword=".$_prefixVariable1, false, 32);
} else { ?>
	<?php $_smarty_tpl->assign('canonical', "/all-products", false, 32);
}?>

<?php if ((null !== ($_GET['tpl'] ?? null)) && $_GET['tpl'] == 'new') {?>
	<?php $_smarty_tpl->assign('wrapper', 'loading/new.tpl', false, 32);
}?>

<?php if ((null !== ($_GET['tpl'] ?? null)) && $_GET['tpl'] == 'recommend') {?>
	<?php $_smarty_tpl->assign('wrapper', 'loading/recommend.tpl', false, 32);
}?>

<?php if ((null !== ($_GET['tpl'] ?? null)) && $_GET['tpl'] == 'stock') {?>
	<?php $_smarty_tpl->assign('wrapper', 'loading/stock.tpl', false, 32);
}?>



<!--title_content-->
<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0">
            <li class="breadcrumb-item color-999">
                <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</a>
            </li>
            <?php if ($_smarty_tpl->getValue('category')) {?>
                <li class="breadcrumb-item color-999">
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->catalog, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->path, 'cat', true);
$_smarty_tpl->getVariable('cat')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('cat')->iteration++;
$_smarty_tpl->getVariable('cat')->last = $_smarty_tpl->getVariable('cat')->iteration === $_smarty_tpl->getVariable('cat')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('cat');
?>
                    <?php if (!$_smarty_tpl->getVariable('cat')->last || $_smarty_tpl->getValue('keyword') || $_smarty_tpl->getValue('page') || $_smarty_tpl->getValue('brand')) {?>
                        <li class="breadcrumb-item color-999">
                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('cat')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </li>
                    <?php } else { ?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('cat')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
                <?php
$_smarty_tpl->setVariable('cat', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->getValue('brand')) {?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('page')) {?>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
                <?php }?>
                <?php } elseif ($_smarty_tpl->getValue('brand')) {?>
                    <li class="breadcrumb-item color-999">
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
brands"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </li>
                    <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php } elseif ($_smarty_tpl->getValue('keyword')) {?>
                        <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->search, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php } elseif ($_smarty_tpl->getValue('page')) {?>
                        <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
        </ol>
    </nav>

        <?php if ($_smarty_tpl->getValue('keyword')) {?>
        <h6 class="fsz-18 fw-bold text-uppercase mt-3"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->search, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword'), ENT_QUOTES, 'UTF-8', true);?>
</h6>
    <?php } elseif ($_smarty_tpl->getValue('page')) {?>
        <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-page="<?php echo $_smarty_tpl->getValue('page')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->name, ENT_QUOTES, 'UTF-8', true);?>
</h6>
    <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->name_h1) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-category="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name_h1, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php } elseif ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->name) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-category="<?php echo $_smarty_tpl->getValue('category')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->name_h1) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-brand="<?php echo $_smarty_tpl->getValue('brand')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name_h1, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php } elseif ($_smarty_tpl->getValue('brand') && $_smarty_tpl->getValue('brand')->name) {?>
            <h6 class="fsz-18 fw-bold text-uppercase mt-3" data-brand="<?php echo $_smarty_tpl->getValue('brand')->id;?>
">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('brand')->name, ENT_QUOTES, 'UTF-8', true);?>

            </h6>
        <?php }?>
    <?php }?>
</section>





<?php if ($_smarty_tpl->getValue('page') && $_smarty_tpl->getValue('page')->url == 'catalog') {?>
	<?php $_smarty_tpl->renderSubTemplate('file:catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>

        <?php if ($_smarty_tpl->getValue('category') && $_smarty_tpl->getValue('category')->subcategories) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:products/catalog_category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>


    <section class="tc-products-style6 radius-4 bg-white mt-3 wow fadeInUp animated">
        <div class="row">
            <?php if ($_smarty_tpl->getValue('products')) {?>
                <div class="col-lg-3">
                    <div class="filters">

                        <div class="filter-box mt-10">
                            <div class="title mb-20">
                                <h6 class="fsz-18 fw-bold text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>
 </h6>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('category')->url;?>
" class="rest-btn hover-green2">
                                    <i class="la la-sync me-1"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->reset, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </div>

                                                        <div class="selected-filters">

                                                                <?php if ((null !== ($_GET['b'] ?? null)) && $_GET['b']) {?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->brands, 'b');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('b')->id,$_GET['b'])) {?>
                                            <span class="selected-item">
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>

                                                <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('params'=>array('brand'=>$_smarty_tpl->getValue('b')->url,'page'=>null)), $_smarty_tpl);?>
" class="ms-1">
                                                    <i class="la la-times ms-1"></i>
                                                </a>
                                            </span>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php }?>

                                                                <?php if ($_smarty_tpl->getValue('features')) {?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'f', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->key => $_smarty_tpl->getVariable('f')->value) {
$foreach2DoElse = false;
$_smarty_tpl->assign('key', $_smarty_tpl->getVariable('f')->key);
$foreach2Backup = clone $_smarty_tpl->getVariable('f');
?>
                                        <?php if ((null !== ($_GET[$_smarty_tpl->getVariable('f')->key] ?? null)) && $_GET[$_smarty_tpl->getVariable('f')->key]) {?>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('f')->options, 'o', false, 'k');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('o')->value) {
$foreach3DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('o')->translit,$_GET[$_smarty_tpl->getVariable('f')->key],true)) {?>
                                                    <span class="selected-item">
                                                        <?php if ($_smarty_tpl->getValue('f')->is_color) {?>
                                                            <span style="display:inline-block;width:16px;height:16px;border-radius:50%;margin-right:7px;background:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('o')->value, ENT_QUOTES, 'UTF-8', true);?>
"></span>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->getValue('f')->name) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('f')->name, ENT_QUOTES, 'UTF-8', true);?>
: <?php }
echo htmlspecialchars((string)$_smarty_tpl->getValue('o')->value, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php }?>
                                                        <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('params'=>array($_smarty_tpl->getValue('f')->url=>$_smarty_tpl->getValue('o')->translit,'page'=>null)), $_smarty_tpl);?>
" class="ms-1">
                                                            <i class="la la-times ms-1"></i>
                                                        </a>
                                                    </span>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    <?php
$_smarty_tpl->setVariable('f', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php }?>

                                                                <?php if ($_smarty_tpl->getValue('current_minprice') != $_smarty_tpl->getValue('minprice') || $_smarty_tpl->getValue('current_maxprice') != $_smarty_tpl->getValue('maxprice')) {?>
                                    <span class="selected-item">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->general_price, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('current_minprice')),'/[^0-9\.]/',''));?>

                                            -
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('current_maxprice')),'/[^0-9\.]/',''));?>

                                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

                                        <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array(), $_smarty_tpl);?>
" class="ms-1">
                                            <i class="la la-times ms-1"></i>
                                        </a>
                                    </span>
                                <?php }?>
                            </div>


                            <div class="filter-groups">
                                                                <?php if ($_smarty_tpl->getValue('category')->brands) {?>
                                    <div class="filter-group">
                                        <div class="group-title">
                                            <strong class="fsz-14"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->global_brands, ENT_QUOTES, 'UTF-8', true);?>
 </strong>
                                            <span class="arrow"><i class="la la-angle-up"></i></span>
                                        </div>
                                        <div class="group-body">
                                            <div class="scroll-cont">
                                                <div class="check-group check-brands">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')->brands, 'b');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('b')->value) {
$foreach4DoElse = false;
?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="brand<?php echo $_smarty_tpl->getValue('b')->id;?>
" onclick="location.href='<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('params'=>array('brand'=>$_smarty_tpl->getValue('b')->url,'page'=>null)), $_smarty_tpl);?>
'" <?php if ((null !== ($_smarty_tpl->getValue('brand')->id ?? null)) == $_smarty_tpl->getValue('b')->id || ((null !== ($_GET['b'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('b')->id,$_GET['b']))) {?>checked<?php }?>>
                                                            <label class="form-check-label" for="brand<?php echo $_smarty_tpl->getValue('b')->id;?>
">
                                                                <span class="color-888 ms-2"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('b')->name, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                            </label>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>

                                <?php if (($_smarty_tpl->getValue('minprice') != 0 && $_smarty_tpl->getValue('maxprice') != 0) && ($_smarty_tpl->getValue('minprice') != $_smarty_tpl->getValue('maxprice'))) {?>
                                    <div class="filter-group">
                                        <div class="group-title">
                                            <strong class="fsz-14"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->general_price, ENT_QUOTES, 'UTF-8', true);?>
 </strong>
                                            <span class="arrow"><i class="la la-angle-up"></i></span>
                                        </div>
                                        <div class="group-body">
                                            <div class="price-card">
                                                <form method="post">
                                                    <div class="row mt-20 align-items-center gx-0">
                                                        <div class="col-9">
                                                            <div class="price-input">
                                                                <div class="field">
                                                                    <span class="sympol"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                    <input type="number"
                                                                           class="input-min"
                                                                           name="min_price"
                                                                           value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('current_minprice'),'/[^0-9\.]/',''));?>
"
                                                                           min="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('minprice'),'/[^0-9\.]/',''));?>
"
                                                                           max="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('maxprice'),'/[^0-9\.]/',''));?>
">
                                                                </div>
                                                                <div class="separator"></div>
                                                                <div class="field">
                                                                    <span class="sympol"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                    <input type="number"
                                                                           class="input-max"
                                                                           name="max_price"
                                                                           value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('current_maxprice'),'/[^0-9\.]/',''));?>
"
                                                                           min="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('minprice'),'/[^0-9\.]/',''));?>
"
                                                                           max="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ceil')($_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('maxprice'),'/[^0-9\.]/',''));?>
">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 text-end">
                                                            <button class="bttn"> ОК </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>


                                                                <?php if ($_smarty_tpl->getValue('features')) {?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'f');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->key => $_smarty_tpl->getVariable('f')->value) {
$foreach5DoElse = false;
$foreach5Backup = clone $_smarty_tpl->getVariable('f');
?>
                                        <div class="filter-group">
                                            <div class="group-title">
                                                <strong class="fsz-14"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('f')->name, ENT_QUOTES, 'UTF-8', true);?>
 </strong>
                                                <span class="arrow"><i class="la la-angle-up"></i></span>
                                            </div>
                                            <div class="group-body">
                                                <div class="check-boxes">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('f')->options, 'o');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('o')->value) {
$foreach6DoElse = false;
?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="feat_<?php echo $_smarty_tpl->getValue('o')->id;?>
" onclick="location.href='<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('params'=>array($_smarty_tpl->getValue('f')->url=>$_smarty_tpl->getValue('o')->translit,'page'=>null)), $_smarty_tpl);?>
'" <?php if ((null !== ($_GET[$_smarty_tpl->getVariable('f')->key] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('o')->translit,$_GET[$_smarty_tpl->getVariable('f')->key])) {?>checked<?php }?>>
                                                            <label class="form-check-label" for="feat_<?php echo $_smarty_tpl->getValue('o')->id;?>
">
                                                                <?php if ($_smarty_tpl->getValue('f')->is_color) {?>
                                                                    <span class="color-box" style="background:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('o')->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="la la-check"></i></span>
                                                                <?php } else { ?>
                                                                    <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('o')->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                <?php }?>
                                                            </label>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
$_smarty_tpl->setVariable('f', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php }?>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="products-content">

                        <div class="prod-filter color-666">
                            <div class="row">


                                <div class="col-lg-6 mt-3 mt-lg-0 align-items-start">
                                    <div class="sort-item">
                                        <span class="s-title">Сортировать</span>
                                        <select name="sort" id="sort" class="form-control form-select" onchange="location.href=this.value;">
                                            <option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('sort'=>'position','page'=>null), $_smarty_tpl);?>
"<?php if ($_smarty_tpl->getValue('sort') == 'position') {?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->default, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('sort'=>'name','page'=>null), $_smarty_tpl);?>
"<?php if ($_smarty_tpl->getValue('sort') == 'name') {?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->name_a_z, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('sort'=>'name_desc','page'=>null), $_smarty_tpl);?>
"<?php if ($_smarty_tpl->getValue('sort') == 'name_desc') {?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->name_z_a, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('sort'=>'price','page'=>null), $_smarty_tpl);?>
"<?php if ($_smarty_tpl->getValue('sort') == 'price') {?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->cheap_expensive, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('sort'=>'price_desc','page'=>null), $_smarty_tpl);?>
"<?php if ($_smarty_tpl->getValue('sort') == 'price_desc') {?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->expensive_cheap, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <option value="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('sort'=>'rate','page'=>null), $_smarty_tpl);?>
"<?php if ($_smarty_tpl->getValue('sort') == 'rate') {?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->by_rating, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                                    <div class="view-item">
                                        <span class="s-title"> Отображение </span>
                                        <span class="v-item grid-btn active"> <i class="la la-th-large" title="Плиточный вид"></i> </span>
                                        <span class="v-item list-btn"> <i class="la la-list-ul" title="Строчный вид"></i> </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="products tc-best-seller-style1" style="padding: 20px 0;">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach7DoElse = false;
?>
                                    <div class="col-lg-3 my-1">
                                        <div class="product-card">
                                            <div class="top">
                                                <?php if ($_smarty_tpl->getValue('product')->is_hit) {?>
                                                    <small class="fsz-11 py-1 px-3 rounded-pill color-red1 border-red1 border"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_hit, ENT_QUOTES, 'UTF-8', true);?>
 </small>
                                                <?php }?>
                                                <div class="icons">

                                                    <?php if ($_smarty_tpl->getValue('wishlist') || ($_smarty_tpl->getValue('wishlist_products') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_smarty_tpl->getValue('wishlist_products')))) {?>
                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/remove/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon fav wishlist active" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->delete, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <i class="fal fa-heart"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon wishlist fav" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_to_wishlist, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <i class="fal fa-heart"></i>
                                                        </a>
                                                    <?php }?>


                                                    <?php if ((null !== ($_SESSION['compared_products'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('product')->url,$_SESSION['compared_products'])) {?>

                                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare" class="icon compare active" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->added_to_compare, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                <i class="fal fa-sync"></i>
                                                            </a>

                                                    <?php } else { ?>

                                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon compare" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_to_compare, ENT_QUOTES, 'UTF-8', true);?>
" data-title_added="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->added_to_compare, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                <i class="fal fa-sync"></i>
                                                            </a>
                                                    <?php }?>


                                                </div>
                                            </div>

                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="img mb-20 d-block">
                                                <?php if ($_smarty_tpl->getValue('product')->image) {?>
                                                    <img class="img-contain" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,700,700);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                                <?php } else { ?>
                                                    <img class="img-contain" style="width: 170px; height: 170px;" src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                                <?php }?>
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <?php if ($_smarty_tpl->getValue('product')->variant->compare_price > $_smarty_tpl->getValue('product')->variant->price && $_smarty_tpl->getValue('product')->variant->price > 0) {?>
                                                        <span class="label fsz-11 py-1 px-3 rounded-pill bg-red1 text-white text-uppercase"> <?php echo round((float) (($_smarty_tpl->getValue('product')->variant->price-$_smarty_tpl->getValue('product')->variant->compare_price)/$_smarty_tpl->getValue('product')->variant->compare_price)*100, (int) 0, (int) 1);?>
% </span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getValue('product')->featured && !$_smarty_tpl->getValue('product')->is_new) {?>
                                                        <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_featured, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                    <?php }?>
                                                    <?php if (!$_smarty_tpl->getValue('product')->featured && $_smarty_tpl->getValue('product')->is_new) {?>
                                                        <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getValue('product')->featured && $_smarty_tpl->getValue('product')->is_new) {?>
                                                        <span class="label fsz-11 py-1 px-3 rounded-pill bg-blue1 text-white text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                    <?php }?>
                                                </div>
                                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="title fsz-14 mt-15 fw-600 hover-blue1"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
 </a>
                                                <div class="stars fsz-13 mt-2">
                                                    <?php $_smarty_tpl->assign('avg', $_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')->rating), false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('avg') > 0) {?>
                                                    <i class="fas fa-star active"></i>
                                                    <span> <?php echo $_smarty_tpl->getValue('avg');?>
 </span>
                                                    <?php } else { ?>
                                                        <i class="la la-star color-999"></i>
                                                        <span> нет оценок </span>
                                                    <?php }?>
                                                </div>
                                                <p class="price color-red1 mt-2 fsz-18">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php if ($_smarty_tpl->getValue('product')->variant->compare_price > 0) {?>
                                                        <span class="old-price color-999 text-decoration-line-through ms-2 fsz-12"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->compare_price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php }?>
                                                </p>
                                                <div class="thumbnail-imgs mt-10">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->related_products, 'related_product');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('related_product')->value) {
$foreach8DoElse = false;
?>
                                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('related_product')->url;?>
" class="color-img" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->variant->color, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <span class="thumbnail<?php if ($_smarty_tpl->getValue('product')->id == $_smarty_tpl->getValue('related_product')->id) {?> selected<?php }?>" style="display:inline-block; width:20px; height:20px; border-radius:50%; background:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('related_product')->variant->color_code, ENT_QUOTES, 'UTF-8', true);?>
; border:2px solid #edeef1;"></span>
                                                        </a>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    </div>
                                            </div>
                                            <form class="variants" data-action="/ajax/cart.php" method="post">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->variants, 'v');
$_smarty_tpl->getVariable('v')->index = -1;
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach9DoElse = false;
$_smarty_tpl->getVariable('v')->index++;
$_smarty_tpl->getVariable('v')->first = !$_smarty_tpl->getVariable('v')->index;
$foreach9Backup = clone $_smarty_tpl->getVariable('v');
?>
                                                    <input id="featured_<?php echo $_smarty_tpl->getValue('v')->id;?>
" name="variant" value="<?php echo $_smarty_tpl->getValue('v')->id;?>
" type="radio" <?php if ($_smarty_tpl->getVariable('v')->first) {?>checked<?php }?> style="display:none;">
                                                <?php
$_smarty_tpl->setVariable('v', $foreach9Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                <button type="submit" class="cart-btn addCart" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->getValue('product')->variant->stock) {?>disabled<?php }?>>
                                                    <i class="la la-cart-plus me-1"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->add_cart, ENT_QUOTES, 'UTF-8', true);?>

                                                </button>
                                            </form>

                                        </div>

                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </div>
                        </div>

                        <?php if ($_smarty_tpl->getValue('total_pages_num') > 1) {?>
                            <?php $_smarty_tpl->assign('show_ellipsis', ($_smarty_tpl->getValue('total_pages_num') > 7), false, NULL);?>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                                                        <?php if ($_smarty_tpl->getValue('current_page_num') > 1) {?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>$_smarty_tpl->getValue('current_page_num')-1), $_smarty_tpl);?>
">
                                                <i class="la la-angle-left me-1"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->previous, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </li>
                                    <?php }?>

                                                                        <?php if ($_smarty_tpl->getValue('current_page_num') == 1) {?>
                                        <li class="page-item"><a class="page-link active" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>null), $_smarty_tpl);?>
">1</a></li>
                                    <?php } else { ?>
                                        <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>null), $_smarty_tpl);?>
">1</a></li>
                                    <?php }?>

                                                                        <?php if ($_smarty_tpl->getValue('show_ellipsis') && $_smarty_tpl->getValue('current_page_num') > 4) {?>
                                        <li class="page-item"><span class="page-link">...</span></li>
                                    <?php }?>

                                                                        <?php $_smarty_tpl->assign('start', 2, false, NULL);?>
                                    <?php $_smarty_tpl->assign('end', $_smarty_tpl->getValue('total_pages_num')-1, false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('show_ellipsis')) {?>
                                        <?php $_smarty_tpl->assign('start', $_smarty_tpl->getSmarty()->getModifierCallback('max')(2,$_smarty_tpl->getValue('current_page_num')-2), false, NULL);?>
                                        <?php $_smarty_tpl->assign('end', $_smarty_tpl->getSmarty()->getModifierCallback('min')($_smarty_tpl->getValue('total_pages_num')-1,$_smarty_tpl->getValue('current_page_num')+2), false, NULL);?>
                                    <?php }?>

                                    <?php
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('end')+1) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_0_start = (int)@$_smarty_tpl->getValue('start') < 0 ? max(0, (int)@$_smarty_tpl->getValue('start') + $__section_pages_0_loop) : min((int)@$_smarty_tpl->getValue('start'), $__section_pages_0_loop);
$__section_pages_0_total = min(($__section_pages_0_loop - $__section_pages_0_start), $__section_pages_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new \Smarty\Variable(array());
if ($__section_pages_0_total !== 0) {
for ($__section_pages_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_0_start; $__section_pages_0_iteration <= $__section_pages_0_total; $__section_pages_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
                                        <?php $_smarty_tpl->assign('p', ($_smarty_tpl->getValue('__smarty_section_pages')['index'] ?? null), false, NULL);?>
                                        <?php if ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('current_page_num')) {?>
                                            <li class="page-item"><a class="page-link active" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>$_smarty_tpl->getValue('p')), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('p');?>
</a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>$_smarty_tpl->getValue('p')), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('p');?>
</a></li>
                                        <?php }?>
                                    <?php
}
}
?>

                                                                        <?php if ($_smarty_tpl->getValue('show_ellipsis') && $_smarty_tpl->getValue('current_page_num') < $_smarty_tpl->getValue('total_pages_num')-3) {?>
                                        <li class="page-item"><span class="page-link">...</span></li>
                                    <?php }?>

                                                                        <?php if ($_smarty_tpl->getValue('total_pages_num') > 1) {?>
                                        <?php if ($_smarty_tpl->getValue('current_page_num') == $_smarty_tpl->getValue('total_pages_num')) {?>
                                            <li class="page-item"><a class="page-link active" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>$_smarty_tpl->getValue('total_pages_num')), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('total_pages_num');?>
</a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>$_smarty_tpl->getValue('total_pages_num')), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('total_pages_num');?>
</a></li>
                                        <?php }?>
                                    <?php }?>

                                                                        <?php if ($_smarty_tpl->getValue('current_page_num') < $_smarty_tpl->getValue('total_pages_num')) {?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('furl')->handle(array('page'=>$_smarty_tpl->getValue('current_page_num')+1), $_smarty_tpl);?>
">
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->next, ENT_QUOTES, 'UTF-8', true);?>
 <i class="la la-angle-right ms-1"></i>
                                            </a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </nav>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>
<?php }?>

<?php }
}
