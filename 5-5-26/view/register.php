<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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
            width: 400px;
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

        .form-group {
            margin: 10px 0;
        }

        .gender, .education {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 5px;
        }

        .gender label, .education label {
            display: flex;
            align-items: center;
            gap: 5px;
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

        footer {
            text-align: center;
            padding: 10px;
            background: #2c3e50;
            color: white;
        }

        .error {
            color: red;
            font-size: 13px;
            white-space: pre-line;
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
        <legend>Registration</legend>

        <form action="../controller/register.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            
            <input type="text" id="name" name="name" placeholder="Full Name">
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="password" id="confirm" placeholder="Confirm Password">

            <div class="form-group">
                <label>Gender:</label>
                <div class="gender">
                    <label><input type="radio" name="gender" value="Male"> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                    <label><input type="radio" name="gender" value="Other"> Other</label>
                </div>
            </div>

            <div class="form-group">
                <label>Education:</label>
                <div class="education">
                    <label><input type="checkbox" name="education[]" value="SSC"> SSC</label>
                    <label><input type="checkbox" name="education[]" value="HSC"> HSC</label>
                    <label><input type="checkbox" name="education[]" value="BSc"> BSc</label>
                    <label><input type="checkbox" name="education[]" value="MSc"> MSc</label>
                </div>
            </div>

            <input type="date" name="dob" id="dob">
            <input type="file" name="photo" id="photo">

            <div class="error" id="errorMsg"></div>

            <button type="submit">Register</button>
        </form>
    </fieldset>
</div>

<footer>
    <p>Copyright © <span id="year"></span></p>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();

    function validateForm() {
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value;
        let confirm = document.getElementById("confirm").value;
        let gender = document.querySelector('input[name="gender"]:checked');
        let education = document.querySelectorAll('input[name="education[]"]:checked');
        let dob = document.getElementById("dob").value;
        let photo = document.getElementById("photo").value;

        let error = "";

        if (name === "") error += "Name required\n";
        if (email === "") error += "Email required\n";
        if (password.length < 6) error += "Password must be at least 6 characters\n";
        if (password !== confirm) error += "Passwords do not match\n";
        if (!gender) error += "Select gender\n";
        if (education.length === 0) error += "Select at least one education\n";
        if (dob === "") error += "Select date of birth\n";
        if (photo === "") error += "Upload photo\n";

        if (error !== "") {
            document.getElementById("errorMsg").textContent = error;
            return false;
        }

        return true;
    }
</script>

</body>
</html>