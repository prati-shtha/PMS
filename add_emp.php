<!DOCTYPE html>
<?php 
include '../includes/session_check.php';
include '../includes/connection.php';

$a="SELECT * FROM employee";
$b=mysqli_query($con, $a);
//print_r($b);

if(isset($_GET['sub'])){
    
    $query="INSERT INTO `employee`(`name`, `father_name`, `gender`, `email`, `password`, `address`, `mobile_number`, `date_of_birth`, `experience`, `daily_wages`, `department`, `session`) VALUES ('".$_GET['ename']."','".$_GET['fname']."','".$_GET['gen']."','".$_GET['email']."','".$_GET['pass']."','".$_GET['add']."','".$_GET['mob']."','".$_GET['dob']."','".$_GET['exp']."','".$_GET['wage']."','".$_GET['dept']."','".$_GET['session']."')";
    mysqli_query($con, $query);
    header("location:add_emp.php");
    
}
if(isset($_GET['del'])){
    //print_r($_GET);
    
    $query1="DELETE FROM `employee` WHERE employee_id='".$_GET['hhh']."'";
    mysqli_query($con, $query1);
    header("location:add_emp.php");
    
}

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PMS</title>

    <?php include '../includes/header_script.php'; ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="GET">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="ename" class="form-control"  placeholder="Employee Name" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" name="fname" class="form-control" placeholder="Father's Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label><br>
                                            <input type="radio"  name="gen" value="M"> M
                                            <input type="radio" name="gen" value="F"> F
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" required placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="form-control" required placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" required name="add"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type="text" class="form-control" required maxlength="10" name="mob" placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="date" class="form-control" name="dob" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="form-control" name="exp" required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Daily Wages</label>
                                            <input type="text" class="form-control" name="wage" required placeholder="Daily Wages">
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name="dept" required>
                                                
                                                <option value="management">Management</option>
                                                <option value="btech">B-Tech</option>
                                                <option value="diploma">Diploma</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Session</label>
                                            <select class="form-control" name="session" required>
                                                <option value="20">20-21</option>
                                                <option value="21">21-22</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default" name="sub">Save</button>
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
            
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <table class="table table-bordered table-responsive table-striped">
                        
                        <tr>
                            <th>Options</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>E-Mail</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Mob.</th>
                            <th>Experience</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Wages</th>
                            <th>Session</th>
                            <th>Date</th>
                        </tr>
                        <?php while($res=mysqli_fetch_assoc($b)){ ?>
                        <tr><?php
                               // print_r($res);
                        ?><td>
                            <form>
                                <input type="hidden" name="hhh" value="<?php echo $res['employee_id']?>">
                                <input type="submit" name="del" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                            
                            
</td>
                            <td><?php echo $res['employee_id']?></td>
                            <td><?php echo $res['name']?></td>
                            <td><?php echo $res['father_name']?></td>
                            <td><?php echo $res['gender']?></td>
                            <td><?php echo $res['email']?></td>
                            <td><?php echo $res['password']?></td>
                            <td><?php echo $res['address']?></td>
                            <td><?php echo $res['mobile_number']?></td>
                            <td><?php echo $res['date_of_birth']?></td>
                            <td><?php echo $res['experience']?></td>
                            <td><?php echo $res['daily_wages']?></td>
                            <td><?php echo $res['department']?></td>
                            <td><?php echo $res['session']?></td>
                            <td><?php echo date("d-M-Y h:i:s",  strtotime($res['reg_at']));?></td>
                            
                        </tr>
                        <?php } ?>


                        
                    </table>
                    
                    
                </div>
                
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
