<?php
session_start();
include '../includes/connection.php';
if($_GET['action']=='getatd'){
    $x=  mysqli_query($con, "SELECT atd FROM attendance WHERE emp_id='".$_SESSION['id']."' AND date='".$_GET['date']."'");
   $res=  mysqli_fetch_assoc($x);
    ?>
<table class="table table-bordered table-responsive table-hover">
    <tr>
        <th>Date</th>
        <th>Attendance</th>
    </tr>
    <tr>
        <td><?php echo $_GET['date'];?></td>
        <td><?php echo $res['atd'];?></td>
    </tr>
</table>
    
<?php }?>