<?php 
define('DB_HOST'    , 'localhost'); 
define('DB_USERNAME', 'boatengine'); 
define('DB_PASSWORD', 'Athichaboat2911*'); 
define('DB_NAME'    , 'temperature');

define('POST_DATA_URL', 'ENTER_YOUR_DOMAIN_NAME/sensordata.php');

//PROJECT_API_KEY is the exact duplicate of, PROJECT_API_KEY in NodeMCU sketch file
//Both values must be same
define('PROJECT_API_KEY', '37719');


//set time zone for your country
date_default_timezone_set('Asia/bangkok');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}
