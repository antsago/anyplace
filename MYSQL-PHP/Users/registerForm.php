<html>
<body>
<form action="" method="post">
  Name: <input type="text" name="Name" autofocus/> <br>
  Surname: <input type="text" name="Surname"/> <br>
  Email: <input type="email" name="Email"/> <br>
  Password <input type="password" name="Password"/> <br>
  <select name="UniversityID">
   <?php
      //connect database
      require('connectToDatabase.php');
      
      $result =mysql_query("SELECT UniversityID, UnivName FROM Universities");
      
      echo "<option selected disabled> Choose your University </option>";
      while ($row=mysql_fetch_assoc($result))
      {
	echo "<option value=".$row['UniversityID'].">".$row['UnivName']."</option>";
      }//while
    ?>
  </select> <br>
  Age: <input type="number" name="age"/> <br>
  <input type="radio" name="gender" value="male">Male   
  <input type="radio" name="gender" value="female">Female<br>
  <select name="CountryID"> 
    <?php
      //connect database
      require('connectToDatabase.php');
      
      $result =mysql_query("SELECT CountryID, Name FROM Countries");
      
      echo "<option selected disabled> Choose your country </option>";
      while ($row=mysql_fetch_assoc($result))
      {
	echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
      }//while
    ?>
  </select> <br>
<input type="submit"/>
</form>
</body>
</html>
