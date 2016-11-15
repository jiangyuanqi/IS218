<?php

echo '12 Curl Requests<br><br>';

function assignment12($url)
{
    $assignment12 = curl_init();  
 
    curl_setopt($assignment12,CURLOPT_URL,$url);
    curl_setopt($assignment12,CURLOPT_RETURNTRANSFER,true);
 
    $output=curl_exec($assignment12);
 
    if($output === false)
    {
        echo "Error Number:".curl_errno($assignment12)."<br>";
        echo "Error String:".curl_error($assignment12);
    }
    curl_close($assignment12);
    return $output;
}
?>
