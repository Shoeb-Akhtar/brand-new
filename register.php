

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
    .container{
        height: 320px;
        width:400px;
        border:1px solid black;
        margin: 50px;
        border-radius: 10px;
        background-color:chartreuse;
    }
</style>
<body>
    <form action="" method="POST">
    <center>
        <div class="container">
            <center>
        <h1>
                    <i>
                    <font color="blue">
                        <u>Register</u>
                    </font>
                    </i>
                </h1> 
                     <label for=""> Name :</label> 
                     <input type="text" name="nmae"> <br> <br>
                     <label for="">Email :</label> 
                     <input type="email" name="mobile"> <br> <br>
                     <label for="">Password:</label>
                     <input type="password" name="password"> <br> <br>
                     <input type="submit" class="btn btn-primary" <?php header("Location:index.php")?>
                     name="next" value="SUBMIT"><br><br>
                     <a href="login.php">Go to Login</a>
                     <?php require 'script2.php';?>
</center>   
        </div>
        </center>
    </form>
</body>
</html>