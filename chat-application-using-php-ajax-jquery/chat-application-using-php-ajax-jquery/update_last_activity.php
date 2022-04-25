<?php

//update_last_activity.php

include('database_connection.php');
include_once('../../chainingyeso/class.LoginDetails.php');

session_start();

$loginDetails = new LoginDetails($connect, $_SESSION["id"]);

$loginDetails 	-> SetLastActivity(date('Y-m-d'))
                -> Save();

// $query = "
// UPDATE login_details 
// SET last_activity = now() 
// WHERE id = '".$_SESSION["id"]."'
// ";

// $statement = $connect->prepare($query);

// $statement->execute();

?>

