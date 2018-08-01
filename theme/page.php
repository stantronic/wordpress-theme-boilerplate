<?php
/**
 * Created by PhpStorm.
 * User: Stanton
 * Date: 15/04/2018
 * Time: 14:29
 */
get_header();
?>
    <div class="page-layout">
        <div class="row">
            <div class="content col-sm-8">
                <?php
                while (have_posts()) : the_post();

                    ?><h1 class="page-title"> <?php the_title(); ?></h1>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>

                <?php
                    //get_template_part('template-parts/content', 'page');
                endwhile;
                ?>
            </div>
            <div class="col-sm-3 right">
                <a class="page-image" href="https://placeholder.com">
                    <img src="http://via.placeholder.com/300">
                </a>
            </div>
        </div>
    </div>
    </div> <!--End of wrapper-->
<?php get_footer(); ?>