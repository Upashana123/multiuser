<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="formaction.php" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Phone: <input type="phone" name="phone"><br>
        Password: <input type="password" name="password"><br>
        Gender: <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female <br>
        Degree: <select name="degree">
            <option value="">Select</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
        </select><br>
        Language: <input type="checkbox" name="language[]" value="Bengali">Bengali
        <input type="checkbox" name="language[]" value="English">English
        <input type="checkbox" name="language[]" value="Hindi">Hindi <br>
        Upload: <input type="file" name="file" id=""><br>
        <button name="btn">Submit</button>
    </form>
</body>
</html>