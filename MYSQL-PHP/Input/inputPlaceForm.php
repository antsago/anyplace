<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<form action="inputPlace.php" method="post">
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
Name: <input type="text" name="placeName" /> <br>
Description: <br> <textarea rows="10" cols="30" name="description"> </textarea> <br>
Sightseeing: <input type="checkbox" name="sightseeing" value="1"/> <br>
Nightlife: <input type="checkbox" name="nightlife" value="1"/> <br>
Family: <input type="checkbox" name="family" value="1"/> <br>
Sports: <input type="checkbox" name="sports" value="1"/> <br>
Natural: <input type="checkbox" name="natural" value="1"/> <br>
<input type="submit" />
</form>
</body>
</html> 
