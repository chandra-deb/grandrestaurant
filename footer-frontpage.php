<div class="footer_bar ">

    <div id="footer_before_widget_text"></div>

    <div id="footer" class="">
        <ul class="sidebar_widget four">
            <li id="text-9" class="widget widget_text">
                <div class="textwidget">
                    <p><?php the_custom_logo()?></p>
                    <p><?php echo get_the_author_meta('description'); ?></p>

                    </p>
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


<script type="text/javascript">
function setREVStartSize(e) {
    try {
        var i = jQuery(window).width(),
            t = 9999,
            r = 0,
            n = 0,
            l = 0,
            f = 0,
            s = 0,
            h = 0;
        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
            .gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
            .sliderLayout) {
            var u = (e.c.width(), jQuery(window).height());
            if (void 0 != e.fullScreenOffsetContainer) {
                var c = e.fullScreenOffsetContainer.split(",");
                if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset
                    .length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e
                    .fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
            }
            f = u
        } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
        e.c.closest(".rev_slider_wrapper").css({
            height: f
        })
    } catch (d) {
        console.log("Failure at Presize of Slider:" + d)
    }
};
</script>
<script>
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
var htmlDivCss =
    ".tp-caption.title-first-word,.title-first-word{font-size:60px;line-height:50px;font-family:Kristi;color:#cfa670;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none}.tp-caption.title,.title{font-size:65px;font-weight:300;font-family:Lato;color:rgb(26,56,83);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-3px}";
if (htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement("div");
    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}
</script>
<script type="text/javascript">
setREVStartSize({
    c: jQuery('#rev_slider_1_1'),
    gridwidth: [1425],
    gridheight: [600],
    sliderLayout: 'fullscreen',
    fullScreenAutoWidth: 'off',
    fullScreenAlignForce: 'on',
    fullScreenOffsetContainer: '',
    fullScreenOffset: ''
});

var revapi1,
    tpj = jQuery;
tpj.noConflict();
tpj(document).ready(function() {
    if (tpj("#rev_slider_1_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_1_1");
    } else {
        revapi1 = tpj("#rev_slider_1_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "js/revslider/public/assets/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 7000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    touchOnDesktop: "off",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: 1425,
            gridheight: 600,
            lazyType: "none",
            shadow: 0,
            spinner: "spinner3",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "on",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }

}); /*ready*/
</script>
<script>
var htmlDivCss = '  #rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #444444 !important; } ';
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if (htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}
</script>
</body>

</html>