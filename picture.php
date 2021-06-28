
<?php
if($id = $_GET['image_id']){
$conn = mysqli_connect("localhost", "root", "root", "myimage");
    $sql1 = "update images set Acounter=Acounter+1 WHERE image_id = $id";
	mysqli_query($conn, $sql1);
	$sql = "SELECT image_id , adress_image, Acounter
        FROM   images
        WHERE  image_id = $id";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

?>
<img src="<?php echo $row['adress_image']; ?>">
<h2>Картинка была выбрана   <?php echo $row['Acounter']; ?>    раз</h2>;
<?php
}
?>
