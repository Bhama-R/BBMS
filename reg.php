<?php
include('connection.php');
session_start();
?>
<!--//collect form data
/*$NAME = $_POST['NAME'];
$ADDRESS = $_POST['ADDRESS'];
$EMAIL = $_POST['EMAIL'];
$PHONE = $_POST['PHONE'];
$BGROUP = $_POST['BGROUP'];
$GENDER = $_POST['GENDER'];
$HEIGHT = $_POST['HEIGHT'];
$WEIGHT = $_POST['WEIGHT'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$sql = "insert into tbl_user (NAME, ADDRESS, EMAIL, PHONE,BGROUP,GENDER,HEIGHT,WEIGHT,USERNAME,PASSWORD) VALUES ('NAME', 'ADDRESS', 'EMAIL', 'PHONE', 'BGROUP', 'GENDER', 'HEIGHT', 'WEIGHT', 'USERNAME', 'PASSWORD')";
if(mysqli_query($connection, $sql)){
    echo "record inserted";

}else{
    echo "record not inserted";
}
mysqli_close($connection);*/-->
<?php
if(isset($_POST["signup"]))
{
    $name=$_POST["name"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    $address=$_POST["address"];
    $dob=$_POST["dob"];
    $bgroup=$_POST["bgroup"];
    $cat=$_POST["category"];
    $qty=$_POST["qty"];
    $email=$_POST["email"];
    $cno=$_POST["cno"];
    if ($qty>450)
    {
        echo "<script>alert('The quantity of blood exceeds 450. Please reduce the amount.')</script>";
    }
    else
    {
        if($cat=='donor')
        {
            $da=date('Y-m-d',strtotime($dob));
            $query="insert into donor_reg (name,username,password,address,dob,bgroup,category,qty,email,cno) values ('$name','$uname','$pass','$address','$da','$bgroup','$cat','$qty','$email','$cno')";
            $result=mysqli_query($con,$query);
            $q="insert into login (username,password,category) values ('$uname','$pass','$cat')";
            mysqli_query($con,$q);
            if($result)
            {
                echo "<script>
                alert('Donor registration successful');
                window.location.href = 'login.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Donor registration failed')</script>";
                header("Location:reg.html");
            }
            
            //$res=mysqli_query($con,$q);
        }
        else
        {
            $da=date('Y-m-d',strtotime($dob));
            $query="insert into patient_reg (name,username,password,address,dob,bgroup,category,qty,email,cno) values ('$name','$uname','$pass','$address','$da','$bgroup','$cat','$qty','$email','$cno')";
            $q="insert into login(username,password,category) values('$uname','$pass','$cat')";
            mysqli_query($con,$q);
            $result=mysqli_query($con,$query);
            if($result)
            {
                echo "<script>
                alert('Patient registration successful');
                window.location.href = 'login.php';
                </script>";                
            }
            else
            {
                echo "<script>alert('Patient registration failed')</script>";
                header("Location:reg.html");
                
            }
        }
    }
}
?>