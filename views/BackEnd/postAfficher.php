<?php 
include_once '../../entities/categorie.php';
include_once '../../core/categoriesC.php';


if (isset($_POST['search']) && !empty($_POST['search'])) {

	$search = $_POST['search'];
    $db = Config::getConnexion();
    $sql = "SELECT * FROM  categorie where type LIKE '%$search%'";
    $products=$db->query($sql);
    while($row=$products->fetch()):?>
            <tr>
                                    
                <td><?PHP echo $row['id']; ?></td>
                <td><?PHP echo $row['type']; ?></td>
                                      
                <td>
                    <a href="edit-library-assets.php?id=<?PHP echo $row['id']; ?>">
                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button>
                    </a>
                    <form method="POST" action="supprimerCategorie.php" >
                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
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