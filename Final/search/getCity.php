<?php
  $requiredCountryID = $_GET['selection'];
  //connect database
  require('connectToDatabase.php');

  $result =mysql_query("SELECT CityID, Name FROM Cities WHERE CountryID='$requiredCountryID'");
  
  $selectForm = '<select name="cityID">';

    while ($row=mysql_fetch_assoc($result))
    {
      $selectForm .= "<option value=".$row['CityID'].">".$row['Name']."</option>";
    } //while

    $selectForm .= "<option disabled selected>Choose a City</option></select>";
   echo $selectForm;
?>
