<?php
    class Contact{
        public $contactID;
        public $username;
        public $email;

        public function load($row){
            $this->contactID = $row['contactID'];
            $this->username=$row['username'];
            $this->email=$row["email"];
        }
    }
?>