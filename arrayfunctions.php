<?php
//Trying different array functions
echo 'This is my new array';
echo "<br>";
$myarray = array('Name' => 'Bernard','Lastname'=> 'John', 'Othername' =>'Ezequiel');

print_r($myarray);

echo "<br>";

// 1. Key change to upercase
echo 'I am changing the last array keys to upper case using CASE_UPPER';
echo "<br>";
print_r(array_change_key_case($myarray,CASE_UPPER));

echo "<br>";
//2. Divide an array into different pieces
echo 'Dividing an array with different car names into pieces using array_chunk';
echo "<br>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,3));

echo "<br>";

//3. Array_column
echo 'Using array_column to print a specific column of an array';
echo "<br>";
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
echo "<br>";
//4.

//5.array_key
echo 'Using array_keys to get the names of the keys of our arrays';
echo "<br>";
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
echo "<br>";
//6.array_map function
echo 'Using array_map to merge a function with an array';
echo "<br>";
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
echo "<br>";

//7.array_pop
echo 'Using array_pop to delete the last element of an array';
echo "<br>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
echo "<br>";

//8.array_sum
echo 'Using array_sum to get the value of the sum of all array elements';
echo "<br>";
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";
echo "<br>";
//9.array_unique
echo 'Using array_unique to delete repeated values out of our array';
echo "<br>";
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
echo "<br>";
//10.arsort
echo 'Using artsort to put in order the indexes of our array';
echo "<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo "<br>";

//11. shuffle
echo 'Using shuffle put the different array values into different order';
echo "<br>";
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
echo "<br>";
//12.sort
echo 'Using sort to put our elements in alphabetic order ';
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
//13. array Search
echo 'Using array_search to get back the key of the element that we are looking for';
echo "<br>";
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
print $key;
echo "<br>";

//14.array replace
echo 'Using array_replace to replace elements on an array ';
echo "<br>";
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
echo "<br>";
//15.array diff
echo 'Using array_diff to see the differences between two arrays';
echo "<br>";
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);
echo "<br>";

?>
