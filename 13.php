<?php

echo 'Putting it all together - Homework 13<br><br>';

function getCSVdata($filename)  
    {  
        $row = 1;
        if(($handle = fopen($filename, "r")) !== false)   
        {  
            while(($dataSrc = fgetcsv($handle)) !== false)   
                {  
                $num = count($dataSrc);  
                for ($c=0; $c < $num; $c++) 
                {  
                    if($row === 1)  
                    {  
                        $dataName[] = $dataSrc[$c];  
                    }  
                    else  
                    {  
                        foreach ($dataName as $k=>$v)  
                        {  
                            if($k == $c)
                            {  
                                $data[$v] = $dataSrc[$c];  
                            }  
                        }  
                    }  
                }  
                if(!empty($data))  
                {  
                    $dataRtn[] = $data;  
                    unset($data);  
                }  
                $row++;  
            }  
            fclose($handle);  
            return $dataRtn;  
        }  
    }  
echo ('Here is what you ask:<br>');
$aa = $_GET['make'];
if($aa=='ford'){
    echo 'ford<br><br>';
}else{
    if($aa == 'BMW'){
        echo 'BMW<br><br>';
    }
    else{
        if($aa =='Mercedes-Benz'){
            echo 'Mercedes-Benz<br><br>';
        }
        else{
            echo 'No this make of cars record<br><br>';
        }
    }
    }
    
$aData = getCSVdata('hw13.csv');
function Makes($a,$b,$c){
    foreach($b as $line){
        //if($line[$a] == true){
            //print_r($line);
            
            if($line['makes'] == $a){
                
            print_r($line['records']);
            echo('<br>');
            }
            //$c += $line[1];
        //}
    }
    //print_r ($a);
    //print_r ($c);
}
$ccs = Makes($aa,$aData,$aa);



?>