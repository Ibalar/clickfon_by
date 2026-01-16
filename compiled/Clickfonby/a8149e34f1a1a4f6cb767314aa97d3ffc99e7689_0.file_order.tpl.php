<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:43:18
  from 'file:order.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692301668fd2b4_37201598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8149e34f1a1a4f6cb767314aa97d3ffc99e7689' => 
    array (
      0 => 'order.tpl',
      1 => 1763802077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692301668fd2b4_37201598 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
$_smarty_tpl->assign('meta_title', ((string)$_smarty_tpl->getValue('lang')->email_order_title)." ".((string)$_smarty_tpl->getValue('order')->id), false, 32);?>

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
            <li class="breadcrumb-item active color-000" aria-current="page">
                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->order_page, ENT_QUOTES, 'UTF-8', true);?>

            </li>
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading flexbox--wrap-nowrap">
                <h1 id="pagetitle" class="switcher-title">
                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->email_order_title, ENT_QUOTES, 'UTF-8', true);
echo $_smarty_tpl->getValue('order')->id;?>

                    <?php if ($_smarty_tpl->getValue('order')->status == 0) {?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->accepted, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('order')->status == 1) {?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->in_processing, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->getValue('order')->status == 2) {?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->completed, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('order')->paid == 1) {?>
                        (<span class="text-success"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->paid, ENT_QUOTES, 'UTF-8', true);?>
</span>)
                    <?php }?>
                </h1>
            </div>
        </div>
    </div>
</section>


<section class="shopping-cart p-30 radius-4 bg-white mt-3 wow fadeInUp mb-3 animated">

    <div class="shopping-table table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Стоимость</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Итого</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('purchases'), 'purchase');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td>
                        <?php if ($_smarty_tpl->getValue('purchase')->product->images) {?>
                            <?php $_smarty_tpl->assign('image', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('purchase')->product->images), false, NULL);?>
                            <div class="prod_img">
                                <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,70,70);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
" class="">
                            </div>
                        <?php } else { ?>
                            <div class="prod_img">
                                <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/no-photo.svg" class="" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                        <?php }?>
                    </td>
                    <td> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
 </td>
                    <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')(($_smarty_tpl->getValue('purchase')->variant->price*$_smarty_tpl->getValue('purchase')->amount));?>

                        <?php if ($_smarty_tpl->getValue('currency')->sign) {
echo $_smarty_tpl->getValue('currency')->sign;
}?></td>
                    <td>
                        &times; <?php echo $_smarty_tpl->getValue('purchase')->amount;?>
&nbsp;<?php echo $_smarty_tpl->getValue('settings')->units;?>

                    </td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('purchase')->variant->compare_price > $_smarty_tpl->getValue('purchase')->variant->price && $_smarty_tpl->getValue('purchase')->variant->price > 0) {?>
                            <div class="stickers-basket sticker sticker--upper sticker--static flexbox--justify-end">
                                <div>
                                    <div class="stickers-basket--item sticker__item sticker__item--sale font_12">
                                        <?php echo round((float) (($_smarty_tpl->getValue('purchase')->variant->price-$_smarty_tpl->getValue('purchase')->variant->compare_price)/$_smarty_tpl->getValue('purchase')->variant->compare_price)*100, (int) 0, (int) 1);?>
%
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <div class="basket-item-price-current">
                            <div class="basket-item-price-current-value">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')(($_smarty_tpl->getValue('purchase')->variant->price*$_smarty_tpl->getValue('purchase')->amount));?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>

                            </div>
                        </div>
                        <?php if ($_smarty_tpl->getValue('purchase')->variant->compare_price > 0) {?>
                            <div class="basket-item-price-old">
                                <span class="basket-item-price-old-text">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')(($_smarty_tpl->getValue('purchase')->variant->compare_price*$_smarty_tpl->getValue('purchase')->amount));?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>

                                </span>
                            </div>
                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>


</section>

<div class="container">
	<div class="row">
		<div class="maxwidth-theme">
			<div class="col-md-12 col-sm-12 col-xs-12 content-md">
				<div class="right_block narrow_N">
					<div class="form cart">
						<div id="basket-root" class="tb-basket tb-blue tb-step-opacity" style="opacity: 1;">
							<div class="flexbox flexbox--row basket-items-list">
								<div class="basket-items-list-outer">
									<div class="row basket-items-list-wrapper">
										<div class="col-md-12">
																						<h2><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->order_details, ENT_QUOTES, 'UTF-8', true);?>
</h2>
											<div class="bordered outer-rounded-x">
												<table class="table table-details">
													<tbody>
														<tr>
															<td scope="row">
																<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->order_date, ENT_QUOTES, 'UTF-8', true);?>

															</td>
															<td>
																<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('order')->date);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->at, ENT_QUOTES, 'UTF-8', true);?>

																<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('order')->date);?>

															</td>
														</tr>
														<?php if ($_smarty_tpl->getValue('order')->name) {?>
															<tr>
																<td scope="row">
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->name, ENT_QUOTES, 'UTF-8', true);?>

																</td>
																<td>
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->name, ENT_QUOTES, 'UTF-8', true);?>

																</td>
															</tr>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('order')->email) {?>
															<tr>
																<td scope="row">
																	Email
																</td>
																<td>
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->email, ENT_QUOTES, 'UTF-8', true);?>

																</td>
															</tr>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('order')->phone) {?>
															<tr>
																<td scope="row">
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->phone, ENT_QUOTES, 'UTF-8', true);?>

																</td>
																<td>
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->phone, ENT_QUOTES, 'UTF-8', true);?>

																</td>
															</tr>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('delivery')) {?>
															<tr>
																<td scope="row">
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->delivery_method, ENT_QUOTES, 'UTF-8', true);?>

																</td>
																<td>
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>

																</td>
															</tr>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('order')->address) {?>
															<tr>
																<td scope="row">
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->delivery_address, ENT_QUOTES, 'UTF-8', true);?>

																</td>
																<td>
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->address, ENT_QUOTES, 'UTF-8', true);?>

																</td>
															</tr>
														<?php }?>
														<?php if ($_smarty_tpl->getValue('order')->comment) {?>
															<tr>
																<td scope="row">
																	<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->comment, ENT_QUOTES, 'UTF-8', true);?>

																</td>
																<td>
																	<?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->getValue('order')->comment, ENT_QUOTES, 'UTF-8', true), (bool) 1);?>

																</td>
															</tr>
														<?php }?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="basket-total-outer">
									<div class="basket-total-block">
										<div class="basket-checkout-container visible">
											<div class="basket-checkout-section">
												<div class="basket-checkout-section-inner">
													<div class="basket-checkout-section-left">
                                                        <div class="total d-flex justify-content-between py-3 fsz-16 fw-bold">
                                                            <span> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->total, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                            <span class="color-green2"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('order')->total_price);?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>
 </span>
                                                        </div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
