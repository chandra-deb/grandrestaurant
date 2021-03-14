<div class="footer_bar ">

    <div id="footer_before_widget_text"></div>

    <div id="footer" class="">
        <ul class="sidebar_widget four">
            <li id="text-9" class="widget widget_text">
                <div class="textwidget">
                    <p><?php the_custom_logo()?></p>
                    <p><?php echo get_the_author_meta('description'); ?></p>
                </div>
            </li>
            <li id="custom_recent_posts-3" class="widget Custom_Recent_Posts">
                <?php dynamic_sidebar('footer'); ?>

            </li>

        </ul>
    </div>
    <br class="clear" />

    <div class="footer_bar_wrapper ">
        <div id="copyright">© Copyright Grand Restaurant Theme Demo - Theme by ThemeGoods</div>
        <br class="clear" />
        <a id="toTop"><i class="fa fa-angle-up"></i></a>
    </div>
</div>

</div>

<div id="overlay_background"></div>



<?php wp_footer();?>
<script type='text/javascript'>
/* <![CDATA[ */
var tgAjax = {
    "ajaxurl": "#",
    "ajax_nonce": "c5281db0c2"
};
/* ]]> */
</script>

</body>

</html>