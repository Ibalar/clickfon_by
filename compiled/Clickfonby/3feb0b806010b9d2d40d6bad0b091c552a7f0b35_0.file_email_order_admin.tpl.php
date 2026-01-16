<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:43:18
  from 'file:/home/clickfon/public_html/turbo/design/html/email/email_order_admin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69230166546683_90491940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3feb0b806010b9d2d40d6bad0b091c552a7f0b35' => 
    array (
      0 => '/home/clickfon/public_html/turbo/design/html/email/email_order_admin.tpl',
      1 => 1733757118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69230166546683_90491940 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html/email';
if ($_smarty_tpl->getValue('order')->paid) {?>
  <?php $_smarty_tpl->assign('subject', ((string)$_smarty_tpl->getValue('btr')->global_order)." ".((string)$_smarty_tpl->getValue('order')->id)." ".((string)$_smarty_tpl->getValue('btr')->email_paid), false, 32);
} else { ?>
  <?php $_smarty_tpl->assign('subject', ((string)$_smarty_tpl->getValue('btr')->order_new)." ".((string)$_smarty_tpl->getValue('order')->id), false, 32);
}?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_new, ENT_QUOTES, 'UTF-8', true);?>
 № <?php echo $_smarty_tpl->getValue('order')->id;?>
</title>
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">

  
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->

    <style>
      /*<![CDATA[*/
      div,
      p,
      a,
      li,
      td,
      span {
        -webkit-text-size-adjust: none;
      }

      @media only screen and (max-width: 600px) {
        *[class="gmail-fix"] {
          display: none !important;
        }
      }

      /*]]>*/

      /*  Template reset styles  */
      body {
        color: #495057;
      }

      #outlook a {padding:0;}
      .es-wrapper-color {
        width: 100%;
        font-family: 'Trebuchet MS', helvetica, arial, sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        color: #495057;
        padding: 0;
        margin: 0;
      }

      #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
      }

      table {
        mso-table-lspace: 0;
        mso-table-rspace: 0;
        border-collapse: collapse;
        border-spacing: 0;
      }

      table tr {
        border-collapse: collapse
      }

      table td {
        padding: 0;
        margin: 0;
      }

      img {
        display: block;
        border: 0;
        outline: none;
        text-decoration: none;
        -ms-interpolation-mode: bicubic;
      }

      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
      }

      .es-wrapper-color h1,
      .es-wrapper-color h2,
      .es-wrapper-color h3,
      .es-wrapper-color h4,
      .es-wrapper-color h5 {
        margin: 0;
        line-height: 120%;
        mso-line-height-rule: exactly;
        font-family: 'Trebuchet MS', helvetica, arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        color: #495057;
      }

      .es-wrapper-color h1 {font-size: 24px;font-weight: 400;}
      .es-wrapper-color h2 {font-size: 22px;font-weight: 400;}
      .es-wrapper-color h3 {font-size: 20px;font-weight: 400;}
      .es-wrapper-color h4 {font-size: 18px;font-weight: 600;}
      .es-wrapper-color h5 {font-size: 18px}

      .es-wrapper-color p,
      .es-wrapper-color ul li,
      .es-wrapper-color ol li,
      .es-wrapper-color a {
        -webkit-text-size-adjust: none;
        -ms-text-size-adjust: none;
        mso-line-height-rule: exactly;
        font-family: 'Trebuchet MS', helvetica, arial, sans-serif;
        font-size: 15px;
        line-height: 150%;
        margin: 0 0 10px;
        color: #515151;
      }

      .es-wrapper-color a {
        text-decoration: underline;
        color: #3b7ddd;
        margin-bottom: 0;
      }

      /*  Template default styles  */

      .es-left  {float: left;}
      .es-right {float: right;}
      .es-p5   {padding: 5px;}
      .es-p5t  {padding-top: 5px;}
      .es-p5b  {padding-bottom: 5px;}
      .es-p5l  {padding-left: 5px;}
      .es-p5r  {padding-right: 5px;}
      .es-p10  {padding: 10px;}
      .es-p10t {padding-top: 10px;}
      .es-p10b {padding-bottom: 10px;}
      .es-p10l {padding-left: 10px;}
      .es-p10r {padding-right: 10px;}
      .es-p15  {padding: 15px;}
      .es-p15t {padding-top: 15px;}
      .es-p15b {padding-bottom: 15px;}
      .es-p15l {padding-left: 15px;}
      .es-p15r {padding-right: 15px;}
      .es-p20  {padding: 20px;}
      .es-p20t {padding-top: 20px;}
      .es-p20b {padding-bottom: 20px;}
      .es-p20l {padding-left: 20px;}
      .es-p20r {padding-right: 20px;}
      .es-p25  {padding: 25px;}
      .es-p25t {padding-top: 25px;}
      .es-p25b {padding-bottom: 25px;}
      .es-p25l {padding-left: 25px;}
      .es-p25r {padding-right: 25px;}
      .es-p30  {padding: 30px;}
      .es-p30t {padding-top: 30px;}
      .es-p30b {padding-bottom: 30px;}
      .es-p30l {padding-left: 30px;}
      .es-p30r {padding-right: 30px;}
      .es-p35  {padding: 35px;}
      .es-p35t {padding-top: 35px;}
      .es-p35b {padding-bottom: 35px;}
      .es-p35l {padding-left: 35px;}
      .es-p35r {padding-right: 35px;}
      .es-p40  {padding: 40px;}
      .es-p40t {padding-top: 40px;}
      .es-p40b {padding-bottom: 40px;}
      .es-p40l {padding-left: 40px;}
      .es-p40r {padding-right: 40px;}


      /*  Template color styles  */

      .es-wrapper-color {background-color: #f7f9fc;}
      .es-content-body  {background-color: #ffffff;}
      .es-header-body   {background-color: #ffffff;}
      .es-footer-body   {background-color: #fff;}


      /*  Template styles  */

      .es-wrapper {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        background-image: none;
        background-repeat: repeat;
        background-position: center top;
      }

      .es-header-body,
      .es-content-body {
        border-bottom: 2px solid #f7f9fc;
      }

      .es-content,
      .es-header,
      .es-footer {
        table-layout: fixed !important;
        width: 100%;
      }

      .es-table-infobox {
        font-family: 'Trebuchet MS', helvetica, arial, sans-serif;
        font-size: 13px;
        width: 100%;
      }

      .es-table-infobox a {
        font-size: 13px;
      }

      .es-table-infobox td,
      .es-table-infobox th {
        line-height: 150%;
        padding: 10px;
        text-align: left;
        margin: 0;
        border: 1px solid #dee6ed;
      }

      .es-table-infobox tbody tr:nth-child(2n) {
        background-color: #f7f9fc;
      }

      .es-table-infobox th {
        background: #232f3e;
        color: #fff;
        font-weight: 600;
      }

      .es-wrapper-color .es-button {
        mso-style-priority: 100 !important;
        text-decoration: none !important;
        border: 2px solid #3b7ddd;
        display: inline-block;
        background: #3b7ddd;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        font-style: normal;
        color: #fff;
        width: auto;
        text-align: center;
        padding: 8px 40px;
        line-height: 1.2;
        font-family: Verdana, arial, sans-serif;
      }

      .es-wrapper-color .es-download {
        mso-style-priority: 100 !important;
        text-decoration: none !important;
        border: 2px solid #3b7ddd;
        display: inline-block;
        background: #fff;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        font-style: normal;
        color: #3b7ddd;
        width: auto;
        text-align: center;
        padding: 4px 10px;
        line-height: 1.2;
        font-family: Verdana, arial, sans-serif;
      }

      .es-wrapper-color .es-button-border {
        border: 2px solid #dc3545;
        color: #dc3545;
        background: #fff;
        display: inline-block;
        border-radius: 4px;
        font-size: 14px;
        font-family: inherit;
        font-weight: 600;
        font-style: normal;
        line-height: 1.2;
        width: auto;
        text-align: center;
      }

      .es-wrapper-color .es-number-order {
        color: #dc3545;
        padding: 0px 8px;
        display: inline-block;
        font-size: 18px;
        border: 2px solid #dc3545;
        border-radius: 4px;
        line-height: 1.3;
        margin: 0px 5px;
        vertical-align: top;
        font-weight: 600;
      }

      .es-wrapper-color .es-status-color {
        font-weight: 600;
        color: #fff;
        background: #1cbb8c;
        padding: 2px 8px;
        border-radius: 5px;
        font-size: 12px;
        margin: 0px 3px;
        vertical-align: middle;
      }

      .es-wrapper-color .es-comment-user {
        line-height: 150%;
        background-color: #fff;
        padding: 10px;
        text-align: left;
        margin: 0;
        color: #495057;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #dee6ed;
      }

      .es-wrapper-color .es-comment-admin {
        background-color: #f7f9fc;
        line-height: 150%;
        padding: 10px;
        text-align: right;
        margin: 0;
        color: #495057;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #dee6ed;
      }

      .es-comment-date {
        font-size: 12px;
        font-style: italic;
        color: #7e7e7e;
      }

      .es-comment-name {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
      }

      .es-comment-text {
        line-height: 130%;
        color: #555;
      }

      .mobile_link a[href^="tel"],
      .mobile_link a[href^="sms"] {
        text-decoration: default;
        color: orange !important;
        pointer-events: auto;
        cursor: default;
      }

      @media only screen and (max-width: 600px) {
        .es-m-txt-center {text-align: center !important;}
        .es-m-txt-right {text-align: right !important;}
        .es-m-txt-left {text-align: left !important;}
        .es-m-txt-center img{display: inline !important;}
        .es-left,
        .es-right {width: 100% !important;float: none;}

        .es-button-border {display: block !important;}
        .es-button {
          font-size: 14px !important;
          display: block !important;
          border-left-width: 0 !important;
          border-right-width: 0 !important;
        }

        .es-p40l {padding-left: 0px;}
        .es-p40r {padding-right: 30px;}
        .es-content table,
        .es-header table,
        .es-footer table,
        .es-content,
        .es-footer,
        .es-header {
          width: 100% !important;
          max-width: 600px !important;
        }
      }
    </style>
  
</head>

<body>
  <div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td class="es-p25t es-p25b" valign="center">
                        <table class="es-header" cellspacing="0" cellpadding="0" align="center">
              <tbody>
                <tr>
                  <td align="center">
                    <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" align="center">
                      <tbody>
                        <tr>
                          <td class="es-p20t es-p20b es-p15r es-p15l" align="center">
                            <table width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="center">
                                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
">
                                      <img src="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo $_smarty_tpl->getValue('settings')->theme;?>
/images/logo.png" width="207" align="center" style="display: block; margin: 0 auto">
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
              <tbody>
                <tr>
                  <td align="center">
                    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                      <tbody>
                        <tr>
                          <td class="es-p10t es-p10b es-p20r es-p20l" align="center">
                            <table width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center">
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td class="es-p10t es-p15b" align="center">
                                            <h1><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_new, ENT_QUOTES, 'UTF-8', true);?>
 <span class="es-number-order">№ <?php echo $_smarty_tpl->getValue('order')->id;?>
</span><br></h1>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="es-p10t es-p0b es-p40r es-p40l" align="center">
                                            <p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_inform_order_first, ENT_QUOTES, 'UTF-8', true);?>
 <strong>№ <?php echo $_smarty_tpl->getValue('order')->id;?>
</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_from, ENT_QUOTES, 'UTF-8', true);?>
 <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('order')->date);?>
