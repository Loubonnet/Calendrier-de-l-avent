<html>
	<head>
		<title>Calendrier de l'avent des assos</title>

        <link rel="stylesheet" type="text/css" href="calendrier.css">
        
	</head>
    <script src="js/jquery-1.10.2.min.js"></script> 
    <script src="js/lightbox-2.6.min.js"></script> 
    <link href="css/lightbox.css" rel="stylesheet" />
    <?php
        $poshorizontal=array(510,310,600,1000,280,780,100,10,850,760,520,160,380,30,110,1130,800,1080,30,480,180,670,1010,990,320);
        $posvertical=array(455,350,120,580,25,15,420,10,480,300,20,110,170,540,250,500,180,40,180,250,560,500,390,210,480);
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
                    if (($i + 1) % 5 !=0)
                        echo '<li id="normal" style="margin-left:'.$x.'px;margin-top:'.$y.'px"><a data-lightbox="image'.($i+1).'" href="img/image'.($i+1).'.jpg"><img src="img/tn_image'.($i+1).'.jpg" alt=""></a></li>';
                    else 
                        echo '<li id="kingsize" style="margin-left:'.$x.'px;margin-top:'.$y.'px"><a data-lightbox="image'.($i+1).'" href="img/image'.($i+1).'.jpg"><img src="img/tn_image'.($i+1).'.jpg" alt=""></a></li>';
                    }
                echo '</ol>';
            ?>
		</section>
        </center>
	</body>
</html>