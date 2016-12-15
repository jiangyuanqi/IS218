<?php
class dbConn{
 protected static $db;
  private function __construct() {
   try {
   self::$db = new PDO( 'mysql:host=sql1.njit.edu;dbname=yj99', 'yj99', 'GYb6WQYNR' );
   self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   }
   catch (PDOException $e) {
   echo "Connection Error: " . $e->getMessage();
   }
    }
     
     public static function getConnection() {
      
      if (!self::$db) {
      new dbConn();
      }
       
       return self::$db;
       }
}

$db = dbConn::getConnection();
$u=$_GET["u"];
$p=$_GET["p"];
$pp=$_GET["pp"];
$f=$_GET["f"];
$l=$_GET["l"];
$e=$_GET["e"];
$file=$_GET["file"];
$event=$_GET["event"];
//print_r($q);
switch($event){
    case "creat":
if($u=='' or $p=='' or $pp==''){
    echo ("Please fill up the blank space.");
}
else{
    if($p==$pp){
        
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bbb = 'SELECT * FROM project3 WHERE userName="'.$u.'"';
$statement3 = $db->prepare($bbb);
$statement3->execute();
$result = $statement3->fetch(PDO::FETCH_OBJ);
$r = json_decode(json_encode($result), True);

if($r["userName"]==""){
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $db->prepare('INSERT INTO project3 (userName, password, firstName, lastName, email) VALUES (:userName, :password, :firstName, :lastName, :email)');
$statement->bindParam(':userName', $userName);
$statement->bindParam(':password', $password);  
$statement->bindParam(':firstName', $firstName);
$statement->bindParam(':lastName', $lastName);
$statement->bindParam(':email', $email);
$userName = $u;
$password = $p;
$firstName = $f;
$lastName = $l;
$email = $e;
$statement->execute();

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bb = 'SELECT * FROM project3 WHERE userName="'.$u.'"';
$statement2 = $db->prepare($bb);
$statement2->execute();
$result = $statement2->fetch(PDO::FETCH_OBJ);
$r = json_decode(json_encode($result), True);

if($r["userName"]==""){
    echo ("Please try again!");
}
else{
    echo ("Success!");
}}
else{
    echo ("Username already exists!");
}}
else{
    echo ("Comfirm password is not match");
    }
}

break;

case "signin":
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bbb = 'SELECT * FROM project3 WHERE userName="'.$u.'"';
$statement3 = $db->prepare($bbb);
$statement3->execute();
$result = $statement3->fetch(PDO::FETCH_OBJ);
$r = json_decode(json_encode($result), True);

if($r["userName"]==""){
    echo ("Username does not exist!");
    }
else{
    if($r["password"]==$p){
        echo ("Success!");
    }
    else{
        echo ("Please check your password.");
    }
}
break;

case "pload":
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bbb = 'SELECT * FROM project3 WHERE userName="'.$u.'"';
$statement3 = $db->prepare($bbb);
$statement3->execute();
$result = $statement3->fetch(PDO::FETCH_OBJ);
$r = json_decode(json_encode($result), True);
$re = $r['userName'].','.$r['firstName'].','.$r['lastName'].','.$r['email'].','.$r['photo'];
echo $re;

break;


case "psave":
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bbb = 'UPDATE project3 SET firstName = "'.$f.'",lastName = "'.$l.'",email = "'.$e.'" WHERE userName = "'.$u.'"';
$statement3 = $db->prepare($bbb);
$statement3->execute();



echo ("Information upgraded.");

break;
case "pload":
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bbb = 'SELECT * FROM project3 WHERE userName="'.$u.'"';
$statement3 = $db->prepare($bbb);
$statement3->execute();
$result = $statement3->fetch(PDO::FETCH_OBJ);
$r = json_decode(json_encode($result), True);
$re = $r['userName'].','.$r['firstName'].','.$r['lastName'].','.$r['email'].','.$r['photo'];
echo $re;

break;

case "upload":

if ($file != ''){
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bbb = 'UPDATE project3 SET photo = "'.$file.'" WHERE userName = "'.$u.'"';
$statement3 = $db->prepare($bbb);
$statement3->execute();
echo ("Photo has uploaded.");}
else{
    echo ("Fail to add picture.");
}
break;



}

?>