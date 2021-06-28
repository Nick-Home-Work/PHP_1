
<?php

$conn = mysqli_connect("localhost", "root", "root", "myimage");

if (!$conn) {
    echo "Не сраслось: " . mysql_error();
    exit;
}

$sql = "SELECT image_id as id, adress_image
        FROM   images
        WHERE  image_id > 0 order by Acounter desc";

$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
   ?>
    <a target='_blank'href="picture.php?image_id=<?php echo $row['id']; ?>">
      <img class="img" src='<?php echo $row['adress_image']; ?>'>
	</a>

<?php }

?>



<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		  <style>
		     .galery{
				 display:flex;
				 justify-content:center;
				 width:900px;
				 margin: 100px auto;
			 }
			 .img{

				 width:100px;
				 margin:5px;
                 cursor:pointer;
			 }

			 .full{
				position:fixed;
				display:flex;
				align-items:center;
				justify-content:center;
				top:0px;
				left:0px;
				width:100vw;
				height:100vh;
				z-index: 99999;

			 }
		  </style>

     </head>
     <body>
	    <div class='galery'>
		</div>
     </body>
</html>
