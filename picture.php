
<?php
if($id = $_GET['image_id']){
$conn = mysqli_connect("localhost", "root", "root", "myimage");
    $sql1 = "update images set Acounter=Acounter+1 WHERE image_id = $id";
	mysqli_query($conn, $sql1);
	$sql = "SELECT image_id , adress_image, Acounter, price, all_info, name
        FROM   images
        WHERE  image_id = $id";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

?>
<div class='good' style='width:900px;'>
<img style='width:400px;float:left;'src="<?php echo $row['adress_image']; ?>">
	<div style='width:400px;float:left;border:1px solid #454545;heigth:400px;margin-left:10px;padding:10px;word-break: normal;'>
	    <h3>наименование</h3>
		   <?php echo $row['name'];  ?>
		<h3>все о товаре</h3>
		<?php echo $row['all_info'];  ?>
		<h3>цена</h3>
		<?php echo $row['price'] . 'P';  ?>

	</div>
</div>
<h2 style='clear:both;'>Товар был выбран   <?php echo $row['Acounter']; ?>    раз</h2>;
<?php
}
?>
