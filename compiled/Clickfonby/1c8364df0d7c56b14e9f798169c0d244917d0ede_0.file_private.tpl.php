<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:40:18
  from 'file:user/private.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300b2c21128_29800348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c8364df0d7c56b14e9f798169c0d244917d0ede' => 
    array (
      0 => 'user/private.tpl',
      1 => 1763899645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692300b2c21128_29800348 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html/user';
if ((null !== ($_smarty_tpl->getValue('error') ?? null))) {?>
	<div class="alert alert-danger" role="alert">
		<?php if ($_smarty_tpl->getValue('error') == 'empty_name') {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_your_name, ENT_QUOTES, 'UTF-8', true);?>

		<?php } elseif ($_smarty_tpl->getValue('error') == 'empty_email') {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_your_email, ENT_QUOTES, 'UTF-8', true);?>

		<?php } elseif ($_smarty_tpl->getValue('error') == 'empty_password') {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->enter_password, ENT_QUOTES, 'UTF-8', true);?>

		<?php } elseif ($_smarty_tpl->getValue('error') == 'user_exists') {?>
			<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->email_already_registered, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getValue('error');?>

		<?php }?>
	</div>
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('success') ?? null))) {?>
	<div class="alert alert-success" role="alert">
		<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->message_success, ENT_QUOTES, 'UTF-8', true);?>

	</div>
<?php }?>

<div class="acount-tab">
    <h4 class="fw-bold text-capitalize mb-30"><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('lang')->contact_details_user ?? null)===null||$tmp==='' ? 'Contact details' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h4>
    <div class="content">
        <form id="profile-form" class="update-profile-form" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="NAME" class="font_14">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->name, ENT_QUOTES, 'UTF-8', true);?>
 <span class="color-red1">*</span>
                        </label>
                        <input required type="text" class="form-control" name="name" id="NAME" maxlength="50" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="EMAIL" class="font_14">
                            E-mail <span class="color-red1">*</span>
                        </label>
                        <input required type="text" name="email" id="EMAIL" maxlength="50" class="form-control" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if ($_smarty_tpl->getValue('lang')->user_email_text) {?>
                            <div class="text_block font_13 mt-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->user_email_text, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="PERSONAL_PHONE" class="font_14">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->phone, ENT_QUOTES, 'UTF-8', true);?>

                        </label>
                        <input type="text" name="phone" id="PERSONAL_PHONE" class="form-control" maxlength="255" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('phone'), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if ($_smarty_tpl->getValue('lang')->user_phone_text) {?>
                            <div class="text_block font_13 mt-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->user_phone_text, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="ADDRESS" class="font_14">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->address, ENT_QUOTES, 'UTF-8', true);?>

                        </label>
                        <input type="text" name="address" id="ADDRESS" class="form-control" maxlength="255" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('address'), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if ($_smarty_tpl->getValue('lang')->shipping_address) {?>
                            <div class="text_block font_13 mt-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->shipping_address, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                    <button class="butn bg-green2 text-white radius-4 fw-500 fsz-14 text-uppercase mt-2 px-5 py-2" type="submit" name="save" value="save">
                        <span><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('lang')->save_changes ?? null)===null||$tmp==='' ? 'Save changes' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="acount-tab mt-40">
    <h4 class="fw-bold text-capitalize mb-30"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->change_password, ENT_QUOTES, 'UTF-8', true);?>
</h4>
    <div class="content">
        <form id="pass-form" method="post" class="pass-form">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('phone'), ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="address" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('address'), ENT_QUOTES, 'UTF-8', true);?>
">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-4 show_hide_password">
                        <label for="NEW_PASSWORD" class="font_14">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->new_password, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('lang')->registraion_password_text) {?>(<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->registraion_password_text, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?>
                        </label>
                        <input type="password" name="password" id="NEW_PASSWORD" maxlength="50" class="form-control password" value="">
                        <i class="show_pass fal fa-eye-slash"></i>

                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                    <button class="butn bg-green2 text-white radius-4 fw-500 fsz-14 text-uppercase mt-2 px-5 py-2" type="submit" name="save" value="save">
                        <span><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('lang')->save_changes ?? null)===null||$tmp==='' ? 'Save changes' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
