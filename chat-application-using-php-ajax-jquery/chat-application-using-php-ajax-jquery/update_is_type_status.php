<?php

//update_is_type_status.php

include('database_connection.php');
include_once('../../chainingyeso/class.LoginDetails.php');

session_start();

$loginDetails = new LoginDetails($connect, $_SESSION["id"]);

$loginDetails 	-> SetIsType($_POST["is_type"])
                -> Save();

// $query = "
// UPDATE login_details 
// SET is_type = '".$_POST["is_type"]."' 
// WHERE id = '".$_SESSION["id"]."'
// ";

// $statement = $connect->prepare($query);

// $statement->execute();

?>