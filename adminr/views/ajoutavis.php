<?PHP
include "../entities/avis.php";
include "../core/avisC.php";

if (isset($_POST['produit_avis']) and isset($_POST['vote']) )
	{ 
		if (!empty($_POST['produit_avis']) and !empty($_POST['vote']) ) {
		$produit1=new produits($_POST['produit_avis'],$_POST['vote']);
		$produit1C=new Prodavis($produit1);
        header('Location: C:/wamp64/www/Projetweb2019/adminr/womens.php');
	}
	else{
 			echo "chanp vide";
 		}
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

	
}else{
	echo "vérifier les champs";
}
//*/

?>