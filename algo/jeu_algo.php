 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Je débute en jQuery</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />

<link type="text/css" rel="stylesheet" href="style.css">


<script type="text/javascript">
jQuery(document).ready(function($){
	$( ".balance" ).draggable({ containment: 'parent' });//rendre les classes draggables
	$( ".poid" ).draggable({ containment: 'parent' });
	
	$( "#balance2" ).droppable({
		accept: "#.poid",
		drop: function( event, ui ) {
			//console.log( event );
			//console.log( ui );
			
			//ui.draggable.fadeOut();
			
			ui.draggable.appendTo( $(this) )//quand la boite est dedant
				.css({
					left: '60px', //position pour mettre au milieu
					top:  '60px'
				})
				//.draggable({ containment: 'parent' });//on ne peut plus sortir la boite si activé
		}
	});
	
	$( "#balance1" ).droppable({
		accept: ".poid",
		drop: function( event, ui ) {
			ui.draggable.appendTo( $(this) )

				
				.css({
					left: '60px',
					top:  '60px'
				})
				//.draggable({ containment: 'parent' });
		}

		

	});
});





	

</script>
</head>

<body>

<div id="parking">
	<div id="balance1" class="balance"></div>
	<div id="balance2" alt="vert" class="balance"></div>
	<div id="poid1" class="poid"><span class="nom">poid1</span></div>
	<div id="poid2" class="poid"><span class="nom">poid2</span></div>
</div>

</body>
</html>