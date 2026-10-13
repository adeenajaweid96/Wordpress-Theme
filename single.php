
<?php get_header(); ?>

<main class="single-post-container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
    ?>

     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h1 class="single-post-title">
                <?php the_title(); ?>
            </h1>

            <p class="single-post-meta">
                Published on <?php echo esc_html( get_the_date() ); ?>
            </p>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="single-post-image">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

            <div class="single-post-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php
        endwhile;
    else :
        echo '<p>Sorry, no post was found.</p>';
    endif;
    ?>
</main>
  
<?php get_footer(); ?>