<?php
    include "users.php";

    if(!empty($_POST['username'])){
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];
        $obj_users = new users();

        $obj_users->insertUser($data);
    }


?>

<form method="post">
    <input type="text" name='username'><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Them moi">
</form>
