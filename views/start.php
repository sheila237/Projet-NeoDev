<?PHP
include "../entities/produit.php";
include "../core/produitsC.php";
$produit=new Produits('robe',213,500,36);
$produitC=new ProduitsC();
$produitC->afficherProduits($produits);
echo "****************";
echo "<br>";
echo "nom:".$produits->getNom();
echo "<br>";
echo "ID:".$produits->getID();
echo "<br>";
echo "prix:".$produits->getPrix();
echo "<br>";
echo "taille:".$produits->getTaille();
echo "<br>";



?>