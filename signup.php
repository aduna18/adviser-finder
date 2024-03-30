<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form>
        <!--Ika nang balang manayus-->
        <input type="text" name="firstName" placeholder="First Name" required="">
        <input type="text" name="middleName" placeholder="Middle Name" required="">
        <input type="text" name="lastName" placeholder="Last Name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="text" name="userName" placeholder="User Name" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <input type="button" name="submit" value="Submit">
    </form>
</body>

</html>