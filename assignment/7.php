<?php

echo 'Super Globals<br><br>';


echo '1.$GLOBALS<br>';
function aa(){
    $aa = 'local 1';
    echo '$aa in global is:'.$GLOBALS['aa']."<br>";
    echo '$aa in global is:'.$aa."<br>";
    echo '$GLOBALS ¡ª References the global variables available in the global scope.';
}
$aa = 'globa 2';
print_r(aa());
echo '<br>';
echo '<br>';


echo '2.$_SERVER<br>';
function bb(){
$bb =array($_SERVER);
print_r($bb[0]);
echo "<br>$ _SERVER - server and execution environment information";
}
print_r(bb());
echo '<br>';
echo '<br>';

echo '3.$_GET<br>';
function cc(){
if(empty($_GET["a"])) echo "a is empty\n";
echo "<br>$ _GET can collect the data sent in the URL.";
}
print_r(cc());
echo '<br>';
echo '<br>';

echo '4.$_POST<br>';
function dd(){
echo "<br>$ _POST is often used to pass variables.";
}
print_r(dd());
echo '<br>';
echo '<br>';

echo '5.$_FILES<br>';
echo "<br>$ _FILES - HTTP file upload variables";
echo '<br>';
echo '<br>';

echo '6.$_COOKIE<br>';
echo "<br>$ _COOKIE - An array of variables passed to the current script via HTTP cookies.";
echo '<br>';
echo '<br>';

echo '7.$_SESSION<br>';
echo "<br>$ SESSION - Session support in PHP is in the concurrent access by a method to save some data.Session support allows you to request the data stored in the super global array $ _SESSION";
echo '<br>';
echo '<br>';

echo '8.$_REQUEST<br>';
echo "<br>$ _REQUEST is used to collect HTML form submission data.";
echo '<br>';
echo '<br>';

echo '9.$_ENV<br>';
echo "<br>$ _ENV - An array of variables passed to the current script by means of the environment.";
echo '<br>';
echo '<br>';







?>