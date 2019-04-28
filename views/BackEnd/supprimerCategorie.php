<?PHP
include "categories/core/categoriesC.php";
$categoriesC=new CategoriesC();
if (isset($_POST["id"])){
	$categoriesC->supprimerCategorie($_POST["id"]);
	header('Location: all-professors.php');
}

?>