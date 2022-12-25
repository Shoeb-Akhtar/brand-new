<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","registration");
    if(isset($_POST["action"])){
        if($_POST["action"]=="register"){
            register();
        }
        else if($_POST["action"]=="login"){
            login();
        }
    }
    function register(){
        global $conn;

        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        if(empty($name)|| empty($email)|| empty($password)){
            echo "Please Fill Out The Form";
            //exit;
        }
        $user=mysqli_query($conn,"SELECT * FROM tic_table WHERE email='$email'");
        if(mysqli_num_rows($user)>0){
            echo "User Name Already Taken";
        }
        $query="INSERT INTO tic_table VALUES('$name','$email','$password')";
        mysqli_query($conn,$query);
        echo"Register Successfully";

    }
    function login(){
        global $conn;

        $email=$_POST["email"];
        $password=$_POST["password"];

        $user=mysqli_query($conn," SELECT * FROM tic_table WHERE email='$email'");
        if(mysqli_num_rows($user)>0){
            $row=mysqli_fetch_assoc($user);
            if($password==$row["password"]){
                echo"Login Successfully";
                $_SESSION["login"]=true;
                $_SESSION["id"]=$row["id"];
            }
            else{
                echo "Wrong Password";
            }
        }
        else{
            echo "User Not Register";
        }
    }

?>