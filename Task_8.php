<?php

    // Function definition
    function check_for_three($integer) {
        // Logic statement to check for 3 in all nubers lower and equals to $integer

        // Initialise the variable as an array() to save the numbers that contain three
        $threes_found = array();

        // For loop to check all the values lower than the integer
        for ($i=0; $i <= $integer ; $i++) { 
            // Check if it contains 3, using string pos which returns an array with the position if found and false if not found 
            if ( strpos($i, '3') !== false ) {
                // Add the value to the threes_found array.
                $threes_found[] = $i;
            }
        }

        // After the loop is complete, Return an object with {count, numbers}.
        return (object)['count' => count($threes_found), 'numbers' => $threes_found];
    }

    // For testing, Uncomment the lines below
    // $test_integer = 35; // {count:9, numbers:[3,13,23,30,31,32,33,34,35]}
    // print_r( check_for_three($test_integer) );
?>