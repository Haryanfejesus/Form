<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 $errorcount = 0;
if(isset($_POST['submit'])) {
    $FirstName = $_POST['first'] != "" ? $_POST['first'] : $errorcount++;
   
    $LastName = $_POST['last'] != "" ? $_POST['last'] : $errorcount++;
   
    $Email = $_POST['email'] != "" ? $_POST['email'] : $errorcount++;
    
    $DOB = $_POST['DOB'] != "" ? $_POST['DOB'] : $errorcount++;
   
    $gender = $_POST['gender'] != "" ? $_POST['gender'] : $errorcount++;
    
    $State = $_POST['state'] != "" ? $_POST['state'] : $errorcount++;
   
    $password = $_POST['pw'] != "" ? $_POST['pw'] : $errorcount++;


   
   
    echo "First Name:" .$FirstName . "<br />";
    echo "Last Name:" .$LastName . "<br />";
    echo "Email address:" .$Email . "<br />";
    echo "Date of Birth:" .$DOB . "<br />";
    echo "Gender:" .$gender . "<br />";
    echo "State of origin:" .$State . "<br />";
    echo "Password:" .$password . "<br />";

    
  

    if($errorcount> 0){

      $_SESSION["error"]= "you have". $errorcount. "in your form submission";
      header("Location: form reg.php  ");
    }else{
      
      $allusers = scandir("Files");

      print_r($allusers);
      $countalltheusers = count($allusers);  
        
      $newuserid= $countalltheusers+1;
  
      $userobject =[
    'id'  => $newuserid,
    'first' => $FirstName,
    'last' => $LastName,
    'email' => $Email,
    'DOB' => $DOB,
    'gender' => $gender,
    'state' => $State,
    'pw' => $password,
      ];  

    
     

      for ($counter=0; $counter < $countalltheusers ; $counter++) { 
        $counteruser = $allusers[$counter];

        if ($counteruser== $Email . ".json ") {
          $_SESSION["error"] = "Registration failed, user already exists";
          header("Location:form reg.php ");

          die();
        }
      }

    
    }

  }




    file_put_contents("Files/". $Email. ".json",json_encode($userobject));
  
  

 




?>    
</body>
</html>