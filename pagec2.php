<html>
<link rel = "stylesheet" type="text/css" href="style4.css">
<body style="margin-left:400px;" >
<form action="pagec3.php"method="post">
<h2 align="center" style="margin-top:8px;color:white;font-family:georgia;">VOTER CHOICE</h2>
<h3 style="color:black;font-family:serif;font-size:20px;margin-left:250px;">Enter your scholar number&nbsp;&nbsp;<input type="number" name="scholarno" value="scholarno"/>
</h3>
    <div align="center"><h3 style="color:black">List of candidates</h3></div>
    <?php
        if(isset($_POST["voter"])){
         if(!empty($_POST['scholarno'])){
         session_start();
         $branch = $_POST['branch'];
         $section = $_POST['section'];
        $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
        $db = mysqli_select_db($conn, 'test') or die("DB Error");
        $query = "SELECT * FROM candidate where branch='".$branch."'and section='".$section."'";
                     $result = mysqli_query($conn,$query);    
            echo "<table align='center' style='font-size:20px;width:50%;border:1px solid white;color:black;background: rgba(211,211,211,0.5);padding:10px 10px;' border='1'>";
                    echo "<tr>
                    <td align='center'>ID</td>
                    <td align='center'>Candidate Name</td>
                    </tr>";
             $count =1;
            while($row = mysqli_fetch_array($result)){ 
                 echo '<tr>';
                 echo '<td align="center">'. $count . '</td>';
                 echo '<td align="center">'. $row['name'] . '</td>';
                 $count++;
                 echo '</tr>';
            }
            echo "</table>";
         }
        }
    ?>
    <h3 style="font-size:20px;" align="center">Enter your choice</h3>    
    <table align="center"style='width:50%;border: 1px solid white;color:black;background: rgba(211,211,211,0.5);padding:10px 10px;'border="1">
        <tr><td style="font-size:20px;"><input type="radio" name="radio" value="1"/>Candidate 1</td></tr>
        <tr><td style="font-size:20px;"><input type="radio" name="radio" value="2"/>Candidate 2</td></tr>
        <tr><td style="font-size:20px;"><input type="radio" name="radio" value="3"/>Candidate 3</td></tr>
        <tr><td style="font-size:20px;"><input type="radio" name="radio" value="4"/>Candidate 4</td></tr>
        <tr><td style="font-size:20px;"><input type="radio" name="radio" value="5"/>Candidate 5</td></tr>
        </table>
        <div align="right">
                <button style="margin-right:150px;padding:5px 30px;background:black;color:white"type="submit" name="vsubmit" class="btn btn-primary">
                    Submit </button></div>
    </form>
    </body>
</html>