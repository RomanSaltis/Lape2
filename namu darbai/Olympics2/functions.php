<?php

function init()
{
        session_start();

    if( !isset( $_SESSION['Olympics']) ){
        $_SESSION['Olympics'] = [];
        $_SESSION['id'] = 1;
}
}

function edit(){
        foreach ($_SESSION['Olympics'] as $entry) {
        if ($entry['id'] == $_GET['id']){
            return $entry;
            
        }
    }
}

function store(){
    $athlete = [];
    $athlete['id'] = $_SESSION['id']; 
    $athlete['Name'] = $_POST['Name'];
    $athlete['Surname'] = $_POST['Surname'];
    $athlete['Sport'] = $_POST['Sport'];
    $athlete['Country'] = $_POST['Country'];
    $athlete['Gender'] = $_POST['Gender'];
    $athlete['Victories'] = $_POST['Victories'];

    $_SESSION['id']++;

    $_SESSION['Olympics'][] = $athlete;
}

function destroy(){
    foreach ($_SESSION['Olympics'] as $key => &$athlete) {
        if($athlete['id'] == $_POST['id']){
        unset($_SESSION['Olympics'][$key]);
        return;
        }
    }
}

function update(){
    foreach ($_SESSION['Olympics'] as &$athlete) {
        if($athlete['id'] == $_POST['id']){
            $athlete['Name'] = $_POST['Name'];
            $athlete['Surname'] = $_POST['Surname'];
            $athlete['Sport'] = $_POST['Sport'];
            $athlete['Country'] = $_POST['Country'];
            $athlete['Gender'] = $_POST['Gender'];
            $athlete['Victories'] = $_POST['Victories']; 
            return;          
            }
            
    }
}

?>