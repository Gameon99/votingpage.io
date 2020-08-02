<html>
    <link rel = "stylesheet" type="text/css" href="style2.css">
        <?php
    if(isset($_POST["csubmit"])){
     if(!empty($_POST['name'])){
     session_start();
     $name = $_POST["name"];
     $scholarno = $_POST['scholarno'];
     $mobile = $_POST['mobile'];
     $year = $_POST['year'];
     $branch = $_POST['branch']; 
     $section = $_POST['section'];  
     $motto = $_POST['motto'];
     $con = mysqli_connect('localhost','root','') or die (mysqli_error());
     mysqli_select_db($con,'test') or die("DB Error");
     $sql = mysqli_query($con,"select * from candidate where scholarno = '{$scholarno}'");
     $numrows = mysqli_num_rows($sql);
    if($numrows == 0){
        $r="insert into candidate(name,scholarno,mobile,year,branch,section,motto) values('{$name}','{$scholarno}','{$mobile}','{$year}','{$branch}','{$section}','{$motto}')";
        $result=mysqli_query($con,$r);
        if($result){
        echo "<p style='color:black;font-size:24px;'>" . 'Candidate registration succesful' . "</p>";
        echo "<a style='color:black;font-size:24px;' href='page1.php'>Visit main page</a>";
        }else{
            echo "<p style='color:black;font-size:24px;'>" . 'Candidate registration is not succesful' . "</p>";
            echo "<a style='color:black;font-size:24px;' href='page1.php'>Visit main page</a>";
        }
        }else{
        echo "<p style='color:black;font-size:24px;'>" . 'Scholarno already exists' . "</p>";
        echo"<a style='color:black;font-size:20px;'href='page1.php'>Back</a>";
        }
        }
         else
         {
         ?>
         <?php
         }
        }
        ?> 
</html>