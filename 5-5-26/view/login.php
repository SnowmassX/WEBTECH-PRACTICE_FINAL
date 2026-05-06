<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background: #f4f6f9;
        }

        header {
            background: #2c3e50;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        fieldset {
            width: 350px;
            padding: 20px;
            border-radius: 8px;
            border: none;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #2980b9;
        }

        .extra {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .extra a {
            color: #3498db;
            text-decoration: none;
        }

        .error {
            color: red;
            font-size: 13px;
            white-space: pre-line;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #2c3e50;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>My Website</h1>
    <nav>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="home.php">Home</a>
    </nav>
</header>

<div class="main">
    <fieldset>
        <legend>Login</legend>

        <form action="../controller/login.php" method="post" onsubmit="return validateForm()">
            
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="password" id="password" name="password" placeholder="Password">

            <div class="error" id="errorMsg"></div>

            <button type="submit">Login</button>

            <div class="extra">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </form>
    </fieldset>
</div>

<footer>
    <p>Copyright © <span id="year"></span></p>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();

    function validateForm() {
        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value;

        let error = "";

        if (email === "") error += "Email required\n";
        if (password === "") error += "Password required\n";

        if (error !== "") {
            document.getElementById("errorMsg").textContent = error;
            return false;
        }

        return true;
    }
</script>

</body>
</html>