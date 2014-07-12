<?php

session_start();

$errors=array();

if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
    $fields =array(
        'Name' => $_POST['name'],
        'Email' => $_POST['email'],
        'Message' => $_POST['message']
    );
    foreach ($fields as $field => $data) {
        if(empty($data)){
            $errors[]= $field . ' is required.';
        }
    }
    if(empty($errors)){
        //PHP Mailer script will go here.....
        
    }
}else{
    $errors[] = 'some this wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('location: index.php');