<!DOCTYPE html>
<html <?php language_attribute();?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head()?>
</head>
<body> <?php body_class()?>

<?php wp_body_open()?>

<header class="site-header">
    <div class="container header-inner">
        <div class="site-branding"> 
            <?php  if(if_front_page():)?>
            <h1>
                <a href="<?php echo esc_url(home_url('/'));?>">
                Blog <span>Nova</span>
                </a>
            </h1>
            <?php else: ?>
                <p style="margin:0;">
<a href="<?php echo esc_url(home_url('/'));?>">
    Blog<span>Nova</span>
</a>
                </p>
<?php endif;?>

<p class="site-description">
    Ideas &nbsp; Growth &nbsp; Learn &nbsp;
</p>
        </div>
        <nav clas="main-navigation" aria-label="Primary Menu">
            <?php wp-nav-menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
            ));?>

        </nav>

        <div class="header-search">

    <form role="search"
          method="get"
          action="<?php echo esc_url(home_url('/')); ?>">

        <span class="search-icon">⌕</span>

        <input
            type="search"
            name="s"
            placeholder="Search articles..."
            value="<?php echo get_search_query(); ?>"
        >

    </form>

</div>
    </div>

</header>
</body>
</html>