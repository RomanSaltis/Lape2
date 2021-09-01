<?php

//plants. id, name, is_yearling ,quantity



include('../DB.php');



    if(isset($_POST['create'] )){
        store();
        header("location:./");
        die;
    }

    if(isset($_POST['update'] )){
        update();
        header("location:./");
        die;
    }
    
    if(isset($_POST['delete'] )){
        destroy($_POST['delete']);
        header("location:./");
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


    </style>
</head>
<body>
    <div class="container">
        <form class="form" action="" method="POST">
        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Name</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="name" value="<?= (isset($nezinomas))? $nezinomas->name : "" ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Company</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="company" value="<?= (isset($nezinomas))? $nezinomas->company : "" ?>">
                </div>
            </div>

            


        <?php if(!isset($nezinomas)){
                echo '<button class="btn btn-primary" name="create" type="submit">Pridėti darbuotoją</button>';
        }else{
                echo '<button class="btn btn-info" type="submit" name="update" value="'.$nezinomas->id.'">Atnaujinti darbuotoją</button>';
        } ?>
        </form>



        <table class="table">
            <tr>
            <th>Nr / Id</th> 
            <th>Name</th> 
            <th>Company</th> 
            <th>Total hours</th>
            <th>Details</th>
            <th>edit</th> 
            <th>delete</th> 
            </tr>

            <?php $count = 0; foreach (allOOP() as $nezinomas) {
                ?>


            
                <tr>
                    <td> <?= ++$count." / ".$nezinomas->id  ?> </td>
                    <td> <?= $nezinomas->name  ?> </td>
                    <td> <?= $nezinomas->company  ?> </td>
                    <td> <?= $nezinomas->total  ?> </td>
                    <td> <a class="btn btn-primary" href="./darbuotojas.php?darbuotojo_id=<?= $nezinomas->id  ?>">išsamiai</a> </td>
                    <td>
                        <a class="btn btn-success" href="?edit=<?= $nezinomas->id  ?>">edit</a>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-danger" type="submit" name="delete" value="<?=$nezinomas->id?>"  >delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>