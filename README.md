# PHP-PRNG
Relatively safe pseudo-random number generators for PHP.

All PPRNGS are tested with PHP 7.2.

# Why?

PHP's built-in functions  such as `mt_rand` and `rand` are not considered safe to use in crypto-related use. These are scripts to generate sufficiently random numbers.

# What about random_int() in PHP 7+?

random_int() is considered safe, however, some developers are still skeptical due to PHP's history regarding random number generation on some platforms.
