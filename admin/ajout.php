<?php

require("../config/commandes.php");

$Produit=afficher();

 ?>

<!DOCTYPE html>
<head>

<meta charset="utf-8">
<meta name="theme-color" content="#daa37f">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../images/logosite.png"/>
<link rel="stylesheet" href="login.css">
<title>Maintenance (Personnel Only)</title>

</head>
<body>
<div class="container"> 

<div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3">

<form method="POST">

<div class="log-in-form">
  <h4 class="text-center">Ajout du vehicule</h4>

<div class="mb-3">
  <label>Nom de l'image du vehicule
    <input type="name" class="form-control" placeholder="image" name="image" required>
  </label>
</div>


<div class="mb-3">
  <label>Nom du vehicule
    <input type="text" class="form-control" placeholder="nom" name="nom" required>
  </label>
</div>

<div class="mb-3">
  <label>Prix
    <input type="number" class="form-control" placeholder="prix" name="prix" required>
  </label>
</div>

<div class="mb-3">
  <label>Description
    <input type="text" class="form-control" placeholder="description" name="desc" required>
  </label>
</div>


<button type="Submit"name="valider" class="btn btn-primary">Ajouter un vehicule</button>
</form>

</div>

<div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3">

<?php foreach($Produit as $Produit): ?> 

<div class="column">
  <div class="card">
    <img src="<?= $Produit->image ?>" alt="car" style="width:50%">
    <div class="container">
      <p class="title"><?= $Produit-> id ?></p>
      
    

<?php endforeach; ?>
   </div>
  </div>
 </div>

 </body>
</html>


<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc']))
	    {
	    	$image = htmlspecialchars(strip_tags($_POST['image']));
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
	    	$prix = htmlspecialchars(strip_tags($_POST['prix']));
	    	$desc = htmlspecialchars(strip_tags($_POST['desc']));
          
          try 
          {
            ajouter($image, $nom, $prix, $desc);
           
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>