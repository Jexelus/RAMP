<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
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
                    <h2>Регистрация</h2>
                    <p>Пожалуйста заполните поля для регестрации.</p>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label>Полное имя</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>    
                        <div class="form-group">
                            <label>Почта</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Подтверждение пароля</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Зарегестрироваться">
                        </div>
                        <p>Уже есть аккаунт? <a href="loginhtml.php">Тыкай</a>.</p>
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>