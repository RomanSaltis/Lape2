<?php

$username = '';
$password = '';
$gender = '';
$color = '';
$languages = [];
$comments = '';
$tc = '';

if(isset($_POST['submit'])){
    $ok = true;
    if(!isset($_POST['username']) || $_POST['username'] === ''){
        $ok = false;
    }else{
        $username = $_POST['username'];
    };
    if(!isset($_POST['password']) || $_POST['password'] === ''){
        $ok = false;
    }else{
        $password = $_POST['password'];
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
    if(!isset($_POST['languages']) || !is_array($_POST['languages']) || count($_POST['languages']) === 0){
        $ok = false;
    }else{
        $languages = $_POST['languages'];
    };
    if(!isset($_POST['comments']) || $_POST['comments'] === ''){
        $ok = false;
    }else{
        $comments = $_POST['comments'];
    };
    if(!isset($_POST['tc']) || $_POST['tc'] === ''){
        $ok = false;
    }else{
        $tc = $_POST['tc'];
    };
if($ok){
    printf('Username: %s<br>
        Password: %s<br>
        Gender: %s<br>
        Color: %s<br>
        Language(s): %s<br>
        Comments: %s<br>
        T&amp;C: %s',
        htmlspecialchars($username, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($color, ENT_QUOTES),
        htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES));
    }
}
?>

<form action="" method="post">
    User name: <input type="text" name="username" value="<?php
    echo htmlspecialchars($username, ENT_QUOTES)
    ?>"><br>
    Password: <input type="password" name="password"><br>
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
    Languages spoken:
        <select name="languages[]" multiple size="3">
            <option value="en" <?php
            if(in_array('en', $languages)){
                echo ' selected';
            }
            ?>>English</option>
            <option value="fr" <?php
            if(in_array('fr', $languages)){
                echo ' selected';
            }
            ?>>French</option>
            <option value="it" <?php
            if(in_array('it', $languages)){
                echo ' selected';
            }
            ?>>Italian</option>
        </select><br>
    Comments: <textarea name="comments"><?php
        echo htmlspecialchars($comments, ENT_QUOTES)
    ?></textarea><br>
    Checkbox:<input type="checkbox" name="tc" value="ok" <?php
        if($tc==='ok'){
            echo ' checked';
        }
        ?>>
        I accept the T&amp;C<br>
        <input type="submit" name="submit" value="Register">
</form>
