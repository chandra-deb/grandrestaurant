<?php

// args
$query_args = [
    'numberposts' => -1,
    'post_type'   => 'dish',
];

// *Coming From Template Initialization
$title        = $args['title'] ?? 'Title Goes Here';
$d_type       = $args['type'];
$layout_col   = $args['layout_col'] ?? 2;
$layout_width = $args['layout_width'] ?? '100%';

$column_classes = [];

if ( $layout_col == 1 ) {
    $column_class = 'one';
} else if ( $layout_col == 2 ) {
    $column_class = 'one_half';
} else if ( $layout_col == 3 ) {
    $column_class = 'one_third';
}

//  <?php if ( $index % 2 == 0 ) {
//     echo 'last';} else {
//     echo '';
// }
//

//  <?php
// if($layout_col == 1) {
// echo $column_class;
// }
// else if ( $index % $layout_col == 0 ) {
//     echo $column_class . ' last';}
// else {
//     echo '$column_class';
// }
//

$courses = [];

// query
$the_query = new WP_Query( $query_args );
while ( $the_query->have_posts() ) {
    $the_query->the_post();
// echo the_title( '<h1>', '</h1>' );
    $type = get_field( 'dish_types' );
    if ( $type[$d_type] == 1 ) {
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

<div class="one" style="padding:50px 0 50px 0;">
    <div class="standard_wrapper">
        <div class="page_content_wrapper">
            <div class="inner">
                <div style="margin:auto;width: <?php echo $layout_width ?>;text-align:center;">
                    <h2 class="ppb_menu_title"><?php echo $title; ?></h2>
                    <br class="clear" />
                    <br />
                    <?php
$index = 1;
foreach ( $courses as $course ): ?>

                    <div class="<?php
if ( $layout_col == 1 ) {
    echo $column_class;
} else if ( $index % $layout_col == 0 ) {
    echo $column_class . ' last';} else {
    echo $column_class;
}?>">
                        <div id="menu_3178" class="menu_content_classic">
                            <?php if ( $d_type == 'signature_dish' ): ?>
                            <div class="menu_image">
                                <a href="<?php echo
$course['image_link'] ?>" class="img_frame"><img src="
                                                                     <?php echo
$course['image_link'] ?>" alt="" /></a>
                            </div>
                            <?php endif;?>
                            <h5 class="menu_post">
                                <span class="menu_title"><?php echo
$course
['title'] ?></span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$<?php echo
$course
['price'] ?></span>
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