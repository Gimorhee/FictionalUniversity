<?php 

    function university_files() {
        // Scripting JS file
        wp_enqueue_script("main-university-js", get_theme_file_uri("/js/scripts-bundled.js"), NULL, microtime(), true);
        
        // Linking style.css file
        wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
        wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        wp_enqueue_style("university_main_styles", get_stylesheet_uri(), NULL, microtime());
    }

    // Calling the above function to actually work
    add_action("wp_enqueue_scripts", "university_files");


    // Setting the title-tags
    function university_features() {
        register_nav_menu("headerMenuLocation", "Header Menu Location");
        add_theme_support("title-tag");
    }

    // Naming the title of the website page
    add_action("after_setup_theme", "university_features");

    define("WP_ALWAYS_RECOMPILE", true);
?>