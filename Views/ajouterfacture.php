<?php
include_once '../Model/facture.php';
include_once '../Controller/factureC.php';

$error = "";


$facture = null;


$factureC = new factureC();
if (

    isset($_POST["name"]) &&
    isset($_POST["phone"]) &&
    isset($_POST["address"]) &&
    isset($_POST["campany"]) &&
    isset($_POST["phonec"]) &&
    isset($_POST["addressc"]) &&
    isset($_POST["referance"]) &&
    isset($_POST["date"]) &&
    isset($_POST["clientn"]) 

) {
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["campany"]) &&
        !empty($_POST["phonec"]) &&
        !empty($_POST["addressc"]) &&
        !empty($_POST["referance"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["clientn"]) 
        

    ) {
        $facture = new facture(

            $_POST['name'],
            $_POST['phone'],
            $_POST['address'],
            $_POST['campany'],
            $_POST['phonec'],
            $_POST['addressc'],
            $_POST['referance'],
            $_POST['date'],
            $_POST['clientn'],
        );
   
        
        $factureC->ajouterFacture($facture);
        header('Location: ajouterproduct.php');
    }
        
       

        
    } 


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleF.css" />
    <script src="js/script.js" defer></script>
    <title>Registraion Form</title>
  </head>
  <body>
  <?php include "topbar.php"; ?> 


  <form method="post" id="form" class="form">
      <h1 class="text-center"></h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="1"
        ></div>
        <div class="progress-step" data-title="2"></div>
        <div class="progress-step" data-title="3"></div>
   
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
       
        <input type="text" class="form-control" name="name" id="name" placeholder="enter the name of client" required>
        </div>
        <div class="input-group">
       
        <input type="text" class="form-control" name="phone" id="phone" minlength="8" maxlength="8" placeholder="enter his/her phone" required>
        </div>
        <div class="input-group">
       
         <input type="text" class="form-control" name="address" id="address"  placeholder=" enter the address of client" required>
</div>
        <div class="">
          <a href="#" class="btn btn-next ">Next</a>
        </div>
      </div>
      <div class="form-step">
      <div class="input-group">
   
       <input type="text" class="form-control" name="campany" id="campany"  placeholder=" enter campany's name"required>
  </div>
        <div class="input-group">
          
          <input type="text" name="phonec" id="phonec"   minlength="8" maxlength="8" placeholder=" enter campany's phone" required>
        </div>
        <div class="input-group">
        
         <input type="text" class="form-control" name="addressc" id="addressc" placeholder=" enter the address of campany " required>
</div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
       
        <input type="text" class="form-control" name="referance" id="referance" placeholder="referance of order" required>
        </div>
         <div class="input-group">
       
        <input type="date" class="form-control" name="date" id="date" placeholder="date" required>
         </div>
         <div class="input-group">
                       
                            <input type="text" class="form-control" name="clientn" id="clientn" placeholder="clientnumber"  required>
                        </div>
               
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <button type="submit" value="Envoyer" class="btn btn-primary" >Submit</button>
       
        
        </div>
      </div>
      
       
      
    </form>
  </body>
</html>




