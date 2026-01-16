<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:footer/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f5c5aa1_84350949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '022d0c01aff4e1cd514a5b4797e987c7ac0a6f02' => 
    array (
      0 => 'footer/footer.tpl',
      1 => 1766507204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f5c5aa1_84350949 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\footer';
?><!--  Start footer  -->
<footer class="tc-footer-style1">

    <div class="container">
        <div class="foot-icons py-4">
            <div class="row">
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-shield"></i> </span> Гарантия  </p>
                    <p class="fsz-14"> Гарантия на весь товар 36 месяцев.  </p>
                </div>
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-cart-arrow-down"></i> </span> Выгодная цена  </p>
                    <p class="fsz-14"> Работаем без посредников. Нашли дешевле? Сделаем!  </p>
                </div>
                <div class="col-lg-4">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-gifts"></i> </span> Подарки  </p>
                    <p class="fsz-14"> Каждому покупателю дарим приятные подарки!  </p>
                </div>
            </div>
        </div>
        <div class="foot-icons py-4 border-1 border-bottom">
            <div class="row">
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-thumbs-up"></i> </span> 100% Оригинал  </p>
                    <p class="fsz-14"> Продаем только оригинальную технику!  </p>
                </div>
                <div class="col-lg-4 border-1 border-end">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-redo"></i> </span> 14 дней  </p>
                    <p class="fsz-14"> Наш магазин дает 14 дней на проверку заводского брака!  </p>
                </div>
                <div class="col-lg-4">
                    <p class="fsz-18 text-uppercase"><span class="icon color-blue1 me-3"> <i class="fal fa-shipping-fast"></i> </span> Бесплатная доставка  </p>
                    <p class="fsz-14"> Бесплатная доставка по РБ и Минску!  </p>
                </div>
            </div>
        </div>
        <div class="foot-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="foot-info">
                        <h6 class="fw-bold mb-30 text-capitalize"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->company_name, ENT_QUOTES, 'UTF-8', true);?>
 </h6>
                        <p class="mb-15"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->unp, ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <p class="mb-15"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->company_address, ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/f.webp" alt="" style="max-width: 300px; display: block;">
                        <small class="fsz-12 text-uppercase"> Оформление 24/7 </small>
                        <h5 class="fw-bold color-blue1 mb-20"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->phone_1, ENT_QUOTES, 'UTF-8', true);?>
 </h5>
                        <a href="mailto:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->email, ENT_QUOTES, 'UTF-8', true);?>
"> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->email, ENT_QUOTES, 'UTF-8', true);?>
 </a>
                        <div class="foot-social mt-40">
                            <?php if ($_smarty_tpl->getValue('theme_settings')->instagram) {?>
                                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->instagram, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" rel="nofollow" title="Instagram"> <i class="fab fa-instagram"></i> </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('theme_settings')->vk) {?>
                                <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('theme_settings')->vk, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" rel="nofollow" title="Вконтакте"> <i class="fab fa-vk"></i> </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="links-item mt-5 mt-lg-0">
                        <h6 class="fsz-18 mb-30"> Каталог </h6>
                        <ul class="links">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach14DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('p')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_footer_2) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="links-item mt-5 mt-lg-0">
                        <h6 class="fsz-18 mb-30"> Ваши товары </h6>
                        <ul class="links">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach15DoElse = false;
?>
                                <?php if ($_smarty_tpl->getValue('p')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_footer_3) {?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="links-item mt-5 mt-lg-0">
                        <h6 class="fsz-18 mb-30"> Полезное </h6>
                        <ul class="links">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach16DoElse = false;
?>
                                <?php if ($_smarty_tpl->getValue('p')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_footer_4) {?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('p')->url;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-start">
                    <p class="color-666"> © 2025 <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>" class="fw-bold color-000"> ClickFon.BY </a>. Все права защищены </p>
                </div>
                <div class="col-lg-4">
                    <div class="pay text-center my-4 my-lg-0">
                        <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/pay3.png" alt="" class="mx-2">
                        <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/pay5.png" alt="" class="mx-2">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mob-navigation d-flex d-lg-none">
        <ul>
            <li class="list <?php if ($_smarty_tpl->getValue('module') == 'CompareView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
compare/">
                    <span class="icon"> <i class="las la-sync-alt"></i> </span>
                    <span class="text">Сравнение</span>
                </a>
            </li>
            <li class="list <?php if ($_smarty_tpl->getValue('module') == 'WishlistView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist">
                    <span class="icon"> <i class="lar la-heart"></i> </span>
                    <span class="text">Избранное</span>
                </a>
            </li>
            <li class="list <?php if ($_smarty_tpl->getValue('module') == 'MainView') {?>active<?php }?>">
                <a href="/">
                    <span class="icon"> <i class="las la-home"></i> </span>
                    <span class="text">Главная</span>
                </a>
            </li>
            <li class="list <?php if ($_smarty_tpl->getValue('module') == 'CartView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
cart/">
                    <span class="icon"> <i class="las la-shopping-bag"></i> </span>
                    <span class="text">Корзина</span>
                </a>
            </li>
            <li class="list <?php if ($_smarty_tpl->getValue('module') == 'LoginView') {?>active<?php }?> <?php if ($_smarty_tpl->getValue('module') == 'RegisterView') {?>active<?php }?>">
                <?php if ($_smarty_tpl->getValue('user')) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user">
                        <span class="icon"> <i class="las la-user"></i> </span>
                        <span class="text">Профиль</span>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/login">
                        <span class="icon"> <i class="las la-user"></i> </span>
                        <span class="text">Профиль</span>
                    </a>
                <?php }?>
            </li>
            <li class="indicator"></li>
        </ul>
    </div>

</footer>
<!--  End footer  --><?php }
}
