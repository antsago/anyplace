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
&nbsp;
</footer>

<?php

  require 'getCheckBoxes.php';
  $searchBY = $_POST["showBY"]; 

  if (($sightseeing == 0) && ($nightlife == 0) && ($family == 0) && ($sports == 0) && ($natural == 0))
  {
    header ("Location: searchFormNoCheckbox.php");
  }
  else if ($searchBY == null)
  {
    header ("Location: searchFormNoDropdown.php");
  }
  else
  {
    require '../connectToDatabase.php';

    if ($searchBY == "country")
    {
      $query = "SELECT DISTINCT CountryID FROM Places WHERE ";
      require 'query.php';
      $result = mysql_query($query);

      
      if (mysql_num_rows($result) < 1)
        echo "<br><br><div10> Sorry no such places were found!!</div10><br><br><br>";

      while ($row = mysql_fetch_array($result))
      {
        $countryQuery = mysql_query("SELECT Name, Description FROM Countries WHERE CountryID=$row[CountryID]");
        $resultCountry = mysql_fetch_assoc($countryQuery);
        echo "<div><h10>".$resultCountry['Name']."</h10><br><br><p10>".$resultCountry['Description']."</p10></div><br><br><br>";
      } // while

    } // else-if

    else if ($searchBY == "city")
    {
      $query = "SELECT DISTINCT CityID FROM Places WHERE ";
      require 'query.php';
      $result = mysql_query($query);

      if (mysql_num_rows($result) < 1)
        echo "<br><br><div10> Sorry no such places were found!!</div10><br><br><br>";

      while ($row = mysql_fetch_array($result))
      {
        $cityQuery = mysql_query("SELECT Name, Description FROM Cities WHERE CityID=$row[CityID]");
        $resultCity = mysql_fetch_assoc($cityQuery);
        echo "<div><h10>".$resultCity['Name']."</h10><br><br><p10>".$resultCity['Description']."</p10></div><br><br><br>";
      } // while

    } // else-if

    else if ($searchBY == "place")
    {
      $query = "SELECT DISTINCT PlaceID FROM Places WHERE ";
      require 'query.php';
      $result = mysql_query($query);
      
      if (mysql_num_rows($result) < 1)
        echo "<br><br><div10> Sorry no such places were found!!</div10><br><br><br>";

      while ($row = mysql_fetch_array($result))
      {
        $placeQuery = mysql_query("SELECT Name, Description FROM Places WHERE PlaceID=$row[PlaceID]");
        $resultPlace = mysql_fetch_assoc($placeQuery);
        echo "<div><h10>".$resultPlace['Name']."</h10><br><br><p10>".$resultPlace['Description']."</p10></div><br><br><br>";
      } // while

    } // else-if
  } // else
  require '../closeConnection.php';
?>



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
