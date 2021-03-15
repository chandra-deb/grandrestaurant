<!DOCTYPE html>
<html lang="en-US" data-menu="classicmenu">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="upload/TG-Thumb.png" />

    <?php wp_head();?>



    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Playfair+Display%3A400%2C700%2C400italic&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Lato%3A100%2C200%2C300%2C400%2C600%2C700%2C800%2C900%2C400italic&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Kristi%3A100%2C200%2C300%2C400%2C600%2C700%2C800%2C900%2C400italic&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic'
        type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%7CKristi&#038;subset' type='text/css'
        media='all' />
    <link href="http://fonts.googleapis.com/css?family=Kristi:400%7CLato:300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all">

</head>


<body class="home page-template-default page page-id-2">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftmenu" />
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="" />
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="" />
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="upload/" />
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
    <input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="1" />
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="1" />
    <input type="hidden" id="post_client_column" name="post_client_column" value="4" />
    <input type="hidden" id="pp_back" name="pp_back" value="Back" />
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1" />
    <input type="hidden" id="tg_project_filterable_link" name="tg_project_filterable_link" value="" />
    <input type="hidden" id="pp_reservation_start_time" name="pp_reservation_start_time" value="11:00" />
    <input type="hidden" id="pp_reservation_end_time" name="pp_reservation_end_time" value="21:00" />
    <input type="hidden" id="pp_reservation_time_step" name="pp_reservation_time_step" value="30" />

    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="4" />

    <!-- Begin mobile menu -->
    <div class="mobile_menu_wrapper">
        <a id="close_mobile_menu" href="javascript:;"><i class="fa fa-close"></i></a>

        <div id="logo_normal" class="logo_container">
            <div class="logo_align">
                <?php the_custom_logo();?>
                <!-- <a id="custom_logo" class="logo_wrapper default"
                    href="http://themes.themegoods.com/grandrestaurant/demo4">
                    <img src="upload/logo@2x.png" alt="" width="154" height="59" />
                </a> -->
            </div>
        </div>

        <!-- <div id="logo_transparent" class="logo_container">
            <div class="logo_align">
                <a id="custom_logo_transparent" class="logo_wrapper hidden"
                    href="http://themes.themegoods.com/grandrestaurant/demo4">
                    <img src="upload/logo@2x_white.png" alt="" width="154" height="59" />
                </a>
            </div>
        </div> -->
        <!-- End logo -->

        <?php wp_nav_menu( [

    'theme_location'  => 'primary',
    'container_class' => 'menu-side-menu-container',
    'menu_class'      => 'mobile_main_nav',
    'menu_id'         => 'mobile_main_menu',
] );?>



    </div>
    <!-- End mobile menu -->

    <!-- Begin template wrapper -->
    <div id="wrapper">

        <div class="header_style_wrapper">

            <!-- Begin top bar -->
            <div class="above_top_bar">
                <div class="page_content_wrapper">

                    <div class="social_wrapper">
                        <ul>
                            <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="google"><a target="_blank" title="Google+" href="#"><i
                                        class="fa fa-google-plus"></i></a></li>
                            <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/#"><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="extend_top_contact_info top_contact_info">
                        <span id="top_contact_address"><i class="fa fa-map-marker"></i>732/21 Second Street, King
                            Street, United Kingdom</span>
                        <span id="top_contact_number"><a href="tel:+65.4566743"><i
                                    class="fa fa-phone"></i>+65.4566743</a></span>
                    </div>
                </div>
            </div>
            <!-- End top bar -->

            <div class="top_bar" style="background: red">

                <div id="menu_wrapper">

                    <!-- Begin logo -->
                    <div id="logo_normal" class="logo_container">
                        <div class="logo_align">
                            <?php the_custom_logo();?>
                            <!-- <a id="custom_logo" class="logo_wrapper default"
                                href="http://themes.themegoods.com/grandrestaurant/demo4">
                                <img src="upload/logo@2x.png" alt="Grand Restaurant | Restaurant Theme" width="101"
                                    height="34" style="width:101px;height:34px;" />
                            </a> -->
                        </div>
                    </div>

                    <div id="logo_transparent" class="logo_container">
                        <div class="logo_align">
                            <a id="custom_logo_transparent" class="logo_wrapper hidden"
                                href="http://themes.themegoods.com/grandrestaurant/demo4">
                                <img src="upload/logo@2x_white.png" alt="Grand Restaurant | Restaurant Theme"
                                    width="101" height="34" style="width:101px;height:34px;" />
                            </a>
                        </div>
                    </div>
                    <!-- End logo -->

                    <!-- Begin side menu button -->
                    <div class="menu_buttons_container">
                        <div class="menu_buttons_content">
                            <!-- Begin Reservation -->
                            <a href="javascript:;" id="tg_reservation" class="button ">Reservation</a>
                            <!-- End Reservation -->

                            <!-- Begin side menu -->
                            <a href="javascript:;" id="mobile_nav_icon"></a>
                            <!-- End side menu -->

                        </div>
                    </div>
                    <!-- End side menu button -->

                    <!-- Begin main nav -->
                    <div id="nav_wrapper">
                        <div class="nav_wrapper_inner">
                            <div id="menu_border_wrapper">
                                <div class="menu-main-menu-container">
                                    <ul id="main_menu" class="nav">
                                        <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                                        <li class="menu-item"><a href="menu.html">Menu</a></li>
                                        <li class="menu-item"><a href="more-about-us.html">About Us</a></li>
                                        <li class="menu-item"><a href="image-gallery.html">Gallery</a></li>
                                        <li class="menu-item"><a href="where-to-find-us.html">Where To Find Us</a></li>
                                        <li class="menu-item"><a href="latest-news.html">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End main nav -->

                </div>
            </div>
        </div>

        <div id="reservation_wrapper">
            <div class="reservation_content">
                <div class="reservation_form">
                    <div class="reservation_form_wrapper">
                        <a id="reservation_cancel_btn" href="javascript:;"><i class="fa fa-close"></i></a>

                        <h2 class="ppb_title"><span class="ppb_title_first">Table</span>Booking</h2>
                        <div id="reponse_msg">
                            <ul></ul>
                        </div>

                        <form id="tg_reservation_form" method="post">
                            <input type="hidden" id="action" name="action" value="tg_reservation_mailer" />

                            <div class="one_third">
                                <label for="your_name">Name*</label>
                                <input id="your_name" name="your_name" type="text" class="required_field" />
                            </div>

                            <div class="one_third">
                                <label for="email">Email*</label>
                                <input id="email" name="email" type="text" class="required_field" />
                            </div>

                            <div class="one_third last">
                                <label for="phone">Phone*</label>
                                <input id="phone" name="phone" type="text" class="required_field" />
                            </div>

                            <br class="clear" />
                            <br />

                            <div class="one_third">
                                <label for="date" class="hidden">Date*</label>
                                <input type="text" class="pp_date required_field" id="date" name="date"
                                    value="10/10/2019">
                            </div>

                            <div class="one_third">
                                <label for="time">Time*</label>
                                <input type="text" class="pp_time required_field" id="time" name="time" value="18:00" />
                            </div>

                            <div class="one_third last">
                                <label for="seats">Seats*</label>
                                <select id="seats" name="seats" class="required_field" style="width:99%">
                                    <option value="1">1 person</option>
                                    <option value="2">2 people</option>
                                    <option value="3">3 people</option>
                                    <option value="4">4 people</option>
                                    <option value="5">5 people</option>
                                    <option value="6">6 people</option>
                                    <option value="7">7 people</option>
                                    <option value="8">8 people</option>
                                    <option value="9">9 people</option>
                                    <option value="10">10 people</option>
                                    <option value="11">11 people</option>
                                    <option value="12">12 people</option>
                                    <option value="13">13 people</option>
                                    <option value="14">14 people</option>
                                    <option value="15">15 people</option>
                                    <option value="16">16 people</option>
                                    <option value="17">17 people</option>
                                    <option value="18">18 people</option>
                                    <option value="19">19 people</option>
                                    <option value="20">20+ people</option>
                                </select>
                            </div>

                            <br class="clear" />
                            <br />

                            <div class="one">
                                <label for="message">Special Requests</label>
                                <textarea id="message" name="message" rows="7" cols="10"></textarea>
                            </div>

                            <br class="clear" />
                            <br />

                            <div class="one">
                                <p>
                                    <input id="reservation_submit_btn" type="submit" value="Book Now" />
                                </p>
                            </div>

                            <br class="clear" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="parallax_overlay_header"></div>
        </div>