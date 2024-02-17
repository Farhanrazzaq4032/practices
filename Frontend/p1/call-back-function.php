<!DOCTYPE html>
<html>
<body>

<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
print_r($strings);
$lengths = array_map("my_callback", ["apple"=>"10", "orange", "banana", "coconut"]);
print_r($lengths);
?>

</body>
</html>