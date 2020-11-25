<?php

namespace KPHP;

class Batteries {
    public static function reset(&$array) {
        if ($array) {
            return array_first_value($array);
        }
        return false;
    }

    public static function str_starts_with(string $haystack, string $needle): bool {
        return 0 === strncmp($haystack, $needle, strlen($needle));
    }

    public static function is_a($object, string $class_name): bool {
        // We can't check for parents since there is no class_parents() in KPHP
        // and instenace of operator doesn't work with variables...
        if (self::str_starts_with($class_name, '\\')) {
            $class_name = (string)substr($class_name, 1);
        }
        return get_class($object) === $class_name;
    }
}
