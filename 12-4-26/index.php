<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <legend>LOGIN</legend>
        <form action="handler.php" method = "post">
            ID <input type="number" name="id" ><br><hr>
            Password <input type="password" name="password"><br><hr>
            <input type="checkbox" name="check" value="checked"> Keep Me Logged In <br><hr>
            <input type="submit" name="submit" value="Submit"><br><hr>
        </form>
    </fieldset>
</body>
</html>