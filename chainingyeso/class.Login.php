<?php

require_once("abstract.databoundobject.php");

class Login extends DataBoundObject {

protected $Username;
protected $Password;

protected function DefineTableName() {
        return('login');
}

protected function DefineRelationMap() {
        return(array(
                "id" => "ID",
                "username" => "Username",
                "password" => "Password"));
        }

        public function Show(){
                return  "<h1>Message id</h1>" . $this -> ID . "<br><br>" .
                        "<h1>Username: </h1>" . $this -> Username . "<br><br>" .
                        "<h1>Password: </h1>" . $this -> Password . "<br><br>";
        }
}

?>