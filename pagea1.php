<html>
<body>
    <link rel = "stylesheet" type="text/css" href="style1.css">
<link rel = "stylesheet" type = "text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <div align="center" ><h2 style="margin-top:30px; margin-left:500px;  color:black;font-family:georgia;">ADMIN LOGIN PAGE</h2></div>
    <div class="container">
        <div style="margin-top:60px;"class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
        <div align="center"><h3 style="background:black;padding: 10px 20px;font-family:inherent; color:white;">LOGIN</h3></div>
            <form action="" method="post">
            <div class="form-group">
            <label style="font-family:inherent;font-size:20px;color:black;">Username :</label><input type="text" name="name"class="form-control" required>
            </div>
            <div class="form-group">
            <label style="font-family:inherent;font-size:20px;color:black;">Password :</label><input type="password" name="pass"class="form-control" required>
            </div>
                <div align="center"><button style="padding:5px 10px;background:black; font-family:inherent;font-size:20px;color:white;" class="btn" name="admin">submit</button></div>
            </form>
        </div>
        <div class="col-md-6 login-right">
        <form action="" method="post">
            <br><br><div class="form-group">
                <img src="img1.png" style="width:100%;"> 
        </div>
        </form>
        </div>
        </div>
        </div>
    </div>
<?php
if(isset($_POST["admin"])){
 if(!empty($_POST['name']) && !empty($_POST['pass'])){
 session_start();
 $name = $_POST["name"];
 $pass = $_POST['pass'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'votepage') or die("DB Error");
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE name='".$name."'and password='".$pass."'" );
 $numrows = mysqli_num_rows($query);
 if($numrows == 1)
 {
 header("location:pagea2.php");
 }
 else
 {
 echo "Invalid credentials! Please try again.";
 }
 }
 else
 {
 ?>
 <?php
 }
}
?>
</body>
</html>