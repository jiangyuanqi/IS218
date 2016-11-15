<?php

//4 if statements
echo '4 if statements<br><br>';

//1 
echo '1.isset<br>';
function isse(){
$v = '1';
if (isset($v)) {
    echo "v is set.";
};
}
print_r(isse());
echo '<br>';
echo '<br>';

//2 
echo '2.empty<br>';
function empt(){
$v = 0;
if (empty($v)) {
    echo "v is empty.";
    };
}
print_r(empt());
echo '<br>';
echo '<br>';

//3 
echo '3.null<br>';
function nul(){
$v = '';
if ($v == null) {
    echo "v is null.";
    };
}
print_r(nul());
echo '<br>';
echo '<br>';

//
echo '4.null2<br>';
function null2(){
$v = 0;
if ($v == null) {
    echo "v is null.";};
}
print_r(null2());
echo '<br>';
echo '<br>';


//4 switch-case using
echo '4 switch-case using<br><br>';

//1 
echo '1.isset<br>';
function isse2(){
$n = 0;
$v = 0;
switch ($n) {
    case 0:
        if (isset($v)) {
        echo "case 0 v is set.";}
        break;
    case 1:
        if (isset($v)) {
        echo "case 1 v is set.";}
        break;
    case 2:
        if (isset($v)) {
        echo "case 2 v is set.";}
        break;
}
}
print_r(isse2());
echo '<br>';
echo '<br>';

//2 
echo '2.empty<br>';
function empt2(){
$n = 0;
$v = 0;
switch ($n) {
    case 0:
        if (empty($v)) {
            echo "case 0 v is empty.";};
        break;
    case 1:
        if (empty($v)) {
            echo "case 1 v is empty.";};
        break;
    case 2:
        if (empty($v)) {
            echo "case 2 v is empty.";};
        break;
}
}
print_r(empt2());
echo '<br>';
echo '<br>';

//3 
echo '3.null<br>';
function nul2(){
$n = 1;
$v = '';
switch ($n) {
    case 0:
        if ($v == null) {
        echo "case 0 v is null.";};
        break;
    case 1:
        if ($v == null) {
        echo "case 1 v is null.";};
        break;
    case 2:
        if ($v == null) {
        echo "case 2 v is null.";};
        break;
}
}
print_r(nul2());
echo '<br>';
echo '<br>';

//
echo '4.null2<br>';
function null22(){
$n = 1;
$v = 0;
switch ($n) {
    case 0:
        if ($v == null) {
        echo "case 0 v is null.";};
        break;
    case 1:
        if ($v == null) {
        echo "case 1 v is null.";};
        break;
    case 2:
        if ($v == null) {
        echo "case 2 v is null.";};
        break;
        }
}
print_r(null22());
echo '<br>';
echo '<br>';

?>