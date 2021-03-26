<head>
 <title>Thank you for Registering</title>
 <style type="text/css">
  h1 { color:  red ; }
  h2 { font-family: Times New Roman; color: blue ; }
  p { font-family: Ariel; color: green}
  input[type=submit] {
     background-image: url('/run.jpg');
  background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 20px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 12px;
     margin: 4px 2px;
     cursor: pointer;
  }
 </style>
</head>
<body>
 <h1>Thank you for Registering</h1>
<?php
 if ((isset($_POST['name'])) or (isset($_POST['address'])) or (isset($_POST['gender'])) or (isset($_POST['age'])) or (isset($_POST['size'])) ) 
       {
  $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);
  $age = filter_var( $_POST['age'], FILTER_SANITIZE_STRING);
  $address = filter_var( $_POST['address'], FILTER_SANITIZE_STRING);
  $gender = filter_var( $_POST['gender'], FILTER_SANITIZE_STRING);
  $size = filter_var( $_POST['size'], FILTER_SANITIZE_STRING);

  
  $cost = 25.00;
 {
  if ($size === "2x" || $size === "3x") 
  {
  $cost += 2.00;
  }
  
  if ($age >= 65) {
    $cost -= 5.00;
       }
  }
  echo"<p style='color: darkblue;'>Your total is $" .$cost. "</p>";
        }
?>
 </body>
