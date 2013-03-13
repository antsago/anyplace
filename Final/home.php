<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="images/lightblue.jpg">

<head>

<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<h1>
@nyplace
</h1>
<?php

if  (isset($_SESSION['name']))
{ echo '<table border="1" style="float: right;">
  <tr>
   <td rowspan ="2"> 
   <img src="./logo.png"
     width="200" height="100">
   </td>
   <td> <a src="login/userProfile.php">'. $_SESSION["name"].'</a></td>
   </tr>
   <tr>
     <td><a href="login/logout.php">logout</a></td>
  </tr>
</table>';
}//if
?>

<header>
<table border="0">
<div>
<tr>
<td>
<a class="now"  href="home.php">
<img src="images/logo.png"
     width="200" height="100"></a>     
</td><td >

<a class="list" href="search/search.php">
<img border="0" src="images/Search.png"
     width="200" height="100"></a>
</td><td>

<a class="list" href="hosting/hosting.php">
<img border="0" src="images/Hosting.png"
     width="200" height="100"></a>
</a>
</td>
</tr>
</table>
</div>
</header>


<table border="1">
<tr>
<?php if  (!isset($_SESSION['name'])){echo '<td width="30%">

<form action="login/login1.php" method="post">
<table border="0">
<tr><td>
  Email: 
</td><td>
  <input type="email" name="Email"/> <br>
</td></tr><tr><td>
  Password: 
</td><td>
<input type="password" name="password"/> <br>
</td></tr><tr><td></td><td>
<input style="float: right;" type="submit" value="fly"/>
</td>
</table>
</form>

<p>
<right>
 Not a User? 
<a href="http://soba.cs.man.ac.uk/~sanchea2/Page_design/register.php"> 
Register</a>
</p>
</right>
</form>



</td>';}//else 
?>
<td>
<marquee behavior="scroll" direction="left">

<img border="0" src="images/photo1.jpg" alt=""
     hieght="250" width="304">
<img border="0" src="images/photo2.jpg" alt=""
     hieght="250" width="304">
<img border="0" src="images/photo3.jpg" alt=""
     hieght="250" width="304">
<img border="0" src="images/photo4.jpg" alt=""
     hieght="250" width="304">      
</marquee>
</td>
</tr> 
</table>

<table border="1">  
<tr>
<td>
forums updates~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</td>
<td>
photo updates~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</td>
</tr>
</table>

<footer>
<nav>
<a class="foot" href="textOnly/contactUs.php">
<strong>Contact Us</strong></a>
<a class="foot" href="textOnly/aboutUs.php">
<strong>About Us</strong></a>
<a class="foot" href="textOnly/disclaimer.php">
<strong>Disclaimer</strong></a>
</nav>
</footer>



</body>
</html>
