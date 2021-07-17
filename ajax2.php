<?php
include '../includes/connection.php';

if($_GET['action']=='getsalary'){
    
    $v=mysqli_query($con, "SELECT COUNT( DISTINCT date ) as x  FROM attendance WHERE date BETWEEN  '".$_GET['date1']."' AND  '".$_GET['date2']."'");
    $total=mysqli_fetch_assoc($v);
    $nn=mysqli_query($con, "SELECT employee_id,name,daily_wages FROM employee");?>
<table class="table table-bordered table-responsive table-striped">
    <tr>
        <th>Emp Id</th>
        <th>Name</th>
        <th>Present/Total</th>
        <th>Wages</th>
        <th>Salary</th>
    </tr>
<?php while($res=mysqli_fetch_assoc($nn)){?>
    <tr>
        <?php $w=  mysqli_query($con, "SELECT COUNT( DISTINCT atd ) as y  FROM attendance WHERE date BETWEEN  '".$_GET['date1']."' AND  '".$_GET['date2']."' AND emp_id='".$res['employee_id']."' AND atd='P'");
        $r=  mysqli_fetch_assoc($w); 
        ?>
        <td><?php echo $res['employee_id']; ?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $r['y']."/".$total['x'];?></td>
        <td><?php echo $res['daily_wages'];?></td>
        <td><?php echo 'Rs. '.$r['y']*$res['daily_wages'];?></td>
    </tr>
<?php
} ?>
   </table> 
<?php }?>
    

