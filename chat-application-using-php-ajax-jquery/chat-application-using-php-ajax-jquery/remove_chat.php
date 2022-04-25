<?php

//remove_chat.php

include('database_connection.php');
include_once('../../chainingyeso/class.ChatMessage.php');

if(isset($_POST["id"]))
{
	$chatMessage = new ChatMessage($connect, $_POST["id"]);

	$chatMessage 	-> SetStatus(2)
					-> Save();

	// $query = "
	// UPDATE chat_message 
	// SET status = '2' 
	// WHERE id = '".$_POST["id"]."'
	// ";

	// $statement = $connect->prepare($query);

	// $statement->execute();
}

?>