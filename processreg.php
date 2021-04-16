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
if(isset($_POST['submit'])) {
    $FirstName = $_POST['first'];
   
    $LastName = $_POST['last'];
   
    $Email = $_POST['email'];
    
    $DOB = $_POST['DOB'];
   
    $gender = $_POST['gender'];
    
    $State = $_POST['state'];
   
    $password = $_POST['pw'];

    $array_data = [
  'first' => $FirstName,
  'last' => $LastName,
  'email' => $Email,
  'DOB' => $DOB,
  'gender' => $gender,
  'state' => $State,
  'pw' => $password,
    ];  
   
    echo "First Name:" .$FirstName . "<br />";
    echo "Last Name:" .$LastName . "<br />";
    echo "Email address:" .$Email . "<br />";
    echo "Date of Birth:" .$DOB . "<br />";
    echo "Gender:" .$gender . "<br />";
    echo "State of origin:" .$State . "<br />";
    echo "Password:" .$password . "<br />";

    file_put_contents('Files/'. $array_data['first']. ".json",json_encode($array_data ));
  }


 




?>    
</body>
</html>