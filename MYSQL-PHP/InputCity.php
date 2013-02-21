//Needs an html form that post name and description of the city and id of country
<?php
  
  //get name, description and id of country
  $cName = $_POST["name"];
  $cDescription = $_POST["description"];
  $countryID = $_POST["countryID"];
  
  //connect database
  mysql_connect("ramen.cs.man.ac.uk", "12_COMP10120_B1", "ztDsBWSMqDny80BR")
    or die('Could not connect: ' . mysql_error());
  mysql_select_db("12_COMP10120_B1", $connection) or die('Could not connect to '.
                                          'the database: '.mysql_error());
  


  if (cityIsNew($cName))
  {
    mysql_query("INSERT INTO Cities (CountryID/*check name*/, City Name, Description)
                 VALUES ('$countryID', '$cName', '$cDescription')");
  }//if
  
  
//--------functions-------//
  
  //Check if a city exists, if lots of cities improve function using country id
  function cityIsNew($cName)
  {
    //fetch list of countries
    $allCities = mysql_query("SELECT City Name FROM Cities")
                      or die('Problem getting city list: '.mysql_error());
    //browse that list until entry found
    while ($oldCity = mysql_fetch_field($allCities))
    {
      if ($cName = $oldCity)
      {return false;}
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//cityIsNew
?>
