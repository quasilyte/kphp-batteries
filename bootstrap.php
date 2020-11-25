<?php

use \KPHP\Batteries;

if (!function_exists('trigger_error')) {
    function trigger_error(string $error_msg, $error_type = 0) {
        return Batteries::trigger_error($error_msg, $error_type);
    }
}

if (!function_exists('extension_loaded')) {
    function extension_loaded(string $name): bool {
        return Batteries::extension_loaded($name);
    }
}

if (!function_exists('reset')) {
    function reset(&$array) {
        return Batteries::reset($array);
    }
}

if (!function_exists('str_starts_with')) {
    function str_starts_with(string $haystack, string $needle): bool {
        return Batteries::str_starts_with($haystack, $needle);
    }
}

if (!function_exists('str_ends_with')) {
    function str_ends_with(string $haystack, string $needle): bool {
        return Batteries::str_ends_with($haystack, $needle);
    }
}

if (!function_exists('is_a')) {
    function is_a($object, string $class_name): bool {
        return Batteries::is_a($object, $class_name);
    }
}
