

<?php
include("issue_submission.php");
if(isset($_POST['labour_login'])){
 
    $name=$_POST['labour'];
    $password=$_POST['password'];
    echo $name,$password;
   $db->login($name,$password);

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>




    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/specbee.png" id="icon" alt="User Icon" />
      <h3>labour section</h3>
    </div>

    <!-- Login Form -->
    <form action="#" method="POST">
    <select id="position" class="fadeIn first" name="labour" placeholder="labour" >
            <option value="harry">harry</option>
            <option value="bob">bob</option>
            <option value="mary">mary</option>
            <option value="sham">sham</option>
            <option value="rosy">rosy</option>     
     </select>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="labour_login" value="Log In">


      

    </form>
   

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <p>Royal society services</p>
</div>
</body>
</html>
