<?php get_header(); ?>

<div class="container">
<div class="row">
        <div class="col-sm-6">
    <h1><?php the_title(); ?></h1>

     <?php get_template_part('include/section','content');?>
</div> 

     
        <div class="col-sm-6">
        <h1><?php the_title(); ?></h1>

        <?php get_template_part('include/section','content');?>     
        </div> </div>
</div>

<?php get_footer(); ?>