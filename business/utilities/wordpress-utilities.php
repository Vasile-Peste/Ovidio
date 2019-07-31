<?php

class WordPressUtilities {
    public static function get_post_first_paragraph (int $max = 200): string {
        $content = get_the_content();
        $first_paragraph_start_position = strpos($content, "<p>");
        // "<p>".length = 3
        $second_paragraph_start_position = strpos($content, "<p>", $first_paragraph_start_position + 3);

        if (!$first_paragraph_start_position) {
            return false;
        }

        $paragraph = substr($content, $first_paragraph_start_position, strpos($content, "</p>"));
        $paragraph = strip_tags($paragraph);

        if (strpos($paragraph, "TL;DR:") === 0) {
            if (!$second_paragraph_start_position) {
                return false;
            }

            $paragraph = substr($content, $second_paragraph_start_position, strpos($content, "</p>"));
            $paragraph = strip_tags($paragraph);
        }

        if (strlen($paragraph) > $max) {
            $paragraph = substr($paragraph, 0, $max);
        }

        $paragraph = trim($paragraph);
        $paragraph = trim($paragraph, ":;");
        $last_element = substr($paragraph, -1);

        if (!in_array($last_element, array(".", "!", "?"), true)) {
            $paragraph .= "…";
        }

        return $paragraph;
    }

    public static function get_public_url (): string {
        return get_template_directory_uri () . "/public";
    }

    public static function get_css_url (): string {
        return self::get_public_url() . "/assets/css";
    }

    public static function get_js_url (): string {
        return self::get_public_url() . "/assets/js";
    }

    public static function get_images_url (): string {
        return self::get_public_url() . "/assets/images";
    }
}