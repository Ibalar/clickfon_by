{if $theme_settings->categories_header_type == '1'}
    <div class="tc-links-nav-style1 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="links">
                        <ul class="links-ul">
                            {function name=render_menu}
                                {foreach $items as $category}
                                    {if $category->visible}
                                        {if $category->subcategories}
                                            {* Генерируем уникальный ID для дропдауна *}
                                            {assign var="dropdownId" value="dropdown-{$category@iteration}-{$level}"}
                                            <li class="nav-item dropdown {if $level > 0}dropdown-submenu{/if}">
                                                <a class="{if $level == 0}dropdown-toggle{else}dropdown-item dropdown-toggle{/if}"
                                                   href="{$lang_link}catalog/{$category->url}"
                                                   id="{$dropdownId}"
                                                   {if $level == 0}role="button" data-bs-toggle="dropdown" aria-expanded="false"{/if}>
                                                    {$category->name|escape}
                                                    
                                                </a>
                                                <ul class="dropdown-menu {if $level > 0}dropdown-submenu{/if}"
                                                    {if $level == 0}aria-labelledby="{$dropdownId}"{/if}>
                                                    {call name=render_menu items=$category->subcategories level=$level+1}
                                                </ul>
                                            </li>
                                        {else}
                                            <li class="{if $level > 0}dropdown-item{/if}">
                                                <a class="{if $level == 0}nav-link{else}dropdown-item{/if}"
                                                   href="{$lang_link}catalog/{$category->url}">
                                                    {$category->name|escape}
                                                </a>
                                            </li>
                                        {/if}
                                    {/if}
                                {/foreach}
                            {/function}

                            {call name=render_menu items=$categories level=0}
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

    <script>
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
    </script>
{/if}