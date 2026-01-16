<?php
/* Smarty version 5.4.2, created on 2025-11-23 15:40:18
  from 'file:/home/clickfon/public_html/turbo/design/html/admintooltip.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692300b28ff891_07841522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9196b25aea304c6dc875bc52f0fca381408df5' => 
    array (
      0 => '/home/clickfon/public_html/turbo/design/html/admintooltip.tpl',
      1 => 1732737938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692300b28ff891_07841522 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/clickfon/public_html/turbo/design/html';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('css')) {
throw new \Smarty\Exception('block tag \'css\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"admintooltip",'include'=>array("turbo/design/js/admintooltip/css/admintooltip.css")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('css')->handle(array('id'=>"admintooltip",'include'=>array("turbo/design/js/admintooltip/css/admintooltip.css")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('stylesheet')->handle(array('minify'=>true), $_smarty_tpl);?>


<?php echo '<script'; ?>
>
	$(function() {
		$("<a href='turbo/' class='admin-bookmark'><span class='settings-toggle-option'><i class='custom-icon custom-icon-palette-settings'></i></span></a>").appendTo('body');
	});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->getValue('settings')->admintooltip == "on") {?>
	
		<?php echo '<script'; ?>
>
			$(function() {
				tooltip = $("<div class='admin-tooltip'><div class='admin-tooltip-header'></div><div class='admin-tooltip-body'></div><div class='admin-tooltip-footer'></div></div>").appendTo($('body'));
				$('.admin-tooltip').on('mouseleave', function(){tooltipcanclose=true;setTimeout("closeTooltip();", 300);});
				$('.admin-tooltip').on('mouseover', function(){tooltipcanclose=false;});

				$('[data-page]').on('mouseover', showTooltip);
				$('[data-category]').on('mouseover', showTooltip);
				$('[data-brand]').on('mouseover', showTooltip);
				$('[data-product]').on('mouseover', showTooltip);
				$('[data-post]').on('mouseover', showTooltip);
				$('[data-articles-category]').on('mouseover', showTooltip);
				$('[data-article]').on('mouseover', showTooltip);
				$('[data-feature]').on('mouseover', showTooltip);
			});

			function showTooltip() {
				tooltipcanclose = false;
				tooltip.show();
				$(this).on('mouseleave', function(){tooltipcanclose=true;setTimeout("closeTooltip();", 500);});

				flip = !($(this).offset().left + tooltip.width() + 25 < $('body').width());

				tooltip.css('top', $(this).height() + 5 + $(this).offset().top + 'px');
				tooltip.css('left', ($(this).offset().left + $(this).outerWidth() * 0.5 - (flip ? tooltip.width() - 40 : 0) + 0) + 'px');
				tooltip.find('.admin-tooltip-header').addClass(flip ? 'admin-tooltip-header-flip' : 'admin-tooltip-header-direct').removeClass(flip ? 'admin-tooltip-header-direct' : 'admin-tooltip-header-flip');

				from = encodeURIComponent(window.location);
				tooltipContent = '';

				var lang = '&lang_id=<?php echo $_smarty_tpl->getValue('language')->id;?>
';
				if (typeof lang_id != 'undefined') {
					lang = '&lang_id=' + lang_id;
				}

				if (id = $(this).attr('data-page')) {
					tooltipContent = "<a href='turbo/index.php?module=PageAdmin&id="+id+"&return="+from+lang+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
					tooltipContent += "<a href='turbo/index.php?module=PageAdmin&return="+from+lang+"'class='admin-tooltip-add'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->admintooltip_add_page, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-category')) {
					tooltipContent = "<a href='turbo/index.php?module=CategoryAdmin&id="+id+"&return="+from+lang+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
					tooltipContent += "<a href='turbo/index.php?module=ProductAdmin&category_id="+id+"&return="+from+lang+"'class='admin-tooltip-add'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->admintooltip_add_product, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-brand')) {
					tooltipContent = "<a href='turbo/index.php?module=BrandAdmin&id="+id+"&return="+from+lang+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-product')) {
					tooltipContent = "<a href='turbo/index.php?module=ProductAdmin&id="+id+"&return="+from+lang+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-articles-category')) {
					tooltipContent = "<a href='turbo/index.php?module=ArticlesCategoryAdmin&id="+id+"&return="+from+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
					tooltipContent += "<a href='turbo/index.php?module=ArticleAdmin&return="+from+"' class='admin-tooltip-add'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->admintooltip_add_article, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-article')) {
					tooltipContent = "<a href='turbo/index.php?module=ArticleAdmin&id="+id+"&return="+from+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-post')) {
					tooltipContent = "<a href='turbo/index.php?module=PostAdmin&id="+id+"&return="+from+lang+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				if (id = $(this).attr('data-feature')) {
					tooltipContent = "<a href='turbo/index.php?module=FeatureAdmin&id="+id+"&return="+from+lang+"'class='admin-tooltip-edit'><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('btr')->global_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>";
				}

				$('.admin-tooltip-body').html(tooltipContent);
			}

			function closeTooltip() {
				if (tooltipcanclose) {
					tooltipcanclose = false;
					tooltip.hide();
				}
			}

			function ShowTooltip(i, content) {
				tooltip = document.getElementById('admin-tooltip');
				document.getElementById('admin-tooltip-body').innerHTML = content;
				tooltip.style.display = 'block';
				var xleft = 0;
				var xtop = 0;
				o = i;

				do {
					xleft += o.offsetLeft;
					xtop += o.offsetTop;

				} while (o = o.offsetParent);

				xwidth = i.offsetWidth ? i.offsetWidth : i.style.pixelWidth;
				xheight = i.offsetHeight ? i.offsetHeight : i.style.pixelHeight;

				bwidth = tooltip.offsetWidth ? tooltip.offsetWidth : tooltip.style.pixelWidth;

				w = window;

				xbody = document.compatMode == 'CSS1Compat' ? w.document.documentElement : w.document.body;
				dwidth = xbody.clientWidth ? xbody.clientWidth : w.innerWidth;
				bwidth = tooltip.offsetWidth ? tooltip.offsetWidth : tooltip.style.pixelWidth;

				flip = !(25 + xleft + bwidth < dwidth);

				tooltip.style.top = xheight - 3 + xtop + 'px';
				tooltip.style.left = (xleft - (flip ? bwidth : 0) + 25) + 'px';

				document.getElementById('admin-tooltip-header').className = flip ? 'admin-tooltip-header-flip' : 'admin-tooltip-header-direct';

				return false;
			}
		<?php echo '</script'; ?>
>
	
<?php }
}
}
