//Page to use InputCity.php
<html>
<body>
<?php
  //connect database
  mysql_connect("ramen.cs.man.ac.uk", "12_COMP10120_B1", "ztDsBWSMqDny80BR")
    or die('Could not connect: ' . mysql_error());
  mysql_select_db("12_COMP10120_B1", $connection) or die('Could not connect to '.
                                          'the database: '.mysql_error());

  //function structure gotten from http://goo.gl/GIXj6
  $result = mysql_query("SELECT ID?, County name? FROM County?"); 

  //Variable to store the countries
  $options = ""; 
  while ($row=mysql_fetch_array($result)) 
  { 
    $id = $row["ID"]; 
    $countryName = $row["Country Name?"]; 
    $options .= "<option value=\"$id\">$countyName</option>"; 
  }//while 
?> 
<form method="post" action="InputCity.php">
  <select name="countyID">
    <option disabled selected>Choose a Country</option>
    <?php $options>
  </select><br>
  City Name: <input type="text" name="name"><br>
  Description: <input type="textarea" name="description"><br>
  <input type="submit" value"Submit">
</form>
</body>
</html>
