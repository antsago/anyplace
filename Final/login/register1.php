<?php
  error_reporting(E_ALL);
ini_set('display_errors','On');


//retrieve our data from POST
require '../connectToDatabase.php';
$username = $_POST['Email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

  $name = mysql_real_escape_string($_POST['Name'], $con);
  $surname = mysql_real_escape_string($_POST['Surname'], $con);
  $uniID = $_POST['UniversityID'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $countryID = $_POST["countryID"];

if($pass1 != $pass2)
{
  header('Location: register.php');
  echo "Your passwords do not match!";
} // if

else if(strlen($username) > 30)
{
  header('Location: registerForm.php');
  echo "You have specified an invalid username!";
} // if

else
{
  $hash = hash('sha256', $pass1);

  //creates a 3 character sequence
  function createSalt()
  {
    $string = md5(uniqid(rand(), true));
    return substr($string, 0, 3);
  } // createSalt

  $salt = createSalt();
  $hash = hash('sha256', $salt . $hash);
  //sanitize username
  $username = mysql_real_escape_string($username, $con);
  if (userIsNew($username))
  {
    $query = "INSERT INTO Users (Name, Surname, Hash, Salt, Email, UniversityID, Age, Gender, CountryID) VALUES ('$name', '$surname', '$hash', '$salt', '$username', '$uniID', '$age', '$gender', '$countryID')";
    mysql_query($query);
    header ("Location: ../homeRegistered.php");
  }//if
  else
  {
   header ("Location: ../homeUserExists.php");
  } // else
} // else

//Check if a user exists
function userIsNew($username)
{
  //fetch list of usernames.
  $allUsers = mysql_query("SELECT Email FROM Users")
                      or die('Problem getting country list: '.mysql_error());
  //browse that list until entry found
  while ($requiredUser = mysql_fetch_array($allUsers))
  {
    if ($username == $requiredUser['Email'])
      {return false;}
  } //while    
  //if it has reach this point, no entry has been found
  return true;
}//userIsNew
mysql_close();
?>

