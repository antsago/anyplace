<?php
  
  //get university name, and id of country
  $UnivName = $_POST["UnivName"];
  $countryID = $_POST["countryID"];
  
  //sanitize name
  $UnivName = mysql_real_escape_string($UnivName);
  
  //connect database
  require('connectToDatabase.php');
  
  if (universityIsNew($UnivName))
  {
    mysql_query("INSERT INTO Universities (UnivName, EmailProcedure,    
                CountryID) VALUES ('$UnivName', null, '$countryID')") 
      or die('Problem inserting into database: '.mysql_error());
  }else echo "The university already exits";
  
  
//--------functions-------//
  
  //Check if university name exits
  function universityIsNew($name)
  {
    //fetch list of universities
    $allUni = mysql_query("SELECT UnivName FROM Universities")
                      or die('Problem getting university list:'
                             .mysql_error());
    //browse that list until entry found
    while ($oldUni = mysql_fetch_field($allUni))
    {
      if ($name = $oldUni){return false;}
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//universityIsNew
?>
