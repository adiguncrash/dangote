<?php
require 'includes/header.php';

 ?>

<!DOCTYPE html>
<html>
<body >
 <?php require "includes/nav.php";?>
 <div class="row">
     <nav class="navbar menu_nav col-md-2">
        <p style="margin:-125; padding: -45364654px;">batundessdsdfqdfddfghjklmù</p>
    </nav>
 </div>
    <div class="row">
             <?php foreach (GetUniqELementByTable('categorie','categorie_produit') as $categories => $categorie) {
             if (!empty(getAllBy3Etat('produit','etat_produit',1,'categorie_produit',$categorie['id_categorie'],'quantite_produit',0))) { ?>
                <div class="card col-md-10 mb-3 card_img">
        <div class="row">
           <div class="card-header entete">
               <h2 class="text-capitalize text-white"><?= $categorie['categorie'] ?> </h2>
           </div> 
           <div class="card-body">
               <div class="row">
                 <?php foreach (getAllBy3Etat('produit','etat_produit',1,'categorie_produit',$categorie['id_categorie'],'quantite_produit',0) as $produit) { ?>
                    <div class="col-md-3 mb-3 border-0"><a href="#" class="text-decoration-none">
                        <?php $image = getAlll('image_produit',$produit['id_produit']); ?>
                        <div class="card border-0 card_produit">
                             <div class="card-header " style="height: 15em !important; background: url(<?='pages/'.$image[0]['image_principal'] ?>) center no-repeat; background-size: cover;">
                                </div>
                             <div class="card-body text-center pb-1" style="overflow: hidden;">
                                <h5><?= $produit['nom_produit'] ?></h5>
                                <p style="margin-bottom:-2%"> 
                                    <span>*</span>
                                    <span>*</span>
                                    <span>*</span>
                                    <span>*</span>
                                    <span>*</span>
                                </p>
                                <p class="text">$<?= $produit['prix_produit'] ?></p>
                                <p class="text-muted"><?= $produit['description_produit'] ?></p>

                                 
                                <!-- <div class="card aff card-body "> -->
                                    
                                <!-- </div> -->
                                
                            </div>
                        </div></a>
                    </div>
                <?php } ?>
               </div>
           </div>
           </div>
       </div>

       
                <?php }} ?>

    </div>






    