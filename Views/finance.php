<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>erpify</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    
    <?php include "navbar.php"; ?> 
    <!-- Navbar End -->
        
    <div class="container-fluid page-header" style="margin-bottom: 9px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase"><?php echo $lang['about'] ?></h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href=""><?php echo $lang['home'] ?></a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><?php echo $lang['about'] ?></p>
                </div>
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="">
                
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><?php echo $lang['f'] ?></h5>
                        
                    </div>
                    <ul class="list-unstyled my-5 text-small text-left">
                        <li class="mb-3">
                          <i class="fa fa-check mr-2 text-primary"></i> <?php echo $lang['f1'] ?></li>
                       
                          

                        
                  </ul>
                    
                </div>
            </div>
      
        <div class="">
                
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><?php echo $lang['f2'] ?></h5>
                        
                    </div>
                    <ul class="list-unstyled my-5 text-small text-left">
                        <li class="mb-3">
                          <i class="fa fa-check mr-2 text-primary"></i> <?php echo $lang['f3'] ?></li>
                       
                          

                        
                  </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    

    <!-- Footer Start -->
    <?php include "footer.php"; ?> 
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/translate.js"></script>
</body>

</html>