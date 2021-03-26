
<head>
 <title>Registration For Race</title>
 <style type="text/css">
  h1 { color:  red ; }
  h2 { font-family: Times New Roman; color: blue ; }
  p { font-family: Ariel; color: green}
  input[type=submit] {
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
 <h1>Registration For Race</h1>
<?php
 if ((isset($_POST['name'])) && (isset($_POST['address'])) && (isset($_POST['gender'])) && (isset($_POST['age'])) && (isset($_POST['size'])) ) 
       {
  $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);
  $age = filter_var( $_POST['age'], FILTER_SANITIZE_STRING);
  $address = filter_var( $_POST['address'], FILTER_SANITIZE_STRING);
  $gender = filter_var( $_POST['gender'], FILTER_SANITIZE_STRING);
  $size = filter_var( $_POST['size'], FILTER_SANITIZE_STRING);
  echo "<p>The original value is " . $age . " " . $address . "</p>" ;
  
  $cost = 25.00;
  
  if ($size === "2x" || $size === "3x") {
  $cost += 2.00;
  } 
  
  if ($age >= 65) {
    $cost -= 5.00;
  }
  
  echo"<p style='color: darkblue;'>Your total is $" . $cost . "</p>";
 }
?>
 </body>
