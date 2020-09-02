<?php

    // Function definition
    function get_most_occuring_character($string) {
        // Logic statement to get the most ccuring character in the string

        // Convert and split every character in the string into an array
        $split_string = str_split($string, 1);

        // Intialise new array to take the values with the string as an index
        $new_array = array();

        // For loop to go through the split string array
        for ($i=0; $i < count($split_string); $i++) { 
            // Check if the value is an array index in new_array 
            if (isset($new_array[($split_string[$i])])){
                // Add +1 to the value array index
                $new_array[($split_string[$i])] += 1;
            } else {
                // Set the new value as an array index in new_array
                $new_array[($split_string[$i])] = 1;
            }
        }

        // Sort the array in a descending order, according to the values.
        arsort($new_array);

        // After the loop is complete, 
        // Return the most occuring charater which is ging to be the first element in the sorted new_array 
        return array_key_first($new_array);
    }

    // For testing
    $test_string = 'afhuusuuuuutgrggtgsegegesfxsffyyyyimr443o0sggg'; // g
    echo get_most_occuring_character($test_string);
?>