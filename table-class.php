<html>
  <head>
    <title>Sign up</title>
    <style type="text/css">
    h1{position:absolute;top:30px;width:740px;padding:10px;color:#606060;font-family: helvetica;}
	table,th,td{color:#606060;font-family: helvetica;padding:10px;border: 1px solid black;border-collapse:
    collapse;top:120px;width:740px;text-align:center;}
    </style>
  </head>
  <body>
<?php
   
  class html {
    public $html;
    public function __construct() {
        
    }
  }
    class htmlTable extends html {
    protected $table;
    public function getTableHTML() {
      
      $this->html = 'some table html';
    
    }
}
$html = array( array("Username"=>"yuanqijiang", "Password"=>"ros12e" , "First Name"=>"Yuanqi","Last Name"=>"Jiang"),
               array("Username"=>"datongpeng", "Password"=>"r123123ose", "First Name"=>"Datong","Last Name"=>"Peng"),
               array("Username"=>"jiajiajiang", "Password"=>"ro123123se", "First Name"=>"Jiajia","Last Name"=>"Lin"),
               array("Username"=>"yaoyi", "Password"=>"ro1s23123se", "First Name"=>"Yi","Last Name"=>"Yao"),  
             ); 
?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($html))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($html as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
  </body>
</html>