<?php

    // Function definition
    function calculate_odd_and_even_sum($positive_integers) {

        // Initialise variable to save the sum of the odd sum
        $odd_sum = 0;
        // Initialise variable to save the sum of the even sum
        $even_sum = 0;

        // For loop to check through all the values in the array
        for ($i=0; $i < count($positive_integers); $i++) {
            // Logic statement to check if number is odd or even
            
            // Check if the integer is less than 1, which is not meant to be gotten as the constraint is postive integers
            if ($positive_integers[$i] < 1) {
                // Start over this iteration and skip this loop.
                continue;
            }
           
            // Using is_int PHP function to check if after the dividing the value by 2 is a whole number 
            if (is_int($positive_integers[$i] / 2)) {

                // It is an even number, add it to the even sum variable
                $even_sum = $even_sum + $positive_integers[$i];
            } else {

                // It is an odd number, add it to the odd sum variable
                $odd_sum = $odd_sum + $positive_integers[$i];
            }
        }

        // After the loop is complete, Return the array.
        return [$even_sum, $odd_sum];
    }

    // For testing, Uncomment the lines below
    // $test_positive_integers = [1,2,3,4,5,6,7,8,9]; // [20, 25]
    // print_r (calculate_odd_and_even_sum($test_positive_integers) );
?>