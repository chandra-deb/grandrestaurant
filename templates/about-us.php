<!--
    Template Name: About Us
 -->
<?php get_header(); ?>
<div id="page_caption" class="hasbg parallax baseline notransparentmenu">
    <div class="parallax_overlay_header"></div>
    <div id="bg_regular" style="background-image:url(<?php echo the_post_thumbnail_url()?>);"></div>


    <div class="page_title_wrapper baseline" data-stellar-ratio="1.3">
        <div class="page_title_inner baseline">
            <h1 class="withtopbar">
                <span class="ppb_title_first"></span><?php the_title()?>
            </h1>
        </div>
    </div>
</div>



<div class="ppb_wrapper hasbg withtopbar">


    <?php $index = 0;?>
    <?php if(have_rows('info_with_image')):while(have_rows('info_with_image')):the_row()?>
    <?php if($index % 2 == 0):?>
    <div class="one ppb_card_two_cols_with_image" style="position:relative;padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="one_half parallax_scroll"
                        style="width:40%;position:absolute;left:90px;padding:50px;z-index:2;block !important;background:rgba(256,256,256,1);"
                        data-stellar-ratio="1.3">
                        <h2 class="ppb_title"><span
                                class="ppb_title_first"><?php the_sub_field('pre_title')?></span><?php the_sub_field('title')?>

                        </h2>
                        <div class="ppb_subtitle">
                            <?php the_sub_field('pre_paragraph')?>
                        </div>
                        <div class="page_header_sep left"></div><?php the_sub_field('main_content')?></p>
                        <p><span style="font-family:Kristi;font-size:40px;font-weight:600;">John Phillipe</span>
                    </div>
                    <div class="one_half parallax_scroll_image last" style="width:65%;">
                        <div class="image_classic_frame expand">
                            <div class="image_wrapper">
                                <a href="<?php the_sub_field('image')?>" class="img_frame"><img
                                        src="<?php the_sub_field('image')?>" class="portfolio_img" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php else:?>
    <div class="one ppb_card_two_cols_with_image" style="position:relative;padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div class="one_half parallax_scroll_image" style="width:65%;">
                        <div class="image_classic_frame expand">
                            <div class="image_wrapper">
                                <a href="<?php the_sub_field('image')?>" class="img_frame"><img
                                        src="<?php the_sub_field('image')?>" class="portfolio_img" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="one_half last parallax_scroll"
                        style="width:40%;position:absolute;right:90px;padding:50px;background:rgba(256,256,256,1);"
                        data-stellar-ratio="1.3">
                        <h2 class="ppb_title"><span
                                class="ppb_title_first"><?php the_sub_field('pre_title')?></span><?php the_sub_field('title')?>
                        </h2>
                        <div class="ppb_subtitle">
                            <?php the_sub_field('pre_paragraph')?>

                        </div>
                        <div class="page_header_sep left"></div>
                        <?php the_sub_field('main_content')?>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php $index++; ?>
    <?php endwhile; wp_reset_query(); endif;?>



    <?php if(have_rows('branches')):?>
    <div class="one withsmallpadding ppb_header "
        style="padding-bottom: 0 !important;text-align:center;padding:30px 0 30px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%">
                        <h2 class="ppb_title" style=""><span class="ppb_title_first">Restaurant</span>Branches</h2>
                        <div class="page_header_sep center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php while(have_rows('branches')):the_row();?>
    <div class="standard_wrapper">
        <div class="one_fourth withsmallpadding ppb_text" style="padding:30px 0 30px 0;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <p><strong><?php the_sub_field('branch_name'); ?></strong>
                                <br /> <?php the_sub_field('branch_name'); ?>
                            </p>
                            <br />
                            <?php if(get_sub_field('map')):?>
                            <a href="<?php the_sub_field('map')?>">
                                <i class="fa fa-map-marker"></i> Get Directions
                            </a>
                            <?php endif;?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>


    <?php endif; ?>

</div>
<?php get_footer()?>