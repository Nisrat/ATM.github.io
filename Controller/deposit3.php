<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


?>
<html>
<head>  
    <title>Deposit</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "../View/style.css">   
</head>  
    <div class="hero">
    <h1><b>deposit<b><h1>
    
    <form action="../Model/depo3.php" method="POST"> 
           <div class="frm">
              
                <label>Card No</label>
                <input type="number" name="card_no" >
</br>
                <label>Deposit Amount: 10000</label>
               
                <input type="submit" class="btn btn-primary" value="Done">
                 
</div>  
   </div>
</form>
</html>