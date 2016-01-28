<?php get_header(); ?>

	<!-- LOAD THE FILES ON PAGES WHICH CONTAIN CONTACT FORMS -->
    <?php
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }

        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    ?>

<section>
    <!-- CONTEÚDO PADRÃO DAS PÁGINAS ESTÁTICAS -->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php else : ?>
    	<p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
