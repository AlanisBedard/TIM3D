<footer>
    <div class="wrapper">

        <a href="<?php bloginfo('url'); ?>" class="footer__logo-image"><img src="<?php the_field('logo-petit', 'option'); ?>" alt="Logo du site"></a>

        <nav class="header__nav">
            <ul>
                <?php wp_nav_menu(array(
                        'theme_location' => 'menu_principal')
                ); ?>
            </ul>
        </nav>

        <div class="bas__page">
            <p><?php the_field('cw4_crédits', 'options'); ?></p>

            <?php if ( have_rows('cw4_sociaux_liens', 'option') ): ?>
            <ul>
                <?php while( have_rows('cw4_sociaux_liens', 'option') ): the_row(); ?>

                    <?php if ( get_sub_field('nom_social') === 'LinkedIn' ) : ?>
                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a></li>
                    <?php elseif ( get_sub_field('nom_social') === 'Instagram') : ?>
                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a></li>
                    <?php elseif ( get_sub_field('nom_social') === 'Facebook') : ?>
                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a></li>
                    <?php elseif ( get_sub_field('nom_social') === 'Twitter') : ?>
                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a></li>
                    <?php elseif ( get_sub_field('nom_social') === 'Dribbble') : ?>
                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a></li>
                    <?php elseif ( get_sub_field('nom_social') === 'Youtube') : ?>
                        <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a></li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/script.js" defer></script>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/styles.css">

<div class="curseur" data-component="Curseur"><img src="<?php bloginfo('template_url'); ?>/assets/curseur.png" alt="curseur"></div>

</body>

</html>