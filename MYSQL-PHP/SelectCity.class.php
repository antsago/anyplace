<?php
class SelectCity
{
    protected $conn;
 
        public function __construct()
        {
            $this->DbConnect();
        }
 
        protected function DbConnect()
        {
            include "db_config.php";
            $this->conn = mysql_connect($host,$user,$password) OR die("Unable to connect to the database");
            mysql_select_db($db,$this->conn) OR die("can not select the database $db");
            return TRUE;
        }
 
        public function ShowCountry()
        {
            $sql = "SELECT * FROM Countries";
            $res = mysql_query($sql,$this->conn);
            $country = '<option value="0">Choose Country...</option>';
            while($row = mysql_fetch_array($res))
            {
                $country .= '<option value="' . $row['CountryID'] . '">' . $row['Name'] . '</option>';
            }
            return $country;
        }
 
        public function ShowCity()
        {
            $sql = "SELECT * FROM Cities WHERE CountryID=$_POST[id]";
            $res = mysql_query($sql,$this->conn);
            $city = '<option value="0">choose...</option>';
            while($row = mysql_fetch_array($res))
            {
                $city .= '<option value="' . $row['CityID'] . '">' . $row['Name'] . '</option>';
            }
            return $city;
        }
}
 
$opt = new SelectCity();
?>
