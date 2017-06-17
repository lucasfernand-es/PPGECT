<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet"-->

    <!--script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <style type="text/css">

        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

        /* fixes potential theme css conflict */
        .acf-map img {
            max-width: inherit !important;
        }

    </style>
    <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDngp_jP8nhYJlXggT7WKsY-YtuxFa2MQ4"></script-->
    <script type="text/javascript">

        (function($) {

            /*
             *  new_map
             *
             *  This function will render a Google Map onto the selected jQuery element
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	$el (jQuery element)
             *  @return	n/a
             */
            /*
            function new_map( $el ) {

                // var
                var $markers = $el.find('.marker');


                // vars
                var args = {
                    zoom		: 16,
                    center		: new google.maps.LatLng(0, 0),
                    mapTypeId	: google.maps.MapTypeId.ROADMAP
                };


                // create map
                var map = new google.maps.Map( $el[0], args);


                // add a markers reference
                map.markers = [];


                // add markers
                $markers.each(function(){

                    add_marker( $(this), map );

                });


                // center map
                center_map( map );


                // return
                return map;

            }

            /*
             *  add_marker
             *
             *  This function will add a marker to the selected Google Map
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	$marker (jQuery element)
             *  @param	map (Google Map object)
             *  @return	n/a
             */
/*
            function add_marker( $marker, map ) {

                // var
                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

                // create marker
                var marker = new google.maps.Marker({
                    position	: latlng,
                    map			: map
                });

                // add to array
                map.markers.push( marker );

                // if marker contains HTML, add it to an infoWindow
                if( $marker.html() )
                {
                    // create info window
                    var infowindow = new google.maps.InfoWindow({
                        content		: $marker.html()
                    });

                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function() {

                        infowindow.open( map, marker );

                    });
                }

            }

            /*
             *  center_map
             *
             *  This function will center the map, showing all markers attached to this map
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	map (Google Map object)
             *  @return	n/a
             */

/*
            function center_map( map ) {

                // vars
                var bounds = new google.maps.LatLngBounds();

                // loop through all markers and create bounds
                $.each( map.markers, function( i, marker ){

                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                    bounds.extend( latlng );

                });

                // only 1 marker?
                if( map.markers.length == 1 )
                {
                    // set center of map
                    map.setCenter( bounds.getCenter() );
                    map.setZoom( 16 );
                }
                else
                {
                    // fit to bounds
                    map.fitBounds( bounds );
                }

            }

            /*
             *  document ready
             *
             *  This function will render each map when the document is ready (page has loaded)
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	5.0.0
             *
             *  @param	n/a
             *  @return	n/a
             */
// global var
            /*
            var map = null;

            $(document).ready(function(){

                $('.acf-map').each(function(){

                    // create map
                    map = new_map( $(this) );

                });

            });

            google.maps.event.trigger(map, 'resize');
        })(jQuery);
    </script>
</head>

<body <?php body_class(); ?>>
<div class="outer" id="top">
    <?php do_action('cpotheme_before_wrapper'); ?>
    <div class="wrapper">
        <div id="topbar" class="topbar">
            <div class="container">
                <?php do_action('cpotheme_top'); ?>
                <div class="clear"></div>
            </div>
        </div>
        <header id="header" class="header">
            <div class="container">

                <?php do_action('cpotheme_header'); ?>
                <ul id="menu-main" class="menu-main">
                    <?php get_template_part('element', 'page-header-menu'); ?>
                </ul>


                <script>var _wpCustomizePreviewNavMenusExports = {"navMenuInstanceArgs":{"cbf8799baff88b4bbe2dccea49e5bd15":{"after":"","before":"","can_partial_refresh":true,"container":false,"container_class":"","container_id":"","depth":"4","echo":true,"fallback_cb":"cpotheme_default_menu","item_spacing":"preserve","items_wrap":"<ul id=\"%1$s\" class=\"%2$s\">%3$s<\/ul>","link_after":"","link_before":"","menu":"","menu_class":"menu-main","menu_id":"menu-main","theme_location":"main_menu","walker":"","args_hmac":"cbf8799baff88b4bbe2dccea49e5bd15"}}};</script>
                <div id="menu-mobile-open" class=" menu-mobile-open menu-mobile-toggle"></div>
                <div id="menu-mobile-close" class="menu-mobile-close menu-mobile-toggle"></div>

                <ul id="menu-mobile" class="menu-mobile">
                    <?php get_template_part('element', 'page-header-menu'); ?>
                </ul>
                <div class='clear'></div>

            </div>
        </header>
        <?php do_action('cpotheme_before_main'); ?>
        <div class="clear"></div>

