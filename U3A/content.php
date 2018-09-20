<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	</header>
	
    <div class="row" style="padding:30px;">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<?php the_content(); ?>
			</div>
		
		<?php else: ?>
		
			<div class="col-xs-12">
                                <center><?php
                                if(get_the_ID() == 1766):
                                    echo do_shortcode('[metaslider id="1805"]');
                                endif;
                                ?></center>
                            <div style="min-height: 30px;"></div>
				<?php the_content(); ?>
			</div>
		
		<?php endif; ?>
	</div>

</article>