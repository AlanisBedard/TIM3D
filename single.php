<?php get_header(); ?>


    <section class="hero">
        <div class="hero-fond-autre">
            <?php the_post_thumbnail(full); ?>
        </div>
    </section>


    <section class="forfaits">
        <div class="wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
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