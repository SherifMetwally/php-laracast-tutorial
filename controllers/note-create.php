<?php
$config = require('config.php');
$db = new Database($config['database']);
$heading = 'Note Create';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if(strlen($_POST['body']) == 0 ) {
        $errors['body'] = 'you can\'t send empty note';
    }

    if(strlen($_POST['body']) >= 100 ) {
        $errors['body'] = 'characters must not exceed 100';
    }

    if(empty($errors)) {
        $Success = 1;
        $note = $db->query('insert into  notes(body,user_id) values ( :body , :user_id )' , [
            'body' => $_POST['body']
            , 'user_id' => 1
        ]);
    }






}
require "views/note-create.view.php";