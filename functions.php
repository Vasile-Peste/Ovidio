<?php

require_once "business/utilities/wordpress-utilities.php";

add_action("widgets_init", function () {
    register_sidebar([
        "id" => "before-post",
        "name" => "Before Posts Widget",
        "description" => __("Widgets placed before every post", "text_domain") . ".",
    ]);
    
    register_sidebar([
        "id" => "after-post",
        "name" => "After Posts Widget",
        "description" => __("Widgets placed after every post", "text_domain") . ".",
    ]);
    
    register_sidebar([
        "id" => "before-footer",
        "name" => "Before Footer Widget",
        "description" => __("Widgets placed before the footer", "text_domain") . ".",
    ]);
    
    register_sidebar([
        "id" => "after-footer",
        "name" => "After Footer Widget",
        "description" => __("Widgets placed after the footer", "text_domain") . ".",
    ]);
});

add_action("after_setup_theme", function () {
    register_nav_menus([
        "header_left_column" => "Header Left Column",
        "footer_first_column" => "Footer First Column",
        "footer_second_column" => "Footer Second Column",
        "footer_third_column" => "Footer Third Column",
        "footer_fourth_column" => "Footer Fourth Column",
    ]);
});

remove_action("wp_head", "wp_generator");
remove_action("wp_head", "wlwmanifest_link");
remove_action("wp_head", "rsd_link");

function comment_form_disable_comment_url ($fields) {
	unset($fields["url"]);
	
	return $fields;
}

add_filter("comment_form_default_fields", "comment_form_disable_comment_url");

show_admin_bar(false);