//Needs an html form that post name and description of the city and id of country
<?php
  
  //get name and description
  $cName = $_POST["name"];
  $cDescription = $_POST["description"];
  
  //connect database
  mysql_connect("ramen.cs.man.ac.uk", "12_COMP10120_B1", "ztDsBWSMqDny80BR")
    or die('Could not connect: ' . mysql_error());
  mysql_select_db("12_COMP10120_B1", $connection) or die('Could not connect to '.
                                          'the database: '.mysql_error());
  


  if (cityIsNew($cName))
  {
    mysql_query("INSERT INTO Cities (City Name, Description)
                 VALUES ('$cName', '$cDescription')");
  }//if
  
  
//--------functions-------//
  
  //Check if a city exists
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
