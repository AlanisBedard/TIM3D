<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="hero-fond-autre"><?php the_post_thumbnail(full); ?></section>

        <section class="infromations-conferencier">
            <div class="wrapper">
                <div class="contenu__information">
                    <h1><?php the_title(); ?></h1>

                    <?php $option = get_field('cw4_presentation_date'); ?>
                    <?php if( $option == 'Jour 1' ) : ?>
                        <h4><?php the_field('cw4_jour_1', 'options'); ?>, à <?php the_field('cw4_presentation_heure') ?>h00</h4>
                    <?php elseif( $option == 'Jour 2' ) : ?>
                        <h4><?php the_field('cw4_jour_2', 'options'); ?>, à <?php the_field('cw4_presentation_heure') ?>h00</h4>
                    <?php elseif( $option == 'Jour 3' ) : ?>
                        <h4><?php the_field('cw4_jour_3', 'options'); ?>, à <?php the_field('cw4_presentation_heure') ?>h00</h4>
                    <?php elseif( $option == 'Aucun' ) : ?>
                        <h4>Date à venir</h4>
                    <?php endif; ?>
                    <!-- Code adapté à partir de l'exemple donné sur ce site web : https://riptutorial.com/advanced-custom-fields/example/25593/get-field-with-radio-buttons-->



                    <p class="espace__p_presentation"><?php the_field('cw4_presentation_lieu') ?></p>

                    <?php $posts = get_field('cw4_presentation_conferenciers'); ?>
                    <?php if ($posts): ?>
                        <div class="autres__conferences">
                            <h3><?php the_field('cw4_presentation_conferenciers_titre') ?></h3>

                            <?php foreach ($posts as $p): ?>
                                <article>
                                    <?php echo get_the_post_thumbnail($p->ID); ?>
                                    <div>
                                        <h4><?php echo get_the_title($p->ID); ?></h4>
                                        <a href="<?php echo get_permalink($p->ID); ?>">En savoir plus ></a>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="contenu__lien-visuel">
                    <div class="images__conferencier">
                        <?php if (have_rows('cw4_presentation_images')): ?>
                            <?php while (have_rows('cw4_presentation_images')) : the_row(); ?>
                                <?php $image = get_sub_field('image'); ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
