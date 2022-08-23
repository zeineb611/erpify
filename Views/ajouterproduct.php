<?php
include_once '../Model/product.php';
include_once '../Controller/productC.php';


$error = "";


$product = null;




$productC = new productC();
if (

    isset($_POST["description"]) &&
    isset($_POST["unit"]) &&
    isset($_POST["quantity"])&&
    isset($_POST["referancep"])
   
  
   

) {
    if (
        !empty($_POST["description"]) &&
        !empty($_POST["unit"]) &&
        !empty($_POST["quantity"])&&
        !empty($_POST["referancep"]) 
        
     
        

    ) {
        $product = new product(

            $_POST['description'],
            $_POST['unit'],
            $_POST['quantity'],
            $_POST["referancep"]
           
        );
   
        
        $productC->ajouterProduct($product);
       
    }
        
       

        
    } 


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ajouter Admin</title>

    <!-- Custom fonts for this template-->
    

<!-- Custom styles for this template-->
<link rel="stylesheet" href="css/styleF.css">

    
</head>

<body id="page-top">
  <?php include "topbar.php"; ?> 
        
    
   
    
</div>
    
</div>

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <form method="post" id="form" class="form">

                        <div class="form-group">
                            
                            <input type="text" class="form-control" name="description" id="description" placeholder="description" required >
                        </div>

                       

                        <div class="form-group">
                          
                            <input type="text" class="form-control" name="unit" id="unit"  placeholder="unit price" required >
                        </div>

                        

                        <div class="form-group">
                           
                            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity " required >
                        </div>


                        <div class="form-group">
                            <label for="referancep">referance</label>
                            <input type="text" class="form-control" name="referancep" id="referancep" placeholder="referance de commande " required >
                        </div>
                    
                        <center><button type="submit" value="Envoyer" class="btn btn-primary" >Ajouter</button>
                        <a href ="afficherproduct.php" class="nav-link2">create account</a></center>
                       
                        </div>


                      

                    </form>
                    <br>
                    <div id="error" style="color: red;"></div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   

    <!-- Bootstrap core JavaScript-->
   
</body>

</html>