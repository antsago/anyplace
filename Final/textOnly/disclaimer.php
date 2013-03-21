<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="../images/wave_pattern.jpg">

<head>

<link rel="stylesheet" type="text/css" href="../style.css">
<meta charset="utf-8">
<h1>
Disclaimer
</h1>
<?php

if  (isset($_SESSION['name']))
{ 
  $userTable='<table border="1" style="float: right;">
  <tr>
   <td rowspan ="2">' ;

   if  ($_SESSION['gender'] == male){ $userTable .= '<img src="../images/maleProfile.jpg" width="125" height="90">';}
   else{ $userTable .= '<img src="../images/femaleProfile.jpg" width="125" height="90">';}
   $userTable .= '</td>
   <td><a href="../login/userProfile.php">'. $_SESSION["name"].'</a></td>
   </tr>
   <tr>
     <td><a href="../login/logout.php">logout</a></td>
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


<p>
Thank you for visiting our website and for signing up! Please read this carefully before using our website!</p>
<p>Our policy is clear! By using our website you accept this disclaimer in full. We reserve the right to modify these terms at any time. Therefore, you,as a user,should check periodically for changes. As long as changes have been done, you agree to accept the changes by using our website, even if you have not reviewed the changes.

<ol>
<p1><b>Key contents</p1></b>
<li>Rights to information published</li>
<li>Website content(quality,accuracy)<br>
Visitors who use our web page and rely on any information,do so at their own risk.<br>
We are trying to do our best but is not warranted.</li>
<li>Restrictions on who can use the web page.<br>
Our web page is just for students.<br>
So, please do not sign up if you are not a student!</li>
<li>Our right to remove or reproduce any material posted or uploaded on our page.<br>
Please, avoid creating any fake accounts,because everything is being checked, so you will get caught!</li>
<li>Liability for the actions of users of our website.<br>
You must not use our website in any unlawful, illegal, or harmful way.</li>
<li>Limiting liability for viruses/damage.<br>
We do not warrant that our website will work uninterrupted, without errors.<br>
We also do not warrant that our website is free of viruses or bugs.</li>
It is entirely your responsibility as a user,to implement procedures and check for viruses. However, we are trying to do our best!
</ol>

</p>


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
