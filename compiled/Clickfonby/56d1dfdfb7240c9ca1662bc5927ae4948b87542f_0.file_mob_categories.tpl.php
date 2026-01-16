<?php
/* Smarty version 5.4.2, created on 2026-01-16 15:07:43
  from 'file:header/mob_categories.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a2a0f57bba1_02556475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56d1dfdfb7240c9ca1662bc5927ae4948b87542f' => 
    array (
      0 => 'header/mob_categories.tpl',
      1 => 1764929013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a2a0f57bba1_02556475 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\header';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'render_mobile_menu' => 
  array (
    'compiled_filepath' => 'D:\\osp_6.3.5\\home\\clickfon.local\\compiled\\Clickfonby\\56d1dfdfb7240c9ca1662bc5927ae4948b87542f_0.file_mob_categories.tpl.php',
    'uid' => '56d1dfdfb7240c9ca1662bc5927ae4948b87542f',
    'call_name' => 'smarty_template_function_render_mobile_menu_1011814092696a2a0f559690_03969879',
  ),
));
if ($_smarty_tpl->getValue('theme_settings')->categories_header_type == '1') {?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mt-3">
            

            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'render_mobile_menu', array('items'=>$_smarty_tpl->getValue('categories'),'level'=>0,'parent_id'=>'root'), true);?>


            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'p');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach12DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('p')->menu_id == $_smarty_tpl->getValue('theme_settings')->id_menu_top) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('lang_link');
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

    <style>
        /* Стили для мобильного многоуровневого меню */
        .mobile-menu-item {
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .mobile-submenu-link {
            padding-left: 15px;
            border-left: 2px solid #eee;
        }

        .mobile-submenu-collapse {
            background-color: rgba(0,0,0,0.02);
            border-left: 2px solid #dee2e6;
        }

        .mobile-toggle {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-arrow {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-right: 2px solid currentColor;
            border-bottom: 2px solid currentColor;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
            color: #6c757d;
        }

        .mobile-toggle[aria-expanded="true"] .mobile-arrow {
            transform: rotate(-135deg);
        }

        /* Анимация раскрытия */
        .collapsing {
            transition: height 0.35s ease;
        }

        /* Адаптивные стили */
        @media (max-width: 991.98px) {
            .navbar-nav .nav-link {
                padding: 12px 15px;
                font-size: 16px;
            }

            .mobile-submenu .nav-link {
                font-size: 15px;
            }

            .nav.flex-column {
                margin-bottom: 0;
            }
        }

        /* Для темной темы */
        [data-bs-theme="dark"] .mobile-submenu-collapse {
            background-color: rgba(255,255,255,0.05);
            border-left-color: #444;
        }

        [data-bs-theme="dark"] .mobile-menu-item {
            border-bottom-color: rgba(255,255,255,0.1);
        }
    </style>

    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function() {
            // Обработка мобильного меню
            const mobileToggles = document.querySelectorAll('.mobile-toggle');

            mobileToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();

                    const targetId = this.getAttribute('data-bs-target');
                    const target = document.querySelector(targetId);

                    if (target) {
                        // Закрываем все открытые подменю на том же уровне
                        const parentItem = this.closest('.nav-item');
                        if (parentItem) {
                            const siblings = parentItem.parentElement.querySelectorAll('.nav-item');
                            siblings.forEach(function(sibling) {
                                if (sibling !== parentItem) {
                                    const siblingCollapse = sibling.querySelector('.collapse.show');
                                    if (siblingCollapse) {
                                        bootstrap.Collapse.getInstance(siblingCollapse)?.hide();
                                    }
                                }
                            });
                        }
                    }
                });
            });

            // Закрытие меню при клике на ссылку
            const navLinks = document.querySelectorAll('#navbarSupportedContent .nav-link');
            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    const navbarCollapse = document.getElementById('navbarSupportedContent');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }

                    // Закрываем все открытые подменю
                    document.querySelectorAll('#navbarSupportedContent .collapse.show').forEach(function(collapse) {
                        bootstrap.Collapse.getInstance(collapse)?.hide();
                    });
                });
            });

            // Обработка клавиатуры
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    // Закрываем все подменю при нажатии Escape
                    document.querySelectorAll('#navbarSupportedContent .collapse.show').forEach(function(collapse) {
                        bootstrap.Collapse.getInstance(collapse)?.hide();
                    });
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php }
}
/* smarty_template_function_render_mobile_menu_1011814092696a2a0f559690_03969879 */
if (!function_exists('smarty_template_function_render_mobile_menu_1011814092696a2a0f559690_03969879')) {
function smarty_template_function_render_mobile_menu_1011814092696a2a0f559690_03969879(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\header';
$params = array_merge(array('name'=>'render_mobile_menu','level'=>0,'parent_id'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'category');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach11DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('category')->visible) {?>
                                                <?php $_smarty_tpl->assign('collapseId', "mobile-collapse-".((string)$_smarty_tpl->getValue('category')->id)."-".((string)$_smarty_tpl->getValue('level'))."-".((string)$_smarty_tpl->getValue('parent_id')), false, NULL);?>

                        <?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
                                                        <li class="nav-item dropdown <?php if ($_smarty_tpl->getValue('level') > 0) {?>dropdown-submenu mobile-submenu<?php }?>">
                                <div class="mobile-menu-item d-flex align-items-center justify-content-between w-100">
                                    <a class="nav-link <?php if ($_smarty_tpl->getValue('level') > 0) {?>mobile-submenu-link<?php }?>"
                                       href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('category')->url;?>
">
                                        <?php if ($_smarty_tpl->getValue('level') > 0) {?>
                                                                                        <span style="display: inline-block; width: <?php echo ($_smarty_tpl->getValue('level')-1)*20;?>
px;"></span>
                                        <?php }?>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                    <button class="btn btn-link mobile-toggle p-0 ms-2"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#<?php echo $_smarty_tpl->getValue('collapseId');?>
"
                                            aria-expanded="false"
                                            aria-controls="<?php echo $_smarty_tpl->getValue('collapseId');?>
">
                                        <i class="mobile-arrow"></i>
                                    </button>
                                </div>

                                <div class="collapse <?php if ($_smarty_tpl->getValue('level') > 0) {?>mobile-submenu-collapse<?php }?>" id="<?php echo $_smarty_tpl->getValue('collapseId');?>
">
                                    <ul class="nav flex-column <?php if ($_smarty_tpl->getValue('level') == 0) {?>ps-3<?php } else { ?>ps-4<?php }?>">
                                        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'render_mobile_menu', array('items'=>$_smarty_tpl->getValue('category')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1,'parent_id'=>$_smarty_tpl->getValue('category')->id), true);?>

                                    </ul>
                                </div>
                            </li>
                        <?php } else { ?>
                                                        <li class="nav-item">
                                <a class="nav-link <?php if ($_smarty_tpl->getValue('level') > 0) {?>mobile-submenu-link ps-<?php echo ($_smarty_tpl->getValue('level')+1)*3;
}?>"
                                   href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('category')->url;?>
">
                                    <?php if ($_smarty_tpl->getValue('level') > 0) {?>
                                        <span style="display: inline-block; width: <?php echo ($_smarty_tpl->getValue('level')-1)*20;?>
px;"></span>
                                    <?php }?>
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php
}}
/*/ smarty_template_function_render_mobile_menu_1011814092696a2a0f559690_03969879 */
}
