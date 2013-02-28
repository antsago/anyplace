<!DOCTYPE HTML>
<html>
<body>

<?php
  
  //get the things above
  $countryID = $_POST["countryID"];
  $cityID = $_POST["cityID"];
  $placeName = $_POST["placeName"];
  $description = $_POST["description"];
  $sightseeing = $_POST["sightseeing"];
  $nightlife = $_POST["nightlife"];
  $family = $_POST["family"];
  $sports = $_POST["sports"];
  $natural = $_POST["natural"];

  //connect database
  require 'connectToDatabase.php';
  
  if (placeIsNew($countryID, $cityID, $placeName))
  {
    mysql_query("INSERT INTO Places (CountryID, 
                                     CityID, 
                                     Name, 
                                     Sightseeing, 
                                     Nightlife, 
                                     Family_Vacation, 
                                     Sports, 
                                     Natural_Life, 
                                     Description)
                             VALUES ('$countryID', 
                                     '$cityID', 
                                     '$placeName', 
                                     '$sightseeing', 
                                     '$nightlife',
                                     '$family', 
                                     '$sports', 
                                     '$natural', 
                                     '$description') ");
    echo "Place added!!";
  }//if
  
  
//--------functions-------//
  
  function placeIsNew($countryID, $cityID, $placeName)
  {
    //fetch list of places
    $placeFields = mysql_query("SELECT CountryID, CityID, Name FROM Places")
                      or die('Problem getting place list: '.mysql_error());
    //browse that list until entry found
    while ($requiredPlace = mysql_fetch_array($placeFields))
    {
      if ( $countryID == $requiredPlace["CountryID"] && $cityID == $requiredPlace["CityID"] && $placeName == $requiredPlace["Name"])
      {
        echo "Place already exists!!";
        return false;
      } // if
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//placeIsNew
?>

</body>
</html>
