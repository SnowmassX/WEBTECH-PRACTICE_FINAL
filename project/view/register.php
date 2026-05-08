<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <header>

    </header>
    <main>
        <fieldset>
            <legend>Register</legend>
            <form action="../controller/register.php" method="post">
                <label for="name">Name<input type="text" name="name"></label><br>
                <label for="name">Email<input type="text" name="email"></label><br>
                <label for="name">Password<input type="text" name="password"></label><br>
                <label for="name">Confrim Password<input type="text" name="confrim_password"></label><br>
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" >Male
                    <input type="radio" name="gender" >Female
                    <input type="radio" name="gender" >Others
                </fieldset>
                <fieldset>
                    <legend>Education</legend>
                    <input type="checkbox" name="education">SSC
                    <input type="checkbox" name="education">HSC
                    <input type="checkbox" name="education">BSc
                    <input type="checkbox" name="education">MSc
                </fieldset>
                <input type="file" name="image" alt="insert photo"><br>
                <input type="submit" name="submit">
                <input type="reset">
            </form>
        </fieldset>
    </main>
    <footer>

    </footer>
</body>
</html>