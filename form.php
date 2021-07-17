
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PMS</title>
    
    <?php session_start();
    include '../includes/header_script.php'; ?>
</head>

<body>
 <div id="wrapper">

        <?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Add Employee</h1></center>
                </div>
        <!-- Navigation -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-default">
                            Add Employee
                        </div>
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST   " action="B.php">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="ename" class="form-control" placeholder="Employee Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" name="fname" class="form-control" placeholder="Father's Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="add"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type="text" class="form-control" name="mob" placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="form-control" name="exp">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Daily Wages</label>
                                            <input type="text" class="form-control" name="wage" placeholder="Daily Wages">
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name="dept">
                                                <option value="management">Management</option>
                                                <option value="btech">B-Tech</option>
                                                <option value="diploma">Diploma</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Session</label>
                                            <select class="form-control" name="session">
                                                <option value="20">20-21</option>
                                                <option value="21">21-22</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include '../includes/footer_script.php'; ?>

</body>

</html>
