<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <main>
        <fieldset>
            <legend>Register</legend>

            <form action="../controller/register.php"
                method="post"
                enctype="multipart/form-data" id="registerForm">

                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <br><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <br><br>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password">
                <br><br>

                <fieldset>
                    <legend>Gender</legend>

                    <input type="radio"
                        name="gender"
                        id="gender_male"
                        value="Male">
                    <label for="gender_male">Male</label>

                    <input type="radio"
                        name="gender"
                        id="gender_female"
                        value="Female">
                    <label for="gender_female">Female</label>

                    <input type="radio"
                        name="gender"
                        id="gender_others"
                        value="Others">
                    <label for="gender_others">Others</label>
                </fieldset>

                <br>

                <fieldset>
                    <legend>Education</legend>

                    <input type="checkbox"
                        name="education[]"
                        id="ssc"
                        value="SSC">
                    <label for="ssc">SSC</label>

                    <input type="checkbox"
                        name="education[]"
                        id="hsc"
                        value="HSC">
                    <label for="hsc">HSC</label>

                    <input type="checkbox"
                        name="education[]"
                        id="bsc"
                        value="BSc">
                    <label for="bsc">BSc</label>

                    <input type="checkbox"
                        name="education[]"
                        id="msc"
                        value="MSc">
                    <label for="msc">MSc</label>
                </fieldset>

                <br>

                <label for="image">Upload Image:</label>
                <input type="file" name="image" id="image">

                <br><br>

                <input type="submit" name="submit" id="submit" value="Register" >
                <input type="reset" value="Reset">

            </form>
        </fieldset>
    </main>

    <h1 id="head"></h1>
    <script src="../assets/script/register.js"></script>
</body>
    
</html>