:<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('order')->date);?>
.</strong><br> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_inform_order_last, ENT_QUOTES, 'UTF-8', true);?>
</p>
                                            <span class="es-status-color">
                                              <?php if ($_smarty_tpl->getValue('order')->paid == 1) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_paid, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_not_paid, ENT_QUOTES, 'UTF-8', true);
}?>,
                                              <?php if ($_smarty_tpl->getValue('order')->status == 0) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_status_waiting, ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->getValue('order')->status == 1) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_status_in, ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->getValue('order')->status == 2) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_status_completed, ENT_QUOTES, 'UTF-8', true);
}?>
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="es-p15t es-p10b" align="center">
                                            <a href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/turbo/index.php?module=OrderAdmin&id=<?php echo $_smarty_tpl->getValue('order')->id;?>
" class="es-button" target="_blank"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_order_info, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
              <tbody>
                <tr>
                  <td align="center">
                    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                      <tbody>
                        <tr>
                          <td class="es-p30b es-p20r es-p20l" align="left">
                            <table width="100%" cellspacing="0" cellpadding="0" align="left">
                              <tbody>
                                <tr>
                                  <td class="es-p20t es-p10b" align="left">
                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                      <tbody>
                                        <tr>
                                          <td class="es-m-p0r es-m-p20b" width="100%" valign="top" align="center">
                                            <table width="100%" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                <tr>
                                                  <td class="esd-block-text" align="left">
                                                    <h4><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_details_order, ENT_QUOTES, 'UTF-8', true);?>
