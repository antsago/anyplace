<?php

if ($sightseeing == 1)
  $query .= "Sightseeing='$sightseeing' ";

if ($nightlife == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' ")
    $query .= "AND Nightlife='$nightlife' ";
  else 
    $query .= "Nightlife='$nightlife' ";

if ($family == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' ")
    $query .= "AND Family_Vacation='$family' ";
  else 
    $query .= "Family_Vacation='$family' ";

if ($sports == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' ")
    $query .= "AND Sports='$sports' ";
  else
    $query .= "Sports='$sports' ";

if ($natural == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sports='$sports' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "."AND Sports='$sports' ")
    $query .= "AND Natural_Life='$natural' ";
  else 
    $query .= "Natural_Life='$natural' ";

?>

