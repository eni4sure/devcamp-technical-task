<?php

    // Function definition
    function check_if_palindrome($string) {
        // Logic statement to replace string with custom text

        // Convert and split every letter in the string into an array
        $split_string = str_split($string, 1);

        // Reverse the array of splitted string
        $reverse_string = array_reverse($split_string, false);

        // Count the number of letters in the string
        $split_string_count = count($split_string);

        // For loop to go through the whole array
        for ($i=0; $i < $split_string_count; $i++) { 
            // Check if the split string is equal to the reverse sting counterpart
            if ($split_string[$i] != $reverse_string[$i]){ 
                // Return 'No'
                return 'No';
            } 
        }

        // After the loop is complete, Return 'Yes' since the no unmatching values are found
        return 'Yes';
    }

    // For testing, Uncomment the lines below.
    // $test_string = 'Mr John Smith'; // No
    // $test_string = 'ABA'; // Yes
    // $test_string = ' madam '; // Yes
    // echo check_if_palindrome($test_string);
?>