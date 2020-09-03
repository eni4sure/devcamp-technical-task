<?php

    // Using the check_if_prime number function from my solution in Task_2.php
    function check_if_prime_number($positive_integer) {
        if ($positive_integer < 1 || $positive_integer == 1) return false;
        for ($i=2; $i < $positive_integer; $i++) {
            if (is_int($positive_integer / $i) && $positive_integer != $i) return false;
        }
        return true;
    }

    // Function definition
    function prime_numbers($positive_integers) {

        // Initialise the variable as an array() to save the prime numbers
        $prime_numbers = array();

        // For loop to check through all the values in the array
        for ($i=0; $i < count($positive_integers); $i++) {
            // Logic statement to check if number is odd or even
            
            // Check if the integer is less than 1, which is not meant to be gotten as the constraint is postive integers
            if ($positive_integers[$i] < 1) {
                // Start over this iteration and skip this loop.
                continue;
            }

            // Using the my custom defined function to check if the integer is a prime number
            if (check_if_prime_number($positive_integers[$i])) {
                
                // True; Save the integer into the prime_numbers array.
                $prime_numbers[] = $positive_integers[$i];
            }

        }

        // After the loop is complete, Return the array.
        return $prime_numbers;
    }

    // For testing, Uncomment the lines below
    // $test_positive_integers = [1,2,3,4,5,6,7,8,9]; // [2,3,5,7]
    // print_r( prime_numbers($test_positive_integers) );
?>