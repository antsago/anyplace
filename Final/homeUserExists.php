<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
<style type="text/css">

#container {
     position:relative;
     <?php 
       if  (isset($_SESSION['name']))
         echo 'width:1090px;';
       else 
         echo 'width: 800px;';
      ?>
     height:250px;
     overflow:hidden;
     border:none;
     margin:0px auto 0 auto;
 }
#div1 {
     position:absolute;
     left:0px;
     top:0px;
     width:1225px;
     height:250px;
 }
#div2 {
     position:absolute;
     left:424px;
     top:0px;
     width:1225px;
     height:250px;
 }
img {
     border:none;
     margin:1px;
     float:left;
 }
</style>
<script type="text/javascript">
  var m=0;
  var n=1225;
  var speed=20;
function scrollPics() {
     document.getElementById('div1').style.left=m+'px';
     document.getElementById('div2').style.left=n+'px';
   m--;
   n--;
if(m==-1225) {
   m=1225;
 }
if(n==-1225) {
   n=1225;
 }
setTimeout('scrollPics()',speed);
 } 
window.onload=function() {
   scrollPics();
 }
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>

<body background="images/lightblue.jpg">

<h1>
@nyplace
</h1>
<?php

if  (isset($_SESSION['name']))
{ 
  $userTable='<table border="1" style="float: right;">
  <tr>
   <td rowspan ="2">' ;

   if  ($_SESSION['gender'] == male){ $userTable .= '<img src="images/maleProfile.jpg" width="125" height="90">';}
   else{ $userTable .= '<img src="images/femaleProfile.jpg" width="125" height="90">';}
   $userTable .= '</td>
   <td><a href="login/userProfile.php">'. $_SESSION["name"].'</a></td>
   </tr>
   <tr>
     <td><a href="login/logout.php">logout</a></td>
  </tr>
</table>';
 echo $userTable;
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

<a class="list" href="search/searchForm.php">
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
<footer>
&nbsp
</footer>


<table border="0">
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
<a href="login/register.php"> 
Register</a>
</p>
</right>
</form>



</td>';}//else 
?>
<td>
<div id="container">

<div id="div1">
<img border="0" src="images/photo1.jpg" alt="">
<img border="0" src="images/photo2.jpg" alt="">
<img border="0" src="images/photo3.jpg" alt="">
<img border="0" src="images/photo4.jpg" alt="">
</div>

<div id="div2">
<img border="0" src="images/photo1.jpg" alt="">
<img border="0" src="images/photo2.jpg" alt="">
<img border="0" src="images/photo3.jpg" alt="">
<img border="0" src="images/photo4.jpg" alt="">
</div>

</div>
</td>
</tr> 
</table>
<br>
<div10 align="center">
Email already exists!! Are you sure you haven't registered already??
</div10>
<br>
<p11 align="center"> Welcome <br>
Feel free to use our existing functions. (after you register!) <br>
Hosting will be added soon!! <br>
More to come later on... ;-) 
</p11>

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
