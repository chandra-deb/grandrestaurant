<?php get_header();?>
<div id="page_caption" class="hasbg parallax baseline notransparentmenu">
    <div class="parallax_overlay_header"></div>
    <div id="bg_regular" style="background-image:url(<?php
the_post_thumbnail_url()?>);"></div>


    <div class="page_title_wrapper baseline" data-stellar-ratio="1.3">
        <div class="page_title_inner baseline">
            <h1 class="withtopbar">
                <span class="ppb_title_first"></span><?php the_title();?>
            </h1>
        </div>
    </div>
</div>




<div id="page_content_wrapper" class="hasbg withtopbar ">
    <div class="inner">

        <!-- Begin main content -->
        <div class="inner_wrapper">

            <div class="page_content_wrapper"></div>

            <div class="sidebar_content">




                <?php if ( have_posts() ): while ( have_posts() ): the_post();?>



                <!-- Begin each blog post -->
                <div id="post-1135"
                    class="post-1135 post type-post status-publish format-standard has-post-thumbnail hentry category-cooking tag-cooking tag-cuisine tag-dinning tag-spaghetti">

                    <div class="post_wrapper">

                        <div class="post_content_wrapper">

                            <div class="post_header">
                                <div class="post_header_title">
                                    <h5>
                                        <a href="<?php the_permalink();?>












																																												                                                 " title="<?php
        the_title
            ()
        ;
        ?>">
                                            <?php the_title();?>
                                        </a>
                                    </h5>
                                    <div class="post_detail">
                                        <span class="post_info_date">
                                            <?php the_date();?> </span>
                                        <span class="post_info_cat">
                                            In <a href="<?php
        $category = get_the_category();
        echo get_category_link( $category );?>"><?php
        the_category
            ( ',' );?></a>
                                        </span>
                                        <span class="post_info_comment">
                                            <a href="#">
                                                <?php comments_number();?>
                                            </a>
                                        </span>

                                    </div>
                                </div>

                                <!-- <?php if ( has_post_thumbnail() ): ?>
										                                <a href="<?php the_permalink();?>">
										                                    <?php the_post_thumbnail( 'tmb' )?>
										                                </a>
										                                <?php endif;?> -->
                                <br class="clear" />

                                <p><?php the_content();?></p>
                            </div>
                            <div class=" post_share_bubble">
                                <div class="post_share_bubble_wrapper">
                                    <div id="share_post_1135" class="social_share_bubble inline">
                                        <ul>
                                            <li><a title="Share On Facebook" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a title="Share On Twitter" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a title="Share On Pinterest" target="_blank" href="#"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                            <li><a title="Share On Google+" target="_blank" href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div> <a href="javascript:;" class="post_share" data-share="share_post_1135"
                                    data-parent="post-1135"><i class="fa fa-share-alt"></i></a>
                            </div>

                        </div>

                    </div>
                    <?php comments_template(); ?>

                </div>
                <?php endwhile;endif;?>


                <br class="clear" />
                <!-- End each blog post -->

                <br class="clear" />
                <!-- <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a></div> -->
                <?php the_posts_pagination(
    [

        'prev_text'          => _x( 'Prev', 'previous set of posts' ),
        'next_text'          => _x( 'Next', 'next set of posts' ),
        'screen_reader_text' => __( ' ' ),
        'aria_label'         => __( 'Posts' ),
        // 'class'              => 'pagination',
    ],

)?>


            </div>

            <div class="sidebar_wrapper">

                <div class="sidebar_top"></div>

                <div class="sidebar">

                    <div class="content">

                        <ul class="sidebar_widget">
                            <li id="text-3" class="widget widget_text">
                                <h2 class="widgettitle">About Us</h2>
                                <div class="textwidget">
                                    <p><?php echo get_the_author_meta('description'); ?></p>
                                </div>
                            </li>
                            <li id="categories-3" class="widget widget_categories">
                                <h2 class="widgettitle">Categories</h2>
                                <ul>
                                    <?php
$categories = get_categories();
foreach ( $categories as $category ):
?>
                                    <li class="cat-item "><a href="<?php echo
get_category_link( $category ) ?>"><?php
echo $category->name; ?></a> (<?php echo $category->count ?>) </li>
                                    <?php endforeach;?>
                                </ul>
                            </li>

                            <li id="tag_cloud-2" class="widget widget_tag_cloud">
                                <h2 class="widgettitle">Tags</h2>
                                <div class="tagcloud">
                                    <?php

$tags = get_tags();
foreach ( $tags as $tag ): ?>


                                    <a href="<?php echo( $tag->slug) ?>"
                                        class="tag-cloud-link tag-link-23 tag-link-position-1" style="font-size: 13px;">
                                        <?php echo $tag->name; ?>
                                    </a>

                                    <?php endforeach?>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
                <br class="clear" />

                <div class="sidebar_bottom"></div>
            </div>
        </div>

        <!-- End main content -->

    </div>
    <br class="clear" />
    <br />
</div>
<?php get_footer()?>