<html>
<body>
    <link rel = "stylesheet" type="text/css" href="style2.css">
<link rel = "stylesheet" type = "text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <form action="pageb3.php" method="post">
    <h3 align="center" style="margin-top:40px;">FILL ALL YOUR DETAILS BELOW</h3>
    <div class="container" style="margin-top:60px;">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
                <div class="form-group">
                 <label>Full name</label>
                 <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                 <label>Scholar Number</label>
                 <input type="text" name="scholarno" class="form-control" required>
                </div>
                <div class="form-group">
                 <label>Mobile</label>
                 <input type="number" name="mobile" class="form-control" required>
                </div>                
        </div> 
            <div class="col-md-6 login-right">
                <div class="form-group">
                 <label>Year</label><br><select style="width:475px; height:38px; " class="dropdown" type="number"id="year" name="year">
                    <option style="display:none;"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                 <label>Branch</label><br><select style="width:475px; height:38px; "class="dropdown" id="branch" name="branch">
                    <option style="display:none;"></option>
                    <option value="CSE">Computer Science</option>
                    <option value="MECH">Mechanical</option>
                    <option value="ECE">Electronics and communication</option>
                    <option value="EE">Electrical</option>
                    <option value="CIVIL">Civil</option>
                    <option value="CHEMICAL">Chemical</option>
                    <option value="METALLURGY">Metallurgy</option>
                    <option value="ARCHITECTURE">Architecture</option>
                    <option value="PLANNING">Planning</option>
                    </select>
                </div> 
                <div class="form-group">
                 <label>Section</label><br><select style="width:475px; height:38px; "class="dropdown" id="section" name="section">
                    <option style="display:none;"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    </select>
                </div> 
        </div>
        <div align="center"><label>Write your view and motto</label>
             <textarea style="width:1026px;height:200px;font-family:cursive;font-size:16px;" type="text" name="motto" class="form-control" required></textarea>
            </div>
        </div>
        </div>
        </div>
<div align="right">
                <button style="margin-right:150px;padding:5px 30px;background:black;"type="submit" name="csubmit" class="btn btn-primary">
                    Submit </button></div>
</form>
        
    </body>

</html>