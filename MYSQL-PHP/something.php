<?php
  $requiredCountryID = $_GET['selection'];
  //connect database
  require('connectToDatabase.php');
  
  $result =mysql_query("SELECT CountryID, CityID, Name FROM Cities");
  
  echo '<select name="cityID">';

    while ($row=mysql_fetch_assoc($result))
    {
      if ($requiredCountryID == $row['CountryID']) 
        echo "<option value=\"$row['CountryID']\">$row['Name']></option>";
    }//while
  
    echo "<option disabled selected>Choose a Country</option>";
  echo '</select>'
?>
