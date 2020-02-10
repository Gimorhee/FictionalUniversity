<?php 

    function university_post_types() {
        // Built-in WP function which registers new Post type in Admin page
        register_post_type("event", array(
            "supports" => array("title", "editor", "excerpt"),
            "rewrite" => array("slug" => "events"),
            // Tells WP that this post type has archives
            'has_archive' => true,
            // Setting the new Post type to public
            "public" => true,
            // Setting the name of the Post type to "Events"
            "labels" => array(
                "name" => "Events",
                "add_new_item" => "Add New Event",
                "edit_item" => "Edit Event",
                "all_items" => "All Events",
                "singular_name" => "Event"
            ),
            // Chaning the menu icon of the newly added post type in Admin page
            "menu_icon" => "dashicons-calendar-alt"
        ));
    }
    // Adding New Post Type in Admin page
    add_action("init", "university_post_types");

?>