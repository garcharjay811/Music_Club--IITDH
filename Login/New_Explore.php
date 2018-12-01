<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
    $target_dir="images/";
    $stmt = mysqli_query($mysqli,"SELECT name FROM image_names WHERE toshow = '1'");
    /*$stmt = $mysqli->prepare("SELECT name FROM image_names WHERE toshow = '1'");  // Bind "$email" to parameter.
        $stmt->execute();
        $img = $stmt->get_result()->fetch_assoc();/*
        $stmt->fetch();
        $stmt->fetch();
    $query = "SHOW TABLES";
    $tables = $mysqli->query($query);
    echo $tables;
    $query = "SELECT name FROM image_names WHERE toshow = 'TRUE'";
    $imgs = $mysqli->query($query);*/
    while($row = $stmt->fetch_array())
	{
		$img[] = $row;
	}
    //$img = mysqli_fetch_fields($stmt, MYSQLI_NUM);
    //$target_file = $target_dir.$img;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Explore</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="style_protected_page.css">
    <style type="text/css">
    	.thumbnail {
    		height: 100%;
    	}
    	.row.display-flex {
    		display: flex;
    		flex-wrap: wrap;
    	}
    </style>
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h1 class="display-4">Hello</h1>
				<hr class="my-4 light"><!--
				<?php //echo $target_dir.$img[0]; ?>
				<br>
				<?php //var_dump($img); ?>-->
			</div>	
		</div>
		<!--<div class="row">
			<div  class="col-md-4">
				<img src="<?php echo $target_dir.$img[0][0]; ?>" class="rounded img-fluid img-thumbnail" style="padding: 0px;">
			</div>
			<div  class="col-md-4">
				<img src="<?php echo $target_dir.$img[1][0]; ?>" class="rounded img-fluid img-thumbnail" style="padding: 0px;">
			</div>
			<div  class="col-md-4">
				<img src="<?php echo $target_dir.$img[2][0]; ?>" class="rounded img-fluid img-thumbnail" style="padding: 0px;">
			</div>
		</div>-->
		<div class="row display-flex">
			<div  class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo $target_dir.$img[3][0]; ?>" class="rounded img-fluid" style="padding: 0px;">
				</div>
			</div>
			<div  class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo $target_dir.$img[4][0]; ?>" class="rounded img-fluid img-fullsize" style="padding: 0px;">
				</div>
			</div>
			<div  class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo $target_dir.$img[5][0]; ?>" class="rounded img-fluid img-fullsize" style="padding: 0px;">
				</div>
			</div>
		</div>
		<div class="row display-flex">
			<div  class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo $target_dir.$img[6][0]; ?>" class="rounded img-fluid img-thumbnail img-fullsize" style="padding: 0px;">
				</div>
			</div>
			<div  class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo $target_dir.$img[7][0]; ?>" class="rounded img-fluid img-thumbnail img-fullsize" style="padding: 0px;">
				</div>
			</div>
			<div  class="col-md-4">
				<img src="<?php echo $target_dir.$img[8][0]; ?>" class="rounded img-fluid img-thumbnail img-fullsize" style="padding: 0px;">
			</div>
		</div>
		<br>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
</body>
</html>