<?PHP
include "../core/produitsCore.php";
$produitsC=new ProduitsCore();
if (isset($_POST["IDP"])){
	$produitsC->supprimerProduits($_POST["IDP"]);
	header('Location: afficherProduit.php');
}

?>