:</h4>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="es-m-p20b" width="100%" align="left">
                                    <table class="es-table-infobox" cellspacing="1" cellpadding="1" border="0" align="left">
                                      <tbody>
                                        <tr valign="top">
                                          <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_order_number_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                          <td class="es-p5t es-p5b"><span>№ <?php echo $_smarty_tpl->getValue('order')->id;?>
</span></td>
                                        </tr>
                                        <tr valign="top">
                                          <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->order_date, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                          <td class="es-p5t es-p5b"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('order')->date);?>
:<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('time')($_smarty_tpl->getValue('order')->date);?>
</span></td>
                                        </tr>
                                        <tr valign="top">
                                          <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_order_status_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                          <td class="es-p5t es-p5b">
                                            <span>
                                              <?php if ($_smarty_tpl->getValue('order')->status == 0) {?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_status_waiting, ENT_QUOTES, 'UTF-8', true);?>

                                              <?php } elseif ($_smarty_tpl->getValue('order')->status == 1) {?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_status_in, ENT_QUOTES, 'UTF-8', true);?>

                                              <?php } elseif ($_smarty_tpl->getValue('order')->status == 2) {?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_status_completed, ENT_QUOTES, 'UTF-8', true);?>

                                              <?php }?>
                                            </span>
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_payment, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                          <td class="es-p5t es-p5b">
                                            <span>
                                              <?php if ($_smarty_tpl->getValue('order')->paid == 1) {?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_paid, ENT_QUOTES, 'UTF-8', true);?>

                                              <?php } else { ?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_not_paid, ENT_QUOTES, 'UTF-8', true);?>

                                              <?php }?>
                                            </span>
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_full_name, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                          <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                        </tr>
                                        <tr valign="top">
                                          <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_email, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                          <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->email, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                        </tr>
                                        <?php if ($_smarty_tpl->getValue('order')->phone) {?>
                                          <tr valign="top">
                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_phone, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->phone, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                          </tr>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getValue('order')->address) {?>
                                          <tr valign="top">
                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_address, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('order')->address, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                          </tr>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getValue('order')->comment) {?>
                                          <tr valign="top">
                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_comment, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                            <td class="es-p5t es-p5b"><span><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->getValue('order')->comment, ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</span></td>
                                          </tr>
                                        <?php }?>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
              <tbody>
                <tr>
                  <td align="center">
                    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                      <tbody>
                        <tr>
                          <td class="es-p30b es-p20r es-p20l" align="left">
                            <table width="100%" cellspacing="0" cellpadding="0" align="center">
                              <tbody>
                                <tr>
                                  <td class="es-p20t es-p10b" align="left">
                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                      <tbody>
                                        <tr>
                                          <td class="es-m-p0r es-m-p20b" align="left">
                                            <table class="100%" cellspacing="0" cellpadding="0" align="left">
                                              <tbody>
                                                <tr>
                                                  <td class="esd-block-text" align="left">
                                                    <h4><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_order_purchases, ENT_QUOTES, 'UTF-8', true);?>
