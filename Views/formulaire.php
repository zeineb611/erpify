<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    
    
    <link rel="stylesheet" href="css/formulaire.css">
  </head>
  <body>

    <?php include "navbar.php"; ?> 
    <br>
    <div class="testbox">
      <form>
       
        <br/>
        <fieldset>
          <legend><?php echo $lang['complete'] ?></legend>

          
        <br/>
        <fieldset>
         
           <div class="colums">
          <div class="item">
            <label> <?php echo $lang['first'] ?><span>*</span></label>
            <input  type="text" >
          </div>
          <div class="item">
            <label ><?php echo $lang['last'] ?><span>*</span></label>
            <input  type="text" >
          </div>
 <div class="item">
            <label><?php echo $lang['city'] ?><span>*</span></label>
            <input  type="text" >
          </div>
 
  <div>
            <label ><?php echo $lang['state'] ?><span>*</span></label>
            <input  type="text">
          </div>
 <div >
            <label ><?php echo $lang['addresh'] ?><span>*</span></label>
            <input type="text">
          </div>
                             
          <div class="item">
            <label ><?php echo $lang['phone'] ?><span>*</span></label>
            <input  type="tel">
          </div>
          
            </div>
          </div>
                </fieldset>
        <div class="btn-block">
          <button ><a href="ajouterFacture.php"><?php echo $lang['save'] ?></a></button>
        </div>
      </form>
    </div>
    <?php include "footer.php"; ?> 
  </body>
</html>