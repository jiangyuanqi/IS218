<?php

echo 'Objects <br>';
function aa(){
$obj = (object) array('foo' => 'bar', 'property' => 'value');
echo $obj->foo;
echo '<br>';
echo $obj->property;
}
print_r(aa());
echo '<br>';
echo '<br>';

echo 'class <br>';
class cc {
    public $c = 'ccc';
}
$ccc = new cc;



echo '<br>';
echo '<br>';



echo 'Reference<br>';
function goodbye( &$a ) {
  $a = "See you later";
}
$b = "Hi there";
echo $b;
echo '<br>';
goodbye( $b );
echo $b; 



?>