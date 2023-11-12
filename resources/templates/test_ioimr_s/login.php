<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOIMR Welcome</title>
</head>
<body>
    <form action="<?php echo URL?>user/login" method="POST">
        <div class="form group">
            <label for="email">Correo electronico</label>
            <input name="email" type="text">
        </div>
        <div class="form group">
            <label for="password">Contraseña</label>
            <input name="password" type="text">
        </div>
        <input type="hidden" name="login" value="sent">
        <div class="form-group">
            <button type="sumbit" class="btn" value="send">SEND </button>
        </div>
    </form>
</body>
</html>