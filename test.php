<!DOCTYPE html>
<html>
<head>
    <style>
        div {
            margin-bottom: 10px;
        }
    </style>
<body>
    <h2>Registration Form</h2>
    <form action="connect.php" method="POST">
        
        <div>
            <label for="name">Name:</label>
            <input type="text" placeholder="your name" name="name">
        </div>

        <div>
            <label for="eamail">Email:</label>
            <input type="text" placeholder= "your email" name="email">
        </div>

        <div>
            <label for="password">password:</label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="Phone number">Phone number:<label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div>
            <Label for="name">Gender:<label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
        </div>

        <div>
            <label for="language-picker-select">language:</label>
            <select name="languages" id="language-picker-select">
                <option lang="en" value="English">English</option>
                <option lang="en" value="Arabic">Arabic</option>
                <option lang="en" value="" selected>select language</option>
            </select>
        </div>

        <div>
            <label for="name">ZipCode:</label>
            <input type="text" name="zipcode">
        </div>

        <div>
            <label for="name">About:</label>
            <input type="text" placeholder= "Write about yourself" name="about">
        </div>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>