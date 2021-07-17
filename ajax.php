<?php
include '../includes/connection.php';
error_reporting(0);
if($_POST['action'] == 'getdata'){
    $b=mysqli_query($con, "SELECT * FROM attendance WHERE date='".$_POST['date']."'");?>

    
    <table class="table table-bordered table-responsive table-striped">
                        
                        <tr>
                            <th>Sr No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Attendance</th>
                            
                        </tr>
                        <?php
                        $i=1;
                        
                        while($res=mysqli_fetch_assoc($b)){ ?>
                        
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $res['emp_id'];
                            $n=  mysqli_query($con, "SELECT name FROM employee WHERE employee_id='".$res['emp_id']."'");
                            $nn=  mysqli_fetch_assoc($n);
                            
                            
                            ?></td>
                            <td><?php echo $nn['name'];?></td>
                            <td><?php echo $res['atd'];?></td>
                            
                        </tr>
 <?php } ?>
                    </table>
<!--<?php} if($_GET['action']=='getsalary'){
    
    $v=mysqli_query($con, "SELECT COUNT( DISTINCT date ) as x  FROM attendance WHERE date BETWEEN  '".$_GET['date1']."' AND  '".$_GET['date2']."'");
    $total=mysqli_fetch_assoc($v);
    $nn=  mysqli_query($con, "SELECT employee_id,name,daily_wages FROM employee");?>
<table class="table table-bordered table-responsive table-striped">
    <tr>
        <th>Emp Id</th>
        <th>Name</th>
        <th>Present/Total</th>
        <th>Wages</th>
        <th>Salary</th>
    </tr>
<?php while($res=  mysqli_fetch_assoc($nn)){?>
    <tr>
        <?php $w=  mysqli_query($con, "SELECT COUNT( DISTINCT atd ) as y  FROM attendance WHERE date BETWEEN  '".$_GET['date1']."' AND  '".$_GET['date2']."' AND employee_id='".$res['employee_id']."' AND atd='P'");
        $r=  mysqli_fetch_assoc($w); 
        ?>
        <td><?php echo $res['employee_id']; ?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $r['y']."/".$total['x'];?></td>
        <td><?php echo $res['daily_wages'];?></td>
        <td><?php echo 'Rs. '.$r['y']*$res['daily_wages'];?></td>
    </tr>



<?php

}?>
-->   </table> 
<?php } 
 
    

