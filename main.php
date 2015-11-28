<html>
	<head>
		<title>Calendrier de l'avent des assos</title>
		<style type="text/css">
			body {
				align: center;
			}
		</style>
		<!--<script type="application/x-javascript">
			function draw() {
			 var canvas = document.getElementById("canvas");
			 var ctx = canvas.getContext("2d");

			 ctx.fillStyle = "rgb(200,0,0)";
			 ctx.fillRect (10, 10, 55, 50);

			 ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
			 ctx.fillRect (30, 30, 55, 50);
			}
		</script>-->
	</head>

	<body onload="draw()">
		<div id="titre">
			<h1 align="center" >Calendrier de l'avent des assos</h1>
		</div>
		<div id="calendrier-container">
			<?php 
echo '<ol>';
$width = 700;
$height = 800;
for ($i=0;$i<24;$i++) {
  $x = rand(10,$width-10);
  $y = rand(10,$width-10);
  echo '<li style="left:'.$x.'px;top:'.$y.'px">'.
          '<a href="index.php?day='.($i+1).'">'.($i+1).'</a>'.
       '</li>';
}
echo '</ol>';
?>
		</div>
	</body>
</html>