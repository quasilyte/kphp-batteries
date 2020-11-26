<?php

namespace KPHP;

class Batteries {
    public static function pathinfo(string $path, int $options = PATHINFO_DIRNAME|PATHINFO_BASENAME|PATHINFO_EXTENSION|PATHINFO_FILENAME): array {
        $result = [];
        $dirname = $path ? dirname($path) : '';
        if ($dirname && $dirname !== '.') {
            $filename = substr($path, strlen($dirname) + 1) ?: '';
        } else {
            $filename = $path;
        }
        $last_dot = strrpos($filename, '.');
        if (($options & PATHINFO_DIRNAME) !== 0) {
            $result['dirname'] = $dirname;
        }
        if (($options & PATHINFO_BASENAME) !== 0) {
            $result['basename'] = $filename;
        }
        if (($options & PATHINFO_EXTENSION) !== 0) {
            if ($last_dot !== false) {
                $result['extension'] = substr($filename, $last_dot + 1);
            }
        }
        if (($options & PATHINFO_FILENAME) !== 0) {
            if ($last_dot !== false) {
                $result['filename'] = substr($filename, 0, $last_dot);
            }
        }
        return $result;
    }

    public static function getcwd(): string {
        return (string)realpath('.');
    }

    public static function trigger_error(string $error_msg, $error_type = 0) {
        throw new \Exception($error_msg);
    }

    public static function extension_loaded(string $name): bool {
        // TODO: return true for builtin extensions like "json".
        return false;
    }

    public static function reset(&$array) {
        if ($array) {
            return array_first_value($array);
        }
        return false;
    }

    public static function str_starts_with(string $haystack, string $needle): bool {
        return 0 === strncmp($haystack, $needle, strlen($needle));
    }

    public static function str_ends_with(string $haystack, string $needle): bool {
        return '' === $needle || ('' !== $haystack && 0 === substr_compare($haystack, $needle, - strlen($needle)));
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
