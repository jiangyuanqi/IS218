<?php

   if(!file_exists("test9.csv")) {
      die("File not found");
   }else {
      $file = fopen("test9.csv","w");
      fputcsv($file,array('aaa','bbb','cccc'));
      fclose($file);
   }

?>