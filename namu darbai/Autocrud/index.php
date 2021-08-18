<?php

include('./functions.php');

//edit
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $auto = edit();
}

//store
if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['id'])){
    store();

    header('location:./');
    die;
    
}

// delete
if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['manufacturer'])){
    delete();
    header('location:./');
    die;
}


// update
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])){
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
    <title>Autoparkas</title>
</head>
<body>
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >manufacturer</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="manufacturer" value="<?=(isset($auto))?$auto['manufacturer'] : "" ?>">
            </div> 
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >model</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="model" value="<?=(isset($auto))?$auto['model'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >year</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="year" value="<?=(isset($auto))?$auto['year'] : "" ?>" >
            </div>
         </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >color</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="color" value="<?=(isset($auto))?$auto['color'] : "" ?>" >
            </div>
         </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >distance</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="distance" value="<?=(isset($auto))?$auto['distance'] : "" ?>" >
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >fuel</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="fuel" value="<?=(isset($auto))?$auto['fuel'] : "" ?>" >
            </div>
         </div>
         <?php if(!isset($auto)){
            echo '<button class="btn btn-primary" type="submit">insert auto</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $auto['id'].' ">
            <button class="btn btn-info" type="submit">update auto</button>';
    } ?>
           
    </form>

    <table class="table">
        <tr>
            <th>id</th>
            <th>manufacturer</th>
            <th>model</th>
            <th>year</th>
            <th>color</th>
            <th>distance</th>
            <th>fuel</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php $count = 0; foreach ($_SESSION['autoparkas'] as $auto) { ?>
            <tr>
                <td><?= ++$count."/".$auto['id'] ?></td>
                <td><?= $auto['manufacturer']?></td>
                <td><?= $auto['model']?></td>
                <td><?= $auto['year']?></td>
                <td><?= $auto['color']?></td>
                <td><?= $auto['distance']?></td>
                <td><?= $auto['fuel']?></td>
                <td><a class="btn btn-success" href="?id=<?= $auto['id']?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$auto['id']?>" >
                        <button class="btn btn-warning" type="submit">delete</button>
                    </form>
                </td>
                
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>