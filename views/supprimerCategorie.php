<?PHP
include "../core/categoriesCore.php";
$categoriesC=new CategoriesCore();
if (isset($_POST["id"])){
	$categoriesC->supprimerCategorie($_POST["id"]);
	header('Location: afficherCategorie.php');
}

?>