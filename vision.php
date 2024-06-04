<?php
    session_start();

    if (!isset($_SESSION['userid'])) {
        header("Location: login.php");
        exit();
    } else { 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <title>Vision</title>
    
    <style>
        body {
            font-family: "Goldman", sans-serif;
            font-style: normal;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1224px;
            width: 100%;
            margin: 0 auto;
        }
        
       
        
        .header-wrapper {
            background-color: #fff;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0;
        }
        
        .nav-panel {
            display: flex;
            align-items: center;
        }
        
        .nav-panel .menu {
            margin-left: 100px;
        }
        
        .menu {
            display: flex;
        }
        
        .menu a {
            text-decoration: none;
            margin-right: 30px;
            font-size: 18px;
        }
        
        .admin-panel {
            display: flex;
        }
        
        .logo a {
            font-size: 32px;
            text-decoration: none;
            font-weight: 400;
            color: #201CDA;
        }
        
        .text-center {
            text-align: center;
        }
        
        .authorization-btn {
            padding: 10px 30px;
            border-radius: 20px;
            background-color: #201CDA;
            color: #fff;
            text-decoration: none;
            line-height: 1.6;
            display: inline-block;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        
        .section {
            height: calc(100vh - 112px);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .section h2 {
            font-size: 30px;
            font-weight: 400;
            margin-bottom: 100px;
            font-family: "Goldman", sans-serif;
        }
        
        #visionimagebtn {
            background-position: center;
            padding: 10px;
            background-size: 60%;
            background-repeat: no-repeat;
            background-image: url(images/decorative/icon-btn.png);
            width: 60px;
            
            background-color: #201CDA;
            border: none;
            border-radius: 0px 15px 15px 0px;
            cursor: pointer;
        }
        
        #visionimageinput {
            background-color: #201CDA;
            padding: 20px 15px;
            border: none;
            outline: none;
            border-radius: 15px 0px 0px 15px;
            color: #fff;
            max-width: 615px;
            width: 415px;
            font-size: 26px;
        }
        
        #visiontextinput {
            background-color: #201CDA;
            padding: 20px 15px;
            border: none;
            outline: none;
            border-radius: 15px 0px 0px 15px;
            color: #fff;
            max-width: 615px;
            width: 415px;
            font-size: 26px;
        }
        
        #visiontextbtn {
            background-position: center;
            padding: 10px;
            background-size: 60%;
            background-repeat: no-repeat;
            background-image: url(images/decorative/icon-btn.png);
            width: 60px;
            
            background-color: #201CDA;
            border: none;
            border-radius: 0px 15px 15px 0px;
            cursor: pointer;
        }
        
        input::placeholder {
            color: #fff;
        }
        
        .flex {
            display: flex;
        }
        
        .input-group {
            margin: 0 20px;
        }
        
        #result {
            margin-bottom: 50px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="container">
            <div class="header">
                <div class="nav-panel">
                    <div class="logo">
                        <a href="index.html">SmartSafeKids</a>
                    </div>
                </div>
                
                <div class="admin-panel">
                    <p><?php echo $_SESSION['username']; ?> | <a href="logout.php">Выйти</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container section">
        <div class="text-center">
            
            <div id="result">
            <img src="images/decorative/decorative-image-3.png" alt="">
            <h2>Чим я можу вам допомогти сьогодні?</h2>
            
            </div>
            
            <div>
                <div class="columns flex">
                    <div class="column col-60-percent">
                        <div class="input-group flex">
                            <input id="visionimageinput" class="input" placeholder="Вставте лінк на зображення">
                            <button id="visionimagebtn"></button>
                        </div>
                    </div>
                    <div class="column col-60-percent">
                        <div class="input-group flex">
                            <input id="visiontextinput" class="input" placeholder="Повідомлення в SmartSafeKids..." >
                            <button id="visiontextbtn"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="scripts/script.js"></script>
    
    
</body>
</html>
<?php } ?>