<?PHP
include "../entities/categorie.php";
include "../core/categoriesC.php";


if (isset($_POST['id']) and isset($_POST['mariee']) and isset($_POST['soiree']) )
	{ 
		if (!empty($_POST['id']) and !empty($_POST['mariee']) and !empty($_POST['soiree']) ) {
		$categorie1=new Categories($_POST['id'],$_POST['mariee'],$_POST['soiree']);
		$categorie1C=new CategoriesC();
 		$categorie1C->ajouterCategorie($categorie1);
        header('Location: afficherCategorie.php');
	}
	else{
 			echo "chanp vide";
 		}

	
}else{
	echo "vérifier les champs";
}
//*/
?>