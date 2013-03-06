<!DOCTYPE HTML>
<html>
<body>
<?php

  require 'getCheckBoxes.php';

  $countryID = $_POST["countryID"]; 

  require 'connectToDatabase.php';

  if ($countryID < 1)
  {
    echo "Please select a country!!";
  } // if

  $query = "SELECT Name, Description FROM Places WHERE Sightseeing='$sightseeing' AND
                    Nightlife='$nightlife' AND Family_Vacation='$family' AND
                      Sports='$sports' AND Natural_Life='$natural' AND 
                        CountryID='$countryID'";

  $result = mysql_query($query);

    while ($row = mysql_fetch_array($result))
    {
      echo $row['Name']."<br>".$row['Description']."<br>";
    } // while

  require 'closeConnection.php';
?>

</body>
</html>

  
