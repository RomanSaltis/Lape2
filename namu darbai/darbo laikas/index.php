<?php

//ziniarastis. id, name, month, hours

include('./DB.php');

If($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])){
    store();
    header('location:./');
    die;
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['edit'])){
   $ziniarastis = find($_GET['edit']); 

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
    <title>Darbo valandos</title>
</head>
<body>
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Vardas</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?=(isset($ziniarastis))?$ziniarastis['name'] : "" ?>">
            </div> 
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Laikotarpis</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="month" value="<?=(isset($ziniarastis))?$ziniarastis['month'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Valandos</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="hours" value="<?=(isset($ziniarastis))?$ziniarastis['hours'] : "" ?>" >
            </div>
         </div>
        


         <?php if(!isset($ziniarastis)){
            echo '<button class="btn btn-primary" name="create" type="submit">Pridėti darbuotoją</button>';
    }else{
            echo '
            
            <button class="btn btn-info" name="update" type="submit" value="'.$ziniarastis['id'].'">Atnaujinti darbuotoją</button>';
    } ?>
           
    </form>

    <table class="table">
        <tr>
            <th>id</th>
            <th>Vardas</th>
            <th>Laikotarpis</th>
            <th>Valandos</th>
            <th>edit</th>
            <th>destroy</th>
        </tr>

        <?php $count = 0; foreach (all() as $ziniarastis) { ?>
            <tr>
                <td><?= ++$count."/".$ziniarastis['id'] ?></td>
                <td><?= $ziniarastis['name']?></td>
                <td><?= $ziniarastis['month']?></td>
                <td><?= $ziniarastis['hours']?></td>
                <td><a class="btn btn-success" href="?edit=<?= $ziniarastis['id']?>">edit</a></td>
                <td>
                    <form action="" method="POST">
                        <button class="btn btn-warning" type="submit" name="delete" value="<?=$ziniarastis['id']?>" >destroy</button>
                    </form>
                </td>
                
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>