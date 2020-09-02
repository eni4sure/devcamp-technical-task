<?php

    // Function definition
    function calculate_standard_deviation($positive_integers) {
        // Logic statement to calculate the standard deviation of the positive_integers

        // Initialise variable to save the count of the positive integers variance
        $positive_integers_count = count($positive_integers);

        // Initialise variable to save the variance
        $variance = 0;

        // Calculate the mean, add all the numbers and divide by the number of elements added
        $mean = array_sum($positive_integers) / $positive_integers_count;

        // For loop to go through all the values in the array
        for ($i=0; $i < $positive_integers_count; $i++) { 
            // Calulate the and add the variance to the previous
            $variance = $variance + pow(($positive_integers[$i] - $mean), 2);
        }

        // Calulate the standard deviation
        $standard_deviation = sqrt($variance / $positive_integers_count);

        // After the loop is complete, Return the standard deviation.
        return $standard_deviation; 
    }

    // For testing
    $test_positive_integers = [1,2,3,4,5,6,7,8,9];
    echo calculate_standard_deviation($test_positive_integers);
?>