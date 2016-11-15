<?php  
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
public function CreatTable($info){
        $t = '<table border="2" width="700">';
        $t .= '<tr>';
        $head = array_keys($info[0]);
        $value = array_values($info);
        foreach($head as $h){
            $t .= '<th>'.$h.'</th>';
        }
        $t .= '</tr>';
        foreach($value as $va){
            $t .= '<tr>';
            foreach($va as $v){
              $t .= '<td>'.$v.'</td>';
             }
              $t .= '</tr>';
        }
        $t .='</table>';
        return $t;
    }
}
$obj = new getHtml;
$aData = $obj ->  getCSVdata('info1.csv');
$table = $obj ->  CreatTable($aData);
print_r($table);  
?>  