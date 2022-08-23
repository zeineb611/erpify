<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    
    
    <link rel="stylesheet" href="css/formulaire.css">
  </head>
  <body>

    <?php include "navbar.php"; ?> 
    <div class="testbox">
      <form>
       
        <br/>
        <fieldset>
          <legend>Complete your profil</legend>

          
        <br/>
        <fieldset>
         
           <div class="colums">
          <div class="item">
            <label> First Name<span>*</span></label>
            <input  type="text" >
          </div>
          <div class="item">
            <label > Last Name<span>*</span></label>
            <input  type="text" >
          </div>
 <div class="item">
            <label>Address 1<span>*</span></label>
            <input  type="text" >
          </div>
  <div class="item">
            <label>Address 2<span>*</span></label>
            <input  type="text">
          </div>
  <div>
            <label >City<span>*</span></label>
            <input  type="text">
          </div>
 <div >
            <label >State<span>*</span></label>
            <input type="text">
          </div>
                             <div class="item">
            <label >Email Address<span>*</span></label>
            <input type="text" />
          </div>
          <div class="item">
            <label >Phone<span>*</span></label>
            <input  type="tel">
          </div>
          
            </div>
          </div>
                </fieldset>
        <div class="btn-block">
          <button ><a href="ajouterFacture.php">Submit</a></button>
        </div>
      </form>
    </div>
    <?php include "footer.php"; ?> 
  </body>
</html>