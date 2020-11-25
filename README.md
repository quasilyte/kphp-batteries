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
  * [`reset()`](https://www.php.net/manual/en/function.reset.php)
  * [`is_a()`](https://www.php.net/manual/en/function.is-a.php)

* PHP8 functions
  * `str_starts_with()`
  * `str_ends_with()`
