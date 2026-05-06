<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #2c3e50;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #3498db;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        article {
            flex: 3;
            background: white;
            padding: 20px;
            margin-right: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        aside {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 15px;
            background: #2c3e50;
            color: white;
            
        }

        button {
            padding: 10px 15px;
            border: none;
            background: #3498db;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #2980b9;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            article {
                margin-right: 0;
                margin-bottom: 20px;
            }
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

    <div class="container">
        <article>
            <h2>Welcome to the Home Page</h2>
            <p>This is a simple improved layout using HTML, CSS, and JavaScript.</p>

            <button onclick="showMessage()">Click Me</button>
            <p id="message"></p>
        </article>

        <aside>
            <h3>Sidebar</h3>
            <p>Useful links or info can go here.</p>
        </aside>
    </div>

    <footer>
        <p>Copyright © <span id="year"></span></p>
    </footer>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();

        function showMessage() {
            document.getElementById("message").textContent = "Thanks for clicking! 🎉";
        }
    </script>

</body>

</html>