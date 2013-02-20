<!DOCTYPE HTML>
<html>
<body>
<?php
  
  //get name, description and id of country
  $cityName = $_POST["citName"];
  $description = $_POST["description"];
  $countryID = $_POST["countryID"];
  
  //connect database
  require('connectToDatabase.php');

  if (cityIsNew($cityName, $countryID))
  {
    mysql_query("INSERT INTO Cities (CountryID, Name, Description)
                 VALUES ('$countryID', '$cityName', '$description')");
    echo "City added";
  }//if
  else
    {echo "City already exists in database!";}
  
  
//--------functions-------//
  
  //Check if a city exists, if lots of cities improve function using country id
  function cityIsNew($cityName, $countryID)
  {
    //fetch list of countries
    $cityFields = mysql_query("SELECT CountryID, Name FROM Cities")
                      or die('Problem getting city list: '.mysql_error());
    //browse that list until entry found
    while ($requiredCity = mysql_fetch_array($cityFields))
    {
      if ($cityName == $requiredCity["Name"] && $countryID == $requiredCity["CountryID"])
      {return false;}

    }//while
    //if it has reach this point, no entry has been found
    return true;
  }//cityIsNew
?>
</body>
</html>
