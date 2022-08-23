<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>Erpify</title>
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html, body {
        min-height: 100%;
        }
        body, div, form, input, select, textarea, label, p { 
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: rgb(14, 23, 109);
        line-height: 22px;
        }
        h1 {
        position: absolute;
        margin: 0;
        font-size: 40px;
        color: #fff;
        z-index: 2;
   line-height: 83px;
        }
        textarea {
        width: calc(100% - 12px);
        padding: 5px;
        }
        .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 700px;
        height: 200px;
        padding: 20px;
        margin-left: 20%;
        }
        form {
        width: 90%;
        padding: 20px;
        border-radius: 6px;
        background: #fff;
        box-shadow: 0 0 8px #e9c705; 
        margin-left:5%;
        }
        .banner {
        position: relative;
        height: 300px;
        background-image: url("/uploads/media/default/0001/02/e2502bb5e1dab7d5cc9b011c745033821aad632c.jpeg");  
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        }
        .banner::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.2); 
        position: absolute;
        width: 100%;
        height: 100%;
        }
        input, select, textarea {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }
        input {
        width: calc(100% - 10px);
        padding: 5px;
        }
        input[type="date"] {
        padding: 4px 5px;
        }
        textarea {
        width: calc(100% - 12px);
        padding: 5px;
      }
        .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
        color:  #006622;
        }
        .item input:hover, .item select:hover, .item textarea:hover {
        border: 1px solid transparent;
        box-shadow: 0 0 3px 0  #006622;
        color: #006622;
        }
        .item {
        position: relative;
        margin: 10px 0;
        }
        .item span {
        color: red;
        }
        input[type="date"]::-webkit-inner-spin-button {
        display: none;
        }
        .item i, input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        font-size: 20px;
        color: #00b33c;
        }
        .item i {
        right: 1%;
        top: 30px;
        z-index: 1;
        }
   .week {
        display:flex;
      
        }
        .colums {
        display:flex;
        justify-content:space-between;
        flex-direction:row;
        flex-wrap:wrap;
        }
        .colums div {
        width:48%;
        }
        [type="date"]::-webkit-calendar-picker-indicator {
        right: 1%;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
        }
        input[type=radio], input[type=checkbox]  {
        display: none;
        }
        label.radio {
        position: relative;
    display: inline-block;
        margin: 5px 20px 15px 0;
        cursor: pointer;
        }
        .question span {
        margin-left: 30px;
        }
        .question-answer label {
        display: block;
        }
        label.radio:before {
        content: "";
        position: absolute;
        left: 0;
        width: 17px;
        height: 17px;
        border-radius: 50%;
        border: 2px solid #ccc;
        }
        input[type=radio]:checked + label:before, label.radio:hover:before {
        border: 2px solid  #006622;
        }
        label.radio:after {
        content: "";
        position: absolute;
        top: 6px;
        left: 5px;
        width: 8px;
        height: 4px;
        border: 3px solid  #006622;
        border-top: none;
        border-right: none;
        transform: rotate(-45deg);
        opacity: 0;
        }
        input[type=radio]:checked + label:after {
        opacity: 1;
        }
        .flax {
        display:flex;
        justify-content:space-around;
        }
        .btn-block {
        margin-top: 10px;
        text-align: center;
        }
        button {
        width: 150px;
        padding: 10px;
        border: none;
        border-radius: 5px; 
        background: #ffc107;
        font-size: 16px;
        color: #fff;
  cursor: pointer;
        }
        button:hover {
        background:  #fcff61;
        }
        @media (min-width: 568px) {
        .name-item, .city-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        }
        .name-item input, .name-item div {
        width: calc(50% - 20px);
        }
        .name-item div input {
        width:97%;}
        .name-item div label {
        display:block;
        padding-bottom:5px;
        }
        }
      </style>
      
  </head>
  

<body>
<!--div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;"-->
<div class="container-fluid bg-dark  text-white d-none d-lg-block">
<div class="row align-items-center py-4 px-xl-5">
    <div class="col-lg-3">
        <div><img class="img-fluid2" src="img/logo.png" alt=""></div>
    </div>
   
  
        
    
   
    
</div>
    
</div>
<!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include "navbar.php"; ?> 
<!-- Navbar End -->

<br>
<br>
                    <div class="">
                        <form>
                         
                          <br/>
                          <fieldset>
                            <legend>Complete your profil</legend>
                  
                            
                          <br/>
                          <fieldset>
                            
                             <div class="colums">
                            <div class="item">
                              <label for="fname"> First Name<span>*</span></label>
                              <input id="fname" type="text" name="fname" />
                            </div>
                            <div class="item">
                              <label for="lname"> Last Name<span>*</span></label>
                              <input id="lname" type="text" name="lname" />
                            </div>
                   <div class="item">
                              <label for="address1">Address 1<span>*</span></label>
                              <input id="address1" type="text"   name="address1" />
                            </div>
                    <div class="item">
                              <label for="address2">Address 2<span>*</span></label>
                              <input id="address2" type="text"   name="address2" />
                            </div>
                    <div class="item">
                              <label for="city">City<span>*</span></label>
                              <input id="city" type="text"   name="city" />
                            </div>
                   <div class="item">
                              <label for="state">State<span>*</span></label>
                              <input id="state" type="text"   name="state" />
                            </div>
                                               <div class="item">
                              <label for="eaddress">Email Address<span>*</span></label>
                              <input id="eaddress" type="text"   name="eaddress" />
                            </div>
                            <div class="item">
                              <label for="phone">Phone<span>*</span></label>
                              <input id="phone" type="tel"   name="phone" />
                            </div>
                                   
                                             
                              </div>
                            </div>
                                  </fieldset>
                          <div class="btn-block">
                            <button type="submit" href="/">Submit</button>
                          </div>
                        </form>
                      </div>
                  






                  
   

   

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