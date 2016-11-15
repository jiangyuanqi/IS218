<?php

//15 functions of string
echo '15 functions of string<br><br>';

//1
echo '1.chunk_split<br>';
function chun(){
$st = '1133';
echo chunk_split($st, 2);
}
print_r(chun());
echo '<br>';
echo '<br>';

//2
echo '2.count_chars<br>';
function coun(){
$a = '123456';
$b = count_chars($a, 3);
print_r($b);
}
print_r(coun());
echo '<br>';
echo '<br>';

//3
echo '3.explode<br>';
function explo(){
$st = '11,33,44,55';
$qq = explode(',', $st);
print_r($qq);
}
print_r(explo());
echo '<br>';
echo '<br>';

//4
echo '4.htmlentities<br>';
function enti(){
$st = "I \"feel\" <b>good</b> now.";
echo htmlentities($st);
}
print_r(enti());
echo '<br>';
echo '<br>';

//5
echo '5.htmlspecialchars<br>';
function spec(){
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
}
print_r(spec());
echo '<br>';
echo '<br>';

//6
echo '6.html decode<br>';
function dec(){
$st = "I \"feel\" <b>good</b> now.";
echo html_entity_decode($st);
}
print_r(dec());
echo '<br>';
echo '<br>';

//7
echo '7.implode<br>';
function implo(){
$st = array('Yuanqi','Jiang','YJ99@NJIT.EDU');
$qq = implode(',', $st);
print_r($qq);
}
print_r(implo());
echo '<br>';
echo '<br>';

//8
echo '8.addslashes<br>';
function addslashe(){
$st = "H@el'lo!A'll";
echo addslashes($st);
}
print_r(addslashe());
echo '<br>';
echo '<br>'; 

//9
echo '9.chr<br>';
function ch(){
$st = "The string HelloAll: ";
$st .= chr(11);
print_r($st);
}
print_r(ch());
echo '<br>';
echo '<br>';

//10
echo '10.rtrim<br>';
function rtr(){
$st = 'HelloAll   ';
$qq = rtrim ($st);
print_r($qq);
}
print_r(rtr());
echo '<br>';
echo '<br>';

//11
echo '11.echo <br>';
function ec(){
echo "Hello World";
}
print_r(ec());
echo '<br>';
echo '<br>';

//12
echo '12.md5<br>';
function md(){
$date = "12/31/1990";
print_r(md5($date));
}
print_r(md());
echo '<br>';
echo '<br>';

//13
echo '13.stripos<br>';
function stri(){
$mystring = 'abcdqweqweqweqwesdasda';  
$find   = 'e';  
$pos = strpos($mystring, $find);   
if ($pos == false) {  
    echo "The string '$find' was not found in the string '$mystring'"; 
} else {  
    echo "The string '$find' was found in the string '$mystring'";
}
}
print_r(stri());
echo '<br>';
echo '<br>';

//14
echo '14.str_getcsv<br>';
function strto(){
$csv = array_map('str_getcsv', file('info.csv'));
print_r($csv);
}
print_r(strto());
echo '<br>';
echo '<br>';


//15
echo '15.strip_tags<br>';
function strip2(){
$data = "<p>Test<br>123.</p>";
$new = strip_tags($data, '<br>');
print_r($new);
}
print_r(strip2());
echo '<br>';
echo '<br>';



?>