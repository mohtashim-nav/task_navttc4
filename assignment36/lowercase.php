<php>
$string1 = "hello";
$string2 = "Hello";
$string3 = "HELLO";

var_dump(isLowercase($string1));  // Output: bool(true)
var_dump(isLowercase($string2));  // Output: bool(false)
var_dump(isLowercase($string3));  // Output: bool(false)
</php>
