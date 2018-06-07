<?php

//Add Javascript
wp_enqueue_script( 'velocity-js', get_bloginfo('stylesheet_directory').'/assets/js/jquery.velocity.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'smoothstate-js', get_bloginfo('stylesheet_directory').'/assets/js/jquery.smoothState.min.js', array( 'jquery' ), '0.5.2', true );
wp_enqueue_script( 'waypoint-js', get_bloginfo('stylesheet_directory').'/assets/js/jquery.waypoints.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'script-js', get_bloginfo('stylesheet_directory').'/assets/js/script.js', array( 'jquery' ), '1.0.0' );

add_filter("gform_confirmation_anchor", create_function("","return false;"));
add_filter( 'gform_validation_message', 'change_message', 10, 2 );
