<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost', 'root', '', 'new') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['Username']) && isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password'])){
            $FullName=$_POST['FullName'];
            $Username=$_POST['Username'];
            $Email=$_POST['Email'];
            $Password=$_POST['Password'];
            /*$FullName=htmlspecialchars($FullName);*/
            $sql="INSERT INTO `data` (`FullName`,`Username`,`Email`,`Password`) VALUES ('$FullName','$Username','$Email','$Password')";

            $query = mysqli_query($conn,$sql);
            if($query){
                header('Location: account.html');
            }
            else{
                echo'Error Occurred';
            }
        }
    }
?>