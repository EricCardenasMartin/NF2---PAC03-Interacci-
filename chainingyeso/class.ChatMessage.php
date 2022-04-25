<?php

require_once("abstract.databoundobject.php");

class ChatMessage extends DataBoundObject {

protected $ToUserId;
protected $FromUserId;
protected $ChatMessage;
protected $Timestamp;
protected $Status;

protected function DefineTableName() {
        return('chat_message');
}

protected function DefineRelationMap() {
        return(array(
                "id" => "ID",
                "to_user_id" => "ToUserId",
                "from_user_id" => "FromUserId",
                "chat_message" => "ChatMessage",
                "timestamp" => "Timestamp",
                "status" => "Status"));
        }

        public function Show(){
                return  "<h1>Message id</h1>" . $this -> ID . "<br><br>" .
                        "<h1>To User Id: </h1>" . $this -> ToUserId . "<br><br>" .
                        "<h1>From User Id: </h1>" . $this -> FromUserId . "<br><br>" .
                        "<h1>Message: </h1>" . $this -> ChatMessage . "<br><br>" .
                        "<h1>Timestamp: </h1>" . $this -> Timestamp . "<br><br>" .
                        "<h1>Status: </h1>" . $this -> Status . "<br><br>";
        }
}

?>