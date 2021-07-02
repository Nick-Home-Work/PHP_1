<?php
<?php

$conn = mysqli_connect("localhost", "root", "root", "myimage");

if (!$conn) {
    echo "Не сраслось: " . mysql_error();
    exit;
}

$sql = "SELECT image_id as id, adress_image, shot_info, price, name
        FROM   images
        WHERE  image_id > 0 order by Acounter desc";

$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
   ?>
   <div class='wripper' >
    <a target='_blank'href="picture.php?image_id=<?php echo $row['id']; ?>">
      <img class="img" src='<?php echo $row['adress_image']; ?>'>
	</a>
	   <div>
	       <h3>наименование</h3>
		   <?php echo $row['name'];  ?>
		   <h3>коротко о товаре</h3>
		   <?php echo $row['shot_info'];  ?>
	   </div>
	   <div>
		   <h3>цена от</h3>
		   <?php echo $row['price'] . 'Р';  ?>
	   </div>
   </div>
<?php }

?>
	<?php
  if(isset($_GET['onClik'])){
 ?>
	 <img src="<?php echo $row['adress_image']; ?>">
<?php
}
?>


<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		  <style>
		     .wripper{
				 display:flex;
				 justify-content:space-between;
				 width:700px;
				 margin: 0 auto;
				 padding: 5px;
				 margin-bottom: 20px;
				 border:1px solid #454545;
			 }
			  .wripper div{
				  margin-left: 20px;

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
?>
