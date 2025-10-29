<?php
    require_once 'model/ContactDAO.php';

    //************************
    //*  Contoller Template  *
    //************************
    showErrors(0);  //1 - Turn on Error Display

    $method=$_SERVER['REQUEST_METHOD'];
    //* Process HTTP GET Request
    if($method=='GET'){
        if(!isset($_GET['id'])){
            header("Location: contactListController.php");
            exit;
        }

        $contactDAO = new ContactDAO();
        $contact = $contactDAO->getContactById($_GET['id']);
        
        if($contact == null){
            header("Location: contactListController.php");
            exit;
        }
        
        include "views/contactUpdate-view.php";
    }
    
    //* Process HTTP POST Request
    if($method=='POST'){
        $contactDAO = new ContactDAO();
        $contact->contactID = $_POST['contactID'];
        $contact->username = $_POST['username'];
        $contact->email = $_POST['email'];
        $contactDAO->updateContact($contact);   

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