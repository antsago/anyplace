<!DOCTYPE HTML>
<html>
<body>
<?php

  require 'getCheckBoxes.php';

  $cityID = $_POST["cityID"]; 

  require 'connectToDatabase.php';

  if ($cityID < 1)
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

</body>
</html>

  
