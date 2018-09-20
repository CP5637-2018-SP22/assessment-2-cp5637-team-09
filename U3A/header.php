<!doctype HTML>
<html>
    <head>
        <title>U3A Townsville</title>
        <meta charset="utf-8">
        <?php wp_head(); ?>
    </head>

    <?php
    if (is_front_page()):
        $u3a_classes = array('u3a-class', 'my-class');
    else:
        $u3a_classes = array('not-u3a-class');
    endif;
    ?>
    <body <?php body_class($u3a_classes); ?> >
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12">
        <nav class="navbar navbar-default" style="width: 100%">
            <div class="container-fluid  bg-dark" style="width: 100%">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">U3A Townsville</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right bg-dark'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
                          
				</div>
			</div>
                    <div style="width: 100%; height: auto; background-color: #384a9c;">
                        <center>
                            <img src="<?php header_image(); ?>" height="" width="50%" alt="" />
                        </center>
                    </div>
