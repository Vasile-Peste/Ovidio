<?php
require_once "utilities/wordpress_utilities.php";

function render (string $template_file_name): void {
    require "template/" . $template_file_name . ".php";
}

add_action("widgets_init", function () {
    register_sidebar([
        "id" => "before-post",
        "name" => "Before Posts Widget",
        "description" => __("Widget placed before every post", "text_domain") . ".",
    ]);
    
    register_sidebar([
        "id" => "after-post",
        "name" => "After Posts Widget",
        "description" => __("Widget placed after every post", "text_domain") . ".",
    ]);
    
    register_sidebar([
        "id" => "before-footer",
        "name" => "Before Footer Widget",
        "description" => __("Widget placed before the footer", "text_domain") . ".",
    ]);
    
    register_sidebar([
        "id" => "after-footer",
        "name" => "After Footer Widget",
        "description" => __("Widget placed after the footer", "text_domain") . ".",
    ]);

    register_sidebar([
        "id" => "body-end",
        "name" => "End of body Widget",
        "description" => __("Widget placed right before the end of the body tag", "text_domain") . ".",
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

function disable_emoji_icons (): void {
    remove_action("admin_print_styles", "print_emoji_styles");
    remove_action("wp_head", "print_emoji_detection_script", 7);
    remove_action("admin_print_scripts", "print_emoji_detection_script");
    remove_action("wp_print_styles", "print_emoji_styles");
    remove_filter("wp_mail", "wp_staticize_emoji_for_email");
    remove_filter("the_content_feed", "wp_staticize_emoji");
    remove_filter("comment_text_rss", "wp_staticize_emoji");
}

add_action("init", "disable_emoji_icons");
add_filter("comment_form_default_fields", "comment_form_disable_comment_url");
show_admin_bar(false);