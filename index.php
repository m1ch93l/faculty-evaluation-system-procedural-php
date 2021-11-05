<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>BCC Faculty Evaluation System</title>
    <style>
        /*login form */
        body{
            margin: 0;
            padding:0;
            font-family: montserrat;
            height: 100vh;
            background-image: url("img/bcc_cover.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 1px 1px 5px 5px;
        }
        .center h1{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .txt_field{
            position: relative;
            margin: 30px 0;
        }
        .txt_field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
        }
        .txt_field label{
            position: relative;
            top: 50%;
            left: 5px;
            color: #000;
            transform: translateY(-50%);
            font-size: 20px;
            pointer-events: none;
        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: #000080;
            font-size: 18px;
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
        input[type="submit"]:hover{
            border-color: #2691d9;
            transition: .5s;
        }
        select{
            width: 50%;
            height: 30px;
            cursor: pointer;
        }
        option{
            font-size: 15px;
        }
        .login{
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>LOGIN</h1>
            <form action="php/check_password.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <div role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php } ?>
            <div class="txt_field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>   
            </div>
            <div class="txt_field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label >Select User Type:</label>
            </div>
            <select name="role" aria-label="Default select example">
                <option selected value="student">Student</option>
                <option value="faculty">Faculty</option>
                <option value="admin">Admin</option>
            </select>
            <div class="login"><input type="submit" value="Login"></div>
        </form>
    </div>
</body>
</html>
<?php }else {
	header("Location: dashboard.php");
} ?>