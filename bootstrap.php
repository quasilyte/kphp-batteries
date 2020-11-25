<?php

use \KPHP\Batteries;

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
if (!function_exists('is_a')) {
    function is_a($object, string $class_name): bool {
        return Batteries::is_a($object, $class_name);
    }
}
