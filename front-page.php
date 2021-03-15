<?php get_header();?>
<?php
$parallel_images = get_field( 'parallel_images' ) ;
$p_image_1       = $parallel_images['image-1'] ?? null;
$p_image_2       = $parallel_images['image-2'] ?? null;
?>
<div class="ppb_wrapper  ">
    <div class="one fullwidth ">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery"
            style="background:#262626;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.5.1 fullscreen mode -->
            <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.5.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-thumb="<?php the_post_thumbnail_url()?>" data-rotate="0" data-saveperformance="on"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->

                        <img src="<?php the_post_thumbnail_url()?>" alt=""
                            title="Mark_Lobo_Photography-Melbourne-Jam_Jar1" width="1110" height="740"
                            data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption title-first-word   tp-resizeme" id="slide-1-layer-1" data-x="center"
                            data-hoffset="0" data-y="bottom" data-voffset="170" data-width="auto" data-height="auto"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":450,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                            data-textAlign="['','','','']" style="z-index: 5; white-space: nowrap;text-transform:left;">
                            <?php bloginfo( 'title' );?> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption title   tp-resizeme" id="slide-1-layer-2" data-x="center"
                            data-hoffset="0" data-y="bottom" data-voffset="80" data-width="auto" data-height="auto"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                            data-textAlign="['','','','']"
                            style="z-index: 6; white-space: nowrap; color: #1a3853;text-transform:left;">
                            <strong><?php bloginfo( 'description' );?> </strong>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>

        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

    <!-- END OF THE QUOTE -->

    <?php
$featured_quote_detail = get_field( 'featured_quote' );
$name                  = $featured_quote_detail['name'] ?? '';
$title                 = $featured_quote_detail['title'] ?? '';
$quote                 = $featured_quote_detail['quote'] ?? '';
if ( strlen( $name ) > 0 && strlen( $quote ) > 0 ): ?>

    <div class="one withsmallpadding ppb_text"
        style="text-align:center;padding-bottom:0 !important;padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:60%">
                        </p>
                        <div style="font-size:30px;text-transform:uppercase;letter-spacing:-1px;font-weight:300;">
                            <?php echo $quote ?></div>
                        <div class="post_detail"><?php echo $title ?>
                        </div>
                        <p><span style="font-family:Kristi;font-size:40px;font-weight:600;">
                                <?php echo $name ?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif?>
    <!-- END OF THE QUOTE -->

    <!-- OUR STORY STARTS -->

    <?php
$our_story_detail = get_field( 'our_story' );
$title            = $our_story_detail['story_title'] ?? '';
$story            = $our_story_detail['story'] ?? '';
$image            = $our_story_detail['image'] ?? null;

if ( !empty( $story ) ): ?>

    <div class="one ppb_card_two_cols_with_image"
        style="padding: 50px 0 70px 0 !important;position:relative;padding:40px 0 40px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="one_half parallax_scroll_image" style="width:65%;">
                        <div class="image_classic_frame expand">
                            <div class="image_wrapper">

                                <img src="<?php echo $image ?>" />

                            </div>
                        </div>
                    </div>
                    <div class="one_half last parallax_scroll"
                        style="width:40%;position:absolute;right:90px;padding:40px;background:#ffffff;"
                        data-stellar-ratio="1.3">
                        <h2 class="ppb_title"><span class="ppb_title_first">Discover</span>Our Story</h2>
                        <div class="ppb_subtitle"><?php echo $title ?></div>
                        <div class=" page_header_sep left">
                        </div>
                        <?php echo $story ?>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- OUR STORY ENDS -->

    <div class="divider one">&nbsp;</div>

    <!-- PARALLEL IMAGE 1 STARTS-->
    <?php if ( strlen( $p_image_1['pre_caption'] ?? '' ) > 0 or strlen( $p_image_1[
    'main_caption'] ?? '') > 0 ): ?>
    <div class="parallax title" data-image="<?php echo $p_image_1['image'] ?>" data-width="1024" data-height="682"
        data-content-height="60">
        <div class="parallax_title">
            <h2 class="ppb_title"><span class="ppb_title_first"><?php echo
$p_image_1['pre_caption'] ?></span><?php echo $p_image_1['main_caption'] ?></h2>
        </div>
    </div>
    <?php endif;?>
    <!-- PARALLEL IMAGE 1 ENDS -->

    <!-- Signature Dishes Part -->
    <?php get_template_part( 'includes/dishes', null, [
    'title'        => 'Signature Dishasfdes',
    'type'         => 'signature_dish',
    'layout_col'   => 1,
    'layout_width' => '60%',
]
)?>
    <!-- Signature Dishes Part Ends-->

    <?php

$query_args = [
    'numberposts' => -1,
    'post_type'   => 'dish',
];
$courses = [];

