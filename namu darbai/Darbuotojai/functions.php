<?php

init();

function init(){
    session_start();
    if (!isset($_SESSION['darbuotojai'])) {
        $_SESSION['darbuotojai'] = [];
        $_SESSION['id'] = 0;
    }
}



?>