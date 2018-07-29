<?php
/*
* Template Name: Right Sidebar
*/
$handler = new ACFBCore\ACF_buddy();
get_header(); ?>
     <?php 
    
        $render = ['banner'];
        $section = $handler->prepare_sections($render);
        $handler->render_fields($section);
    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-8 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                    
                        <?php
                  
                            $sections = $handler->prepare_sections();
                                                        
                             $handler->render_fields($sections, ['banner']);

                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4 wp-bp-sidebar-width">
                <?php get_sidebar(); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
