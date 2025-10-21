<?php
    require_once 'model/ContactDAO.php';

    //************************
    //*  Contoller Template  *
    //************************
    showErrors(0);  //1 - Turn on Error Display

    $method=$_SERVER['REQUEST_METHOD'];
    //* Process HTTP GET Request
    if($method=='GET'){
        include "views/contactAdd-view.php";
    }
    
    //* Process HTTP POST Request
    if($method=='POST'){
        $contactDAO = new ContactDAO();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = new Contact();
        $contact->username=$username;
        $contact->email=$email;
        $contactDAO->addContact($contact);

        header("Location: contactListController.php");
        exit;
    }
   

    function showErrors($debug){
        if($debug==1){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
?>