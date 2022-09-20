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


<?php get_footer(); ?>