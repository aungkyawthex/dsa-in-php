<?php

function findTwoSumSorted(array $arr, int $target): array {
    $left = 0;
    $right = count($arr) - 1;

    while($left < $right) {
        $currentSum = $arr[$left] + $arr[$right];

        if($currentSum === $target) {
            return [$left, $right];
        } 
        elseif($currentSum < $target) {
            $left++;
        } 
        else {
            $right--;
        }
    }

    return [];
}

$numbers = [2, 7, 11, 15];
$targetValue = 9;
$result = findTwoSumSorted($numbers, $targetValue);

echo "Indices: " . json_encode($result) . "\n"; // Output: Indices: [0,1]

?>