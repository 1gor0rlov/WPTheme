<?php

get_header(); //HEADER

if(have_posts()) : /* LOOP (loop kroz postove) */
    while (have_posts()) : the_post();
?>

<!-- THE POST -->
<article class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="post-info"><?php the_time('d/m/Y'); ?> | by <?php the_author(); ?></p>
<?php the_content(); ?>
<p class="post-cat">Categories: 
<?php
    $categories = get_the_category();
    $comma = ", ";
    $output = '';
    if($categories){
        foreach ($categories as $category){
            $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $comma;
        }
        echo trim ($output, $comma);
    }
?>
</p>
</article>
<!-- ./THE POST -->

<?php       
    endwhile;
else :
    echo '<p>No content found</p>';
    
endif; /* ./LOOP */

get_footer(); //FOOTER

?>