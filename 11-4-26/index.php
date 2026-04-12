<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
// Initialize
        $name = $email = $password = $number = $gender = $dob = $bg = "";
        $degrees = [];
        $error = "";
    ?>
    <fieldset>
<legend>Form </legend>

<form method="post" action = "handler.php">

    Name:
    <input type="text" name="name" value="<?php echo $name; ?>"><br><hr>

    Email:
    <input type="email" name="email" value="<?php echo $email; ?>"><br><hr>

    Password:
    <input type="password" name="password" value="<?php echo $password; ?>"><br><hr>

    Number:
    <input type="number" name="number" value="<?php echo $number; ?>"><br><hr>

    Gender:
    <input type="radio" name="gender" value="Male"
    <?php if ($gender=="Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
    <?php if ($gender=="Female") echo "checked"; ?>> Female

    <input type="radio" name="gender" value="Others"
    <?php if ($gender=="Others") echo "checked"; ?>> Others
    <br><hr>

    DOB:
    <input type="date" name="dob" value="<?php echo $dob; ?>"><br><hr>

    Degree:
    <input type="checkbox" name="degree[]" value="SSC"
    <?php if (in_array("SSC", $degrees)) echo "checked"; ?>> SSC

    <input type="checkbox" name="degree[]" value="HSC"
    <?php if (in_array("HSC", $degrees)) echo "checked"; ?>> HSC

    <input type="checkbox" name="degree[]" value="BSc"
    <?php if (in_array("BSc", $degrees)) echo "checked"; ?>> BSc

    <input type="checkbox" name="degree[]" value="MSc"
    <?php if (in_array("MSc", $degrees)) echo "checked"; ?>> MSc
    <br><hr>

    Blood Group:
    <select name="bg">
        <option value="">Select</option>
        <option value="A+" <?php if ($bg=="A+") echo "selected"; ?>>A+</option>
        <option value="B+" <?php if ($bg=="B+") echo "selected"; ?>>B+</option>
        <option value="O+" <?php if ($bg=="O+") echo "selected"; ?>>O+</option>
    </select>
    <br><hr>

    <input type="submit" name="submit">

</form>

</fieldset>
<?php
    if ($name == "" || $email == "" || $password == "" || $number == "" || 
        $gender == "" || $dob == "" || $bg == "" || empty($degrees)) {
        $error = "All fields are required!";
    }
    if ($error != "") {
        echo "<span style='color:red;'>$error</span>";
    }
?>

</body>
</html>