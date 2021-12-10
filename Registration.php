<?php 
if (isset($_POST["fname"])&&isset($_POST["pass"])&&isset($_POST["fLike"])&&isset($_POST["fPhone"])){
    $firstName= $_POST["fname"];
    $password=$_POST["pass"];
    $text=$_POST["fLike"];
    $phoneNumber=$_POST["fPhone"]; 
    $b="INSERT INTO `user`(`ID`, `FirstName`, `Password`, `favCake`, `PhoneNumber`) VALUES ('',' $firstName','$password','$text','$phoneNumber')"; 
    $a=mysqli_connect("localhost","root","","Delight");
  print_r($a);
$c=$a->query($b);//c is used for storing result of query 
echo $c;//the c value is printed
}

     
?>


<html>
    <head>
        <title>REGISTRATION PAGE</title>
</head>
<body>
    <div style  =" padding-top :13%;background-image: url( assests/birthday.jpg ); height:100% ; background-repeat: no-repeat; width:100% ;background-size: cover">
        <h1 style ="text-align: center; "><strong >REGISTRATION</strong></h1>
        <form style ="text-align: center;" action="/Delight/Registration.php"method ="POST">
            <label for="fname"> <b> First Name </b> </label> <br/> 
            <input type="text" name="fname" required> <br/>
            <label for="pass"><b>Password</b></label><br/>
            <input type="password" pattern="[A-Za-z]{8}"name="pass" required><br/>
            <label for="fLike"><b>Favourite Cake</b></label><br/>
            <input type ="text" name="fLike"required><br/>
            <label for="fPhone"><b>Phone Number</b></label><br/>
            <input type="tel" name="fPhone"required><br/>
            <input type ="submit" value ="submit"style="margin-top :10px"required>
           
              
            
         </form>  
           
</div>
</body>
</html>
   

