<?php
  error_reporting(E_ALL);
ini_set('display_errors','On');

  //connect database
  require('connectToDatabase.php');
  
  $name = mysql_real_escape_string($_POST["Name"], $con);
  $surname = mysql_real_escape_string($_POST["Surname"], $con);
  $Password = mysql_real_escape_string($_POST["Password"], $con);
  $email = $_POST['Email'];
  $uniID = $_POST['UniversityID'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $countryID = $_POST["countryID"];
  
  if (userIsNew($email))
  {
    $Hash = create_hash($Password);
    
    mysql_query("INSERT INTO Users (Name, Surname, Hash, Email, UniversityID, Age, Gender, CountryID) VALUES ('$name', '$surname', '$Hash', '$email', '$uniID', '$age', '$gender', '$countryID')") 
      or die('Problem inserting into database: '.mysql_error());
  echo "User added";
  }else echo "The user already exits";
  
  
//--------functions-------//
  
  //Check if user (email) exits
  function userIsNew($Email)
  {
    //fetch list of emails
    $allEmails = mysql_query("SELECT * FROM Users")
                      or die('Problem getting users list:'
                             .mysql_error());
    //browse that list until entry found
    while ($oldEmail = mysql_fetch_array($allEmails))
    {
      if ($Email == $oldEmail['Email']){return false;}
    }//while
    
    //if it has reach this point, no entry has been found
    return true;
  }//userIsNew
  
  //Hashing and salting, obtained: 
  //http://crackstation.net/hashing-security.htm#phpsourcecode
  
  /*
   * Password hashing with PBKDF2.
   * Author: havoc AT defuse.ca
   * www: https://defuse.ca/php-pbkdf2.htm
   */

  function create_hash($password)
  {  // These constants may be changed without breaking existing hashes.
  define("PBKDF2_HASH_ALGORITHM", "sha256");
  define("PBKDF2_ITERATIONS", 1000);
  define("PBKDF2_SALT_BYTES", 24);
  define("PBKDF2_HASH_BYTES", 24);

  define("HASH_SECTIONS", 4);
  define("HASH_ALGORITHM_INDEX", 0);
  define("HASH_ITERATION_INDEX", 1);
  define("HASH_SALT_INDEX", 2);
  define("HASH_PBKDF2_INDEX", 3);



    // format: algorithm:iterations:salt:hash
    $salt = base64_encode(mcrypt_create_iv(PBKDF2_SALT_BYTES, MCRYPT_DEV_URANDOM));
    return PBKDF2_HASH_ALGORITHM . ":" . PBKDF2_ITERATIONS . ":" .  $salt . ":" .
        base64_encode(pbkdf2(
            PBKDF2_HASH_ALGORITHM,
            $password,
            $salt,
            PBKDF2_ITERATIONS,
            PBKDF2_HASH_BYTES,
            true
        ));
  }
 
  /*
   * PBKDF2 key derivation function as defined by RSA's PKCS #5: https://www.ietf.org/rfc/rfc2898.txt
   * $algorithm - The hash algorithm to use. Recommended: SHA256
   * $password - The password.
   * $salt - A salt that is unique to the password.
   * $count - Iteration count. Higher is better, but slower. Recommended: At least 1000.
   * $key_length - The length of the derived key in bytes.
   * $raw_output - If true, the key is returned in raw binary format. Hex encoded otherwise.
   * Returns: A $key_length-byte key derived from the password and salt.
   *
   * Test vectors can be found here: https://www.ietf.org/rfc/rfc6070.txt
   *
   * This implementation of PBKDF2 was originally created by https://defuse.ca
   * With improvements by http://www.variations-of-shadow.com
   */
  function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false)
  {
    $algorithm = strtolower($algorithm);
    if(!in_array($algorithm, hash_algos(), true))
        die('PBKDF2 ERROR: Invalid hash algorithm.');
    if($count <= 0 || $key_length <= 0)
        die('PBKDF2 ERROR: Invalid parameters.');

    $hash_length = strlen(hash($algorithm, "", true));
    $block_count = ceil($key_length / $hash_length);

    $output = "";
    for($i = 1; $i <= $block_count; $i++) {
        // $i encoded as 4 bytes, big endian.
        $last = $salt . pack("N", $i);
        // first iteration
        $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
        // perform the other $count - 1 iterations
        for ($j = 1; $j < $count; $j++) {
            $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
        }
        $output .= $xorsum;
    }

    if($raw_output)
        return substr($output, 0, $key_length);
    else
        return bin2hex(substr($output, 0, $key_length));
  }
?>
