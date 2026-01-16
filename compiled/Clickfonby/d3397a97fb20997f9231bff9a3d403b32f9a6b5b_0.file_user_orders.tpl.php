<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:46:12
  from 'file:user/user_orders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69230214a37f19_37972516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3397a97fb20997f9231bff9a3d403b32f9a6b5b' => 
    array (
      0 => 'user/user_orders.tpl',
      1 => 1763901969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69230214a37f19_37972516 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/user';
if ($_smarty_tpl->getValue('orders')) {?>
    <div class="orders-tab">
        <h4 class="fw-bold text-capitalize mb-30"><?php echo (($tmp = $_smarty_tpl->getValue('lang')->orders_history ?? null)===null||$tmp==='' ? "История заказов" ?? null : $tmp);?>
</h4>
        <div class="orders">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach0DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('order')->status != 3) {?>
                    <div class="order-card mb-4">
                        <div class="order-head">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <p class="my-2">
                                        <span>Номер:</span> <strong> #<?php echo $_smarty_tpl->getValue('order')->id;?>
 </strong>
                                    </p>
                                    <p class="my-2">
                                        <span><?php echo (($tmp = $_smarty_tpl->getValue('lang')->date_order ?? null)===null||$tmp==='' ? 'Дата' ?? null : $tmp);?>
:</span>
                                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('order')->date,"%d.%m.%Y");?>
</span>
                                    </p>
                                </div>
                                <div class="col-lg-6 text-lg-end mt-4 mt-lg-0">
                                    <span class="alert
                                        <?php if ($_smarty_tpl->getValue('order')->status == 2) {?>alert-success<?php } elseif ($_smarty_tpl->getValue('order')->status == 1) {?>alert-warning<?php } elseif ($_smarty_tpl->getValue('order')->status == 0) {?>alert-info<?php } else { ?>alert-danger<?php }?>
                                        mb-0 py-2" role="alert">
                                        <?php if ($_smarty_tpl->getValue('order')->status == 2) {?>
                                            <?php echo (($tmp = $_smarty_tpl->getValue('lang')->delivered ?? null)===null||$tmp==='' ? "Доставлен" ?? null : $tmp);?>

                                        <?php } elseif ($_smarty_tpl->getValue('order')->status == 1) {?>
                                            <?php echo (($tmp = $_smarty_tpl->getValue('lang')->in_processing ?? null)===null||$tmp==='' ? "В процессе" ?? null : $tmp);?>

                                        <?php } elseif ($_smarty_tpl->getValue('order')->status == 0) {?>
                                            <?php echo (($tmp = $_smarty_tpl->getValue('lang')->accepted_name ?? null)===null||$tmp==='' ? "Новый" ?? null : $tmp);?>

                                        <?php } else { ?>
                                            <?php echo (($tmp = $_smarty_tpl->getValue('lang')->rejected ?? null)===null||$tmp==='' ? "Отклонен" ?? null : $tmp);?>

                                        <?php }?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="products">
                            <div class="row gx-3">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')->purchases, 'purchase');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach1DoElse = false;
?>
                                    <div class="col-lg-6">
                                        <div class="product-card mb-3">
                                            <div class="top-inf">
                                                <?php if ($_smarty_tpl->getValue('purchase')->variant->compare_price > 0) {?>
                                                    <div class="dis-card">
                                                        <small class="fsz-10 d-block text-uppercase">
                                                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_sale, ENT_QUOTES, 'UTF-8', true);?>

                                                        </small>
                                                        <h6 class="fsz-14">
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('purchase')->variant->compare_price);
echo $_smarty_tpl->getValue('currency')->sign;?>

                                                        </h6>
                                                    </div>
                                                <?php } else { ?>
                                                    <small class="fsz-10 py-1 px-2 radius-2 bg-222 text-white text-uppercase">
                                                        <?php if ($_smarty_tpl->getValue('purchase')->is_new) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->badge_new, ENT_QUOTES, 'UTF-8', true);
} else { ?>новинка<?php }?>
                                                    </small>
                                                <?php }?>
                                            </div>
                                            <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
products/<?php echo $_smarty_tpl->getValue('purchase')->product->url;?>
" class="img">
                                                <?php if ($_smarty_tpl->getValue('purchase')->product->images) {?>
                                                    <?php $_smarty_tpl->assign('image', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('purchase')->product->images), false, NULL);?>
                                                    <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,160,160);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
" class="img-contain main-image">
                                                <?php } else { ?>
                                                    <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" class="img-contain main-image" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php }?>
                                            </a>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <div class="price mt-15">
                            <h5 class="fsz-18 fw-600">
                                Сумма заказа: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('order')->total_price);?>
 <?php echo $_smarty_tpl->getValue('currency')->sign;?>

                            </h5>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>

<?php } else { ?>
    <div class="alert alert-info">
        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->no_orders, ENT_QUOTES, 'UTF-8', true);?>

    </div>
<?php }
}
}
