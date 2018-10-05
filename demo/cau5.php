<?php 
	include ('./users.php');
	$obj_users = new users();

	$keyword = '';
	if (!empty($_GET['keyword'])) {
	    $keyword = $_GET['keyword'];
		$users = $obj_users->getUsers($keyword);
		
	}

	$id ='';
    if (!empty($_GET['id'])){

        $id = $_GET['id'];

        $obj_users->deleteUser($id);
    }
	
	?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="public/css/styles.css" rel="stylesheet" type="text/css">

	<script src="public/js/jquery-2.1.4.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<title>cau 5</title>
</head>
<body>
	<h2 style="text-align: center; color: #B0E0E6;">Our team</h2>
	<form method="get">
		<input type="text" name="keyword" placeholder="nhap tu khoa">
		<input type="submit" value="Tim kiem">
	</form>
	<div class="container">
		<div class="row">
            <?php if(!empty($_GET)): ?>
                <?php foreach ($users as $user): ?>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="images" style="text-align: center;">
                        <div>
                            <a href="cau5.php?keyword=<?php echo $keyword;?>&id=<?php echo $user['id']; ?>">Delete</a>
                        </div>
                        <img src="public/images/photo_1.png" alt="imgAtl">
                        <div class="tieude">
                        <a href="#"><h3><?php echo $user['username']; ?></h3></a>
                        </div>
                    </div>

                </div>


                <?php endforeach; ?>
            <?php endif; ?>
		</div>
	</div>
</body>
</html>