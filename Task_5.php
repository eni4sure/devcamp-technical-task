<?php

    // Function definition
    function replace_spaces($string) {
        // Logic statement to replace string with custom text

        // Replace all the spaces found in the string using the PHP str_replace() inbuilt function
        $new_string = str_replace(' ', '%20', $string);

        // After the string replace is complete, Return the new string.
        return $new_string;
    }

    // For testing
    // $test_string = 'st ri ng'; // st%20ri%20ng
    $test_string = ' Mr John Smith '; // %20Mr%20John%20Smith%20
    echo replace_spaces($test_string);
?>