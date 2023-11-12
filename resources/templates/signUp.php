<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <form action="../index.php?cl=usuario&me=signUp" method="POST">
        <label for="name_user">Name</label>
        <input type="text" name="name_user"  placeholder="name">
        <label for="email_user">Email</label>
        <input type="email" name="email_user"  placeholder="email"> 
        <label for="psw_user">Password</label>
        <input type="password" name="psw_user"  placeholder="password">
        <input type="submit" name="signUp" value="sent">
    </form>
    <div>
        <a href="templates/login.php">i have already had an account here</a>
    </div>
</body>
</html>