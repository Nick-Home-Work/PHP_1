<?php
//к сожалению пустышка хочу разобраться но не получается пока только вывожу галерею и ВСЕ
$conn = mysqli_connect("localhost", "root", "root", "myimage");

if (!$conn) {
echo "Не сраслось: " . mysql_error();
exit;
}

$sql = "SELECT image_id as id, adress_image
FROM images
WHERE image_id > 0";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
<a target='_blank'href="index.php?image_id=<?php echo $row['id']; ?>">
<img class="img" src='<?php echo $row['adress_image']; ?>'>
</a>

<?php }

?>
<?php

if(isset($_GET['onClik'])){
?>
<img src="<?php echo $row['adress_image']; ?>">
<?php
}
?>
?>
