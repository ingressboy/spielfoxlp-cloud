<?php
session_start();
if (isset($_POST['Submit'])) {
    $login = array('USER' => 'PASSWORD');
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    if (isset($login[$Username]) && $login[$Username] == $Password) {
        $_SESSION['UserData']['Username']=$login[$Username];
        header("location:cp.php");
        exit;
    } else {
        $msg="<span style='clolor:red'>Invalid Login Details</span>";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login - SpielfoxLP-Cloud</title>
        <link rel="stylessheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="box">
            <h2>Login</h2>
            <?php if(isset($msg)){?>
            <?php echo $msg;?>
            <?php } ?>
            <form action="" method="post" name="Login_Form">
                <div class="inputBox">
                    <input type="text" name="Username" class="Input">
                    <label>Username</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="Password">
                    <label>Password</label>
                </div>
                <input type="submit" name="Submit" value="Login">
            </form>
        </div>
    </body>
</html>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(Server.jpeg);
    background-size: cover;
}
.box {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50% -50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, .8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
    border-radius: 10px;
}
.box h2 {
    padding: 0 0 30;
    margin: 0;
    color: royalblue;
    text-align: center;
}
.box .inputBox {
    position: relative;
}
.box .inputBox input {
    width: 100%;
    padding: 10px 0;
    font-size: 16;
    color: royalblue;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid royalblue;
    outline: none;
    background: transparent;
}
.box .inputBox label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16;
    color: royalblue;
    pointer-events: none;
    transition: .5s;
    }
.box .inputBox input:focus ~ label, 
.box .inputBox input:valid ~ label {
    top: -18;
    left: 0;
    color: skyblue;
    font-size: 12;
    }
.box input[type="submit"] {
    background: transparent;
    border: none;
    outline: none;
    color: royalblue;
    background: skyblue;
    padding: 20px 10px;
    cursor: pointer;
    border-radius: 5px;
}
</style>
