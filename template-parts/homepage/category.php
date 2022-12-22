<!--shop category start-->
<?php if ( true == get_theme_mod( 'switch_setting_category', 'on' ) ): ?>
<section class="space-3">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"> <?php echo get_theme_mod( 'text_setting_category' ); ?></h2>
                    </div>
                </div>
                <div class="col-md-12">
<?php
$simpleshop_nc = get_theme_mod( "text_setting_categories_columns", 3 );
echo do_shortcode( "[product_categories columns={$simpleshop_nc}]" );
?>
                </div>
                <div class="col-md-12">
                    <ul class="products columns-3">
                        <li class="product-category product first  ">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc1.jpg" alt="Clothing">
                                <h2 class="woocommerce-loop-category__title">
                                    Clothing
                                    <!--<mark class="count">(14)</mark>-->
                                </h2>
                            </a>
                        </li>
                        <li class="product-category product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc2.jpg" alt="Decor">
                                <h2 class="woocommerce-loop-category__title">
                                    Decor
                                    <!--<mark class="count">(1)</mark>-->
                                </h2>
                            </a>
                        </li>
                        <li class="product-category product last">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc3.jpg" alt="Music">
                                <h2 class="woocommerce-loop-category__title">
                                    Music
                                    <!--<mark class="count">(2)</mark>-->
                                </h2>
                            </a>
                        </li>
                        <li class="product-category product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc4.jpg" alt="Clothing">
                                <h2 class="woocommerce-loop-category__title">
                                    Clothing
                                    <!--<mark class="count">(14)</mark>-->
                                </h2>
                            </a>
                        </li>
                        <li class="product-category product">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc5.jpg" alt="Decor">
                                <h2 class="woocommerce-loop-category__title">
                                    Decor
                                    <!--<mark class="count">(1)</mark>-->
                                </h2>
                            </a>
                        </li>
                        <li class="product-category product last">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc1.jpg" alt="Music">
                                <h2 class="woocommerce-loop-category__title">
                                    Music
                                    <!--<mark class="count">(2)</mark>-->
                                </h2>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>
    <!--shop category end-->