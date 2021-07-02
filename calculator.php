<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>



     </head>
     <body>
<form method="post">
	<input type='text' name='op1'>
	<input type='text' name='op2'>
	<input type='submit' name='operation' value='sub'>
	<input type='submit' name='operation' value='div'>
	<input type='submit' name='operation' value='sum'>
	<input type='submit' name='operation' value='mult'>
</form>
	<div style='min-width:100px; height:100px; border:1px solid red;'>
	<?php
	$operation = $_POST['operation'];
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	if($operation == 'div' && $op2 == 0 ){
		echo 'На 0 делить нельзя';
	} else {
switch($operation) {
    case 'sum':
     echo $op1 + $op2;
		break;
    case 'sub':
     echo $op1 - $op2;
		break;
    case 'div':
         echo $op1 / $op2;
		break;
	case 'mult':
     echo $op1 * $op2;
		break;



	}}	?>
		 </div>
		  </body>
</html>
