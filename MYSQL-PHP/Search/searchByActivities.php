<!DOCTYPE HTML>
<html>
<body>
<?php

  require 'getCheckBoxes.php';

  $searchBY = $_POST["showBY"]; 

  require 'connectToDatabase.php';

  if ($searchBY == 1)
  {
    echo "Please select how to present your results!!";
  } // if

  else if ($searchBY == "country")
  {
    $query = "SELECT DISTINCT CountryID FROM Places WHERE Sightseeing='$sightseeing' AND
                             Nightlife='$nightlife' AND Family_Vacation='$family' AND
                              Sports='$sports' AND Natural_Life='$natural'";
    $result = mysql_query($query);

    while ($row = mysql_fetch_array($result))
    {
      $countryQuery = mysql_query("SELECT Name, Description FROM Countries WHERE CountryID=$row[CountryID]");
      $resultCountry = mysql_fetch_assoc($countryQuery);
      echo $resultCountry['Name']."<br>".$resultCountry['Description']."<br>";
    } // while

  } // else-if

  else if ($searchBY == "city")
  {
    $query = "SELECT DISTINCT CityID FROM Places WHERE Sightseeing='$sightseeing' AND
                             Nightlife='$nightlife' AND Family_Vacation='$family' AND
                              Sports='$sports' AND Natural_Life='$natural'";
    $result = mysql_query($query);

    while ($row = mysql_fetch_array($result))
    {
      $cityQuery = mysql_query("SELECT Name, Description FROM Cities WHERE CityID=$row[CityID]");
      $resultCity = mysql_fetch_assoc($cityQuery);
      echo $resultCity['Name']."<br>".$resultCity['Description']."<br>";
    } // while

  } // else-if

  else if ($searchBY == "place")
  {
    $query = "SELECT DISTINCT PlaceID FROM Places WHERE Sightseeing='$sightseeing' AND
                             Nightlife='$nightlife' AND Family_Vacation='$family' AND
                              Sports='$sports' AND Natural_Life='$natural'";
    $result = mysql_query($query);

    while ($row = mysql_fetch_array($result))
    {
      $placeQuery = mysql_query("SELECT Name, Description FROM Places WHERE PlaceID=$row[PlaceID]");
      $resultPlace = mysql_fetch_assoc($placeQuery);
      echo $resultPlace['Name']."<br>".$resultPlace['Description']."<br>";
    } // while

  } // else-if

  require 'closeConnection.php';
?>

</body>
</html>

  
