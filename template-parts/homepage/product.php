<!--product section start-->
<?php if ( true == get_theme_mod( 'switch_setting_product', 'on' ) ): ?>

<section class="space-3 space-adjust">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title ">    <?php echo get_theme_mod( 'text_setting_product' ); ?>
</h2>
                        <div class="sub-title">
                        <?php echo get_theme_mod( 'textarea_setting_product' ); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <ul class="products columns-3">
                        <li class="product">
                            <div class="product-wrap">
                                <a href="#" class="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p1.jpg" alt="">
                                </a>
                                <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                    <i class="fa fa-shopping-basket"></i>
                                </a>
                            </div>
                            <div class="woocommerce-product-title-wrap">
                                <h2 class="woocommerce-loop-product__title">
                                    <a href="#">Stitched leather sports shoe</a>
                                </h2>
                                <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <span class="onsale">Sale!</span>
                            <span class="price">
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        45.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        42.00
                                    </span>
                                </ins>

                            </span>
                        </li>
                        <li class="product">
                            <div class="product-wrap">
                                <a href="#" class="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p2.jpg" alt="">
                                </a>
                                <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                    <i class="fa fa-shopping-basket"></i>
                                </a>
                            </div>
                            <div class="woocommerce-product-title-wrap">
                                <h2 class="woocommerce-loop-product__title">
                                    <a href="#">Stitched leather sports shoe</a>
                                </h2>
                                <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
                        </li>
                        <li class="product last">
                            <div class="product-wrap">
                                <a href="#" class="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p3.jpg" alt="">
                                </a>
                                <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                    <i class="fa fa-shopping-basket"></i>
                                </a>
                            </div>
                            <div class="woocommerce-product-title-wrap">
                                <h2 class="woocommerce-loop-product__title">
                                    <a href="#">Stitched leather sports shoe</a>
                                </h2>
                                <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                </span>
                            </span>
                        </li>
                        <!--default woocommerce markup-->
                        <!-- <li class="product">
                            <a href="#" class="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p12.jpg" alt="">
                                <h2 class="woocommerce-loop-product__title">2022 Tshirt</h2>

                                <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>18.00</span>
                                </span>
                            </a>
                            <a href="#" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="38" data-product_sku=""
                                   aria-label="Add “Vneck Tshirt” to your cart" rel="nofollow">
                                Add to cart
                            </a>
                        </li> -->
                    </ul>
                    <hr>
<?php
// WooCommerce Product Markup Change
echo do_shortcode( '[products columns=3]' );
?>
                    <a href="#" class="view-all-product mt-md-5">View All Products</a>
                </div>

            </div>
        </div>
    </section>
    <?php endif;?>
    <!-- product section end-->