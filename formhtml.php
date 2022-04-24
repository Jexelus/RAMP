<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
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
            font-family: "Montserrat", "Arial", sans-serif;
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
            <div id="rectform"></div>
         <div class="fillform">
             <div class="p1">
             <p>Пожалуйста заполните информацию о себе</p>
             </div>
             <form action="form.php" method="post">
                 <div class="formg" id="aboutme">
                     <label class="text-field__label">Опишите себя</label>
                     <textarea id="adm" type="text" name="about" class="form-control" cols="30" rows="10" placeholder="Опишите себя" required>
                     </textarea>
                 </div>
                 <div class="formg" id="tel">
                     <label class="text-field__label">Введите телефон</label>
                     <input type="tel" name="tel" class="form-control" placeholder="Телефон" required>
                 </div>
                 <div class="formg" id="tg">
                    <label class="text-field__label">Введите свой Tg</label>
                    <input type="tg" name="tg" class="form-control" placeholder="Telegramm" required>
                 </div>
                 <div class="formg" id="vk">
                    <label class="text-field__label">Введите ссылку на VK</label>
                    <input type="vk" name="vk" class="form-control" placeholder="Cсылка на vk" required>
                 </div>
                 <div class="formg" id="town">
                     <label class="text-field__label">Укажите свой город</label>
                     <input type="town" name="town" class="form-control" placeholder="Ваш город" required>
                 </div>
                 <div class="formg" id="prof">
                 <label class="text-field__label">Род деятельности</label>
                    <input type="prof" name="prof" class="form-control" placeholder="Введите род деятельности" required>
                 </div>
                 <div class="formg">
                    <button type="submit" name="submit" id="sub"> 
                    <img src="./img/save.png" alt="join profile">
                    </button>
                 </div>
             </form>
         </div>   
        </div>
        

        
</body>
</html>