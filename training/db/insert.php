<?php
require 'config.inc.php';

$username = '';
$gender = '';
$color = '';


if(isset($_POST['submit'])){
    $ok = true;
    if(!isset($_POST['username']) || $_POST['username'] === ''){
        $ok = false;
    }else{
        $username = $_POST['username'];
    };
    
    if(!isset($_POST['gender']) || $_POST['gender'] === ''){
        $ok = false;
    }else{
        $gender = $_POST['gender'];
    };
    if(!isset($_POST['color']) || $_POST['color'] === ''){
        $ok = false;
    }else{
        $color = $_POST['color'];
    };
    
if($ok){
    //add database code here
    //connecting to the data base
    $db = new mysqli(
        MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
        // assemble sql
    $sql = sprintf(
        "INSERT INTO users(name, gender, color)
        VALUES ('%s', '%s', '%s')",
        $db->real_escape_string($username),
        $db->real_escape_string($gender),
        $db->real_escape_string($color));
    // send sql, stored in database
    $db->query($sql);
    echo '<p>User aded</p>';
    $db->close();
    }
}
?>

<form action="" method="post">
    User name: <input type="text" name="username" value="<?php
    echo htmlspecialchars($username, ENT_QUOTES)
    ?>"><br>
    Gender:
        <input type="radio" name="gender" value="f" <?php
        if($gender==='f'){
            echo ' checked';
        }
        ?>> female
        <input type="radio" name="gender" value="m" <?php
        if($gender==='m'){
            echo ' checked';
        }
        ?>> male <br>
    Favorite color:
        <select name="color">
            <option value="">Please select</option>
            <option value="#f00" <?php
                if($color==='#f00'){
                    echo ' selected';
                }
            ?>>red</option>
            <option value="#0f0" <?php
            if($color==='#0f0'){
                echo ' selected';
            }
            ?>>green</option>
            <option value="#00f" <?php
            if($color==='#00f'){
                echo ' selected';
            }
            ?>>blue</option>
        </select><br>
        <input type="submit" name="submit" value="Register">
</form>
