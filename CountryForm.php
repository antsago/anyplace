//Needs an html form that post name and description of the country
<?php
  
  //get name and description
  $cName = $_POST["name"];
  $cDescription = $_POST["description"];
  
  //connect database
  mysql_connect("ramen.cs.man.ac.uk", "12_COMP10120_B1", "ztDsBWSMqDny80BR")
    or die('Could not connect: ' . mysql_error());
  mysql_select_db("12_COMP10120_B1", $connection)
    or die('Could not select database');or die('Could not connect to '.
                                          'the database: '.mysql_error());
  
  if (countryIsNew($cName))
  {
    mysql_query("INSERT INTO Countries (Country Name, Description)
                 VALUES ('$cName', '$cDescription')");
  }//if
  
  
//--------functions-------//
  
  //Check if a country exits
  function countryIsNew($country)
  {
    //fetch list of countries
    $allCountries = mysql_query("SELECT Country Name FROM Countries")
                      or die('Problem getting country list: '.mysql_error());
    //browse that list until entry found
    while ($oldCountry = mysql_fetch_field($allCountries))
    {
      if ($country = $oldCountry)
      {return false;}
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//countryIsNew
?>
