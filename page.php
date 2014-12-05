<?php get_header(); ?>

<div id="main-container">
    <section id="content-container">
    
    <?php 
        // Start the loop
        while ( have_posts() ) : the_post(); 
        
        // Get the correct content type
        get_template_part( 'content', 'single' );

        // Loop ends
        endwhile; 
    ?>
    
    </section> <!-- #main-container ends -->
    

</div>

<?php get_footer(); ?>