<?php 
    require_once "../Controller/productC.php"; 
 
 

   
?>

<!DOCTYPE html>
    <html lang="en">

    <head>

      
       

        <!-- Custom fonts for this template-->
        <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	
    <link rel="stylesheet" href="css/pdf.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    </head>

    <body class="page" >
<div id ="html2pdf">
<div class="my-5 page" size="A4">
        <div class="p-5">
                  

                        <?PHP

                          
                            $productC= new productC();
                            $list = $productC->afficherProduct();
                           $total= $productC-> affichertotal();
                           
                            
                        ?> 

                        

                           

                            
                            <?php
                            $host = 'localhost';
                            $dbname = 'eriphy';
                            $username = 'root';
                            $password = '';
                              
                            $dsn = "mysql:host=$host;dbname=$dbname"; 
                            // récupérer tous les utilisateurs
                            $sql = "SELECT * FROM facture ORDER BY id DESC LIMIT 1";
                             
                            try{
                             $pdo = new PDO($dsn, $username, $password);
                             $stmt = $pdo->query($sql);
                             
                             if($stmt === false){
                              die("Erreur");
                             }
                             
                            }catch (PDOException $e){
                              echo $e->getMessage();
                            }
                          ?>
                            
                            
                            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                 
             <section class="store-user mt-5">
                <div >
                    <div class="row bb pb-3">
                        <div class="col-7">
                        

            Name: <?php echo htmlspecialchars($row['name']); ?></br>
            Phone: <?php echo htmlspecialchars($row['address']); ?></br>
            <div class="address"> Address: <?php echo htmlspecialchars($row['phone']); ?></br> </div>
<br>
            Referance: <?php echo htmlspecialchars($row['referance']); ?></br>
            Client ° N: <?php echo htmlspecialchars($row['clientn']); ?></br>
            
            </div>
            <div class="col-5">
                                            
                       
                              
        <div class="address">Campany: <?php echo htmlspecialchars($row['campany']); ?></br></di>

      <div class="address">  Address: <?php echo htmlspecialchars($row['addressc']); ?></br></div>
         
         Phone: <?php echo htmlspecialchars($row['phonec']); ?>
         <br>

         <br>
         Date: <?php echo htmlspecialchars($row['date']); ?></br>

        <div>


       
      
                        
       
            <div>
              
                </section>
     </tr>
     <?php endwhile; ?>                 
       
    
 

     <center><h2>invoice</h2></center>
     

     <br>

     <section class="product-area mt-4 p">
                <table class="devis">
                    <thead>
						    <tr>
                            <td> Description</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                                                <?PHP
                                                    foreach ($list as $row) {
                                                ?>

                                                <tr>
                                                    <td><?PHP echo $row['description'];?></td>
                                                    <td><?PHP echo $row['unit']; ?></td>
                                                    <td><?PHP echo $row['quantity']; ?></td>
                                                    <td><?PHP echo $row['amount'] ; ?></td>
                                                    
                                                        
                                                 
                                                    
                                                </tr>

                                                <?PHP
                                                    }
                                                ?>
                                            </tbody>

                                        </table>
                                    
                                                </section>
<br>
<br>
<br>
<br>
<br>
<br>

                <section class="balance-info p ">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold"> the total sum: </p>
  
                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <tr>
                                <td>Sub Total:</td>
                                <?PHP
                                 foreach ($total as $row) {
                                 ?>
                                <td><?PHP echo $row['amount'] ; ?></td>
                                <?PHP
                                                    }
                                                ?>
                            </tr>
                            
                        </table>

                        <!-- Signature -->
                        <div class="col-12">
                            <img src="signature.png" class="img-fluid" alt="">
                            <p class="text-center m-0"> Director Signature </p>
                        </div>
                    </div>
                </div>
            </section>

                            </div>
                        </div>
                                               
              

                    </div>
                                    <button id ="exportPDF">Télécharger le PDF</button>
                                                

    <script>
     
          
            let htmlPDF = document.getElementById("html2pdf");
            let exportPDF = document.getElementById("exportPDF");
            
            
            exportPDF.onclick = (e) => html2pdf(htmlPDF);
            
        
    </script>

                            
                    <!-- End of container-fluid -->


        <!-- Scroll to Top Button-->
        


    </body>



</html>