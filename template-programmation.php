<?php
/*
Template Name: Programmation
 */
?>
<?php get_header(); ?>

    <section class="hero">
        <div class="hero-fond-autre">
            <?php the_post_thumbnail(full); ?>
        </div>
    </section>

    <section class="forfaits">
        <div class="wrapper">
            <h2><?php the_title(); ?></h2>

            <div class="espace__range">
            <h3>Jour 1 : <?php the_field('cw4_jour_1', 'options'); ?></h3>
            <div class="forfaits__rangees">
                <?php
                query_posts(array(
                    'post_type' => 'presentations',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'showposts' => -1,
                    'meta_key'		=> 'cw4_presentation_date',
                    'meta_value'	=> 'Jour 1',
                ));
                ?>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <?php the_post_thumbnail(); ?>
                                <div>
                                    <h4><?php the_title(); ?></h4>
                                    <p class="font-weight-normal"><?php echo get_the_excerpt(); ?></p>
                                    <p><?php the_field('cw4_presentation_heure') ?>h00</p>
                                </div>
                            </article>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            </div>

            <div class="espace__range">
            <h3>Jour 2 : <?php the_field('cw4_jour_2', 'options'); ?></h3>
            <div class="forfaits__rangees">
                <?php
                query_posts(array(
                    'post_type' => 'presentations',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'showposts' => -1,
                    'meta_key'		=> 'cw4_presentation_date',
                    'meta_value'	=> 'Jour 2'
                ));
                ?>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <?php the_post_thumbnail(); ?>
                                <div>
                                    <h4><?php the_title(); ?></h4>
                                    <p class="font-weight-normal"><?php echo get_the_excerpt(); ?></p>
                                    <p><?php the_field('cw4_presentation_heure') ?>h00</p>
                                </div>
                            </article>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            </div>

            <div class="espace__range">
            <h3>Jour 3 : <?php the_field('cw4_jour_3', 'options'); ?></h3>
            <div class="forfaits__rangees">
                <?php
                query_posts(array(
                    'post_type' => 'presentations',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'showposts' => -1,
                    'meta_key'		=> 'cw4_presentation_date',
                    'meta_value'	=> 'Jour 3'
                ));
                ?>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <?php the_post_thumbnail(); ?>
                                <div>
                                    <h4><?php the_title(); ?></h4>
                                    <p class="font-weight-normal"><?php echo get_the_excerpt(); ?></p>
                                    <p><?php the_field('cw4_presentation_heure') ?>h00</p>
                                </div>
                            </article>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            </div>
    </section>

<?php get_footer(); ?>