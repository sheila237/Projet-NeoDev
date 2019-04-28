<?PHP
include "../../core/produitsCore.php";
$produitsC=new ProduitsCore();
if (isset($_POST["IDP"])){
	$produitsC->supprimerProduits($_POST["IDP"]);
	header('Location: library-assets.php');
}

?>