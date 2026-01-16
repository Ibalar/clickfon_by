<?php
/* Smarty version 5.4.2, created on 2025-11-30 14:20:06
  from 'file:password_remind.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692c2866ca10b6_53844721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c8f003fbeefd0d0673015cf2e76e767b2e727ee' => 
    array (
      0 => 'password_remind.tpl',
      1 => 1764501603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692c2866ca10b6_53844721 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/design/Clickfonby/html';
if ($_smarty_tpl->getValue('page')) {?>
		<?php $_smarty_tpl->assign('canonical', "/".((string)$_smarty_tpl->getValue('page')->url), false, 32);
} else { ?>
		<?php $_smarty_tpl->assign('meta_title', $_smarty_tpl->getValue('lang')->password_recovery, false, 32);?>

		<?php $_smarty_tpl->assign('canonical', "/user/password_remind", false, 32);
}?>

<!--title_content-->
<section class="page-top-info p-30 radius-4 mt-3 wow fadeInUp animated"
         style="visibility: visible; animation-name: fadeInUp; background: #f2f3f7; box-shadow: inset 0 12px 14px rgba(0, 0, 0, .06);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb fw-bold mb-0" itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php $_smarty_tpl->assign('level', 1, false, NULL);?>
            <li class="breadcrumb-item color-999" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php if ($_smarty_tpl->getValue('lang_link')) {
echo $_smarty_tpl->getValue('lang_link');
} else { ?>/<?php }?>" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->home, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
            </li>
            <li class="breadcrumb-item color-999" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/login" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->authorization, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->authorization, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
            </li>
            <?php if ($_smarty_tpl->getValue('page')) {?>
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="<?php echo $_smarty_tpl->getValue('lang_link');
echo $_smarty_tpl->getValue('page')->url;?>
" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page')->header, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
                </li>
            <?php } else { ?>
                <li class="breadcrumb-item active color-000" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <link href="<?php echo $_smarty_tpl->getValue('lang_link');?>
user/password_remind" itemprop="item">
                    <span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->password_recovery, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->getVariable('level')->postIncDec('++');?>
">
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
                    <h1 id="pagetitle" class="switcher-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->password_recovery, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<!--end-title_content-->

<section class="tc-login p-5 radius-4 bg-white mt-3 mb-3">
    <div class="row align-items-center justify-content-around">
        <div class="col-lg-12">
            <div class="login-form">

                <?php if ($_smarty_tpl->getValue('email_sent')) {?>
                    <div class="alert alert-success" role="alert">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->password_recovery_email, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('error')) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php if ($_smarty_tpl->getValue('error') == 'user_not_found') {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->user_not_found, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('error');?>

                        <?php }?>
                    </div>
                <?php }?>
                <form id="forgotpasswd-page-form" class="validate" method="post" novalidate="novalidate">
                    <div class="top-text font_16">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->password_recovery_text, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                    <div class="form-body">
                        <div class="form-group fill-animate">
                            <label for="FORGOTPASSWD_USER_LOGIN" class="font_14"><span>Email:&nbsp;<span class="required-star">*</span></span></label>
                            <div class="input">
                                <input id="FORGOTPASSWD_USER_LOGIN" class="form-control required" type="text" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
" required="" maxlength="255" autocomplete="off" aria-required="true">
                            </div>
                            <div class="text_block font_13"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->recovery_text, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button class="butn bg-green2 text-white radius-4 fw-500 fsz-14 text-uppercase text-center mt-40 px-5" type="submit" name="login" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->restore, ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('lang')->restore, ENT_QUOTES, 'UTF-8', true);?>
</span></button>
                        <div class="clearboth"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php }
}
