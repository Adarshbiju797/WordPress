
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
<p><?php   echo get_the_date('d/m/y h:i:s'); ?></p>

<?php the_content(); ?>

Posted by
<?php  the_author(); ?>

<?php  comments_template(); ?>

