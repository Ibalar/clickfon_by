<?php
/* Smarty version 5.4.2, created on 2025-11-23 16:08:57
  from 'file:user/personal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692307694f4eb0_56430853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a122e1402bd5c840e1079b4b85a658b2f2560c8' => 
    array (
      0 => 'user/personal.tpl',
      1 => 1763903334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692307694f4eb0_56430853 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/user';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('get_banner')->handle(array('var'=>'personal_banners','group'=>$_smarty_tpl->getValue('theme_settings')->id_banner_account), $_smarty_tpl);?>


<section class="tc-about-cards">
    <div class="row gx-2">
        <div class="col-lg-4 mt-3">
            <div class="about-card wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="title">
                    <h6 class="fsz-18 fw-bold text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->personal_data, ENT_QUOTES, 'UTF-8', true);?>
 </h6>
                    <span class="icon"> <i class="la la-check-circle"></i> </span>
                </div>
                <div class="text fsz-14 color-666">
                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
<br>
                    <?php if (htmlspecialchars((string)$_smarty_tpl->getValue('phone'), ENT_QUOTES, 'UTF-8', true)) {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('phone'), ENT_QUOTES, 'UTF-8', true);?>
<br>
                    <?php }?>
                    <a class="color-red1" href="javascript:void(0)" onclick="document.cookie='user=private;path=/';document.location.reload();"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->change_password, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="about-card wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="title">
                    <h6 class="fsz-18 fw-bold text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->wishlist, ENT_QUOTES, 'UTF-8', true);?>
 </h6>
                    <span class="icon"> <i class="la la-heart"></i> </span>
                </div>
                <div class="text fsz-14 color-666">
                    <?php if ($_smarty_tpl->getValue('wishlist_products') > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('wishlist_products'));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('plural')($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('wishlist_products')),$_smarty_tpl->getValue('lang')->products_1,$_smarty_tpl->getValue('lang')->products_2,$_smarty_tpl->getValue('lang')->products_3);
} else {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->no_products, ENT_QUOTES, 'UTF-8', true);
}?>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="about-card wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="title">
                    <h6 class="fsz-18 fw-bold text-uppercase"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->orders_global, ENT_QUOTES, 'UTF-8', true);?>
 </h6>
                    <span class="icon"> <i class="la la-hand-holding-usd"></i> </span>
                </div>
                <div class="text fsz-14 color-666">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('orders'));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('plural')($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('orders')),$_smarty_tpl->getValue('lang')->orders_1,$_smarty_tpl->getValue('lang')->orders_2,$_smarty_tpl->getValue('lang')->orders_3);?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php }
}
