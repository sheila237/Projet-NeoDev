<?php 
require 'db.php';
require 'panier.php';
$DB=new DB();
$panier=new panier();

if(isset($_GET['id'])){
	$produit=$DB->query('SELECT id FROM produit WHERE id=:id',array('id' => $_GET['id']));
	if(empty($produit)){
		die("Ce produit n'existe pas");
	}
	$panier->add($produit[0]->id);
	die('Le produit à été ajouté au panier');
}
else{
	die("Vous n'avez pas sélectionné de produit àajouter");
}
?>
