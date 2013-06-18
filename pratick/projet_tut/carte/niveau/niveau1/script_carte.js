var resultat=0;
var coup = 0 ;


function ChangeImage(id,result) 
{			coup++;
			if(document.getElementById(id).alt=="1")
			{
				document.getElementById(id).src = "img/carte_face"+id+" - Copie.png" ;//"image/carte_face"+id+".png";
				document.getElementById(id).alt="2";
				AddResultat(id);

			}
			else
			{
				document.getElementById(id).src = "img/carte2.png";
				document.getElementById(id).alt="1";
				LessResultat(id);
			}	
			
		egalite(result);
			

}

function AddResultat(res)
{


	resultat = resultat + parseInt(res) ;
	


	document.getElementById("resultat").innerHTML=resultat;
	

}

function LessResultat(res)
{
	

	resultat = resultat - parseInt(res) ;
	


	document.getElementById("resultat").innerHTML=resultat;
	

}


function egalite(result)
{
	if(resultat==result)
	{	

		
		alert("Bien jouer tu as réussis en "+coup+" coup");
		// $("#vnav").fadeIn(3000);
		 $("#1").fadeOut("slow");
		 $("#2").fadeOut("slow");
		 $("#4").fadeOut("slow");
		 $("#8").fadeOut("slow");
		 $("#16").fadeOut("slow");

		 
		 $("#field").fadeOut("slow");
		 $("#aTrouver").fadeOut("slow");
		 




		 
		coup=0;
		document.getElementById("niveau_suiv").innerHTML="<a href=niv2.php>Niveau suivant</a>"
		document.getElementById("recommencer").innerHTML="<a href=niv1.php><img src=img/rejouer.png ></a>"


	}
}

