<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="../images/wave_pattern.jpg">

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
   <td><a href="../login/userProfile.php">'. $_SESSION["name"].'</a></td>
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

<a class="list" href="../search/searchForm.php">
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
&nbsp;
</nav>
</footer>

<p1>
About the webpage
</p1>
<hr>
<center>
<img border="1" src="../images/poster.jpg"
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


<p1>
Staff
</p1>
<hr>

<table>
<tr>
<td><img border="1" src="../images/shin.jpg" 
     width="100" height="120"></td>
<td>
    Shin young pak<br>
    paks2@cs.man.ac.uk</td>
</tr>
</table> 

<hr>
<table>
<tr>
<td><img border="1" src="../images/irina.jpg" 
     width="100" height="120"></td>
<td>
    Irina Prioteasa<br>
    priotei2@cs.man.ac.uk</td>
</tr>
</table> 
 
<hr> 
<table>
<tr>
<td><img border="1" src="../images/savvas.jpg" 
     width="100" height="120"></td>
<td>
    Savvas Ashiotis<br>
    ashiots2@cs.man.ac.uk</td>
</tr>
</table> 

<hr>     
<table>
<tr>
<td><img border="1" src="../images/antonio.jpg" 
     width="100" height="120"></td>
<td>
    Antonio J.Sanchex Gomez<br>
    sancheza2@cs.man.ac.uk</td>
</tr>
</table> 

<hr>     
<table>
<tr>
<td><img border="1" src="../images/sakina.jpg" 
     width="100" height="120"></td>
<td>
    Sakina Valiyeva<br>
    valiyes2@cs.man.ac.uk</td>
</tr>
</table> 
     


<footer>
<nav>
<a class="foot" href="../textOnly/contactUs.php">
<strong>Contact Us</strong></a>
<a class="foot" href="../textOnly/aboutUs.php">
<strong>About Us</strong></a>
<a class="foot" href="../textOnly/disclaimer.php">
<strong>Disclaimer</strong></a>
</nav>
</footer>



</body>
</html>
