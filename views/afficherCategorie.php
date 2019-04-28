<?PHP
include "../core/categoriesCore.php";
$categorie1C=new CategoriesCore();
$listeCategories=$categorie1C->afficherCategories();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>mariee</td>
<td>soiree</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['mariee']; ?></td>
	<td><?PHP echo $row['soiree']; ?></td>
	<td><form method="POST" action="supprimerCatégorie.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="ID">
	</form>
	</td>
	<td><a href="modifierCategorie.php?ID=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

