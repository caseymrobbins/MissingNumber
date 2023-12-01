<?php
// This function will take an array of sequential numbers that are in a random order with 1 number missing from the list and it will find the missing number.
function findMissingNumber($array) {
    // Find the minimum and maximum values in the array
    $min = min($array);
    $max = max($array);

    // Calculate the expected sum of the sequence using the formula for the sum of an arithmetic series
    $expectedSum = ($min + $max) * (count($array) + 1) / 2;

    // Calculate the actual sum of the elements in the array
    $actualSum = array_sum($array);

    // Find the missing number
    $missingNumber = $expectedSum - $actualSum;

    return $missingNumber;
}

// Example usage
$numbers = [3, 6, 15, 9, 18, 24, 21, 30, 27];
$missingNumber = findMissingNumber($numbers);

echo "The missing number is: " . $missingNumber;

?>
