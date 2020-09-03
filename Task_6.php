<?php

    // Function definition
    function three_sums_checker($values, $sum_value) {
        // Logic statement to check for the 3 values that equals to the $sum_value
        $values_count = count($values);

        // For loop to check through all the values for the first addition value
        for ($i=0; $i < $values_count ; $i++) {
            // Save the first addition value
            $value_1 = $values[$i];
            
            // For loop to check through all the values for the second addition value
            for ($i2=0; $i2 < $values_count ; $i2++) { 
                // Check if this second index is not the first addition value index
                if ($i != $i2 ) {
                    // Save the second addition value
                    $value_2 = $values[$i2];
                }
                
                // For loop to check through all the values for the third addition value
                for ($i3=0; $i3 < $values_count; $i3++) { 
                    // Check if this third index is not the first addition value index and not the second addition value
                    if ($i != $i2 && $i != $i3 && $i2 != $i3 ) {
                        // Save the third addition value
                        $value_3 = $values[$i3];

                        // Check if the 3 values sum up to the $sum_value
                        if (($value_1 + $value_2 + $value_3) == $sum_value) {
                            // Return the three values since they sum up
                            return [$value_1, $value_2, $value_3];
                        }
                    }
                }
            }
        }

        // After the loops are complete, Return -1 since the three values that sum up can't be found
        return -1;
    }

    // For testing, Uncomment the lines below
    // $test_values = [1, 2, 3, 4, 5, 6];
    // $test_sum_value = 9;
    // print_r( three_sums_checker($test_values, $test_sum_value) ); // [1,2,6]
?>