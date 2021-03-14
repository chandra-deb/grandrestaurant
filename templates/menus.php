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


    <!-- Signature Dishes Part -->
    <?php get_template_part( 'includes/dishes', null, [
    'title'        => 'Signature Dishasfdes',
    'type'         => 'signature_dish',
    'layout_col'   => 1,
    'layout_width' => '60%',
]
)?>
    <!-- Signature Dishes Part Ends-->


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
    <?php get_template_part( 'includes/dishes', null, [
    'title'        => 'Main Courses',
    'type'         => 'main_course',
    'layout_col'   => 3,
    'layout_width' => '100%',
]
)?>
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


    <!-- Signature Dishes Part -->
    <?php get_template_part( 'includes/dishes', null, [
    'title'        => 'Lunch Time',
    'type'         => 'lunch_time',
    'layout_col'   => 3,
    'layout_width' => '100%',
]
)?>
    <!-- Signature Dishes Part Ends-->
</div>
<?php get_footer()?>