<?php get_header(); ?>


    <section class="hero">
        <div class="hero-fond">
            <?php the_post_thumbnail(full); ?>
        </div>
        <div class="wrapper">
            <div class="hero__informations">
                <a class="lien-logo" href="<?php bloginfo('url'); ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
            </div>
            <?php the_content(); ?>
        </div>
    </section>

    <div class="liste__conferenciers">
        <div class="wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <article>
                            <?php the_post_thumbnail(); ?>
                            <div>
                                <h4><?php the_title(); ?></h4>
                                <p class="font-weight-normal"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </article>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>


<?php get_footer(); ?>