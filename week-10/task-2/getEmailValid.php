<?php


function is_valid_email($email) {
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    // Use the preg_match function to check if the email matches the pattern
    if (preg_match($pattern, $email)) {
        return true; // Email is valid
    } else {
        return false; // Email is not valid
    }
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    if( is_valid_email($q)){
        $hint = "Email is valid";
    }else{
        $hint = "Email is not valid";
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint;
