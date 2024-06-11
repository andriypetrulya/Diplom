<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <title>Get Start</title>
    
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
    </style>
</head>
<body>
   
    <?php
    session_start();

    if (!isset($_SESSION['userid'])) {
        header("Location: login.php");
        exit();
    } else {
    
    ?>
   
    <div class="header-wrapper">
        <div class="container">
            <div class="header">
                <div class="nav-panel">
                    <div class="logo">
                        <a href="index.html">SmartSafeKids</a>
                    </div>
                </div>
                
                <div class="admin-panel">
                    <p><?php echo $_SESSION['username']; ?> | <a href="logout.php">Вийти</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container section">
        <div class="text-center">
            <img src="images/decorative/decorative-image-2.png" alt="">
            <h2>Let’s start</h2>
            <a href="vision.php" class="authorization-btn">Go</a>
        </div>
    </div>
    
    <?php } ?>
</body>
</html>
