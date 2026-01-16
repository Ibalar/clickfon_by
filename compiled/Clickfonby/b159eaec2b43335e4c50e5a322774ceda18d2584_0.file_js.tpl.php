<?php
/* Smarty version 5.4.2, created on 2026-01-16 21:46:05
  from 'file:scripts/js.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_696a876dd936c1_61996775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b159eaec2b43335e4c50e5a322774ceda18d2584' => 
    array (
      0 => 'scripts/js.tpl',
      1 => 1768589145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a876dd936c1_61996775 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\osp_6.3.5\\home\\clickfon.local\\design\\Clickfonby\\html\\scripts';
?><!--  request  -->
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery-3.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery-migrate-3.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.fancybox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lity.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/swiper8-bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.counterup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/parallaxie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/iziToast.min.js"><?php echo '</script'; ?>
>
<!-- ===== gsap scripts ===== -->
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/gsap.min.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="../common/assets/js/gsap_lib/ScrollSmoother.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../common/assets/js/gsap_lib/ScrollTrigger.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../common/assets/js/gsap_lib/SplitText.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/common_js.js"><?php echo '</script'; ?>
>

<!-- ===== home scripts ===== -->
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/home_1_scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/inner_pages.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/lazy-load.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).on('click', 'a.icon.wishlist', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var isActive = $btn.hasClass('active');
        var url = $btn.attr('href');

        $.ajax({
            url: url,
            type: "GET",
            success: function(data) {
                // Переключаем класс active и иконку
                $btn.toggleClass('active');
                $btn.find('i').toggleClass('fas fal'); // меняем стиль иконки

                // Обновляем иконку избранного в хедере
                if(data.wishlist_count !== undefined) {
                    if(data.wishlist_count > 0){
                        $('.header-wishlist-icon').addClass('has-items');
                        $('.header-wishlist-icon .dot').show();
                    } else {
                        $('.header-wishlist-icon').removeClass('has-items');
                        $('.header-wishlist-icon .dot').hide();
                    }
                }

                // Показываем уведомление
                iziToast.show({
                    title: 'Успешно',
                    message: isActive ? 'Товар удален из избранного' : 'Товар добавлен в избранное',
                    color: isActive ? 'red' : 'green',
                    position: 'topRight',
                    timeout: 3000
                });
            },
            error: function(){
                iziToast.error({
                    title: 'Ошибка',
                    message: 'Ошибка при работе с избранным!',
                    position: 'topRight'
                });
            }
        });
    });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).on('click', 'a.icon.compare', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var isActive = $btn.hasClass('active');
        var url = $btn.attr('href');

        $.ajax({
            url: url,
            type: "GET", // или "POST", если на бэке требуется
            success: function(data) {
                // Переключаем класс active и иконку
                $btn.toggleClass('active');
                $btn.find('i').toggleClass('fas fal');

                // Обновляем иконку сравнения в хедере, если нужно
                if(data.compare_count !== undefined) {
                    if(data.compare_count > 0){
                        $('.header-compare-icon').addClass('has-items');
                        $('.header-compare-icon .dot').show();
                    } else {
                        $('.header-compare-icon').removeClass('has-items');
                        $('.header-compare-icon .dot').hide();
                    }
                }
                // Показываем уведомление
                iziToast.show({
                    title: 'Успешно',
                    message: isActive ? 'Товар убран из сравнения' : 'Товар добавлен в сравнение',
                    color: isActive ? 'red' : 'green',
                    position: 'topRight',
                    timeout: 3000
                });
            },
            error: function(){
                iziToast.error({
                    title: 'Ошибка',
                    message: 'Ошибка при добавлении в сравнение!',
                    position: 'topRight'
                });
            }
        });
    });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(document).on('click', '.wishlist-btn', function(e) {
        e.preventDefault();

        var $btn = $(this);
        var url = $btn.attr('href');
        var isActive = $btn.hasClass('active'); // Было в избранном?

        $.ajax({
            url: url + (url.indexOf('?') === -1 ? '?ajax=1' : '&ajax=1'), // передаем ajax=1
            type: "GET",
            dataType: "json",
            success: function(data) {
                // Обработка кнопки
                if(isActive){
                    // Стал неактивным (удалили)
                    $btn.removeClass('active');
                    $btn.html('<i class="fas fa-heart me-1"></i> В избранное');
                    iziToast.show({
                        title: 'Успешно',
                        message: 'Товар удалён из избранного',
                        color: 'red',
                        position: 'topRight',
                        timeout: 2500
                    });
                } else {
                    // Стал активным (добавили)
                    $btn.addClass('active');
                    $btn.html('<i class="fas fa-heart color-red2 me-1"></i> В избранном');
                    iziToast.show({
                        title: 'Успешно',
                        message: 'Товар добавлен в избранное',
                        color: 'green',
                        position: 'topRight',
                        timeout: 2500
                    });
                }
            },
            error: function(){
                iziToast.error({
                    title: 'Ошибка',
                    message: 'Ошибка при работе с избранным!',
                    position: 'topRight'
                });
            }
        });
    });


<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).on('click', '.compare-btn', function(e) {
        e.preventDefault();

        var $btn = $(this);
        var url = $btn.attr('href');
        var isActive = $btn.hasClass('active'); // Был ли товар уже в сравнении?

        $.ajax({
            url: url + (url.indexOf('?') === -1 ? '?ajax=1' : '&ajax=1'), // передаем ajax=1 для обработки на сервере
            type: "GET",
            dataType: "json",
            success: function(data) {
                if (isActive) {
                    // Удаляем из сравнения
                    $btn.removeClass('active');
                    $btn.html('<i class="fas fa-sync me-1"></i> В сравнение');
                    iziToast.show({
                        title: 'Успешно',
                        message: 'Товар удалён из сравнения',
                        color: 'red',
                        position: 'topRight',
                        timeout: 2500
                    });
                } else {
                    // Добавляем в сравнение
                    $btn.addClass('active');
                    $btn.html('<i class="fas fa-redo color-red2 me-1"></i> В сравнении');
                    iziToast.show({
                        title: 'Успешно',
                        message: 'Товар добавлен в сравнение',
                        color: 'green',
                        position: 'topRight',
                        timeout: 2500
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Ошибка',
                    message: 'Ошибка при работе с сравнением!',
                    position: 'topRight'
                });
            }
        });
    });

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    
    $(document).on('submit', 'form.variants', function(e){
        e.preventDefault();
        var $form = $(this);
        var url = $form.data('action') || '/ajax/cart.php';
        var params = $form.serialize();

        $.get(url + '?' + params, function(response){
            if (typeof response === 'string') {
                try {
                    response = JSON.parse(response);
                } catch(e) {
                    iziToast.error({
                        message: 'Ошибка ответа сервера!',
                        position: 'topRight'
                    });
                    return;
                }
            }
            if(response.cart_informer) {
                $('#cart-block-header').html(response.cart_informer);
            }
            iziToast.success({
                message: 'Товар добавлен в корзину!',
                position: 'topRight'
            });
            if(response.cart_informer_mobile) {
                $('#cart-block-mobile').html(response.cart_informer_mobile);
            }
            if(response.cart_informer_footer) {
                $('#cart-block-footer').html(response.cart_informer_footer);
            }
        });
    });
    
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    
    $(document).on('click', '.qt-plus, .qt-minus', function() {
        var $card = $(this).closest('.product-card');
        var $input = $card.find('input.qt');
        var price = parseFloat($input.data('price'));
        var count = parseInt($input.val());

        if ($(this).hasClass('qt-plus')) {
            if (count < 99) $input.val(count + 1);
        } else {
            if (count > 1) $input.val(count - 1);
        }

        updateTotals();
        // Если нужно отправлять данные на сервер, вызовите updateServerQty($input);
    });

    $(document).on('input', 'input.qt', function() {
        var val = parseInt($(this).val());
        if (isNaN(val) || val < 1) $(this).val(1);
        if (val > 99) $(this).val(99);
        updateTotals();
        // updateServerQty($(this));
    });

    function updateTotals() {
        var total = 0;
        $('.product-card').each(function() {
            var $input = $(this).find('input.qt');
            var price = parseFloat($input.data('price'));
            var count = parseInt($input.val());
            if (!isNaN(price) && !isNaN(count)) {
                total += price * count;
            }
        });
        $('.cart-card .order-total, .cart-card .color-000.text-uppercase, .cart-card .summary-total').text(total.toLocaleString('ru-RU', {minimumFractionDigits: 2}));
        // Подстройте селектор под вашу разметку
    }
    

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(document).on('change', '.delivery-radio', function () {
        var deliveryId = $(this).val();
        $('[id^="payment-methods-delivery-"]').hide();
        $('#payment-methods-delivery-' + deliveryId).show();

        // Сброс выбора: первый radio активен
        $('#payment-methods-delivery-' + deliveryId)
            .find('input[type=radio]')
            .prop('checked', false)
            .first().prop('checked', true);
    });



<?php echo '</script'; ?>
><?php }
}
