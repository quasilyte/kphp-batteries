# KPHP batteries

Unofficial package that provides some PHP functions that are not implemented in [KPHP](https://github.com/VKCOM/kphp/) stdlib.

**Disclaimer:** this is not a proper polyfill/library. This is merely an attempt to implement some PHP functions in terms of KPHP
as close as possible to make more PHP projects compileable as KPHP programs.

It's also used to test KPHP implementation of the [Composer](https://getcomposer.org/) packages.

## Installation

```
composer require quasilyte/kphp-batteries
```

## Function reference

* Core functions
  * [`getcwd`](https://www.php.net/manual/en/function.getcwd.php)
  * [`join`](https://www.php.net/manual/en/function.join.php)
  * [`pathinfo`](https://www.php.net/manual/en/function.pathinfo.php)
  * [`reset()`](https://www.php.net/manual/en/function.reset.php)
  * [`trigger_error`](https://www.php.net/manual/en/function.trigger-error.php)
  * [`extension_loaded`](https://www.php.net/manual/en/function.extension-loaded.php)
  * [`is_a()`](https://www.php.net/manual/en/function.is-a.php)

* PHP8 functions
  * `str_starts_with()`
  * `str_ends_with()`
