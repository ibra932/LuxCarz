<?php

require("config/commandes.php");

$Produit=afficher();

?>

<!DOCTYPE html>

<head>
  <meta charset="utf8">
  <link rel="shortcut icon" type="image/x-icon" href="images/logosite.png"/>
  <meta name="theme-color" content="#daa37f">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="ventes.css"/>
  
  <title>Catalogue de Ventes</title>
  </head>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
           
          
         <div class="navbar-left logo"> 
       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 291 385.3" style="enable-background:new 0 0 291 385.3;" xml:space="preserve">
<style type="text/css">
	
</style>
<polygon class="st0" points="82.1,12 7.4,138.7 38.7,237.3 "/>
<polygon class="st0" points="92.7,5.3 199.4,8.7 223.4,82.7 "/>
<polygon class="st0" points="89.4,8.7 223.4,86.7 42.1,237.3 "/>
<polygon class="st0" points="206.1,15.3 262.7,66 228.1,82.7 "/>
<polygon class="st0" points="262.7,70 228.1,86 266.4,175.3 "/>
<polygon class="st0" points="228.1,92.7 262.7,179.3 173.4,328 "/>
<polygon class="st0" points="223.4,92.7 44.7,240 167.7,336 "/>
<polygon class="st0" points="252.1,210.3 184.4,380.3 170.7,339.7 "/>
<polygon class="st0" points="60.1,260.3 167.4,341 180.4,380.3 "/>
</svg>
          </div>
		<h1 class="brand brand-name navbar-left"><div class="navbar-left">Luxe-Carz</h1>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Accueil</a></li>
   				<li><a href="admin/delete.php">Connexion (Personnel Only)</a></li>
    			<li><a href="#Contact">Nos Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="row2">
  <div class="col-lg">
    <h1 class="titre"> 
      Catalogue de Vehicules
    </h1>
  </div>
</div>

<?php foreach($Produit as $Produit): ?>



  <div class="column">
    <div class="card">
      <img src="<?= $Produit->image ?>" alt="car" style="width:100%">
      <div class="container">
        <p class="title"><?= $Produit->nom ?></p>
        <p> <?= substr($Produit->description, 0,250); ?></p>
        <p><?= $Produit->prix ?>€</p>
        <p><button class="button">Acheter</button></p>
      </div>
    </div>
  </div>

<?php endforeach; ?>


</html>