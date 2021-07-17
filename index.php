<!DOCTYPE html>

<?php
include '../includes/session_check.php';
include '../includes/connection.php';
//print_r($_SESSION);

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>PMS</title>
<!--    <script>
    
    $(document).ready(function(){
               
        $("#x").hide();
        $("#y").click(function(){
            $("#x").show();
        });
    });
    
    </script>-->

    <?php include '../includes/header_script.php'; ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
           
                </div>
                
                
                
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
<!--         /#page-wrapper 
<button class="btn btn-success" id="y">show</button>-->
    <div>
    <!-- /#wrapper -->
<?php include '../includes/footer_script.php'; ?>

</body>

</html>
