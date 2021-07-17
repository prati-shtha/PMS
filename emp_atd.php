<!DOCTYPE html>
<?php 
include '../includes/session_check.php';
include '../includes/connection.php';
error_reporting(0);
$a="SELECT * FROM employee";
$b=mysqli_query($con, $a);
//print_r($b);

if(isset($_POST['save']))
{
    mysqli_query($con, "DELETE FROM attendance WHERE date='".date('Y-m-d')."'");
    $present=$_POST['present'];
    //print_r($present);
    $absent=$_POST['absent'];
  //  print_r($absent);
    foreach ($present as $v){
        //echo $v.'<br>';
        mysqli_query($con, "INSERT INTO `attendance`(`emp_id`, `atd`, date) VALUES ('".$v."','P','".date('Y-m-d')."')");
    }
    foreach ($absent as $u){
        //echo $u;
        mysqli_query($con, "INSERT INTO `attendance`(`emp_id`, `atd`, date) VALUES ('".$u."','A','".date('Y-m-d')."')");
    }
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
    
    <script>
    function a(l){
        
        var xx="x"+l;
        var yy="y"+l;
        var c1=document.getElementById(xx);
        var c2=document.getElementById(yy);
        if(c1.checked){
            c2.checked=false;
        }
    }
    function b(l){
        
        var xx="x"+l;
        var yy="y"+l;
         var c1=document.getElementById(xx);
        var c2=document.getElementById(yy);
        if(c2.checked){
            c1.checked=false;
        }
        
    }
    
    
    
    
    
    </script>
    
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Attendance</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST">
                    <table class="table table-bordered table-responsive table-striped">
                    
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Mob.</th>
                            <th>Attendance</th>
                            
                        </tr>
                        <?php $j=1; 
                        while($res=mysqli_fetch_assoc($b)){ ?>
                        
                        <tr><?php
                               // print_r($res);
                        ?>
                            <td><?php echo $res['name']?></td>
                            <td><?php echo $res['father_name']?></td>
                            <td><?php echo $res['mobile_number']?></td>
                            <td><?php echo $res['department']?></td>
                            <td>
                                <input type="checkbox" name="present[]" id="x<?php echo $j;?>" onchange="a(<?php echo $j?>)"  checked value="<?php echo $res['employee_id']?>" >P
                                <input type="checkbox" name="absent[]" id="y<?php echo $j;?>" onchange="b(<?php echo $j?>)" value="<?php echo $res['employee_id']?>">A
                                
                            
                            
</td>
                        </tr>
                        <?php
                        
                        $j=$j+1;
                        
                        } ?>


                        
                    </table>
                        <input type="submit" name="save" value="save" class="btn btn-success pull-right">
                    </form>
                    
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
