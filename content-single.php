<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1 class="entry-title">
            <?php the_title(); ?>
        </h1>
    <?php if ( is_single() ) : ?>
        <p class="entry-meta">
            Posted on <time datetime="<?php the_time('F j, Y'); ?>"><?php the_time( 'F j, Y' ); ?></time> 
            by <?php the_author_link(); ?> 
        <?php 
            // Are the comments open?
            if ( comments_open() ) : ?>
            &bull; <?php comments_popup_link( 'No comments', '1 comment', '% comments' ); ?>
        <?php endif; ?>
            <br />Filed in <?php the_category( ', ' ); ?>
            <?php the_tags( ' and tagged with ', ', ', '' ); ?>
        </p>
    <?php endif; ?>
    </header>
    <?php
        // The content
        the_content();
        
        // If singular and comments are open
        if ( comments_open() )
        comments_template( '', true );
    ?>
</article>