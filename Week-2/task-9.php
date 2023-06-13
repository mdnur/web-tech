<?php



function isPalindrome($str)
{
    $str = strtolower($str); 
    $str = preg_replace('/[^a-z0-9]/', '', $str);

    $reverseStr = strrev($str); 
    return $str === $reverseStr; 
}

$input1 = "racecar";
$input2 = "Hello, world!";
$input3 = "A man, a plan, a canal, Panama!";

echo isPalindrome($input1) ? "Palindrome" : "Not a Palindrome"; // Output: Palindrome
echo "\n";
echo isPalindrome($input2) ? "Palindrome" : "Not a Palindrome"; // Output: Not a Palindrome
echo "\n";
echo isPalindrome($input3) ? "Palindrome" : "Not a Palindrome"; // Output: Palindrome
