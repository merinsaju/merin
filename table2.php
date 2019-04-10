table2.php:
<?php
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$con=@mysqli_connect("localhost","root","123456")or die(mysqli_error($con));
echo "connected to database";
$db=@mysqli_select_db("SNGCE",$con)or die(mysqli_error());
echo "selected database";
$str="insert into course values($cid,'$cname')";
if ($con->multi_query($str) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $str . "<br>" . $con->error;
}

$res=@mysqli_query($str)or die(mysqli_error($con));
if($res>0)
{
echo "record created";
}
?>