:</h4>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="left">
                                    <table>
                                      <tbody>
                                        <tr style="border-bottom: 1px solid #dee6ed; background: #dee6ed; height: 2px; width: 100%; margin: 0px;"></tr>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('purchases'), 'purchase');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('purchase')->value) {
$foreach1DoElse = false;
?>
                                          <tr>
                                            <td class="es-p10t es-p10b" align="left">
                                              <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                <tbody>
                                                  <tr>
                                                    <td class="es-m-p0r es-m-p20b" width="178" valign="top" align="center">
                                                      <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                          <tr>
                                                            <td align="center">
                                                              <a href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/products/<?php echo $_smarty_tpl->getValue('purchase')->product->url;?>
">
                                                                <?php if ((null !== ($_smarty_tpl->getValue('purchase')->product->images ?? null))) {?>
                                                                  <?php $_smarty_tpl->assign('image', $_smarty_tpl->getSmarty()->getModifierCallback('first')($_smarty_tpl->getValue('purchase')->product->images), false, NULL);?>
                                                                  <img align="middle" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('resize')($_smarty_tpl->getValue('image')->filename,120,120);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                <?php } else { ?>
                                                                  <img style="width: 100px; height: 100px;" src="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/design/<?php echo $_smarty_tpl->getValue('settings')->theme;?>
/images/no-photo.png" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                <?php }?>
                                                              </a>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table width="380px" cellspacing="0" cellpadding="0" align="right">
                                                <tbody>
                                                  <tr>
                                                    <td width="100%" align="left">
                                                      <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                          <tr>
                                                            <td>
                                                              <a href="<?php echo $_smarty_tpl->getValue('config')->root_url;?>
/products/<?php echo $_smarty_tpl->getValue('purchase')->product->url;?>
" style="font-family: 'Trebuchet MS';font-size: 16px;color: #495057;text-decoration: none;line-height: normal;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a><br>
                                                              <span class="es-p5t"><em><span style="color: rgb(128, 128, 128); font-size: 12px;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant->color, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getValue('purchase')->variant->color && $_smarty_tpl->getValue('purchase')->variant_name) {?>/<?php }?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span></em></span>
                                                              <?php if ($_smarty_tpl->getValue('purchase')->variant->stock == 0) {?>
                                                                <div class="es-p5t" style="color: #495057; font-size: 12px;font-weight: 600"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->product_pre_order, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                              <?php }?>
                                                            </td>
                                                            <td style="text-align: center;" width="60">
                                                              <?php echo $_smarty_tpl->getValue('purchase')->amount;?>
 <?php if ((null !== ($_smarty_tpl->getValue('purchase')->units ?? null))) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('purchase')->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->getValue('settings')->units;
}?>
                                                            </td>
                                                            <td style="text-align: right;" width="100">
                                                              <b><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('purchase')->price,$_smarty_tpl->getValue('currency')->id);?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>
