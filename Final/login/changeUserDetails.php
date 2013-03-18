<?php
session_start();

$nName = $_POST['name'];
$nSurname = $_POST['surname'];
$nAge = $_POST['age'];
$nGender = $_POST['gender'];
$nCountry = $_POST['countryID'];

$change = false;
$query = "UPDATE Users SET";
if ($nName != $_SESSION['name'])
{
 $query .= " Name='".$nName."'";
 $change = true;
 $_SESSION['name'] = $nName;
}//if
if ($nSurname != $_SESSION['surname'])
{
 $query .= " Surname='".$nSurname."'";
 $change = true;
 $_SESSION['surname'] = $nSurname;
}//if
if ($nAge != $_SESSION['age'])
{
 $query .= " Age='".$nAge."'";
 $change = true;
 $_SESSION['age'] = $nAge;
}//if
if ($nGender != $_SESSION['gender'])
{
 $query .= " Gender='".$nGender."'";
 $change = true;
 $_SESSION['gender'] = $nGender;
}//if
if ($nCountry != $_SESSION['country'])
{
 $query .= " CountryID='".$nCountry."'";
 $change = true;
 $_SESSION['country'] = $nCountry;
}//if

$query .= " WHERE Email='".$_SESSION['email']."'";
if ($change)
{
 require '../connectToDatabase.php';
 mysql_query($query);
 require '../closeConnection.php';
}//if
header ("Location: userProfile.php");
