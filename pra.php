<!DOCTYPE html>
<?php
include '../includes/session_check.php';
//error_reporting(0);
include '../includes/connection.php';

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>PMS</title>
    <script type="text/javascript">
    //alert("hfhgfghf");
    $(document).ready(function(){
         $("#b").click(function(){
            
        var data={action:"losssalary",date1:$("#c1").val(),date2:$("#c2").val()};
        $.post("emp_ajax.php", data,function(r){
//            alert(r);
            $("#show").html(r).hide().fadeIn(5000);
        });
        });
//        
//        
    });
    
    
    
    
    
    
    
    </script>
    <?php include '../includes/header_script.php'; ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Salary Record</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                    <label>Start Date</label>
                    <input type="date" name="dt1" id="c1" class="form-control" required>
                </div>
                <div class="col-lg-4">
                    <label>End Date</label>
                    <input type="date" name="dt2" id="c2" class="form-control" required>
                </div>
                <div class="col-lg-2">
                    <br>
                    <button type="button" name="find" id="b" class="btn btn-success">Find</button>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12" id="show">
                    
                    
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
