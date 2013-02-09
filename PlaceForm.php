//Needs an html form that post city id and place name, description, and the diferent boolean values
<?php
  
  //get the things above
  $cityID = $_POST["cityID"];
  $pName = $_POST["name"];
  $pDescription = $_POST["description"];
  $sightseeing = $_POST["sightseeing"];
  $nightlife = $_POST["nightlife"];
  $family = $_POST["family"];
  $sports = $_POST["sports"];
  $natural = $_POST["natural"];
  
  //connect database
  mysql_connect("ramen.cs.man.ac.uk", "12_COMP10120_B1", "ztDsBWSMqDny80BR")
    or die('Could not connect: ' . mysql_error());
  mysql_select_db("12_COMP10120_B1", $connection)
    or die('Could not select database');or die('Could not connect to '.
                                          'the database: '.mysql_error());
  
  if (placeIsNew($pName))
  {
    mysql_query("INSERT INTO Places (cityID, Place Name, Description, sightseeing,
                                     nightlife, family??, sports, natural life??)
                 VALUES ('$cityID', $pName', '$pDescription', '$sightseeing', '$nightlife'
                         '$family', '$sports', '$natural')");
  }//if
  
  
//--------functions-------//
  
  //Check if a country exits, maybe improved with city id
  function placeIsNew($place)
  {
    //fetch list of places
    $allPlaces = mysql_query("SELECT Place Name FROM Places")
                      or die('Problem getting place list: '.mysql_error());
    //browse that list until entry found
    while ($oldPlace = mysql_fetch_field($allPlace))
    {
      if ($place = $oldPlace)
      {return false;}
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//placeIsNew
?>
