<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>blog</title>
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

		<style>
		.message{
			padding:20px;
			border:1px solid #454545;
			background:#eee;
			border-radius:50%;
			text-align:center;
			margin:10px;

		}
		.content{
			width:700px;
			margin:100px auto;
		}
        </style>

     </head>
     <body>
	<div class='content'>
		<form  method="post">
    <p><b>Введите ваш отзыв:</b></p>
    <p><textarea rows="10" cols="45" name="review"></textarea></p>
    <p><input type="submit" value="Отправить"></p>
  </form>
     <?php
	if(count($_POST)){
		$mysql = mysqli_connect('localhost', 'root', 'root', 'review');
		if(!$mysql){
			die("can't connect to do");
		}
		$review = mysqli_real_escape_string($mysql,
		htmlspecialchars(strip_tags($_POST['review'])));
		$review = trim($review);
		$query = "insert into review set message= '$review';";

		mysqli_query($mysql, $query);
	}
	$sql1 = "SELECT message
        FROM review ";
        $result = mysqli_query($mysql, $sql1);
		$row = mysqli_fetch_assoc($result);
        while ($row = mysqli_fetch_assoc($result)) {
   ?>
	  <div class='message'>
	    <?php echo $row['message'];?>

	   </div>
	<?php
		}
	?>
	</div>
  </body>
</html>
