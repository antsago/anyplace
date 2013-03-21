<?php 
error_reporting(E_ALL);
ini_set('display_errors','On');

$email = $_POST['Email'];
$password = $_POST['password'];

//connect to the database here
require '../connectToDatabase.php';
$username = mysql_real_escape_string($email);
$query = "SELECT Hash, Salt
        FROM Users
        WHERE Email = '$username'";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1) //no such user exists
{
  header ("Location: ../wrongHome.php");
}
else
{
  $userData = mysql_fetch_array($result, MYSQL_ASSOC);
  $hash = hash('sha256', $userData['Salt'] . hash('sha256', $password) );
  if($hash != $userData['Hash']) //incorrect password
  {
    header ("Location: ../wrongHome.php");
  }
  else 
  {
      session_start();
      $user = mysql_fetch_assoc(mysql_query("SELECT * FROM Users WHERE Email ='$email'"));
      $_SESSION['name'] = $user['Name'];
      $_SESSION['surname'] = $user['Surname'];
      $_SESSION['email'] = $user['Email'];
      $_SESSION['uni'] = $user['UniversityID'];
      $_SESSION['age'] = $user['Age'];
      $_SESSION['gender'] = $user['Gender'];
      $_SESSION['country'] = $user['CountryID'];
      header("Location: ../SuccessLogin.php");
     
  } // else
}
?>
