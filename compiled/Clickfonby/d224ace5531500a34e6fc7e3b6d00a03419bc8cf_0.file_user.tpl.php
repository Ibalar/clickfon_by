<?php
/* Smarty version 5.4.2, created on 2025-11-23 16:11:05
  from 'file:user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692307e9cda3d6_44944067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd224ace5531500a34e6fc7e3b6d00a03419bc8cf' => 
    array (
      0 => 'user.tpl',
      1 => 1763903461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/personal.tpl' => 1,
    'file:user/private.tpl' => 1,
    'file:user/user_orders.tpl' => 1,
  ),
))) {
function content_692307e9cda3d6_44944067 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
$_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->personal_area, false, 32);?>

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
            <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->personal_area, ENT_QUOTES, 'UTF-8', true);?>
</li>
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->personal_area, ENT_QUOTES, 'UTF-8', true);?>
</h1>
            </div>
        </div>
    </div>
</section>

<!--end-title_content-->

<section class="tc-profile p-30 radius-4 bg-white mt-3 wow fadeInUp mb-3 animated"
         style="visibility: visible; animation-name: fadeInUp;">
    <div class="row">
        <div class="col-lg-3">
            <div class="tabs-side me-lg-5 mb-4 mb-lg-0">
                <div class="main-info text-center">
                    <h5 class="fw-bold mb-1"><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')->name ?? null)===null||$tmp==='' ? 'Ваше имя' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h5>
                    <ul class="mt-2 color-666 lh-lg list-unstyled fsz-14">
                        <li>
                            <a href="mailto:<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->email, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')->email, ENT_QUOTES, 'UTF-8', true);?>

                            </a>
                        </li>
                                            </ul>
                </div>
                <ul class="nav nav-pills flex-column mt-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if (!(null !== ($_COOKIE['user'] ?? null)) || $_COOKIE['user'] == 'personal') {?>active<?php }?>"
                                id="pills-prof1-tab" data-bs-toggle="pill" data-bs-target="#pills-prof1"
                                type="button" role="tab" aria-controls="pills-prof1" aria-selected="<?php if (!(null !== ($_COOKIE['user'] ?? null)) || $_COOKIE['user'] == 'personal') {?>true<?php } else { ?>false<?php }?>">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->my_account, ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="fal fa-arrow-right"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if ($_COOKIE['user'] == 'private') {?>active<?php }?>"
                                id="pills-prof2-tab" data-bs-toggle="pill" data-bs-target="#pills-prof2"
                                type="button" role="tab" aria-controls="pills-prof2" aria-selected="<?php if ($_COOKIE['user'] == 'private') {?>true<?php } else { ?>false<?php }?>">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->personal_data, ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="fal fa-arrow-right"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if ($_COOKIE['user'] == 'orders') {?>active<?php }?>"
                                id="pills-prof3-tab" data-bs-toggle="pill" data-bs-target="#pills-prof3"
                                type="button" role="tab" aria-controls="pills-prof3" aria-selected="<?php if ($_COOKIE['user'] == 'orders') {?>true<?php } else { ?>false<?php }?>">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->orders_global, ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="fal fa-arrow-right"></i>
                        </button>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
wishlist" class="nav-link">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->wishlist_products, ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="fal fa-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/logout" class="nav-link">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->logout, ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="fal fa-sign-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade <?php if (!(null !== ($_COOKIE['user'] ?? null)) || $_COOKIE['user'] == 'personal') {?>show active<?php }?>" id="pills-prof1" role="tabpanel">
                    <?php $_smarty_tpl->renderSubTemplate('file:user/personal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="tab-pane fade <?php if ($_COOKIE['user'] == 'private') {?>show active<?php }?>" id="pills-prof2" role="tabpanel">
                    <?php $_smarty_tpl->renderSubTemplate('file:user/private.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="tab-pane fade <?php if ($_COOKIE['user'] == 'orders') {?>show active<?php }?>" id="pills-prof3" role="tabpanel">
                    <?php $_smarty_tpl->renderSubTemplate('file:user/user_orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
