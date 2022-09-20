<?php get_header(); ?>

<?php $conferenciers_IDs = array(get_the_ID()); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="hero-fond-autre"><img src="<?php the_field('cw4_conferencier_image_hero') ?>"></section>

        <section class="infromations-conferencier">
            <div class="wrapper">
                <div class="contenu__information">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>

                    <?php $posts = get_field('cw4_conferencier_presentations'); ?>
                    <?php $presentations_IDs = array(); ?>
                    <?php if ($posts): ?>
                        <div class="autres__conferences">
                            <h3><?php the_field('cw4_conferencier_presentations_titre') ?></h3>

                            <?php foreach ($posts as $p): ?>
                                <?php array_push($presentations_IDs, $p->ID); ?>
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
                    <div class="socialmedia contenu__lien-visuelsocialmedia">
                        <?php if (have_rows('cw4_sociaux_liens')): ?>
                            <ul>
                                <?php while (have_rows('cw4_sociaux_liens')): the_row(); ?>

                                    <?php if (get_sub_field('nom_social') === 'LinkedIn') : ?>
                                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a></li>
                                    <?php elseif (get_sub_field('nom_social') === 'Instagram') : ?>
                                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                    <?php elseif (get_sub_field('nom_social') === 'Facebook') : ?>
                                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a></li>
                                    <?php elseif (get_sub_field('nom_social') === 'Twitter') : ?>
                                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                    <?php elseif (get_sub_field('nom_social') === 'Dribbble') : ?>
                                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <i class="fab fa-dribbble"></i>
                                            </a></li>
                                    <?php elseif (get_sub_field('nom_social') === 'Youtube') : ?>
                                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="images__conferencier">
                        <?php the_post_thumbnail(full); ?>
                        <?php if (have_rows('cw4_conferencier_images')): ?>
                            <?php while (have_rows('cw4_conferencier_images')) : the_row(); ?>
                                <?php $image = get_sub_field('image'); ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php
        query_posts(array(
            'post_type' => 'presentations',
            'orderby' => 'rand',
            'post_status' => 'publish',
        ));
        ?>

        <?php if (have_posts()) : ?>
            <section class="recommendations">
                <div class="wrapper">
                    <h2><?php the_field('cw4_conferencier_autres_presentations_titre') ?></h2>
                </div>

                <div class="swiper" data-component="Carousel">
                    <div class="swiper-wrapper">

                        <?php while (have_posts()) : the_post(); ?>
                            <?php $presentations_ID = get_the_ID(); ?>
                            <?php if (!in_array($presentations_ID, $presentations_IDs)) : ?>
                                <div class="swiper-slide">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(full); ?>
                                        <h3 class="grand__titre espace-titre"><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>


        <?php
        query_posts(array(
            'post_type' => 'conferenciers',
            'orderby' => 'rand',
            'post_status' => 'publish'
        ));
        ?>

        <?php if (have_posts()) : ?>
            <section class="recommendations recommendations-conferenciers">
                <div class="wrapper">
                    <h2><?php the_field('cw4_conferencier_autres_titre') ?></h2>
                </div>

                <div class="swiper mySwiper" data-component="Carousel" data-carousel="view-two">
                    <div class="swiper-wrapper">

                        <?php while (have_posts()) : the_post(); ?>
                            <?php $conferenciers_ID = get_the_ID(); ?>
                            <?php if (!in_array($conferenciers_ID, $conferenciers_IDs)) : ?>
                                <div class="swiper-slide">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(full); ?>
                                        <div class="conferencier__detail_deplace conferencier__description conferencier__6">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_field('cw4_evenement_conferencier_profession') ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>

                    <div class="swiper-pagination">
                        <span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet"></span>
                    </div>

                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
