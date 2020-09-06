<?php

    // Function definition
    function check_if_prime_number($positive_integer) {
        // Logic statement to check if the integer is a prime

        // Check if the integer is less than 1, which is not meant to be gotten as the constraint is postive integers
        // Check if the positive integer is 1 as it is not a prime number  
        if ($positive_integer < 1 || !is_int($positive_integer) || $positive_integer == 1) {
            // Return false, because 0 or any negative is not a prime number 
            return false;
        }

        // For loop to check through all the numbers that can be divided by the integer
        // Loop starts from 2 since, prime numbers are numbers that only 1 and itself can divide
        for ($i=2; $i < $positive_integer; $i++) {
            // Using is_int PHP function to check if after the dividing the value by 2 is a whole number 
            // Also checking for the last iteration if the positive integer we are checking for is not the iterator
            if (is_int($positive_integer / $i)) {
                // Return false
                return false;
            }
        }

        // After the loop is complete, Return false because the number is not a prime number.
        return true;
    }

    // For testing, Uncomment the lines below
    // $test_positive_integer = 9; // false
    // $test_positive_integer = 91; // false
    // $test_positive_integer = 2; // true
    // $test_positive_integer = 97; // true
    // echo check_if_prime_number($test_positive_integer);
?>