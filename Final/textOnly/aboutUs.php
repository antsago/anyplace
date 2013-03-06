<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="../images/lightblue.jpg">

<head>

<link rel="stylesheet" type="text/css" href="../style.css">
<meta charset="utf-8">
<h1>
About us
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
<hr>
<h4>
About the webpage
</h4>
<hr>
<center>
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="450" height="330">
</center>    
<p>
Welcome ont our Website!
This is a (holiday)website dedicated to all the students arount the world
who enjoy travelling. Here, you will find information about the country you
would like to visit. We make everything easier for you, so by the time you 
arrive at your desired destination, you will already know the places you should
not miss
</p>

<hr>

<h4>
Staff
</h4>
<hr>
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="200" height="150">
<hr>
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="200" height="150">  
<hr> 
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="200" height="150">
<hr>     
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="200" height="150">
<hr>     
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="200" height="150">
<hr>     
<img border="1" src="/home/S12/paks2/anyplace/Page_design/poster.jpg" alt=""
     width="200" height="150">
     


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
