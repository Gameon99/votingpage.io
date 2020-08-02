<html>
    <link rel = "stylesheet" type="text/css" href="style4.css">
<?php
if(isset($_POST["vsubmit"])){
         if(!empty($_POST['scholarno'])){
         $branch = $_POST['scholarno'];
         $option = $_POST['radio'];
        $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
        $db = mysqli_select_db($conn, 'test') or die("DB Error");
        $result = mysql_query("UPDATE `candidate` SET `points`= `points` + 1 WHERE `id` = '".$option."'");
        if($result){
            echo "Option submission succesful";
            echo "<a style='color:black;font-size:24px;' href='page1.php'>Visit main page</a>";
        }
?>
</html>