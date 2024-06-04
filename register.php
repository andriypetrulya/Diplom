<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    
    <title>Sign Up</title>
    
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
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        
        .login-wrapper h1 span {
            color: #201CDA;
        }
        
        .login-form {
            max-width: 750px;
            width: 100%;
            padding: 60px 100px;
           
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
        
        .col-40-percent {
            width: 40%;
        }
        
        .col-60-percent {
            width: 60%;
        }
        
        .columns {
            display: flex;
            align-items: center;
        }
        
        
    </style>
</head>
<body>
    
    <div class="columns margin-top-30">
        <div class="column col-40-percent">
            <img src="images/decorative/decorative-image.png" alt="">
        </div>
        <div class="column col-60-percent">
            <form action="scripts/register.php" method="post">
                <div class="login-wrapper">
                    <h1>Create your <span>FREE</span> SmartSafeKids account now</h1>
                    <div class="login-form">



                        <div class="input-group">
                            <div class="input">
                                <p>Name</p>
                                <input type="text" name="username" required>
                            </div>
                            <div class="input">
                                <p>Email</p>
                                <input type="email" name="email" required>
                            </div>
                            <div class="input">
                                <p>Password</p>
                                <input type="password" name="password" required>
                            </div>
                            <p> <input type="checkbox"> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="authorization-btn">Create an account</button>
                        </div>

                        <div class="text-center">
                            <p>Have an account? Click <a href="login.php">here</a> to sign in.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>