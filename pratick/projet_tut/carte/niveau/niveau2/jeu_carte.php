 <html>
    <head>
      
      <meta charset="utf-8" />
      <title>Carte</title>
      <link rel="shortcut icon" type="image/x-icon" href="iconeweb.ico" />
      <link href="style.css" type="text/css" rel="stylesheet" />
      <link href="style1.css" rel="stylesheet" type="text/css" /> 
	<link href="../menu/style_menu.css" rel="stylesheet" type="text/css" /> 
      <script type="text/javascript" src="script_carte.js"></script>
    
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="jquery-1.2.6.min.js" type="text/javascript"></script> 
	  <script src="jquery.easing.1.3.js" type="text/javascript"></script>
	  
	  <script>
	  		$(document).ready(function(){
	
	
	
	//horizontal
    $("ul#horizontal li").mouseover(function(){
        $(this).stop().animate({width:'650px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

    $("ul#horizontal li").mouseout(function(){
        $(this).stop().animate({width:'40px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });
	
	

});

	  </Script>
	</head>


	<body>
	
				<?php

					//include_once("../menu/menu.inc.php");
					function random()
					{
						return rand(1,31);
						
					}

					 
					$res = random();
					echo '<div id=aTrouver >A trouver : <b>'.$res.'</b></div>';
				
		
				echo '<div id="carte">';
				print("<img id=\"16\" onClick=\"ChangeImage(id,".$res.");\"  alt=\"1\" src=\"img/carte2.png\"/>");
				print("<img id=\"8\" onClick=\"ChangeImage(id,".$res.");\"  alt=\"1\" src=\"img/carte2.png\"/>");
				print("<img id=\"4\" onClick=\"ChangeImage(id,".$res.");\"  alt=\"1\" src=\"img/carte2.png\"/>");
				print("<img id=\"2\" onClick=\"ChangeImage(id,".$res.");\"  alt=\"1\" src=\"img/carte2.png\"/>");
				print("<img id=\"1\" onClick=\"ChangeImage(id,".$res.");\"  alt=\"1\" src=\"img/carte2.png\"/>");
					
				
				echo '</div>';
				?>

		
		
			
		

		<div id="niveau_suiv">
		</div>

		<div id="recommencer">
		</div>



	</body>




</html>

