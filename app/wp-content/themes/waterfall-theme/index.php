<?php if (have_posts()) { while(have_posts()) { the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h3><?php the_date(); ?></h3>
    <?php the_content(); ?>
<?php } } ?>