<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
<script>
$(document).ready(function()
		  {
		    $('#txt1').change(function()
				      {
				        $.ajax(
					{
					  url:'something.php?selection=' + $('#txt1').val(),
					  success: function (response)
						   {$('#test').html(response);}
					});
				      });
		  });

</script>
</head>
<body>

<form action="inputPlace.php" method="post">
<select name="countryID">
<?php
  //connect database
  require('connectToDatabase.php');

  $result =mysql_query("SELECT CountryID, Name FROM Countries");
  while ($row=mysql_fetch_assoc($result))
  {?>
    <option value="<?php echo $row['CountryID']?>"><?php echo $row['Name']?></option>
  <?php }//while
  require('closeConnection.php');
?>
<option disabled selected>Choose a Country</option>
</select>
Name: <input type="text" name="cityName" /> <br>
Description: <textarea rows="10" cols="30" name="description"> </textarea>
<input type="submit" />
</form>
<div id="test"></div>
<p>Suggestions: <span id="txtHint"></span></p> 

</body>
</html>

