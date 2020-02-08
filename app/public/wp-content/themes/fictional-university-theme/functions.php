<?php 

function university_files() {
    // Linking style.css file
    wp_enqueue_style("university_main_styles", get_stylesheet_uri());
}

// Calling the above function to actually work
add_action("wp_enqueue_scripts", "university_files");

?>