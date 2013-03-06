<!DOCTYPE HTML>
<html>
<body>

Search for places by activities:
<form action="searchByActivities.php" method="post">
Sightseeing: <input type="checkbox" name="sightseeing"/> <br>
Nightlife: <input type="checkbox" name="nightlife"/> <br>
Family: <input type="checkbox" name="family"/> <br>
Sports: <input type="checkbox" name="sports"/> <br>
Natural: <input type="checkbox" name="natural"/> <br>
Choose what your results should look like: <br>
<select name="showBY">
<option value="country">Countries</option>
<option value="city">Cities</option>
<option value="place">Places</option>
<option disabled selected value="1">Show by</option>
</select> <br>
<input type="submit"/>
</form>
<br><br><br>


Search for places in specified country:
<form action="searchByCountry.php" method="post">
<select name="countryID">
<?php
  //connect database
  require('connectToDatabase.php');

  $result =mysql_query("SELECT CountryID, Name FROM Countries");
  while ($row=mysql_fetch_assoc($result))
  {
    echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
  }//while
  require('closeConnection.php');
?>
<option disabled selected>Choose a Country</option>
</select><br>
Sightseeing: <input type="checkbox" name="sightseeing"/> <br>
Nightlife: <input type="checkbox" name="nightlife"/> <br>
Family: <input type="checkbox" name="family"/> <br>
Sports: <input type="checkbox" name="sports"/> <br>
Natural: <input type="checkbox" name="natural"/> <br>
<input type="submit"/>
</form>
<br><br><br>


Search for places in specified city:
<form action="searchByCity.php" method="post">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
$('#countryID').change(function()
{
$.ajax(
{
url:'getCity.php?selection=' + $('#countryID').val(),
success: function (response)
{$('#getCity').html(response);}
});
});
});
</script>
<select id="countryID" name="countryID">
<?php
  //connect database
  require('connectToDatabase.php');

  $result =mysql_query("SELECT CountryID, Name FROM Countries");
  while ($row=mysql_fetch_assoc($result))
  {
    echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
  }//while
  require('closeConnection.php');
?>
<option disabled selected>Choose a Country</option>
</select>
<div id="getCity"></div>
<br><br>
Sightseeing: <input type="checkbox" name="sightseeing"/> <br>
Nightlife: <input type="checkbox" name="nightlife"/> <br>
Family: <input type="checkbox" name="family"/> <br>
Sports: <input type="checkbox" name="sports"/> <br>
Natural: <input type="checkbox" name="natural"/> <br>
<input type="submit"/>

</body>
</html>
