<?php

    // Function definition
    function calculate_standard_deviation($positive_integers) {
        // Logic statement to calculate the standard deviation of the positive_integers

        // Initialise variable to save the count of the positive integers variance
        $positive_integers_count = count($positive_integers);

        // Initialise variable to save the variance
        $variance = 0;

        // Calculate the mean
        $mean = array_sum($positive_integers) / $positive_integers_count;

        // calculating mean using array_sum() method 
        $average = array_sum($arr)/$num_of_elements; 

        foreach($arr as $i) 
        { 
            // sum of squares of differences between  
                        // all numbers and means. 
            $variance += pow(($i - $average), 2); 
        } 
          
        return (float)sqrt($variance/$num_of_elements);
    }

    // For testing
    $test_positive_integers = [1,2,3,4,5,6,7,8,9];
    echo calculate_standard_deviation($test_positive_integers);
?>