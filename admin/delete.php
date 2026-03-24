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
<title>Gerer (Personnel Only)</title>

</head>
<body>
<div class="container"> 

<div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3">



<form method="POST">

<div class="log-in-form">
  <h4 class="text-center">Suppression du vehicule</h4>


<div class="mb-3">
  <label>Identifiant du vehicule
    <input type="number" class="form-control" placeholder="Numero du produit" name="id" required>
  </label>
</div>


<button type="Submit"name="valider" class="btn btn-primary">Supprimer un vehicule</button>
</form>

</div>

<div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3">

<?php foreach($Produit as $Produit): ?> 

<div class="column">
  <div class="card">
    <img src="<?= $Produit->image ?>" alt="car" style="width:50%">
    <div class="container">
      <p class="title"><?= $Produit-> id ?></p>
      
    </div>
  </div>
</div>

<?php endforeach; ?>

</div>
</div></div></div>


</body>
</html>


<?php

    if(isset($_POST['valider']))
{
      if(isset($_POST['idproduit']))
{
       if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']))

{
        
        $id = htmlspecialchars(strip_tags($_POST['idproduit']));
        
        try 
        {  
        supprimer($id);

       }
        catch (Exception $e) { 
        
        $e->getMessage();

        }
error_reporting(-1);
}

}
}


?>   