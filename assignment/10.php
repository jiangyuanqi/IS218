<?php

$email_a = 'yj99@njit.edu';
$email_b = 'yj99';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "This ($email_a) email address is valid.";
}
else{
    echo "This ($email_a) email address is NOT valid.";
}

echo ('</br>');

if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "This ($email_b) email address is valid.";
}
else{
    echo "This ($email_b) email address is NOT valid.";
}

?>
