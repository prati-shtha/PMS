<?php
session_start();
include '../includes/connection.php';

if($_GET['action']=='getsalary'){
    
    $v=mysqli_query($con, "SELECT COUNT( DISTINCT date ) as x  FROM attendance WHERE date BETWEEN  '".$_GET['date1']."' AND  '".$_GET['date2']."'");
    $total=mysqli_fetch_assoc($v);
    $nn=mysqli_query($con, "SELECT daily_wages FROM employee WHERE employee_id='".$_SESSION['id']."' ");
    $res=  mysqli_fetch_assoc($nn);
    ?>
   
<table class="table table-bordered table-responsive table-striped">
    <tr>
        <th>Name</th>
        <th>Present/Total</th>
        <th>Wages</th>
        <th>Salary</th>
    </tr>
    <tr>
        <?php $w=  mysqli_query($con, "SELECT COUNT( DISTINCT atd ) as y  FROM attendance WHERE date BETWEEN  '".$_GET['date1']."' AND  '".$_GET['date2']."' AND emp_id='".$_SESSION['id']."' AND atd='P'");
        $r=  mysqli_fetch_assoc($w); 
        ?>
        <td><?php echo $_SESSION['name'];?></td>
        <td><?php echo $r['y']."/".$total['x'];?></td>
        <td><?php echo $res['daily_wages'];?></td>
        <td><?php echo 'Rs. '.$r['y']*$res['daily_wages'];?></td>
    </tr>
   </table> 
<?php }?>
    

