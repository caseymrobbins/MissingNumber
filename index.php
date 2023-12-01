<?php
// This function will take an array of sequential numbers that are in a random order
// with 1 number missing from the array and it will find the missing number.
function findMissingNumber($array) {
    // Find the minimum and maximum values in the array
    $min = min($array);
    $max = max($array);

    // Calculate the expected total sum of the numbers in the array by adding the
    // last number with the first number then multiply half the amount of how many
    // numners found in the array. Note: you need to add one to the count because the
    // first key is 0
    $expectedSum = ($min + $max) * (count($array) + 1) / 2;

    // Calculate the actual total sum of the numbers in the array
    $actualSum = array_sum($array);

    // Find the missing number by subtracting the expected sum by the actual sum
    $missingNumber = $expectedSum - $actualSum;

    return $missingNumber;
}

// Example usage
$numbers = [3, 6, 15, 9, 18, 24, 21, 30, 27];
$missingNumber = findMissingNumber($numbers);

echo "The missing number is: " . $missingNumber;

?>
