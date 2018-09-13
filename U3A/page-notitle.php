
<?php get_header();
/*
    Template Name: no title page
*/
?>

    <?php 
    if(have_posts()):
        while (have_posts()):
            the_post();?>
        <p><?php the_content();?></p>
        <hr>
        <?php endwhile;
    endif;
?>

    
<?php get_footer();?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

