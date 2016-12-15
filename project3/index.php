<?php
$title = '';
$t = $_GET['title'];
$name = $_GET['userName'];
if ($name==""){
    $welcome = '';
    }
else{
    $welcome = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome 
    <a href='index.php?title=profile&userName=$name' id='name3' >$name</a> !
    &nbsp|&nbsp<a href='index.php?title=profile&userName=$name' style='text-decoration: none;'>Profile</a>
    &nbsp|&nbsp<a href='index.php' style='text-decoration: none;'>Log out</a>&nbsp|
    <a href='#' id= 'uname' name='uname' style='display:none' value='$name'>$name<a>";
}

switch ($t){
    case "signup":
        $title = "Sign up";
        $hearder = '
        <p>|&nbsp<a  href="index.php?title=signup" style="text-decoration: none;">Sign up</a>&nbsp|&nbsp
        <a href="index.php?title=signin" style="text-decoration: none;">Sign in</a>&nbsp|&nbsp
        <a href="form.php" style="text-decoration: none;">List</a>&nbsp|';  
        $tit = '
        </p>
        <h1 align="center">';
        $content = '
        </h1>
    	<p class = "ConfirmInfor" align="center">	
        <div class = "text">
    	<p align="right"> Username:</p>
        <p align="right"> Password:</p>
    	<p align="right"> Confirm Password:</p>
    	<p align="right"> First Name:</p>
        <p align="right"> Last Name:</p>
        <p align="right"> Email Address:</p>
	    </div>
        <form name="myform2">
	    <div class = "placeholder">
	    <p align="left"><input placeholder="Username" type="text" class="Username" name="u" value=""/></p>
        <font color="red" class="star" style="top:9.5px">*</font>
        <p align="left"><input placeholder="Password" type="password" class="Password" name="p" value=""/></p>
        <font color="red" class="star" style="top:47px">*</font>
	    <p align="left">
        <input placeholder="Confirm Password" type="password" class="Password" name="pp" value=""/></p>
        <font color="red" class="star" style="top:83px">*</font>
        <p align="left"><input placeholder="First Name" type="text" class="FirstName" name="f" value=""/></p>
        <p align="left"><input placeholder="Last Name" type="text" class="LastName" name="l" value=""/></p>
        <p align="left"><input placeholder="Email Address" type="text" class="Email" name="e" value=""/></p>
        </div>
        <div class="button" href="#"><a href="#" onclick="creat();">Submit!</a></div>
        <textarea class="responseText" rows="1" cols="50" id="responseText" name="c">
        Click submit to creat account
        </textarea>
        </form>
        </p>';
        break;
        
    case "signin":
        $title = "Sign in";
        $hearder = '
        <p>|&nbsp<a  href="index.php?title=signup" style="text-decoration: none;">Sign up</a>&nbsp|&nbsp
        <a href="index.php?title=signin" style="text-decoration: none;">Sign in</a>&nbsp|&nbsp
        <a href="form.php" style="text-decoration: none;">List</a>&nbsp|' ;  
        $tit = '
        </p>
        <h1 align="center">';
        $content = '
        </h1>
    	<p class = "ConfirmInfor" align="center">	
        <div class = "text">
    	<p align="right"> Username:</p>
        <p align="right"> Password:</p>
	    </div>
        <form name="myform2">
	    <div class = "placeholder">
	    <p align="left"><input placeholder="Username" type="text" class="Username" name="u" value=""/></p>
        <p align="left"><input placeholder="Password" type="password" class="Password" name="p" value=""/></p>
        </div>
        <div class="button2" href="#"><a href="#" onclick="signin();">Go!</a></div>
        <textarea class="responseText2" rows="1" cols="40" id="responseText2" >
        Please sign in
        </textarea>
        </form>
        </p>';
        break;
        
    case "profile":
        $title = "Profile";
        $hearder = '
        <p>&nbsp&nbsp
        &nbsp' ;  
        $tit = '
        </p>
        <h1 align="center">';
        $content = '
        </h1> 	
        <div class = "text">
    	<p align="right"> Username:</p>
    	<p align="right"> First Name:</p>
        <p align="right"> Last Name:</p>
        <p align="right"> Email Address:</p>
	    </div>
        <form name="myform2">
	    <div class = "placeholder">
	    <p align="left"><input placeholder="Username" type="text" class="Username" name="u" id="u" value="" readonly="readonly" /></p><font color="red" class="star" style="top:9.5px">Locked</font>
        <p align="left"><input placeholder="First Name" type="text" class="FirstName" name="f" id="f" value=""/></p>
        <p align="left"><input placeholder="Last Name" type="text" class="LastName" name="l" id="l" value=""/></p>
        <p align="left"><input placeholder="Email Address" type="text" class="Email" name="e" id="e" value=""/></p>
        </div>
        <div class="button3" href="#"><a href="#" onclick="pload()">Load</a></div>
        <div class="button4" href="#"><a href="#" onclick="psave()">Save</a></div>
        <textarea class="responseText3" rows="3" cols="45" id="responseText3">
        Click Load to get information &#13;&#10;       Click Save to upgrade information
        </textarea>
        </form>
        </p>
        <div  class="img">
        <img id="img" src="default.png" alt="img" height="82" width="82">
        </div>
        <div class="upfile" id="upfile">
        <form >
        <label for="file">Filename:</label>
        <div><input type="file" name="file" id="file" /> <br></div>
        <div class="button5" href="#"><a href="#" onclick="upload()">Upload</a></div>
        </form>
        </div>
        
        
        ';
        break;
        
    case "main":
        $title = "Main page";
        $hearder = '
        <p>&nbsp&nbsp
        &nbsp' ;  
        $tit = '
        </p>
        <h1 align="center">';
        $content = '
        </h1><p class="a">IS218 Project3<br>Yuanqi Jiang<br>12/15/2016</p>
        <p id="name2" style="display:none">1</p>';  
    break;
    
             
    default:
        $title = "Main page";
        $hearder = '
        <p>|&nbsp<a  href="index.php?title=signup" style="text-decoration: none;">Sign up</a>&nbsp|&nbsp
        <a href="index.php?title=signin" style="text-decoration: none;">Sign in</a>&nbsp|&nbsp
        <a href="form.php" style="text-decoration: none;">List</a>&nbsp|' ;  
        $tit = '
        </p>
        <h1 align="center">';
        $content = '
        </h1><p class="a">IS218 Project3<br>Yuanqi Jiang<br>12/15/2016</p>';
}
?>
<html>
  <head>
    <title><?php echo "$title" ?></title>
    <style type="text/css">
    h1{position:absolute;top:30px;left:30px;width:540px;padding:10px;color:#606060;font-family: helvetica;}
	.text{position:absolute;top:95px;width:250px;padding:10px;line-height: 21px;}
	.placeholder{position:absolute;top:95px;left:270px;width:250px;padding:10px;line-height: 50px;} 
    .button{position:absolute;top:350px;left:260px;display:block;width:60px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
	.ForgetPassword{position:absolute;top:250px;left:260px;font-size:80%;}
	.ConfirmInfor{position:absolute;top:80px;width:540px;padding:10px;line-height: 40px;} 
    .responseText{position:absolute;top:420px;left:140px;}
    .star{position:absolute;left:188px;width:540px;}
    .button2{position:absolute;top:200px;left:280px;display:block;width:23px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
    .responseText2{position:absolute;top:270px;left:190px;}
    .a{position:absolute;top:99px;left:240px;padding:10px;font-family: helvetica;text-align: center;}
    .button3{position:absolute;top:270px;left:250px;display:block;width:34px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
    .button4{position:absolute;top:270px;left:340px;display:block;width:34px;height:17px;background:#87CEEB;padding:10px;border-radius:6px;color:white;font-weight:bold;}
    .responseText3{position:absolute;top:320px;left:170px;}
    .upfile{position:absolute;top:205px;left:580px;width:220px;padding:10px;line-height: 21px;}
    .img{position:absolute;top:105px;left:580px;width:220px;padding:10px;line-height: 21px;}
    .button5{position:absolute;top:55px;left:10px;display:block;width:50px;height:17px;font-weight:bold;}

    </style>
<script>
function creat()
{
var u= myform2.u.value;
var p= myform2.p.value;
var pp= myform2.pp.value;
var f= myform2.f.value;  
var l= myform2.l.value;
var e= myform2.e.value;

var xmlhttp;

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("responseText").innerHTML=xmlhttp.responseText;
    if (document.getElementById("responseText").innerHTML == "Success!")
    {
        window.location.href='index.php?title=main&userName='+u;
    }
    }
  }
xmlhttp.open("GET","db.php?u="+u+"&p="+p+"&pp="+pp+"&f="+f+"&l="+l+"&e="+e+"&event=creat",true);
xmlhttp.send();
}

function signin()
{
var u= myform2.u.value;
var p= myform2.p.value;

var xmlhttp;

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("responseText2").innerHTML=xmlhttp.responseText;
    if (document.getElementById("responseText2").innerHTML == "Success!")
    {
        window.location.href='index.php?title=main&userName='+u;
    }
    }
  }
xmlhttp.open("GET","db.php?u="+u+"&p="+p+"&event=signin",true);
xmlhttp.send();
}

    
function pload()
{
document.getElementById("u").value = "<?php echo "$name" ?>";
var u= myform2.u.value;
var xmlhttp;

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        var aa = xmlhttp.responseText;
        var bb = aa.split(",")
    document.getElementById("responseText3").innerHTML="Information loaded.";
    document.getElementById("u").value=bb[0];
    document.getElementById("f").value=bb[1];
    document.getElementById("l").value=bb[2];
    document.getElementById("e").value=bb[3];
    if (bb[4]!=''){
        document.getElementById("img").src=bb[4];
    }
    }
  }
xmlhttp.open("GET","db.php?u="+u+"&event=pload",true);
xmlhttp.send();
}

function psave(){

var u= document.getElementById("u").value;
var f= document.getElementById("f").value;
var l= document.getElementById("l").value;
var e= document.getElementById("e").value;

var xmlhttp;

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("responseText3").innerHTML=xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","db.php?u="+u+"&f="+f+"&l="+l+"&e="+e+"&event=psave",true);
xmlhttp.send();
}

function upload(){
document.getElementById("u").value = "<?php echo "$name" ?>";
var u= myform2.u.value;
var file= document.getElementById("file").innerHTML;

var xmlhttp;

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("responseText3").innerHTML=xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","db.php?u="+u+"&event=upload"+"&file="+file,true);
xmlhttp.send();
}


</script>
  </head>
  <body>
    <?php 
    echo "$hearder", "$welcome", "$tit","$title", "$content"
    ?> 
        
  </body>
</html>