</b>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr style="border-bottom: 1px solid #dee6ed; background: #dee6ed; height: 2px; width: 100%; margin: 0px;"></tr>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="es-p15t" align="left">
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td valign="top" align="center">
                                            <table width="100%" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                <tr>
                                                  <td align="right">
                                                    <table style="width: 500px;" cellspacing="1" cellpadding="1" border="0" align="right">
                                                      <tbody>
                                                        <?php if ($_smarty_tpl->getValue('order')->discount) {?>
                                                          <tr>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_discount, ENT_QUOTES, 'UTF-8', true);?>
:</td>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%; color: #495057;"><?php echo $_smarty_tpl->getValue('order')->discount;?>
&nbsp;%</td>
                                                          </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getValue('order')->coupon_discount > 0) {?>
                                                          <tr>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_coupon, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->getValue('order')->coupon_code;?>
:</td>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%; color: #495057;">&minus;<?php echo $_smarty_tpl->getValue('order')->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>
</td>
                                                          </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getValue('order')->weight > 0) {?>
                                                          <tr>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_weight, ENT_QUOTES, 'UTF-8', true);?>
:</td>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%; color: #495057;"><?php echo $_smarty_tpl->getValue('order')->weight;?>
 <?php echo $_smarty_tpl->getValue('settings')->weight_units;?>
</td>
                                                          </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getValue('delivery') && !$_smarty_tpl->getValue('order')->separate_delivery) {?>
                                                          <tr>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('delivery')->name, ENT_QUOTES, 'UTF-8', true);?>
:</td>
                                                            <td style="text-align: right; font-size: 18px; line-height: 150%; color: #495057;">
                                                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('order')->delivery_price,$_smarty_tpl->getValue('currency')->id);?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>

                                                            </td>
                                                          </tr>
                                                        <?php }?>
                                                        <tr class="es-p5t">
                                                          <td style="text-align: right; font-size: 20px; line-height: 150%;"><strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_total, ENT_QUOTES, 'UTF-8', true);?>
:</strong></td>
                                                          <td style="text-align: right; font-size: 20px; line-height: 150%; color: #dc3545;"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('convert')($_smarty_tpl->getValue('order')->total_price,$_smarty_tpl->getValue('currency')->id);?>
&nbsp;<?php echo $_smarty_tpl->getValue('currency')->sign;?>
</strong></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
                        <table class="es-footer" cellspacing="0" cellpadding="0" align="center">
              <tbody>
                <tr></tr>
                <tr>
                  <td align="center">
                    <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                      <tbody>
                        <tr>
                          <td class="es-m-p0r es-p20t es-p10b es-p10r es-p10l" width="100%" align="center">
                            <table width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="center">
                                    <p>
                                      <span><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->email_details, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html><?php }
}
