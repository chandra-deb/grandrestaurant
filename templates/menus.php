<!--
    Template Name: Menus
 -->
<?php get_header();?>
<div id="page_caption" class="hasbg parallax baseline notransparentmenu">
    <div class="parallax_overlay_header"></div>
    <div id="bg_regular" style="background-image:url(<?php
the_post_thumbnail_url()?>);"></div>


    <div class="page_title_wrapper baseline" data-stellar-ratio="1.3">
        <div class="page_title_inner baseline">
            <h1 class="withtopbar">
                <span class="ppb_title_first">Our</span>Menu Classic
            </h1>
        </div>
    </div>
</div>

<div class="ppb_wrapper hasbg withtopbar">


    <!-- Signature Template Part -->
    <?php echo get_template_part( 'includes/signature-dishes', null, [
    'title' => 'Signature'] ) ?>
    <!-- Signature Template Part Ends-->


    <!-- Parallel Image 1 Starts -->
    <?php
$p_image_1 = get_field( 'parallel_image_1' ) ?? null;
if ( $p_image_1 != null ): ?>
    <div class="parallax " data-image="<?php the_field( 'parallel_image_1' )?>" data-width="1110" data-height="740"
        data-content-height="60">
    </div>
    <?php endif?>
    <!-- Parallel Image 1 Ends -->


    <!-- Main Courses Starts -->
    <?php

// args
$args = [
    'numberposts' => -1,
    'post_type'   => 'dish',
];

$main_courses = [];
// query
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) {
    $the_query->the_post();
    // echo the_title( '<h1>', '</h1>' );
    $type = get_field( 'dish_types' );
    if ( $type['main_course'] == 1 ) {
        array_push( $main_courses, [
            'title'       => get_the_title(),
            'price'       => get_field( 'price' ),
            'starred'     => get_field( 'starred' ),
            // 'image_link'  => get_field( 'dish_image' ),

            'ingredients' => wp_get_post_terms(
                get_the_ID(),
                ['Ingredients'] ),

        ] );
    }
}
wp_reset_query();
?>
    <?php if ( count( $main_courses ) > 0 ): ?>

    <div class="one" style="padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%;text-align:center;">
                        <h2 class="ppb_menu_title">Main Courses</h2>
                        <br class="clear" />
                        <br />
                        <?php
$index = 1;
foreach ( $main_courses as $main_course ): ?>

                        <div class="one_half <?php if ( $index % 2 == 0 ) {
    echo 'last';} else {
    echo '';
}
?>">
                            <div id="menu_3178" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title"><?php echo
$main_course
['title'] ?></span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$<?php echo
$main_course
['price'] ?></span>
                                </h5>
                                <div class="post_detail menu_excerpt"> <?php
foreach ( $main_course['ingredients'] as $ingredient ) {
    echo $ingredient->name . ' / ';
}?></div>
                                <?php if (
    $main_course['starred'] ): ?>
                                <div class="menu_highlight"><i class="fa fa-star"></i></div>
                                <?php endif;?>
                            </div>
                        </div>
                        <?php $index++?>
                        <?php endforeach;?>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- Main Courses Ends -->


    <!-- Parallel Image 2 Starts -->
    <?php
$p_image_2 = get_field( 'parallel_image_2' ) ?? null;
if ( $p_image_2 != null ): ?>
    <div class="parallax " data-image="<?php the_field( 'parallel_image_2' )?>" data-width="1602" data-height="1200"
        data-content-height="60">
    </div>
    <?php endif;?>
    <!-- Parallel Image 2 Ends -->


    <div class="one" style="padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%;text-align:center;">
                        <h2 class="ppb_menu_title">Lunch Time</h2>
                        <br class="clear" />
                        <br />
                        <div class="one_third ">
                            <div id="menu_3197" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Baked Potato Pizza</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$12</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Potato / Bread / Cheese</div>
                                <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3185" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Lamb-Beef Kofka Skewers with Tzatziki</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$24.5</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Lamb / Wine / Butter</div>
                            </div>
                        </div>
                        <div class="one_third last">
                            <div id="menu_3184" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Bacon-Wrapped Shrimp with Garlic</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$19.9</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Bacon / Shrimp / Garlic</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3183" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Lemon and Garlic Green Beans</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$14.5</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Lemon / Garlic / Beans</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3182" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Roasted Red Potatoes with Rosemary</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$15.5</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Potatoes / Rosemary / Butter</div>
                                <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                        <div class="one_third last">
                            <div id="menu_3181" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Black Bean Sweet Potato Quinoa (Meatless)Loaf</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$12</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Bean / Potato</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3180" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Wild Mushroom Bucatini with Kale</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$14.5</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Mushroom / Veggie / White Sources</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3179" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Prawn Sausage Cassoulet</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$30.5</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Prawn / Sausage / Totatos</div>
                            </div>
                        </div>
                        <div class="one_third last">
                            <div id="menu_3178" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Meatloaf with Black Pepper-Honey BBQ</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$19.9</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Pepper / Chicken / Honey</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3177" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Grilled Hanger Steak with Harissa and Pickled Red
                                        Onions</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$29.9</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Beef / Onions / Tomatos</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3176" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Braised Chicken Breast with White Wine and Shallots</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$24.5</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Chicken Breast / Wine</div>
                            </div>
                        </div>
                        <div class="one_third last">
                            <div id="menu_3175" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Apple Smoked Chicken with White Sauce</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$18.9</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Chicken / Apple / Tomatos</div>
                                <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3174" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Lemon-Rosemary Chicken</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$19.9</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Chicken / Rosemary / Lemon</div>
                            </div>
                        </div>
                        <div class="one_third ">
                            <div id="menu_3173" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Grilled Pork with Preserved Lemons</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$22</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Pork / Lemons / Onions</div>
                                <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                        <div class="one_third last">
                            <div id="menu_3172" class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">Pork Tenderloin marinated in Yogurt</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">$20</span>
                                </h5>
                                <div class="post_detail menu_excerpt">Pork / Tenderloin / Yogurt</div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer()?>