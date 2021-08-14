<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            background: #a5a5a5;
        }

        .loginForm {
            width: 300px;
            background: white;
            padding: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0px 15px 20px 0px #000000c4;
        }

        input {
            display: block;
            width: 100%;
            box-sizing: border-box;
            margin: 10px;
            padding: 5px;
        }

        input[type="submit"] {
            color: white;
            background: dodgerblue;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <!--====================================================
    Author : Johirul Islam
    Github : https://github.com/johirulshaky
    Facebook : https://facebook.com/johirulshaky
    Linkedin : https://linkedin.com/in/johirulshaky
    Instagram: https://www.instagram.com/johirulshaky/
    =====================================================-->

    <?php
    session_start();
    
    if(isset($_SESSION['email'])){
        header("Location: http://localhost/php/login/index.php");
    }
    
    if(isset($_POST['login'])){
        define('EMAIL' , 'contact@gmail.com');
        define('PASSWORD' , '1234');
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if($email == EMAIL){
            if($password == PASSWORD){
                $_SESSION['email'] = $email;
                header("Location: http://localhost/php/login/index.php");
            }else{
                echo "<h2 style='color:red; width:300px; margin: 100px auto -70px; text-align:center'>Password not match</h2>";
            }
        }else{
            echo "<h2 style='color:red; width:300px; margin: 100px auto -70px; text-align:center'>Email not match</h2>" ;
        }
    }
    ?>

    <div class="loginForm">
        <form action="" method="POST">
            <input type="email" name="email" placeholder="contact@gmail.com" required>
            <input type="password" name="password" placeholder="1234" required>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>

</html>
