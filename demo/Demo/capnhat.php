<?php
    include "users.php";
    $obj_users = new users();
    
    $id = '';
    $user = '';
    if(isset($_GET['id']) || isset($_POST['id'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $user = $obj_users->findUser($id);
        }

    }
    else{

        die();
    }
?>


<?php
    if (!empty($_POST['username']) && !empty($_POST['password']))
    {
        $data = [
          'username' => $_POST['username'],
            'password' => $_POST['password'],
            'id' => $id,
        ];
        $user = $data;
        $obj_users->updateUser($data);

    }
?>

<form method="post" >
    <input type="text" name="id" value="<?php echo $user['id']; ?>"><br>
    <input type="text" name="username" value="<?php echo $user['username']; ?>"><br>
    <input type="password" name="password" value="<?php echo $user['password']; ?>"><br>
    <input type="submit" value="Cap nhat">
</form>
