<?php

    // Function definition
    function replace_consonant($string) {
        // Logic statement to replace all consonant letters with the next occurring consonant letter

        // Array of all consonant letters in the alphabet
        $consonants = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];

        // Convert and split every letter in the string into an array
        $split_string = str_split($string, 1);

        // For loop to go through the whole splitted string array
        for ($i=0; $i < count($split_string); $i++) { 
            // Check if the string is in the consonant array
            if ( in_array($split_string[$i], $consonants) ) {
                // Get the key of the consonant in the consonants array
                $consonant_key = array_search ($split_string[$i], $consonants);

                // Set/Replace the string with the next consonant key value
                $split_string[$i] = $consonants[$consonant_key + 1];
            }
        }

        // Join the splitted sting array into a new string
        $new_string = join('', $split_string);

        // After the string has been joined, Return the new string.
        return $new_string;
    }

    // For testing, Uncomment the lines below
    // $test_string = 'hello world'; // jemmo xosmf
    // echo replace_consonant($test_string);
?>