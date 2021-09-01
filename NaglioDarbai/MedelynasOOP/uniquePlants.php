<?php
include("../Models/UniquePlant.php");

function connect()
{
    return new mysqli("localhost","root","","medelynas");
}

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `unique_plants` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close();
    $resultPlant =  $result->fetch_assoc();
    $plant = new UniquePlant();
    $plant->id =  $resultPlant['id'];
    $plant->age =  $resultPlant['age'];
    $plant->height =  $resultPlant['height'];
    $plant->health =  $resultPlant['health'];
    $plant->plantId =  $resultPlant['plant_id'];

    return $plant;
}





function all(){
    $conn = connect();
    $sql = "SELECT `unique_plants`.`id`, `name`, `age`, `height`, `health` 
            FROM `unique_plants`
            INNER join `plants`
            ON `plants`.`id` = `unique_plants`.`plant_id`";
    if(isset($_GET['plant_id'])){
        $sql = "SELECT * from `unique_plants` where plant_id = ".$_GET['plant_id'];
    }
    $result = $conn->query($sql);
    $conn->close();

    $arr = [];
    while($row = $result->fetch_assoc()) {
        $plant = new UniquePlant();
        $plant->id = $row['id'];
        if(isset($row['name'])){
            $plant->name = $row['name'];
        }
        $plant->age = $row['age'];
        $plant->height = $row['height'];
        $plant->health = $row['health'];
        $arr[] = $plant;
    }

    return $arr;
}

function store(){
    $conn = connect();

    $sql = "INSERT INTO `unique_plants` (`id`, `age`, `height`, `health`, `plant_id`) 
            VALUES (NULL, '".$_POST['age']."',  '".$_POST['height']."',  '".$_POST['health']."', '".$_POST['plant_id']."');";
  
//   echo $sql;die;
    $conn->query($sql);
    $conn->close();
}


function update(){
    $conn = connect(); $sql = "UPDATE `unique_plants`
        SET `age` = '".$_POST['age']."', `height` = '".$_POST['height']."', `health` = '".$_POST['health']."'
        WHERE `unique_plants`.`id` = '".$_POST['update']."';";
   
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `unique_plants` WHERE id=".$id;
    $conn->query($sql);
    $conn->close();
}


?>