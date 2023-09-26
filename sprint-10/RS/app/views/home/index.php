<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <form action="<?= BASEURL; ?>/home/register" method="post">
        <label for="username" name="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>