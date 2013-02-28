<!DOCTYPE HTML>
<html>


<form action="inputCity.php" method="post">
<form>
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
</select>
Name: <input type="text" name="cityName" /> <br>
Description: <textarea rows="10" cols="30" name="description"> </textarea>
<input type="submit" />
</form>


</body>
</html>
