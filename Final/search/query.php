<?php

if ($sightseeing == 1)
  $query .= "Sightseeing='$sightseeing' ";

if ($nightlife == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' ")
    $query .= "AND Nightlife='$nightlife' ";
  else 
    $query .= "Nightlife='$nightlife' ";

if ($family == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' ")
    $query .= "AND Family_Vacation='$family' ";
  else 
    $query .= "Family_Vacation='$family' ";

if ($sports == 1)
  if ($query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' ")
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
      || $query == "SELECT DISTINCT CountryID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "."AND Sports='$sports' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sports='$sports' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT CityID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "."AND Sports='$sports' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sports='$sports' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT PlaceID FROM Places WHERE "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "."AND Sports='$sports' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sports='$sports' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CountryID='$countryID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "."AND Sports='$sports' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' " 
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sports='$sports' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "
      || $query == "SELECT DISTINCT Name, Description FROM Places WHERE CityID='$cityID' AND "."Sightseeing='$sightseeing' "."AND Nightlife='$nightlife' "."AND Family_Vacation='$family' "."AND Sports='$sports' ")
    $query .= "AND Natural_Life='$natural' ";
  else 
    $query .= "Natural_Life='$natural' ";

?>

