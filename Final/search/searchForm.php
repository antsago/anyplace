<!DOCTYPE html>
<?php session_start();?>
<html>
<body background="../images/lightblue.jpg">

<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<meta charset="utf-8">
<h1>
Search
</h1>
<?php
if (!isset($_SESSION['name']))
{
  header ("Location: searchFormNoLogin.php");
}
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
     <td><a href="login/logout.php">logout</a></td>
  </tr>
</table>';
 echo $userTable;
}//if
?>
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
<br><br>
<div>
<br>
Search for places by activities:
<form action="searchByActivities.php" method="post">
Sightseeing: <input type="checkbox" name="sightseeing"/> <br>
Nightlife: <input type="checkbox" name="nightlife"/> <br>
Family: <input type="checkbox" name="family"/> <br>
Sports: <input type="checkbox" name="sports"/> <br>
Natural: <input type="checkbox" name="natural"/> <br>
Choose what your results should look like: <br>
<select name="showBY">
<option value="country">Countries</option>
<option value="city">Cities</option>
<option value="place">Places</option>
<option disabled selected>Show by</option>
</select> <br>
<input type="submit"/>
</form>
<br>
</div>
<hr>
<br>
Search for places in specified country:
<form action="searchByCountry.php" method="post">
Sightseeing: <input type="checkbox" name="sightseeing"/> <br>
Nightlife: <input type="checkbox" name="nightlife"/> <br>
Family: <input type="checkbox" name="family"/> <br>
Sports: <input type="checkbox" name="sports"/> <br>
Natural: <input type="checkbox" name="natural"/> <br>
<select name="countryID">
<?php
  //connect database
  require('../connectToDatabase.php');

  $result =mysql_query("SELECT CountryID, Name FROM Countries");
  while ($row=mysql_fetch_assoc($result))
  {
    echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
  }//while
  require('../closeConnection.php');
?>
<option disabled selected>Choose a Country</option>
</select><br>
<input type="submit"/>
</form>
<br>
<hr>
<br>
Search for places in specified city:
<form action="searchByCity.php" method="post">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
$('#countryID').change(function()
{
$.ajax(
{
url:'getCity.php?selection=' + $('#countryID').val(),
success: function (response)
{$('#getCity').html(response);}
});
});
});
</script>
Sightseeing: <input type="checkbox" name="sightseeing"/> <br>
Nightlife: <input type="checkbox" name="nightlife"/> <br>
Family: <input type="checkbox" name="family"/> <br>
Sports: <input type="checkbox" name="sports"/> <br>
Natural: <input type="checkbox" name="natural"/> <br>
<select id="countryID" name="countryID">
<?php
  //connect database
  require('../connectToDatabase.php');

  $result =mysql_query("SELECT CountryID, Name FROM Countries");
  while ($row=mysql_fetch_assoc($result))
  {
    echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
  }//while
  require('../closeConnection.php');
?>
<option disabled selected>Choose a Country</option>
</select><br><br>
<div id="getCity"></div>
<input type="submit"/>
<br><br>
<div10>
Please check at least one desirable activity!!
</div10>
<br><br>
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
