<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


?>
<html>
<head>  
    <title>Want to Change your pin?</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "../View/style.css">   
</head>  
    <div class="hero">
    <h1><b>Want to Change your pin?<b><h1>
    
    <form action="../Model/change.php" method="POST"> 
           <div class="frm">
           Card no: <input type="number" name="card_no" /><br>
           Old Pin: <input type="password" name="pin_no"  /><br>   
          New Pin: <input type="password" name="pin_no"  /><br>

        <input type="submit" value="Change Password" />
                 
</div>  
   </div>

</html>