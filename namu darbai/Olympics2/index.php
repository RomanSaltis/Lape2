<?php

include('./functions.php');
init();



if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
    $athlete = edit();
    }


if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    store();
    header("location:./");
    die;
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['Name'])){
            destroy();
            header('location:./');
            die;          
            }
            


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])){
    update();
    header('location:./');
    die;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form class= "form" action="" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="Name" value="<?= (isset($athlete))? $athlete['Name'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Surname</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="Surname" value="<?= (isset($athlete))? $athlete['Surname'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sport</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="Sport" value="<?= (isset($athlete))? $athlete['Sport'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="Country" value="<?= (isset($athlete))? $athlete['Country'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Gender</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="Gender" value="<?= (isset($athlete))? $athlete['Gender'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Victories</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="Victories" value="<?= (isset($athlete))? $athlete['Victories'] : "" ?>">
        </div>
        
    </div>
    <?php 
    if(!isset($athlete)) {
        echo '<button class="btn btn-outline-primary" type="submit">Pridėti atletą</button>';
    }else{
        echo'
        <input type="hidden" name="id" value="'. $athlete['id'].' ">
        <button class="btn btn-outline-secondary" type="submit">Atnaujinti atletą</button>';
    }
    ?>
    
    
    </form>
        <table class="table">
            <tr>  
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Sport</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Victories</th>
                <th>Edit</th>
                <th>Delete</th>              
            </tr>

        <?php foreach ($_SESSION['Olympics'] as $athlete) { ?>
            <tr>
                <td> <?= $athlete['id'] ?> </td>
                <td> <?= $athlete['Name'] ?> </td>
                <td> <?= $athlete['Surname'] ?> </td>
                <td> <?= $athlete['Sport'] ?> </td>
                <td> <?= $athlete['Country'] ?> </td>
                <td> <?= $athlete['Gender'] ?> </td>
                <td> <?= $athlete['Victories'] ?> </td>
                <td><a class="btn btn-outline-warning" href="?id=<?= $athlete['id'] ?>">edit</a></td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?=$athlete['id']?>" >
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        
        <?php } ?>
        
        </table>
        
</body>
</html>