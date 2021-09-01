<?php
include("../Models/PlantType.php");
function connect()
{
    return new mysqli("localhost","root","","medelynas");
}

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `plants` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close();
    $resultPlant = $result->fetch_assoc();

    $plant = new PlantType();
    $plant->id =  $resultPlant['id'];
    $plant->name = $resultPlant['name'];
    $plant->is_yearling = $resultPlant['is_yearling'];
    return $plant;
}
function allOOP(){
    $conn = connect();
    $sql = "SELECT `plants`.`id`, `name`, `is_yearling`,
        (SELECT COUNT(*)
        FROM `unique_plants`
        WHERE `unique_plants`.`plant_id` = `plants`.`id`) as 'quantity'
        FROM `unique_plants` right join `plants`
        ON `plants`.`id` = `unique_plants`.`plant_id`
        GROUP by `plants`.`id`;";
    $result = $conn->query($sql);

    $arr = [];
    while($row = $result->fetch_assoc()) {
        $plant = new PlantType();
        $plant->id = $row['id'];
        $plant->name = $row['name'];
        $plant->is_yearling = $row['is_yearling'];
        $plant->quantity = $row['quantity'];
        $arr[] = $plant;
    }
    $conn->close();
    return $arr;
}
function countInstances($id){
    $conn = connect();
    $sql = "SELECT * from `plants` bla bla get all instances where id =".$id;
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function all(){
    $conn = connect();
    $sql = "SELECT `plants`.`id`, `name`, `is_yearling`,
    (SELECT COUNT(*)
    FROM `unique_plants`
    WHERE `unique_plants`.`plant_id` = `plants`.`id`) as 'quantity'
    FROM `unique_plants` right join `plants`
    ON `plants`.`id` = `unique_plants`.`plant_id`
    GROUP by `plants`.`id`;";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store(){
    $is_yearling = 0;
    if(isset($_POST['is_yearling'])){
        $is_yearling = 1;  
    }
    $conn = connect();
    $sql = 'INSERT INTO `plants`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,"'.$_POST['name'].'","'.$is_yearling.'","'.$_POST['quantity'].'")';
    $conn->query($sql);
    $conn->close();
}


function update(){
    $is_yearling = 0;
    if(isset($_POST['is_yearling'])){
        $is_yearling = 1;  
    }
    $conn = connect();
    $sql = 'UPDATE `plants` SET `name`="'.$_POST['name'].'",`is_yearling`="'. $is_yearling.'" WHERE id = '.$_POST['update'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `plants` WHERE id=".$id;
    $conn->query($sql);
    $conn->close();
}


?>