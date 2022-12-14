<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="<?php bloginfo("charset"); ?> | ">
<?php
  if(is_front_page()){ ?>
    <meta name="description" content="カーリースナビは、月々定額カーリース、車のサブスクリプションについて情報をまとめたブログです。これからカーリースをお考えの方はカーリースナビの記事で情報をご覧ください。">
    <?php }else{ ?>
    <meta name="description" content="<?php the_title(); ?> | カーリースナビ | 月々定額カーリース、車のサブスクリプション">
    <?php } ?>
  <meta name="keywords" content="カーリース,車のサブスク,車のサブスクリプション,車リース,法人車のリース,個人事業主カーリース,法人・個人事業主,法人車のサブスクリプション">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/icon.svg">
  <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/icona.svg" />
  <meta property="og:site_name" content="カーリースナビは、月々定額カーリース、車のサブスクリプションについて情報をまとめたブログです。これからカーリースをお考えの方はカーリースナビの記事で情報をご覧ください。" />
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/img_ogp.jpg" />
  <meta property="og:description" content="カーリースナビは、月々定額カーリース、車のサブスクリプションについて情報をまとめたブログです。これからカーリースをお考えの方はカーリースナビの記事で情報をご覧ください。" />
  <meta itemprop="name" content="<?php the_title(); ?>">
  <meta itemprop="description" content="カーリースナビ | 月々定額カーリース、車のサブスクリプションについて情報をまとめたブログです。">
  <meta itemprop="image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/img_ogp01.jpg">




<script>
  (function(d) {
    var config = {
      kitId: 'jco3hgw',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F7KWDMC2YY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F7KWDMC2YY');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5608029657915559"
     crossorigin="anonymous"></script>
</head>



<?php
  if ( is_front_page() ) {
    $my_body_class = 'l-top';
  } else if ( is_single() ) {
    $my_body_class = 'l-local';
  } else if ( is_page() ) {
    $my_body_class = 'l-local';
  } else if ( is_archive() ) {
    $my_body_class = 'l-list';
  }else if ( is_404() ) {
    $my_body_class = 'l-top';
  }else if ( is_search() ) {
    $my_body_class = 'l-list';
  }

?>
<body id="jp" <?php echo ( $my_body_class ) ? ' class="' . $my_body_class . '"' : ''; ?>>


<header>
  <div class="l-header">
    <h1 class="logo">
      <a href="<?php echo esc_url (home_url()); ?>">
        <img src="<?php echo get_template_directory_uri()?>/img/common/logo.svg" alt="sikilog">
        <span>カーリースナビ</span>
      </a>
    </h1>

    <!-- <div class="l-header-search">
      <img src="<?php echo get_template_directory_uri()?>/img/common/search.svg" alt="検索" width="20" > -->
      <?php get_search_form(); ?>
    <!-- </div>  -->
    
    <!-- <div class="gnav-botton">
      <div class="gnav-botton-inner gnav-btn">
         <span class="gnav-line"></span>
         <span class="gnav-line"></span>
         <span class="gnav-line"></span>
      </div>
    </div> -->
  
  </div>

  <!-- /.l-header -->
</header>




