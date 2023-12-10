<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/camp_favicon.svg')); ?>" type="image/svg+xml">
    <script>
  (function(d) {
    var config = {
      kitId: 'qpa8omz',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="wrapper">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="site-logo" src="<?php echo esc_url(get_theme_file_uri('/images/kitano_logo.svg')); ?>" alt="<?php bloginfo('name'); ?>">
                    <!-- <?php bloginfo('name'); ?> -->
                </a>
            </h1>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        </div>
    </header>
    <nav class="primary-navigation wrapper">
        <div class="btn-menu">
            <span class="btn-top"></span>
            <span class="btn-middle"></span>
            <span class="btn-bottom"></span>
        </div>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'container' => '',
                    'menu_class' => 'menu-wrapper',
                )
            );
        ?>
    </nav>
