<?php
$emailErr = $passwordErr = "";
$Email = $Password = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['email'])) {
    $emailErr = "*email is required";
  } else {
    $Email = test_input($_POST["email"]);
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*ivalid email format";
    }
  }

if(empty($_POST['password'])) {
  $passwordErr = "*password is required";
} else {
  $Password = test_input($_POST['password']);
  }

 if(empty($emailErr) && empty($passwordErr)) {
   header('Location:login-process.php');
 }

}

//the function to filter the input
function test_input($data) {
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>

<!DOCTYPE html>
<head>
  <title>user login</title>
  <link href="login-style.css" rel="stylesheet">
  <style>
  .error {
    color: #FF0000;
    font-size: 12px;
    margin-left: 80px;
  }
  </style>
</head>


<body>
  <div class="wrapper">
  <p>please either login or <br> <a href="regestir.php">click here to regestir</a>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  name="loginform">
      <span class="error"> <?php echo $emailErr;?></span>
        <input type="text" name="email" placeholder="email" value="<?php echo $Email;?>">
        <span class="error"><?php echo $passwordErr;?></span>
        <input type="password" name="password" placeholder="password" value="<?php echo $Password;?>">
        <input type="submit" name="submit" value="login">
    </div>
    <body>
      </html>
