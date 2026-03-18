<?php

get_header();

if(have_posts()):
    while(have_posts()):
        the_post();
?>
    <h2><?php the_title();  // affichage du titre ?></h2>
    <?php the_excerpt(); ?>
    <div class="legende_article">
    <p>Publié le <?php the_date(); ?> par <?php the_author(); ?> dans la catégorie :<?php the_category($separator =', '); ?></p>
    </div>
    <?php the_post_thumbnail(); ?>
    <article class="montheme_article">
        <article>
            <?php the_content(); //contenu du post ?>
        </article>
<?php
    endwhile;
endif;
get_footer();

