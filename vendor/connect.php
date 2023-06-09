<?php

    $connect = mysqli_connect('localhost', 'root', '', 'form_registration');

    if(!$connect){
        die('Error connect');
    }