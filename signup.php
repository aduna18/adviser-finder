<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Ika nang balang manayus-->
    <form>
        <div class="row g3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="middleName" class="form-label">Middle Name</label>
                <input type="text" name="middleName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="userName" class="form-label">User Name</label>
                <input type="text" name="userName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="usertype" class="form-label">User Type</label>
                <select name="usertype">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>
            <div class="col-12">
                <input class="btn btn-primary" type="button" name="submit" value="Submit">
            </div>
        </div>
    </form>
    <?php include './includes/script.php'; ?>
</body>

</html>