
<?php 
/*
Template Name: Страница Проект
Template Post Type: page
*/

get_header(); ?>

<section class="page_section">
    <div class="_container">
        <h1 class="page_h1"><?php the_title()?></h1>
        <?php
            if ( function_exists( 'yoast_breadcrumb' ) ) :
                yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
            endif;
        ?>

        <div class="page_text_blk">
            <div class="text_blk">
                <div id="textBlkSh" class="mainText">
                    <?php the_content(); ?>
                </div>

                <div class="hide_show_panel">
                    <a id="showTxtBtn" class="btn" href="#">Читать далее</a>
                </div>
            </div>

            

            <div class="cta">
                <?php get_template_part('template-parts/text-cta-blk');?>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>