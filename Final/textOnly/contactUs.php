<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="../images/lightblue.jpg">

<head>

<link rel="stylesheet" type="text/css" href="../style.css">
<meta charset="utf-8">
<h1>
Contact us
</h1>
<?php

if  (isset($_SESSION['name']))
{ echo '<table border="1" style="float: right;">
  <tr>
   <td rowspan ="2"> 
   <img src="./logo.png"
     width="200" height="100">
   </td>
   <td>'. $_SESSION["name"].'</td>
   </tr>
   <tr>
     <td><a href="../login/logout.php">logout</a></td>
  </tr>
</table>';
}//if
?>

<header>
<table border="0">
<div>
<tr>
<td>
<a class="now"  href="../home.php">
<img src="../images/logo.png"
     width="200" height="100"></a>     
</td><td >

<a class="list" href="../search/search.php">
<img border="0" src="../images/Search.png"
     width="200" height="100"></a>
</td><td>

<a class="list" href="../hosting/hosting.php">
<img border="0" src="../images/Hosting.png"
     width="200" height="100"></a>
</a>
</td>
</tr>
</table>
</div>
</header>


<footer>
<nav>
<a class="foot" href="../textOnly/contactUs.html">
<strong>Contact Us</strong></a>
<a class="foot" href="../textOnly/aboutUs.html">
<strong>About Us</strong></a>
<a class="foot" href="../textOnly/disclaimer.html">
<strong>Disclaimer</strong></a>
</nav>
</footer>



</body>
</html>

<html>
<body background="wave_pattern.jpg">

<head>

<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<h3>
Contact Us
</h3>


<head>

<header>
<table border="0">
<div>
<tr>
<td>
<a class="now"  href="home.html">
<img src="/home/S12/paks2/anyplace/Final/logo.png"
     width="200" height="100"></a>     
</td><td >

<a class="list" href="search.html">
<img border="0" src="/home/S12/paks2/anyplace/Final/Search.png"
     width="200" height="100"></a>
</td><td>

<a class="list" href="hosting.html">
<img border="0" src="/home/S12/paks2/anyplace/Final/Hosting.png"
     width="200" height="100"></a>
</a>
</td>
</tr>
</div>
</table>
</header>



<footer>
<nav>
<a class="foot" href="contactUs.html">
<strong>Contact Us</strong></a>
<a class="foot" href="aboutUs.html">
<strong>About Us</strong></a>
<a class="foot" href="disclaimer.html">
<strong>Disclaimer</strong></a>
</nav>
</footer>



</body>
</html>
