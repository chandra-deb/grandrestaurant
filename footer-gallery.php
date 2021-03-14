<div class="footer_bar ">

    <div id="footer_before_widget_text"></div>

    <div id="footer" class="">
        <ul class="sidebar_widget four">
            <li id="text-9" class="widget widget_text">
                <div class="textwidget">
                    <p><img src="upload/logo@2x_white.png" alt="" width="101" height="34" /></p>
                    <p>Dolor church-key veniam, fap Bushwick mumblecore irure Vice consectetur 3 wolf moon sapiente
                        literally quinoa.</p>
                    <p>
                    <div class="social_wrapper shortcode dark ">
                        <ul>
                            <li class="facebook"><a target="_blank" title="Facebook" href="#"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" title="Twitter" href="http://twitter.com/#"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="google"><a target="_blank" title="Google+" href="#"><i
                                        class="fa fa-google-plus"></i></a></li>
                            <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/#"><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    </p>
                </div>
            </li>
            <li id="custom_recent_posts-3" class="widget Custom_Recent_Posts">
                <h2 class="widgettitle">Recent Posts</h2>
                <ul class="posts blog ">
                    <li><a href="#">Black Spaghetti with Rock Shrimp</a>
                        <div class="post_attribute">April 20, 2015</div>
                    </li>
                    <li><a href="#">Cooking Food With Love</a>
                        <div class="post_attribute">April 18, 2015</div>
                    </li>
                    <li><a href="#">Modern Fusion Cuisine</a>
                        <div class="post_attribute">April 17, 2015</div>
                    </li>
                </ul>
            </li>
            <li id="custom_flickr-9" class="widget Custom_Flickr">
                <h2 class="widgettitle">Gallery On Flickr</h2>
                <ul class="flickr">
                    <li>
                        <a class="img_frame" target="_blank" href="upload/48544015562_9294520488_b.jpg"
                            title="roasted carrots"><img src="upload/48544015562_9294520488_s.jpg" alt="roasted carrots"
                                width="75" height="75" /></a>
                    </li>
                    <li>
                        <a class="img_frame" target="_blank" href="upload/48528964047_de4b27d823_b.jpg"
                            title="green mango and cucamelon salad"><img src="upload/48528964047_de4b27d823_s.jpg"
                                alt="green mango and cucamelon salad" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a class="img_frame" target="_blank" href="upload/48489434421_4701e696dd_b.jpg"
                            title="croissant morning"><img src="upload/48489434421_4701e696dd_s.jpg"
                                alt="croissant morning" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a class="img_frame" target="_blank" href="upload/48317013731_f988b69c52_b.jpg"
                            title="can&#039;t get enough of cherries"><img src="upload/48317013731_f988b69c52_s.jpg"
                                alt="can&#039;t get enough of cherries" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a class="img_frame" target="_blank" href="upload/48308542466_151f2a66a3_b.jpg"
                            title="cherry"><img src="upload/48308542466_151f2a66a3_s.jpg" alt="cherry" width="75"
                                height="75" /></a>
                    </li>
                    <li>
                        <a class="img_frame" target="_blank" href="upload/48092508442_dbd807762f_b.jpg"
                            title="Romaine Wedge Caesar Salad"><img src="upload/48092508442_dbd807762f_s.jpg"
                                alt="Romaine Wedge Caesar Salad" width="75" height="75" /></a>
                    </li>
                </ul>
                <br class="clear" />
            </li>
            <li id="text-10" class="widget widget_text">
                <h2 class="widgettitle">Contact Info</h2>
                <div class="textwidget">
                    <p><i class="fa fa-map-marker marginright"></i>732/21 Second Street, Manchester, King Street,
                        Kingston United Kingdom</p>
                    <p><i class="fa fa-phone marginright"></i><a href="tel:+65.4566743">+65.4566743</a></p>
                    <p><i class="fa fa-envelope marginright"></i><a
                            href="mailto:info@grandrestauranttheme.com">info@grandrestauranttheme.com</a></p>
                    <p><i class="fa fa-globe marginright"></i>grandrestauranttheme.com</p>
                </div>
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

<script type="text/javascript">
var a = fetch("http://grand-restaurant.local/wp-json/wp/v2/gallery-images?_embed")
a.then((result) => {
    console.log(result.json())
})
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var tgAjax = {
    "ajaxurl": "#",
    "ajax_nonce": "c5281db0c2"
};
/* ]]> */
</script>
<script type='text/javascript' src='js/plugins/supersized.3.1.3.js'></script>
<script type='text/javascript' src='js/plugins/supersized.shutter.js'></script>
<script type='text/javascript' src='js/plugins/jquery.touchwipe.1.1.1.js'></script>

<script>
jQuery(function($) {
    jQuery('body').touchwipe({
        wipeLeft: function() {
            api.nextSlide();
        },
        wipeRight: function() {
            api.prevSlide();
        }
    });

    $.supersized({

        //Functionality
        slideshow: 1, //Slideshow on/off
        autoplay: 0, //Slideshow starts playing automatically
        start_slide: 1, //Start slide (0 is random)
        random: 0, //Randomize slide order (Ignores start slide)
        transition: 1, //0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed: 400, //Speed of transition
        new_window: 1, //Image links open in new window/tab
        pause_hover: 1, //Pause slideshow on hover
        keyboard_nav: 1, //Keyboard navigation on/off
        performance: 1, //0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
        image_protect: 0, //Disables image dragging and right click with Javascript

        //Size & Position
        min_width: 0, //Min width allowed (in pixels)
        min_height: 0, //Min height allowed (in pixels)
        vertical_center: 1, //Vertically center background
        horizontal_center: 1, //Horizontally center background
        fit_portrait: 0, //Portrait images will not exceed browser height
        fit_landscape: 0, //Landscape images will not exceed browser width
        fit_always: 0,

        //Components
        navigation: 0, //Slideshow controls on/off
        thumbnail_navigation: 0, //Thumbnail navigation
        slide_counter: 0, //Display slide numbers
        slide_captions: 0, //Slide caption (Pull from "title" in slides array)
        progress_bar: 0,
        slides: [ //Slideshow Images

            {
                image: 'upload/Mark_Lobo_Photography-Melbourne-Jam_Jar1.jpg',
                thumb: 'upload/Mark_Lobo_Photography-Melbourne-Jam_Jar1-150x150.jpg',
                title: '<div id="gallery_caption"><h2>Signature Dish</h2><div class="gallery_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mollis nulla ut consectetur. Vivamus semper adipiscing convallis. Etiam non euismod tellus. Maecenas accumsan mauris a erat interdum volutpat. Donec volutpat purus tempor sem molestie</div></div>'
            },
            {
                image: 'upload/Negroni-Popcorn.jpg',
                thumb: 'upload/Negroni-Popcorn-150x150.jpg',
                title: '<div id="gallery_caption"><h2>Perbacco Pop Corn</h2><div class="gallery_desc">Vivamus semper adipiscing convallis. Etiam non euismod tellus. Maecenas accumsan mauris a erat interdum volutpat. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere.</div></div>'
            },
            {
                image: 'upload/164606-13016551-NOHM_43485_jpg.jpg',
                thumb: 'upload/164606-13016551-NOHM_43485_jpg-150x150.jpg',
                title: '<div id="gallery_caption"><h2>Cooking Is Passion</h2><div class="gallery_desc">Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mollis nulla ut consectetur.</div></div>'
            }
        ]

    });
});
</script>
</body>

</html>