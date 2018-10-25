<?php

/**
 * For outputting any message on the screen, PHP offers to you some methods to do that. *
 *
 * Below we can see some of them:
 *
 * echo
 * print
 * var_dump()
 * print_r()
 *
 * *These statements were written and executed in PHP 7.2.
 */


/**
 * First, the more common, the echo and print statements.
 * Both are similar, but they have some particular differences.
 *
 * While the echo statement can accept multiple arguments, the print statement can only accept one argument.
 * Also, echo does not return any value, while the print statement returns the value 1.
 *
 */

echo "Hello World!";

print "Hello World!";


/**
 * These next functions are quite similar but also have their differences.
 * While var_dump() displays a structured information about its arguments, print_r() displays information about its
 * arguments in a way that is readable by humans easily.
 *
 * Both of them are commonly executed for debugging because they are very helpful for giving information about their
 * arguments.
 */

var_dump("Hello World!");

print_r("Hello World!");


function helloWorld ()
{
    return "Hello World!";
}

echo helloWorld();

print helloWorld();

var_dump(helloWorld());

print_r(helloWorld());