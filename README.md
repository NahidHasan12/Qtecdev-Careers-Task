
problem-2:

function searchInsertPosition($nums, $target) {
    // Sort the array
    sort($nums);
    
    // Iterate through the sorted array
    foreach ($nums as $index => $num) {
        // If current element is greater than or equal to target, return index
        if ($num >= $target) {
            return $index;
        }
    }
    
    // If target is greater than all elements, return length of array
    return count($nums);
}

    // Test Case 1
    $nums1 = [1, 7, 3, 5, 6, 9, 15];
    $target1 = 5;
    echo "Test Case 1: " . searchInsertPosition($nums1, $target1) . PHP_EOL;

    // Test Case 2
    $nums2 = [5, 6, 1, 3];
    $target2 = 2;
    echo "Test Case 2: " . searchInsertPosition($nums2, $target2) . PHP_EOL;

    // Test Case 3
    $nums3 = [1, 3, 5, 6];
    $target3 = 7;
    echo "Test Case 3: " . searchInsertPosition($nums3, $target3) . PHP_EOL;

Explain:
========
You can solve this problem by iterating through the sorted array and comparing each element with the target number. If you find an element greater than or equal to the target, you return the index of that element. If no such element is found, it means the target should be inserted at the end of the array, so you return the length of the array.
