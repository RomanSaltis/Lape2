<?php
include("../Models/Ziniarastis.php");
function connect()
{
    return new mysqli("localhost","root","","darbo_laikas");
}

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `ziniarastis` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close();
    $resultDarbuotojas = $result->fetch_assoc();

        $nezinomas = new Ziniarastis();
        $nezinomas->id = $resultDarbuotojas['id'];
        $nezinomas->name = $resultDarbuotojas['name'];
        $nezinomas->company = $resultDarbuotojas['company'];
    return $nezinomas;
}
function allOOP(){
    $conn = connect();
    $sql = "SELECT * FROM `ziniarastis`";
    // $sql = "SELECT `ziniarastis`.`id`, `name`, `company`,
    //     (SELECT COUNT(*)
    //     FROM `darbuotojas`
    //     WHERE `darbuotojas`.`darbuotojo_id` = `ziniarastis`.`id`) 
    //     FROM `darbuotojas` right join `ziniarastis`
    //     ON `ziniarastis`.`id` = `darbuotojas`.`darbuotojo_id`
    //     GROUP by `ziniarastis`.`id`;";
    $result = $conn->query($sql);

    $arr = [];
    while($row = $result->fetch_assoc()) {
        $nezinomas = new Ziniarastis();
        $sql = "SELECT `hours`
        FROM `darbuotojas`
        WHERE `darbuotojo_id` =". $row['id'];
        $hours = $conn->query($sql);
        $totalhours = 0;
        while($hoursrow = $hours->fetch_assoc()) {
            $totalhours += $hoursrow['hours'];    
        }
        $nezinomas->id = $row['id'];
        $nezinomas->name = $row['name'];
        $nezinomas->company = $row['company'];
        $nezinomas->total = $totalhours;
        $arr[] = $nezinomas;
    }
    $conn->close();
    return $arr;
}
function countInstances($id){
    $conn = connect();
    $sql = "SELECT * from `ziniarastis` bla bla get all instances where id =".$id;
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function all(){
    $conn = connect();
    $sql = "SELECT `ziniarastis`.`id`, `name`, `company`,
    (SELECT COUNT(*)
    FROM `darbuotojas`
    WHERE `darbuotojas`.`darbuotojo_id` = `ziniarastis`.`id`) 
    FROM `darbuotojas` right join `ziniarastis`
    ON `ziniarastis`.`id` = `darbuotojas`.`darbuotojo_id`
    GROUP by `ziniarastis`.`id`;";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store(){
    $conn = connect();
    $sql = 'INSERT INTO `ziniarastis`(`id`, `name`, `company`) VALUES (NULL,"'.$_POST['name'].'","'.$_POST['company'].'")';
    $conn->query($sql);
    $conn->close();
}


function update(){
    $conn = connect();
    $sql = 'UPDATE `ziniarastis` SET `name`="'.$_POST['name'].'",`company`="'.$_POST['company'].'" WHERE id = '.$_POST['update'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `ziniarastis` WHERE id=".$id;
    $conn->query($sql);
    $conn->close();
}


?>