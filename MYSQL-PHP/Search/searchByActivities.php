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
    $query = "SELECT * FROM Places WHERE Sightseeing='$sightseeing' AND
                             Nightlife='$nightlife' AND Family_Vacation='$family' AND
                              Sports='$sports' AND Natural_Life='$natural'";
    $result = mysql_query($query);

    while ($row = mysql_fetch_array($result))
    {
      $countryQuery = mysql_query("SELECT Name, Description FROM Countries WHERE CountryID=$row[CountryID]");
      $resultCountry = mysql_fetch_assoc($countryQuery);
      echo $resultCountry['Name']."<br>".$resultCountry['Description'];
    } // while

  } // else-if

  else if ($searchBY == "city"){}


  else if ($searchBY == "place"){}

?>

</body>
</html>

  
