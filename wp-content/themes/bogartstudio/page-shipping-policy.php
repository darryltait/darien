<?php get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>

<?php endwhile; ?>

<main>
<div class="policy-container">
    <div class="policy">
        <p class="policy-title"><?php the_title(); ?></p>
        <p> <?php the_content(); ?></p>
    </div>

</div>
</main>


<?php get_footer(); ?>

