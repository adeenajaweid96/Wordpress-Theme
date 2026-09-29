<?php
get_header();
?>

<main class="site-main">
    <div class="container">

        <div class="content-layout">

            <!-- LEFT SIDE -->
            <div class="main-content">

                <!-- Featured post -->
                <?php
                $featured = new WP_Query(array(
                    'posts_per_page' => 1,
                ));

                if ($featured->have_posts()) :
                    while ($featured->have_posts()) :
                        $featured->the_post();
                ?>

                    <article class="hero">
                        <div class="hero-content">

                            <span class="badge">Featured</span>

                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p>
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?>
                            </p>

                            <div class="post-meta">
                                <?php blognova_post_date(); ?>
                                &nbsp; • &nbsp;
                                By <?php the_author(); ?>
                            </div>

                            <a class="read-more" href="<?php the_permalink(); ?>">
                                Read More →
                            </a>

                        </div>
                    </article>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>


                <!-- Latest Posts -->
                <div class="section-heading">
                    <h2>Latest Posts</h2>
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
                        View All →
                    </a>
                </div>


                <div class="posts-grid">

                    <?php
                    $latest_posts = new WP_Query(array(
                        'posts_per_page' => 4,
                        'offset'         => 1,
                    ));

                    if ($latest_posts->have_posts()) :

                        while ($latest_posts->have_posts()) :
                            $latest_posts->the_post();
                    ?>

                        <article class="post-card">

                            <?php if (has_post_thumbnail()) : ?>

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', array(
                                        'class' => 'post-thumbnail'
                                    )); ?>
                                </a>

                            <?php endif; ?>


                            <div class="post-card-content">

                                <?php
                                $categories = get_the_category();

                                if (!empty($categories)) :
                                ?>
                                    <span class="badge">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                <?php endif; ?>


                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>


                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>


                                <div class="post-meta">
                                    <?php blognova_post_date(); ?>
                                    &nbsp; • &nbsp;
                                    By <?php the_author(); ?>
                                </div>

                            </div>

                        </article>

                    <?php
                        endwhile;

                    else :
                        echo '<p>No posts found.</p>';

                    endif;

                    wp_reset_postdata();
                    ?>

                </div>

            </div>


            <!-- RIGHT SIDEBAR -->
            <aside class="sidebar">

                <!-- About -->
                <div class="sidebar-widget about-box">

                    <h2>About Me</h2>

                    <img
                        class="about-avatar"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80"
                        alt="Profile photo"
                    >

                    <p>
                        Hi! I'm a passionate learner, writer and tech enthusiast.
                        I share ideas, tips and resources on lifestyle,
                        technology, productivity and more.
                    </p>

                </div>


                <!-- Recent Posts -->
                <div class="sidebar-widget">

                    <h2>Recent Posts</h2>

                    <ul class="widget-list">

                        <?php
                        $recent = new WP_Query(array(
                            'posts_per_page' => 4
                        ));

                        while ($recent->have_posts()) :
                            $recent->the_post();
                        ?>

                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>

                    </ul>

                </div>


                <!-- Categories -->
                <div class="sidebar-widget">

                    <h2>Categories</h2>

                    <ul class="widget-list">
                        <?php
                        wp_list_categories(array(
                            'title_li' => '',
                            'show_count' => true,
                        ));
                        ?>
                    </ul>

                </div>


                <!-- Tags -->
                <div class="sidebar-widget">

                    <h2>Tags</h2>

                    <div class="tag-cloud">
                        <?php
                        wp_tag_cloud(array(
                            'smallest' => 10,
                            'largest'  => 12,
                            'unit'     => 'px',
                        ));
                        ?>
                    </div>

                </div>

            </aside>

        </div>

    </div>
</main>

<?php
get_footer();
?>
