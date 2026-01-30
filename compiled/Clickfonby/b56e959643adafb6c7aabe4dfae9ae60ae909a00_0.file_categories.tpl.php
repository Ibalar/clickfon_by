<?php
/* Smarty version 5.0.0, created on 2026-01-30 10:33:43
  from 'file:header/categories.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_697c5ed7239202_12601019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56e959643adafb6c7aabe4dfae9ae60ae909a00' => 
    array (
      0 => 'header/categories.tpl',
      1 => 1764922256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697c5ed7239202_12601019 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\header';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'render_menu' => 
  array (
    'compiled_filepath' => 'D:\\osp_6.3.5\\home\\clickfon.local\\compiled\\Clickfonby\\b56e959643adafb6c7aabe4dfae9ae60ae909a00_0.file_categories.tpl.php',
    'uid' => 'b56e959643adafb6c7aabe4dfae9ae60ae909a00',
    'call_name' => 'smarty_template_function_render_menu_440065285697c5ed72282f6_84964350',
  ),
));
if ($_smarty_tpl->getValue('theme_settings')->categories_header_type == '1') {?>
    <div class="tc-links-nav-style1 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="links">
                        <ul class="links-ul">
                            

                            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'render_menu', array('items'=>$_smarty_tpl->getValue('categories'),'level'=>0), true);?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Стили для многоуровневого меню */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-submenu > .dropdown-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Для Bootstrap 5 */
        @media (min-width: 992px) {
            .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                position: absolute;
            }

            .dropdown-menu .dropdown-item {
                padding: 0.5rem 1rem;
                white-space: nowrap;
            }
        }
    </style>

    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function() {
            // Обработка многоуровневого меню
            const dropdowns = document.querySelectorAll('.dropdown-submenu');

            dropdowns.forEach(function(dropdown) {
                const toggle = dropdown.querySelector('.dropdown-toggle');

                // На десктопе используем hover
                if (window.innerWidth >= 992) {
                    dropdown.addEventListener('mouseenter', function() {
                        this.querySelector('.dropdown-menu').classList.add('show');
                    });

                    dropdown.addEventListener('mouseleave', function() {
                        this.querySelector('.dropdown-menu').classList.remove('show');
                    });
                } else {
                    // На мобильных устройствах используем клик
                    toggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        const menu = this.nextElementSibling;
                        const isOpen = menu.classList.contains('show');

                        // Закрываем все открытые подменю
                        document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(function(openMenu) {
                            if (openMenu !== menu) {
                                openMenu.classList.remove('show');
                            }
                        });

                        menu.classList.toggle('show');
                    });
                }

                // Закрытие меню при клике вне его
                document.addEventListener('click', function(e) {
                    if (!dropdown.contains(e.target)) {
                        dropdown.querySelector('.dropdown-menu').classList.remove('show');
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php }
}
/* smarty_template_function_render_menu_440065285697c5ed72282f6_84964350 */
if (!function_exists('smarty_template_function_render_menu_440065285697c5ed72282f6_84964350')) {
function smarty_template_function_render_menu_440065285697c5ed72282f6_84964350(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\header';
$params = array_merge(array('name'=>'render_menu'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'category');
$_smarty_tpl->getVariable('category')->iteration = 0;
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach13DoElse = false;
$_smarty_tpl->getVariable('category')->iteration++;
$foreach13Backup = clone $_smarty_tpl->getVariable('category');
?>
                                    <?php if ($_smarty_tpl->getValue('category')->visible) {?>
                                        <?php if ($_smarty_tpl->getValue('category')->subcategories) {?>
                                                                                        <?php $_smarty_tpl->assign('dropdownId', "dropdown-".((string)$_smarty_tpl->getVariable('category')->iteration)."-".((string)$_smarty_tpl->getValue('level')), false, NULL);?>
                                            <li class="nav-item dropdown <?php if ($_smarty_tpl->getValue('level') > 0) {?>dropdown-submenu<?php }?>">
                                                <a class="<?php if ($_smarty_tpl->getValue('level') == 0) {?>dropdown-toggle<?php } else { ?>dropdown-item dropdown-toggle<?php }?>"
                                                   href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('category')->url;?>
"
                                                   id="<?php echo $_smarty_tpl->getValue('dropdownId');?>
"
                                                   <?php if ($_smarty_tpl->getValue('level') == 0) {?>role="button" data-bs-toggle="dropdown" aria-expanded="false"<?php }?>>
                                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

                                                    
                                                </a>
                                                <ul class="dropdown-menu <?php if ($_smarty_tpl->getValue('level') > 0) {?>dropdown-submenu<?php }?>"
                                                    <?php if ($_smarty_tpl->getValue('level') == 0) {?>aria-labelledby="<?php echo $_smarty_tpl->getValue('dropdownId');?>
"<?php }?>>
                                                    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'render_menu', array('items'=>$_smarty_tpl->getValue('category')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

                                                </ul>
                                            </li>
                                        <?php } else { ?>
                                            <li class="<?php if ($_smarty_tpl->getValue('level') > 0) {?>dropdown-item<?php }?>">
                                                <a class="<?php if ($_smarty_tpl->getValue('level') == 0) {?>nav-link<?php } else { ?>dropdown-item<?php }?>"
                                                   href="<?php echo $_smarty_tpl->getValue('lang_link');?>
catalog/<?php echo $_smarty_tpl->getValue('category')->url;?>
">
                                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('category')->name, ENT_QUOTES, 'UTF-8', true);?>

                                                </a>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                <?php
$_smarty_tpl->setVariable('category', $foreach13Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php
}}
/*/ smarty_template_function_render_menu_440065285697c5ed72282f6_84964350 */
}
