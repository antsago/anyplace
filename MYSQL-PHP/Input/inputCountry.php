<!DOCTYPE HTML>
<html>
<body>
<?php
require 'connectToDatabase.php';

//get name and description
$countryName = $_POST["countryName"];
$countryDescription = $_POST["description"];


if (countryIsNew($countryName))
{
  mysql_query("INSERT INTO Countries (Name, Description)
                 VALUES ('$countryName', '$countryDescription')");
  echo "Country has been added!";
}//if
else 
  echo "Country is already on database";

//Check if a country exists
  function countryIsNew($country)
  {
    //fetch list of countries
    $allCountries = mysql_query("SELECT Name FROM Countries")
                      or die('Problem getting country list: '.mysql_error());
    //browse that list until entry found
    while ($requiredCountry = mysql_fetch_field($allCountries))
    {
      if ($country == $requiredCountry)
      {return false;}
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//countryIsNew

require('closeConnection.php');
?>
</body>
</html>

