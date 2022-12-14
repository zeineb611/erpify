

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Erpify</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
 

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
<!--div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;"-->

   
<?php include "topbar.php"; ?>
<!-- Topbar End -->


    <!-- Navbar Start -->
   <!----> <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i><?php echo $lang['features'] ?></h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                        <a href="facturation.php" class="nav-link" ><?php echo $lang['facturation'] ?></a>
                        <a href="inventory.php" class="nav-item nav-link"><?php echo $lang['inventory'] ?></a>
                        <a href="accountacy.php" class="nav-item nav-link"><?php echo $lang['accountancy'] ?></a>
                        <a href="finance.php" class="nav-item nav-link"><?php echo $lang['financial'] ?></a>
                       
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link"><?php echo $lang['home'] ?></a>
                            <a href="about.php" class="nav-item nav-link "><?php echo $lang['about'] ?></a>
                            <a href="price_list.php" class="nav-item nav-link"><?php echo $lang['price'] ?></a>
                            
                            <a href="contact.php" class="nav-item nav-link"><?php echo $lang['contact'] ?></a>
                            
                        </div>
                        <div>
     
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="login.php"><?php echo $lang['join'] ?></a>
                    </div>
                   

                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


</body>
</html>
