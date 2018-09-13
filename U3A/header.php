<!doctype HTML>
<html>
    <head>
        <title>U3A townsville</title>
        <meta charset="utf-8">
        <?php wp_head();?>
    </head>
    
    <?php 
        if(is_front_page()):
            $u3a_classes= array('u3a-class','my-class');
        else:
            $non_home_class = array('not-u3a-class');
        endif;
    ?>
    <body <?php body_class(array('u3a-class','my-class'));?>>
        
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
           