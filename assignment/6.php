<?php

echo '9 Useful PHP Functions<br><br>';

//1 
echo '1.function <br>';
function aa($x, $y){
echo 'first word = '.$x;
echo '<br>';
echo 'second word = '.$y;
}
print_r(aa('hello','world'));
echo '<br>';
echo '<br>';

//2 
echo '2. Glob<br>';
function bb(){
$files = glob('*.php');
print_r($files);
}
print_r(bb());
echo '<br>';
echo '<br>';

//3 
echo '3. Memory Usage Information<br>';
function cc(){
echo "Initial: ".memory_get_usage()." bytes \n";
}
print_r(cc());
echo '<br>';
echo '<br>';

//4
echo '4. CPU Usage Information<br>';
function dd(){
//print_r(getrusage());
}
print_r(dd());
echo '<br>';
echo '<br>';

//5
echo '5. Magic Constants<br>';
function ee($aa, $line){
echo "123 $aa $line";
}
print_r(ee('123asd',__LINE__));
echo '<br>';
echo '<br>';

//6
echo '6. Generating Unique IDs<br>';
function ff(){
echo md5(time() . mt_rand(1,1000000));
}
print_r(ff());
echo '<br>';
echo '<br>';

//7
echo '7. Serialization<br>';
function gg(){
$gg = array('hello',12);
$gg2 = serialize($gg);
print_r($gg2);
}
print_r(gg());
echo '<br>';
echo '<br>';

//8
echo '8. Compressing Strings<br>';
function hh(){
$hh = '1231231231asdasdasdasdkjfoiqweroqiwruqiwruqowruqiowurqoiwfshakjs';
$hh2 = gzcompress($hh);
echo "Original size: ". strlen($hh)."\n";
echo "Compressed size: ". strlen($hh2)."\n";
}
print_r(hh());
echo '<br>';
echo '<br>';

//9
echo '9. Register Shutdown Function<br>';
function ii(){
$ii = microtime(true);
echo "execution took: ".(microtime(true) - $ii)." seconds.";
}
print_r(ii());
echo '<br>';
echo '<br>';

?>