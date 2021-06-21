
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
			 img{
				 width:100px;
				 margin:5px;
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
		  <script>
		function loadxml() {
		$('.img').on('click', function () {
		$('.img').toggleClass('img full');
		});
		};
	</script>
     </head>
     <body>
	 <?php
      echo 'задание 1';
        ?>
      <div class='galery'>
		   <a href='//localhost/img/1.jpg' target='_blank'><img class='img'src='img/1.jpg' target='_blank' alt=''></a>
		   <a href='//localhost/img/2.jpg' target='_blank'><img class='img'src='img/2.jpg' alt=''></a>
		   <a href='//localhost/img/3.jpg' target='_blank'><img class='img'src='img/3.jpg' alt=''></a>
		   <a href='//localhost/img/4.jpg' target='_blank'><img class='img'src='img/4.jpg' alt=''></a>
		   <a href='//localhost/img/5.jpeg' target='_blank'><img class='img'src='img/5.jpeg' alt=''></a>
	   </div>
	   <?php
      echo 'задание 2 + 3';
        ?>
	   <div class='galery'>
		   <?php
           $files = scandir('img');
		   foreach($files as $file){

		   echo '<a href=""><img id="img" src="img/' . $file . '" alt=""></a>';
		   }
		   //echo "<script> loadxml(); </script>";
		    ?>


	   </div>
     <script>
		function loadxml() {
		$('.img').on('click', function () {
		$('.img').toggleClass('img').toggleClass('full');
		});
		};
	</script>
     </body>
</html>
