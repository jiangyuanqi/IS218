<html>
<head>
<title>List</title>
<style type="text/css">
    h1{position:absolute;top:30px;left:30px;width:540px;padding:10px;color:#606060;font-family: helvetica;}
	.text{position:absolute;top:95px;width:250px;padding:10px;line-height: 21px;}
	.placeholder{position:absolute;top:95px;left:270px;width:250px;padding:10px;line-height: 50px;} 
    .button{position:absolute;top:350px;left:260px;display:block;width:60px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
	.ForgetPassword{position:absolute;top:250px;left:260px;font-size:80%;}
	.ConfirmInfor{position:absolute;top:80px;width:540px;padding:10px;line-height: 40px;} 
    .responseText{position:absolute;top:420px;left:140px;}
    .star{position:absolute;left:188px;}
    .button2{position:absolute;top:200px;left:280px;display:block;width:23px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
    .responseText2{position:absolute;top:270px;left:190px;}
    .a{position:absolute;top:99px;left:240px;padding:10px;font-family: helvetica;text-align: center;}
    .button3{position:absolute;top:270px;left:250px;display:block;width:34px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
    .button4{position:absolute;top:270px;left:340px;display:block;width:34px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
    .responseText3{position:absolute;top:320px;left:170px;}

    </style>
</head>
<body>
<p>|&nbsp<a  href="index.php?title=signup" style="text-decoration: none;">Sign up</a>&nbsp|&nbsp
        <a href="index.php?title=signin" style="text-decoration: none;">Sign in</a>&nbsp|&nbsp
        <a href="form.php" style="text-decoration: none;">List</a>&nbsp|
        </p>
<center>
<?php
$db_host="sql1.njit.edu";     
$db_user="yj99";      
$db_pass="GYb6WQYNR";       
$db_name="yj99";      
$link=mysql_connect($db_host,$db_user,$db_pass)or die("".mysql_error());
mysql_select_db($db_name,$link);   
$sql="select * from project3";    
$result=mysql_query($sql,$link);  
echo "List:";
echo "<table border=1>";   
echo "<tr><td>userName</td><td>firstName</td><td>lastName</td><td>email</td></tr>";
while($row=mysql_fetch_array($result)) 
{
 echo "<tr>";
 echo "<td>".$row[userName]."</td>";  
 echo "<td>".$row[firstName]." </td>"; 
 echo "<td>".$row[lastName]." </td>";   
 echo "<td>".$row[email]." </td>"; 
 echo "</tr>";
}
echo "</table>";
?>
</center>
</body>
</html>