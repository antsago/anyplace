<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="../images/lightblue.jpg">

<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<meta charset="utf-8">
<h1>
User Profile
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
   <td><a href="login/userProfile.php">'. $_SESSION["name"].'</a></td>
   </tr>
   <tr>
     <td><a href="logout.php">logout</a></td>
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
<div>
<br>
<form action="changeUserDetails.php" method="post">
Name: <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"/> <br>
Surname: <input type="text" name="surname" value="<?php echo $_SESSION['surname'] ?>"/> <br>
Age: <input type="text" name="age" value="<?php echo $_SESSION['age'] ?>"/> <br>
<?php 
  if ($_SESSION['gender'] == "male")
  {
    echo '<input type="radio" name="gender" value="male" checked />Male';
    echo '<input type="radio" name="gender" value="female" />Female<br>';
  } // if
  else 
  {
    echo '<input type="radio" name="gender" value="male" />Male';
    echo '<input type="radio" name="gender" value="female" checked />Female<br>';
  } // else
?>
Country: 
<select name="countryID">
<?php
  //connect database
  require('../connectToDatabase.php');

  $result =mysql_query("SELECT CountryID, Name FROM Countries");
  while ($row=mysql_fetch_assoc($result))
  { 
    if ($_SESSION['country'] == $row['CountryID'])
      echo "<option disabled selected value=".$row['CountryID'].">".$row['Name']."</option>";
    else
      echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
  }//while
  require('../closeConnection.php');
?>
</select>
 <input type="submit" value="Change values">
</form>

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


