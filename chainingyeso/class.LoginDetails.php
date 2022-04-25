<?php

require_once("abstract.databoundobject.php");

class LoginDetails extends DataBoundObject {

protected $UserId;
protected $LastActivity;
protected $IsType;

protected function DefineTableName() {
        return('login_details');
}

protected function DefineRelationMap() {
        return(array(
                "id" => "ID",
                "user_id" => "UserId",
                "last_activity" => "LastActivity",
                "is_type" => "IsType"));
        }

        public function Show(){
                return  "<h1>Message id</h1>" . $this -> ID . "<br><br>" .
                        "<h1>User Id: </h1>" . $this -> UserId . "<br><br>" .
                        "<h1>Last activity: </h1>" . $this -> LastActivity . "<br><br>" .
                        "<h1>Is type: </h1>" . $this -> IsType . "<br><br>";
        }
}

?>