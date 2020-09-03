<?php

    // Function definition
    function check_password_strength($password) {
        // Logic statement to check the password strength

        // Using a switch to check through all the cases for the password
        switch ($password) {
            // Preg Match check if password contains any letter from (A-Z) capital letters and (a-z) small letters 
            case !preg_match('/[^A-Za-z]/', $password): return 0; break;
            
            // Preg Match check if password contains any number 0-9 
            case !preg_match('/[^0-9]/', $password): return 1; break;
            
            // Preg Match check if password contains letter from (A-Z) capital letters and (a-z) small letters and any number 0-9 
            case !preg_match('/[^A-Za-z0-9]/', $password): return 2; break;
            
            // Preg Match check if password contains letter from (A-Z) capital letters and (a-z) small letters and any number 0-9 and any special characeter @,#,$,^
            case !preg_match('/[^A-Za-z0-9\W]/', $password) : return 3; break;
            
            // Default return nothing
            default: return; break;
        }

    }

    // For testing, Uncomment the lines below
    // $test_password = 'password'; // very weak - 0
    // $test_password = '123456789'; // weak - 1
    // $test_password = 'password12'; // strong - 2
    // $test_password = 'password#12'; // very strong - 3
    // echo check_password_strength($test_password);
?>