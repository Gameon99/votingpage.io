<html>
<body>
    <link rel = "stylesheet" type="text/css" href="style1.css">
<link rel = "stylesheet" type = "text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <div align="center" ><h2 style="margin-top:30px; margin-left:500px;  color:black;font-family:georgia;">VOTER PAGE</h2></div>
    <div class="container">
        <div style="margin-top:40px;"class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
        <div align="center"><h3 style="background:black;padding: 10px 20px;font-family:inherent; color:white;font-size:24px;">ENTER YOUR DETAILS</h3></div>
            <form action="pagec2.php" method="post">
            <div class="form-group">
            <label style="font-family:inherent;font-size:24px;color:black;">Branch:</label><input style="border:2px solid black;border-radius:4px;" type="text" name="branch"class="form-control" required>
            </div>
            <div class="form-group">
            <label style="font-family:inherent;font-size:24px;color:black;">Section:</label><input style="border:2px solid black;border-radius:4px;" type="int" name="section"class="form-control" required>
            </div>
                <div align="center"><button style="padding:5px 10px;background:black; font-family:inherent;font-size:20px;color:white;" class="btn" name="voter">submit</button></div>
            </form>
        </div>
        <div class="col-md-6 login-right">
        <form action="" method="post">
            <div class="form-group">
                <img src="manit.jpg" style="width:100%;"> 
            </div>
            <div align="center" class="form-group"><p style="font-family:inherent;font-size:32px;color:white;">YOUR VOTE<br>YOUR VOICE</p></div>
        </form>
        </div>
        </div>
        </div>
    </div>    
    </body>
</html>