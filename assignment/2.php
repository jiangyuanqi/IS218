<?php

//15 functions of array
echo '15 functions of array<br><br>';

//1 
echo '1.array_keys<br>';
function keys(){
$array = array(0 => 100, 'color' => 'yellow',);
print_r(array_keys($array));
}
print_r(keys());
echo '<br>';
echo '<br>';

//2
echo '2.array_search<br>';
function search(){
$array = array(0 => 100, 'color' => 'yellow',);
$key = array_search('yellow', $array); 
print_r($key);
}
print_r(search());
echo '<br>';
echo '<br>';

//3
echo '3.array_walk<br>';
function walk($value,$key){
echo "The key $key has the value $value<br>";
}
$a=array('a'=>'red','b'=>'green','c'=>'blue');
array_walk($a,'walk');
echo '<br>';
echo '<br>';


//4
echo '4.array_pop<br>';
function pop(){
$a = array(0,100, 'color','yellow',150);
$b = array_pop($a);
print_r($b);
}
print_r(pop());
echo '<br>';
echo '<br>';

//5
echo '5.array_push<br>';
function push(){
$a = array(0,100, 'color','yellow',150);
array_push($a, 'apple',350);
print_r($a);
}
print_r(push());
echo '<br>';
echo '<br>';

//6
echo '6.array_combine<br>';
function combine(){
$a = array('last name', 'first name', 'email');
$b = array('jiang', 'yuanqi', 'yj99@njit.edu');
$c = array_combine($a, $b);
print_r($c);
}
print_r(combine());
echo '<br>';
echo '<br>';

//7
echo '7.fgetcsv<br>';
function fgetcs(){
$row = 1;
if (($handle = fopen('info.csv', 'r')) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
        $num = count($data);
        echo "<p>$num. fields in line $row: <br>";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "$data[$c],";
        }
    }
    fclose($handle);
}
}
print_r(fgetcs());
echo '<br>';
echo '<br>';

//8
echo '8.implode<br>';
function impl(){
$array = array('name', 'email', 'phone');
$comma_separated = implode(',', $array);
print_r($comma_separated);
}
print_r(impl());
echo '<br>';
echo '<br>';

//9
echo '9.explode<br>';
function expl(){
$array = 'name,email,phone';
$a = explode(',', $array);
print_r($a);
}
print_r(expl());
echo '<br>';
echo '<br>';

//10
echo '10.array_intersect<br>';
function inte(){
$array1 = array('a' => 'green', 'red', 'blue');
$array2 = array('b' => 'green', 'yellow', 'red');
$result = array_intersect($array1, $array2);
print_r($result);
}
print_r(inte());
echo '<br>';
echo '<br>';

//11
echo '11.array_diff<br>';
function diff(){
$array1 = array('a' => 'green', 'red', 'blue');
$array2 = array('b' => 'green', 'yellow', 'red');
$result = array_diff($array1, $array2);
print_r($result);
}
print_r(diff());
echo '<br>';
echo '<br>';

//12
echo '12.array_fill<br>';
function fill(){
    $a = array_fill(0, 3, 'pear');
print_r($a);
}
print_r(fill());
echo '<br>';
echo '<br>';

//13
echo '13.array_flip<br>';
function flip(){
$aa = array('a' => 1, 'b' => 2, 'c' => 3);
$bb = array_flip($aa);
print_r($bb);
}
print_r(flip());
echo '<br>';
echo '<br>';


//14
echo '14.list<br>';
function lis(){
$aa = array('Yuanqi', 'Jiang', 'morning');
list($first, $last, $time) = $aa;
echo "Good $time.$first $last.";
}
print_r(lis());
echo '<br>';
echo '<br>';

//15
echo '15.array_replace<br>';
function repl(){
$base = array('1', '2', '3', '4');
$replacements = array(0 => 'a', 4 => 'd');
$new = array_replace($base, $replacements);
print_r($new);
}
print_r(repl());
echo '<br>';
echo '<br>';


?>