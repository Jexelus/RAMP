<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<!--<script type="text/javascript">
    var lastResFind = ""; // последний удачный результат
    var copy_page = ""; // копия страницы в ихсодном виде
    function TrimStr(s) {
        s = s.replace(/^\s+/g, '');
        return s.replace(/\s+$/g, '');
    }
    function FindOnPage(inputId) {//ищет текст на странице, в параметр передается ID поля для ввода
        var obj = window.document.getElementById(inputId);
        var textToFind;

        if (obj) {
            textToFind = TrimStr(obj.value);//обрезаем пробелы
        } else {
            //
            alert("Введенная фраза не найдена");
            return;
        }
        if (textToFind == "") {
            alert("Вы ничего не ввели");
            return;
        }

        if (document.body.innerHTML.indexOf(textToFind) == "-1")
            URLReader(FindOnPage(inputId));
            alert("Ничего не найдено, проверьте правильность ввода!");

        if (copy_page.length > 0)
            document.body.innerHTML = copy_page;
        else copy_page = document.body.innerHTML;


        document.body.innerHTML = document.body.innerHTML.replace(eval("/name=" + lastResFind + "/gi"), " ");//стираем предыдущие якори для скрола
        document.body.innerHTML = document.body.innerHTML.replace(eval("/" + textToFind + "/gi"), "<a name=" + textToFind + " style='background:red'>" + textToFind + "</a>"); //Заменяем найденный текст ссылками с якорем;
        lastResFind = textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
        window.location = '#' + textToFind;//перемещаем скрол к последнему найденному совпадению
    }
</script>-->
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

              <!-- ебашу поиск-->
              <style>
                #text-to-find {
                    position: absolute;
                    width: 740px;
                    height: 40px;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    margin: auto;
                    background: rgba(255, 255, 255, 0.75);
                    border-radius: 30px; 
                    border: 0;
                    outline: 0;
                    padding-left: 30px; 
                    font-size: 20px;}
                #find {
                    height: 40px;
                    width: 40px;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 682px;
                    margin: auto;
                }
                #line {
                    width: 3px;
                    height: 41px;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 602px;
                    margin: auto;
                }
            </style>
            <form name="search" method="post" action="search.php">
            <input type="text" id="text-to-find" value="">
            <img src="img/zoom.png" id="find" />
            <img src="img/Rectanglezoom.png" id="line"/>
            </form>
            <!-- не ебашу поиск-->
</body>
</html>