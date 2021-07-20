<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bonprix
 */

get_header();

?>

	<main id="primary" class="site-main">

    <section class="container pb-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <a href="#"> <img src="<?php echo get_template_directory_uri();?>/images/slide-1.jpg" class="d-block w-100" alt="..."></a>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slide-2.jpg" class="d-block w-100" alt="..."></a>
          </div>
       
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>



    <section class="container">
        <h3 class="text-center pt-5" style="font-size: 28px; font-weight: bold;">Preferate</h3>
        <div class="pt-5 pb-5">
            <?php echo do_shortcode('[products popularity columns=5 limit=5]'); ?>
        </div>
    </section> 
    
<section class="categories pb-5">
    <div class="container">
            <h3 class="text-center" style="font-size: 28px; font-weight: bold;">Categorii</h3>
        
        <div class="row pt-5">
            <div class="categories_col col-md-4 col-sm-12 mb-3">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative overflow-hidden">
                    <img src="<?php echo get_template_directory_uri();?>/images/categorie-1.png" alt="  " loading="lazy">
                    <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-section text-gray">Moda femei</h2>
                </a>    
            </div>
            <div class="categories_col col-md-4 col-sm-12 mb-3">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative overflow-hidden">
                    <img src="<?php echo get_template_directory_uri();?>/images/categorie-2.jpg" alt="  " loading="lazy">
                    <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-section text-gray">Moda barbati</h2>
                </a>    
            </div>
            <div class="categories_col col-md-4 col-sm-12 mb-3">
                <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative overflow-hidden">
                    <img src="<?php echo get_template_directory_uri();?>/images/categorie-2a.png" alt="  " loading="lazy">
                    <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-section text-gray">Moda copii</h2>
                </a>    
            </div>
        </div>
    </div>
</section>
<!--class="position-absolute top-0 bottom-0 end-0 start-0"     am folosit-o la img de la categories-->

<section class="container">
    <h3 class="text-center pt-5" style="font-size: 28px; font-weight: bold;">Oferte speciale</h3>
    <div class="pt-5 pb-5">
        <?php echo do_shortcode('[sale_products columns=4 limit=4]'); ?>
    </div>
</section> 



	</main><!-- #main -->

<?php

get_footer();
