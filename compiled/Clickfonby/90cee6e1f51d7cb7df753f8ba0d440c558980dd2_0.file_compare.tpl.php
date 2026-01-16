<?php
/* Smarty version 5.4.2, created on 2025-11-30 14:32:54
  from 'file:compare.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692c2b66529751_12407948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90cee6e1f51d7cb7df753f8ba0d440c558980dd2' => 
    array (
      0 => 'compare.tpl',
      1 => 1762973566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692c2b66529751_12407948 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
        <?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
        <?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->compare, false, 32);?>

        <?php $_smarty_tpl->assign('canonical', "/compare", false, 32);
}?>

<section class="tc-breadcrumb-style6 p-30 radius-4 mt-3 wow fadeInUp animated container container-llgg"  style="visibility: visible; animation-name: fadeInUp; background-color: #eeeff6;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fw-bold mb-0">
                <?php $_smarty_tpl->assign('level', 1, false, NULL);?>
                    <li class="breadcrumb-item color-999"><a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <li class="breadcrumb-item active color-000" aria-current="page"><link href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->compare, ENT_QUOTES, 'UTF-8', true);?>
</li>
            </ol>
        </nav>
    </div>
</section>

<section class="tc-suggest-today-style1">
    <div class="container">
        <div class="tab-content wow fadeInUp slow" data-wow-delay="0.2s " id="pills-tabContent2">
            <div class="tab-pane fade show active" id="pills-tab3" role="tabpanel" aria-labelledby="pills-tab3-tab">
                <div class="product-row sin-prod-pg-1">
                    <?php if ($_smarty_tpl->getValue('products')) {?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                            <div class="col-md-6 col-lg-4">
                                <div class="product-card product-card-compare">
                                    <div class="top">
                                        <div class="icons">
                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/remove/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="icon fav"> <i class="fal fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="img th-160 mb-20 d-block">
                                        <?php if ($_smarty_tpl->getValue('product')->image) {?>
                                            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,700,700);?>
" alt="" class="img-contain">
                                        <?php } else { ?>
                                            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('product')->image->filename,700,700);?>
" alt="" class="img-contain">
                                        <?php }?>
                                    </a>
                                    <div class="info">
                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('product')->url;?>
" class="title fsz-14 mt-15 fw-600 hover-blue1"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->name, ENT_QUOTES, 'UTF-8', true);?>
 </a>

                                        <p class="price mt-2 fsz-20"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('product')->variant->price);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('currency')->sign, ENT_QUOTES, 'UTF-8', true);?>
 </p>
                                    </div>
                                </div>
                                <div class="additional-info additional-info-compare">
                                    <ul>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('compare_features'), 'feature');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach1DoElse = false;
?>
                                        <?php if (!$_smarty_tpl->getValue('feature')->is_color) {?>
                                            <li>
                                                <strong><?php echo $_smarty_tpl->getValue('feature')->name;?>
</strong>
                                                <span><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->features, 'f');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach2DoElse = false;
?>
                                                    <?php if ($_smarty_tpl->getValue('f')->name == $_smarty_tpl->getValue('feature')->name) {?>
                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('f')->values, 'v', true);
$_smarty_tpl->getVariable('v')->iteration = 0;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('v')->iteration++;
$_smarty_tpl->getVariable('v')->last = $_smarty_tpl->getVariable('v')->iteration === $_smarty_tpl->getVariable('v')->total;
$foreach3Backup = clone $_smarty_tpl->getVariable('v');
?>
                                                            <?php echo $_smarty_tpl->getValue('v')->value;
if (!$_smarty_tpl->getVariable('v')->last) {?>,<?php }?>
                                                        <?php
$_smarty_tpl->setVariable('v', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span>
                                            </li>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->compare_no_products, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
