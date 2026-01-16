{if $theme_settings->categories_header_type == '1'}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mt-3">
            {function name=render_mobile_menu level=0 parent_id=''}
                {foreach $items as $category}
                    {if $category->visible}
                        {* Генерируем уникальный ID для аккордеона *}
                        {assign var="collapseId" value="mobile-collapse-{$category->id}-{$level}-{$parent_id}"}

                        {if $category->subcategories}
                            {* Категория с подкатегориями *}
                            <li class="nav-item dropdown {if $level > 0}dropdown-submenu mobile-submenu{/if}">
                                <div class="mobile-menu-item d-flex align-items-center justify-content-between w-100">
                                    <a class="nav-link {if $level > 0}mobile-submenu-link{/if}"
                                       href="{$lang_link}catalog/{$category->url}">
                                        {if $level > 0}
                                            {* Отступы для вложенных элементов *}
                                            <span style="display: inline-block; width: {($level-1)*20}px;"></span>
                                        {/if}
                                        {$category->name|escape}
                                    </a>
                                    <button class="btn btn-link mobile-toggle p-0 ms-2"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#{$collapseId}"
                                            aria-expanded="false"
                                            aria-controls="{$collapseId}">
                                        <i class="mobile-arrow"></i>
                                    </button>
                                </div>

                                <div class="collapse {if $level > 0}mobile-submenu-collapse{/if}" id="{$collapseId}">
                                    <ul class="nav flex-column {if $level == 0}ps-3{else}ps-4{/if}">
                                        {call name=render_mobile_menu items=$category->subcategories level=$level+1 parent_id=$category->id}
                                    </ul>
                                </div>
                            </li>
                        {else}
                            {* Категория без подкатегорий *}
                            <li class="nav-item">
                                <a class="nav-link {if $level > 0}mobile-submenu-link ps-{($level+1)*3}{/if}"
                                   href="{$lang_link}catalog/{$category->url}">
                                    {if $level > 0}
                                        <span style="display: inline-block; width: {($level-1)*20}px;"></span>
                                    {/if}
                                    {$category->name|escape}
                                </a>
                            </li>
                        {/if}
                    {/if}
                {/foreach}
            {/function}

            {call name=render_mobile_menu items=$categories level=0 parent_id='root'}

            {foreach $pages as $p}
                {if $p->menu_id == $theme_settings->id_menu_top}
                    <li class="nav-item">
                        <a class="nav-link" href="{$lang_link}{$p->url}">{$p->header|escape}</a>
                    </li>
                {/if}
            {/foreach}
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

    <script>
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
    </script>
{/if}