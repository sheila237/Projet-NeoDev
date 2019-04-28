<?PHP
include "../core/produitsC.php";
$produit1C=new ProduitsC();
$listeProduits=$produit1C->afficherProduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID</td>
<td>Nom</td>
<td>Prix</td>
<td>Taille</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['Nom']; ?></td>
	
	<td><?PHP echo $row['ID']; ?></td>
	<td><?PHP echo $row['Prix']; ?></td>
	<td><?PHP echo $row['Taille']; ?></td>
	<td><form method="POST" action="supprimerProduits.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['ID']; ?>" name="ID">
	</form>
	</td>
	<td><a href="modifierProduits.php?ID=<?PHP echo $row['ID']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

