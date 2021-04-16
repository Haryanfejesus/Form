<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My form</title>
</head>
<body>
<form name = "register" action = "processreg.php" method = "post" autocomplete = "on">
<p>
<?php
  if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {

      echo $_SESSION  ['error']; 
  }


?>

</p>


<fieldset><legend>REGISTRATION FORM</legend>
 

    <P> First Name: <input type = "text" name = "first" required/></P>
    <P>Last Name: <input type = "text" name = "last" required/></P>
    <P>Email address: <input type = "text" name = "email" required/></P>
    <P>Date of Birth: <input type = "text" name = "DOB" required/></P>
    <P>Gender: <select name = "gender" required>
      <option>Female</option>
      <option>Male</option>
      </select></P>
    <P>State of origin: <input type = "text" name = "state" required/></P>
    <P>Password: <input type = "password" name = "pw" required/></P>
    
   


    <P><input type = "submit" name = "submit" value = "Sign In"/></P>
    
    </fieldset>
  
    



</form>



</body>
</html>