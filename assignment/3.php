<?php
  class htmltable{
    public function CreatTable($head,$info){

        $t = '<table border="2">';
        $t .= '<tr>';
        foreach($head as $h){
            $t .= '<th>'.$h.'';
        }
        $t .= '</tr>';
        foreach($info as $value){
            $t .= '<tr>';
            foreach($value as $v){
              $t .= '<th>'.$v.'';
             }
              $t .= '</tr>';
        }
        $t .='</table>';
        return $t;
    }
  }
$obj = new htmltable;

$thead = array('Username','Password','First Name','Last Name');
$infom = array( array('yuanqijiang','qwrqwt','Yuanqi','Jiang'),
               array('datongpeng','qweqwfg','Datong','Peng'),
               array('jiajialin','2fefefef','Jiajia','Lin'),
               array('yaoyi','qweqweqw','Yao','Yi'));
               
echo $obj -> CreatTable($thead,$infom);



?>