<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:42
  from 'file:main/products_tab.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed6c6f2b4_24762750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45620011de46cca9d17ac48f665e5707163cab95' => 
    array (
      0 => 'main/products_tab.tpl',
      1 => 1763133306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loading/hit.tpl' => 1,
    'file:loading/recommend.tpl' => 1,
    'file:loading/new.tpl' => 1,
    'file:loading/sale.tpl' => 1,
  ),
))) {
function content_697c5ed6c6f2b4_24762750 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\main';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('is_hit'=>1,'var'=>'hit_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('is_new'=>1,'var'=>'new_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('featured'=>1,'var'=>'featured_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_products')->handle(array('discounted'=>1,'var'=>'discounted_products','limit'=>$_smarty_tpl->getValue('theme_settings')->products_tab_products_limit), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('featured_products') || $_smarty_tpl->getValue('discounted_products') || $_smarty_tpl->getValue('hit_products') || $_smarty_tpl->getValue('new_products')) {?>

    <section class="tc-suggest-today-style1">
        <div class="container">
            <div class="title mb-40 wow fadeInUp slow" data-wow-delay="0.2s">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="fsz-30"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->best_actions, ENT_QUOTES, 'UTF-8', true);?>
 </h3>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog" class="more-btn fsz-14 text-uppercase fw-500"> Смотреть все <i class="fal fa-angle-right ms-1"></i> </a>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills mb-40" id="pills-tabs1" role="tablist">
                <?php if ($_smarty_tpl->getValue('hit_products')) {?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-tab10-tab" data-bs-toggle="pill" data-bs-target="#pills-tab3" type="button" role="tab" aria-selected="true"> <i class="fal fa-fire me-2"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_hit, ENT_QUOTES, 'UTF-8', true);?>
</button>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('featured_products')) {?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tab11-tab" data-bs-toggle="pill" data-bs-target="#pills-tab4" type="button" role="tab" aria-selected="false"> <i class="fal fa-bolt me-2"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_featured, ENT_QUOTES, 'UTF-8', true);?>
</button>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('new_products')) {?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tab12-tab" data-bs-toggle="pill" data-bs-target="#pills-tab5" type="button" role="tab" aria-selected="false"> <i class="fal fa-star me-2"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);?>
</button>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('discounted_products')) {?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tab13-tab" data-bs-toggle="pill" data-bs-target="#pills-tab6" type="button" role="tab" aria-selected="false"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_sale, ENT_QUOTES, 'UTF-8', true);?>
</button>
                    </li>
                <?php }?>
            </ul>
            <div class="tab-content wow fadeInUp slow" data-wow-delay="0.2s " id="pills-tabContent2">
                <?php if ($_smarty_tpl->getValue('hit_products')) {?>
                    <div class="tab-pane fade show active" id="pills-tab3" role="tabpanel" aria-labelledby="pills-tab3-tab">
                        <?php $_smarty_tpl->renderSubTemplate('file:loading/hit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('featured_products')) {?>
                    <div class="tab-pane fade" id="pills-tab4" role="tabpanel" aria-labelledby="pills-tab3-tab">
                    <?php $_smarty_tpl->renderSubTemplate('file:loading/recommend.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('new_products')) {?>
                    <div class="tab-pane fade" id="pills-tab5" role="tabpanel" aria-labelledby="pills-tab3-tab">
                        <?php $_smarty_tpl->renderSubTemplate('file:loading/new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->getValue('discounted_products')) {?>
                        <div class="tab-pane fade" id="pills-tab6" role="tabpanel" aria-labelledby="pills-tab3-tab">
                    <?php $_smarty_tpl->renderSubTemplate('file:loading/sale.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        </div>
                <?php }?>



            </div>
        </div>
    </section>
<?php }
}
}
