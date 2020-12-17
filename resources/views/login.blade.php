<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="/login">
            @csrf
            <h2>Iniciar sesión</h2>
            <section class="username-section">
                <input type="email" name="email" id="email" placeholder="Usuario" class="textbox">
            </section>
            <section class="password-section">
                <input type="password" name="password" id="password" placeholder="Contraseña" class="textbox">
            </section>
            <section class="actions-section">
                <button class="button btn-success">Iniciar sesión</button>
            </section>
        </form>
    </div>
</body>
</html>