// query
$the_query = new WP_Query( $query_args );
while ( $the_query->have_posts() ) {
    $the_query->the_post();
// echo the_title( '<h1>', '</h1>' );
    $type = get_field( 'dish_types' );
    if ( $type['featured_dish'] == 1 ) {
        array_push( $courses, [
            'title'       => get_the_title(),
            'price'       => get_field( 'price' ),
            'starred'     => get_field( 'starred' ),
            'image_link'  => get_field( 'dish_image' ) ?? '',

            'ingredients' => wp_get_post_terms(
                get_the_ID(),
                ['Ingredients'] ),

        ] );
    }
}
wp_reset_query();
?>
    <?php if ( count( $courses ) > 0 ): ?>

    <div class="ppb_portfolio one nopadding " style="padding:0px 0 0px 0;">
        <div class="page_content_wrapper fullwidth">
            <div class="portfolio_filter_wrapper four_cols gallery portfolio-content section content clearfix">
                <?php foreach ( $courses as $course ): ?>

                <div class="element classic3_cols">
                    <div class="one_fourth gallery4 filterable static animated1">
                        <div class="button_wrapper">
                            <div class="button_center">
                                <div class="button_content"><a data-title="Salted Fried Chicken" href="
                                                                     <?php echo
$course['image_link'] ?>" class="fancy-gallery" title=""><i class="fa fa-search"></i></a></div>
                            </div>
                        </div><img src="<?php echo
$course['image_link'] ?>" alt="" />
                    </div>
                    <br class="clear" />
                    <div id="portfolio_desc_3194" class="portfolio_desc portfolio4 filterable ">
                        <div id="menu_3194" class="menu_content_classic">
                            <h5 class="menu_post">
                                <span class="menu_title"><?php echo
$course
['title'] ?></span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$<?php echo
$course
['price'] ?></span>
                            </h5>
                            <div class="post_detail menu_excerpt"><?php
foreach ( $course['ingredients'] as $ingredient ) {
    echo $ingredient->name . ' / ';
}?></div> <?php if (
    $course['starred'] ): ?>
                            <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>


    <?php endif;?>


    <!-- PARALLEL IMAGE 2 STARTS -->
    <?php if ( strlen( $p_image_2['pre_caption'] ?? '') > 0 or strlen(
    $p_image_2[
        'main_caption'] ?? '' ) > 0 ): ?>
    <div class="parallax title" data-image="<?php echo $p_image_2['image'] ?>" data-width="1024" data-height="682"
        data-content-height="60">
        <div class="parallax_title">
            <h2 class="ppb_title"><span class="ppb_title_first"><?php echo
$p_image_2['pre_caption'] ?></span><?php echo $p_image_2['main_caption'] ?></h2>
        </div>
    </div>
    <?php endif;?>
    <!-- PARALLEL IMAGE 2 ENDS -->


    <div class="divider one">&nbsp;</div>


    <!-- STARTER SETS START -->


    <?php

// args
$query_args = [
    'numberposts' => -1,
    'post_type'   => 'dish',
];

$courses = [];

// query
$the_query = new WP_Query( $query_args );
while ( $the_query->have_posts() ) {
    $the_query->the_post();
// echo the_title( '<h1>', '</h1>' );
    $type = get_field( 'dish_types' );
    if ( $type['starter_dish'] == 1 ) {
        array_push( $courses, [
            'title'       => get_the_title(),
            'price'       => get_field( 'price' ),
            'starred'     => get_field( 'starred' ),
            'image_link'  => get_field( 'dish_image' ) ?? '',

            'ingredients' => wp_get_post_terms(
                get_the_ID(),
                ['Ingredients'] ),

        ] );
    }
}
wp_reset_query();
?>
    <?php if ( count( $courses ) > 0 ): ?>

    <div class="one ppb_menu_with_image"
        style="padding: 70px 0 70px 0 !important;position:relative;padding:40px 0 40px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="one_half parallax_scroll_image" style="width:65%;">
                        <div class="image_classic_frame expand">
                            <div class="image_wrapper">
                                <a href="<?php the_field( 'starter_image' )?>
                             " class="img_frame"><img src="<?php the_field(
    'starter_image' )?>" class="portfolio_img" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="one_half last parallax_scroll"
                        style="width:40%;position:absolute;right:90px;background:#ffffff;padding:40px;"
                        data-stellar-ratio="1.3">
                        <h2 class="ppb_menu_title">Starters</h2>

                        <?php foreach ( $courses as $course ): ?>

                        <div id="menu_3197" class="menu_content_classic">
                            <h5 class="menu_post">
                                <span class="menu_title" style="background:#ffffff;">
                                    <?php echo $course['title']; ?>
                                </span>
                                <span class="menu_dots"></span>
                                <span class="menu_price" style="background:#ffffff;">$
                                    <?php echo $course['price']; ?></span>
                            </h5>
                            <div class="post_detail menu_excerpt"> <?php
