<?php

init();

function init() {
    session_start();

    if (!isset($_SESSION['autoparkas'])){
        $_SESSION['autoparkas'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach($_SESSION['autoparkas'] as $auto){
        if ($auto['id'] == $_GET['id']) {
            return $auto;
        }
    }
}

function store() {
    $auto['id'] = $_SESSION['id'];
    $auto['manufacturer'] = $_POST['manufacturer'];
    $auto['model'] = $_POST['model'];
    $auto['year'] = $_POST['year'];
    $auto['color'] = $_POST['color'];
    $auto['distance'] = $_POST['distance'];
    $auto['fuel'] = $_POST['fuel'];

    $_SESSION['id']++;

    $_SESSION['autoparkas'][] = $auto;
}

function delete(){
    foreach ($_SESSION['autoparkas'] as $key => &$auto) {
        if($auto['id'] == $_POST['id']){
        unset($_SESSION['autoparkas'][$key]);
        return;
        }
    }
}

function update(){
    foreach ($_SESSION['autoparkas'] as &$auto) {
    if($auto['id'] == $_POST['id']){
        $auto['manufacturer'] = $_POST['manufacturer'];
        $auto['model'] = $_POST['model'];
        $auto['year'] = $_POST['year'];
        $auto['color'] = $_POST['color'];
        $auto['distance'] = $_POST['distance'];
        $auto['fuel'] = $_POST['fuel'];
            return;
        }  
    }
}

?>