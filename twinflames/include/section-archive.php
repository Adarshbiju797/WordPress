
<?php
if ( have_posts() ) 
    {
	// Load posts loop.
	while ( have_posts() ) 
    {
		the_post();
    }
    }
?>
<div class="card">
    <div class="card-body">
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?> ">READ MORE </a>
    </div>
</div>
