<?php
include "db_conn.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($uname)){
        header("Location: loginpage.php?error=Username is Required!");
        exit();
    }else if(empty($pass)){
        header("Location: loginpage.php?error=Password is Required!");
        exit();
    }else{
        $sql = "SELECT * FROM education WHERE username='$uname' AND password='$pass' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass ) {
                if($row['status']==='1'){
                    $_SESSION['user'] = $row['username'];
                    $_SESSION['pass'] = $row['password'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['Name'];
                    $_SESSION['date'] = $row['dof'];
                    header('Location:index.php');
                }else{
                    header("Location: loginpage.php?error=You Are Banned");
                }
                
            }else{
                header("Location:loginpage.php?error=Incorrect Username or Password !");
                exit();
          }
  }else{
     header("Location:loginpage.php?error=Incorrect Username or Password !");
            exit();
      }
    } 
}else{
    header("Location:loginpage.php");
    exit();
}
  
?>