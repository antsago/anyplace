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

<?php

  require 'getCheckBoxes.php';

  $cityID = $_POST["cityID"]; 

  require 'connectToDatabase.php';

  if ($cityID == null)
  {
    echo "Please select a city!!";
  } // if

  $query = "SELECT Name, Description FROM Places WHERE Sightseeing='$sightseeing' AND
                    Nightlife='$nightlife' AND Family_Vacation='$family' AND
                      Sports='$sports' AND Natural_Life='$natural' AND 
                        CityID='$cityID'";

  $result = mysql_query($query);

    while ($row = mysql_fetch_array($result))
    {
      echo $row['Name']."<br>".$row['Description']."<br>";
    } // while

  require 'closeConnection.php';
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