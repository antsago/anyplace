//Needs an html form that post name and description of the country
<?php
  
  //get name and description
  $cName = $_POST["name"];
  $cDescription = $_POST["description"];
  
  //connect database
  mysql_connect("ramen.cs.man.ac.uk", "sanchea2", "password")
    or die('Could not make a connection: '.mysql_error());
  mysql_select_db("S02_sanchea2") or die('Could not connect to '.
                                          'the database: '.mysql_error());
  
  if (countryIsNew($cName))
  {
    mysql_query("INSERT INTO countries??? (CountryName, Description)??? 
                 VALUES ('$cName', 'cDescription')");
  }//if
  
  
//--------functions-------//
  
  //Check if a country exits
  function countryIsNew($country)
  {
    //fetch list of countries
    $allCountries = mysql_query("SELECT countryName?? FROM countries?")
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
