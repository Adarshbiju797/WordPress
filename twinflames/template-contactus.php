<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<div class="container">

    <h1><?php the_title(); ?></h1>

    <div class="row">
        <div class="col-sm-6">
            
        </div>

        <div class="col-sm-6" >
        <?php get_template_part('include/section','content'); ?> 
        </div>
    </div>  
    
    
     
</div>

<?php get_footer(); ?>