foreach ( $course['ingredients'] as $ingredient ) {
    echo $ingredient->name . ' / ';
}?></div>
                            <?php if (
    $course['starred'] ): ?>
                            <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            <?php endif;?>
                        </div>
                        <?php endforeach?>

                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- STARTER SETS ENDS -->


    <div class="divider one">&nbsp;</div>

    <!-- Lunch SETS Starts -->

    <?php

// args
$query_args = [
    'numberposts' => -1,
    'post_type'   => 'dish',
];

$courses = [];

// query
$the_query = new WP_Query( $query_args );
while ( $the_query->have_posts() ) {
    $the_query->the_post();
// echo the_title( '<h1>', '</h1>' );
    $type = get_field( 'dish_types' );
    if ( $type['lunch_sets'] == 1 ) {
        array_push( $courses, [
            'title'       => get_the_title(),
            'price'       => get_field( 'price' ),
            'starred'     => get_field( 'starred' ),
            'image_link'  => get_field( 'dish_image' ) ?? '',

            'ingredients' => wp_get_post_terms(
                get_the_ID(),
                ['Ingredients'] ),

        ] );
    }
}
wp_reset_query();
?>
    <?php if ( count( $courses ) > 0 ): ?>
    <div class="one ppb_menu_with_image"
        style="padding: 70px 0 70px 0 !important;position:relative;padding:40px 0 40px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="one_half parallax_scroll"
                        style="width:40%;position:absolute;left:90px;background:rgba(256,256,256,1);padding:40px;z-index:2;"
                        data-stellar-ratio="1.3">
                        <h2 class="ppb_menu_title">Lunch Sets</h2>

                        <?php foreach ( $courses as $course ): ?>

                        <div id="menu_3175" class="menu_content_classic">
                            <h5 class="menu_post">
                                <span class="menu_title" style="background:rgba(256,256,256,1);">
                                    <?php echo $course['title']; ?>

                                </span>
                                <span class="menu_dots"></span>
                                <span class="menu_price" style="background:rgba(256,256,256,1);">$
                                    <?php echo $course['price']; ?></span>
                            </h5>
                            <div class="post_detail menu_excerpt"> <?php
foreach ( $course['ingredients'] as $ingredient ) {
    echo $ingredient->name . ' / ';
}?></div>
                            <?php if (
    $course['starred'] ): ?>
                            <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            <?php endif;?>
                        </div>
                        <?php endforeach?>
                    </div>
                    <div class="one_half parallax_scroll_image last" style="width:65%;">
                        <div class="image_classic_frame expand">
                            <div class="image_wrapper">
                                <a href="<?php the_field( 'lunch_sets_image' )?>
                             " class="img_frame"><img src="<?php the_field(
    'lunch_sets_image' )?>" class="portfolio_img" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- Lunch SETS Ends -->


    <div class="divider one">&nbsp;</div>


    <!-- OUR Restaurant STARTS-->
    <?php
$our_restaurant_story_detail = get_field( 'our_restaurant' );
$title                       =
$our_restaurant_story_detail['story_title'] ?? '';

$story = $our_restaurant_story_detail['restaurant_story'] ?? '';

$image            = $our_restaurant_story_detail['image'] ?? null;
$linked_page      = $our_restaurant_story_detail['linked_page'] ?? '';
$linked_page_text = $our_restaurant_story_detail['linked_page_text'] ?? '';

if ( !empty( $story ) ): ?>
    <div class="one ppb_card_two_cols_with_image"
        style="padding: 70px 0 70px 0 !important;position:relative;padding:40px 0 40px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="one_half parallax_scroll_image" style="width:65%;">
                        <div class="image_classic_frame expand">
                            <div class="image_wrapper">

                                <img src="<?php echo $image ?>" />

                            </div>
                        </div>
                    </div>
                    <div class="one_half last parallax_scroll"
                        style="width:40%;position:absolute;right:90px;padding:40px;background:#ffffff;"
                        data-stellar-ratio="1.3">
                        <h2 class="ppb_title"><span class="ppb_title_first">Our</span>Restaurant</h2>
                        <div class="ppb_subtitle"><?php echo $title;
?></div>
                        <div class="page_header_sep left"></div>
                        <?php echo $story ?>
                        <br />
                        <br />
                        <?php if ( !empty( $linked_page_text ) and
    !empty(
        $linked_page ) ): ?>
                        <a href="<?php echo $linked_page ?>" class="button">
                            <?php echo $linked_page_text ?></a>
                        <?php endif;?>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>

    <!-- OUR Restaurant ENDS-->

    <div class="divider one">&nbsp;</div>
</div>

<?php get_footer( 'frontpage' );?>