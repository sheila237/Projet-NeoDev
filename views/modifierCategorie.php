<HTML>
<head>
</head>
<body>
<?php
include "../entities/categorie.php";
include "../core/categoriesC.php";
if (isset($_GET['ID'])){
	$categorieC=new CategoriesC();
    $result=$categorieC->recupererCategories($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$mariee=$row['mariee'];
		$soiree=$row['soiree'];
?> 
<form method="POST">
<table>
<caption>Modifier Catégories</caption>
<tr>
<td>ID</td>
<td><input type="number" name="ID" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="Mariee" value="<?PHP echo $mariee ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="Soiree" value="<?PHP echo $soiree ?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$catégorie=new catégorie($_POST['id'],$_POST['mariee'],$_POST['soiree']);
	$catégoriesC->modifierProduits($catégorie,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherCatégorie.php');
}
?>
</body>
</HTMl> 