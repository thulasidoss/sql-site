<?php
    session_start();
    include "connect.php";
    
    if(isset($_POST['Username']) && isset($_POST['Password'])){
        $Username=$_POST['Username'];
        $Password=$_POST['Password']; 
        $sql = "SELECT * FROM `data` WHERE `Username`='$Username' AND `Password`='$Password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo "Loggin In!";
        $_SESSION['FullName'] = $row['FullName'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['id'] = $row['id'];
        header("Location:reg.php");
        exit();
    }
    else {
            echo "Invalid username or password.";
    }
    
    /*
session_start();
// Generate a new session ID
session_regenerate_id(true);

// Set session variables
$_SESSION['Username'] = $Username;
$_SESSION['Password'] = $Password;

// Set the session cookie parameters
session_set_cookie_params([
    'lifetime' => 1,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

// Set the session ID cookie
setcookie(session_name(), session_id(), time() + 1, '/', true, true);

include "connect.php";
if(isset($_POST['Username']) && isset($_POST['Password'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    

    // Use prepared statements to prevent SQL injection attacks
    $stmt = $conn->prepare("SELECT * FROM `data` WHERE Username=?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if($row['Username'] === $Username && $row['Password'] === $Password){
            echo "Loggin In!";
            $_SESSION['FullName'] = $row['FullName'];
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['id'] = $row['id'];
            header("Location:reg.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
}*/
?>
