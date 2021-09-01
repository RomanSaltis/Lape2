<?php

//plants. id, name, is_yearling ,quantity



include('../unikalusDarbuotojas.php');



    if(isset($_POST['create'] )){
        store();
        header("location:./darbuotojas.php?darbuotojo_id=".$_POST['darbuotojo_id']);
        die;
    }

    if(isset($_POST['update'] )){
        update();
        header("location:./darbuotojas.php?darbuotojo_id=".$_POST['darbuotojo_id']);
        die;
    }
    
    if(isset($_POST['delete'] )){
        destroy($_POST['delete']);
        header("location:./darbuotojas.php?darbuotojo_id=".$_POST['darbuotojo_id']);
        die; 
    }

    $action = 'create';

    if(isset($_GET['edit'] )){
            $nezinomas = find($_GET['edit']);
            $action = 'update';
        }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
/* checkbox

@supports (zoom:2) {
    input[type="radio"],  input[type=checkbox]{
    zoom: 2;
    }
}
@supports not (zoom:2) {
    input[type="radio"],  input[type=checkbox]{
        transform: scale(2);
        margin: 15px;
    }
} */

    </style>
</head>
<body>
<div class="container">
    <a href="./">HOME</a>
    <form class="form" action="" method="POST">
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >month</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="month" value="<?= (isset($nezinomas))? $nezinomas->month : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >hours</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="hours" value="<?= (isset($nezinomas))? $nezinomas->hours : "" ?>">
            </div>
         </div>
         <input type="hidden" name="darbuotojo_id" value="<?=$_GET['darbuotojo_id']?>">
    <?php if(!isset($nezinomas)){
            echo '<button class="btn btn-primary" name="create" type="submit">Pridėti valandas</button>';
    }else{
            echo '<button class="btn btn-info" type="submit" name="update" value="'.$nezinomas->id.'">Atnaujinti valandas</button>';
    } ?>
    </form>



    <table class="table">
        <tr>
        <th>Id</th> 
        <?php
        $all = all();
            if( isset($all[0]->name)){
                echo "  <th>name</th>  ";
            }
        ?>
        <th>month</th> 
        <th>hours</th> 
        <th>edit</th> 
        <th>delete</th> 
        </tr>
            

        <?php $count = 0; foreach ($all as $nezinomas) {
           
            ?>
            <tr>
                <td> <?= ++$count."/".$nezinomas->id  ?> </td>
                <?php
                    if( isset($nezinomas->name)){
                        echo "  <td>".$nezinomas->name."</td>  ";
                    }
                ?>
                <td> <?= $nezinomas->month  ?> </td>
                <td> <?= $nezinomas->hours  ?> </td>
                <td>
                 
                    <a class="btn btn-success" href="?darbuotojo_id=<?=    $_GET['darbuotojo_id']?>&edit=<?= $nezinomas->id  ?>">edit</a>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="darbuotojo_id" value="<?=$_GET['darbuotojo_id']?>">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?=$nezinomas->id?>"  >delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>