<?php

init();

function init() {
    session_start();

    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt", "[]");
        file_put_contents("./id.txt", 0);
    }
}

function edit(){
    foreach(getData() as $auto){
        if ($auto['id'] == $_GET['id']) {
            return $auto;
        }
    }
}

function store(){
    $data = getData();
    $auto['id'] = newID();
    $auto['manufacturer'] = $_POST['manufacturer'];
    $auto['model'] = $_POST['model'];
    $auto['year'] = $_POST['year'];
    $auto['color'] = $_POST['color'];
    $auto['distance'] = $_POST['distance'];
    $auto['fuel'] = $_POST['fuel'];

    
    $data[] = $auto;
    setData($data);
}

function getData(){
    $arr = json_decode(file_get_contents('./data.txt'), 1);
    foreach ($arr as &$entry) {
        $entry = (array) $entry;
    }
    return $arr;
}
function setData($arr){
    file_put_contents('./data.txt', json_encode($arr));
}

function newID(){
    $id = file_get_contents('./id.txt');
    $id++;
    file_put_contents('./id.txt',$id);
    return $id;
}

function delete(){
    $data = getData();
    foreach ($data as $key => &$auto) {
        if($auto['id'] == $_POST['id']){
        unset($data[$key]);
        setData($data);
        return;
        }
    }
}

function update(){
    $data = getData();
    foreach ($data as &$auto) {
    if($auto['id'] == $_POST['id']){
        $auto['manufacturer'] = $_POST['manufacturer'];
        $auto['model'] = $_POST['model'];
        $auto['year'] = $_POST['year'];
        $auto['color'] = $_POST['color'];
        $auto['distance'] = $_POST['distance'];
        $auto['fuel'] = $_POST['fuel'];
        setData($data);
            return;
        }  
    }
}

?>