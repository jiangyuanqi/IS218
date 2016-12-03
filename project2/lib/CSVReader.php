<?php  
namespace Project2;

header('Content-type: text/plain');

class getHtml{
public function getCSVdata($filename){  
        $row = 1;
        if(($handle = fopen($filename, "r")) !== false){  
            while(($dataSrc = fgetcsv($handle)) !== false){  
                $num = count($dataSrc);  
                for ($c=0; $c < $num; $c++){  
                    if($row === 1){  
                        $dataName[] = $dataSrc[$c];  
                    }  
                    else{  
                        foreach ($dataName as $k=>$v){  
                            if($k == $c){  
                                $data[$v] = $dataSrc[$c];  
                            }  
                        }  
                    }  
                }  
                if(!empty($data)){  
                    $dataRtn[] = $data;  
                    unset($data);  
                }  
                $row++;  
            }  
            fclose($handle);  
            return $dataRtn;  
        }  
    }  

}
 
?>  