<?php get_header(); ?>

<section class="hero">
    <div class="hero-fond">
        <?php the_post_thumbnail(full); ?>
    </div>
    <div class="wrapper">

        <div class="hero__informations">

            <a class="lien-logo" href="<?php bloginfo('url'); ?>">
                <img src="<?php the_field('logo-grand', 'option'); ?>" alt="Logo du site">
                <h1><?php the_title(); ?></h1>
            </a>

            <h3><?php the_field('cw4_evenement-date'); ?></h3>

        </div>

        <?php the_content(); ?>

        <a class="button button-big" href="#"><?php the_field('cw4_evenement_achat'); ?></a>

    </div>

</section>


<section class="conferencier">
    <div class="background-color-plus"></div>

    <div class="wrapper">

        <h2><?php the_field('cw4_evenement_conferencier_titre'); ?></h2>
        <h2 class="conferencier__titre-mobile">Nos invités du mois</h2>

        <div class="liste__conferenciers">
            <?php
            query_posts(array(
                'post_type' => 'Conferenciers',
                'post_status' => 'publish',
                'showposts' => -1
            ));
            ?>

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="overlay overlaycolor_6">
                        <p>En savoir plus ></p>
                    </div>
                </a>

                <div class="conferencier__description conferencier__6">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_field('cw4_evenement_conferencier_profession') ?></p>
                </div>
            </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>

    </div>
</section>

<?php if (have_rows('cw4_evenement_partenaire')): ?>
<section class="partenaires">
    <div class="wrapper">

        <h2><?php the_field('cw4_evenement_partenaire_titre'); ?></h2>


        <div class="partenaires__shading">
            <div class="swiper" data-component="Carousel" data-carousel="view-all">
                <div class="swiper-wrapper grid-container">

                    <?php while (have_rows('cw4_evenement_partenaire')) : the_row(); ?>
                        <div class="swiper-slide">
                            <a href="<?php the_sub_field('url'); ?>" target="_blank"><img src="<?php the_sub_field('logo'); ?>" alt=""></a>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>



<?php if (have_rows('cw4_evenement_forfait')): ?>
<section class="forfaits">
    <div class="wrapper">

        <h2><?php the_field('cw4_evenement_forfait_titre'); ?></h2>

            <div class="forfaits__rangees">

                <?php while (have_rows('cw4_evenement_forfait')) : the_row(); ?>
                <article>
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <div>
                        <h4><?php the_sub_field('titre'); ?></h4>
                        <p><?php the_sub_field('texte'); ?></p>
                    </div>
                </article>
                <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
