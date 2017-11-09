<?php

get_header(); //HEADER

if(have_posts()) : /* LOOP (loop kroz postove) */
    while (have_posts()) : the_post();
?>



<!-- THE POST -->
<article class="post">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</article>
<!-- ./THE POST -->

<?php       
    endwhile;
else :
    echo '<p>No content found</p>';
    
endif; /* ./LOOP */

get_footer(); //FOOTER

?>