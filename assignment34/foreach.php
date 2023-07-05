<?php
$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

$removeValue = "March"; // The value to be removed

echo "Before removal: ";
print_r($months);

// Iterate over the array using foreach loop
foreach ($months as $key => $value) {
    if ($value == $removeValue) {
        unset($months[$key]); // Remove the element with the specified value
    }
}

echo "After removal: ";
print_r($months);
?>
