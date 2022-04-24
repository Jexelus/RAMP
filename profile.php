<?php
    require_once "config.php";
    require_once "session.php";

    if($_SESSION['userid'])
    {
    $query = $dbh->prepare("SELECT * FROM users WHERE id = :userid"); 
    $query->bindParam(':userid', $_SESSION['userid'], PDO::PARAM_STR);
    $query->execute();
    $row = $query->fetch();
    // echo $row['name'];
                                  
    }else {header("location: index.php");}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
        <body style="margin:0;padding:0">
           <style>
               body 
               {
               background:
               url(./img/BG.png)
               no-repeat
               fixed;   
               }
           </style>
           
            <div class="upper">
               <div class="log">
                <a href="/index.php">  
                    <img src="./img/log.png" alt="logo">
                </a> 
            </div>
               <div class="sign">
                   <a href="/registration.php">
                     <img src="./img/signin.png" alt="sign in">
                   </a>
               </div>
               <div class="porof">
                   <a href="/profile.php">
                     <img src="./img/user.png" alt="profile">
                   </a>
               </div>
           </div>
        <div class="content">
           <div id="rectmain"></div>
           <div id="rectprof"></div>
        </div>
        <div class="info">
            <div class="aboutme">
                <p>Обо мне</p>
            </div>
            <div class="afdb">
                <p><?= $row['about']?></p>
            </div>
        </div>
        <div class="profile">
            <a href="formhtml.php">
                <img id="spf" src="./img/SPF.png" alt="spf">
            </a>
            <div class="profname">
                <ppm>
                <?= $row['name'] ?>
                </ppm>
            </div> 
            <div class="logout">
                <a href="/logout.php">
                    <img src="./img/exit.png" alt="exit">
                </a>
            </div>
            <div class="email"> 
                <a href="mailto: <?= $row['email'] ?>">
                    <p><?= $row['email']?></p>
                </a>
            </div>
            <div class="ID">
                <p>ID:<?= $row['id']?></p>
            </div>
            <div class="profes">
                <p>Профессия:<p>
                <div class="profe">
                <?= $row['prof']?>
                </div>
            </div>
            <div class="town">
            <p><?= $row['town']?></p>
            </div>
        <div class="menu" id="menu">
            <style>
               #menu 
                {
                    position: absolute;
                    text-decoration: none;
                    color: #FFFFFF;
                    top: 0;
                    left: 0;
                    margin-left: 72%;
                    margin-top: 27.8%;
                    width: 220px;
                    text-align: left;
                    line-height: 12px;
                } 
            </style>
            <div class="projects">
                <a href="projects.php">
                 <p>Проекты</p>
                </a>
            </div>
            <div class="achivments">
                <a href="achivments.php">
                    <p>Достижения</p>
                </a>
            </div>
            <div class="Meets">
                <a href="https://leader-id.ru">
                    <p>Мероприятия</p>
                </a>
            </div>
            <div class="vk">
                <a href="<?= $row['vk']?>">
                    <p>vk: <?= $row['vk']?></p>
                </a>
            </div>
            <div class="tg">
                <p>tg:<?= $row['tg']?></p>
            </div>
            <div class="tel">
                <a href="tel:<?= $row['tel']?>">
                tel:<?= $row['tel']?>
                </a>
             </div>
        </div>
        </div>
    </body>
</html>