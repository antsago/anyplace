<?php 
require 'connectToDatabase.php';
$email = $_POST['Email'];
$password = $_POST['password'];

//connect to the database here
$username = mysql_real_escape_string($email);
$query = "SELECT Hash, Salt
        FROM Users
        WHERE Email = '$username'";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1) //no such user exists
{
  echo "Wrong user";
}
else
{
  $userData = mysql_fetch_array($result, MYSQL_ASSOC);
  $hash = hash('sha256', $userData['Salt'] . hash('sha256', $password) );
  if($hash != $userData['Hash']) //incorrect password
  {
    echo "Wrong pass";
  }
  else 
  {
     echo "correct login";
      session_start();
      $_SESSION['name'] = mysql_query("SELECT Name FROM Users WHERE Email ='$User'");
      $_SESSION['surname'] = mysql_query("SELECT Surname FROM Users WHERE Email ='$User'");
      $_SESSION['email'] = $User;
      $_SESSION['uni'] = mysql_query("SELECT UniversityID FROM Users WHERE Email ='$User'");   
      $_SESSION['age'] = mysql_query("SELECT Age FROM Users WHERE Email ='$User'");
      $_SESSION['gender'] = mysql_query("SELECT Gender FROM Users WHERE Email ='$User'");
      $_SESSION['country'] = mysql_query("SELECT CountryID FROM Users WHERE Email ='$User'");
  } // else
}
?>
