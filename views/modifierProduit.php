<?PHP
include "produits/entities/produit.php";
include "produits/core/produitsC.php";

if (isset($_POST['modifier'])){
	$produit=new produits($_POST['IDP'],$_POST['Nom'],$_POST['Prix'],$_POST['Taille']);
	$produitsC->modifierProduits($produits,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: library-assets.php');
}
?>