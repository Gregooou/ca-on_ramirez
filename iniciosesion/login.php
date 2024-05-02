<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(../img/Fondologs.jpg) no-repeat;
            height: 100vh;
            font-family: sans-serif;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        @media screen and (max-width: 600px) {
            body {
                background-size: cover;
                overflow: hidden;
            }
        }

        .loginBox {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            min-height: 200px;
            background: #000000;
            border-radius: 10px;
            padding: 40px;
            box-sizing: border-box;
        }

        .user {
            margin: 0 auto;
            display: block;
            margin-bottom: 20px;
        }

        h3 {
            margin: 0;
            padding: 0 0 20px;
            color: #053783;
            text-align: center;
        }

        .loginBox input {
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #262626;
            outline: none;
            height: 40px;
            color: #fff;
            background: transparent;
            font-size: 16px;
            padding-left: 20px;
            box-sizing: border-box;
        }

        .loginBox input[type="submit"] {
            background: #053783;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
        }

        .loginBox a {
            color: #262626;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            display: block;
            margin-top: 10px;
        }

        a:hover {
            color: #00ffff;
        }

        p {
            color: #0000ff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="loginBox">
        <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="proceso_login.php" method="post">
            <div class="inputBox">
                <input type="text" name="Username" placeholder="Username" autocomplete="off">
                <input type="password" name="Password" placeholder="Password">
            </div>
            <input type="submit" value="Login">
        </form>
        <a href="#">Forget Password</a>
        <a href="sign_up.php">Sign-Up</a>
    </div>
</body>
</html>
