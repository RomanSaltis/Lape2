<?php
include("../Models/Darbuotojas.php");

function connect()
{
    return new mysqli("localhost","root","","darbo_laikas");
}

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `darbuotojas` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close();
    $resultDarbuotojas =  $result->fetch_assoc();
    $nezinomas = new Darbuotojas();
    $nezinomas->id =  $resultDarbuotojas['id'];
    $nezinomas->month =  $resultDarbuotojas['month'];
    $nezinomas->hours =  $resultDarbuotojas['hours'];
    $nezinomas->darbuotojo_id =  $resultDarbuotojas['darbuotojo_id'];

    return $nezinomas;
}





function all(){
    $conn = connect();
    $sql = "SELECT `darbuotojas`.`id`, `name`, `month`, `hours`
            FROM `darbuotojas`
            INNER join `ziniarastis`
            ON `ziniarastis`.`id` = `darbuotojas`.`darbuotojo_id`";
    if(isset($_GET['darbuotojo_id'])){
        $sql = "SELECT * from `darbuotojas` where darbuotojo_id = ".$_GET['darbuotojo_id'];
    }
    $result = $conn->query($sql);
    $conn->close();

    $arr = [];
    while($row = $result->fetch_assoc()) {
        $nezinomas = new Darbuotojas();
        $nezinomas->id = $row['id'];
        if(isset($row['name'])){
            $nezinomas->name = $row['name'];
        }
        $nezinomas->month = $row['month'];
        $nezinomas->hours = $row['hours'];
        $arr[] = $nezinomas;
    }

    return $arr;
}

function store(){
    $conn = connect();

    $sql = "INSERT INTO `darbuotojas` (`id`, `month`, `hours`, `darbuotojo_id`) 
            VALUES (NULL, '".$_POST['month']."',  '".$_POST['hours']."',  '".$_POST['darbuotojo_id']."');";
  
//   echo $sql;die;
    $conn->query($sql);
    $conn->close();
}


function update(){
    $conn = connect(); $sql = "UPDATE `darbuotojas`
        SET `month` = '".$_POST['month']."', `hours` = '".$_POST['hours']."'
        WHERE `darbuotojas`.`id` = '".$_POST['update']."';";
   
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `darbuotojas` WHERE id=".$id;
    $conn->query($sql);
    $conn->close();
}


?>