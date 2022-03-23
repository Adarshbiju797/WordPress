</div><!-- #main -->

<footer id="colophon" class="site-footer" style=' background-color: grey;
    
    font: Times New Roman, Times, serif;
    letter-spacing: 0.2em;
    margin: 0;
    padding: 15px 10px 15px 60px;
    text-align: left'>

     <?php get_sidebar( 'footer' ); ?> 
    
    <div class="site-info"  >
    
        <?php do_action( 'twentyfourteen_credits' ); ?>
        <?php
        if ( function_exists( 'the_privacy_policy_link' ) ) {
            the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
        }
        ?>
        
        <a href="" class="imprint"  >
            <?php
            /* translators: %s: twinflame */
            printf( __( 'Proudly powered by %s', 'twinflame' ), 'twinflame' );
            ?>
        </a>
        
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>