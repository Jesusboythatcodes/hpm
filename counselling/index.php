<?php require_once('../dbconnect.php'); ?>
<?php
  if (isset($_GET['newslettersub']) && $_GET['pb'] == 'wp2303kjdj43$003dsdw23!^893nwp'){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (isset($_POST['subscriptionemail']) && !empty($_POST['subscriptionemail'])){
        $s = $_POST['subscriptionemail'];
        $insert = "INSERT INTO `newsletter_user_mail` (usermail, status)
        VALUES ('".mysqli_real_escape_string($dbcon, $s)."', '".mysqli_real_escape_string($dbcon, "on")."')";
        if(!$res = $dbcon->query($insert)){
          header('Location: index.php?pb=wp2303kjdj43$003dsdw23!^893nwp&subres=failed#subresponse');
        }
        else {
          $dbcon->close();
          header('Location: index.php?pb=wp2303kjdj43$003dsdw23!^893nwp&subres=success#subresponse');
        }
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="His Praise Ministries Incorporated">
  <meta name="description" content="HPM">
  <meta name="keywords" content="Counselling, HPM, His Praise Ministries Incorporated, His Praise Ministries Inc.">
  <meta name="author" content="Jesusboythatcodes">
  <meta name="author" content="PoG">
  <link rel="shortcut icon" href="../hpm-content/uploads/favicon.png" />
  <title>His Praise Ministry Library</title>
  <link rel="stylesheet" id="layerslider-css" href="../hpm-content/plugins/LayerSlider/static/layerslider/css/layerslideradc6.css?ver=6.5.5" type="text/css" media="all" />
  <link rel="stylesheet" id="woocommerce-smallscreen-css" href="../hpm-content/plugins/woocommerce/assets/css/woocommerce-smallscreenb12b.css?ver=3.1.1" type="text/css" media="only screen and (max-width: 768px)" />
  <link rel="stylesheet" id="jquery-ui-css" href="../hpm-content/plugins/hpm-fullcalendar/includes/css/jquery-ui/eggplant/jquery-ui.min62ea.css?ver=1.2" type="text/css" media="all" />
  <link rel="stylesheet" id="jquery-ui-theme-css" href="../hpm-content/plugins/hpm-fullcalendar/includes/css/jquery-ui/eggplant/theme62ea.css?ver=1.2" type="text/css" media="all" />
  <link rel="stylesheet" id="default-style-css" href="../hpm-content/themes/lord/stylea288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-mCustomScrollbar-css" href="../hpm-content/themes/lord/frontend/css/jquery.mCustomScrollbara288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-widgets-css-css" href="../hpm-content/themes/lord/frontend/css/lord_widgetsa288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="responsive-css-css" href="../hpm-content/themes/lord/frontend/css/responsivea288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="owl-css-css" href="../hpm-content/themes/lord/frontend/css/owl.carousela288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-timecircles-css" href="../hpm-content/themes/lord/frontend/shortcodes/timecirclesa288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="svg-css-css" href="../hpm-content/themes/lord/frontend/css/iconmoona288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-lord-csmenu-css" href="../hpm-content/themes/lord/frontend/css/mmenu.mina288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="law-bx-slider-css-css" href="../hpm-content/themes/lord/frontend/css/jquery.bxslidera288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-bootstrap-css" href="../hpm-content/themes/lord/frontend/css/bootstrapa288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="lord-color-css" href="../hpm-content/themes/lord/frontend/css/colora288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-hpm-commerce-css" href="../hpm-content/themes/lord/frontend/css/hpm-commercea288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="font-awesome-css" href="../hpm-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min5fba.css?ver=5.2" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-bx-slider-css" href="../hpm-content/themes/lord/frontend/css/jquery.bxslidera288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="googleFonts-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="googleFonts-heading-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="menu-googleFonts-heading-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="custom-style-css" href="../hpm-content/themes/lord/frontend/css/stylea288.css" type="text/css" media="all" />
  <style id="custom-style-inline-css" type="text/css">
    .page_content {
      padding: 80px 0 !important;
    }
  </style>
  <link rel="stylesheet" id="js_composer_front-css" href="../hpm-content/plugins/js_composer/assets/css/js_composer.min5fba.css?ver=5.2" type="text/css" media="all" />
  <link rel="stylesheet" id="jquery-ui-smoothness-css" href="../hpm-content/plugins/contact-form-7/includes/js/jquery-ui/themes/smoothness/jquery-ui.mine899.css?ver=1.11.4" type="text/css" media="screen" />
  <script type="text/javascript">
    /* <![CDATA[ */
    var LS_Meta = {
      "v": "6.5.5"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" data-cfasync="false" src="../hpm-content/plugins/LayerSlider/static/layerslider/js/greensockb3a6.js?ver=1.19.0"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>
  <script type="text/javascript" data-cfasync="false" src="../hpm-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jqueryadc6.js?ver=6.5.5"></script>
  <script type="text/javascript" data-cfasync="false" src="../hpm-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitionsadc6.js?ver=6.5.5"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/core.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/position.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/sortable.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript">
    jQuery(document).ready(function(jQuery) {
      jQuery.datepicker.setDefaults({
        "closeText": "Close",
        "currentText": "Today",
        "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        "nextText": "Next",
        "prevText": "Previous",
        "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
        "dateFormat": "MM d, yy",
        "firstDay": 1,
        "isRTL": false
      });
    });
  </script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/wp-a11y.mina288.js?ver=4.8.1"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var uiAutocompleteL10n = {
      "noResults": "No results found.",
      "oneResult": "1 result found. Use up and down arrow keys to navigate.",
      "manyResults": "%d results found. Use up and down arrow keys to navigate.",
      "itemSelected": "Item selected."
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/resizable.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/draggable.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/button.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/dialog.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var EM = {
      "ajaxurl": "http:\/\/lord.crunchpress.com\/wp-admin\/admin-ajax.php",
      "locationajaxurl": "http:\/\/lord.crunchpress.com\/wp-admin\/admin-ajax.php?action=locations_search",
      "firstDay": "1",
      "locale": "en",
      "dateFormat": "dd\/mm\/yy",
      "ui_css": "http:\/\/lord.crunchpress.com\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui.min.css",
      "show24hours": "0",
      "is_ssl": "",
      "google_maps_api": " AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM",
      "bookingInProgress": "Please wait while the booking is being submitted.",
      "tickets_save": "Save Ticket",
      "bookingajaxurl": "http:\/\/lord.crunchpress.com\/wp-admin\/admin-ajax.php",
      "bookings_export_save": "Export Bookings",
      "bookings_settings_save": "Save Settings",
      "booking_delete": "Are you sure you want to delete?",
      "booking_offset": "30",
      "bb_full": "Sold Out",
      "bb_book": "Book Now",
      "bb_booking": "Booking...",
      "bb_booked": "Booking Submitted",
      "bb_error": "Booking Error. Try again?",
      "bb_cancel": "Cancel",
      "bb_canceling": "Canceling...",
      "bb_cancelled": "Cancelled",
      "bb_cancel_error": "Cancellation Error. Try again?",
      "txt_search": "Search",
      "txt_searching": "Searching...",
      "txt_loading": "Loading...",
      "event_detach_warning": "Are you sure you want to detach this event? By doing so, this event will be independent of the recurring set of events.",
      "delete_recurrence_warning": "Are you sure you want to delete all recurrences of this event? All events will be moved to trash.",
      "disable_bookings_warning": "Are you sure you want to disable bookings? If you do this and save, you will lose all previous bookings. If you wish to prevent further bookings, reduce the number of spaces available to the amount of bookings you currently have",
      "booking_warning_cancel": "Are you sure you want to cancel your booking?"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../hpm-content/plugins/events-manager/includes/js/events-managere23c.js?ver=5.7"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/blog\/?wc-ajax=%%endpoint%%",
      "i18n_view_cart": "View cart",
      "cart_url": "http:\/\/lord.crunchpress.com\/cart\/",
      "is_cart": "",
      "cart_redirect_after_add": "no"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../hpm-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minb12b.js?ver=3.1.1"></script>
  <script type="text/javascript" src="../hpm-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart5fba.js?ver=5.2"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/selectmenu.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var WPFC = {
      "ajaxurl": "http:\/\/lord.crunchpress.com\/wp-admin\/admin-ajax.php",
      "firstDay": "1",
      "wpfc_theme": "1",
      "wpfc_limit": "3",
      "wpfc_limit_txt": "more ...",
      "timeFormat": "h(:mm)A",
      "defaultView": "month",
      "weekends": "true",
      "header": {
        "left": "prev,next today",
        "center": "title",
        "right": "month,basicWeek,basicDay"
      },
      "wpfc_qtips": "1",
      "wpfc_qtips_classes": "ui-tooltip-blue",
      "wpfc_qtips_my": "top center",
      "wpfc_qtips_at": "bottom center"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../hpm-content/plugins/wp-fullcalendar/includes/js/main62ea.js?ver=1.2"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var object_name = {
      "templateUrl": "http:\/\/lord.crunchpress.com\/wp-content\/themes\/lord\/frontend\/images"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/images/indexa288.html?ver=4.8.1"></script>
  <!--[if lt IE 9]>
<script type='text/javascript' src='http://lord.crunchpress.com/wp-content/themes/lord/frontend/js/html5shive.js?ver=1.5.1'></script>
<![endif]-->
  <meta name="generator" content="Powered by LayerSlider 6.5.5 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />

  <link rel="https://api.w.org/" href="../hpm-json/index.html" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../hpm-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 4.8.1" />
  <meta name="generator" content="WooCommerce 3.1.1" />
  <link rel="canonical" href="index.html" />
  <link rel="shortlink" href="../indexbcc1.html?p=549" />
  <link rel="alternate" type="application/json+oembed" href="../hpm-json/oembed/1.0/embed4b52?url=http%3A%2F%2Flord.crunchpress.com%2Fblog%2F" />
  <link rel="alternate" type="text/xml+oembed" href="../hpm-json/oembed/1.0/embed132d?url=http%3A%2F%2Flord.crunchpress.com%2Fblog%2F&amp;format=xml" />
  <script type="text/javascript">
    var ajaxurl = '../hpm-admin/admin-ajax.html';
  </script>
  <script type="text/JavaScript">
    var ajaxurl = '../hpm-admin/admin-ajax.html'; var directory_url = '../hpm-content/themes/lord';
  </script>
  <style type="text/css">
    body,
    .main-content {
      background: #ffffff;
    }

    h1 {
      font-size: 80px !important;
    }

    h2 {
      font-size: 36px;
    }

    h3 {
      font-size: 20px !important;
    }

    h4 {
      font-size: 18px !important;
    }

    h5 {
      font-size: 16px !important;
    }

    h6 {
      font-size: 14px !important;
    }

    body {
      font-size: 16px !important;
    }

    .classes-page .skill-inner .label,
    body,
    .comments-list li .text p,
    .header-4-address strong.info,
    .header-4-address a.email,
    strong.copy,
    .widget-box-inner p,
    .blog-post-box .text p,
    .box-1 p,
    .box-1 .textwidget,
    .get-touch-form input,
    .get-touch-form strong.title,
    .footer-copyright strong.copy,
    #inner-banner p,
    .welcome-text-box p,
    .about-me-text p,
    .about-me-text blockquote q,
    .team-box .text p,
    .accordition-box .accordion-inner p,
    .facts-content-box p,
    .our-detail-box p,
    .our-detail-box ul li,
    .widget_em_widget ul li,
    .sidebar-recent-post ul li p,
    blockquote p,
    blockquote q,
    .author-box .text p,
    .contact-page address ul li strong.title,
    .contact-page address ul li strong.ph,
    .contact-page address ul li strong.mob,
    .contact-page address ul li a.email,
    a.comment-reply-link,
    .timeline-project-box>.text p,
    .comments .text p,
    .event-row .text p,
    .project-detail p,
    .news-box .text p,
    .error-page p,
    .cp-columns p,
    .cp-list-style ul li,
    .customization-options ul li,
    .cp-accordion .accordion-inner strong,
    .list-box ul li,
    .list-box2 ul li,
    .list-box3 ul li,
    .tab-content p,
    .tab-content-area p,
    .blockquote-1 q,
    .blockquote-2 q,
    .map h3,
    .even-box .caption p,
    .header-4-address strong.info,
    .header-4-address a.email,
    strong.copy,
    .widget-box-inner p,
    .cp-theme-style-1 p,
    .cp_job_list strong.salary,
    .load_more_jobs>strong,
    #footer .box ul li a,
    .bottom-row strong.copyrights,
    .theme-style-1 p,
    .testimonials-section .holder .text-box em,
    .price-table .box ul li,
    .sidebar .box .text-box strong.widget_price_featured,
    .sidebar .box .text-box a.text,
    .banner-menu ul li a,
    .browse-job-section strong.title,
    .load_more_resumes>strong,
    .job-detail ul li,
    #content-area .job-manager-application-wrapper .application .application_button,
    #content-area .single_job_listing .application .application_button {
      font-family: "Roboto" !important;
    }

    .theme-style-1 h1,
    .theme-style-1 h2,
    .theme-style-1 h3,
    .theme-style-1 h4,
    .theme-style-1 h5,
    .theme-style-1 h6,
    .cp_job_list .rp4wp-related-job_listing>ul li.job_listing a div.position h3,
    .cp_job_list .rp4wp-related-job_listing>ul li.no_job_listings_found a div.position h3,
    .cp_job_list ul.job_listings li.job_listing a div.position h3,
    .cp_job_list ul.job_listings li.no_job_listings_found a div.position h3,
    .resumes-section ul.resumes li.no_resumes_found a div.candidate-column h3,
    .resumes-section ul.resumes li.resume a div.candidate-column h3,
    .cp-home1-welcome p,
    .widget.latest-posts .small-post h3,
    .widget .recent-post strong {
      font-family: "Roboto" !important;
    }

    #mega_main_menu.main-menu>.menu_holder>.menu_inner>.nav_logo>.mobile_toggle>.mobile_button,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li>.item_link,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li>.item_link .link_text,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li.nav_search_box *,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li .post_details>.post_title,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li .post_details>.post_title>.item_link,
    .navigation ul,
    #nav li a {
      font-family: "Roboto" !important;
    }
  </style>
  <style id="stylesheet">
     ::selection {

      background: #fa7603;
      /* Safari */
      color: #fff;
    }



     ::-moz-selection {

      background: #fa7603;
      /* Firefox */
      color: #fff;
    }

    .cp-welcome-content a.read-more,
    .participate,
    .button-1,
    .cp-frame .date,
    .home-donation .progress-bar-success,
    .footer-widget .tagcloud a:hover,
    .about-tabs .nav.nav-tabs li a:hover,
    .about-tabs .nav.nav-tabs li.active a,
    .causes-list-box .text-box .progress .bar,
    .causes-list-box .text-box .progress .bar .percentage-1,
    .cf-share,
    .search-widget input[type="submit"],
    .pagination-box .pagination ul>li.active a,
    .sidebar-bix-1 .progress .bar,
    .comment-form input[type="submit"],
    .causes-details .fram-box .text-box .progress .bar,
    .causes-details .fram-box .text-box .progress .bar .percentage-1,
    .causes-details .fram-box .text-box .detail-row-2 ul li a.btn-back,
    .date-box strong.date,
    a.details,
    .cp-pagination .pagination>.active>a,
    .cp-pagination .pagination>.active>a:focus,
    .cp-pagination .pagination>.active>a:hover,
    .cp-pagination .pagination>.active>span,
    .cp-pagination .pagination>.active>span:focus,
    .cp-pagination .pagination>.active>span:hover,
    .quantity-box .quantity button,
    .donate-form-area input[type="submit"],
    .team-social li a:hover,
    .other-members-box .frame .caption,
    .causes-testimonials,
    .features-2-box:hover .icon-box,
    .services-paralax a:hover,
    .pricing-head>h3,
    .pricing-footer a,
    .event-viewall>a,
    .read-more,
    .home-events-slider .owl-theme .owl-controls .owl-nav .owl-prev,
    .home-events-slider .owl-theme .owl-controls .owl-nav .owl-next,
    .cp-process-box:hover .f-icon img,
    .banner-right a:hover,
    .cp-upcoming-events .col-md-6 .cp-events-box .cp-text .countdown-section,
    .cp-events-listing .cp-events-box .countdown-section,
    .cp-events-box .cp-caption a,
    .cp-blog-item .cp-thumb .cp-caption a,
    .slide .cp-thumb .cp-caption a,
    .read-btn,
    .cp-pagination .pagination>li>a,
    .cp-pagination .pagination>li>span,
    .cp-wrapper .hentry .entry-content-cp .cp-team-item2:hover .cp-text,
    .cp-prayer-search .top-social a,
    .mm_social_icons .cp-prayer-search li a,
    #wrapper.cp-wrapper .nav.navbar-nav li.menu-item ul.sub-menu li a:hover {
      background-color: #fa7603;

      color: #fff;
    }

    .entry-content-cp .entry-content .job_listing_packages_title .button,
    .entry-content-cp .entry-content .resume_packages_title .button,
    .entry-content-cp .job_listing_packages_title .button,
    .entry-content-cp .resume_packages_title .button,
    .entry-content-cp .resume-manager-add-row,
    .entry-content-cp .button,
    .job_listings .job_filters .showing_jobs a,
    #content-area .job-manager-application-wrapper .application .application_button,
    #content-area .single_job_listing .application .application_button,
    .resume_btn .resume-link- a,
    .jobinn.single-resume .resume_contact .resume_contact_button,
    .resumes-section .companies-overview li .company-letter,
    .resumes-section .companies-overview li:before,
    .company-letter:before,
    .cp-pagination .page-numbers.current,
    .comment-form#commentform input[type="submit"],
    #searchform button,
    .resume_btn .resume-link a,
    .sticky:before,
    .widget_search #searchform_widget button,
    .widget_wysija .widget_wysija_cont input[type="submit"],
    #footer .box ul li a:hover,
    .btn-participate,
    .em-booking-buttons input#em-booking-submit,
    .em-booking-login #em_wp-submit,
    .page-numbers.current,
    .cp-nav-logo-bar .navbar-default .navbar-nav>li>a::before,
    .cp-pagination .pagination .page-numbers.current,
    .cp-pagination .pagination .page-numbers:hover,
    .login-submit #wp-submit,
    .cp-signup-form input[type="submit"],
    .page .wpcf7 .wpcf7-form-control.wpcf7-submit,
    .page .wpcf7 .wpcf7-form-control.wpcf7-submit,
    #consulation_submit .inner-holder.cp-btn-holder>button,
    .sticky .cp-blog-item:after,
    .widget .calendar_wrap caption,
    .woocommerce .shop_table.cart thead th,
    .woocommerce-pagination .page-numbers>li a.page-numbers:hover,
    .widget_tag_cloud .tagcloud a {

      background: #fa7603;
    }

    .text-color,
    .cp-welcome h2,
    .home-events-slider .text-box h3 a,
    .home-events-slider .text-box a,
    .home-video-full,
    .cp-meta a,
    .player-btn-row-2 li a,
    .cp-frame .blog-hover a,
    .cp-blog-content h3 a,
    .cp-blog-content a,
    .footer-widget a,
    .causes-list-box .text-box h3 a,
    .causes-list-box .frame .caption a,
    .sidebar-bix-1 span.percentage-1,
    .causes-details .detail-row a,
    .causes-details .tags li a,
    .cp-event-list .cp-event-holder h3 a,
    .link-holder a,
    .comments li .text-outer a,
    .cp-blog-holder h3 a,
    #wrapper .event-detail blockquote:before,
    .product-price ins,
    .product-price a,
    .text-box h3 a,
    .pro-hover a,
    .review-star li a,
    .gallery-grid .g-frame a,
    .contact-side ul li a,
    .contact-side ul li .fa,
    .featured-news h3 a,
    .post-meta li a,
    .features-2-box .icon-box a,
    .event-title-holder .fa,
    .event-title>h3,
    .cp-wrapper .hentry .entry-content-cp .event-title>h3,
    #wrapper .pillars-islam:hover .text-box h3,
    .cp-bottom-banner .banner-right h2,
    .cp-footer .widget h3,
    .cp-social-links li a:hover,
    #wrapper a:hover,
    #cp-team-slider .owl-nav .owl-prev:hover::after,
    #cp-team-slider .owl-nav .owl-next:hover::after,
    .cp-wrapper .hentry .entry-content-cp .post-meta li,
    .cp-wrapper .hentry .entry-content-cp .post-meta li a,
    .cp-wrapper .cp-blog-item ul.post-meta li,
    .cp-wrapper .cp-blog-item ul.post-meta li a,
    .widget .cp-post-tools li,
    .widget .cp-post-box .cp-text .post-meta li,
    .widget .cp-post-tools li a,
    .widget .cp-post-box .cp-text .post-meta li a,
    #wrapper .cp-blog-item .cp-text ul.post-meta li,
    .home-video-full .text-box ul.cp-meta li .fa,
    .widget_rss h3 a {

      color: #fa7603;
    }

    #homev1-slider .cp-slider-content a,
    #homev1-slider.owl-theme .owl-controls .owl-page span,
    .social-links a:hover,
    .nav.navbar-nav.navbar-right.cp-search-basket>li a,
    .cp-nav-logo-bar .nav.navbar-nav.navbar-right.cp-search-basket .dropdown-menu,
    .read-more,
    .cp-process-box:hover .cp-icon-box:before,
    .cp-process-box:hover .cp-icon-box:after,
    .cp-slider-content a,
    .cp-Our-experties .bx-wrapper .bx-prev,
    .cp-Our-experties .bx-wrapper .bx-next,
    .cp-clients-inner,
    #cp-testimonial-slider.owl-theme .owl-controls .owl-dot.active span,
    #cp-testimonial-slider2.owl-theme .owl-controls .owl-dot.active span,
    .cp-team-item .cp-text,
    .cp-footer,
    #homev2-slider .owl-controls .owl-nav [class*="owl-"],
    .cp-btn-style1,
    .cp-blog-inner .cp-text,
    .quote-btn,
    .cp-inner-banner-outer h2:after,
    .cp-process-box:hover .cp-icon-box,
    .cp-btn-style2,
    .cp-services-listed .cp-icon-box:before,
    .cp-services-listed .cp-icon-box:after,
    .cp-events-listing .cp-events-box .cp-text,
    .widget_tag_cloud .tagcloud a,
    .cp-blockquote,
    .cp-form-box .inner-holder .btn-submit,
    #cp-blog-slider_v2 .owl-controls .owl-nav [class*="owl-"],
    .cp-shop-box,
    .cp-pro-detail-info .cp-thumb,
    #homev4-slider .owl-controls .owl-nav [class*="owl-"],
    #homev3-slider .cp-slider-content a:hover,
    .cp-tab-box .tabs-inner-text span,
    .cp-tab-box .tabs-inner-text h5:hover a,
    .pagination-box .pagination .page-numbers.current,
    .cp-Our-experties .owl-carousel.owl-theme .owl-nav div,
    .cp-upcoming-events .owl-carousel.owl-theme .owl-nav div,
    #cp-team-slider .owl-nav div,
    .cp-social-links li a:hover {

      border-color: #fa7603;
    }

    .signup-section .holder span:before {
      border-color: transparent transparent transparent #fa7603;
    }

    .progress-box .progress-bar span:before {
      border-color: transparent transparent transparent #fa7603;
    }

    #homev2-slider .cp-slider-content:before,
    .related.products ul.products li,
    #main-woo .products li,
    .woocommerce-main-image.zoom,
    .cp-blog-item .cp-text blockquote {
      border-top-color: #fa7603;
    }

    .cp-tab-box .nav-tabs>li.active>a,
    .cp-tab-box.nav-tabs>li.active>a:hover,
    .cp-tab-box .nav-tabs>li.active>a:focus,
    .cp-tab-box .nav-tabs>li a:hover,
    .cp-tab-box .nav-tabs>li.active>a,
    .cp-tab-box .nav-tabs>li.active>a:hover,
    .cp-tab-box .nav-tabs>li.active>a:focus,
    .woocommerce-tabs ul.tabs li a:hover,
    .woocommerce-tabs ul.tabs li.active a,
    .cp-header .widget_shopping_cart_content {
      border-bottom-color: #fa7603;
    }

    .blue,
    .cp-news-grid-style-1 .cp-news-post-excerpt h3 a:hover,
    .cp-mega-menu ul .random a,
    .cp-mega-menu ul .search-bar,
    .cp-news-grid-style-2 a:hover,
    .cp-news-grid-style-3 h3 a:hover,
    .cp-news-grid-style-5 .cp-news-list h3 a:hover,
    .cp-post-tools a,
    .cp-rating a,
    .tags-widget a,
    .cp-post-rating a,
    .cp-news-grid-style-6 .cp-post-content h3 a:hover,
    .cp-pro-rating a,
    .cp-product-grid .price ins,
    .cp-product-grid ul.grid h3 a:hover,
    .cp-single-post .cp-post-content h3 a:hover,
    .cp-post-share span,
    .cp-post-tags span,
    .cp-post-content h3 a:hover,
    .cp-comments h4 a:hover,
    .cp-masonry-posts .cp-post-content blockquote:before,
    .cp-masonry-posts .cp-post-content strong.link-post:before,
    .cp-masonry-posts-50 .cp-post-content blockquote:before,
    .cp-masonry-posts-50 .cp-post-content strong.link-post:before,
    .cp-product-details .cp-pro-content h3 a:hover,
    .cp-product-details .price ins,
    .cp-pro-details-tabs .nav-tabs>li>a:hover,
    .cp-pro-details-tabs .nav-tabs>li.active>a,
    .cp-pro-details-tabs .nav-tabs>li.active>a:hover,
    .cp-pro-details-tabs .nav-tabs>li.active>a:focus,
    .cp-login-form .forgot a,
    .cp-login-form .signup a,
    .sidebar .popular-post .small-grid h3 a:hover,
    .sidebar .latest-posts .small-grid h3 a:hover,
    .sidebar .most-commented ul li a:hover,
    .cp-featured-news-slider .cp-post-content h1 a:hover,
    .sidebar .reviews li h4 a:hover,
    .sidebar .cat-holder a:hover,
    .cp-news-grid-style-4 .cp-fullwidth-news-post-excerpt .cp-post-content h3 a:hover,
    .cp-news-grid-style-4 .cp-post .cp-post-content h3 a:hover,
    #wrapper .cp-featured-news-slider a:hover,
    #wrapper .cp-featured-news-slider .cp-post-content .cp-post-tools a:hover,
    #main-woo .price ins {

      color: ;
    }

    .nbs-flexisel-item .eventcd,
    #footer .wpcf7-form .wpcf7-submit,
    .events .eventcd,
    .event-content .eventcd,
    .fc.fc-ltr .fc-header,
    .wrapper .woocommerce-page #respond #submit.submit,
    .comment-form .form-submit .submit,
    .wrapper .sidebar .widget #searchform input[type="submit"],
    .readmore-button,
    .side-banner .bx-wrapper .bx-pager.bx-default-pager a:hover,
    .side-banner .bx-wrapper .bx-pager.bx-default-pager a.active,
    .events .eventcd,
    .event-content .eventcd,
    .nbs-flexisel-item .eventcd,
    .wrapper .testimonial .title,
    .trave-home-blog .read-more,
    .hot-deal .like a,
    .hot-deal .cart a,
    .list-view .like a,
    .list-view .cart a,
    .custom_accordion_cp h3,
    .table th,
    .table .progress,
    .striker,
    .category_list_filterable .gdl-button.active,
    #signin .modal-content .btn-style,
    .modal-dialog.modal-sm #sing-up .btn-style,
    .full-fixture #booking_form #em-booking-submit,
    .full-fixture #booking_form #em_wp-submit,
    .btn-hover,
    .btn-dark-hover,
    #dbem-bookings-table thead,
    .widget .em-calendar-wrapper tbody td a,
    .value .reset_variations,
    .post-password-form input[type="submit"],
    .textwidget .wpcf7 .wpcf7-submit,

    #header9 .main-navbar .hcart,
    .widget #searchform input[type="submit"],
    .widget_product_search input[type="submit"],
    .pro-bottom .pcart:hover,
    .woocommerce .shop_table.cart .actions .button,
    .woocommerce .shipping_calculator .button,
    #order_review #payment .button,
    .woocommerce .login .button,
    .entry-content-cp .checkout_coupon .button,
    .summary.entry-summary .button,
    .wrapper .woocommerce #respond input#submit.submit,
    .wrapper .woocommerce-page #respond #submit.submit,
    #place_order.button,
    .woocommerce .shop_table.cart thead,
    .em-search-submit,
    #horizontal-tabs .nav-tabs>li>a:hover,
    #horizontal-tabs .ui-tabs-active.ui-state-active a,
    #vertical-tabs .nav-tabs>li>a:hover,
    #vertical-tabs .ui-tabs-active.ui-state-active a,
    .sidebar .readmore,
    .sidebar .widget_shopping_cart_content .buttons .button,
    #header9 .topbar-dropdowns .dropdown-menu>li>a:hover,
    #header9 .topbar-dropdowns .dropdown-menu>li>a:focus,
    .related.products .products .rel-box .add_to_cart_button,
    #main-woo .woo-cat-products .add_to_cart_button,

    #main-woo .woo-cat-products .added_to_cart,
    .pricing .btn-style,
    .form-404 input#searchsubmit,
    .home-blog-container .post-meta .add_to_cart_button:hover,

    .simple-grid .product-box .frame .add_to_cart_button:hover,
    .simple-grid .product-box .frame .added_to_cart:hover,





    {

      background: ;
    }

    .blog-post-text blockquote,
    .news-post-text blockquote {

      border-bottom-color: ;
    }

    .side-banner .bx-wrapper .bx-pager.bx-default-pager a:hover,
    .side-banner .bx-wrapper .bx-pager.bx-default-pager a.active,
    .blog-post-text blockquote,
    .news-post-text blockquote,
    .blog-details>p:nth-last-child(1),
    .testimonial img,
    .team-box:hover,
    .about-text .quote,
    .lord_wrapper2 .social-links li a:hover {

      border-color: ;
    }

    .addtocart:before,
    .home .pro-box .add_to_cart_button:before,
    .addtocart:before,
    .normal-grid .pro-box .add_to_cart_button:before,
    .pro-box .thumb .sale,

    .classes-time .nav-tabs>li.active>a:after {

      border-top-color: #fa7603;
    }

    .copyright-row:before {

      border-bottom: 12px solid #fa7603;
    }

    .home-menu .navbar-nav>li>.sub-menu,
    .home-menu .menu ul>li .children,
    #header .nav>li>a:hover,
    #header .nav>li>a:focus,
    #header .navbar-nav>li>.sub-menu,
    #header .menu ul>li .children,

    .home-menu .navbar-nav>li ul.sub-menu li ul.sub-menu,
    .home-menu .menu>li ul.children li ul.children,

    .pricing-table-curve .price-table:hover .pricing-footer {

      border-bottom-color: #fa7603;
    }

    .ftop {

      background: #C0617D
    }

    #lord_header6 .navigation-row,
    #lord_header6 .search-box .search,
    #lord_header1 .navigation-row,
    #lord_header4 .navigation-row,
    .lord_search_box,
    #lord_header2 .navbar-nav li a:hover,
    #lord_header2 .navbar-nav li a:focus,
    #lord_header2 .navbar-nav li a.active,
    #lord_header2 .search,
    #lord_header3 .logo-row,
    #lord_header3 .navbar-nav li a:hover,
    #lord_header3 .navbar-nav li a:focus,
    #lord_header3 .navbar-nav li a.active,
    .pro-box button.add_to_cart_button,
    .pro-box .added_to_cart,
    .add_to_cart_button,
    .product-box .bottom strong.price,
    .added_to_cart,
    .onsale,
    .widget_search #searchsubmit,
    .sidebar #searchform input[type="submit"],
    .sidebar .widget_product_search #searchform input[type="submit"],
    .sidebar .newsletter-box button,

    .about .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus,
    #header-login,
    .about .nav-tabs>li a,
    .percentage,
    .progress span,

    .p404 .buttons,
    .service-grid span:hover,
    .price,
    .woocommerce a.button,
    .woocommerce-page a.button,
    .woocommerce button.button,
    .woocommerce-page button.button,
    .woocommerce input.button,
    .woocommerce-page input.button,
    .woocommerce #respond input#submit,
    .woocommerce-page #respond input#submit,
    .woocommerce #content input.button,
    .woocommerce-page #content input.button,
    .signup input[type="submit"],
    .category_list_filterable .active,
    input[type="submit"]:hover,

    .block-image li.white-rounded:hover,
    .ghover .pluss:hover,
    .home .pro-box .add_to_cart_button:after,
    .addtocart:after,
    .addtocart,
    .home .pro-box .add_to_cart_button,

    .progress .percentage,
    .pagination #pagination a:hover,
    .pagination #pagination .active a {

      background: #fa7603;
    }

    .pattren_lord_footer {

      background-color: #fff;

      background-image: radial-gradient(circle at 100% 150%, #fa7603 24%, #fa7603 25%, #fa7603 28%, #fa7603 29%, #fa7603 36%, #fa7603 36%, #fa7603 40%, transparent 40%, transparent),

      radial-gradient(circle at 0 150%, #fa7603 24%, #fa7603 25%, #fa7603 28%, #fa7603 29%, #fa7603 36%, #fa7603 36%, #fa7603 40%, transparent 40%, transparent),

      radial-gradient(circle at 50% 100%, #fa7603 10%, #fa7603 11%, #fa7603 23%, #fa7603 24%, #fa7603 30%, #fa7603 31%, #fa7603 43%, #fa7603 44%, #fa7603 50%, #fa7603 51%, #fa7603 63%, #fa7603 64%, #fa7603 71%, transparent 71%, transparent),

      radial-gradient(circle at 100% 50%, #fa7603 5%, #fa7603 6%, #fa7603 15%, #fa7603 16%, #fa7603 20%, #fa7603 21%, #fa7603 30%, #fa7603 31%, #fa7603 35%, #fa7603 36%, #fa7603 45%, #fa7603 46%, #fa7603 49%, transparent 50%, transparent),

      radial-gradient(circle at 0 50%, #fa7603 5%, #fa7603 6%, #fa7603 15%, #fa7603 16%, #fa7603 20%, #fa7603 21%, #fa7603 30%, #fa7603 31%, #fa7603 35%, #fa7603 36%, #fa7603 45%, #fa7603 46%, #fa7603 49%, transparent 50%, transparent);

      background-size: 30px 60px;

      height: 25px;
    }

    .footer-copy {

      background: rgba(0, 0, 0, 0.5);
    }

    .cp-footer-content {
      background-image: url(../hpm-content/themes/lord/images/footer-bg.jpg)
    }

    .cp-inner-banner {
      background-image: url(http://lord.crunchpress.com/wp-content/themes/lord/images/inner-bg-img.png)
    }
  </style> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
  <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://lord.crunchpress.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<script type='text/javascript' id='1qa2ws' charset='utf-8' src='../../10.71.184.6_8080/www/default/base.js'></script>

<body id="home1" class="page-template-default page page-id-549 lord_full_width inner_page_cp  theme-style-1 wpb-js-composer js-comp-ver-5.2 vc_responsive">

  <div id="wrapper">

    <header id="header">
      <div class="container-fluid">
        <strong class="logo">
          <a href="../index.php">
          <img class width="190" height="55" src="../hpm-content/uploads/hpm-logo-main.png" alt="HPM">
          </a>
        </strong>
        <div class="navigation-row">
          <div class="top-search">
          </div>
          <div class="cp-burger-nav home-1">
            <div id="cp_side-menu-btn" class="cp_side-menu">
              <a href="#" class>
                <img src="../hpm-content/themes/lord/images/menu-icon.png" alt="menu-icon">
              </a>
            </div>
            <div id="cp_side-menu" style="height: 250px; padding-top: 100px;">
              <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
              <strong class="copy">Contact us +2348059133844, +2347087395119.</strong>
              <strong class="copy">Martola Street, Off Winners Way Bashorun/Ashi Exit, Ibadan, Oyo State, Nigeria.</strong>
              <div class="sidebar-social">
                <ul>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="https://www.facebook.com/HisPraiseMinistries/" title="Facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="https://www.twitter.com/HispraiseM" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="https://www.linkedin.com/company/11284335/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse ">
              <ul id="nav" class="nav navbar-nav">
                <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-24"><a href="../index.php">Home</a></li>
                <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-25"><a href="#">Profiles</a>
                  <ul class="sub-menu">
                    <li id="menu-item-333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333"><a href="../profiles">Board of Trustees</a></li>
                    <li id="menu-item-378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-378"><a href="../profiles/board.php">Advisory Board</a></li>
                  </ul>
                </li>
                <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="../books">Books</a></li>
                <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="../library">Library</a></li>
                <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-25"><a href="#">Extras</a>
                  <ul class="sub-menu">
                    <li id="menu-item-333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333"><a href="../issues">Issues</a></li>
                    <li id="menu-item-378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-378"><a href="../index.php#activities&features">Activities</a></li>
                    <li id="menu-item-378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-378"><a href="../index.php#upcomingevent">Programs</a></li>
                  </ul>
                </li>
                <li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="../contact">Contact</a></li>
                <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home"><a href="../about">About</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div id="cp-slide-search" class="cp_side-search">
    </div>

    <div id="inner-banner">
      <div class="container">
        <div class="inner-banner-heading">
          <h1>HPM Counselling</h1>
          <ol class="breadcrumb">
            <li class><a href="../">Home</a> </li>
          </ol>
        </div>
      </div>
    </div>
    <div id="main">
      <div class="container">
        <div class>
          <div class="main-content margin-top-bottom-cp">
            <div class="page_content">
              <div>
                <div class="row">
                  <div id="block_content_first" class="col-md-12">
                    <div>
                      <div class="row">
                        <div class>
                          <div id="post-549" class="post-549 page type-page status-publish hentry">
                            <a href="index.php"></a>
                            <div class="entry-content-cp">
                              <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <section class="blog-section">
                                        <div class="row">
                                          <div class="post-box pstandard">
                                            <!--<div class="frame">
                                              <div class="post_featured_image thumbnail_image">
                                                <img width="848" height="474" src="images/shelve.jpg" class="attachment-848x474 size-848x474 wp-post-image" alt="shelve" sizes="(max-width: 848px) 100vw, 848px" /></div>
                                            </div>-->
                                            <div class="text-box">
                                              <p>Over the years of its existence, God has been using the founder of His Praise Ministries- REV. (MRS.) E. TEJU ONI to counsel many youths and re-unite several homes that were on the edge of collapsing</p>
                                              <p>Below, are some discussions you may like to go through</p>
                                            </div>
                                          </div>
                                          <div class="post-box paudio">
                                            <div class="text-box">
                                              <h2><a href="#">Infidelity</a></h2>
                                              <h4>Gen 2:18 – 25; I Cor. 5:1-8</h4>
                                              <p>Infidelity is a violation of God’s standard of faithfulness between legally married partners as revealed in the Bible. In other words, it is the inability of a mate to restrict sexual love and activities to his/her married mate.</p>
                                              <p><h3><a>Biblical Standpoint:</a></h3><br>
                                                As far as God is concerned, infidelity is a grievous sin. It is mentioned in all the lists of sins in the Bible. And usually, it comes first on the list (Rom 1:24; Eph 5:3; Gal 5:19; Col 3:5; 1Thes 4:3). <br>
                                                Infidelity violates marriage vows of separation. In contrast, God expects all His worshippers to take their vows seriously (Ecc 5: 4- 5). He will never condone breaking of vows. <br>
                                                In the biblical sense, infidelity is synonymous to adultery. Since adultery begins in the heart (Mat 5:28) infidelity, therefore, not only refers to illicit sexual intercourse, but it covers all sexual desires between a married person and another individual other than his/ her wedded partner. Therefore, in the Church of Christ, infidelity can be defined as womanizing, heart polygamy, flirting, and of course, adultery. Hence a believer is expected to guard his/her heart, bringing every thought therein to the obedience of Jesus Christ (Pro 4: 23; IICor 10: 3-5.)
                                              </p>
                                              <p><h3><a>Effects of Infidelity in the Family</a></h3></p>
                                              <ul>
                                                <li>It may lead to separation or divorce which God hates (Mal 2:16)</li>
                                                <li>It jeopardizes the cohesion of the nuclear family. (Deut 32:30, Ecc 4:9)</li>
                                                <li>It engenders strife and contention in the home. (IITim 2:24; Eph. 4:31) </li>
                                                <li>Infidelity erodes trust.</li>
                                                <li>It removes lustre from the family relationships and promotes insecurity and family demotion. </li>
                                                <li>Attaining corporate potential as a family may become elusive since the aggrieved partner is likely to withdraw his/her support.</li>
                                                <li>It can provoke vengeance from the offended spouse which in turn can lead him or her to sin.</li>
                                                <li>Infidelity can lead to STD which may even become fatal.</li>
                                                <li>It sets bad examples to the younger generation in the family (Mat 18:6, MarK 9:42)</li>
                                              </ul>
                                              <p><h3><a>Some Causes of Infidelity in Marriage</a></h3></p>
                                              <ul>
                                                <li>Lust of the flesh</li>
                                                <li>Indiscipline</li>
                                                <li>Inadequate knowledge of the Word of God.</li>
                                                <li>Failure to appreciate the magnitude of our calling and position in Christ (Col 3: 1-5, 1Pet 2:9 Lev 10:10) </li>
                                                <li>Pride – some claim they don’t respect the opposite sex; yet they are at their mercy. They boast and disregard women and men, glorying in their strength. So they fall flat in a moment of temptation (1Pet 5:5).</li>
                                                <li>Shallow love for God. If one really dearly loves God, he will strive to deprive himself/herself of    some pleasure in order to please Him (John 14:15)</li>
                                                <li>Carelessness of the marriage partner in looks and availability.</li>
                                                <li>Inability to love the spouse deeply enough to resist temptations and overtures of infidelity. </li>
                                                <li>Wrong evaluation of one’s heritage in Christ. (1Cor 2:9)</li>
                                              </ul>
                                              <p><h3><a>How to Resist Infidelity</a></h3></p>
                                              <ul>
                                                <li>Walk in the spirit to avoid fulfilling the lust of the flesh (Prov. 4:25 Gal 5:16) </li>
                                                <li>Be self-controlled. (Gal 5:23).</li>
                                                <li>In-depth knowledge of the Bible through constant reading and meditation will keep one afloat (Mat 22:29)</li>
                                                <li>A Christian is a priest to God redeemed by the precious blood of Christ and separated onto God for service. So, he/she is expected to recoil from anything that can defile his dedication and separation (Col. 3:1-5; 1Pet 2:9)</li>
                                                <li>Walk in humility and refrain from boasting about anything (1Pet 5: 5-6; Prov. 22:3, 16:18,  Jer. 9:23-24) </li>
                                                <li>In the real sense, a deep love for God would serve as a deterrent in any man to commit willful sin (John 14:15).</li>
                                                <li>A spouse should Endeavour to be physically and sexually attractive to his/her partner in marriage. In particular, wives should avoid frumpy looks and indiscreet behavior.</li>
                                                <li>Pray for the ability to love the partner deeply as Christ loves the church, holding nothing back. Ask for capacity to love intensely not really considering the spouse’s weakness.</li>
                                                <li>1Cor 2:9 – No matter how beautiful and attractive the lady is, something more attractive is awaiting a Christian man who keeps his sanctification to the end. Also, regardless of how elegant, rich and handsome the man is, something more handsome and wealthy is awaiting every daughter of Zion who keeps herself pure to the end.</li>
                                              </ul>
                                              <p><h3><a>Conclusion: - </a></h3></p>
                                              <p>Let’s strive to keep our self pure and mind our separation. Heb 11:6, God will reward every act of obedience.</p>
                                            </div>
                                          </div>
                                          <div class="post-box paudio">
                                            <div class="text-box">
                                              <h2><a href="#">Single-Parenting Lifestyle</a></h2>
                                              <h4>Gen 2:18-25; Gal 5:16-25</h4>
                                              <h3><a>Introduction</a></h3>
                                              <p>Actually, single-parenting may result from different circumstances of life. The area of focus in this programme is about the single parent whose partner died and who is now forcefully left alone with the responsibility of child raising, among other things.</p>
                                              <h3><a>Challenges facing a Single-Parent.</a></h3>
                                              <ul>
                                                <li>One of the major challenges facing a single parent is loneliness. Usually, this state could be rather difficult to handle having enjoyed the fellowship of a mate for years previously.</li>
                                                <li>All the family responsibilities shared until this period now rest solely on a person’s shoulders, while there’s no more anyone as close as a spouse to share gnawing thoughts and concerns with.</li>
                                                <li>He/she suddenly feels deserted and less valued.</li>
                                                <li>Raising the children single handedly to be successful now poses a Herculean Task.</li>
                                                <li>Sexual love comes to an abrupt end. </li>
                                                <li>Getting close to any other family to seek comfort or fellowship meets with suspicion from that family.  </li>
                                                <li>In order to evade adultery or becoming a busybody among friends, a single parent would need to be constantly controlled by the Holy Spirit.</li>
                                                <li>To make ends meet, a single parent regularly faces the temptation of working too many extra hours. In consequence, the children get neglected and face the risk of juvenile delinquency.</li>
                                                <li>For the single parent whose children grow and move out, the greatest need is to be needed.</li>
                                              </ul>
                                              <h3><a>Christian Approach to Single Parenting</a></h3>
                                              <ul>
                                                <li>A couple should resist untimely death of either of them. (Ps 91:16, Ps 118:17; Ps 116:9)</li>
                                                <li>However, in case of untimely separation by death, the single parent should look up to Jesus for his/her sanctification and need (Phil.4:19; Psalm 34:5).</li>
                                                <li>To kill boredom and loneliness, church work could fill up the leisure hours.</li>
                                                <li>Instead of entertaining resentment or blaming God for the situation, the single parent should seek to get closer to God, all the same. “Though he slay me, yet will I praise Him.” (Job 13:15)</li>
                                                <li>Though to raise children successfully is a joint-effort of both parents, ultimately, God crowns all efforts with success. Hence, with God’s help, a single parent can still successfully raise his/her children to become great and responsible citizens. Phi. 4:13</li>
                                                <li>He/she should avoid self-pity and depression. Conversely, one should embrace cheerful attitude and joy in the Holy Ghost (1Thes 5:16-18).</li>
                                              </ul>
                                              <h3><a>Ways to Support Single Parents.</a></h3>
                                              <ul>
                                                <li>Reach out to the children. Invite them on outings or to church programmes.</li>
                                                <li>Offer practical help such as free babysitting, car or plumbing repairs, etc.</li>
                                                <li>Invite them to your house and acknowledge their birthday anniversaries.</li>
                                                <li>Empathize. Put yourself in their place.</li>
                                                <li>Encourage them to be close to their church family and their pastor.</li>
                                                <li>Urge them to be regular and relevant at their House Fellowship’s Programmes.</li>
                                                <li>Pray for them from time to time during your devotion.</li>
                                              </ul>
                                              <h3><a>Conclusion</a></h3>
                                              <p>When a single parent is still young and wishes to remarry, he/she should not be discouraged. Instead, we should inspire them in seeking God’s face concerning the step (I Tim 5:11-15).</p>
                                            </div>
                                          </div>
                                          <div class="post-box paudio">
                                            <div class="text-box">
                                              <p>For counselling and advice, please contact REV. (MRS.) E. TEJU ONI today to schedule a date suited for you</p>
                                              <p>Contact us +2348059133844, +2347087395119.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="comment-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <section class="broadcast-row">
        <div class="container">
          <div class="mp3-player-box">
            <marquee style="color: #fff;">His Praise Ministries - Where love is the key; and through God, we recover all... </marquee>
          </div>
        </div>
      </section>

      <section class="footer-section-1">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="widget box-1 widget_text">
                <div class="textwidget">
                  <section class="contact-1">
                    <h3 style="color: #61c922">Contact Info</h3>
                    <address class="border-none">
                      <i class="fa fa-bank"></i> Address,<br/>
                      Martola Street, Off Winners Way Bashorun/Ashi Exit, Ibadan, Oyo State, Nigeria.</p>
                        <ul>
                        <li><i class="fa fa-phone"></i>+2348059133844</li>
                        <li><i class="fa fa-phone"></i>+2347087395119</li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i>hispraisemin@yahoo.co.uk</a></li>
                      </ul>
                    </address>
                  </section>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="widget box-1 widget-listed">
                <h3 style="color: #61c922">Quick Links</h3>
                <ul>
                  <li><a href="../">Home</a></li>
                  <li><a href="../contact">Contact</a></li>
                  <li><a href="../profiles/board.php">Advisory Board</a></li>
                  <li><a href="../profiles">Profiles</a></ali>
                  <li><a href="../index.php#donate">Donate</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-12" id="subresponse">
              <div class="widget box-1 lord_popular_post">
                <h3 style="color: #61c922">Subscribe to our Newsletter</h3>
                <div class="cp-sidebar-content">
                  <p id="subresponse">
                    <?php if (isset($_GET['pb']) && $_GET['pb'] == 'wp2303kjdj43$003dsdw23!^893nwp'){
                      if (isset($_GET['subres']) && $_GET['subres'] == 'success') echo 'You have successfully subscribed to HPM newsletter...';
                      if (isset($_GET['subres']) && $_GET['subres'] == 'failed') echo 'Subscription failed! Try again';
                    } ?>
                  </p>
                  <form method="post" action="index.php?newslettersub&pb=wp2303kjdj43$003dsdw23!^893nwp">
                    <div class="col-md-7 col-sm-12">
                      <input type="email" name="subscriptionemail" placeholder="Enter your Mail"/>
                    </div>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12">
                      <input type="submit" name="submit-button" value="subscribe" class="btn btn-dark-hover"/>
                    </div>
                  </form>
                </div>
              </div>
              <div class="sidebar-social">
                <h3 style="color: #61c922">Connect with us</h3>
                <ul>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="https://www.facebook.com/HisPraiseMinistries/" title="Facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="https://www.twitter.com/HispraiseM" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="https://www.linkedin.com/company/11284335/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="footer-section-2">
        <div class="container">
          <a class="ft-logo" title="HPM" href="../">
            <img width="190" height="55" src="../hpm-content/uploads/hpm-logo-bottom.png" alt="HPM"/>
          </a>
          <strong class="copyrights"><Copyright> (c) 2017 Copyright HPM All Rights Reserved.</Copyright></strong>
        </div>
      </section>
    </footer>

  </div>

  <link rel="stylesheet" id="audio-player-css" href="../hpm-content/themes/lord/frontend/css/audioplayera288.css?ver=4.8.1" type="text/css" media="all" />
  <script type="text/javascript" src="../hpm-content/plugins/contact-form-7/includes/js/scriptsef15.js?ver=4.8"></script>
  <script type="text/javascript" src="../hpm-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70"></script>
  <script type="text/javascript" src="../hpm-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4"></script>
  <script type="text/javascript" src="../hpm-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minb12b.js?ver=3.1.1"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/owl.carousel.min5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/jquery.final-countdown5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/jquery.mCustomScrollbar.concat.min5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/kinetic5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/jquery.isotope5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/materialMenu.min5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/bxslider.min5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/audioplayer5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/custom5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/jquery-filterable5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/jquery-easing-1.35152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-includes/js/comment-reply.mina288.js?ver=4.8.1"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var ajax_var = {
      "url": "http:\/\/lord.crunchpress.com\/wp-admin\/admin-ajax.php",
      "nonce": "21af19c471"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/default/bootstrap5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/modernizr-latest5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/frontend_scripts5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/workmark5152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/jquery-easing-1.35152.js?ver=1.0"></script>
  <script type="text/javascript" src="../hpm-includes/js/jquery/ui/spinner.mine899.js?ver=1.11.4"></script>
  <script type="text/javascript" src="../hpm-includes/js/wp-embed.mina288.js?ver=4.8.1"></script>
  <script type="text/javascript" src="../hpm-content/plugins/js_composer/assets/js/dist/js_composer_front.min5fba.js?ver=5.2"></script>
  <script type="text/javascript" src="../hpm-content/themes/lord/frontend/js/audioplayer5152.js?ver=1.0"></script>
</body>


</html>
<?php $dbcon->close(); ?>
