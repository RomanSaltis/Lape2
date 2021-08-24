<?php

function connect(){
    return new mysqli("localhost", "root", "", "darbo_laikas");
}


function store(){
    $conn = connect();
    $sql = 'INSERT INTO `darbo_laikas`(`id`, `name`, `month`, `hours`) VALUES (NULL,"'.$_POST['name'].'","'.$_POST['month'].'","'.$_POST['hours'].'")';
    // echo $sql; die;
    $conn->query($sql);
    $conn->close();
}

function all(){
    $conn=connect();
    $sql = 'SELECT * FROM `ziniarastis`';
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `ziniarastis` where id = '.$id;
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_assoc();
}


?>