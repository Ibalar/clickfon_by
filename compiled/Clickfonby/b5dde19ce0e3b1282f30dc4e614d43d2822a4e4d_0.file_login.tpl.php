<?php
/* Smarty version 5.4.2, created on 2025-11-23 16:11:22
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692307fa78df42_86889927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5dde19ce0e3b1282f30dc4e614d43d2822a4e4d' => 
    array (
      0 => 'login.tpl',
      1 => 1763896865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692307fa78df42_86889927 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
		<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
		<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->login, false, 32);?>

		<?php $_smarty_tpl->assign('canonical', "/user/login", false, 32);
}?>

<?php if ((null !== ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? null)) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {?>
	<?php $_smarty_tpl->assign('wrapper', 'modals/auth.tpl', false, 32);
}?>

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
            <?php if ($_smarty_tpl->getValue('page')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } else { ?>
                <li class="breadcrumb-item active color-000" aria-current="page"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->authorization, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
        </ol>
    </nav>
    <div class="topic mt-3">
        <div class="topic__inner">
            <div class="topic__heading">
                <?php if ($_smarty_tpl->getValue('page')) {?>
                    <h1 id="pagetitle" class="switcher-title"><span data-page="<?php echo $_smarty_tpl->getValue('page')->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>
                <?php } else { ?>
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->authorization, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php }?>
            </div>
        </div>
    </div>
</section>


<section class="tc-login p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row align-items-center justify-content-around">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="img">
                <img src="design/<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('settings')->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/login.svg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->authorization, ENT_QUOTES, 'UTF-8', true);?>
">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="login-form">
                <div class="title mb-30">
                    <h3 class="color-red2 mb-10"><?php echo (($tmp = $_smarty_tpl->getValue('lang')->welcome_back ?? null)===null||$tmp==='' ? "Добро пожаловать" ?? null : $tmp);?>
</h3>
                    <p class="fsz-14 text-uppercase ltspc-2 color-999"><?php echo (($tmp = $_smarty_tpl->getValue('lang')->login_to_continue ?? null)===null||$tmp==='' ? "Авторизируйтесь для продолжения" ?? null : $tmp);?>
</p>
                    <?php if ($_smarty_tpl->getValue('lang')->authorization_text) {?>
                        <div class="fsz-14 mt-2 mb-20 color-666">
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->authorization_text, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->getValue('error')) {?>
                    <div class="alert alert-danger mb-3" role="alert">
                        <?php if ($_smarty_tpl->getValue('error') == 'login_incorrect') {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->wrong_login_password, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->getValue('error') == 'user_disabled') {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->not_activated, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('error');?>

                        <?php }?>
                    </div>
                <?php }?>
                <form id="auth-page-form" class="form d-block" method="post" target="_top" novalidate="novalidate">
                    <div class="form-group mb-4">
                        <label for="USER_LOGIN_FORM"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->login, ENT_QUOTES, 'UTF-8', true);?>
 <span class="required-star">*</span></label>
                        <input type="text" name="email" id="USER_LOGIN_FORM" class="form-control required input-filed"
                               maxlength="50" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="on" tabindex="1" aria-required="true" aria-invalid="false" placeholder="Example@gmail.com">
                    </div>
                    <div class="form-group mb-4 show_hide_password">
                        <label for="USER_PASSWORD_FORM"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->password, ENT_QUOTES, 'UTF-8', true);?>
 <span class="required-star">*</span></label>
                        <input type="password" name="password" id="USER_PASSWORD_FORM" class="form-control required"
                               maxlength="50" value="" autocomplete="on" tabindex="2" aria-required="true" placeholder="••••••••••••">
                        <i class="show_pass fal fa-eye-slash"></i>
                    </div>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/password_remind" class="d-block text-decoration-underline mt-2 color-999 fsz-13"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->forgot_password, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <div class="btns">
                        <button type="submit" class="butn bg-red2 text-white radius-4 fw-500 fsz-14 text-uppercase text-center mt-4 px-5" name="login" value="login">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->login, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                    <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/register" rel="nofollow" class="text-uppercase color-999 fsz-13 mt-3 d-block">
                        <?php echo (($tmp = $_smarty_tpl->getValue('lang')->new_user ?? null)===null||$tmp==='' ? "Новый пользователь?" ?? null : $tmp);?>
 <span class="color-green2 ms-2"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->registration, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                    <div class="mt-3 licence_block">
                        <label for="licenses_auth" class="fsz-13 color-666">
                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->licenses_text, ENT_QUOTES, 'UTF-8', true);?>

                                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
licenses" target="_blank"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->licenses_link, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php }
}
