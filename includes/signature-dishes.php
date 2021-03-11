    <?php

// args
$args = [
    'numberposts' => -1,
    'post_type'   => 'dish',
];

$signature_dishes = [];
// query
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) {
    $the_query->the_post();
    // echo the_title( '<h1>', '</h1>' );
    $type = get_field( 'dish_types' );
    echo $type['featured_dish'];
    if ( $type['signature_dish'] == 1 ) {
        array_push( $signature_dishes, [
            'title'       => get_the_title(),
            'price'       => get_field( 'price' ),
            'starred'     => get_field( 'starred' ),
            'image_link'  => get_field( 'dish_image' ),

            'ingredients' => wp_get_post_terms(
                get_the_ID(),
                ['Ingredients'] ),

        ] );
    }
}
?>


    <?php if ( count( $signature_dishes ) > 0 ): ?>

    <div class="one" style="padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:60%;text-align:center;">
                        <h2 class="ppb_menu_title">Signature Dishes</h2>
                        <br class="clear" />
                        <br />
                        <?php
foreach ( $signature_dishes as $signature_dish ): ?>

                        <div class="one ">
                            <div id="menu_3194" class="menu_content_classic">
                                <div class="menu_image">
                                    <a href="<?php echo
$signature_dish['image_link'] ?>" class="img_frame"><img src="
                                                                     <?php echo
$signature_dish['image_link'] ?>" alt="" /></a>
                                </div>
                                <h5 class="menu_post">
                                    <span class="menu_title"><?php echo
$signature_dish['title'] ?></span>
                                    <span class="menu_dots image"></span>
                                    <span class="menu_price">$<?php echo
$signature_dish['price'] ?></span>
                                </h5>
                                <div class="post_detail menu_excerpt">
                                    <?php
foreach ( $signature_dish['ingredients'] as $ingredient ) {
    echo $ingredient->name . ' / ';
}?>
                                </div>
                                <?php if (
    $signature_dish['starred'] ): ?>
                                <div class="menu_highlight" style="margin-top: -24px;"><i class="fa fa-star"></i></div>
                                <?php endif;?>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>

    <?php wp_reset_query();endif;?>