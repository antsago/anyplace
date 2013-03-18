<!doctype html>
<html>
<head>
<style type="text/css">
 
            body {font-family:Arial, Sans-Serif;}
 
            #container {width:300px; margin:0 auto;}
            
	    form label {display:inline-block; width:300px;}
 
            /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {width:160px;}
 
            form .line {clear:both;}
            form .line.submit {text-align:right;}
 
</style>
<link rel="stylesheet" type="text/css" href="../style.css">
<h1>Register</h1>
<header>
<table border="0">
<div>
<tr>
<td>
<a class="now"  href="../home.php">
<img src="../images/logo.png"
     width="200" height="100"></a>     
</td><td >

<a class="list" href="../search/search.php">
<img border="0" src="../images/Search.png"
     width="200" height="100"></a>
</td><td>

<a class="list" href="../hosting/hosting.php">
<img border="0" src="../images/Hosting.png"
     width="200" height="100"></a>
</a>
</td>
</tr>
</table>
</div>
</header>

<footer>
<nav>
&nbsp;
</nav>
</footer>

</head>
<body style="background-color: dodgerblue;">
<div id="container">
  <form action="register1.php" method="post">
    
    <center>
    <div class="line"><label for="surname">Surname: </label>
    <input type="text" name="Surname"/> <br></div>
    <div class="line"><label for="other_names">First Names: </label>
    <input type="text" name="Name" autofocus/></div>
    <div class="line"><label for="username">Username (Please use your email): </label>
    <input type="email" name="Email"/></div>
    <div class="line"><label for="password">Password: </label>
    <input type="password" name="pass1"/></div>
    <div class="line"><label for="password">Please re-enter password: </label>
    <input type="password" name="pass2"/>
    <div class="line"><label for="gender">Gender:</label><br>
    <input type="radio" name="gender" value="male">Male   
    <input type="radio" name="gender" value="female">Female<br>
    
    <div class="line"><label for="age">Age:</label><br>
    <input type="number" name="age"/></div>
    <div class="line"><label for="uni">Select your university: </label>
    <select name="UniversityID">
     <?php
       //connect database
       require('../connectToDatabase.php');
      
       $result =mysql_query("SELECT UniversityID, UnivName FROM Universities");
      
       echo "<option selected disabled> Choose your University </option>";
       while ($row=mysql_fetch_assoc($result))
       {
	 echo "<option value=".$row['UniversityID'].">".$row['UnivName']."</option>";
       }//while
    ?>
    </select><br>
    <div class="line"><label for="country">Select your home country:</label><br>
    <select name="countryID"> 
    <?php
      $result =mysql_query("SELECT CountryID, Name FROM Countries");
      
      echo "<option selected disabled> Choose your country </option>";
      while ($row=mysql_fetch_assoc($result))
      {
	echo "<option value=".$row['CountryID'].">".$row['Name']."</option>";
      }//while
      
      //close connection (still no in github)
    ?>
  </select> 
  <br><br>
  <input type="submit" value="register"></div>
  </center>
    
 <p><b>Note:</b> Please make sure your details are correct before submitting the form.</p>
 
 
 </form>

</div>

</body>
<footer>
<nav>
<a class="foot" href="../textOnly/contactUs.php">
<strong>Contact Us</strong></a>
<a class="foot" href="../textOnly/aboutUs.php">
<strong>About Us</strong></a>
<a class="foot" href="../textOnly/disclaimer.php">
<strong>Disclaimer</strong></a>
</nav>
</footer>

</html>
