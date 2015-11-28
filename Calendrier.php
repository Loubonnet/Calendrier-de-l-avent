<html>
	<head>
		<title>Calendrier de l'avent des assos</title>

        <link rel="stylesheet" type="text/css" href="calendrier.css">
        
	</head>
    <?php
        $poshorizontal=array(510,310,600,1000,250,780,100,10,850,700,520,160,340,30,110,1130,800,1080,30,500,180,670,1010,990,290);
        $posvertical=array(455,350,120,580,25,15,420,10,480,300,20,140,170,540,250,500,200,40,180,250,560,500,390,210,480);
    ?>
	<body>
		<header id="titre" width="100%" height=50px>
			<h1 align="center" >Calendrier de l'avent des assos</h1>
		</header>
        <center>
		<section id="calendrier-container">
            <?php
                echo '<ol>';
                for ($i=0;$i<25;$i++) {
                    $x = $poshorizontal[$i];
                    $y = $posvertical[$i];
                    echo '<li id="normal" style="margin-left:'.$x.'px;margin-top:'.$y.'px">'.'salut'.($i+1).'</li>';
                    }
                echo '</ol>';
            ?>
		</section>
        </center>
	</body>
</html>