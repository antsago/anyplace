<html>
<body>
<form action="universityInput.php" method="post">
  Name: <input type="text" name="UnivName" autofocus/> <br>
  <!--form to relate to the university algorithm-->
  <select name="countryID"> 
    <?php
      //connect database
      require('connectToDatabase.php');
      
      $result =mysql_query("SELECT CountryID, Name FROM Countries");
      
      echo "<option selected disabled> Choose your country </option>";
      while ($row=mysql_fetch_assoc($result))
      {
	echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
      }//while
      
      //close connection (still not in github)
    ?>
  </select> <br>
<input type="submit"/>
</form>
</body>
</html>
