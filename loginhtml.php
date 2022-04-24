<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <style>
            body
            {
                font-family: "Montserrat", "Arial", sans-serif;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Вход</h2>
                    <p>Заполните поля для входа в аккаунт.</p>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label>Почта</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Войти">
                        </div>
                        <p>Нету аккаунта? <a href="registrationHTML.php">Тыкай</a>.</p>
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>