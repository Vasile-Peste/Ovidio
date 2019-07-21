<?php

class WordPressUtilities {
    public static function get_post_first_paragraph (bool $strip = true, int $max = 200): string {
        $content = get_the_content();

        if (!strpos($content, "</p>")) {
            return false;
        }

        $paragraph = substr($content, 0, strpos($content, "</p>"));

        if ($strip) {
            $paragraph = strip_tags($paragraph);
        }

        if (strlen($paragraph) > $max) {
            $paragraph = substr($paragraph, 0, $max);
        }

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