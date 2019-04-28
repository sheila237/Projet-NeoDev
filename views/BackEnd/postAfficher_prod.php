<?php 
include_once '../../entities/produit.php';
include_once '../../core/produitsCore.php';


if (isset($_POST['search_prod']) && !empty($_POST['search_prod'])) {

	$search = $_POST['search_prod'];
    $db = Config::getConnexion();
    $sql = "SELECT * FROM  produits inner join categorie on produits.id=categorie.id where Prix LIKE '%$search%' or Nom LIKE '%$search%' or couleur LIKE '%$search%'";
    $products=$db->query($sql);
    while($row=$products->fetch()):?>
           <tr>
                                        <td><?PHP echo $row['Nom']; ?></td>
                                        <td><?PHP echo $row['IDP']; ?></td>
                                        <td><?PHP echo $row['Prix']; ?></td>
                                        <td><?PHP echo $row['Taille']; ?></td>
                                        <td><?PHP echo $row['couleur']; ?></td>
                                        <td><?PHP echo $row['stock']; ?></td>
                                        <td><?PHP echo $row['etat']; ?></td>
                                        <td><?PHP echo $row['id']; ?></td>
                                        <td><?PHP echo $row['type']; ?></td> 
                                        <?php echo '<td> <img src="img/' . $row['image']. '" style="width: 50px;height: 50px;"> </td>'; 
                                        ?>
                                        <td>
                                            <a href="edit-library-assets.php?IDP=<?PHP echo $row['IDP']; ?>">
                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <form method="POST" action="supprimerProduit.php" >
                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    <input type="hidden" value="<?PHP echo $row['IDP']; ?>" name="IDP">
                                                </button>

                                            </form>
                                            
                                        </td>
                                    </tr>
            
        <?php endwhile;
}
else{
    echo "string";
	//header("Location: .php");
		exit;
}
?>