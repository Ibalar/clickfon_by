<base href="{$config->root_url}/">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

{if $seo->seo_automation == "on"}
    <meta name="description" content="{($meta_description|default:$auto_meta->description)|escape}">
{else}
    <meta name="description" content="{($auto_meta->description|default:$meta_description)|escape}">
{/if}

{if $seo->seo_automation == "on"}
    <meta name="keywords" content="{($meta_keywords|default:$auto_meta->keywords)|escape}">
{else}
    <meta name="keywords" content="{($auto_meta->keywords|default:$meta_keywords)|escape}">
{/if}

<meta name="author" content="">

<!-- Title  -->
{if $seo->seo_automation == "on"}
    <title>{($meta_title|default:$auto_meta->title)|escape}</title>
{else}
    <title>{($auto_meta->title|default:$meta_title)|escape}</title>
{/if}

{if $module=='ProductView'}
    <meta property="og:url" content="{$config->root_url}{if $lang_link}/{$lang_link|replace:'/':''}{/if}{$canonical}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{$product->name|escape}">
    <meta property="og:description" content='{$product->annotation|strip_tags|escape}'>
    <meta property="og:image" content="{if $product->image}{$product->image->filename|resize:330:300}{/if}">
    <link rel="image_src" href="{if $product->image}{$product->image->filename|resize:330:300}{/if}">
    <meta name="twitter:card" content="product">
    <meta name="twitter:url" content="{$config->root_url}{$canonical}">
    <meta name="twitter:site" content="{$settings->site_name|escape}">
    <meta name="twitter:title" content="{$product->name|escape}">
    <meta name="twitter:description" content="{$product->annotation|strip_tags|escape}">
    <meta name="twitter:image" content="{if $product->image}{$product->image->filename|resize:330:300}{/if}">
    <meta name="twitter:label1" content="{$product->variant->price|convert:null:false} {$currency->code|escape}">
    <meta name="twitter:label2" content="{$settings->site_name|escape}">
{elseif $module == 'BlogView' && $post}
    <meta property="og:url" content="{$config->root_url}{if $lang_link}/{$lang_link|replace:'/':''}{/if}{$canonical}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{$post->name|escape}">
    {if $post->image}
        <meta property="og:image" content="{if $post->image}{$post->image|resize_posts:400:300}{/if}">
        <link rel="image_src" href="{if $post->image}{$post->image|resize_posts:400:300}{/if}">
    {else}
        <meta property="og:image" content="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
        <meta name="twitter:image" content="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
    {/if}
    <meta property="og:description" content='{$post->annotation|strip_tags|escape}'>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{$post->name|escape}">
    <meta name="twitter:description" content="{$post->annotation|strip_tags|escape}">
    <meta name="twitter:image" content="{if $post->image}{$post->image|resize_posts:400:300}{/if}">
{elseif $module=='ArticlesView' && $post}
    <meta property="og:url" content="{$config->root_url}{if $lang_link}/{$lang_link|replace:'/':''}{/if}{$canonical}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{$post->name|escape}">
    {if $post->image}
        <meta property="og:image" content="{if $post->image}{$post->image|resize_articles:400:300}{/if}">
        <link rel="image_src" href="{if $post->image}{$post->image|resize_articles:400:300}{/if}">
    {else}
        <meta property="og:image" content="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
        <meta name="twitter:image" content="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
    {/if}
    <meta property="og:description" content='{$post->annotation|strip_tags|escape}'>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{$post->name|escape}">
    <meta name="twitter:description" content="{$post->annotation|strip_tags|escape}">
    <meta name="twitter:image" content="{if $post->image}{$post->image|resize_articles:400:300}{/if}">
{else}
    <meta property="og:title" content="{$settings->site_name|escape}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$config->root_url}">
    <meta property="og:image" content="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
    <meta property="og:site_name" content="{$settings->site_name|escape}">
    {if $seo->seo_automation == "on"}
        <meta property="og:description" content="{($meta_description|default:$auto_meta->description)|escape}">
    {else}
        <meta property="og:description" content="{($auto_meta->description|default:$meta_description)|escape}">
    {/if}
    <link rel="image_src" href="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{$settings->site_name|escape}">
    {if $seo->seo_automation == "on"}
        <meta name="twitter:description" content="{($meta_description|default:$auto_meta->description)|escape}">
    {else}
        <meta name="twitter:description" content="{($auto_meta->description|default:$meta_description)|escape}">
    {/if}
    <meta name="twitter:image" content="{$config->root_url}/design/{$settings->theme|escape}/images/logo.svg">
{/if}

{if $module == 'ProductsView'}
    {if $is_filter && !$page}
        <meta name="robots" content="noindex,nofollow">
    {elseif isset($smarty.get.page) || isset($smarty.get.sort)}
        <meta name="robots" content="noindex,follow">
    {elseif isset($smarty.get.keyword)}
        <meta name="robots" content="noindex,follow">
    {else}
        <meta name="robots" content="index,follow">
    {/if}
{elseif $smarty.get.module == "RegisterView" || $smarty.get.module == "LoginView" || $smarty.get.module == "UserView" || $smarty.get.module == "CartView"}
    <meta name="robots" content="noindex,follow">
{elseif $smarty.get.module == "OrderView"}
    <meta name="robots" content="noindex,nofollow">
{elseif $smarty.get.module == "BlogView" && isset($smarty.get.sort) || isset($smarty.get.keyword)}
    <meta name="robots" content="noindex,follow">
{elseif $smarty.get.module == "ArticlesView" && isset($smarty.get.sort) || isset($smarty.get.keyword) || isset($smarty.get.author)}
    <meta name="robots" content="noindex,follow">
{else}
    <meta name="robots" content="index,follow">
{/if}

<meta name="google-site-verification" content="09Xq94s4qspoJAVDuIWC2PiR3Bj53329zGAEkRJhXyU" />

{* Canonical *}
{if $canonical}
    <link rel="canonical" href="{$config->root_url}{if $lang_link}/{$lang_link|replace:'/':''}{/if}{$canonical}">
{/if}

{* Favicon *}
<link rel="shortcut icon" href="design/{$settings->theme|escape}/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="design/{$settings->theme|escape}/images/apple-touch-icon.png" />
<link rel="manifest" href="design/{$settings->theme|escape}/images/site.webmanifest">

<!-- Yandex.Metrika counter -->
{literal}<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105984402', 'ym');

    ym(105984402, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
</script>
    <noscript><div><img src="https://mc.yandex.ru/watch/105984402" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
{/literal}
<!-- /Yandex.Metrika counter -->

<!-- Google Tag Manager -->
{literal}
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-58QFM7M2');</script>
{/literal}

<!-- End Google Tag Manager -->
