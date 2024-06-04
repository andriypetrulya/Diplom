<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    
    <title>Login</title>
    
    <style>
    
        *{
            box-sizing: border-box;
        }
        
        body {
            margin: 0px 0;
            font-family: "Goldman", sans-serif;
            font-style: normal;
            
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            
            padding: 0;
        }
        
        .login-wrapper {
            max-width: 750px;
            width: 100%;
            padding:30px 0;
        }
        
        .login-wrapper h1 {
            font-size: 40px;
            font-weight: 400;
            text-align: center;
            color: #201CDA;
        }
        
        .login-form {
            max-width: 750px;
            width: 100%;
            padding: 60px 100px;
            border: 1px solid #e3e3e3;
            margin: 0 auto;
        }
        
        .input input {
            width: 100%;
            padding: 10px 20px;
            font-size: 30px;
        }
    
        .description-form {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        
        .authorization-btn {
            padding: 10px 30px;
            border-radius: 20px;
            background-color: #201CDA;
            color: #fff;
            text-decoration: none;
            line-height: 1.6;
            display: inline-block;
            margin-top: 50px;
            margin-bottom: 10px;
            border: none;
            cursor: pointer;
        }
        
        .text-center {
            text-align: center;
        }
        
        .margin-top-30 {
            margin-top: 30px;
        }
        
        .margin-30 {
            margin: 30px;
        }
        
        .display-block {
            display: block;
        }
    </style>
</head>
<body>
    
    <form action="scripts/login.php" method="post">
    <div class="login-wrapper">
        <h1>Login Page</h1>
        <div class="login-form">
            
            <p class="description-form">
            
            <?php if(isset($_GET['message'])) {
                echo $_GET['message'];
            } else {
                echo 'Welcome!';
            } ?>
            
            </p>
            <div class="input-group">
                <div class="input">
                    <p>Username</p>
                    <input type="text" name="username" required>
                </div>
                <div class="input">
                    <p>Password</p>
                    <input type="password" name="password" required>
                </div>
                <a class="margin-top-30 display-block" href="#">Forgot your password?</a>
            </div>
            
            <div class="text-center">
                <button type="submit" class="authorization-btn">Log in</button>
            </div>
            
            <div class="text-center">
                <p>First time here? <a href="register.php">Sign up</a></p>
            </div>
        </div>
        
        <div class="text-center margin-30">
            <p>This site is protected by Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
        </div>
    </div>
    </form>
    
</body>
</html>