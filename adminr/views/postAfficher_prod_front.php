<?php 
include_once 'produits/entities/produit.php';
include_once 'produits/core/produitsCore.php';


if (isset($_POST['search_prod_front']) && !empty($_POST['search_prod_front'])) {

	$search = $_POST['search_prod_front'];
    $db = Config::getConnexion();
    $sql = "SELECT * FROM  produits inner join categorie on produits.id=categorie.id where Prix LIKE '%$search%' or Nom LIKE '%$search%'";
    $products=$db->query($sql);
    while($row=$products->fetch()):?>
            <tr>
                <li class="wthree aits w3l">
                    <div class="cbp-pgcontent" id="women-1">
                        <span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        <a href="womens_single.html">
                            <div class="cbp-pgitem a3ls">
                                <div class="cbp-pgitem-flip">
                                     <?php echo '<td> <img  src="img/' .$row['image'].'" style="width: 500px;height: 300px;"> </td> '?> ; 
                                </div>
                            </div>
                        </a>
                        <ul class="cbp-pgoptions w3l">
                            <li class="cbp-pgoptcompare">
                                <input type="checkbox" name="checkboxG31" id="checkboxG31" class="css-checkbox w3"><label for="checkboxG31" class="css-label"></label>
                            </li>
                            <li class="cbp-pgoptfav">
                                <span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span>
                            </li>
                            <li class="cbp-pgoptsize agile">
                                <span data-size="XL"><td><?PHP echo $row['Taille']; ?></td></span>
                                <div class="cbp-pgopttooltip">
                                    <span data-size="XL">XL</span>
                                    <span data-size="L">L</span>
                                    <span data-size="M">M</span>
                                    <span data-size="S">S</span>
                                </div>
                            </li>
                            <li class="cbp-pgoptcart">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1"> 
                                        <input type="hidden" name="w3l_item" value="Striped Top "> 
                                        <input type="hidden" name="amount" value="25.00"> 
                                        <button type="submit" class="w3l-cart pw3l-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                        <span class="w3-agile-line"> </span>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                            </li>
                        </ul>
                    </div>
                    <a href="womens_single.html">
                        <div class="cbp-pginfo w3layouts">
                            <td><h3><?PHP echo $row['Nom']; ?></h3>
                            <span class="cbp-pgprice"><?PHP echo $row['Prix']; ?> DT</span></td>
                        </div>
                    </a>
                </li>
            </tr>            
        <?php endwhile;
}
else{
    echo "string";
	//header("Location: .php");
		exit;
}
?>